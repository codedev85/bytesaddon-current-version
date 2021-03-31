@extends('layouts.app')
@section('title','bytesaddon.com.ng | Cart')
@section('content')

    <!-- Page Banner Section Start -->
    <div class="page-banner-section section bg_image--3">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="page-banner text-center">
                        <br><br><br><br> <br><br><br><br>
{{--                        <h2>Cart</h2>--}}
                        <ul class="page-breadcrumb">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li>Cart</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Page Banner Section End -->

    <!--Cart section start-->
    <div class="cart-section section sb-border pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <!-- Cart Table -->
                    <div class="cart-table table-responsive mb-30">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="pro-thumbnail">Image</th>
                                <th class="pro-title">Product</th>
                                <th class="pro-price">Price</th>
                                <th class="pro-quantity">Quantity</th>
                                <th class="pro-subtotal">Total</th>
                                <th class="pro-remove">Remove</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cartCollection as $cartedProduct)
                            <tr>
                                <td class="pro-thumbnail"><a href="{{url('product/'.$cartedProduct->associatedModel->id.'-'.$cartedProduct->associatedModel->slug)}}"><img src="{{url('storage/'.$cartedProduct->associatedModel->image1)}}" alt="Product"></a></td>
                                <td class="pro-title"><a href="{{url('product/'.$cartedProduct->associatedModel->id.'-'.$cartedProduct->associatedModel->slug)}}">{{Ucfirst(str_limit($cartedProduct->name, $limit=20 ,$end='...' ))}}</a></td>
                                <td class="pro-price"><span>&#8358 {{number_format($cartedProduct->price)}}</span></td>
                                <td class="pro-quantity">
                                    <div class="pro-qty"><input type="number" value="{{$cartedProduct->quantity}}"></div>
                                </td>
                                <td class="pro-subtotal"><span>&#8358 {{number_format($cartedProduct->price * $cartedProduct->quantity )}}</span></td>
                                <td class="pro-remove"><a href="{{url('/cart/'.$cartedProduct->id.'/remove')}}" class="cartRemove"><i class="fa fa-trash-o"></i></a></td>
                            </tr>
                         @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="row">

                        <div class="col-lg-6 col-12 mb-5">
                            <!-- Calculate Shipping -->

                            <!-- Discount Coupon -->
                            @php
                                $total = [];
                                $c_qty = [];
                            @endphp
                            @foreach($cartCollection as $cart)
                                @php  array_push($total , ($cart->quantity * $cart->price));@endphp
                                @php array_push($c_qty ,$cart->quantity); @endphp
                            @endforeach
                            @php
                                $subtotal = array_sum($total);
                                $total = array_sum($total);
                                $cqty = array_sum($c_qty);
                            @endphp

                            <div class="discount-coupon">
                                <h4>Discount Coupon Code</h4>
                                <form id="couponForm" method="POST">
                                    <div class="row">
                                        <input type="hidden" value="{{$total}}" id="amount"/>
                                        <input type="hidden" value="{{$cqty}}" id="c_qty"/>
                                        <div class="col-md-6 col-12 mb-25">
                                            <input type="text" placeholder="Coupon Code" name="coupon_code" id="coupon_code">
                                        </div>
                                        <div class="col-md-6 col-12 mb-25">
                                            <button class="ht-btn black-btn"  id="submit"  type="submit">Apply Code</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    @php $sess = session()->get('coupon');  @endphp
                        <!-- Cart Summary -->
                        <div class="col-lg-6 col-12 mb-30 d-flex">
                            <div class="cart-summary">
                                <div class="cart-summary-wrap">
                                    @php

                                       $totalCartPrice = [];

                                           foreach($cartCollection as $cartAmount){

                                                 $price = $cartAmount->price;
                                                 $qty = $cartAmount->quantity;
                                                 $total = $price*$qty;
                                                 array_push($totalCartPrice , $total);
                                           }

                                      $totalPrice =   array_sum($totalCartPrice);

                                    @endphp

                                    @php $total = []; @endphp
                                    @foreach($cartCollection as $cart)
                                        @php  array_push($total , ( $cart->quantity * $cart->price )); @endphp
                                    @endforeach

                                    @php
                                        $subtotal = array_sum($total);
                                        $total = array_sum($total);
                                    @endphp

                                    <h4>Cart Summary</h4>
                                    <p>Sub Total <span>&#8358 {{ number_format($totalPrice)}}</span></p>
                                    @if(session()->has('coupon'))
                                    <p>Discount Price  <span>&#8358  {{number_format($totalPrice - $sess['discount']) ?? 0}}</span></p>
                                    @endif
                                    @if(session()->has('coupon'))
                                        <p>Discount Value  <span>&#8358  {{number_format($sess['discount']) ?? 0}}</span></p>
                                    @endif
                                    @if(session()->has('coupon'))
                                    <h2>Grand Total <span>&#8358  {{number_format($totalPrice - $sess['discount']) }}</span></h2>
                                    @else
                                    <h2>Grand Total <span>&#8358  {{number_format($totalPrice)}}</span></h2>
                                    @endif
                                </div>
                                <div class="cart-summary-button">
                                    <a href="{{url('/checkout')}}">
                                        <button class="ht-btn black-btn">Checkout</button>
                                    </a>

{{--                                    <button class="ht-btn black-btn">Update Cart</button>--}}
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
    <!--Cart section end-->


@endsection
