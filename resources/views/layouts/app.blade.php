<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset ('assets/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/css/animate.css')}}">
    
    <link rel="stylesheet" href="{{ asset ('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{ asset ('assets/css/aos.css')}}">

    <link rel="stylesheet" href="{{ asset ('assets/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{ asset ('assets/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/css/jquery.timepicker.css')}}">

    
    <link rel="stylesheet" href="{{ asset ('assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/css/style.css')}}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app"style="margin-top: -20px;">
        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}
        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
            <div class="container">
              <a class="navbar-brand" href="{{ url('/home')}}">SAGA<span>SUITES</span></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
              </button>
    
              <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item active"><a href="{{ url('/home')}}" class="nav-link">Home</a></li>
                  <li class="nav-item"><a href="# " class="nav-link">Our Rooms</a></li>
                  <li class="nav-item"><a href="{{route('restaurant')}}" class="nav-link">Restaurant</a></li>
                  <li class="nav-item"><a href="{{route('about')}}" class="nav-link">About Us</a></li>
                  <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>

                  @guest
                    @if (Route::has('login'))
                      <li class="nav-item"><a href="{{ route('login')}}" class="nav-link">Login</a></li>
                    @endif

                    @if (Route::has('register'))
                      <li class="nav-item"><a href="{{ route('register')}}" class="nav-link">Register</a></li>

                    @endif

                    @else
                    <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }}
                      </a>

                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('users.bookings') }}">My Bookings</a>
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                      </div>
                    </li>
                  @endguest


                </ul>
              </div>
            </div>
        </nav>


        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <footer class="ftco-footer ftco-section img" style="background-image: url(images/bg_4.jpg);">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">SAGA SUITES</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Useful Links</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Blog</a></li>
                <li><a href="#" class="py-2 d-block">Rooms</a></li>
                <li><a href="#" class="py-2 d-block">Amenities</a></li>
                <li><a href="#" class="py-2 d-block">Gift Card</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Privacy</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Career</a></li>
                <li><a href="#" class="py-2 d-block">About Us</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
                <li><a href="#" class="py-2 d-block">Services</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        {{-- <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div> --}}
        </div>
      </div>
    </footer>



    <script src="{{asset ('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset ('assets/js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{asset ('assets/js/popper.min.js')}}"></script>
    <script src="{{asset ('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset ('assets/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset ('assets/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset ('assets/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset ('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset ('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset ('assets/js/aos.js')}}"></script>
    <script src="{{asset ('assets/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset ('assets/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset ('assets/js/scrollax.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{asset ('assets/js/google-map.js')}}"></script>
    <script src="{{asset ('assets/js/main.js')}}"></script>
</body>
</html>
