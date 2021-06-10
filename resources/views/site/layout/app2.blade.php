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
                                <a href="{{asset("index.html")}}">
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
                                            <a href="#" class="text-decoration-none text-color-dark text-color-hover-primary text-2">
                                                <i class="icons icon-user"></i>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="me-2 ms-3">
                                        <div class="header-extra-info-icon">
                                            <a href="#" class="text-decoration-none text-color-dark text-color-hover-primary text-2">
                                                <i class="icons icon-heart"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                                <div class="header-nav-features ps-0 ms-1">
                                    <div class="header-nav-feature header-nav-features-cart header-nav-features-cart-big d-inline-flex top-2 ms-2">
                                        <a href="#" class="header-nav-features-toggle">
                                            <img src="{{asset("porto/img/icons/icon-cart-big.svg")}}" height="30" alt="" class="header-nav-top-icon-img">
                                            <span class="cart-info">
														<span class="cart-qty">1</span>
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
                                                    <a class="dropdown-item dropdown-toggle" href="{{asset("elements.html")}}">
                                                        Comprar
                                                    </a>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="#">
                                                        Pagamento/Envio
                                                    </a>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="#">
                                                        Promoções
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
                                                <li class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle active" href="#">
                                                        Revender
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

    <footer id="footer" class="footer-texts-more-lighten">
        <div class="container">
            <div class="row py-4 my-5">
                <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                    <h5 class="text-4 text-color-light mb-3">CONTACT INFO</h5>
                    <ul class="list list-unstyled">
                        <li class="pb-1 mb-2">
                            <span class="d-block font-weight-normal line-height-1 text-color-light">ADDRESS</span>
                            1234 Street Name, City, State, USA
                        </li>
                        <li class="pb-1 mb-2">
                            <span class="d-block font-weight-normal line-height-1 text-color-light">PHONE</span>
                            <a href="tel:+1234567890">Toll Free (123) 456-7890</a>
                        </li>
                        <li class="pb-1 mb-2">
                            <span class="d-block font-weight-normal line-height-1 text-color-light">EMAIL</span>
                            <a href="mailto:mail@example.com">mail@example.com</a>
                        </li>
                        <li class="pb-1 mb-2">
                            <span class="d-block font-weight-normal line-height-1 text-color-light">WORKING DAYS/HOURS </span>
                            Mon - Sun / 9:00AM - 8:00PM
                        </li>
                    </ul>
                    <ul class="social-icons social-icons-clean-with-border social-icons-medium">
                        <li class="social-icons-instagram">
                            <a href="http://www.instagram.com/" class="no-footer-css" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li class="social-icons-twitter mx-2">
                            <a href="http://www.twitter.com/" class="no-footer-css" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="social-icons-facebook">
                            <a href="http://www.facebook.com/" class="no-footer-css" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                    <h5 class="text-4 text-color-light mb-3">CUSTOMER SERVICE</h5>
                    <ul class="list list-unstyled mb-0">
                        <li class="mb-0"><a href="contact-us-1.html">Help & FAQs</a></li>
                        <li class="mb-0"><a href="services.html">Order Tracking</a></li>
                        <li class="mb-0"><a href="#">Shipping & Delivery</a></li>
                        <li class="mb-0"><a href="#">Orders History</a></li>
                        <li class="mb-0"><a href="#">Advanced Search</a></li>
                        <li class="mb-0"><a href="#">Login</a></li>
                        <li class="mb-0"><a href="about-us-1.html">Careers</a></li>
                        <li class="mb-0"><a href="#">About Us</a></li>
                        <li class="mb-0"><a href="#">Corporate Sales</a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-3 mb-5 mb-md-0">
                    <h5 class="text-4 text-color-light mb-3">POPULAR TAGS</h5>
                    <ul class="list list-unstyled list-inline mb-0">
                        <li class="list-inline-item"><a href="#" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">jeans</a></li>
                        <li class="list-inline-item"><a href="#" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">shoes</a></li>
                        <li class="list-inline-item"><a href="#" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">bag</a></li>
                        <li class="list-inline-item"><a href="#" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">jeasn</a></li>
                        <li class="list-inline-item"><a href="#" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">classic</a></li>
                        <li class="list-inline-item"><a href="#" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">black</a></li>
                        <li class="list-inline-item"><a href="#" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">bag</a></li>
                        <li class="list-inline-item"><a href="#" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">white</a></li>
                        <li class="list-inline-item"><a href="#" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">bag</a></li>
                        <li class="list-inline-item"><a href="#" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">bag</a></li>
                        <li class="list-inline-item"><a href="#" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">shoes</a></li>
                        <li class="list-inline-item"><a href="#" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">bag</a></li>
                        <li class="list-inline-item"><a href="#" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">jeans</a></li>
                        <li class="list-inline-item"><a href="#" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">shoes</a></li>
                        <li class="list-inline-item"><a href="#" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">white</a></li>
                        <li class="list-inline-item"><a href="#" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">black</a></li>
                        <li class="list-inline-item"><a href="#" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">white</a></li>
                        <li class="list-inline-item"><a href="#" class="badge badge-dark rounded border border-color-light-3 font-weight-normal text-2 p-2">shoes</a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-3">
                    <h5 class="text-4 text-color-light mb-3">SUBSCRIBE NEWSLETTER</h5>
                    <p class="mb-2">Get all the latest information on events, sales and offers. Sign up for newsletter:</p>
                    <div class="alert alert-success d-none" id="newsletterSuccess">
                        <strong>Success!</strong> You've been added to our email list.
                    </div>
                    <div class="alert alert-danger d-none" id="newsletterError"></div>
                    <form id="newsletterForm" class="form-style-5 opacity-10" action="php/newsletter-subscribe.php" method="POST">
                        <div class="row">
                            <div class="form-group col">
                                <input class="form-control" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <button class="btn btn-primary btn-rounded btn-px-4 btn-py-2 font-weight-bold" type="submit">SUBSCRIBE</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="footer-copyright footer-copyright-style-2 pt-4 pb-5">
                <div class="row align-items-center justify-content-md-between">
                    <div class="col-12 col-md-auto text-center text-md-start mb-2 mb-md-0">
                        <p class="mb-0">Federal Cosméticos © 2021. Todos os direitos reservados</p>
                    </div>
                    <div class="col-12 col-md-auto">
                        <div class="payment-cc justify-content-center justify-content-md-end">
                            <i class="fab fa-cc-visa"></i>
                            <i class="fab fa-cc-paypal"></i>
                            <i class="fab fa-cc-stripe"></i>
                            <i class="fab fa-cc-mastercard"></i>
                            <i class="fab fa-cc-apple-pay"></i>
                        </div>
                    </div>
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
<script src="{{asset("porto/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js")}}"></script>
<script src="{{asset("vendor/jquery.gmap/jquery.gmap.min.js")}}"></script>
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



<!-- Current Page Vendor and Views -->
<script src="{{asset("porto/js/views/view.shop.js")}}"></script>

<!-- Theme Custom -->
<script src="{{asset("porto/js/custom.js")}}"></script>

<!-- Theme Initialization Files -->
<script src="{{asset("porto/js/theme.init.js")}}"></script>

</body>
</html>
