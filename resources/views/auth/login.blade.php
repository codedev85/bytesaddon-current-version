
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Login') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('login') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <div class="form-check">--}}
{{--                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--                                    <label class="form-check-label" for="remember">--}}
{{--                                        {{ __('Remember Me') }}--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-8 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Login') }}--}}
{{--                                </button>--}}

{{--                                @if (Route::has('password.request'))--}}
{{--                                    <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                        {{ __('Forgot Your Password?') }}--}}
{{--                                    </a>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- Page Banner Section Start -->
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login / Register || bytesaddon.com.ng</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link href="{{asset('assets/images/favicon.ico')}}" type="img/x-icon" rel="shortcut icon">
    <!-- All css files are included here. -->
    <link rel="stylesheet" href="{{asset('assets/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/iconfont.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/helper.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/plugins.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- Modernizr JS -->
    <script src="{{asset('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>

<div id="main-wrapper">


    <!--Header section start-->
    <header class="header header-transparent header-center header-sticky d-none d-lg-block">

        <div class="header-bottom menu-right">
            <div class="container-fluid pl-30 pr-30">
                <div class="row align-items-center">

                    <!--Logo start-->
                    <div class="col-xl-1 col-12 text-center mt-20 mb-20">
                        <div class="logo">
                            <a href="{{url('/')}}"><img src="assets/images/logo-light.jpg" alt=""></a>
                        </div>
                    </div>
                    <!--Logo end-->

                    <!--Menu start-->
                    <div class="col-xl-7 col-12">
                        <nav class="main-menu">
                            <ul>
                                <li><a href="{{url('/')}}">Home</a>
                                </li>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!--Mobile Menu start-->
                <div class="row">
                    <div class="col-12 d-flex d-lg-none">
                        <div class="mobile-menu"></div>
                    </div>
                </div>
                <!--Mobile Menu end-->

            </div>
        </div>
    </header>
    <!--Header section end-->

    <!--Header Mobile section start-->
    <header class="header-mobile d-block d-lg-none">
        <div class="header-bottom menu-right">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="header-mobile-navigation d-block d-lg-none">
                            <div class="row align-items-center">
                                <div class="col-6 col-md-6">
                                    <div class="header-logo">
                                        <a href="{{url('/')}}">
                                            <img src="assets/images/logo-dark.png" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6">
                                    <div class="mobile-navigation text-right">
                                        <div class="header-icon-wrapper">
                                            <ul class="icon-list justify-content-end">
                                                <li>
                                                    <div class="header-cart-icon">
                                                        <a href="cart.html"><i class="lnr lnr-cart"></i><span>2</span></a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="mobile-menu-icon" id="mobile-menu-trigger"><i class="lnr lnr-menu"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Mobile Menu start-->
                <div class="row">
                    <div class="col-12 d-flex d-lg-none">
                        <div class="mobile-menu"></div>
                    </div>
                </div>
                <!--Mobile Menu end-->

            </div>
        </div>
    </header>
    <!--Header Mobile section end-->

    <!-- Offcanvas Menu Start -->
    <div class="offcanvas-mobile-menu" id="offcanvas-mobile-menu">
        <a href="javascript:void(0)" class="offcanvas-menu-close" id="offcanvas-menu-close-trigger">
            <i class="lnr lnr-cross"></i>
        </a>

        <div class="offcanvas-wrapper">

            <div class="offcanvas-inner-content">
                <div class="offcanvas-mobile-search-area">
                    <form action="#">
                        <input type="search" placeholder="Search ...">
                        <button type="submit"><i class="lnr lnr-magnifier"></i></button>
                    </form>
                </div>
                <nav class="offcanvas-navigation">
                    <ul>
                        <li class="menu-item-has-children"><a href="{{url('/')}}">Home</a>
                        </li>
                        <li class="menu-item-has-children"><a href="about.html">About Us</a>
                        </li>
                        <li class="menu-item-has-children"><a href="contact.html">Contact Us</a>
                        </li>

                    </ul>
                </nav>

                <div class="offcanvas-settings">
                    <nav class="offcanvas-navigation">
                        <ul>
                            <li class="menu-item-has-children"><a href="#">MY ACCOUNT </a>
                                <ul class="submenu2">
                                    <li><a href="login-register.html">Register</a></li>
                                    <li><a href="login-register.html">Login</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#">LANGUAGE: EN-GB </a>
                                <ul class="submenu2">
                                    <li><a href="javascript:void(0)"><img src="./assets/images/icons/en-gb.png" alt=""> English</a></li>
                                    <li><a href="javascript:void(0)"><img src="./assets/images/icons/de-de.png" alt=""> Germany</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="offcanvas-widget-area">
                    <div class="off-canvas-contact-widget">
                        <div class="header-contact-info">
                            <ul class="header-contact-info-list">
                                <li><i class="ion-android-phone-portrait"></i> <a href="tel://12452456012">(1245) 2456 012 </a></li>
                                <li><i class="ion-android-mail"></i> <a href="mailto:info@yourdomain.com">info@bytesaddon.com.ng</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--Off Canvas Widget Social Start-->
                    <div class="off-canvas-widget-social">
                        <a href="#" title="Facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" title="Twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" title="LinkedIn"><i class="fa fa-linkedin"></i></a>
                        <a href="#" title="Youtube"><i class="fa fa-youtube-play"></i></a>
                        <a href="#" title="Vimeo"><i class="fa fa-vimeo-square"></i></a>
                    </div>
                    <!--Off Canvas Widget Social End-->
                </div>
            </div>
        </div>

    </div>
    <!-- Offcanvas Menu End -->

    <!-- Page Banner Section Start -->
    <div class="page-banner-section section bg_image--4">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="page-banner text-center">

                        <h2>Login / Register</h2>
                        <ul class="page-breadcrumb">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li>Login / Register</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Page Banner Section End -->

    <!--Login Register section start-->
    <div class="login-register-section section sb-border pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
        <div class="container">
            <div class="row">
                <!--Login Form Start-->
                <div class="col-md-6 col-sm-6">
                    <div class="customer-login-register">
                        <div class="form-login-title">
                            <h2>Login</h2>
                        </div>
                        <div class="login-form">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-fild">
                                    <p><label>Username or email address <span class="required">*</span></label></p>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" >
                                </div>
                                <div class="form-fild">
                                    <p><label>Password <span class="required">*</span></label></p>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                </div>
                                <div class="login-submit">
                                    <button type="submit" class="ht-btn black-btn">Login</button>
                                    <label>
                                        <input class="checkbox" name="rememberme" value="" type="checkbox">
                                        <span>Remember me</span>
                                    </label>
                                </div>
                                <div class="lost-password">
                                    <a href="#">Lost your password?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--Login Form End-->
                <!--Register Form Start-->
                <div class="col-md-6 col-sm-6">
                    <div class="customer-login-register register-pt-0">
                        <div class="form-register-title">
                            <h2>Register</h2>
                        </div>
                        <div class="register-form">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-fild">
                                    <p><label>Full Name <span class="required">*</span></label></p>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                </div>

                                <div class="form-fild">
                                    <p><label>Email Address<span class="required">*</span></label></p>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                </div>



                                <div class="form-fild">
                                    <p><label>Password <span class="required">*</span></label></p>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                </div>
                                <div class="form-fild">
                                    <p><label>Confirm Password <span class="required">*</span></label></p>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                                <div class="register-submit">
                                    <button type="submit" class="ht-btn black-btn">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--Register Form End-->
            </div>
        </div>
    </div>
    <!--Login Register section end-->

    <!--Footer section start-->
    <footer class="footer-section section bg-blue">

        <!--Footer bottom start-->
        <div class="footer-bottom section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-12">
                        <div class="footer-logo text-lg-left text-center">
                            <a href="index.html"><img src="assets/images/logo-dark.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-12">
                        <div class="copyright text-center">
                            <p>Copyright &copy;2020 <a href="index.html">Jico</a>. <a href="https://hasthemes.com/" target="_blank">All rights reserved.</a></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="footer-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-rss"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Footer bottom end-->

    </footer>
    <!--Footer section end-->

    <!-- Modal Area Strat -->
    <div class="modal fade quick-view-modal-container" id="quick-view-modal-container" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-xl-12 col-lg-12">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <!-- Product Details Left -->
                                <div class="product-details-left">
                                    <div class="product-details-images slider-lg-image-1">
                                        <div class="lg-image">
                                            <img src="./assets/images/product/large-product/l-product-1.jpg" alt="">
                                        </div>
                                        <div class="lg-image">
                                            <img src="./assets/images/product/large-product/l-product-2.jpg" alt="">
                                        </div>
                                        <div class="lg-image">
                                            <img src="./assets/images/product/large-product/l-product-3.jpg" alt="">
                                        </div>
                                        <div class="lg-image">
                                            <img src="./assets/images/product/large-product/l-product-4.jpg" alt="">
                                        </div>
                                        <div class="lg-image">
                                            <img src="./assets/images/product/large-product/l-product-5.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="product-details-thumbs slider-thumbs-1">
                                        <div class="sm-image"><img src="./assets/images/product/small-product/s-product-1.jpg" alt="product image thumb"></div>
                                        <div class="sm-image"><img src="./assets/images/product/small-product/s-product-2.jpg" alt="product image thumb"></div>
                                        <div class="sm-image"><img src="./assets/images/product/small-product/s-product-3.jpg" alt="product image thumb"></div>
                                        <div class="sm-image"><img src="./assets/images/product/small-product/s-product-4.jpg" alt="product image thumb"></div>
                                        <div class="sm-image"><img src="./assets/images/product/small-product/s-product-5.jpg" alt="product image thumb"></div>
                                    </div>
                                </div>
                                <!--Product Details Left -->
                            </div>
                            <div class="col-lg-8 col-md-6">
                                <!--Product Details Content Start-->
                                <div class="product-details-content">
                                    <!--Product Nav Start-->
                                    <div class="product-nav">
                                        <a href="#"><i class="fa fa-angle-left"></i></a>
                                        <a href="#"><i class="fa fa-angle-right"></i></a>
                                    </div>
                                    <!--Product Nav End-->
                                    <h2>Aliquam lobortis est turpis mauris egestas eget</h2>
                                    <div class="single-product-reviews">
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star-o"></i>
                                        <a class="review-link" href="#">(1 customer review)</a>
                                    </div>
                                    <div class="single-product-price">
                                        <span class="price new-price">$66.00</span>
                                        <span class="regular-price">$77.00</span>
                                    </div>
                                    <div class="product-description">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus</p>
                                    </div>
                                    <div class="single-product-quantity">
                                        <form class="add-quantity" action="#">
                                            <div class="product-quantity">
                                                <input value="1" type="number">
                                            </div>
                                            <div class="add-to-link">
                                                <button class="ht-btn black-btn">Add to cart</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="wishlist-compare-btn">
                                        <a href="#" class="wishlist-btn">Add to Wishlist</a>
                                        <a href="#" class="add-compare">Compare</a>
                                    </div>
                                    <div class="product-meta">
                                            <span class="posted-in">
                                                Categories:
                                                <a href="#">Accessories</a>,
                                                <a href="#">Electronics</a>
                                            </span>
                                    </div>
                                    <div class="single-product-sharing">
                                        <h3>Share this product</h3>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!--Product Details Content End-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Modal Area End -->


    <!-- Placed js at the end of the document so the pages load faster -->


</div>

<!-- Placed js at the end of the document so the pages load faster -->

<!-- All jquery file included here -->
<script src="{{asset('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="https://maps.google.com/maps/api/js?sensor=false&libraries=geometry&v=3.22&key=AIzaSyDAq7MrCR1A2qIShmjbtLHSKjcEIEBEEwM"></script>
<script src="{{asset('assets/js/vendor/popper.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/plugins.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>
