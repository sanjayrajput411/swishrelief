 
     <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar" style="width:77%;margin-right:15px;">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
               
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- User -->
            <div class="head_main">
                <!-- <a href="https://webwatt.com/Theinsiderupdate/">Home</a> -->
            </div>
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="https://netmaxims.in/projects/powerofourvoice/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="dropdown">
                            <div class="dropbtn">
                             <img src="https://netmaxims.in/projects/powerofourvoice/assets/img/avatars/1.png"  class="dropdown-content" />
                            <a href="#">Link 1</a>
                          </div>
                          </div>
                          <div class="flex-grow-1">
                            <small class="text-muted">Admin- Swishrelief</small>
                          </div>
                        </div>
                      </a>
                    </li>
                      <a class="dropdown-item" href="{{url('/frontened-logout')}}">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    <li>
                      <a class="dropdown-item" href="{{url('/frontened-logout')}}">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
  <div class="dropdown">
                    <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                        <span class="caret"></span></button>
                    <ul class="dropdown-menu" style="">
                        <li><a href="#">Setting</a></li>
                        <li><a href="#">Account</a></li>
                        <li><a href="{{url('/frontened-logout')}}">Logout</a></li>
                    </ul>
                </div>
                <li class="nav-item dropdown" >
       
                <!--/ User -->
              </ul>
            </div>
    </div>
    </div>
          </nav>
          
 <style>

.head_main a {
    color: #006838;
    font-size: 18px;
    font-family: 'Public Sans';
    text-decoration: none;
}
.head_main a:hover{
  color: #006838;
    font-size: 18px;
    font-family: 'Public Sans';
    text-decoration: none;
}
.dropbtn {
    background-color: #04AA6D;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
}

ul.dropdown-menu {
    border: 0px;
    background: #f8f8f8;
    padding: 0px 10px;
    min-width: 110px;
}

ul.dropdown-menu li a {
    font-size: 13px;
    color: #000;
    border-bottom: 1px solid #ccc;
    width: 100%;
    display: inline-block;
    padding-bottom: 2px;
    margin-bottom: 1px;
}

.dropdown button {
    background: unset;
    border: 0px;
    padding: 0px;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

h1.heading_main {
    font-size: 28px;
}

.pop-up-btn {
    background: #006838;
    font-size: 14px;
    color: white;
    padding: 10px 10px 10px 10px;
    border-radius: 5px;
    border: none;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
    </style>
