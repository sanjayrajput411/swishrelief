<x-app-layout>

@include('layouts.admin.sidebar')
<!DOCTYPE html>
<html>
   <head>
      <title>Dashboard | Category</title>
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
      <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
      <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
      <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
   </head>
   <body>


      <div class="container" style="max-width: calc(1440px - calc(1.625rem * 2));
         width: 80%;
         margin-right: 0px;
         float: right;
         }">

         <div class="viewListingData">
            
   

         </div>
      </div>
   </body>
</html>
<style>
   body {
   background: #F1F2F3 !important;
   }

   .mainhead.printButton h1 {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.mainhead.printButton h1 a {
    font-size: 18px;
    color: #000;
}

.mainhead.printButton h1 a:hover {
    text-decoration: none;
    color: #36987d;
}

.viewListingData p {
    border: 1px solid #ccc;
    padding: 10px;
    height: 46px;
}

   .form-group {
   padding-top: 10px;
   }
   .mainhead {
   padding-top: 20px;
   padding-bottom: 10px;
   }
   form {
   background: white;
   padding: 0px 20px 20px 20px;
   border-radius: 6px;
   }
   label {
   color: #1D3557;
   font-size: 16px;
   font-weight: 500;
   padding-bottom: 5px;
   }
   input::placeholder{
   color: #B7C0CC !important;
   font-size: 16px !important;
   font-weight: 400;
   }
   #select {
   color: gray;
   }
   #select option {
   color: black;
   }
   input {
   background: #ffffff !important;
   border: 1px solid #CCD7E6 !important;
   border-radius: 5px !important;
   }
   .input-group-append {
   cursor: pointer;
   }
   .secondaryhead{
   padding: 10px 10px 10px 10px;
   margin-bottom: 20px;
   border-bottom: 5px solid #DDE9E6 !important;
   }
   .head {
   background: #36987D;
   border-top-right-radius: 6px;
   border-top-left-radius: 6px;
   padding: 10px 10px 10px 10px;
   /* margin-bottom: 20px; */
   }
   .secondaryhead h1{
   font-size: 25px;
   margin-bottom: 0px;
   font-weight: 500;
   }
   .mainhead h1{
   font-size: 30px;
   margin-bottom: 10px;
   font-weight: 500;
   }
   .head h1 {
   font-size: 25px;
   color: white;
   margin-bottom: 0px;
   font-weight: 400;
   /* font-family: Inter; */
   }
   .submitbox {
   margin: 40px;
   display: flex;
   justify-content: center;
   }
   button.cancle {
   font-size: 18px;
   border-radius: 40px;
   padding: 10px 30px 10px 30px;
   font-weight: 500;
   margin-right: 16px;
   }
   button.Submit{
   font-size: 18px;
   border-radius: 40px;
   padding: 10px 30px 10px 30px;
   font-weight: 500;
   background: #309A98;
   color: #ffffff;
   border: none;
   }
   button.Submit:hover{
   background: #ffffff;
   color:#309A98;
   border:1px solid #309A98 ;
   }

   .form-control {
    border: 1px solid #ccc !important;
    padding: 10px;
    height: 46px;
    border-radius: 0px !important;
}
</style>
 @include('layouts.admin.footer')

</x-app-layout>
