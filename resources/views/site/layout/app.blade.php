<!DOCTYPE html>
<html>
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Federal Cosméticos</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset("porto/img/favicon.ico")}}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{asset("porto/img/apple-touch-icon.png")}}">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7COpen+Sans:400,700,800&display=swap" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset("porto/vendor/bootstrap/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("porto/vendor/fontawesome-free/css/all.min.css")}}">
    <link rel="stylesheet" href="{{asset("porto/vendor/animate/animate.compat.css")}}">
    <link rel="stylesheet" href="{{asset("porto/vendor/simple-line-icons/css/simple-line-icons.min.css")}}">
    <link rel="stylesheet" href="{{asset("porto/vendor/owl.carousel/assets/owl.carousel.min.css")}}">
    <link rel="stylesheet" href="{{asset("porto/vendor/owl.carousel/assets/owl.theme.default.min.css")}}">
    <link rel="stylesheet" href="{{asset("porto/vendor/magnific-popup/magnific-popup.min.css")}}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset("porto/css/theme.css")}}">
    <link rel="stylesheet" href="{{asset("porto/css/theme-elements.css")}}">
    <link rel="stylesheet" href="{{asset("porto/css/theme-blog.css")}}">
    <link rel="stylesheet" href="{{asset("porto/css/theme-shop.css")}}">

    <!-- Demo CSS -->
    <link rel="stylesheet" href="{{asset("porto/css/demos/demo-landing.css")}}">

    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="{{asset("porto/css/skins/skin-landing.css")}}">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{asset("porto/css/custom.css")}}">

    <!-- Head Libs -->
    <script src="{{asset("porto/vendor/modernizr/modernizr.min.js")}}"></script>

</head>
<body data-plugin-page-transition>

<div class="body">
    <header id="header" class="header-transparent header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 70, 'stickyChangeLogo': false, 'stickyHeaderContainerHeight': 70}">
        <div class="header-body border-top-0 bg-dark box-shadow-none">
            <div class="header-container container">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-row">
                            <div class="header-logo">
                                <a href="index.html"><img alt="Porto" width="100" height="48" data-sticky-width="82" data-sticky-height="40" data-sticky-top="0" src="{{asset("porto/img/logo-default-slim-dark.png")}}"></a>
                            </div>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <div class="header-nav header-nav-line header-nav-bottom-line header-nav-bottom-line-no-transform header-nav-bottom-line-active-text-light header-nav-bottom-line-effect-1 header-nav-light-text header-nav-dropdowns-dark">
                                <div class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-text-capitalize header-nav-main-text-size-2 header-nav-main-mobile-dark header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                    <nav class="collapse">
                                        <ul class="nav nav-pills" id="mainNav">
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle" href="{{route("site.home")}}">
                                                    Home
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item" data-hash data-hash-offset="130" href="{{route("site.home")}}">
                                                    Plano de Negócio
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Catalogo Feminino</a>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Catalogo Masculino</a>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Revista Plano de Negócio</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown dropdown-mega">
                                                <a class="dropdown-item dropdown-toggle" href="{{route("site.index")}}">
                                                    Loja Virtual
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle" href="#">
                                                    Empresa
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle" href="#">
                                                    Contato
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <a class="btn btn-gradient btn-rounded font-weight-semibold px-4 ms-3" href="https://themeforest.net/checkout/from_item/4106987?license=regular&support=bundle_6month&ref=Okler" target="_blank">BUY PORTO NOW!</a>
                                <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav"><i class="fa fa-bars"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div role="main" class="main">
    @yield('content')
    </div>
    <footer id="footer" class="bg-color-dark-scale-2 border border-end-0 border-start-0 border-bottom-0 border-color-light-3 mt-0">
        <div class="container text-center my-3 py-5">
            <a href="index.html">
                <img src="{{asset("porto/img/lazy.png")}}" data-src="{{asset("porto/img/landing/logo.png")}}" width="102" height="45" class="appear-animation lazyload mb-4" alt="Porto" data-appear-animation="fadeIn" data-appear-animation-delay="300">
            </a>
            <p class="text-4 mb-4">Porto is exclusively available on themeforest.net by <a href="https://themeforest.net/user/okler/" class="text-color-light text-decoration-none" target="_blank">Okler.</a></p>
            <ul class="social-icons social-icons-big social-icons-dark-2">
                <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
            </ul>
        </div>
        <div class="copyright bg-dark py-4">
            <div class="container text-center py-2">
                <p class="mb-0 text-2">Copyright 2013 - 2021 - Porto - All Rights Reserved</p>
            </div>
        </div>
    </footer>
</div>

<!-- Vendor -->
<script src="{{asset("porto/vendor/jquery/jquery.min.js")}}"></script>
<script src="{{asset("porto/vendor/jquery.appear/jquery.appear.min.js")}}"></script>
<script src="{{asset("porto/vendor/jquery.easing/jquery.easing.min.js")}}"></script>
<script src="{{asset("porto/vendor/jquery.cookie/jquery.cookie.min.js")}}"></script>
<script src="{{asset("porto/vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<script src="{{asset("porto/vendor/jquery.validation/jquery.validate.min.js")}}"></script>
<script src="{{asset("porto/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js")}}"></script>
<script src="{{asset("porto/vendor/jquery.gmap/jquery.gmap.min.js")}}"></script>
<script src="{{asset("porto/vendor/lazysizes/lazysizes.min.js")}}"></script>
<script src="{{asset("porto/vendor/isotope/jquery.isotope.min.js")}}"></script>
<script src="{{asset("porto/vendor/owl.carousel/owl.carousel.min.js")}}"></script>
<script src="{{asset("porto/vendor/magnific-popup/jquery.magnific-popup.min.js")}}"></script>
<script src="{{asset("porto/vendor/vide/jquery.vide.min.js")}}"></script>
<script src="{{asset("porto/vendor/vivus/vivus.min.js")}}"></script>

<!-- Theme Base, Components and Settings -->

<script src="{{asset("porto/js/theme.js")}}"></script>

<!-- Theme Custom -->
<script src="{{asset("porto/js/custom.js")}}"></script>


<!-- Theme Initialization Files -->
<script src="{{asset("porto/js/theme.init.js")}}"></script>

</body>
</html>
