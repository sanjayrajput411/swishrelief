<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\MedicalStoreList;
use App\Models\SubscriptionPlan;
use App\Models\PatientType;
use App\Models\Orders;
use App\Models\Prices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use DB;
use Image;

class CustomerController extends Controller
{
    /** validation*/
    private function check_order_exit($order_id)
    {
        if (Orders::where('order_id', '=', $order_id)->exists() == 'true') { 
            return true;
        } else {  
            return false;
        }
    } 
     /**register user */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'bail|required|string|max:255',
            'mobile' => 'bail|required|numeric|digits:10',
            'email' => 'bail|required|string|email|max:255|unique:users|email:rfc,dns',
            'password' => 'bail|required| min:4|confirmed',
            'password_confirmation' => 'bail|required| min:4'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'validation_errors' => $validator->messages(),
            ], 422);
        }
        /**validation ok */
        $otp = rand(1000, 9999);
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'mobile' => $request->input('mobile'),
            'password' => Hash::make($request->input('password')),
            'OTP' =>  $otp
        ]);
        if ($user) {
            return response()->json([
                'status' => true,
                'userid' => $user->id,
                'username' => $user->name,
                'otp' => $otp,
                'message' => 'Registered Successfully',
            ], 200);
        }
    }
        /*** register - add address  */
    public function add_address(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'latitude' => 'bail|required',
            'longitude' => 'bail|required',
            'address' => 'bail|required'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'validation_errors' => $validator->messages(),
            ], 422);
        } else {
            $user_info = user::find($request->user_id);
            if (isset($user_info)) {
                try {
                    user::where('id', $request->user_id)
                        ->update([
                            'latitude' => $request->latitude,
                            'longitude' => $request->longitude,
                            'address' => $request->address
                        ]);
                    $json['status'] = true;
                    $json['message'] = "update user success.";
                    return  response()->json($json, 200);
                } catch (\Exception $e) {
                    return response()->json(['status' => 'error', 'message' => 'Failed to update user : ' . $e->getMessage()], 500);
                }
            } else {
                return response()->json(['status' => false, 'errors' => 'Customer not found'], 404);
            }
        }
    }
    /**login user */
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'bail|required|email|email:rfc,dns',
            'password' => 'bail|required'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'validation_errors' => $validator->messages(),
            ], 422);
        } else {
            /**validation ok */
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                $authenticated_user = Auth::user();
                if ($authenticated_user->id > 0) {
                    $user = User::find($authenticated_user->id);
                    // $update_otp = User::where('email', '=', $request->email)->update(['remember_token' => $token]);                   
                    $json['status'] = true;
                    $json['message'] = "Login success.";
                    $json['data'] = $user;
                    $json['token'] = $user->createToken('MyApp')->accessToken;
                    return  response()->json($json, 200);
                }
            }
            return response()->json(['status' => false, 'message' => 'Invalid Credentials.', 'data' => ''], 400);
        }
    }
    /*** register - otp varfied */
    public function otp_verified(Request $request)
    {  
        $validator = Validator::make($request->all(), [
            'otp' => 'bail|required|numeric|digits:4',
            'userid' => 'bail|required|numeric'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'validation_errors' => $validator->messages(),
            ], 422);
        } else {
            $user_info = user::find($request->post('userid'));
            if (isset($user_info)) {
                if ((int)$user_info->otp == (int)$request->otp) {
                    $json['status'] = true;
                    $json['message'] = "Login success.";
                    $json['data'] = $user_info;
                    $json['token'] = $user_info->createToken('MyApp')->accessToken;
                    return  response()->json($json, 200);
                } else {
                    return response()->json(['status' => false, 'errors' => 'Otp code not Acceptable'], 406);
                }
            } else {
                return response()->json(['status' => false, 'errors' => 'Customer not found'], 404);
            }
        }
    }
    /** register - upload image */
    public function upload_image(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'profile_image' => 'bail|required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'userid' => 'bail|required|numeric'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'validation_errors' => $validator->messages(),
            ], 422);
        } else {
            $user_info = User::find($request->userid);
            if (!$user_info) {
                return response()->json(['status' => false, 'errors' => 'Customer not found'], 404);
            }
            if ($request->hasFile('profile_image')) {
                $image = $request->file('profile_image');
                // Define the path where you want to store the compressed image
                $path = public_path('profile_image/');
                // Make the directory if it doesn't exist
                if (!file_exists($path)) {
                    mkdir($path, 0755, true);
                }
                // Generate a unique filename
                $filename = uniqid() . '.' . $image->getClientOriginalExtension();
                // Create an instance of the Intervention Image class
                $img = Image::make($image->getRealPath());
                // Compress the image (adjust the quality as needed, e.g., 80 for 80% quality)
                $upload =  $img->save($path . $filename, 30);

                if ($upload) {
                    $update =  User::where('id', '=', $request->userid)->update(['image' => $filename]);
                    if ($update) {
                        return response()->json(['status' => true,'message' => 'Image uploaded successfully'], 201);
                    }
                }
            }
            return response()->json(['status' => false,'message' => 'Image upload failed. Please try again.'], 500);
        }
    }
    /** Change password */
    public function change_password(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'old_password' => 'bail|required',
            'password' => 'bail|required',
            'password_confirmation' => 'bail|required|min:8|same:password',
        ]);
        if ($validator->fails()) {
            return response()->json(
                [
                    'validation_errors' => $validator->messages(),
                ],
                422
            );
        } else {
            $userId = Auth::id();
            $user_info = user::find($userId);
            $new_password = Hash::make($request->password);
            $oldPassword = $request->old_password;
            $oldHashedPassword = $user_info->password;
            if (isset($user_info)) {
                if (Hash::check($oldPassword, $oldHashedPassword)) {
                    $update_password = User::where('id', '=', $user_info->id)->update(['password' => $new_password]);
                    if ($update_password) {
                        return response()->json(['status' => true, 'message' => 'Password update successfully'], 200);
                    }
                } else {
                    return response()->json(['status' => false, 'message' => 'old password and user password not match'], 422);
                }
            }
        }
    }
    /** forgot password */
    public function forgot_password(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'bail|required|email|email:rfc,dns',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'validation_errors' => $validator->messages(),
            ], 422);
        } else {
            $user_info = user::where('email', $request->email)->first();
            $status = Password::sendResetLink(
                $request->only('email')
            );
            return response()->json(['status' => true,"message" => "Password reset link sent on your email id"],200);
        }
    }
    /***eidt profile */
    public function edit_profile(Request $request)
    {
        $json = [];
        $user_info = user::find(Auth::id());
        $json = [
            'name' => $user_info->name ? $user_info->name : '',
            'email' => $user_info->email ? $user_info->email : '',
            'mobile' => $user_info->mobile ? $user_info->mobile : '',
            'address' => $user_info->address ? $user_info->address : ''
        ];
        return response()->json(['status' => true, 'message' => 'success', 'profile_info' => $json], 200);
    }
    /*** update profile */
    public function update_profile(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'bail|required',
            'email' => 'bail|required|email|email:rfc,dns',
            'mobile' => 'bail|required|numeric|digits:10',
            'address' => 'bail|required',
        ]);
        if ($validator->fails()){
            return response()->json([
                'validation_errors' => $validator->messages(),
            ], 422);
        }

        $userDetails = Auth::user();  // To get the logged-in user details
        if (isset($userDetails)) {
            $user_info = User::find($userDetails->id);  
            if (!$user_info) {
                return response()->json(['status' => false, 'message' => 'user not exit'], 404);
            }
            $user_info->name = $request->name;
            $user_info->email = $request->email;
            $user_info->mobile = $request->mobile;
            $user_info->address = $request->address;
            /***update data */
            if ($user_info->save()) {
                return response()->json(['status' => true, 'message' => 'Customer information updated successfully.'], 200);
            } else {
                return response()->json(['status' => false, 'message' => 'Customer information was not updated.'], 304);
            }
        }
    }
    /*** search medicial store*/
    public function search(Request $request)
    {
        $json = [];
        $results  = MedicalStoreList::where('store_name', 'LIKE', "%$request->search_key%")->get();
        if ($results) {
            return response()->json(['status' => true, 'store_info' => $results], 200);
        } else {
            return response()->json(['status' => false, 'store_info' => []], 404);
        }
    }
    /*** subscription plan_dynamic */
    public function subscription_plan(Request $request)
    {
        $SubscriptionPlan = SubscriptionPlan::where('is_delete', 0)->get();
        if ($SubscriptionPlan) {
            return response()->json(["status" => true, 'subscription_plan' => $SubscriptionPlan], 200);
        } else {
            return response()->json(["status" => false, 'subscription_plan' => [], 'message' => 'Data not found'], 404);
        }
    }
    /*** create order - Get store list */
    public function store_list(Request $request)
    {
        $json =[];
        $result_stores = MedicalStoreList::orderBy('store_id', 'DESC')->get();  
        if (count($result_stores) > 0) {  
            foreach($result_stores as $var){
               unset($var->created_at);
               unset($var->updated_at);
               $json[] = $var;
            }           
            return response()->json(["status" => true, 'Medical_store_list' => $json], 200);
        } else {
            return response()->json(["status" => false, 'Medical_store_list' => [], 'message' => 'Data not found'], 404);
        }
    }
    /***create_order - medicine*/
    public function create_order(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "store_id" => 'bail|integer|required',
            "medicine_qty" => 'bail|integer|required'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'validation_errors' => $validator->messages(),
            ], 422);
        }
        /***add order */
        try {
            $orders = new Orders();
            $orders->user_id = Auth::id();
            $orders->store_id = $request->store_id;
            $orders->medical_qty = $request->medicine_qty;
            if ($orders->save()) {
                return response()->json(['success' => true, 'message' => 'Order created successfully', 'last_insert_id' => $orders->id], 200);
            }
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Failed to create the order: ' . $e->getMessage()], 500);
        }
    }
    /***create_order - pickup date */
    public function update_pickup_order(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "order_id" => 'bail|integer|required',
            "select_pickup_date" => 'bail|required',
            "select_pickup_time" => 'bail|required'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'validation_errors' => $validator->messages(),
            ], 422);
        }
        /***update order */
        try { 
            $update_order = Orders::where("order_id",$request->order_id)->update(["pickup_date"=>$request->select_pickup_date, "pickup_time"=>$request->select_pickup_time,]);
            if (!$update_order) {
                return response()->json(['success' => false, 'message' => ' Failed to  Order update', 'last_insert_id' => ''], 500);
            }else{
                return response()->json(['success' => true, 'message' => 'Order update successfully', 'last_insert_id' => $request->order_id], 200);     
            }
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Failed to create the order: ' . $e->getMessage(),'last_insert_id' => ''], 500);
        }
    }
    /***create_order - delivery date */
    public function update_delivery_order(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "order_id" => 'bail|integer|required',
            "select_delivery_date" => 'bail|required',
            "select_delivery_time" => 'bail|required',
            "address" => 'bail|required',
            "note" => 'bail|required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'validation_errors' => $validator->messages(),
            ], 422);
        }
        /***update order */
        try { 
            $update_order = Orders::where("order_id",$request->order_id)->update([
                 "delivery_date"=>$request->select_delivery_date,
                 "delivery_time"=>$request->select_delivery_time,
                 "address"=>$request->address,
                 "note"=>$request->note
                ]);
            if (!$update_order) {
                return response()->json(['success' => false, 'message' => ' Failed to  Order update', 'last_insert_id' => ''], 500);
            }else{
                return response()->json(['success' => true, 'message' => 'Order update successfully', 'last_insert_id' => $request->order_id], 200);     
            }
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Failed to create the order: ' . $e->getMessage(),'last_insert_id' => ''], 500);
        }
    }
    /*** create order - Get store list */
    public function patient_type_list(Request $request)
    {
        $json=[];
        $result_patient_type = PatientType::orderBy('id', 'DESC')->get();  
        if (count($result_patient_type) > 0) 
        {   
            foreach ($result_patient_type as $var) {
                unset($var->created_at);
                unset($var->updated_at);
                $json[] = $var;
            }
            return response()->json(["status" => true, 'patient_type_list' => $json], 200);
        } else {
            return response()->json(["status" => false, 'patient_type_list' => $json, 'message' => 'Data not found'], 404);
        }
    }
    /***create_order - patient_type */
    public function update_patient_type(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "order_id" => 'bail|integer|required',
            "patient_id" => 'bail|required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'validation_errors' => $validator->messages(),
            ], 422);
        }
        /***update order */
        try { 
            $update_order = Orders::where("order_id",$request->order_id)->update([
                 "patient_id"=>$request->patient_id,
                ]);
            if (!$update_order) {
                return response()->json(['success' => false, 'message' => ' Failed to  Order update', 'last_insert_id' => ''], 500);
            }else{
                return response()->json(['success' => true, 'message' => 'Order update successfully', 'last_insert_id' => $request->order_id], 200);     
            }
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Failed to create the order: ' . $e->getMessage(),'last_insert_id' => ''], 500);
        }
    }
    /***create order - checkout */
    public function order_checkout(Request $request)
    {
        if(!isset($_GET['order_id']) || ($_GET['order_id'] == '') || ($_GET['order_id'] == '0') || ($this->check_order_exit($_GET['order_id']) != 'true'))
        {
            return response()->json(['status'=>  false,'message'=> 'Order id not correct'], 500);
        }
        $json = [];
        /**price */
        $result_prices = Prices::orderBy('id', 'DESC')->get('price');
        if (count($result_prices) > 0) {
            foreach ($result_prices as $var) {
                unset($var->created_at);
                unset($var->updated_at);
                $json = $var;
            }
            $json['order_id'] = $_GET['order_id'];   /// order_id
            $json['delivery_price'] = '18';   /// delivery_price
            $json['total'] = (int)$json['price'] + (int)$json['delivery_price'];   /// total price
            $order_result = orders::where('order_id','=',$_GET['order_id'])->first('medical_qty');
            $json['qty'] = $order_result->medical_qty ? $order_result->medical_qty : '0';  /// oder quentity
            /**final response */
            return response()->json(["status" => true, 'price_details' => $json], 200);
        } else {
            return response()->json(["status" => false, 'price_details' => $json, 'message' => 'Data not found'], 404);
        }
    }
    /** after payment done status update */
    public function payment_done_status(Request $request){
     dd($request->all());
    }
}
