@extends('layouts.app')
@section('title','bytesaddon.com.ng | category')
@section('content')
    <!-- Page Banner Section Start -->
    <div class="page-banner-section section bg_image--3">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="page-banner text-center">
                        <br><br><br><br> <br><br><br><br>
{{--                        <h2>Shop</h2>--}}
                        <ul class="page-breadcrumb">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li>Shop</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Page Banner Section End -->

    <!-- Shop Section Start -->
    <div class="shop-section section sb-border pt-100 pt-lg-80 pt-md-60 pt-sm-50 pb-70 pb-lg-50 pb-md-40 pb-sm-60 pb-xs-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="shop-area">
                        <div class="row">
                            <div class="col-lg-3 order-lg-1 order-2">
                                <!-- Single Sidebar Start  -->
                                <div class="common-sidebar-widget">
                                    <h3 class="sidebar-title">Product categories</h3>
                                    <ul class="sidebar-list">
                                        @foreach($categories as $category)
                                        <li><a href="{{url('category/'.$category->id)}}"><i class="ion-plus"></i>{{Ucfirst($category->category)}} <span class="count"></span></a></li>
                                        @endforeach
                                    </ul>
                                </div>
                                <!-- Single Sidebar End  -->
                                <!-- Single Sidebar Start  -->
{{--                                <div class="common-sidebar-widget">--}}
{{--                                    <h3 class="sidebar-title">Filter by price</h3>--}}
{{--                                    <div class="sidebar-price">--}}
{{--                                        <div id="price-range" class="mb-20"></div>--}}
{{--                                        <button type="button" class="ht-btn black-btn small-btn">Filter</button>--}}
{{--                                        <input type="text" id="price-amount" class="price-amount" readonly>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <!-- Single Sidebar End  -->
                                <!-- Single Sidebar Start  -->
{{--                                <div class="common-sidebar-widget">--}}
{{--                                    <h3 class="sidebar-title">Filter by</h3>--}}
{{--                                    <ul class="sidebar-list">--}}
{{--                                        <li><a href="#"><i class="ion-plus"></i>Gold <span class="count">(1)</span></a></li>--}}
{{--                                        <li><a href="#"><i class="ion-plus"></i>Green <span class="count">(1)</span></a></li>--}}
{{--                                        <li><a href="#"><i class="ion-plus"></i>White <span class="count">(1)</span></a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
                                <!-- Single Sidebar End  -->
                                <!-- Single Sidebar Start  -->
{{--                                <div class="common-sidebar-widget">--}}
{{--                                    <h3 class="sidebar-title">Compare Products</h3>--}}
{{--                                    <div class="compare-products-list">--}}
{{--                                        <ul>--}}
{{--                                            <li>--}}
{{--                                                <a href="#" class="title">Cras neque metus</a>--}}
{{--                                                <a href="#" class="remove-compare"><i class="fa fa-close"></i></a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#" class="title">Cras neque metus</a>--}}
{{--                                                <a href="#" class="remove-compare"><i class="fa fa-close"></i></a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                        <a href="#" class="clear-btn">Clear all</a>--}}
{{--                                        <button type="button" class="btn compare-btn">Compare</button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <!-- Single Sidebar End  -->
                                <!-- Single Sidebar Start  -->
{{--                                <div class="common-sidebar-widget">--}}
{{--                                    <h3 class="sidebar-title">Product tags</h3>--}}
{{--                                    <ul class="sidebar-tag">--}}
{{--                                        <li><a href="#">blouse</a></li>--}}
{{--                                        <li><a href="#">clothes</a></li>--}}
{{--                                        <li><a href="#">fashion</a></li>--}}
{{--                                        <li><a href="#">handbag</a></li>--}}
{{--                                        <li><a href="#">laptop</a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
                                <!-- Single Sidebar End  -->
                            </div>
                            <div class="col-lg-9 order-lg-2 order-1">
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Grid & List View Start -->
                                        <div class="shop-topbar-wrapper d-flex justify-content-between align-items-center">
                                            <div class="grid-list-option d-flex">
                                                <ul class="nav">
                                                    <li>
                                                        <a class="active show" data-toggle="tab" href="#grid"><i class="fa fa-th"></i></a>
                                                    </li>
                                                    <li>
                                                        <a data-toggle="tab" href="#list" class=""><i class="fa fa-th-list"></i></a>
                                                    </li>
                                                </ul>
                                                <p>Showing 1–9 of 41 results</p>
                                            </div>
                                            <!--Toolbar Short Area Start-->
                                            <div class="toolbar-short-area d-md-flex align-items-center">
                                                <div class="toolbar-shorter ">
                                                    <label>Sort By:</label>
                                                    <select class="wide">
                                                        <option data-display="Select">Nothing</option>
                                                        <option value="Relevance">Relevance</option>
                                                        <option value="Name, A to Z">Name, A to Z</option>
                                                        <option value="Name, Z to A">Name, Z to A</option>
                                                        <option value="Price, low to high">Price, low to high</option>
                                                        <option value="Price, high to low">Price, high to low</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--Toolbar Short Area End-->
                                        </div>
                                        <!-- Grid & List View End -->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="shop-product">
                                            <div id="myTabContent-2" class="tab-content">
                                                <div id="grid" class="tab-pane fade active show">
                                                    <div class="product-grid-view">
                                                        <div class="row">
                                                            @foreach($products as $product)
                                                            <div class="col-lg-4 col-md-6 col-sm-6">
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
                                                                            <a class="product-btn cart"  href="{{url('cart/'.$product->id)}}">Add to Cart</a>
                                                                            <ul class="d-flex">
                                                                                <li><a href="wishlist.html"><i class="lnr lnr-heart"></i></a></li>
                                                                                <li><a class="productView"  data-target='#single_product_modal' data-id="{{$product->id}}" data-toggle="modal" title="Quick View"><i class="lnr lnr-eye"></i></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-content">
                                                                        <h3 class="title"> <a href="{{url('product/'.$product->id.'-'.$product->slug)}}">{{Ucfirst($product->name)}}</a></h3>
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
{
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="list" class="tab-pane fade">
                                                    <div class="product-list-view">
                                                        <!-- Single List Product Start -->
                                                        @foreach($products as $product)
                                                        <div class="product-list-item mb-40">
                                                            <div class="row">
                                                                <div class="col-md-4 col-sm-6">
                                                                    <div class="single-grid-product">
                                                                        <div class="product-image">
                                                                            <div class="product-label">
                                                                                <span class="sale">-20%</span>
                                                                                <span class="new">New</span>
                                                                            </div>
                                                                            <a href="{{url('product/'.$product->id.'-'.$product->slug)}}">
                                                                                <img src="{{url('storage/'.$product->image1)}}" class="img-fluid" alt="">
                                                                                <img src="{{url('storage/'.$product->image1)}}" class="img-fluid" alt="">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8 col-sm-6">
                                                                    <div class="product-content-shop-list">
                                                                        <div class="product-content">
                                                                            <h3 class="title"> <a href="{{url('product/'.$product->id.'-'.$product->slug)}}">Aliquam lobortis est tur</a></h3>
                                                                            <div class="price-rating">
                                                                                <p class="product-price"><span class="discounted-price">&#8358; {{number_format($product->amount)}}</span> <span class="main-price discounted">$39.00</span></p>
                                                                                <div class="product-category-rating">
                                                                                        <span class="rating">
                                                                                        <span class="lnr lnr-star"></span>
                                                                                        <span class="lnr lnr-star"></span>
                                                                                        <span class="lnr lnr-star"></span>
                                                                                        <span class="lnr lnr-star"></span>
                                                                                        <span class="lnr lnr-star"></span>
                                                                                        </span>
                                                                                </div>
                                                                            </div>
                                                                            <p class="product-desc">{{Ucfirst($product->description)}}</p>
                                                                            <div class="product-action-list d-flex">
                                                                                <a class="ht-btn black-btn cart"  href="{{url('cart/'.$product->id)}}">Add to cart</a>
                                                                                <a class="ht-btn black-btn width-50 mlr-5" href="wishlist.html"><i class="lnr lnr-heart"></i></a>
                                                                                <a class="ht-btn black-btn width-50" href="{{url('product/'.$product->id.'-'.$product->slug)}}"><i class="lnr lnr-eye"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                        <!-- Single List Product End -->

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-0 mb-xs-35 mb-sm-35">
                                    <div class="col">
                                        <ul class="page-pagination">
                                            {{$products->links()}}
{{--                                            <li><a href="#"><i class="fa fa-angle-left"></i></a></li>--}}
{{--                                            <li class="active"><a href="#">01</a></li>--}}
{{--                                            <li><a href="#">02</a></li>--}}
{{--                                            <li><a href="#">03</a></li>--}}
{{--                                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>--}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Section End -->


@endsection
