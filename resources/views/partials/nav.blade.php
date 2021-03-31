
<!--Header section start-->
<header class="header header-transparent header-center header-sticky d-none d-lg-block">
    <div class="header-top">
        <div class="container-fluid">
            <div class="row">

                <!--Links start-->
                <div class="header-top-contact col-lg-12 col-md-12">
                    <ul>
                        <li>Free Delivery: Take advantage of our time to save event</li>
                    </ul>
                </div>
                <!--Links end-->
            </div>

        </div>
    </div>
    <div class="header-bottom menu-right">
        <div class="container-fluid pl-30 pr-30">
            <div class="row align-items-center">

                <!--Logo start-->
                <div class="col-xl-1 col-12 text-center mt-20 mb-20">
                    <div class="logo">
                        <a href="{{url('/')}}"><img src="{{asset('assets/images/logo-light.png')}}" alt=""></a>
                    </div>
                </div>
                <!--Logo end-->

                <!--Menu start-->
                <div class="col-xl-7 col-12">
                    <nav class="main-menu">
                        <ul>
                            <li><a href="{{url('/')}}">Home <span class=""></span></a>
                            </li>
                            <li><a href="shop.html">Shop <span class="lnr lnr-chevron-down"></span></a>
                                <ul class="mega-menu four-column">
                                    @foreach($categories as $cat)
                                    <li><a href="{{url('category/'.$cat->id)}}" class="item-link">{{$cat->category}}</a>
                                        @foreach($cat->subcategories as $subs)
                                            <ul>
                                                <li><a href="{{url('sub-category/'.$subs->id)}}">{{$subs->sub_category}}</a></li>
                                            </ul>
                                       @endforeach
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <!--Menu end-->

                <!-- Cart & Search Area Start -->
                <div class="col-xl-4 col-12 d-flex justify-content-xl-end justify-content-center">
                    <div class="header-search-area">
                        <div class="header-search-form">
                            <form action="#">
                                <button><span class="lnr lnr-magnifier"></span></button>
                                <input type="text" placeholder="Search Product...">
                            </form>
                        </div>
                    </div>
                    <ul class="ht-us-menu">
                        <li><a href="#"><span class="lnr lnr-heart"></span></a></li>
                    </ul>
                    <div class="header-cart">
                        @if(!empty($cartCollection))
                        <a href="#"><span class="lnr lnr-cart"></span><span class="count">{{$cartCollection->count()}}</span></a>
                        @endif
                        <!--Mini Cart Dropdown Start-->
                        <div class="header-cart-dropdown" style="padding:30px; width:500px">
                            @if($cartCollection->count() > 0)
                                <ul class="cart-items" id="cartPanel">
                                    @foreach($cartCollection as $cartedProduct)

                                        <li class="single-cart-item">
                                        <div class="cart-img">
{{--                                            @php dump($cartedProduct->associatedModel->image1); @endphp--}}
                                            <a href="#"><img src="{{url('storage/'.$cartedProduct->associatedModel->image1)}}" alt=""></a>
                                        </div>
                                        <div class="cart-content">

                                            <h5 class="product-name"><a href="single-product.html">{{$cartedProduct->name}}4</a></h5>
                                            <span class="product-quantity">{{$cartedProduct->quantity}}×</span>
                                            <span class="product-price">&#8358 {{number_format($cartedProduct->price)}}</span>

                                        </div>
                                        <div class="cart-item-remove">
                                            <a title="Remove" href="{{url('/cart/'.$cartedProduct->id.'/remove')}}" class="cartRemove"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </li>

                                    @endforeach

                                </ul>
                                @php
                                    /// Calculate the sum of the price multiply by quantity ;
    ///
                                   $totalCartPrice = [];

                                       foreach($cartCollection as $cartAmount){

                                             $price = $cartAmount->price;
                                             $qty = $cartAmount->quantity;
                                             $total = $price*$qty;
                                             array_push($totalCartPrice , $total);

                                       }

                                  $totalPrice =   array_sum($totalCartPrice);

                                @endphp

                                <div class="cart-total">
                                    <h5>Subtotal :<span class="float-right">&#8358  {{number_format($totalPrice)}}</span></h5>
{{--                                    <h5>Eco Tax (-2.00) :<span class="float-right">$7.00</span></h5>--}}
{{--                                    <h5>VAT (20%) : <span class="float-right">$0.00</span></h5>--}}
                                    <h5>Total : <span class="float-right">&#8358  {{number_format($totalPrice)}}</span></h5>
                                </div>
                                <div class="cart-btn">
                                    <a href="{{url('/cart')}}">View Cart</a>
                                    <a href="{{url('/checkout')}}">checkout</a>
                                </div>
                            @else
                               <div style="display:flex; justify-content: center; padding:10px;" >
                                   <img src="{{asset('assets/images/cart/empty-cart.png')}}" alt="empty-cart"/>
                               </div>
                            <div style="display:flex; justify-content:center;">
                                <span>Cart is Empty</span>
                            </div>
                            @endif
                        </div>
                        <!--Mini Cart Dropdown End-->
                    </div>
                    <ul class="ht-us-menu">
                        <li><a href="#"><span class="lnr lnr-menu-circle"></span></a>
                            <ul class="ht-dropdown right">
                                <li><a href="compare.html">Compare Products</a></li>
                                <li><a href="{{url('/home')}}">My Account</a></li>
                                <li><a href="wishlist.html">My Wish List</a></li>
                                <li><a href="{{url('/login')}}">Sign In</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- Cart & Search Area End -->
            </div>

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
                                        <img src="{{asset('assets/images/logo-dark.png')}}" class="img-fluid" alt="">
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
                    <li ><a href="{{url('/')}}">Home</a></li>
                    <li class="menu-item-has-children"><a href="#">Shop</a>
                        <ul class="submenu2">
                            @foreach($categories as $cat)
                            <li class="menu-item-has-children"><a href="{{url('category/'.$cat->id)}}">{{$cat->category}}</a>
                                @foreach($cat->subcategories as $subs)
                                <ul class="submenu2">
                                    <li><a href="{{url('sub-category/'.$subs->id)}}">{{$subs->sub_category}}</a></li>
                                </ul>
                                @endforeach
                            </li>
                            @endforeach

                        </ul>
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
                        <li class="menu-item-has-children"><a href="#">CURRENCY: USD </a>
                            <ul class="submenu2">
                                <li><a href="javascript:void(0)">€ Euro</a></li>
                                <li><a href="javascript:void(0)">$ US Dollar</a></li>
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
                            <li><i class="ion-android-mail"></i> <a href="mailto:info@yourdomain.com">info@yourdomain.com</a></li>
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
