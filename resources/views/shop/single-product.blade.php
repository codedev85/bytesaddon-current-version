@extends('layouts.app')
@section('title' ,'bytesaddon.com.ng | Products')
@section('content')


<div id="main-wrapper">

    <!-- Page Banner Section Start -->
    <div class="page-banner-section section bg_image--3">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="page-banner text-center">
                        <br><br><br><br> <br><br><br><br>
{{--                        <h2>Single Product</h2>--}}
                        <ul class="page-breadcrumb">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li>Single Product</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Page Banner Section End -->

    <!-- Single Product Section Start -->
    <div class="single-product-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-100 pb-lg-80 pb-md-70 pb-sm-30 pb-xs-20">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="shop-area">
                        <div class="row">
                            <div class="col-lg-6">
                                <!-- Product Details Left -->
                                <div class="product-details-left">
                                    <div class="product-details-images-2 slider-lg-image-1 tabstyle-3">
                                        <div class="lg-image">
                                            <img src="{{url('storage/'.$product->image1)}}" alt="">
                                            <a href="{{url('storage/'.$product->image1)}}" class="popup-img venobox" data-gall="myGallery"><i class="fa fa-expand"></i></a>
                                        </div>
                                        <div class="lg-image">
                                            <img src="{{url('storage/'.$product->image2)}}" alt="">
                                            <a href="{{url('storage/'.$product->image2)}}" class="popup-img venobox" data-gall="myGallery"><i class="fa fa-expand"></i></a>
                                        </div>
                                        <div class="lg-image">
                                            <img src="{{url('storage/'.$product->image3)}}" alt="">
                                            <a href="{{url('storage/'.$product->image3)}}" class="popup-img venobox" data-gall="myGallery"><i class="fa fa-expand"></i></a>
                                        </div>
                                        <div class="lg-image">
                                            <img src="{{url('storage/'.$product->image2)}}" alt="">
                                            <a href="{{url('storage/'.$product->image2)}}" class="popup-img venobox" data-gall="myGallery"><i class="fa fa-expand"></i></a>
                                        </div>
                                        <div class="lg-image">
                                            <img src="{{url('storage/'.$product->image1)}}" alt="">
                                            <a href="{{url('storage/'.$product->image1)}}" class="popup-img venobox" data-gall="myGallery"><i class="fa fa-expand"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-details-thumbs-2 mt-0 slider-thumbs-1 tabstyle-3">
                                        <div class="sm-image"><img src="{{url('storage/'.$product->image1)}}" alt="product image thumb"></div>
                                        <div class="sm-image"><img src="{{url('storage/'.$product->image2)}}" alt="product image thumb"></div>
                                        <div class="sm-image"><img src="{{url('storage/'.$product->image3)}}" alt="product image thumb"></div>
                                        <div class="sm-image"><img src="{{url('storage/'.$product->image2)}}" alt="product image thumb"></div>
                                        <div class="sm-image"><img src="{{url('storage/'.$product->image1)}}" alt="product image thumb"></div>
                                    </div>
                                </div>
                                <!--Product Details Left -->
                            </div>
                            <div class="col-lg-6">
                                <!--Product Details Content Start-->
                                <div class="product-details-content">
                                    <!--Product Nav Start-->
                                    <div class="product-nav">
                                        <a href="#"><i class="fa fa-angle-left"></i></a>
                                        <a href="#"><i class="fa fa-angle-right"></i></a>
                                    </div>
                                    <!--Product Nav End-->
                                    <h2>{{Ucfirst($product->name)}}</h2>
                                    <div class="single-product-reviews">
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star-o"></i>
                                        <a class="review-link" href="#">(1 customer review)</a>
                                    </div>
                                    <div class="single-product-price">
                                        <span class="price new-price">&#8358; {{number_format($product->amount)}}</span>
                                        <span class="regular-price">$77.00</span>
                                    </div>
                                    <div class="product-description">
                                        <p>{{Ucfirst($product->description)}}</p>
                                    </div>
                                    <div class="single-product-quantity">
                                        <form class="add-quantity" >

                                            <input type="hidden" name="productId" id="productId" value="{{$product->id}}"/>
                                            <div class="product-quantity">
                                                <input value="1" type="number"  id="qty" name="qty" min="1" max="10">
                                            </div>
                                            <div class="add-to-link">
                                                <button id="cartId" class="ht-btn black-btn">Add to cart</button>
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
                                                <a href="#">{{Ucfirst($product->category['category'])}}</a>
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
    <!-- Single Product Section End -->

    <!--Product Description Review Section Start-->
    <div class="product-description-review-section section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-review-tab section">
                        <!--Review And Description Tab Menu Start-->
                        <ul class="nav dec-and-review-menu">
                            <li>
                                <a class="active" data-toggle="tab" href="#description">Description</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#reviews">Reviews (1)</a>
                            </li>
                        </ul>
                        <!--Review And Description Tab Menu End-->
                        <!--Review And Description Tab Content Start-->
                        <div class="tab-content product-review-content-tab" id="myTabContent-4">
                            <div class="tab-pane fade active show" id="description">
                                <div class="single-product-description">
                                    <p>{{Ucfirst($product->description)}}</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="reviews">
                                <div class="review-page-comment">
                                    <h2>1 review for Sit voluptatem</h2>
                                    <ul>
                                        <li>
                                            <div class="product-comment">
                                                <img src="./assets/images/icons/author.png" alt="">
                                                <div class="product-comment-content">
                                                    <div class="product-reviews">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <p class="meta">
                                                        <strong>admin</strong> - <span>November 22, 2018</span>
                                                        <div class="description">
                                                    <p>Good Product</p>
                                                </div>
                                            </div>
                                </div>
                                </li>
                                </ul>
                                <div class="review-form-wrapper">
                                    <div class="review-form">
                                        <span class="comment-reply-title">Add a review </span>
                                        <form action="#">
                                            <p class="comment-notes">
                                                <span id="email-notes">Your email address will not be published.</span>
                                                Required fields are marked
                                                <span class="required">*</span>
                                            </p>
                                            <div class="comment-form-rating">
                                                <label>Your rating</label>
                                                <div class="rating">
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                            </div>
                                            <div class="input-element">
                                                <div class="comment-form-comment">
                                                    <label>Comment</label>
                                                    <textarea name="message" cols="40" rows="8"></textarea>
                                                </div>
                                                <div class="review-comment-form-author">
                                                    <label>Name </label>
                                                    <input required="required" type="text">
                                                </div>
                                                <div class="review-comment-form-email">
                                                    <label>Email </label>
                                                    <input required="required" type="text">
                                                </div>
                                                <div class="comment-submit">
                                                    <button type="submit" class="form-button">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Review And Description Tab Content End-->
                </div>
            </div>
        </div>
    </div>
</div>
<!--Product Description Review Section Start-->

<!--Product section start-->
<div class="product-section section sb-border pt-75 pt-lg-55 pt-md-45 pt-sm-35 pt-xs-25 pb-55 pb-lg-35 pb-md-25 pb-sm-15 pb-xs-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center mb-40 pt-20">
                    <h1>Related Products</h1>
                </div>
            </div>
        </div>
        <div class="row product-slider-two">

            @foreach($relatedProduct as $product)
            <div class="col-lg-12">
                <!--  Single Grid product Start -->
                <div class="single-grid-product mb-40">
                    <div class="product-image">
                        <div class="product-label">
                            <span class="sale">-20%</span>
                            <span class="new">New</span>
                        </div>
                        <a href="{{url('product/'.$product->id.'-'.$product->slug)}}">
                            <img src="{{url('storage/'.$product->image1)}}" class="img-fluid" alt="">
                            <img src="{{url('storage/'.$product->image1)}}" class="img-fluid" alt="">
                        </a>

                        <div class="product-action d-flex justify-content-between">
                            <a class="product-btn cart" href="{{url('cart/'.$product->id)}}">Add to Cart</a>
                            <ul class="d-flex">
                                <li><a href="wishlist.html"><i class="lnr lnr-heart"></i></a></li>
                                <li><a class="productView" data-target='#single_product_modal' data-toggle="modal" data-id="{{$product->id}}"   title="Quick View"><i class="lnr lnr-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3 class="title"> <a href="{{url('product/'.$product->id.'-'.$product->slug)}}">{{Ucfirst(str_limit($product->name ,$limit="30" ,$end="..."))}}</a></h3>
                        <div class="product-category-rating">
                            <p class="product-price"><span class="discounted-price">&#8358; {{number_format($product->amount)}}</span></p>
                            <span class="rating">
                                    <span class="lnr lnr-star"></span>
                                    <span class="lnr lnr-star"></span>
                                    <span class="lnr lnr-star"></span>
                                    <span class="lnr lnr-star"></span>
                                    <span class="lnr lnr-star"></span>
                                    </span>
                        </div>

                    </div>
                </div>
                <!--  Single Grid product End -->
            </div>
            @endforeach
{{--            <div class="col-lg-12">--}}
{{--                <!--  Single Grid product Start -->--}}
{{--                <div class="single-grid-product mb-40">--}}
{{--                    <div class="product-image">--}}
{{--                        <div class="product-label">--}}
{{--                            <span class="sale">-20%</span>--}}
{{--                            <span class="new">New</span>--}}
{{--                        </div>--}}
{{--                        <a href="single-product.html">--}}
{{--                            <img src="{{asset('assets/images/product/product-4.jpg')}}" class="img-fluid" alt="">--}}
{{--                            <img src="{{asset('assets/images/product/product-5.jpg')}}" class="img-fluid" alt="">--}}
{{--                        </a>--}}

{{--                        <div class="product-action d-flex justify-content-between">--}}
{{--                            <a class="product-btn" href="cart.html">Add to Cart</a>--}}
{{--                            <ul class="d-flex">--}}
{{--                                <li><a href="wishlist.html"><i class="lnr lnr-heart"></i></a></li>--}}
{{--                                <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="lnr lnr-eye"></i></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="product-content">--}}
{{--                        <h3 class="title"> <a href="single-product.html">sit vitae sodales neque ornare</a></h3>--}}
{{--                        <div class="product-category-rating">--}}
{{--                            <p class="product-price"><span class="discounted-price">$70.00</span></p>--}}
{{--                            <span class="rating">--}}
{{--                                    <span class="lnr lnr-star"></span>--}}
{{--                                    <span class="lnr lnr-star"></span>--}}
{{--                                    <span class="lnr lnr-star"></span>--}}
{{--                                    <span class="lnr lnr-star"></span>--}}
{{--                                    <span class="lnr lnr-star"></span>--}}
{{--                                    </span>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <!--  Single Grid product End -->--}}
{{--            </div>--}}
{{--            <div class="col-lg-12">--}}
{{--                <!--  Single Grid product Start -->--}}
{{--                <div class="single-grid-product mb-40">--}}
{{--                    <div class="product-image">--}}
{{--                        <div class="product-label">--}}
{{--                            <span class="sale">-20%</span>--}}
{{--                            <span class="new">New</span>--}}
{{--                        </div>--}}
{{--                        <a href="single-product.html">--}}
{{--                            <img src="{{asset('assets/images/product/product-6.jpg')}}" class="img-fluid" alt="">--}}
{{--                            <img src="{{asset('assets/images/product/product-7.jpg')}}" class="img-fluid" alt="">--}}
{{--                        </a>--}}

{{--                        <div class="product-action d-flex justify-content-between">--}}
{{--                            <a class="product-btn" href="cart.html">Add to Cart</a>--}}
{{--                            <ul class="d-flex">--}}
{{--                                <li><a href="wishlist.html"><i class="lnr lnr-heart"></i></a></li>--}}
{{--                                <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="lnr lnr-eye"></i></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="product-content">--}}
{{--                        <h3 class="title"> <a href="single-product.html">malesuada tempor euismod</a></h3>--}}
{{--                        <div class="product-category-rating">--}}
{{--                            <p class="product-price"><span class="discounted-price">$80.00</span></p>--}}
{{--                            <span class="rating">--}}
{{--                                    <span class="lnr lnr-star"></span>--}}
{{--                                    <span class="lnr lnr-star"></span>--}}
{{--                                    <span class="lnr lnr-star"></span>--}}
{{--                                    <span class="lnr lnr-star"></span>--}}
{{--                                    <span class="lnr lnr-star"></span>--}}
{{--                                    </span>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <!--  Single Grid product End -->--}}
{{--            </div>--}}
{{--            <div class="col-lg-12">--}}
{{--                <!--  Single Grid product Start -->--}}
{{--                <div class="single-grid-product mb-40">--}}
{{--                    <div class="product-image">--}}
{{--                        <div class="product-label">--}}
{{--                            <span class="sale">-20%</span>--}}
{{--                            <span class="new">New</span>--}}
{{--                        </div>--}}
{{--                        <a href="single-product.html">--}}
{{--                            <img src="{{asset('assets/images/product/product-2.jpg')}}" class="img-fluid" alt="">--}}
{{--                            <img src="{{asset('assets/images/product/product-3.jpg')}}" class="img-fluid" alt="">--}}
{{--                        </a>--}}

{{--                        <div class="product-action d-flex justify-content-between">--}}
{{--                            <a class="product-btn" href="cart.html">Add to Cart</a>--}}
{{--                            <ul class="d-flex">--}}
{{--                                <li><a href="wishlist.html"><i class="lnr lnr-heart"></i></a></li>--}}
{{--                                <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="lnr lnr-eye"></i></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="product-content">--}}
{{--                        <h3 class="title"> <a href="single-product.html">dignissim sodales eget tempor</a></h3>--}}
{{--                        <div class="product-category-rating">--}}
{{--                            <p class="product-price"><span class="discounted-price">$78.00</span></p>--}}
{{--                            <span class="rating">--}}
{{--                                    <span class="lnr lnr-star"></span>--}}
{{--                                    <span class="lnr lnr-star"></span>--}}
{{--                                    <span class="lnr lnr-star"></span>--}}
{{--                                    <span class="lnr lnr-star"></span>--}}
{{--                                    <span class="lnr lnr-star"></span>--}}
{{--                                    </span>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <!--  Single Grid product End -->--}}
{{--            </div>--}}
{{--            <div class="col-lg-12">--}}
{{--                <!--  Single Grid product Start -->--}}
{{--                <div class="single-grid-product mb-40">--}}
{{--                    <div class="product-image">--}}
{{--                        <div class="product-label">--}}
{{--                            <span class="sale">-20%</span>--}}
{{--                            <span class="new">New</span>--}}
{{--                        </div>--}}
{{--                        <a href="single-product.html">--}}
{{--                            <img src="{{asset('assets/images/product/product-8.jpg')}}" class="img-fluid" alt="">--}}
{{--                            <img src="{{asset('assets/images/product/product-1.jpg')}}" class="img-fluid" alt="">--}}
{{--                        </a>--}}

{{--                        <div class="product-action d-flex justify-content-between">--}}
{{--                            <a class="product-btn" href="cart.html">Add to Cart</a>--}}
{{--                            <ul class="d-flex">--}}
{{--                                <li><a href="wishlist.html"><i class="lnr lnr-heart"></i></a></li>--}}
{{--                                <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="lnr lnr-eye"></i></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="product-content">--}}
{{--                        <h3 class="title"> <a href="single-product.html">Mirum est notare tellus</a></h3>--}}
{{--                        <div class="product-category-rating">--}}
{{--                            <p class="product-price"><span class="discounted-price">$69.00</span></p>--}}
{{--                            <span class="rating">--}}
{{--                                    <span class="lnr lnr-star"></span>--}}
{{--                                    <span class="lnr lnr-star"></span>--}}
{{--                                    <span class="lnr lnr-star"></span>--}}
{{--                                    <span class="lnr lnr-star"></span>--}}
{{--                                    <span class="lnr lnr-star"></span>--}}
{{--                                    </span>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <!--  Single Grid product End -->--}}
{{--            </div>--}}
{{--            <div class="col-lg-12">--}}
{{--                <!--  Single Grid product Start -->--}}
{{--                <div class="single-grid-product mb-40">--}}
{{--                    <div class="product-image">--}}
{{--                        <div class="product-label">--}}
{{--                            <span class="sale">-20%</span>--}}
{{--                            <span class="new">New</span>--}}
{{--                        </div>--}}
{{--                        <a href="single-product.html">--}}
{{--                            <img src="{{asset('assets/images/product/product-7.jpg')}}" class="img-fluid" alt="">--}}
{{--                            <img src="{{asset('assets/images/product/product-9.jpg')}}" class="img-fluid" alt="">--}}
{{--                        </a>--}}

{{--                        <div class="product-action d-flex justify-content-between">--}}
{{--                            <a class="product-btn" href="cart.html">Add to Cart</a>--}}
{{--                            <ul class="d-flex">--}}
{{--                                <li><a href="wishlist.html"><i class="lnr lnr-heart"></i></a></li>--}}
{{--                                <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="lnr lnr-eye"></i></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="product-content">--}}
{{--                        <h3 class="title"> <a href="single-product.html">suscipit est in sapien hendrerit</a></h3>--}}
{{--                        <div class="product-category-rating">--}}
{{--                            <p class="product-price"><span class="discounted-price">$30.00</span></p>--}}
{{--                            <span class="rating">--}}
{{--                                    <span class="lnr lnr-star"></span>--}}
{{--                                    <span class="lnr lnr-star"></span>--}}
{{--                                    <span class="lnr lnr-star"></span>--}}
{{--                                    <span class="lnr lnr-star"></span>--}}
{{--                                    <span class="lnr lnr-star"></span>--}}
{{--                                    </span>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <!--  Single Grid product End -->--}}
{{--            </div>--}}
{{--            <div class="col-lg-12">--}}
{{--                <!--  Single Grid product Start -->--}}
{{--                <div class="single-grid-product mb-40">--}}
{{--                    <div class="product-image">--}}
{{--                        <div class="product-label">--}}
{{--                            <span class="sale">-20%</span>--}}
{{--                            <span class="new">New</span>--}}
{{--                        </div>--}}
{{--                        <a href="single-product.html">--}}
{{--                            <img src="{{asset('assets/images/product/product-10.jpg')}}" class="img-fluid" alt="">--}}
{{--                            <img src="{{asset('assets/images/product/product-6.jpg')}}" class="img-fluid" alt="">--}}
{{--                        </a>--}}

{{--                        <div class="product-action d-flex justify-content-between">--}}
{{--                            <a class="product-btn" href="cart.html">Add to Cart</a>--}}
{{--                            <ul class="d-flex">--}}
{{--                                <li><a href="wishlist.html"><i class="lnr lnr-heart"></i></a></li>--}}
{{--                                <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="lnr lnr-eye"></i></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="product-content">--}}
{{--                        <h3 class="title"> <a href="single-product.html">posuere hendrerit dui quis urna</a></h3>--}}
{{--                        <div class="product-category-rating">--}}
{{--                            <p class="product-price"><span class="discounted-price">$45.00</span></p>--}}
{{--                            <span class="rating">--}}
{{--                                    <span class="lnr lnr-star"></span>--}}
{{--                                    <span class="lnr lnr-star"></span>--}}
{{--                                    <span class="lnr lnr-star"></span>--}}
{{--                                    <span class="lnr lnr-star"></span>--}}
{{--                                    <span class="lnr lnr-star"></span>--}}
{{--                                    </span>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <!--  Single Grid product End -->--}}
{{--            </div>--}}
{{--            <div class="col-lg-12">--}}
{{--                <!--  Single Grid product Start -->--}}
{{--                <div class="single-grid-product mb-40">--}}
{{--                    <div class="product-image">--}}
{{--                        <div class="product-label">--}}
{{--                            <span class="sale">-20%</span>--}}
{{--                            <span class="new">New</span>--}}
{{--                        </div>--}}
{{--                        <a href="single-product.html">--}}
{{--                            <img src="{{asset('assets/images/product/product-10.jpg')}}" class="img-fluid" alt="">--}}
{{--                            <img src="{{asset('assets/images/product/product-6.jpg')}}" class="img-fluid" alt="">--}}
{{--                        </a>--}}

{{--                        <div class="product-action d-flex justify-content-between">--}}
{{--                            <a class="product-btn" href="cart.html">Add to Cart</a>--}}
{{--                            <ul class="d-flex">--}}
{{--                                <li><a href="wishlist.html"><i class="lnr lnr-heart"></i></a></li>--}}
{{--                                <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="lnr lnr-eye"></i></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="product-content">--}}
{{--                        <h3 class="title"> <a href="single-product.html">pellentesque quam ut risus</a></h3>--}}
{{--                        <div class="product-category-rating">--}}
{{--                            <p class="product-price"><span class="discounted-price">$85.00</span></p>--}}
{{--                            <span class="rating">--}}
{{--                                    <span class="lnr lnr-star"></span>--}}
{{--                                    <span class="lnr lnr-star"></span>--}}
{{--                                    <span class="lnr lnr-star"></span>--}}
{{--                                    <span class="lnr lnr-star"></span>--}}
{{--                                    <span class="lnr lnr-star"></span>--}}
{{--                                    </span>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <!--  Single Grid product End -->--}}
{{--            </div>--}}
{{--            <div class="col-lg-12">--}}
{{--                <!--  Single Grid product Start -->--}}
{{--                <div class="single-grid-product mb-40">--}}
{{--                    <div class="product-image">--}}
{{--                        <div class="product-label">--}}
{{--                            <span class="sale">-20%</span>--}}
{{--                            <span class="new">New</span>--}}
{{--                        </div>--}}
{{--                        <a href="single-product.html">--}}
{{--                            <img src="{{asset('assets/images/product/product-10.jpg')}}" class="img-fluid" alt="">--}}
{{--                            <img src="{{asset('assets/images/product/product-6.jpg')}}" class="img-fluid" alt="">--}}
{{--                        </a>--}}

{{--                        <div class="product-action d-flex justify-content-between">--}}
{{--                            <a class="product-btn" href="cart.html">Add to Cart</a>--}}
{{--                            <ul class="d-flex">--}}
{{--                                <li><a href="wishlist.html"><i class="lnr lnr-heart"></i></a></li>--}}
{{--                                <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="lnr lnr-eye"></i></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="product-content">--}}
{{--                        <h3 class="title"> <a href="single-product.html">laoreet pellentesque torquent</a></h3>--}}
{{--                        <div class="product-category-rating">--}}
{{--                            <p class="product-price"><span class="discounted-price">$98.00</span></p>--}}
{{--                            <span class="rating">--}}
{{--                                    <span class="lnr lnr-star"></span>--}}
{{--                                    <span class="lnr lnr-star"></span>--}}
{{--                                    <span class="lnr lnr-star"></span>--}}
{{--                                    <span class="lnr lnr-star"></span>--}}
{{--                                    <span class="lnr lnr-star"></span>--}}
{{--                                    </span>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <!--  Single Grid product End -->--}}
{{--            </div>--}}
{{--            <div class="col-lg-12">--}}
{{--                <!--  Single Grid product Start -->--}}
{{--                <div class="single-grid-product mb-40">--}}
{{--                    <div class="product-image">--}}
{{--                        <div class="product-label">--}}
{{--                            <span class="sale">-20%</span>--}}
{{--                            <span class="new">New</span>--}}
{{--                        </div>--}}
{{--                        <a href="single-product.html">--}}
{{--                            <img src="{{asset('assets/images/product/product-10.jpg')}}" class="img-fluid" alt="">--}}
{{--                            <img src="{{asset('assets/images/product/product-6.jpg')}}" class="img-fluid" alt="">--}}
{{--                        </a>--}}

{{--                        <div class="product-action d-flex justify-content-between">--}}
{{--                            <a class="product-btn" href="cart.html">Add to Cart</a>--}}
{{--                            <ul class="d-flex">--}}
{{--                                <li><a href="wishlist.html"><i class="lnr lnr-heart"></i></a></li>--}}
{{--                                <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="lnr lnr-eye"></i></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="product-content">--}}
{{--                        <h3 class="title"> <a href="single-product.html">fringilla dignissim ipsum primis</a></h3>--}}
{{--                        <div class="product-category-rating">--}}
{{--                            <p class="product-price"><span class="discounted-price">$79.00</span></p>--}}
{{--                            <span class="rating">--}}
{{--                                    <span class="lnr lnr-star"></span>--}}
{{--                                    <span class="lnr lnr-star"></span>--}}
{{--                                    <span class="lnr lnr-star"></span>--}}
{{--                                    <span class="lnr lnr-star"></span>--}}
{{--                                    <span class="lnr lnr-star"></span>--}}
{{--                                    </span>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <!--  Single Grid product End -->--}}
{{--            </div>--}}
{{--            <div class="col-lg-12">--}}
{{--                <!--  Single Grid product Start -->--}}
{{--                <div class="single-grid-product mb-40">--}}
{{--                    <div class="product-image">--}}
{{--                        <div class="product-label">--}}
{{--                            <span class="sale">-20%</span>--}}
{{--                            <span class="new">New</span>--}}
{{--                        </div>--}}
{{--                        <a href="single-product.html">--}}
{{--                            <img src="{{asset('assets/images/product/product-10.jpg')}}" class="img-fluid" alt="">--}}
{{--                            <img src="{{asset('assets/images/product/product-6.jpg')}}" class="img-fluid" alt="">--}}
{{--                        </a>--}}

{{--                        <div class="product-action d-flex justify-content-between">--}}
{{--                            <a class="product-btn" href="cart.html">Add to Cart</a>--}}
{{--                            <ul class="d-flex">--}}
{{--                                <li><a href="wishlist.html"><i class="lnr lnr-heart"></i></a></li>--}}
{{--                                <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="lnr lnr-eye"></i></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="product-content">--}}
{{--                        <h3 class="title"> <a href="single-product.html">ante facilisis nec porttitor</a></h3>--}}
{{--                        <div class="product-category-rating">--}}
{{--                            <p class="product-price"><span class="discounted-price">$88.00</span></p>--}}
{{--                            <span class="rating">--}}
{{--                                    <span class="lnr lnr-star"></span>--}}
{{--                                    <span class="lnr lnr-star"></span>--}}
{{--                                    <span class="lnr lnr-star"></span>--}}
{{--                                    <span class="lnr lnr-star"></span>--}}
{{--                                    <span class="lnr lnr-star"></span>--}}
{{--                                    </span>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <!--  Single Grid product End -->--}}
{{--            </div>--}}
        </div>

    </div>
</div>
<!--Product section end-->




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
                                        <img src="{{asset('/assets/images/product/large-product/l-product-1.jpg')}}" alt="">
                                    </div>
                                    <div class="lg-image">
                                        <img src="{{asset('/assets/images/product/large-product/l-product-2.jpg"')}}" alt="">
                                    </div>
                                    <div class="lg-image">
                                        <img src="{{asset('/assets/images/product/large-product/l-product-3.jpg')}}" alt="">
                                    </div>
                                    <div class="lg-image">
                                        <img src="{{asset('/assets/images/product/large-product/l-product-4.jpg')}}" alt="">
                                    </div>
                                    <div class="lg-image">
                                        <img src="{{asset('/assets/images/product/large-product/l-product-5.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="product-details-thumbs slider-thumbs-1">
                                    <div class="sm-image"><img src="{{asset('/assets/images/product/large-product/l-product-5.jpg')}}" alt="product image thumb"></div>
                                    <div class="sm-image"><img src="{{asset('/assets/images/product/small-product/s-product-2.jpg')}}" alt="product image thumb"></div>
                                    <div class="sm-image"><img src="{{asset('assets/images/product/small-product/s-product-3.jpg')}}" alt="product image thumb"></div>
                                    <div class="sm-image"><img src="{{asset('assets/images/product/small-product/s-product-4.jpg')}}" alt="product image thumb"></div>
                                    <div class="sm-image"><img src="{{asset('assets/images/product/small-product/s-product-5.jpg')}}" alt="product image thumb"></div>
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
@endsection
