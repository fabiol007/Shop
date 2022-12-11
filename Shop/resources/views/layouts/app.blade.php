<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
<meta charset="utf-8">
<title>Sklep</title>
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta property="og:title" content="">
<meta property="og:type" content="">
<meta property="og:url" content="">
<meta property="og:image" content="">
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/imgs/theme/favicon.ico') }}">
<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
@livewireStyles
</head>

<body>
<header class="header-area header-style-1 header-height-2">

    <div class="container">

        </div>

        <div class="header-bottom header-bottom-bg-color sticky-bar">
            <div class="container">
                <div class="header-wrap header-space-between position-relative">
                    <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block" style=" text-transform: uppercase;">
                        <nav>
                            <ul>
                                <li> <div class="shop-logo">
                                    <a><img style="margin-bottom: -20px;margin-left:-20px;" src="{{ asset('assets/imgs/logo/logo.png')}}" ></a>
                                    </div>
                                </li>
                                    <li><a href="{{route('shop')}}" style="font-size: 1.3em;">Strona Głowna</a></li>
                                    
                                    <li></li>
                                    <li><a href="#"style="font-size: 1.3em;">Profil<i class="fi-rs-angle-down"></i></a>
                                    @auth
                                        @if (Auth::user()->utype == 'ADM')
                                    <ul class="sub-menu">
                                        <li><a href="{{route('admin.products')}}">Produkty</a></li>
                                        <li><a href="{{route('admin.users')}}">Panel</a></li>
                                    </ul>
                                    @elseif (Auth::user()->utype == 'MDR')
                                    <ul class="sub-menu">
                                        <li><a href="{{route('moderator.products')}}">Produkty</a></li>
                                    </ul>
                                    @else
                                    <ul class="sub-menu">
                                        <li><a href="{{route('user.dashboard')}}">Profil</a></li>
                                    </ul>
                                    @endif
                                    @endif
                                    </li>
                                        @auth
                                    <li><a href="" style="color:black;font-weight: 700;display: inline-block;font-size: 1.3em;" >Konto: <form  style="color: #4c9277; font-weight: 700;display: inline-block; font-size: 1.2em;" class="capitalize">{{ Auth::user()->name }}</form></li>
                                    <li>
                                    <form method="POST" action="{{route('logout')}}">
                                        @csrf
                                        <a class="p-link" href="{{route('logout')}}"onclick="event.preventDefault();this.closest('form').submit();" style="font-size: 1.3em;">Wyloguj</a>
                                    </form>
                                    </li>

                                    @else
                                        <li ><a href="{{route('login')}}" style="font-size: 1.3em;">Zaloguj </a> </li>
                                        <li ><a href="{{route('register')}}" style="font-size: 1.3em;">Zarejestruj</a></li></li>
                                    @endif

                                    <li>
                                    <div class="header-action-2">
                                        @livewire('cart-icon-component')
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


    {{$slot}}



    <!-- Vendor JS -->
<script src="{{ asset('assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/slick.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.syotimer.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/wow.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery-ui.js') }}"></script>
<script src="{{ asset('assets/js/plugins/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('assets/js/plugins/magnific-popup.js') }}"></script>
<script src="{{ asset('assets/js/plugins/select2.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/waypoints.js') }}"></script>
<script src="{{ asset('assets/js/plugins/counterup.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/images-loaded.js') }}"></script>
<script src="{{ asset('assets/js/plugins/isotope.js') }}"></script>
<script src="{{ asset('assets/js/plugins/scrollup.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.vticker-min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.theia.sticky.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.elevatezoom.js') }}"></script>
<!-- Template  JS -->
<script src="{{ asset('assets/js/main.js?v=3.3') }}"></script>
<script src="{{ asset('assets/js/shop.js?v=3.3') }}"></script>
@livewireScripts
</body>
</html>
