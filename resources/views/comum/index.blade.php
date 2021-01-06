
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Title -->
        <title>E-commerce Home Page 1 | Unify - Responsive Website Template</title>

        <!-- Required Meta Tags Always Come First -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <!-- Favicon -->
        <link rel="shortcut icon" href="../favicon.ico">

        <!-- Google Fonts -->
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700,900">

        <!-- CSS Global Compulsory -->
        <link rel="stylesheet" href="assets/vendor/bootstrap/bootstrap.min.css">

        <!-- CSS Implementing Plugins -->
        <link rel="stylesheet" href="assets/vendor/icon-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/vendor/icon-line-pro/style.css">
        <link rel="stylesheet" href="assets/vendor/slick-carousel/slick/slick.css">
        <link rel="stylesheet" href="assets/vendor/icon-hs/style.css">
        <link rel="stylesheet" href="assets/vendor/hamburgers/hamburgers.min.css">
        <link rel="stylesheet" href="assets/vendor/hs-megamenu/src/hs.megamenu.css">
        <link rel="stylesheet" href="assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.min.css">
        <link rel="stylesheet" href="assets/vendor/animate.css">

        <!-- Revolution Slider -->
        <link rel="stylesheet" href="assets/vendor/revolution-slider/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
        <link rel="stylesheet" href="assets/vendor/revolution-slider/revolution/css/settings.css">
        <link rel="stylesheet" href="assets/vendor/revolution-slider/revolution/css/layers.css">
        <link rel="stylesheet" href="assets/vendor/revolution-slider/revolution/css/navigation.css">
        <link rel="stylesheet" href="assets/vendor/revolution-slider/revolution-addons/typewriter/css/typewriter.css">

        <!-- CSS Unify Theme -->
        <link rel="stylesheet" href="assets/css/styles.e-commerce.css">

        <!-- CSS Customization -->
        <link rel="stylesheet" href="assets/css/custom.css">
    </head>

    <body>
        <main>
            <!-- Header -->
            <header id="js-header" class="u-header u-header--static u-shadow-v19">
                <!-- Top Bar -->
                <div class="u-header__section g-brd-bottom g-brd-gray-light-v4 g-bg-black g-transition-0_3">
                    <div class="container">
                        <div class="row justify-content-between align-items-center g-mx-0--lg">
                            <div class="col-sm-auto g-hidden-sm-down">
                                &nbsp;
                            </div>

                            <div class="col-sm-auto g-hidden-sm-down g-color-white-opacity-0_6 g-font-weight-400 g-pl-15 g-pl-0--sm g-py-14">
                                &nbsp;
                            </div>

                            <div class="col-sm-auto g-pos-rel g-py-14">
                                &nbsp;
                            </div>

                            <div class="col-sm-auto g-pos-rel g-py-14">
                                <!-- List -->
                                <ul class="list-inline g-overflow-hidden g-pt-1 g-mx-minus-4 mb-0">
                                    <li class="list-inline-item g-mx-4">
                                        <a class="g-color-white-opacity-0_6 g-color-primary--hover g-font-weight-400 g-text-underline--none--hover" href="page-our-stores-1.html">Our Stores</a>
                                    </li>

                                    <li class="list-inline-item g-color-white-opacity-0_3 g-mx-4">|</li>
                                    <li class="list-inline-item g-mx-4">
                                        <a class="g-color-white-opacity-0_6 g-color-primary--hover g-font-weight-400 g-text-underline--none--hover" href="page-help-1.html">Help</a>
                                    </li>

                                    <li class="list-inline-item g-color-white-opacity-0_3 g-mx-4">|</li>
                                    <!-- Account -->
                                    <li class="list-inline-item">
                                        <a id="accounts-dropdown-invoker-2" class="g-color-white-opacity-0_6 g-color-primary--hover g-font-weight-400 g-text-underline--none--hover" href="#"
                                           aria-controls="accounts-dropdown-2"
                                           aria-haspopup="true"
                                           aria-expanded="false"
                                           data-dropdown-event="hover"
                                           data-dropdown-target="#accounts-dropdown-2"
                                           data-dropdown-type="css-animation"
                                           data-dropdown-duration="300"
                                           data-dropdown-hide-on-scroll="false"
                                           data-dropdown-animation-in="fadeIn"
                                           data-dropdown-animation-out="fadeOut">
                                            Minha conta
                                        </a>
                                        <ul id="accounts-dropdown-2" class="list-unstyled u-shadow-v29 g-pos-abs g-bg-white g-width-160 g-pb-5 g-mt-19 g-z-index-2"
                                            aria-labelledby="accounts-dropdown-invoker-2">
                                            <li>
                                                <a class="d-block g-color-black g-color-primary--hover g-text-underline--none--hover g-font-weight-400 g-py-5 g-px-20" href="{{route('account.login')}}">
                                                    Login
                                                </a>
                                            </li>
                                            <li>
                                                <a class="d-block g-color-black g-color-primary--hover g-text-underline--none--hover g-font-weight-400 g-py-5 g-px-20" href="{{route('account.signup')}}">
                                                    Cadastra-se
                                                </a>
                                            </li>
                                            <li>
                                                <a class="d-block g-color-black g-color-primary--hover g-text-underline--none--hover g-font-weight-400 g-py-5 g-px-20" href="{{route('account.wishlist')}}">
                                                    Lista de interesses
                                                </a>
                                            </li>
                                            <li>
                                                <a class="d-block g-color-black g-color-primary--hover g-text-underline--none--hover g-font-weight-400 g-py-5 g-px-20" href="{{route('account.orders')}}">
                                                    Minhas compras
                                                </a>
                                            </li>
                                            <li>
                                                <a class="d-block g-color-black g-color-primary--hover g-text-underline--none--hover g-font-weight-400 g-py-5 g-px-20" href="{{route('account.logout')}}">
                                                    Sair
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- End Account -->
                                </ul>
                                <!-- End List -->
                            </div>

                            <div class="col-sm-auto g-pr-15 g-pr-0--sm">
                                <!-- Basket -->
                                <div class="u-basket d-inline-block g-z-index-3">
                                    <div class="g-py-10 g-px-6">
                                        <a href="#" id="basket-bar-invoker" class="u-icon-v1 g-color-white-opacity-0_8 g-color-primary--hover g-font-size-17 g-text-underline--none--hover"
                                           aria-controls="basket-bar"
                                           aria-haspopup="true"
                                           aria-expanded="false"
                                           data-dropdown-event="hover"
                                           data-dropdown-target="#basket-bar"
                                           data-dropdown-type="css-animation"
                                           data-dropdown-duration="300"
                                           data-dropdown-hide-on-scroll="false"
                                           data-dropdown-animation-in="fadeIn"
                                           data-dropdown-animation-out="fadeOut">
                                            <span class="u-badge-v1--sm g-color-white g-bg-primary g-font-size-11 g-line-height-1_4 g-rounded-50x g-pa-4" style="top: 7px !important; right: 3px !important;">4</span>
                                            <i class="icon-hotel-restaurant-105 u-line-icon-pro"></i>
                                        </a>
                                    </div>

                                    <div id="basket-bar" class="u-basket__bar u-dropdown--css-animation u-dropdown--hidden g-text-transform-none g-bg-white g-brd-around g-brd-gray-light-v4"
                                         aria-labelledby="basket-bar-invoker">
                                        <div class="g-brd-bottom g-brd-gray-light-v4 g-pa-15 g-mb-10">
                                            <span class="d-block h6 text-center text-uppercase mb-0">Shopping Cart</span>
                                        </div>
                                        <div class="js-scrollbar g-height-200">
                                            <!-- Product -->
                                            <div class="u-basket__product g-brd-none g-px-20">
                                                <div class="row no-gutters g-pb-5">
                                                    <div class="col-4 pr-3">
                                                        <a class="u-basket__product-img" href="#">
                                                            <img class="img-fluid" src="assets/img-temp/150x150/img1.jpg" alt="Image Description">
                                                        </a>
                                                    </div>

                                                    <div class="col-8">
                                                        <h6 class="g-font-weight-400 g-font-size-default">
                                                            <a class="g-color-black g-color-primary--hover g-text-underline--none--hover" href="#">Black Glasses</a>
                                                        </h6>
                                                        <small class="g-color-primary g-font-size-12">1 x $22.00</small>
                                                    </div>
                                                </div>
                                                <button type="button" class="u-basket__product-remove">&times;</button>
                                            </div>
                                            <!-- End Product -->

                                            <!-- Product -->
                                            <div class="u-basket__product g-brd-none g-px-20">
                                                <div class="row no-gutters g-pb-5">
                                                    <div class="col-4 pr-3">
                                                        <a class="u-basket__product-img" href="#">
                                                            <img class="img-fluid" src="assets/img-temp/150x150/img2.jpg" alt="Image Description">
                                                        </a>
                                                    </div>

                                                    <div class="col-8">
                                                        <h6 class="g-font-weight-400 g-font-size-default">
                                                            <a class="g-color-black g-color-primary--hover g-text-underline--none--hover" href="#">Gloves</a>
                                                        </h6>
                                                        <small class="g-color-primary g-font-size-12">2 x $55.00</small>
                                                    </div>
                                                </div>
                                                <button type="button" class="u-basket__product-remove">&times;</button>
                                            </div>
                                            <!-- End Product -->

                                            <!-- Product -->
                                            <div class="u-basket__product g-brd-none g-px-20">
                                                <div class="row no-gutters g-pb-5">
                                                    <div class="col-4 pr-3">
                                                        <a class="u-basket__product-img" href="#">
                                                            <img class="img-fluid" src="assets/img-temp/150x150/img3.jpg" alt="Image Description">
                                                        </a>
                                                    </div>

                                                    <div class="col-8">
                                                        <h6 class="g-font-weight-400 g-font-size-default">
                                                            <a class="g-color-black g-color-primary--hover g-text-underline--none--hover" href="#">Chukka Shoes</a>
                                                        </h6>
                                                        <small class="g-color-primary g-font-size-12">1 x $199.00</small>
                                                    </div>
                                                </div>
                                                <button type="button" class="u-basket__product-remove">&times;</button>
                                            </div>
                                            <!-- End Product -->

                                            <!-- Product -->
                                            <div class="u-basket__product g-brd-none g-px-20">
                                                <div class="row no-gutters g-pb-5">
                                                    <div class="col-4 pr-3">
                                                        <a class="u-basket__product-img" href="#">
                                                            <img class="img-fluid" src="assets/img-temp/150x150/img4.jpg" alt="Image Description">
                                                        </a>
                                                    </div>

                                                    <div class="col-8">
                                                        <h6 class="g-font-weight-400 g-font-size-default">
                                                            <a class="g-color-black g-color-primary--hover g-text-underline--none--hover" href="#">Desk Clock</a>
                                                        </h6>
                                                        <small class="g-color-primary g-font-size-12">1 x $12.00</small>
                                                    </div>
                                                </div>
                                                <button type="button" class="u-basket__product-remove">&times;</button>
                                            </div>
                                            <!-- End Product -->
                                        </div>

                                        <div class="clearfix g-px-15">
                                            <div class="row align-items-center text-center g-brd-y g-brd-gray-light-v4 g-font-size-default">
                                                <div class="col g-brd-right g-brd-gray-light-v4">
                                                    <strong class="d-block g-py-10 text-uppercase g-color-main g-font-weight-500 g-py-10">Total</strong>
                                                </div>
                                                <div class="col">
                                                    <strong class="d-block g-py-10 g-color-main g-font-weight-500 g-py-10">$433.00</strong>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="g-pa-20">
                                            <div class="text-center g-mb-15">
                                                <a class="text-uppercase g-color-primary g-color-main--hover g-font-weight-400 g-font-size-13 g-text-underline--none--hover" href="page-checkout-1.html">
                                                    View Cart
                                                    <i class="ml-2 icon-finance-100 u-line-icon-pro"></i>
                                                </a>
                                            </div>
                                            <a class="btn btn-block u-btn-black g-brd-primary--hover g-bg-primary--hover g-font-size-12 text-uppercase rounded g-py-10" href="page-checkout-1.html">Proceed to Checkout</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Basket -->

                                <!-- Search -->
                                <div class="d-inline-block g-valign-middle">
                                    <div class="g-py-10 g-pl-15">
                                        <a href="#" class="g-color-white-opacity-0_8 g-color-primary--hover g-font-size-17 g-text-underline--none--hover"
                                           aria-haspopup="true"
                                           aria-expanded="false"
                                           data-dropdown-event="click"
                                           aria-controls="searchform-1"
                                           data-dropdown-target="#searchform-1"
                                           data-dropdown-type="css-animation"
                                           data-dropdown-duration="300"
                                           data-dropdown-animation-in="fadeInUp"
                                           data-dropdown-animation-out="fadeOutDown">
                                            <i class="g-pos-rel g-top-3 icon-education-045 u-line-icon-pro"></i>
                                        </a>
                                    </div>

                                    <!-- Search Form -->
                                    <form id="searchform-1" class="u-searchform-v1 u-dropdown--css-animation u-dropdown--hidden u-shadow-v20 g-brd-around g-brd-gray-light-v4 g-bg-white g-right-0 rounded g-pa-10 1g-mt-8">
                                        <div class="input-group">
                                            <input class="form-control g-font-size-13" type="search" placeholder="Search Here...">
                                            <div class="input-group-append p-0">
                                                <button class="btn u-btn-primary g-font-size-12 text-uppercase g-py-13 g-px-15" type="submit">Go</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- End Search Form -->
                                </div>
                                <!-- End Search -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Top Bar -->

                <div class="u-header__section u-header__section--light g-bg-white g-transition-0_3 g-py-10">
                    <nav class="js-mega-menu navbar navbar-expand-lg">
                        <div class="container">
                            <!-- Responsive Toggle Button -->
                            <button class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pa-0 g-pos-abs g-top-3 g-right-0" type="button"
                                    aria-label="Toggle navigation"
                                    aria-expanded="false"
                                    aria-controls="navBar"
                                    data-toggle="collapse"
                                    data-target="#navBar">
                                <span class="hamburger hamburger--slider g-pr-0">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </span>
                            </button>
                            <!-- End Responsive Toggle Button -->

                            <!-- Logo -->
                            <a class="navbar-brand" href="{{route('home.index')}}">
                                <img src="assets/img/logo/logo-1.png" alt="Image Description">
                            </a>
                            <!-- End Logo -->

                            <!-- Navigation -->
                            <div id="navBar" class="collapse navbar-collapse align-items-center flex-sm-row g-pt-15 g-pt-0--lg">
                                <ul class="navbar-nav ml-auto">
                                    <!-- Home - Submenu -->
                                    <li class="nav-item g-mx-10--lg g-mx-15--xl">
                                        <a id="nav-link--home" class="nav-link text-uppercase g-color-primary--hover g-px-5 g-py-20" href="{{route('home.index')}}"
                                           aria-haspopup="true"
                                           aria-expanded="false"
                                           aria-controls="nav-submenu--home">
                                            Home
                                        </a>
                                    </li>
                                    <!-- End Home - Submenu -->
                                    <!-- Categorias - Submenu -->
                                    <li class="nav-item g-mx-10--lg g-mx-15--xl">
                                        <a id="nav-link--home" class="nav-link text-uppercase g-color-primary--hover g-px-5 g-py-20" href="{{route('categoria.index')}}"
                                           aria-haspopup="true"
                                           aria-expanded="false"
                                           aria-controls="nav-submenu--home">
                                            Categorias
                                        </a>
                                    </li>
                                    <!-- End Categorias - Submenu -->
                                    <!-- Categorias - Submenu -->
                                    <li class="nav-item g-mx-10--lg g-mx-15--xl">
                                        <a id="nav-link--home" class="nav-link text-uppercase g-color-primary--hover g-px-5 g-py-20" href="{{route('contact.index')}}"
                                           aria-haspopup="true"
                                           aria-expanded="false"
                                           aria-controls="nav-submenu--home">
                                            Contato
                                        </a>
                                    </li>
                                    <!-- End Categorias - Submenu -->

                                </ul>
                            </div>
                            <!-- End Navigation -->
                        </div>
                    </nav>
                </div>
            </header>
            <!-- End Header -->

            @yield('content')

            <!-- Footer -->
            <footer class="g-bg-main-light-v1">
                <!-- Content -->
                <div class="g-brd-bottom g-brd-secondary-light-v1">
                    <div class="container g-pt-100">
                        <div class="row justify-content-start g-mb-30 g-mb-0--md">
                            <div class="col-md-5 g-mb-30">
                                <h2 class="h5 g-color-gray-light-v3 mb-4">Products</h2>

                                <div class="row">
                                    <div class="col-4 g-mb-20">
                                        <!-- Links -->
                                        <ul class="list-unstyled g-font-size-13 mb-0">
                                            <li class="g-mb-10">
                                                <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="#">SmartPhone</a>
                                            </li>
                                            <li class="g-my-10">
                                                <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="#">Laptop</a>
                                            </li>
                                            <li class="g-my-10">
                                                <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="#">Mouse</a>
                                            </li>
                                            <li class="g-my-10">
                                                <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="#">Monitor</a>
                                            </li>
                                            <li class="g-my-10">
                                                <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="#">Watch</a>
                                            </li>
                                        </ul>
                                        <!-- End Links -->
                                    </div>

                                    <div class="col-4 g-mb-20">
                                        <!-- Links -->
                                        <ul class="list-unstyled g-font-size-13 mb-0">
                                            <li class="g-mb-10">
                                                <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="#">Tablet</a>
                                            </li>
                                            <li class="g-my-10">
                                                <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="#">Accessorie</a>
                                            </li>
                                            <li class="g-my-10">
                                                <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="#">Mouses Pad</a>
                                            </li>
                                            <li class="g-my-10">
                                                <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="#">Handset</a>
                                            </li>
                                            <li class="g-my-10">
                                                <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="#">Phablet</a>
                                            </li>
                                        </ul>
                                        <!-- End Links -->
                                    </div>

                                    <div class="col-4 g-mb-20">
                                        <!-- Links -->
                                        <ul class="list-unstyled g-font-size-13 mb-0">
                                            <li class="g-mb-10">
                                                <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="#">Speakers</a>
                                            </li>
                                            <li class="g-my-10">
                                                <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="#">Camera</a>
                                            </li>
                                            <li class="g-my-10">
                                                <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="#">Play Station</a>
                                            </li>
                                            <li class="g-my-10">
                                                <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="#">Xbox</a>
                                            </li>
                                        </ul>
                                        <!-- End Links -->
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3 g-mb-30 g-mb-0--sm">
                                <h2 class="h5 g-color-gray-light-v3 mb-4">Brands</h2>

                                <div class="row">
                                    <div class="col-6 g-mb-20">
                                        <!-- Links -->
                                        <ul class="list-unstyled g-font-size-13 mb-0">
                                            <li class="g-mb-10">
                                                <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="#">Logitech</a>
                                            </li>
                                            <li class="g-my-10">
                                                <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="#">Samsung</a>
                                            </li>
                                            <li class="g-my-10">
                                                <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="#">Microsoft</a>
                                            </li>
                                            <li class="g-my-10">
                                                <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="#">Apple</a>
                                            </li>
                                        </ul>
                                        <!-- End Links -->
                                    </div>

                                    <div class="col-6 g-mb-20">
                                        <!-- Links -->
                                        <ul class="list-unstyled g-font-size-13 mb-0">
                                            <li class="g-mb-10">
                                                <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="#">Huawei</a>
                                            </li>
                                            <li class="g-my-10">
                                                <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="#">Motorola</a>
                                            </li>
                                            <li class="g-my-10">
                                                <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="#">Sony</a>
                                            </li>
                                            <li class="g-my-10">
                                                <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="#">Nokia</a>
                                            </li>
                                        </ul>
                                        <!-- End Links -->
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-5 col-md-3 ml-auto g-mb-30 g-mb-0--sm">
                                <h2 class="h5 g-color-gray-light-v3 mb-4">Contacts</h2>

                                <!-- Links -->
                                <ul class="list-unstyled g-color-gray-dark-v5 g-font-size-13">
                                    <li class="media my-3">
                                        <i class="d-flex mt-1 mr-3 icon-hotel-restaurant-235 u-line-icon-pro"></i>
                                        <div class="media-body">
                                            Unit 25 Suite 3, 925 Prospect
                                            <br>
                                            PI New York Avenue
                                        </div>
                                    </li>
                                    <li class="media my-3">
                                        <i class="d-flex mt-1 mr-3 icon-communication-062 u-line-icon-pro"></i>
                                        <div class="media-body">
                                            htmlstream@support.com
                                        </div>
                                    </li>
                                    <li class="media my-3">
                                        <i class="d-flex mt-1 mr-3 icon-communication-033 u-line-icon-pro"></i>
                                        <div class="media-body">
                                            +32 333 444 555
                                        </div>
                                    </li>
                                </ul>
                                <!-- End Links -->
                            </div>
                        </div>

                        <!-- Secondary Content -->
                        <div class="row">
                            <div class="col-md-4 g-mb-50">
                                <h2 class="h5 g-color-gray-light-v3 mb-4">Subscribe</h2>

                                <!-- Subscribe Form -->
                                <form class="input-group u-shadow-v19 rounded">
                                    <input class="form-control g-brd-none g-color-gray-dark-v5 g-bg-main-light-v2 g-bg-main-light-v2--focus g-placeholder-gray-dark-v3 rounded g-px-20 g-py-8" type="email" placeholder="Enter your email">
                                    <span class="input-group-addon u-shadow-v19 g-brd-none g-bg-main-light-v2 g-pa-5">
                                        <button class="btn u-btn-primary rounded text-uppercase g-py-8 g-px-18" type="submit">
                                            <i class="fa fa-angle-right"></i>
                                        </button>
                                    </span>
                                </form>
                                <!-- End Subscribe Form -->
                            </div>

                            <div class="col-6 col-md-3 offset-lg-1 g-mb-30">
                                <h2 class="h5 g-color-gray-light-v3 mb-4">Language/Currency:</h2>

                                <!-- Large Button Group -->
                                <div class="btn-group dropup">
                                    <button class="btn btn-black g-bg-main-light-v1 btn-lg g-color-gray-dark-v5 g-color-primary--hover g-font-size-default g-pl-0 mr-5" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg class="g-ml-minus-6" xmlns="http://www.w3.org/2000/svg" height="11" width="27" viewBox="0 0 640 480">
                                        <defs>
                                        <clipPath id="a">
                                            <path fill-opacity=".67" d="M-85.333 0h682.67v512h-682.67z"/>
                                        </clipPath>
                                        </defs>
                                        <g clip-path="url(#a)" transform="translate(80) scale(.94)">
                                        <g stroke-width="1pt">
                                        <path fill="#006" d="M-256 0H768.02v512.01H-256z"/>
                                        <path d="M-256 0v57.244l909.535 454.768H768.02V454.77L-141.515 0H-256zM768.02 0v57.243L-141.515 512.01H-256v-57.243L653.535 0H768.02z" fill="#fff"/>
                                        <path d="M170.675 0v512.01h170.67V0h-170.67zM-256 170.67v170.67H768.02V170.67H-256z" fill="#fff"/>
                                        <path d="M-256 204.804v102.402H768.02V204.804H-256zM204.81 0v512.01h102.4V0h-102.4zM-256 512.01L85.34 341.34h76.324l-341.34 170.67H-256zM-256 0L85.34 170.67H9.016L-256 38.164V0zm606.356 170.67L691.696 0h76.324L426.68 170.67h-76.324zM768.02 512.01L426.68 341.34h76.324L768.02 473.848v38.162z" fill="#c00"/>
                                        </g>
                                        </g>
                                        </svg>
                                        English
                                        <i class="g-font-size-12 ml-2 fa fa-caret-up"></i>
                                    </button>
                                    <div class="dropdown-menu g-brd-gray-dark-v2 g-bg-main-light-v2">
                                        <a class="dropdown-item g-color-gray-dark-v5" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="11" width="27" viewBox="0 0 640 480">
                                            <defs>
                                            <clipPath id="a">
                                                <path fill-opacity=".67" d="M-85.333 0h682.67v512h-682.67z"/>
                                            </clipPath>
                                            </defs>
                                            <g clip-path="url(#a)" transform="translate(80) scale(.94)">
                                            <g stroke-width="1pt">
                                            <path fill="#006" d="M-256 0H768.02v512.01H-256z"/>
                                            <path d="M-256 0v57.244l909.535 454.768H768.02V454.77L-141.515 0H-256zM768.02 0v57.243L-141.515 512.01H-256v-57.243L653.535 0H768.02z" fill="#fff"/>
                                            <path d="M170.675 0v512.01h170.67V0h-170.67zM-256 170.67v170.67H768.02V170.67H-256z" fill="#fff"/>
                                            <path d="M-256 204.804v102.402H768.02V204.804H-256zM204.81 0v512.01h102.4V0h-102.4zM-256 512.01L85.34 341.34h76.324l-341.34 170.67H-256zM-256 0L85.34 170.67H9.016L-256 38.164V0zm606.356 170.67L691.696 0h76.324L426.68 170.67h-76.324zM768.02 512.01L426.68 341.34h76.324L768.02 473.848v38.162z" fill="#c00"/>
                                            </g>
                                            </g>
                                            </svg>
                                            English
                                        </a>
                                        <a class="dropdown-item g-color-gray-dark-v5" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="11" width="27" viewBox="0 0 640 480">
                                            <g stroke-width="1pt" fill-rule="evenodd">
                                            <path fill="#fff" d="M0 0h640v480H0z"/>
                                            <path fill="#00267f" d="M0 0h213.33v480H0z"/>
                                            <path fill="#f31830" d="M426.67 0H640v480H426.67z"/>
                                            </g>
                                            </svg>
                                            Spanish
                                        </a>
                                        <a class="dropdown-item g-color-gray-dark-v5" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="11" width="27" viewBox="0 0 640 480">
                                            <g fill-rule="evenodd" stroke-width="1pt">
                                            <path fill="#fff" d="M0 0h640v480H0z"/>
                                            <path fill="#0039a6" d="M0 160.003h640V480H0z"/>
                                            <path fill="#d52b1e" d="M0 319.997h640V480H0z"/>
                                            </g>
                                            </svg>
                                            Russian
                                        </a>
                                        <a class="dropdown-item g-color-gray-dark-v5" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="11" width="27" viewBox="0 0 640 480">
                                            <path fill="#ffce00" d="M0 320h640v160.002H0z"/>
                                            <path d="M0 0h640v160H0z"/>
                                            <path fill="#d00" d="M0 160h640v160H0z"/>
                                            </svg>
                                            German
                                        </a>
                                    </div>
                                </div>
                                <!-- End Large Button Group -->

                                <!-- Large Button Group -->
                                <div class="btn-group dropup">
                                    <button class="btn btn-black g-bg-main-light-v1 btn-lg g-color-gray-dark-v5 g-color-primary--hover g-font-size-default g-pl-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="mr-2 fa fa-euro"></i>
                                        Euro
                                        <i class="mr-2 g-font-size-12 ml-2 fa fa-caret-up"></i>
                                    </button>
                                    <div class="dropdown-menu g-max-width-100 g-brd-gray-dark-v2 g-bg-main-light-v2">
                                        <a class="dropdown-item g-color-gray-dark-v5" href="#">
                                            <i class="mr-2 fa fa-euro"></i>
                                            Euro
                                        </a>
                                        <a class="dropdown-item g-color-gray-dark-v5" href="#">
                                            <i class="mr-2 fa fa-dollar"></i>
                                            US Dollars
                                        </a>
                                        <a class="dropdown-item g-color-gray-dark-v5" href="#">
                                            <i class="mr-2 fa fa-gbp"></i>
                                            GBP
                                        </a>
                                        <a class="dropdown-item g-color-gray-dark-v5" href="#">
                                            <i class="mr-2 fa fa-yen"></i>
                                            Yen
                                        </a>
                                    </div>
                                </div>
                                <!-- End Large Button Group -->
                            </div>

                            <div class="col-6 col-md-3 ml-auto g-mb-30">
                                <h2 class="h5 g-color-gray-light-v3 mb-4">Follow Us On:</h2>

                                <!-- Social Icons -->
                                <ul class="list-inline mb-50">
                                    <li class="list-inline-item g-mr-2">
                                        <a class="u-icon-v1 u-icon-slide-up--hover g-color-gray-dark-v4 g-color-white--hover g-bg-facebook--hover rounded" href="#">
                                            <i class="g-font-size-18 g-line-height-1 u-icon__elem-regular fa fa-facebook"></i>
                                            <i class="g-color-white g-font-size-18 g-line-height-0_8 u-icon__elem-hover fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item g-mx-2">
                                        <a class="u-icon-v1 u-icon-slide-up--hover g-color-gray-dark-v4 g-color-white--hover g-bg-twitter--hover rounded" href="#">
                                            <i class="g-font-size-18 g-line-height-1 u-icon__elem-regular fa fa-twitter"></i>
                                            <i class="g-color-white g-font-size-18 g-line-height-0_8 u-icon__elem-hover fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item g-mx-2">
                                        <a class="u-icon-v1 u-icon-slide-up--hover g-color-gray-dark-v4 g-color-white--hover g-bg-instagram--hover rounded" href="#">
                                            <i class="g-font-size-18 g-line-height-1 u-icon__elem-regular fa fa-instagram"></i>
                                            <i class="g-color-white g-font-size-18 g-line-height-0_8 u-icon__elem-hover fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item g-mx-2">
                                        <a class="u-icon-v1 u-icon-slide-up--hover g-color-gray-dark-v4 g-color-white--hover g-bg-google-plus--hover rounded" href="#">
                                            <i class="g-font-size-18 g-line-height-1 u-icon__elem-regular fa fa-google-plus"></i>
                                            <i class="g-color-white g-font-size-18 g-line-height-0_8 u-icon__elem-hover fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item g-mx-2">
                                        <a class="u-icon-v1 u-icon-slide-up--hover g-color-gray-dark-v4 g-color-white--hover g-bg-linkedin--hover rounded" href="#">
                                            <i class="g-font-size-18 g-line-height-1 u-icon__elem-regular fa fa-linkedin"></i>
                                            <i class="g-color-white g-font-size-18 g-line-height-0_8 u-icon__elem-hover fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                                <!-- End Social Icons -->
                            </div>
                        </div>
                        <!-- End Secondary Content -->
                    </div>
                </div>
                <!-- End Content -->

                <!-- Copyright -->
                <div class="container g-pt-30 g-pb-10">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-md-6 g-mb-20">
                            <p class="g-font-size-13 mb-0">2020 &copy; Htmlstream. All Rights Reserved.</p>
                        </div>

                        <div class="col-md-6 text-md-right g-mb-20">
                            <ul class="list-inline g-color-gray-dark-v5 g-font-size-25 mb-0">
                                <li class="list-inline-item g-cursor-pointer mr-1">
                                    <i class="fa fa-cc-visa" title="Visa"
                                       data-toggle="tooltip"
                                       data-placement="top"></i>
                                </li>
                                <li class="list-inline-item g-cursor-pointer mx-1">
                                    <i class="fa fa-cc-paypal" title="Paypal"
                                       data-toggle="tooltip"
                                       data-placement="top"></i>
                                </li>
                                <li class="list-inline-item g-cursor-pointer mx-1">
                                    <i class="fa fa-cc-mastercard" title="Master Card"
                                       data-toggle="tooltip"
                                       data-placement="top"></i>
                                </li>
                                <li class="list-inline-item g-cursor-pointer ml-1">
                                    <i class="fa fa-cc-stripe" title="Stripe"
                                       data-toggle="tooltip"
                                       data-placement="top"></i>
                                </li>
                                <li class="list-inline-item g-cursor-pointer ml-1">
                                    <i class="fa fa-cc-discover" title="Discover"
                                       data-toggle="tooltip"
                                       data-placement="top"></i>
                                </li>
                                <li class="list-inline-item g-cursor-pointer ml-1">
                                    <i class="fa fa-cc-jcb" title="JCB"
                                       data-toggle="tooltip"
                                       data-placement="top"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Copyright -->
            </footer>
            <!-- End Footer -->

            <!-- Go To Top -->
            <a class="js-go-to u-go-to-v2" href="#"
               data-type="fixed"
               data-position='{
               "bottom": 15,
               "right": 15
               }'
               data-offset-top="400"
               data-compensation="#js-header"
               data-show-effect="zoomIn">
                <i class="hs-icon hs-icon-arrow-top"></i>
            </a>
            <!-- End Go To Top -->

            <!-- Modal Window -->
            <div id="modal-type-onscroll" class="js-autonomous-popup text-left g-bg-white g-pos-rel g-rounded-5" style="display: none;"
                 data-modal-type="onscroll"
                 data-open-effect="fadeIn"
                 data-close-effect="fadeIn"
                 data-breakpoint="1000"
                 data-speed="500">
                <button type="button" class="close g-color-main-light-v3 g-color-primary--hover g-font-size-13 g-pos-abs g-top-15 g-right-15 g-opacity-1" onclick="Custombox.modal.close();">
                    <i class="hs-icon hs-icon-close"></i>
                </button>

                <!-- Modal Window - Content -->
                <div class="g-width-720">
                    <div class="row align-items-center">
                        <div class="col-sm-6 g-height-350--sm g-bg-size-cover g-bg-pos-top-center g-rounded-left-5" data-bg-img-src="assets/img-temp/300x300/img1.jpg"></div>

                        <div class="col-sm-6">
                            <div class="g-pl-30 g-pl-20--sm g-pr-30 g-py-20">
                                <!-- Info -->
                                <div class="g-mb-35">
                                    <h3 class="h1 g-color-primary">Subscribe</h3>
                                    <p class="g-font-weight-300 g-font-size-16">Get free promotions every month!</p>
                                </div>
                                <!-- End Info -->

                                <!-- Subscribe Form -->
                                <form class="input-group u-shadow-v19 rounded g-mb-20">
                                    <input class="form-control g-brd-right-none g-brd-gray-light-v4 g-color-white g-bg-main-light-v3 g-rounded-left-5 g-px-20 g-py-8" type="email" placeholder="Enter your email">
                                    <span class="input-group-addon u-shadow-v19 g-brd-left-none g-brd-gray-light-v4 g-bg-main-light-v3 g-rounded-right-5 g-pa-5">
                                        <button class="btn u-btn-primary rounded text-uppercase g-py-8 g-px-18" type="submit">
                                            <i class="fa fa-angle-right"></i>
                                        </button>
                                    </span>
                                </form>
                                <!-- End Subscribe Form -->

                                <!-- Social Icons -->
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item g-mx-0">
                                        <a class="u-icon-v3 u-icon-size--xs g-color-main-light-v3 g-color-white--hover g-bg-white g-bg-primary--hover g-font-size-13 rounded" href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item g-mx-0">
                                        <a class="u-icon-v3 u-icon-size--xs g-color-main-light-v3 g-color-white--hover g-bg-white g-bg-primary--hover g-font-size-13 rounded" href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item g-mx-0">
                                        <a class="u-icon-v3 u-icon-size--xs g-color-main-light-v3 g-color-white--hover g-bg-white g-bg-primary--hover g-font-size-13 rounded" href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item g-mx-0">
                                        <a class="u-icon-v3 u-icon-size--xs g-color-main-light-v3 g-color-white--hover g-bg-white g-bg-primary--hover g-font-size-13 rounded" href="#">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item g-mx-0">
                                        <a class="u-icon-v3 u-icon-size--xs g-color-main-light-v3 g-color-white--hover g-bg-white g-bg-primary--hover g-font-size-13 rounded" href="#">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                                <!-- End Social Icons -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Modal Window - Content -->
            </div>
            <!-- End Modal Window -->
        </main>

        <div class="u-outer-spaces-helper"></div>

        <!-- JS Global Compulsory -->
        <script src="assets/vendor/jquery/jquery.min.js"></script>
        <script src="assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
        <script src="assets/vendor/popper.js/popper.min.js"></script>
        <script src="assets/vendor/bootstrap/bootstrap.min.js"></script>

        <!-- JS Implementing Plugins -->
        <script src="assets/vendor/jquery.countdown.min.js"></script>
        <script src="assets/vendor/slick-carousel/slick/slick.js"></script>
        <script src="assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
        <script src="assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="assets/vendor/appear.js"></script>

        <!-- JS Revolution Slider -->
        <script src="assets/vendor/revolution-slider/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="assets/vendor/revolution-slider/revolution/js/jquery.themepunch.revolution.min.js"></script>

        <script src="assets/vendor/revolution-slider/revolution-addons/typewriter/js/revolution.addon.typewriter.min.js"></script>

        <script src="assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
        <script src="assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script src="assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.migration.min.js"></script>
        <script src="assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <script src="assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.video.min.js"></script>

        <!-- JS Unify -->
        <script src="assets/js/hs.core.js"></script>
        <script src="assets/js/components/hs.header.js"></script>
        <script src="assets/js/helpers/hs.hamburgers.js"></script>
        <script src="assets/js/components/hs.dropdown.js"></script>
        <script src="assets/js/components/hs.scrollbar.js"></script>
        <script src="assets/js/components/hs.countdown.js"></script>
        <script src="assets/js/components/hs.carousel.js"></script>
        <script src="assets/js/components/hs.go-to.js"></script>
        <script src="assets/js/components/hs.count-qty.js"></script>

        <!-- JS Customization -->
        <script src="assets/js/custom.js"></script>

        <!-- JS Plugins Init. -->
        <script>
                    $(document).on('ready', function () {
                        // initialization of carousel
                        $.HSCore.components.HSCarousel.init('[class*="js-carousel"]');

                        $('#carouselCus1').slick('setOption', 'responsive', [{
                                breakpoint: 1200,
                                settings: {
                                    slidesToShow: 4
                                }
                            }, {
                                breakpoint: 992,
                                settings: {
                                    slidesToShow: 3
                                }
                            }, {
                                breakpoint: 768,
                                settings: {
                                    slidesToShow: 2
                                }
                            }], true);
                    });

                    // initialization of header
                    $.HSCore.components.HSHeader.init($('#js-header'));
                    $.HSCore.helpers.HSHamburgers.init('.hamburger');

                    // initialization of HSMegaMenu component
                    $('.js-mega-menu').HSMegaMenu({
                        event: 'hover',
                        pageContainer: $('.container'),
                        breakpoint: 991
                    });

                    // initialization of HSDropdown component
                    $.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {
                        afterOpen: function () {
                            $(this).find('input[type="search"]').focus();
                        }
                    });

                    // initialization of go to
                    $.HSCore.components.HSGoTo.init('.js-go-to');

                    // initialization of countdowns
                    var countdowns = $.HSCore.components.HSCountdown.init('.js-countdown', {
                        yearsElSelector: '.js-cd-years',
                        monthElSelector: '.js-cd-month',
                        daysElSelector: '.js-cd-days',
                        hoursElSelector: '.js-cd-hours',
                        minutesElSelector: '.js-cd-minutes',
                        secondsElSelector: '.js-cd-seconds'
                    });

                    // initialization of quantity counter
                    $.HSCore.components.HSCountQty.init('.js-quantity');

                    $(window).on('load', function () {
                        // initialization of HSScrollBar component
                        $.HSCore.components.HSScrollBar.init($('.js-scrollbar'));
                    });

                    // initialization of revolution slider
                    var tpj = jQuery;

                    var revapi1014;
                    tpj(document).ready(function () {
                        if (tpj("#rev_slider_1014_1").revolution == undefined) {
                            revslider_showDoubleJqueryError("#rev_slider_1014_1");
                        } else {
                            revapi1014 = tpj("#rev_slider_1014_1").show().revolution({
                                sliderType: "standard",
                                jsFileLocation: "revolution/js/",
                                sliderLayout: "fullscreen",
                                dottedOverlay: "none",
                                delay: 9000,
                                navigation: {
                                    keyboardNavigation: "off",
                                    keyboard_direction: "horizontal",
                                    mouseScrollNavigation: "off",
                                    mouseScrollReverse: "default",
                                    onHoverStop: "off",
                                    touch: {
                                        touchenabled: "on",
                                        swipe_threshold: 75,
                                        swipe_min_touches: 1,
                                        swipe_direction: "horizontal",
                                        drag_block_vertical: false
                                    }
                                    ,
                                    arrows: {
                                        style: "uranus",
                                        enable: true,
                                        hide_onmobile: true,
                                        hide_under: 768,
                                        hide_onleave: false,
                                        tmp: '',
                                        left: {
                                            h_align: "left",
                                            v_align: "center",
                                            h_offset: 20,
                                            v_offset: 0
                                        },
                                        right: {
                                            h_align: "right",
                                            v_align: "center",
                                            h_offset: 20,
                                            v_offset: 0
                                        }
                                    }
                                },
                                parallax: {
                                    type: "mouse",
                                    origo: "slidercenter",
                                    speed: 2000,
                                    levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
                                    disable_onmobile: "on"
                                },
                                responsiveLevels: [1240, 1024, 778, 480],
                                visibilityLevels: [1240, 1024, 778, 480],
                                gridwidth: [1240, 1024, 778, 480],
                                gridheight: [868, 768, 960, 600],
                                lazyType: "none",
                                shadow: 0,
                                spinner: "off",
                                stopLoop: "on",
                                stopAfterLoops: 0,
                                stopAtSlide: 1,
                                shuffle: "off",
                                autoHeight: "off",
                                fullScreenAutoWidth: "off",
                                fullScreenAlignForce: "off",
                                fullScreenOffsetContainer: "#js-header",
                                fullScreenOffset: "",
                                disableProgressBar: "on",
                                hideThumbsOnMobile: "off",
                                hideSliderAtLimit: 0,
                                hideCaptionAtLimit: 0,
                                hideAllCaptionAtLilmit: 0,
                                debugMode: false,
                                fallbacks: {
                                    simplifyAll: "off",
                                    nextSlideOnWindowFocus: "off",
                                    disableFocusListener: false
                                }
                            });
                        }

                        RsTypewriterAddOn(tpj, revapi1014);
                    });
        </script>
        @yield('body_footer')
    </body>
</html>
