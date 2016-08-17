<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Goingeat</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

        <!-- bootstrap.css v3.3.7 -->
        <link rel="stylesheet" type="text/css" href="css/lib/bootstrap/css/bootstrap.min.css" />
        
        <!-- masonry.css v1.0.0 -->
        <link rel="stylesheet" type="text/css" href="css/masonry.css" />

        <!--map css-->
        <!--<link rel="stylesheet" href="/maps/documentation/javascript/demos/demos.css">-->

        <!-- main.css v1.0.0 -->
        <link rel="stylesheet" href="css/main.css">

        {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

        <style>
            body {
                font-family: 'Lato';
            }

            .fa-btn {
                margin-right: 6px;
            }
        </style>
    </head>
    <body id="app-layout">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        Logo
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li><a href="{{ url('/bistro') }}">Bistro</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')

        <!--jquery v2.2.4-->
        <script src="js/lib/jquery/jquery-2.2.4.min.js" type="text/javascript" charset="utf-8"></script>

        <!--jquery-migrate v1.4.1-->
        <script src="js/lib/jquery/jquery-migrate-1.4.1.min.js" type="text/javascript" charset="utf-8"></script>

        <!--jquery.placeholder v2.3.1-->
        <script src="js/lib/jquery.placeholder/jquery.placeholder.min.js" type="text/javascript" charset="utf-8"></script>

        <!-- bootstrap.js v3.3.7 -->
        <script src="js/lib/bootstrap/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>

        <!--tweenmax v1.19.0-->
        <script src="js/lib/TweenMax/TweenMax.min.js" type="text/javascript" charset="utf-8"></script>

        <!--masonry v4.1.0-->
        <script src="js/lib/masonry/masonry.pkgd.min.js" type="text/javascript" charset="utf-8"></script>

        <!--isotope v3.0.1-->
        <script src="js/lib/isotope/isotope.pkgd.min.js" type="text/javascript" charset="utf-8"></script>

        <!--imagesLoaded v4.1.0-->
        <script src="js/lib/imagesloaded/imagesloaded.pkgd.min.js" type="text/javascript" charset="utf-8"></script>

        <!--map api-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDiyWDIUlw5bH0L2Dj5Buzz1vOSV8NR2M&callback=initMap" async defer></script>

        <!--main.js v1.0.0-->
        <script src="js/main.js" type="text/javascript" charset="utf-8"></script>

        <!--map.js v1.0.0-->
        <script src="js/map.js" type="text/javascript" charset="utf-8"></script>

        {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
