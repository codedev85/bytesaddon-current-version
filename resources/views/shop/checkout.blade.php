@extends('layouts.app')
@section('title' ,'bytesaddon.com.ng | Checkout')
@section('content')

    <!-- Page Banner Section Start -->
    <div class="page-banner-section section bg_image--3">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="page-banner text-center">
                        <br><br><br><br> <br><br><br><br>
{{--                        <h2>Checkout</h2>--}}
                        <ul class="page-breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li>Checkout</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Page Banner Section End -->

    <!--Checkout section start-->
    <div class="checkout-section section sb-border pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- Checkout Form Start-->
                    <form action="{{url('/order')}}" class="checkout-form" method="POST">
                        @csrf
                        <div class="row row-40">

                            <div class="col-lg-7">

                                <!-- Billing Address -->
                                <div id="billing-form" class="mb-10">
                                    <h4 class="checkout-title">Billing Address</h4>

                                    <div class="row">

                                        <div class="col-md-12 col-12 mb-20">
                                            <label>First Name*</label>
                                            <input type="text" value="{{auth()->user()->name}}" readonly="readonly">
                                            <input type="hidden" value="{{auth()->user()->id}}" name="user_id">
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Email Address*</label>
                                            <input type="email" value="{{auth()->user()->email}}" readonly="readonly">
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Phone no*</label>
                                            <input type="text" name="phone_number" placeholder="Phone number" value="{{auth()->user()->phone_number ?? ''}}">
                                            <span class="text-danger">{{$errors->first('phone_number')}}</span>
                                        </div>


                                        <div class="col-12 mb-20">
                                            <label>Address*</label>
                                            <input type="text" name="address" placeholder="Address" value="{{auth()->user()->address ?? ''}}">
                                            <span class="text-danger">{{$errors->first('address')}}</span>
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Country*</label>
                                            <select class="nice-select" name="country">
                                                <option>Nigeria</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Town/City*</label>
                                            <input type="text" name="city" placeholder="Town/City" value="{{auth()->user()->city ?? ''}}">
                                            <span class="text-danger">{{$errors->first('city')}}</span>
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>State*</label>
                                            <input type="text" name="state" placeholder="State" value="{{auth()->user()->state ?? ''}}">
                                            <span class="text-danger">{{$errors->first('state')}}</span>
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Zip Code*</label>
                                            <input type="text" name="zip_code" placeholder="Zip Code" value="{{auth()->user()->zip_code}}">
                                            <span class="text-danger">{{$errors->first('zip_code')}}</span>
                                        </div>

                                        <div class="col-12 mb-20">

                                            <div class="check-box">
                                                <input type="checkbox" name="ship_diff_add" id="shiping_address" data-shipping>
                                                <label for="shiping_address">Ship to Different Address</label>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <!-- Shipping Address -->
                                <div id="shipping-form">
                                    <h4 class="checkout-title">Shipping Address</h4>

                                    <div class="row">

                                        <div class="col-md-12 col-12 mb-20">
                                            <label>Full Name*</label>
                                            <input type="text" value="{{auth()->user()->name}}" placeholder="First Name" readonly="readonly">
                                        </div>


                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Email Address*</label>
                                            <input type="email" value="{{auth()->user()->email}}" placeholder="Email Address" readonly="readonly">
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Phone no*</label>
                                            <input type="text" name="phone_number_ref" placeholder="Phone number" value="{{auth()->user()->phone_number}}">
                                        </div>



                                        <div class="col-12 mb-20">
                                            <label>Address*</label>
                                            <input type="text" name="address_ref" placeholder="Address line 1">
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Country*</label>
                                            <select class="nice-select" name="country_ref">
                                                <option>Nigeria</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Town/City*</label>
                                            <input type="text" name="city_ref" placeholder="Town/City">
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>State*</label>
                                            <input type="text" name="state_ref" placeholder="State">
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Zip Code*</label>
                                            <input type="text"name="zip_code_ref" placeholder="Zip Code">
                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-5">
                                <div class="row">

                                    <!-- Cart Total -->
                                    <div class="col-12 mb-60">

                                        <h4 class="checkout-title">Cart Total</h4>


                                        <div class="checkout-cart-total">

                                            <h4>Product <span>Total</span></h4>

                                            <ul>
                                                @foreach($cartCollection as $cartedProduct)
                                                    <li>{{str_limit($cartedProduct->name , $limit=20 , $end='...')}}  X  {{$cartedProduct->quantity}} <span>&#8358 {{number_format($cartedProduct->price)}}</span></li>
                                                @endforeach
                                            </ul>

                                            <p>Sub Total <span>&#8358  {{number_format($checkoutTotalSum)}}</span></p>
                                            @if(session()->has('coupon'))
                                                <p>Discounted Price  <span>&#8358  {{number_format($checkoutTotalSum - $sess['discount']) ?? 0}}</span></p>
                                            @endif
                                            @if(session()->has('coupon'))
                                                <p>Discount Value<sup><a  id="remove_discount"  class="text-danger">Remove</a></sup> <span>&#8358  {{number_format($sess['discount']) ?? 0}}</span></p>
                                            @endif

                                            @if(session()->has('coupon'))
                                                <h4>Grand Total <span>&#8358  {{number_format($checkoutTotalSum - $sess['discount']) }}</span></h4>
                                            @else
                                                <h4>Grand Total <span>&#8358  {{number_format($checkoutTotalSum)}}</span></h4>
                                            @endif

                                        </div>

                                    </div>

                                    <!-- Payment Method -->
                                    <div class="col-12 mb-30">

                                        <h4 class="checkout-title">Payment Method</h4>
                                        <select name="payment" class="form-control">
                                            <option value="">Select Payment Method</option>
                                            <option value="cash_on_delivery">Cash On delivery</option>
                                            <option value="online_payment">Online Payment</option>
                                        </select>
{{--                                        <div class="checkout-payment-method">--}}


{{--                                            <div class="single-method">--}}
{{--                                                <input type="radio" id="payment_check" name="payment-method" value="check">--}}
{{--                                                <label for="payment_check">Check Payment</label>--}}
{{--                                                <p data-method="check">Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>--}}
{{--                                            </div>--}}

{{--                                            <div class="single-method">--}}
{{--                                                <input type="radio" id="payment_bank" name="payment-method" value="bank">--}}
{{--                                                <label for="payment_bank">Direct Bank Transfer</label>--}}
{{--                                                <p data-method="bank">Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>--}}
{{--                                            </div>--}}

{{--                                            <div class="single-method">--}}
{{--                                                <input type="radio" id="payment_cash" name="cash_payment" value="cash">--}}
{{--                                                <label for="payment_cash">Cash on Delivery</label>--}}
{{--                                                <p data-method="cash">Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>--}}
{{--                                            </div>--}}

{{--                                            <div class="single-method">--}}
{{--                                                <input type="radio" id="payment_paypal" name="online_payment" value="paystack">--}}
{{--                                                <label for="payment_paypal">Paystack</label>--}}
{{--                                                <p data-method="paystack">Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>--}}
{{--                                            </div>--}}

{{--                                            <div class="single-method">--}}
{{--                                                <input type="checkbox" id="accept_terms">--}}
{{--                                                <label for="accept_terms">I’ve read and accept the terms & conditions</label>--}}
{{--                                            </div>--}}

{{--                                        </div>--}}

                                        <button class="ht-btn black-btn mt-40">Place order</button>

                                    </div>

                                </div>
                            </div>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--Checkout section end-->

@endsection
