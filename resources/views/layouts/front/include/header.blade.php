<!doctype html>
<html lang="en">

<head>

  <meta charset="UTF-8">

  <link rel="stylesheet" href="{{url('css/custom.css')}}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="images/contentimg/fav.png">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

  <script src="{{url('front/js/home.js')}}"></script>



  <title>Swishrelief</title>
  <link rel="icon" type="image/x-icon" href="{{ url('front/images/img/Mask-Group-61.png')}}" width="50px" height="50px">

</head>

<body>
  <!-- navbar start -->
  <header class="header text-center text-lg-start bg-light text-muted">
    <section class="container header d-flex justify-content-center justify-content-lg-between p-4 align-items-center">
      <div class=" me-5 d-none d-lg-block">
   
      </div>
      <div class="me-5 d-none d-lg-block">
        <img src="{{ url('assets/images/logo/admin_logo.png')}}" alt="logo" style="width: 100px;height: auto;">
      </div>
      <div class="button_head">
        @if(Auth::User())
        <a href="{{ url('frontened-logout')}}"><button class="signin"><i class="fa-solid fa-user"></i>Logout</button></a>
        @else
        <a href="{{ url('login')}}"><button class="signin"><i class="fa-solid fa-user"></i> SIGN IN</button></a>
        @endif
        <br>
        <!-- <a href="{{ url('front/sign-up')}}"><button type="button" class="btn btn-primary header">START FREE TRIAL</button></a> -->
      </div>
    </section>
	
	<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
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
<!--     <div class="container ">
      <nav class="navbar navbar-expand-lg navbar-light border-bottom">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="menus">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="{{url('/')}}">HOME</a>
            </li>
           
              <li class="nav-item">
                <div class="dropdown">
                  <button class="dropdown-toggle nav-link dropbtn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <a class="nav-link " aria-current="page" href="#"></a>
                  </button>
                  <ul class="dropdown-menu dropdown-content" aria-labelledby="dropdownMenuButton1">
                   
                  </ul>
                </div>
              </li>
            <?php 
          
               ?>
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="#"></a>
              </li>
           
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="{{url('/membership')}}">MEMBERSHIP</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="search" type="submit">Search</button>
          </form>
        </div>
        <hr>
      </nav>
    </div> -->
  </header>
  <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({
        pageLanguage: 'en'
      }, 'google_translate_element');
      var $googleDiv = $("#google_translate_element .skiptranslate");
      var $googleDivChild = $("#google_translate_element .skiptranslate div");
      $googleDivChild.next().remove();

      $googleDiv.contents().filter(function() {
        return this.nodeType === 3 && $.trim(this.nodeValue) !== '';
      }).remove();
    }
  </script>
  <script>
    window.onload = function() {
      document.getElementById('logout-form').onclick = function() {
        document.getElementById('logout-form').submit();
        return false;
      };
    };
  </script>
  <script type="text/javascript">
    $(function() {
      var url = window.location.href;
      // alert(url);
      $("#menus a").each(function() {
        if (url == (this.href)) {
          $(this).closest("li").addClass("actives");

        } else {
          $(this).closest("li").removeClass("actives");
        }

      });
    });
  </script>
  <script type="text/javascript">
    $(window).scroll(function() {
      if ($(this).scrollTop() > 120) {
        $('.header_white').addClass('fixed');
      } else {
        $('.header_white').removeClass('fixed');
      }
    });
  </script>