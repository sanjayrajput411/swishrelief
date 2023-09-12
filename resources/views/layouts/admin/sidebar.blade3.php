<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title> Political Parties </title>
   <!-- Google Font: Source Sans Pro -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <!-- Font Awesome Icons -->
   <link rel="stylesheet" href="{{asset('/plugins/fontawesome-free/css/all.min.css')}}">
   <!-- IonIcons -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
   <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
   <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
   <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
   <!-- Theme style -->
   <link rel="stylesheet" href="{{asset('/dist/css/adminlte.min.css')}}">
   <style>
      section.content {
      margin-top: 5em;
      }
      nav.main-header.navbar.navbar-expand.navbar-white.navbar-light {
      position: fixed;
      top: 0;
      width: 100%;
      }
      body:not(.layout-fixed) .main-sidebar {
      height: inherit;
      min-height: 100%;
      position: fixed;
      top: 0;
      }
   </style>
</head>
<div class="wrapper">
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
   <!-- Left navbar links -->
   <ul class="navbar-nav">
      <li class="nav-item">
         <a class="nav-link" data-widget="pushmenu" href="#" role="button"><img src="https://webwatt.com/election/public/images/toggle.png"></a>
      </li>
      <!-- <li class="nav-item d-none d-sm-inline-block">
         <a href="{{url('/home')}}" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
         <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();" style="margin-top: 4px;color: blue;">
         {{ __('Logout') }}
         </a>
         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
         </form>
      </li> -->
   </ul>

 <ul class="user_drop">
         <div class="notification_icon" id="readMessage">
            <button onclick="HouserepReadMsg()"><i class="fa fa-bell" aria-hidden="true"></i></button>
            <span id="unreadMsg">0</span>
         </div>
         <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Abhishek
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                             <!--  <a class="dropdown-item" href="https://webwatt.com/election/public/partymemberprofile">My Account</a>
               
               <a class="dropdown-item" href="https://webwatt.com/election/public/representiativenotesList">
                  Notes
               </a> -->
               <a class="dropdown-item logout" href="https://webwatt.com/election/public/logout" onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
                  Logout
               </a>
               <form id="logout-form" action="https://webwatt.com/election/public/logout" method="POST" class="d-none">
                  <input type="hidden" name="_token" value="ldqreKVLHEkA3FrJLL5PVZ3gWSN3NRGSR88qHjQT">               </form>
            </div>

         </div>
      </ul>

   <!-- Right navbar links -->
   <ul class="navbar-nav ml-auto">
      <li class="nav-item">
         <div class="navbar-search-block">
            <form class="form-inline">
               <div class="input-group input-group-sm">
                  <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                  <div class="input-group-append">
                     <button class="btn btn-navbar" type="submit">
                     <i class="fas fa-search"></i>
                     </button>
                     <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                     <i class="fas fa-times"></i>
                     </button>
                  </div>
               </div>
            </form>
         </div>
      </li>
   </ul>
</nav>
<!-- /.navbar -->
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
   <div class="logo_sidebar">
      <a href="#"><img src="https://webwatt.com/election/public/images/logo.svg"></a>
   </div>
   <!-- Brand Logo -->
   <!--    <a href="{{url('/home')}}" class="brand-link">
      <img src="{{asset('dist/img/election.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Political </span>
      </a> -->
   <!-- Sidebar -->
   <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!--  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
         <div class="image">
             <img src="{{asset('dist/img/admin.jpg')}}" class="img-circle elevation-2" alt="User Image">
         </div>
         <div class="info">
             <a href="#" class="d-block">Admin</a>
         </div>
         </div> -->
      <!-- Sidebar Menu -->
      <nav class="mt-2">
         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
               <a href="#" class="nav-link">
                  <p>
                     Political Party
                     <i class="right fas fa-angle-left"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview" style="display: none;">
                  <li class="nav-item">
                     <a href="{{url('/politicalpartiesaccount')}}" class="nav-link">
                        <p>Political Parties Account</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{url('/politicalpartiesusers')}}" class="nav-link">
                        <p>Political Parties Users</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{url('')}}" class="nav-link">
                        <p>Election candidates</p>
                     </a>
                  </li>
               </ul>
            </li>
            <li class="nav-item">
               <a href="{{url('')}}" class="nav-link">
                  <p>Results</p>
               </a>
            </li>
            <li class="nav-item">
               <a href="{{url('/publicusers')}}" class="nav-link">
                  <p>Public Users</p>
               </a>
            </li>
            <li class="nav-item">
               <a href="{{url('')}}" class="nav-link">
                  <p>Staff</p>
               </a>
            </li>
            <li class="nav-item">
               <a href="#" class="nav-link">
                  <p>
                     Election Structure
                     <i class="right fas fa-angle-left"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview" style="display: none;">
                  <li class="nav-item">
                     <a href="{{url('/politicaleparties')}}" class="nav-link">
                        <p>Total Political Parties</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{url('/pollingunits')}}" class="nav-link">
                        <p>Polling Unit</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{url('/federalelection')}}" class="nav-link">
                        <p>Federal Election</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{url('/lga')}}" class="nav-link">
                        <p>LGA</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{url('/ward')}}" class="nav-link">
                        <p>Ward</p>
                     </a>
                  </li>
               </ul>
            </li>
            <!--  <li class="nav-item menu-open">
               <a href="#" class="nav-link active">
                   <p>
                      Results
                       <i class="right fas fa-angle-left"></i>
                   </p>
               </a>
               <li class="nav-item">
                       <a href="{{url('/politicaleparties')}}" class="nav-link">
                           <i class="far fa-circle nav-icon"></i>
                           <p>Political Parties </p>
                       </a>
                   </li>
                   <li class="nav-item">
                       <a href="{{url('/pollingunits')}}" class="nav-link">
                           <i class="far fa-circle nav-icon"></i>
                           <p>Polling Units </p>
                       </a>
                   </li>
                   <li class="nav-item">
                       <a href="{{url('/federalelection')}}" class="nav-link">
                           <i class="far fa-circle nav-icon"></i>
                           <p>Federal Election </p>
                       </a>
                   </li>
                   <li class="nav-item">
                       <a href="{{url('/lga')}}" class="nav-link">
                           <i class="far fa-circle nav-icon"></i>
                           <p>Lga </p>
                       </a>
                   </li>
                   <li class="nav-item">
                       <a href="{{url('/ward')}}" class="nav-link">
                           <i class="far fa-circle nav-icon"></i>
                           <p>Ward </p>
                       </a>
                   </li> 
                   <li class="nav-item">
                       <a href="{{url('/user-list')}}" class="nav-link">
                           <i class="far fa-circle nav-icon"></i>
                           <p>User List </p>
                       </a>
                   </li>  -->
         </ul>
      </nav>
      <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
</aside>
<!-- /.content-wrapper -->
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
   <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
<!-- Main Footer -->
<!-- <footer class="main-footer">
   <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
   All rights reserved.
   <div class="float-right d-none d-sm-inline-block">
     <b>Version</b> 3.2.0
   </div>
   </footer>  -->
<!-- ./wrapper -->
<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{asset('/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE -->
<script src="{{asset('/dist/js/adminlte.js')}}"></script>
<!-- OPTIONAL SCRIPTS -->
<script src="{{asset('/plugins/chart.js/Chart.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="{{asset('dist/js/demo.js')}}"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('/dist/js/pages/dashboard3.js')}}"></script>
<!-- parent class active sidebar menu -->
<script type="text/javascript">
   jQuery(function($) {
      $("ul a")
         .click(function(e) {
            var link = $(this);
   
            var item = link.parent("li");
   
            if (item.hasClass("actives")) {
               item.removeClass("actives").children("a").removeClass("actives");
            } else {
               item.addClass("actives").children("a").addClass("actives");
            }
   
            if (item.children("ul").length > 0) {
               var href = link.attr("href");
               link.attr("href", "#");
               setTimeout(function() {
                  link.attr("href", href);
               }, 300);
               e.preventDefault();
            }
         })
         .each(function() {
            var link = $(this);
            if (link.get(0).href === location.href) {
               link.addClass("actives").parents("li").addClass("actives");
               return false;
            }
         });
   });
</script>
<!-- close -->