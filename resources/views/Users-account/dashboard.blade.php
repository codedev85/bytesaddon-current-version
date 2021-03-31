@extends('layouts.app')
@section('title' ,'bytesaddon.com.ng | Dashboard')
@section('content')

    <!-- Page Banner Section Start -->
    <div class="page-banner-section section bg_image--3">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="page-banner text-center">
                        <h2>My Account</h2>
                        <ul class="page-breadcrumb">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li>My Account</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Page Banner Section End -->

    <!--My Account section start-->
    <div class="my-account-section section sb-border pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <div class="row">
                        <!-- My Account Tab Menu Start -->
                        <div class="col-lg-3 col-12">
                            <div class="myaccount-tab-menu nav" role="tablist">
                                <a href="#dashboad" class="active" data-toggle="tab"><i class="fa fa-dashboard"></i>
                                    Dashboard</a>

                                <a href="#orders" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i> Orders</a>

                                <a href="#download" data-toggle="tab"><i class="fa fa-cloud-download"></i> Download</a>

                                <a href="#payment-method" data-toggle="tab"><i class="fa fa-credit-card"></i> Payment
                                    Method</a>

                                <a href="#address-edit" data-toggle="tab"><i class="fa fa-map-marker"></i> address</a>

                                <a href="#account-info" data-toggle="tab"><i class="fa fa-user"></i> Account Details</a>

                                <a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> Logout</a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>
                        <!-- My Account Tab Menu End -->

                        <!-- My Account Tab Content Start -->
                        <div class="col-lg-9 col-12">
                            <div class="tab-content" id="myaccountContent">
                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Dashboard</h3>

                                        <div class="welcome mb-20">
                                            <p>Hello, <strong>{{auth()->user()->name}}</strong> </p>
                                        </div>

                                        <p class="mb-0">From your account dashboard. you can easily check &amp; view your
                                            recent orders, manage your shipping and billing addresses and edit your
                                            password and account details.</p>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="orders" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Orders</h3>

                                        <div class="myaccount-table table-responsive text-center" style="height:400px;">
                                            <table class="table table-bordered">
                                                <thead class="thead-light">
                                                <tr>
                                                    <th>No</th>
                                                    <th>Name</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                    <th>Total</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>

                                                <tbody>
                                                @foreach($orders as $key => $order)
                                                <tr>
                                                    <td>{{$key+1}}</td>
                                                    <td>{{str_limit($order->product['name'] , $limit=20 ,$end='...')}}</td>
                                                    <td>{{$order->created_at->format('D M Y')}}</td>
                                                    <td>{{ucfirst($order->status)}}</td>
                                                    @if($order->discounted_price == 0)
                                                    <td>
                                                        &#8358 {{number_format($order->product_amount)}}
                                                    </td>
                                                    @else
                                                    <td>
                                                        &#8358 {{number_format($order->discounted_price)}}
                                                    </td>
                                                    @endif
                                                    <td><a href="{{url('/invoice/'.$order->id)}}" class="ht-btn black-btn">View Invoice</a></td>
                                                </tr>
                                            @endforeach
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="download" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Downloads</h3>

                                        <div class="myaccount-table table-responsive text-center">
                                            <table class="table table-bordered">
                                                <thead class="thead-light">
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Date</th>
                                                    <th>Expire</th>
                                                    <th>Download</th>
                                                </tr>
                                                </thead>

                                                <tbody>
                                                <tr>
                                                    <td>Mostarizing Oil</td>
                                                    <td>Aug 22, 2018</td>
                                                    <td>Yes</td>
                                                    <td><a href="#" class="ht-btn black-btn">Download File</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Katopeno Altuni</td>
                                                    <td>Sep 12, 2018</td>
                                                    <td>Never</td>
                                                    <td><a href="#" class="ht-btn black-btn">Download File</a></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="payment-method" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Payment Method</h3>

                                        <p class="saved-message">You Can't Saved Your Payment Method yet.</p>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="address-edit" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Billing Address</h3>
                                    @if(!is_null(auth()->user()->address))
                                        <address>
                                            <p>{{auth()->user()->address}} <br>
                                                {{auth()->user()->city}}, {{auth()->user()->country}}</p>
                                            <p>Mobile: {{auth()->user()->phone_number}}</p>
                                        </address>
                                    @endif
                                        <a href="#" class="ht-btn black-btn d-inline-block edit-address-btn"><i class="fa fa-edit"></i>Edit Address</a>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="account-info" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Account Details</h3>

                                        <div class="account-details-form">
                                            <form action="#">
                                                <div class="row">
                                                    <div class="col-lg-12 col-12 mb-30">
                                                        <input id="first-name" value="{{auth()->user()->name}}" type="text">
                                                    </div>


                                                    <div class="col-12 mb-30">
                                                        <input id="email"  value="{{auth()->user()->email}}" type="email" readonly="readonly">
                                                    </div>

                                                    <div class="col-12 mb-30">
                                                        <h4>Password change</h4>
                                                    </div>

{{--                                                    <div class="col-12 mb-30">--}}
{{--                                                        <input id="current-pwd" placeholder="Current Password" type="password">--}}
{{--                                                    </div>--}}

                                                    <div class="col-lg-6 col-12 mb-30">
                                                        <input id="new-pwd" placeholder="New Password" type="password">
                                                    </div>

                                                    <div class="col-lg-6 col-12 mb-30">
                                                        <input id="confirm-pwd" placeholder="Confirm Password" type="password">
                                                    </div>

                                                    <div class="col-12">
                                                        <button class="save-change-btn">Save Changes</button>
                                                    </div>

                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->
                            </div>
                        </div>
                        <!-- My Account Tab Content End -->
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!--My Account section end-->



@endsection
