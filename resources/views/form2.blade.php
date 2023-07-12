<!DOCTYPE html>
<html lang="en">

<head>
  {{-- <title>Material Able bootstrap admin template by Codedthemes</title> --}}
  <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 10]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  <!-- Meta -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <meta name="keywords"
    content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
  <meta name="author" content="Codedthemes" />
  <!-- Favicon icon -->
  <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
  <!-- Google font-->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
  <!-- waves.css -->
  <link rel="stylesheet" href="{{ asset('assets/pages/waves/css/waves.min.css') }}" type="text/css" media="all">
  <!-- Required Fremwork -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap/css/bootstrap.min.css') }}">
  <!-- themify-icons line icon -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/themify-icons/themify-icons.css') }}">
  <!-- ico font -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/icofont/css/icofont.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/font-awesome/css/font-awesome.min.css') }}">
  <!-- Style.css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.mCustomScrollbar.css') }}">

</head>

<body>
  <!-- Pre-loader start -->
  {{-- <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
  <!-- Pre-loader end -->
  <div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">
      <nav class="navbar header-navbar pcoded-header">
        <div class="navbar-wrapper">
          <div class="navbar-logo">
            {{-- <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
              <i class="ti-menu"></i>
            </a> --}}
            <div class="mobile-search waves-effect waves-light">
              <div class="header-search">
                <div class="main-search morphsearch-search">
                  <div class="input-group">
                    <span class="input-group-prepend search-close"><i class="ti-close input-group-text"></i></span>
                    <input type="text" class="form-control" placeholder="Enter Keyword">
                    <span class="input-group-append search-btn"><i class="ti-search input-group-text"></i></span>
                  </div>
                </div>
              </div>
            </div>
            {{-- <a href="index.html">
              <img class="img-fluid" src="assets/images/logo.png" alt="Theme-Logo" />
            </a> --}}
            <a class="mobile-options waves-effect waves-light">
              <i class="ti-more"></i>
            </a>
          </div>
          <div class="navbar-container container-fluid">
            {{-- <ul class="nav-left">
              <li>
                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
              </li>
              <li>
                <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                  <i class="ti-fullscreen"></i>
                </a>
              </li>
            </ul> --}}
            <ul class="nav-right">
              <li class="header-notification">
                <a href="#!" class="waves-effect waves-light">
                  <i class="ti-bell"></i>
                  <span class="badge bg-c-red"></span>
                </a>
                <ul class="show-notification">
                  <li>
                    <h6>Notifications</h6>
                    <label class="label label-danger">New</label>
                  </li>
                  <li class="waves-effect waves-light">
                    <div class="media">
                      <img class="d-flex align-self-center img-radius" src="assets/images/avatar-2.jpg"
                        alt="Generic placeholder image">
                      <div class="media-body">
                        <h5 class="notification-user">John Doe</h5>
                        <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                        <span class="notification-time">30 minutes ago</span>
                      </div>
                    </div>
                  </li>
                  <li class="waves-effect waves-light">
                    <div class="media">
                      <img class="d-flex align-self-center img-radius" src="assets/images/avatar-4.jpg"
                        alt="Generic placeholder image">
                      <div class="media-body">
                        <h5 class="notification-user">Joseph William</h5>
                        <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                        <span class="notification-time">30 minutes ago</span>
                      </div>
                    </div>
                  </li>
                  <li class="waves-effect waves-light">
                    <div class="media">
                      <img class="d-flex align-self-center img-radius" src="assets/images/avatar-3.jpg"
                        alt="Generic placeholder image">
                      <div class="media-body">
                        <h5 class="notification-user">Sara Soudein</h5>
                        <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                        <span class="notification-time">30 minutes ago</span>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="user-profile header-notification">
                <a href="#!" class="waves-effect waves-light">
                  <img src="assets/images/admin.png" class="img-radius" alt="User-Profile-Image">
                  <span>{{ Auth::user()->name }}</span>
                  <i class="ti-angle-down"></i>
                </a>
                <ul class="show-notification profile-notification">
                  <li class="waves-effect waves-light">
                    <a href="#!">
                      <i class="ti-settings"></i> Settings
                    </a>
                  </li>
                  <li class="waves-effect waves-light">
                    <a href="user-profile.html">
                      <i class="ti-user"></i> Profile
                    </a>
                  </li>
                  <li class="waves-effect waves-light">
                    <a href="email-inbox.html">
                      <i class="ti-email"></i> My Messages
                    </a>
                  </li>
                  <li class="waves-effect waves-light">
                    <a href="auth-lock-screen.html">
                      <i class="ti-lock"></i> Lock Screen
                    </a>
                  </li>
                  <li class="waves-effect waves-light">
                    <a href="auth-normal-sign-in.html">
                      <i class="ti-layout-sidebar-left"></i> Logout
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
          <nav class="pcoded-navbar">
            <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
            <div class="pcoded-inner-navbar main-menu">
              <div class="">
                <div class="main-menu-header">
                  <img class="img-80 img-radius" src="assets/images/admin.png" alt="User-Profile-Image">
                  <div class="user-details">
                    <span id="more-details">{{ Auth::user()->name }}<i class="fa fa-caret-down"></i></span>
                  </div>
                </div>
                <div class="main-menu-content">
                  <ul>
                    <li class="more-details">
                      <a href="user-profile.html"><i class="ti-user"></i>View Profile</a>
                      <a href="#!"><i class="ti-settings"></i>Settings</a>
                      <a href="auth-normal-sign-in.html"><i class="ti-layout-sidebar-left"></i>Logout</a>
                    </li>
                  </ul>
                </div>
              </div>
              {{-- <div class="p-15 p-b-0">
                                <form class="form-material">
                                    <div class="form-group form-primary">
                                        <input type="text" name="footer-email" class="form-control">
                                        <span class="form-bar"></span>
                                        <label class="float-label"><i class="fa fa-search m-r-10"></i>Search Friend</label>
                                    </div>
                                </form>
                            </div> --}}
              <div class="pcoded-navigation-label">Navigation</div>
              <ul class="pcoded-item pcoded-left-item">
                <li class="">
                  <a href="/dashboard" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                    <span class="pcoded-mtext">Dashboard</span>
                    <span class="pcoded-mcaret"></span>
                  </a>
                </li>
              </ul>
              <div class="pcoded-navigation-label">Forms</div>
              <ul class="pcoded-item pcoded-left-item">
                <li>
                  <a href="{{ url('Stok') }}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="fa fa-th-large"></i><b>B</b></span>
                    <span class="pcoded-mtext">Data Stok</span>
                    <span class="pcoded-mcaret"></span>
                  </a>
                </li>
              </ul>
              {{-- <div class="pcoded-navigation-label">Tables</div> --}}
              <ul class="pcoded-item pcoded-left-item">
                <li class="">
                  <a href="{{ url('Kategori') }}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="fa fa-th-large"></i><b>B</b></span>
                    <span class="pcoded-mtext">Data Kategori</span>
                    <span class="pcoded-mcaret"></span>
                  </a>
                </li>
              </ul>
              <ul class="pcoded-item pcoded-left-item">
                <li>
                  <a href="{{ url('Olah') }}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="fa fa-th-large"></i><b>B</b></span>
                    <span class="pcoded-mtext">Data Olah</span>
                    <span class="pcoded-mcaret"></span>
                  </a>
                </li>
              </ul>
            </div>
          </nav>
          <div class="pcoded-content">
            <!-- Page-header start -->
            <div class="page-header">
              <div class="page-block">
                <div class="row align-items-center">
                  <div class="col-md-8">
                    <div class="page-header-title">
                      <h5 class="m-b-10">Basic Form Inputs</h5>
                      <p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <ul class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a href="index.html"> <i class="fa fa-home"></i> </a>
                      </li>
                      <li class="breadcrumb-item"><a href="#!">Form Components</a>
                      </li>
                      <li class="breadcrumb-item"><a href="#!">Basic Form Inputs</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- Page-header end -->
            <div class="pcoded-inner-content">
              <!-- Main-body start -->
              <div class="main-body">
                <div class="page-wrapper">

                  <!-- Page body start -->
                  <div class="page-body">
                    <div class="col-12 grid-margin">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Input Data</h5>
                          <div class="card-block table-border-style">
                            <div class="table-responsive">
                              <table class="table">
                                <thead>
                                  @csrf
                                  <form>
                                    <!-- Kode form Anda -->
                                  </form>
                                  @include('komponen.pesan')
                                  @yield('konten')
                                </thead>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>

                  <!-- Page body end -->
                </div>
              </div>
              <!-- Main-body end -->
              <div id="styleSelector">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Warning Section Starts -->
  <!-- Older IE warning message -->
  <!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers
        to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
  <!-- Warning Section Ends -->
  <!-- Required Jquery -->
  <script type="text/javascript" src="{{ asset('assets/js/jquery/jquery.min.js') }} "></script>
  <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js "></script>
  <script type="text/javascript" src="{{ asset('assets/js/popper.js/popper.min') }}.js"></script>
  <script type="text/javascript" src="{{ asset('assets/js/bootstrap/js/bootstr') }}ap.min.js "></script>
  <!-- waves js -->
  <script src="{{ asset('assets/pages/waves/js/waves.mi') }}n.js"></script>
  <!-- jquery slimscroll js -->
  <script type="text/javascript" src="{{ asset('assets/js/jquery-slimscroll/jq') }}uery.slimscroll.js"></script>

  <!-- Custom js -->
  <script src="{{ asset('assets/js/pcoded.min.js') }}"></script>
  <script src="{{ asset('assets/js/vertical/vertical-la') }}yout.min.js"></script>
  <script src="{{ asset('assets/js/jquery.mCustomScroll') }}bar.concat.min.js"></script>
  <script type="text/javascript" src="{{ asset('assets/js/script.js"></script>') }}
</body>

</html>
