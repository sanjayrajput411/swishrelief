<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
/**before loin */
Route::post('/register', [CustomerController::class, 'register']);
Route::post('/add_address', [CustomerController::class, 'add_address']);
Route::post('/login', [CustomerController::class, 'login']);
Route::post('/otp_verified', [CustomerController::class, 'otp_verified']);
Route::post('/upload_image', [CustomerController::class, 'upload_image']); 
Route::post('/forgot_password', [CustomerController::class, 'forgot_password']);  
/**after loin */
Route::group(['middleware' => ['auth:api']], function () {
    Route::post('/change_password', [CustomerController::class, 'change_password']); 
    Route::get('/edit_profile', [CustomerController::class, 'edit_profile']); 
    Route::post('/update_profile', [CustomerController::class, 'update_profile']); 
    Route::post('/search', [CustomerController::class, 'search']); 
    Route::post('/create_order', [CustomerController::class, 'create_order']); 
    Route::get('/subscription_plan', [CustomerController::class, 'subscription_plan']); 
});
