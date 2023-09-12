
<html
lang="en"
class="light-style layout-menu-fixed"
dir="ltr"
data-theme="theme-default"
data-assets-path="../assets/"
data-template="vertical-menu-template-free">
<head>
<meta charset="utf-8" />
<meta
name="viewport"
content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
<title>Dashboard | Swishrelief</title>
<meta name="description" content="" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<link rel="icon" type="image/x-icon" href="/img/favicon/favicon.ico" />
<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet"/>
<!-- Icons. Uncomment required icon fonts -->
<link rel="stylesheet" href="{{url('css/boxicons.css')}}"/>
<!-- Core CSS -->
<link rel="stylesheet" href="{{url('css/core.css')}}">
<link rel="stylesheet" href="{{url('css/theme-default.css')}}">
<link rel="stylesheet" href="{{url('css/demo.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
.btn.btn-secondary.dropdown-toggle.import {
background: inherit;
color: black;
border: none;
box-shadow: none;
}

i.nav-icon {
padding-right: 13px;
}
.dropdown.show button.btn.btn-secondary.dropdown-toggle.import {
box-shadow: none;
}


  .activelinks a {
  color: #07ff8c;
  }
  
  .activelinks a:hover {
  color: #07ff8c;
  }
  
  .activelinks .dropdown-menu {
  display: block !important;
  }
  ul#myNavbar .dropdown-menu {
  position: inherit !important;
  top: 0 !important;
  transform: inherit !important;
  width: 100%;
  border-radius: 0px;
  }
  
  a.dropdown-item {
  color: #222;
  }
  
  a.dropdown-item.activelinks {
  color: #07ff8c;
  }
  </style>
  
<script type="text/javascript">
  var url = window.location.href; 
  document.querySelectorAll("#myNavbar a").forEach((single_cat,index)=>{
  if (url == single_cat.href) {
  single_cat.closest('li').classList.add("activelinks")
  single_cat.closest('.dropdown-item').classList.add("activelinks")
  }
  
  })
  </script>
</head>
<body>
<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
<div class="layout-container">
<!-- Menu -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
<div class="app-brand demo">
<a href="javascript:void(0);" class="app-brand-link">
<span class="app-brand-text demo menu-text fw-bolder ms-2"><a class="navbar-brand" href="#"><img src="{{ url('assets/images/logo/admin_logo.png')}}" style="width: 100px;height: auto;margin: 50%;"></a></span>
</a>
<a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
<i class="bx bx-chevron-left bx-sm align-middle"></i>
</a>
</div>
<div class="menu-inner-shadow"></div>
<ul class="menu-inner py-1" id="myNavbar">
<!-- Dashboard -->
<li class="menu-item active nav-item">
<a class="nav-link" href="{{url('/patient-listing')}}"> <i class="nav-icon fas fa-table"></i> Medical shop </a>
</li>
<li class="menu-item active">
{{-- <a class="nav-link" href="{{url('/discharge_patient')}}"><i class="nav-icon fa fa-tachometer" aria-hidden="true"></i> Discharged patients</a> --}}
</li>

<li class="menu-item active nav-item">
<a class="nav-link" href="{{url('/patient-form')}}"> <i class="nav-icon fa fa-address-card-o" aria-hidden="true"></i> Add Patient</a>
</li>


</aside>





<!-- close -->

