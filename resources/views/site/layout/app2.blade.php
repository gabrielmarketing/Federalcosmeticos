<!DOCTYPE html>
<html>
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Federal Cosmétcos</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset("images/logobranca.png")}}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{asset("images/logobranca.png")}}">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400&display=swap" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset("porto/vendor/bootstrap/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("porto/vendor/fontawesome-free/css/all.min.css")}}">
    <link rel="stylesheet" href="{{asset("porto/vendor/animate/animate.compat.css")}}">
    <link rel="stylesheet" href="{{asset("porto/vendor/simple-line-icons/css/simple-line-icons.min.css")}}">
    <link rel="stylesheet" href="{{asset("porto/vendor/owl.carousel/assets/owl.carousel.min.css")}}">
    <link rel="stylesheet" href="{{asset("porto/vendor/owl.carousel/assets/owl.theme.default.min.css")}}">
    <link rel="stylesheet" href="{{asset("porto/vendor/magnific-popup/magnific-popup.min.css")}}">
    <link rel="stylesheet" href="{{asset("porto/vendor/bootstrap-star-rating/css/star-rating.min.css")}}">
    <link rel="stylesheet" href="{{asset("porto/vendor/bootstrap-star-rating/themes/krajee-fas/theme.min.css")}}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset("porto/css/theme.css")}}">
    <link rel="stylesheet" href="{{asset("porto/css/theme-elements.css")}}">
    <link rel="stylesheet" href="{{asset("porto/css/theme-blog.css")}}">
    <link rel="stylesheet" href="{{asset("porto/css/theme-shop.css")}}">

    <!-- Admin Extension Specific Page Vendor CSS -->
    <link rel="stylesheet" href="{{asset("porto/admin/vendor/pnotify/pnotify.custom.css")}}" />

    <!-- Admin Extension CSS -->
    <link rel="stylesheet" href="{{asset("porto/admin/css/theme-admin-extension.css")}}">

    <!-- Admin Extension Skin CSS -->
    <link rel="stylesheet" href="{{asset("porto/admin/css/skins/extension.css")}}">

    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="{{asset("porto/css/skins/default.css")}}">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{asset("porto/css/custom.css")}}">

    <!-- Head Libs -->
    <script src="{{asset("porto/vendor/modernizr/modernizr.min.js")}}"></script>

</head>
<body data-plugin-page-transition>

<div class="body">
    {{--<div class="notice-top-bar bg-primary" data-sticky-start-at="180">
        <button class="hamburguer-btn hamburguer-btn-light notice-top-bar-close m-0 active" data-set-active="false">
					<span class="close">
						<span></span>
						<span></span>
					</span>
        </button>
        --}}{{--<div class="container">
            <div class="row justify-content-center py-2">
                <div class="col-9 col-md-12 text-center">
                    <p class="text-color-light font-weight-semibold mb-0">Get Up to <strong>40% OFF</strong> New-Season Styles <a href="#" class="btn btn-primary-scale-2 btn-modern btn-px-2 btn-py-1 ms-2">MEN</a> <a href="#" class="btn btn-primary-scale-2 btn-modern btn-px-2 btn-py-1 ms-1 me-2">WOMAN</a> <span class="opacity-6 text-1">* Limited time only.</span></p>
                </div>
            </div>
        </div>--}}{{--
    </div>--}}
    <header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 135, 'stickySetTop': '-135px', 'stickyChangeLogo': true}">
        <div class="header-body header-body-bottom-border-fixed box-shadow-none border-top-0">
           {{-- <div class="header-top header-top-small-minheight header-top-simple-border-bottom">
                --}}{{--<div class="container">
                    --}}{{----}}{{--<div class="header-row justify-content-between">
                        --}}{{----}}{{----}}{{----}}{{--<div class="header-column col-auto px-0">
                            <div class="header-row">
                                <p class="font-weight-semibold text-1 mb-0 d-none d-sm-block d-md-none">FREE SHIPPING ORDERS $99+</p>
                                <p class="font-weight-semibold text-1 mb-0 d-none d-md-block">FREE RETURNS, STANDARD SHIPPING ORDERS $99+</p>
                            </div>
                        </div>--}}{{----}}{{----}}{{----}}{{--
                        --}}{{----}}{{----}}{{----}}{{--<div class="header-column justify-content-end col-auto px-0">
                            <div class="header-row">
                                <nav class="header-nav-top">
                                    --}}{{----}}{{----}}{{----}}{{----}}{{----}}{{----}}{{----}}{{--<ul class="nav nav-pills font-weight-semibold text-2">
                                        <li class="nav-item dropdown nav-item-left-border d-lg-none">
                                            <a class="nav-link text-color-default text-color-hover-primary" href="#" role="button" id="dropdownMobileMore" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                More
                                                <i class="fas fa-angle-down"></i>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMobileMore">
                                                <a class="dropdown-item" href="#">About</a>
                                                <a class="dropdown-item" href="#">Our Stores</a>
                                                <a class="dropdown-item" href="#">Blog</a>
                                                <a class="dropdown-item" href="#">Contact</a>
                                                <a class="dropdown-item" href="#">Help & FAQs</a>
                                                <a class="dropdown-item" href="#">Track Order</a>
                                            </div>
                                        </li>
                                        <li class="nav-item d-none d-lg-inline-block">
                                            <a href="#" class="text-decoration-none text-color-default text-color-hover-primary">About</a>
                                        </li>
                                        <li class="nav-item d-none d-lg-inline-block">
                                            <a href="#" class="text-decoration-none text-color-default text-color-hover-primary">Our Stores</a>
                                        </li>
                                        <li class="nav-item d-none d-lg-inline-block">
                                            <a href="#" class="text-decoration-none text-color-default text-color-hover-primary">Blog</a>
                                        </li>
                                        <li class="nav-item d-none d-lg-inline-block">
                                            <a href="#" class="text-decoration-none text-color-default text-color-hover-primary">Contact</a>
                                        </li>
                                        <li class="nav-item d-none d-xl-inline-block">
                                            <a href="#" class="text-decoration-none text-color-default text-color-hover-primary">Help & FAQs</a>
                                        </li>
                                        <li class="nav-item d-none d-xl-inline-block">
                                            <a href="#" class="text-decoration-none text-color-default text-color-hover-primary">Track Order</a>
                                        </li>
                                        <li class="nav-item dropdown nav-item-left-border">
                                            <a class="nav-link text-color-default text-color-hover-primary" href="#" role="button" id="dropdownCurrency" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                USD
                                                <i class="fas fa-angle-down"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-arrow-centered min-width-0" aria-labelledby="dropdownCurrency">
                                                <a class="dropdown-item" href="#">EUR</a>
                                                <a class="dropdown-item" href="#">USD</a>
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown nav-item-right-border">
                                            <a class="nav-link text-color-default text-color-hover-primary" href="#" role="button" id="dropdownLanguage" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                ENG
                                                <i class="fas fa-angle-down"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-arrow-centered min-width-0" aria-labelledby="dropdownLanguage">
                                                <a class="dropdown-item" href="#">ESP</a>
                                                <a class="dropdown-item" href="#">FRA</a>
                                                <a class="dropdown-item" href="#">ENG</a>
                                            </div>
                                        </li>
                                    </ul>--}}{{----}}{{----}}{{----}}{{----}}{{----}}{{----}}{{----}}{{--
                                    --}}{{----}}{{----}}{{----}}{{----}}{{----}}{{----}}{{----}}{{--<ul class="header-social-icons social-icons social-icons-clean social-icons-icon-gray">
                                        <li class="social-icons-facebook">
                                            <a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li class="social-icons-twitter">
                                            <a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li class="social-icons-linkedin">
                                            <a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
                                        </li>
                                    </ul>--}}{{----}}{{----}}{{----}}{{----}}{{----}}{{----}}{{----}}{{--
                                </nav>
                            </div>
                        </div>--}}{{----}}{{----}}{{----}}{{--
                    </div>--}}{{----}}{{--
                </div>--}}{{--
            </div>--}}
            <div class="header-container container">
                <div class="header-row py-2">
                    <div class="header-column w-100">
                        <div class="header-row justify-content-between">
                            <div class="header-logo z-index-2 col-lg-2 px-0">
                                <a href="{{route("site.index")}}">
                                    <img alt="Porto" width="180" height="65" data-sticky-width="115" data-sticky-height="40" data-sticky-top=110" src="{{asset("images/logofederalcosmeticos.png")}}">
                                </a>
                            </div>
                            <div class="header-nav-features header-nav-features-no-border col-lg-5 col-xl-6 px-0 ms-0">
                                <div class="header-nav-feature ps-lg-5 pe-lg-4">
                                    <form role="search" action="{{asset("page-search-results.html")}}" method="get">
                                        <div class="search-with-select">
                                            <a href="#" class="mobile-search-toggle-btn me-2" data-porto-toggle-class="open">
                                                <i class="icons icon-magnifier text-color-dark text-color-hover-primary"></i>
                                            </a>
                                            <div class="search-form-wrapper input-group">
                                                <input class="form-control text-1" id="headerSearch" name="q" type="search" value="" placeholder="Pesquisar...">
                                                <div class="search-form-select-wrapper">
                                                    <div class="custom-select-1">
                                                        <select name="category" class="form-control form-select">
                                                            <option value="all" selected>Todos</option>
                                                            <option value="fashion">Masculinos</option>
                                                            <option value="electronics">Feminino</option>
                                                        </select>
                                                    </div>
                                                    <button class="btn" type="submit">
                                                        <i class="icons icon-magnifier header-nav-top-icon text-color-dark"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <ul class="header-extra-info col-lg-3 col-xl-2 ps-2 ps-xl-0 ms-lg-3 d-none d-lg-block">
                                <li class="d-none d-sm-inline-flex ms-0">
                                    <div class="header-extra-info-icon ms-lg-4">
                                        <i class="icons icon-phone text-3 text-color-dark position-relative top-1"></i>
                                    </div>
                                    <div class="header-extra-info-text">
                                        <label class="text-1 font-weight-semibold text-color-default">ENTRE EM CONTATO</label>
                                        <strong class="text-4"><a href="tel:(62)3353-5679" class="text-color-hover-primary text-decoration-none">(62)33535679</a></strong>
                                    </div>
                                </li>
                            </ul>
                            <div class="d-flex col-auto col-lg-2 pe-0 ps-0 ps-xl-3">
                                <ul class="header-extra-info">
                                    <li class="ms-0 ms-xl-4">
                                        <div class="header-extra-info-icon">
                                            <a href="{{route("site.login")}}" class="text-decoration-none text-color-dark text-color-hover-primary text-2">
                                                <i title="Login" class="icons icon-user"></i>
                                            </a>
                                        </div>
                                    </li>
                                    {{--<li class="me-2 ms-3">
                                        <div class="header-extra-info-icon">
                                            <a href="#" class="text-decoration-none text-color-dark text-color-hover-primary text-2">
                                                <i class="icons icon-heart"></i>
                                            </a>
                                        </div>
                                    </li>--}}
                                </ul>
                                <div class="header-nav-features ps-0 ms-1">
                                    <div class="header-nav-feature header-nav-features-cart header-nav-features-cart-big d-inline-flex top-2 ms-2">
                                        <a href="#" class="header-nav-features-toggle">
                                            <img src="{{asset("porto/img/icons/icon-cart-big.svg")}}" height="30" alt="" class="header-nav-top-icon-img">
                                            <span title="Carrinho" class="cart-info">
														<span class="cart-qty" id="cartqty" style="display: none"></span>
													</span>
                                        </a>
                                        <div class="header-nav-features-dropdown" id="headerTopCartDropdown">
                                            <ol class="mini-products-list">
                                                <li class="item">
                                                    <a href="#" title="diplomata" class="product-image"><img src="{{asset("images/produtos/diplomata.png")}}" alt="Diplomata"></a>
                                                    <div class="product-details">
                                                        <p class="product-name">
                                                            <a href="#">Diplomata </a>
                                                        </p>
                                                        <p class="qty-price">
                                                            1X <span class="price">R$10</span>
                                                        </p>
                                                        <a href="#" title="Remove This Item" class="btn-remove"><i class="fas fa-times"></i></a>
                                                    </div>
                                                </li>
                                            </ol>
                                            <div class="totals">
                                                <span class="label">Total:</span>
                                                <span class="price-total"><span class="price">R$10</span></span>
                                            </div>
                                            <div class="actions">
                                                <a class="btn btn-dark" href="{{route("site.ShopCart")}}">Ver carrinho</a>
                                                <a class="btn btn-primary" href="{{route("site.Checkout")}}">Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-nav-bar header-nav-bar-top-border bg-light">
                <div class="header-container container">
                    <div class="header-row">
                        <div class="header-column">
                            <div class="header-row justify-content-end">
                                <div class="header-nav header-nav-line header-nav-top-line header-nav-top-line-with-border justify-content-start" data-sticky-header-style="{'minResolution': 991}" data-sticky-header-style-active="{'margin-left': '105px'}" data-sticky-header-style-deactive="{'margin-left': '0'}">
                                    <div class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-3 header-nav-main-sub-effect-1 w-100">
                                        <nav class="collapse w-100">
                                            <ul class="nav nav-pills w-100" id="mainNav">
                                                <li class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="{{route("site.index")}}">
                                                        Home
                                                    </a>
                                                </li>
                                                <li class="dropdown dropdown-mega">
                                                    <a class="dropdown-item dropdown-toggle" href="{{route("site.ComoComprar")}}">
                                                        Como Comprar
                                                    </a>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="{{route("site.PagamentoEnvio")}}">
                                                        Formas de Pagamento/Envio
                                                    </a>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="{{route("site.Promocoes")}}">
                                                        Promoções
                                                    </a>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="{{route("site.Empresa")}}">
                                                        Empresa
                                                    </a>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="{{route("site.contato")}}">
                                                        Contato
                                                    </a>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle active" href="#">
                                                        Catalogos
                                                    </a>
                                                </li>
                                                {{--<li class="dropdown ms-lg-auto">
                                                    <a href="#" class="dropdown-item">
                                                        Outlet
                                                    </a>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-item">
                                                        Buy Porto!
                                                    </a>
                                                </li>--}}
                                            </ul>
                                        </nav>
                                    </div>
                                    <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                                        <i class="fas fa-bars"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

@yield('content')

    <footer id="footer" class="m-0 bg-color-dark" xmlns="http://www.w3.org/1999/html">
        <div class="container">
            <div class="row py-5">
                <div class="col-sm-12 pb-4 pb-lg-0 col-lg-2 mb-2 d-flex align-items-center">
                    <img width="180" height="150" src="{{ asset("images/logofooter.png") }}" alt="Logo Footer">
                </div>
                <div class="col-sm-6 col-lg-3 footer-column footer-column-get-in-touch">
                    <h4 class="mb-4 text-uppercase">Entre em Contato</h4>
                    <div class="info custom-info mb-4">
                        <div class="custom-info-block custom-info-block-address">
                            <span class="text-color-default font-weight-bolder text-uppercase title-custom-info-block title-custom-info-block-address">Endereço</span>
                            <p><span class="font-weight-normal text-color-light text-custom-info-block p-relative bottom-6 text-custom-info-block-address">Av. Contorno, 3790 - Santa Clara, Goianésia - GO, 76380-275</span></p>
                        </div>
                        <div class="custom-info-block custom-info-block-phone">
                            <span class="text-color-default font-weight-bolder text-uppercase title-custom-info-block title-custom-info-block-phone">Contato</span>
                            <p><span class="font-weight-normal text-color-light text-custom-info-block p-relative bottom-6 text-custom-info-block-phone">Fone <a href="tel:+1234567890" class="text-color-light">0800 626 2345</a></span></p>
                            <span class="font-weight-normal text-color-light text-custom-info-block p-relative bottom-6 text-custom-info-block-phone">Whatsapp <a href="tel:+1234567890" class="text-color-light">(62) 3142-2629</a></span>
                        </div>
                        <div class="custom-info-block custom-info-block-email">
                            <span class="text-color-default font-weight-bolder text-uppercase title-custom-info-block title-custom-info-block-email">E-mail</span>
                            <p><span class="font-weight-normal text-color-light text-custom-info-block p-relative bottom-6 text-custom-info-block-email"><a class="text-color-light" href="mailto:mail@example.com">contato@federalcosmeticos.com.br</a></span></p>
                        </div>
                        <!--<div class="custom-info-block custom-info-block-working-days">
                             <span class="text-color-default font-weight-bolder text-uppercase title-custom-info-block title-custom-info-block-working-days">funcionamente Dias/Horas</span>
                             <span class="font-weight-normal text-color-light text-custom-info-block text-custom-info-block-working-days">Seg - Sab / 9:00AM - 8:00PM</span>
                         </div>-->
                    </div>
                    <ul class="social-icons">
                        <li class="social-icons-instagram">
                            <a href="#" target="_blank" title="Instagram">
                                <i class="fab fa-instagram text-4 font-weight-semibold text-hover-primary"></i>
                            </a>
                        </li>
                        <!--<li class="social-icons-twitter">
                            <a href="http://www.twitter.com/" target="_blank" title="Twitter">
                                <i class="fab fa-twitter text-4 font-weight-semibold text-hover-primary"></i>
                            </a>
                        </li>
                        <li class="social-icons-facebook">
                            <a href="http://www.facebook.com/" target="_blank" title="Facebook">
                                <i class="fab fa-facebook-f text-4 font-weight-semibold text-hover-primary"></i>
                            </a>
                        </li>-->
                    </ul>
                </div>
                <div class="col-sm-6 pt-5 pt-md-0 col-lg-4">
                    <div class="nav-footer-container">
                        <h4 class="mb-4 text-uppercase">FEDERAL COSMÉTICOS</h4>
                        <div class="nav-footer d-flex">
                            <ul>
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li>
                                    <a href="#">Sobre Nós</a>
                                </li>
                                <li>
                                    <a href="#">Ganhos como consultor</a>
                                </li>
                                <li>
                                    <a href="#">Revista Federal Cosméticos</a>
                                </li>
                                <li>
                                    <a href="#">Dúvidas Frequentes</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 pt-4 pt-lg-0 col-lg-3 text-left ml-lg-auto footer-column footer-column-opening-hours">
                    <h4 class="mb-4 text-uppercase">Horários de Funcionamento</h4>
                    <div class="info custom-info pt-0">
                        <span>Segunda-feira</span>
                        <span>8:00 ás 18:00 pm</span>
                    </div>
                    <div class="info custom-info pt-0">
                        <span>Terça-feira</span>
                        <span>8:00 ás 18:00 pm</span>
                    </div>
                    <div class="info custom-info pt-0">
                        <span>Quarta-feira</span>
                        <span>8:00 ás 18:00 pm</span>
                    </div>
                    <div class="info custom-info pt-0">
                        <span>Quinta-feira</span>
                        <span>8:00 ás 18:00 pm</span>
                    </div>
                    <div class="info custom-info pt-0">
                        <span>Sexta-feira</span>
                        <span>8:00 ás 18:00 pm</span>
                    </div>
                    <div class="info custom-info">
                        <span>Sabado/Domingo</span>
                        <span>FECHADO</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright pt-3 pb-3 container bg-color-dark">
            <div class="row">
                <div class="col-lg-12 text-center m-0 pb-4">
                    <p class="text-color-default">FederalCosméticos. © {{ date('Y') }}.  Todos direitos Reservados</p>
                </div>
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
@yield("chart/gmap")
{{--<script src="{{asset("porto/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js")}}"></script>
<script src="{{asset("vendor/jquery.gmap/jquery.gmap.min.js")}}"></script>--}}
<script src="{{asset("porto/vendor/lazysizes/lazysizes.min.js")}}"></script>
<script src="{{asset("porto/vendor/isotope/jquery.isotope.min.js")}}"></script>
<script src="{{asset("porto/vendor/owl.carousel/owl.carousel.min.js")}}"></script>
<script src="{{asset("porto/vendor/magnific-popup/jquery.magnific-popup.min.js")}}"></script>
<script src="{{asset("porto/vendor/vide/jquery.vide.min.js")}}"></script>
<script src="{{asset("porto/vendor/vivus/vivus.min.js")}}"></script>
<script src="{{asset("porto/vendor/bootstrap-star-rating/js/star-rating.min.js")}}"></script>
<script src="{{asset("porto/vendor/bootstrap-star-rating/themes/krajee-fas/theme.min.js")}}"></script>
<script src="{{asset("porto/vendor/jquery.countdown/jquery.countdown.min.js")}}"></script>

<!-- Theme Base, Components and Settings -->
<script src="{{asset("porto/js/theme.js")}}"></script>

<!-- Admin Extension Specific Page Vendor -->
<script src="{{asset("porto/admin/vendor/jquery-validation/jquery.validate.js")}}"></script>
<script src="{{asset("porto/admin/vendor/bootstrap-wizard/jquery.bootstrap.wizard.js")}}"></script>
<script src="{{asset("porto/admin/vendor/pnotify/pnotify.custom.js")}}"></script>

<!-- Admin Extension -->
<script src="{{asset("porto/admin/js/theme.admin.extension.js")}}"></script>

<!-- Admin Extension Examples -->
<script src="{{asset("porto/admin/js/examples/examples.wizard.js")}}"></script>

<!-- Current Page Vendor and Views -->
<script src="{{asset("porto/js/views/view.shop.js")}}"></script>

<!-- Theme Custom -->
<script src="{{asset("porto/js/custom.js")}}"></script>

<!-- Theme Initialization Files -->
<script src="{{asset("porto/js/theme.init.js")}}"></script>

@includeIf('global.javascript')

</body>
</html>
