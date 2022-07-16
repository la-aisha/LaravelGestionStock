<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('accueil/app-assets/img/ico/favicon.ico')}}">
    <link rel="shortcut icon" type="image/png" href="{{asset('accueil/app-assets/img/ico/favicon-32.png')}}">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900%7CMontserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="{{asset('accueil/app-assets/fonts/simple-line-icons/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('accueil/app-assets/fonts/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('accueil/app-assets/vendors/css/perfect-scrollbar.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('accueil/app-assets/vendors/css/prism.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('accueil/app-assets/vendors/css/switchery.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('accueil/app-assets/vendors/css/chartist.min.css')}}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN APEX CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('accueil/app-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('accueil/app-assets/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('accueil/app-assets/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('accueil/app-assets/css/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('accueil/app-assets/css/themes/layout-dark.css')}}">
    <link rel="stylesheet" href="{{asset('accueil/app-assets/css/plugins/switchery.css')}}">
    <!-- END APEX CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('accueil/app-assets/css/pages/dashboard2.css')}}">
    <link rel="stylesheet" href="{{asset('accueil/app-assets/fonts/weathericons/css/weather-icons.css')}}">
    <link rel="stylesheet" href="{{asset('accueil/app-assets/fonts/weathericons/css/weather-icons-wind.css')}}">
    <!-- END Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('accueil/assets/css/style.css')}}">
    <!-- END: Custom CSS-->





<!-- font icons-->
    <link rel="stylesheet" type="text/css" href="{{asset('accueil/app-assets/fonts/feather/style.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('accueil/app-assets/vendors/css/swiper.min.css')}}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN APEX CSS-->
    <!-- END APEX CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" href="{{asset('accueil/app-assets/css/pages/ex-component-swiper.css')}}">
    <!-- END Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <!-- END: Custom CSS-->
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
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
                        <nav class="navbar navbar-expand-lg ">
                        <a class="navbar-brand" href="#">Navbar</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Categorie
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="{{route('addcategorie')}}">Ajout</a>
                                <a class="dropdown-item" href="{{route('getallcategorie')}}">Liste</a> 
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Produit
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="{{route('addproduit')}}">Ajout</a>
                                <a class="dropdown-item" href="{{route('getallproduit')}}">Liste</a> 
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Entrees
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="{{route('addentrees')}}">Ajout</a>
                                <a class="dropdown-item" href="{{route('getallentrees')}}">Liste</a> 
                                </div>
                            </li>
                            
                            
                            <li class="nav-item">
                                <a class="nav-link" href="#">Entrees</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Sorties</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown link
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                            <li>
                            <div class=" float-right dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    {{ Auth::user()->name }}  </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="{{ route('logout') }}">
                                                        {{ __('Logout') }}
                                                    </a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                    </div>
                                                </div>
                                                <div>
                                                
                                                </div>

                            </li>
                            </ul>
                        </div>
                        </nav>
                  
                       
                            <!-- <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}">
                                        {{ __('Logout') }}
                                    </a>

                                   <!--  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form> -->
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
    <script src="{{asset('accueil/app-assets/vendors/js/vendors.min.js')}}"></script>
    <script src="{{asset('accueil/app-assets/vendors/js/switchery.min.js')}}"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{asset('accueil/app-assets/vendors/js/chartist.min.js')}}"></script>
    <script src="{{asset('accueil/app-assets/vendors/js/apexcharts.min.js')}}"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN APEX JS-->
    <script src="{{asset('accueil/app-assets/js/core/app-menu.js')}}"></script>
    <script src="{{asset('accueil/app-assets/js/core/app.js')}}"></script>
    <script src="{{asset('accueil/app-assets/js/notification-sidebar.js')}}"></script>
    <script src="{{asset('accueil/app-assets/js/customizer.js')}}"></script>
    <script src="{{asset('accueil/app-assets/js/scroll-top.js')}}"></script>
    <!-- END APEX JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{asset('accueil/app-assets/js/dashboard2.js')}}"></script>
    <!-- END PAGE LEVEL JS-->
    <!-- BEGIN: Custom CSS-->
    <!-- END: Custom CSS-->
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN APEX JS-->
    <!-- END APEX JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{asset('accueil/app-assets/js/components-modal.min.js')}}"></script>
    <!-- END PAGE LEVEL JS-->
    <!-- BEGIN: Custom CSS-->
    <script src="{{asset('accueil/assets/js/scripts.js')}}"></script>
    <!-- END: Custom CSS-->







     <!-- END Notification Sidebar-->
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
    <!-- BEGIN VENDOR JS-->
    <script src="{{asset('accueil/app-assets/vendors/js/switchery.min.js')}}"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{asset('accueil/app-assets/vendors/js/swiper.min.js')}}"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN APEX JS-->
    <script src="{{asset('accueil/app-assets/js/scroll-top.js')}}"></script>
    <!-- END APEX JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{asset('accueil/app-assets/js/ex-component-swiper.js')}}"></script>
    <!-- END PAGE LEVEL JS-->
    <!-- BEGIN: Custom CSS-->
    <script src="{{asset('accueil/assets/js/scripts.js')}}"></script>
    <!-- END: Custom CSS-->
</body>
</html>
