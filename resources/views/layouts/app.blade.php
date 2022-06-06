<!DOCTYPE html>
<html lang="en">



<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
  <title>Anambra State for Osinbajo Organization</title>
  <!-- favicon -->
  <link rel="icon" href="assets/img/favicon.png" sizes="20x20" type="image/png"/>
  <!-- animate -->
  <link rel="stylesheet" href="assets/css/animate.css"/>
  <!-- bootstrap -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
  <!-- magnific popup -->
  <link rel="stylesheet" href="assets/css/magnific-popup.css"/>
  <!-- owl carousel -->
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css"/>
  <!-- fontawesome -->
  <link rel="stylesheet" href="assets/css/font-awesome.min.css"/>
  <!-- iconmoon -->
  <link rel="stylesheet" href="assets/css/iconmoon.css">
  <!-- Hover CSS -->
  <link rel="stylesheet" href="assets/css/hover-min.css"/>
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="assets/css/style.css"/>
  <!-- responsive Stylesheet -->
  <link rel="stylesheet" href="assets/css/responsive.css"/>
  <link rel="stylesheet" href="assets/css/addedstyle.css">
  
</head>

<body>
  <!-- preloader area start -->
  {{-- <div class="preloader" id="preloader">
    <div class="preloader-inner">
      <div class="loader">
        <svg
          id="eJPpT6qIRLO1"
          xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink"
          viewBox="0 0 41 52"
          shape-rendering="geometricPrecision"
          text-rendering="geometricPrecision"
        >
          <g id="eJPpT6qIRLO2" transform="matrix(1 0 0 1 -219 -96.817001)">
            <g id="eJPpT6qIRLO3" transform="matrix(1 0 0 1 219.111 139.233001)">
              <path
                id="eJPpT6qIRLO4"
                d="M117.617,183.55L118.923,187.05L122.66,187.209L119.73,189.534L120.73,193.134L117.613,191.067L114.496,193.134L115.496,189.534L112.567,187.209L116.304,187.05Z"
                transform="matrix(1 0 0 1 -112.573997 -183.550003)"
                opacity="0"
                fill="rgb(221,19,26)"
                stroke="none"
                stroke-width="1"
              />
              <path
                id="eJPpT6qIRLO5"
                d="M117.617,183.55L118.923,187.05L122.66,187.209L119.73,189.534L120.73,193.134L117.613,191.067L114.496,193.134L115.496,189.534L112.567,187.209L116.304,187.05Z"
                transform="matrix(1 0 0 1 -97.171997 -183.550003)"
                opacity="0"
                fill="rgb(221,19,26)"
                stroke="none"
                stroke-width="1"
              />
              <path
                id="eJPpT6qIRLO6"
                d="M117.617,183.55L118.923,187.05L122.66,187.209L119.73,189.534L120.73,193.134L117.613,191.067L114.496,193.134L115.496,189.534L112.567,187.209L116.304,187.05Z"
                transform="matrix(1 0 0 1 -81.771004 -183.550003)"
                opacity="0"
                fill="rgb(221,19,26)"
                stroke="none"
                stroke-width="1"
              />
            </g>
            <path
              id="eJPpT6qIRLO7"
              d="M6238.076,2712.141L6238.076,2692.616L6201.827,2692.616L6201.827,2715.847L6208.336,2715.847L6208.336,2699.125L6231.567,2699.125L6231.567,2705.633L6214.843,2705.633L6214.843,2722.356L6201.826,2722.356L6201.826,2728.865L6221.351,2728.865L6221.351,2716.743L6233.472,2728.865L6238.072,2728.865L6238.072,2724.265L6227.532,2713.725L6225.949,2712.144Z"
              transform="matrix(1 0 0 1 -5980.451 -2595.798999)"
              fill="rgb(221,19,26)"
              fill-rule="evenodd"
              stroke="none"
              stroke-width="1"
            />
          </g>
        </svg>
      </div>
    </div>
  </div> --}}
  <!-- preloader area end -->
  
  <div class="header-style-01">
    <!-- support bar area end -->
    <nav class="navbar navbar-area style-01 style-04 navbar-expand-lg nav-style-02 ">
      <div class="container nav-container">
        <div class="responsive-mobile-menu">
          <div class="logo-wrapper">
            <a href="{{ route('home') }}" class="logo">
              <img src="assets/img/logo.svg" alt="">
            </a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bizcoxx_main_menu"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse" id="bizcoxx_main_menu">
          <ul class="navbar-nav political">
            <!-- menu-item-has-children -->
            <li class="{{ Request::is('home') ? 'active' : '' }}">
              <a href="{{ url('home') }}">Home</a>
               
            </li>
            <li class="{{ Route::currentRouteNamed('about_us') ? 'active' : '' }}">
              <a href="{{ url('about_us') }}">About Us</a>
             
            </li>
            
            <!-- menu-item-has-children -->
            <li class="active">
              <a href="#">Latest News</a>
              
            </li>
            <li>
              <a href="{{ route('contact_us') }}">Contact Us</a>
              
            </li>
            <li class="my-register">
              <a href="{{ route('register') }}">Register</a>
              
            </li>
          </ul>
        </div>
        <div class="nav-right-content style-01">
          <div class="btn-wrapper">
            <a href="{{ route('register') }}" class="boxed-btn political-btn">Register<!-- <i class="icon-paper-plan"></i> --></a>
          </div>
        </div>
      </div>
    </nav>
    <!-- navbar area end -->
  </div>

  @yield('content')

  <!-- footer area start -->
  <footer class="footer-area" style="background-image: url(assets/img/footer-bg-02.png);">
    <div class="footer-top home-three">
      <div class="container">
        <div class="footer-top-border home-three">
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="footer-widget widget">
                <div class="about_us_widget wow animate__animated animate__fadeInUp">
                  <div class="logo-wrapper">
                    <a href="{{ route('home') }}" class="logo">
                      <img src="assets/img/logowhite.svg" alt="">
                    </a>
                  </div>
                  {{-- <a href="index.html" class="footer-logo"> <img src="assets/img/logo.svg" alt="footer logo"></a> --}}
                  
                    <div class="social-links">
                      <a href="#"><i class="fab fa-facebook-f"></i></a>
                      <a href="#"><i class="fab fa-twitter"></i></a>
                      <a href="#"><i class="fab fa-linkedin-in"></i></a>
                      <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="footer-widget widget widget_nav_menu wow animate__animated animate__fadeInUp">
                <h4 class="widget-title">
                  Explore
                  <span class="line">
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot style-02"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                  </span>
                </h4>
                <ul class="contact_info_list style-01 margin-bottom-50">
                  <li class="single-info-item">
                    <div class="icon style-01">
                      <i class="icon-location"></i>
                    </div>
                    <div class="details style-02">
                      Nationwide
                    </div>
                  </li>
                  <li class="single-info-item">
                    <div class="icon">
                      <i class="icon-envelope"></i>
                    </div>
                    <div class="details">
                      info@anambrastateforosinbajo.com
                    </div>
                  </li>
                  <li class="single-info-item">
                    <div class="icon">
                      <i class="icon-phone"></i>
                    </div>
                    <!-- <div class="details">
                      009-215-5599
                    </div> -->
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-2 col-md-6">
              <div class="footer-widget widget widget_nav_menu wow animate__animated animate__fadeInUp">
                <h4 class="widget-title">
                  Useful Links
                  <span class="line">
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot style-02"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                  </span>
                </h4>
                <ul>
                  <li><a href="#">Latest News</a></li>
                  <li><a href="register.html">Register</li>
                  <!-- <li><a href="#">Support</a></li>
                  <li><a href="#">FAQ</a></li> -->
                </ul>
              </div>
            </div>
            <div class="col-lg-2 col-md-6">
              <div class="footer-widget widget widget_nav_menu wow animate__animated animate__fadeInUp">
                <h4 class="widget-title">
                  Quick Links
                  <span class="line">
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot style-02"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                  </span>
                </h4>
                <ul>
                  <li><a href="index.html">Home</a></li>
                  <li><a href="about.html">About Us</a></li>
                  <li><a href="contact.html">Contact Us</a></li>
                 
                </ul>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </footer>
  <!-- footer area end -->
  
  <!-- back to top area start -->
  <div class="back-to-top">
    <span class="back-top"><i class="fa fa-angle-up"></i></span>
  </div>
  <!-- back to top area end -->

  <script src="assets/js/jquery-2.2.4.min.js"></script>
  <!-- bootstrap -->
  <script src="assets/js/bootstrap.min.js"></script>
  <!-- magnific popup -->
  <script src="assets/js/jquery.magnific-popup.js"></script>
  <!-- wow -->
  <script src="assets/js/wow.min.js"></script>
  <!-- owl carousel -->
  <script src="assets/js/owl.carousel.min.js"></script>
  <!-- waypoint -->
  <script src="assets/js/waypoints.min.js"></script>
  <!-- Mail Validation -->
  <script src="assets/js/mail-validation.js"></script>
  <!-- Contact js -->
  <script src="assets/js/contact.js"></script>
  <!-- counterup -->
  <script src="assets/js/jquery.counterup.min.js"></script>
  <!-- countdown -->
  <script src="assets/js/jquery.countdown.min.js"></script>
  <!-- VanillaTilt effect -->
  <script src="assets/js/tilt.jquery.js"></script>
  <!-- imageloaded -->
  <script src="assets/js/imagesloaded.pkgd.min.js"></script>
  <!-- isotope -->
  <script src="assets/js/isotope.pkgd.min.js"></script>
  <!-- main js -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/function.js"></script>
  <script src="https://kit.fontawesome.com/7514adbe40.js" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  @if (session('success'))
    <script>
      swal({
        title: "Registered",
        text: "{{ session('success') }}",
        icon: "success",
        timer:10000,
        button: "OK",
      });
    </script>
      
  @endif
  

 @if(Session::has('fail'))
 <script type="text/javascript">
    swal({
        title:'Email already exist',
        text:"{{Session::get('fail')}}",
        type:'error',
        timer:10000
    }).then((value) => {
      //location.reload();
    }).catch(swal.noop);
</script>
@endif

  @yield('scripts')
</body>



</html>