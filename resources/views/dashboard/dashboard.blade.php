@extends('layouts.app-admin')
@section('title' ,'Admin-Dashboard')
@section('admin-content')

        <div class="page-body">
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-6">
                            <h3>
                                Dashboard</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/dashboard')}}"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Dashboard</li>
                            </ol>
                        </div>
                        <div class="col-6">
                            <!-- Bookmark Start-->
                            <div class="bookmark pull-right">
                                <ul>
                                    <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Chat"><i data-feather="message-square"></i></a></li>
                                    <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Icons"><i data-feather="command"></i></a></li>
                                    <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Learning"><i data-feather="layers"></i></a></li>
                                    <li><a href="#"><i class="bookmark-search" data-feather="star"></i></a>
                                        <form class="form-inline search-form" action="#" method="get">
                                            <div class="form-group form-control-search">
                                                <div class="Typeahead Typeahead--twitterUsers">
                                                    <div class="u-posRelative">
                                                        <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search.." name="q" title="" autofocus>
                                                        <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div>
                                                    </div>
                                                    <div class="Typeahead-menu"></div>
                                                    <script id="result-template" type="text/x-handlebars-template">
                                                        <div class="ProfileCard u-cf">
                                                            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
                                                            <div class="ProfileCard-details">
                                                                <div class="ProfileCard-realName">Name</div>
                                                            </div>
                                                        </div>
                                                    </script>
                                                    <script id="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
                                                </div>
                                            </div>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                            <!-- Bookmark Ends-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row size-column">
                    <div class="col-xl-7 box-col-12 xl-100">
                        <div class="row dash-chart">
                            <div class="col-xl-6 box-col-6 col-md-6">
                                <div class="card o-hidden">
                                    <div class="card-header card-no-border">
                                        <div class="card-header-right">
                                            <ul class="list-unstyled card-option">
                                                <li><i class="fa fa-spin fa-cog"></i></li>
                                                <li><i class="view-html fa fa-code"></i></li>
                                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                                <li><i class="icofont icofont-error close-card"></i></li>
                                            </ul>
                                        </div>
                                        <div class="media">
                                            <div class="media-body">
                                                <p><span class="f-w-500 font-roboto">Today Total Sales</span></p>
                                                <h4 class="f-w-500 mb-0 f-26">&#8358;<span class="counter">{{$todaysOrder}}</span></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 box-col-6 col-md-6">
                                <div class="card o-hidden">
                                    <div class="card-header card-no-border">
                                        <div class="card-header-right">
                                            <ul class="list-unstyled card-option">
                                                <li><i class="fa fa-spin fa-cog"></i></li>
                                                <li><i class="view-html fa fa-code"></i></li>
                                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                                <li><i class="icofont icofont-error close-card"></i></li>
                                            </ul>
                                        </div>
                                        <div class="media">
                                            <div class="media-body">
                                                <p><span class="f-w-500 font-roboto">Weekly's Total Sales / Orders</span></p>
                                                <h4 class="f-w-500 mb-0 f-26 ">&#8358;<span class="counter"> {{$weeklysales}}</span></h4>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-6 box-col-6 col-lg-12 col-md-6">
                                <div class="card o-hidden">
                                    <div class="card-body">
                                        <div class="ecommerce-widgets media">
                                            <div class="media-body">
                                                <p class="f-w-500 font-roboto">Total Product(s)</p>
                                                <h4 class="f-w-500 mb-0 f-26"><span class="counter">{{$productsCount}}</span></h4>
                                            </div>
{{--                                            <div class="ecommerce-box light-bg-primary"><i class="fa fa-heart" aria-hidden="true"></i></div>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 box-col-6 col-lg-12 col-md-6">
                                <div class="card o-hidden">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-body">
                                                <p class="f-w-500 font-roboto">Today Order Count</p>
                                                <div class="progress-box">
                                                    <h4 class="f-w-500 mb-0 f-26"><span class="counter">{{$totalOrderCount}}</span></h4>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 box-col-12 xl-50">
                        <div class="card o-hidden dash-chart">
                            <div class="card-header card-no-border">
                                <div class="card-header-right">
                                    <ul class="list-unstyled card-option">
                                        <li><i class="fa fa-spin fa-cog"></i></li>
                                        <li><i class="view-html fa fa-code"></i></li>
                                        <li><i class="icofont icofont-maximize full-card"></i></li>
                                        <li><i class="icofont icofont-minus minimize-card"></i></li>
                                        <li><i class="icofont icofont-refresh reload-card"></i></li>
                                        <li><i class="icofont icofont-error close-card"></i></li>
                                    </ul>
                                </div>
                                <div class="media">
                                    <div class="media-body">
                                        <p><span class="f-w-500 font-roboto">Total Profit</span></p>
                                        <h4 class="f-w-500 mb-0 f-26">&#8358;<span class="counter">{{$orderSum}}</span></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 xl-50 box-col-12">
                        <div class="card">
                            <div class="card-header card-no-border">
                                <h5>New Order(s)</h5>
                                <div class="card-header-right">
                                    <ul class="list-unstyled card-option">
                                        <li><i class="fa fa-spin fa-cog"></i></li>
                                        <li><i class="view-html fa fa-code"></i></li>
                                        <li><i class="icofont icofont-maximize full-card"></i></li>
                                        <li><i class="icofont icofont-minus minimize-card"></i></li>
                                        <li><i class="icofont icofont-refresh reload-card"></i></li>
                                        <li><i class="icofont icofont-error close-card"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="our-product">
                                    <div class="table-responsive">
                                        <table class="table table-bordernone">
                                            <thead>
                                            <th>Referenc Number</th>
                                            <th>Product Name</th>
                                            <th>Product Amount</th>
                                            <th>Buyers Name</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                            </thead>
                                            <tbody class="f-w-500">
                                            @foreach($recentOrders as $order)
                                            <tr>
                                                <td>
                                                    <span >{{$order->order_id}}</span>
                                                </td>
                                                <td>
                                                    <span>{{Ucfirst(str_limit($order->product->name , $limit=20 , $end='...'))}}</span>
                                                </td>
                                                <td>
                                                    <span>&#8358; {{number_format($order->product_amount)}}</span>
                                                </td>
                                                <td>
                                                    <span>{{$order->user->name}}</span>
                                                </td>

                                                <td>
                                                  <span>{{$order->created_at->format('D M Y')}}</span>
                                                </td>
                                                <td>
                                                    <a href="{{url('/order/invoice/'.$order->id)}}" class="btn btn-success">View Invoice</a>
                                                </td>
                                            </tr>
                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="code-box-copy">
                                    <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head3" title="Copy"><i class="icofont icofont-copy-alt"></i></button>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 xl-50 box-col-12">
                        <div class="card">
                            <div class="card-header card-no-border">
                                <h5>Activities</h5>
                                <div class="card-header-right">
                                    <ul class="list-unstyled card-option">
                                        <li><i class="fa fa-spin fa-cog"></i></li>
                                        <li><i class="view-html fa fa-code"></i></li>
                                        <li><i class="icofont icofont-maximize full-card"></i></li>
                                        <li><i class="icofont icofont-minus minimize-card"></i></li>
                                        <li><i class="icofont icofont-refresh reload-card"></i></li>
                                        <li><i class="icofont icofont-error close-card"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body new-update pt-0">
                                <div class="activity-timeline">
                                    <div class="media">
                                        <div class="activity-line"></div>
                                        <div class="activity-dot-secondary"></div>
                                        <div class="media-body"><span>Update Product</span>
                                            <p class="font-roboto">Quisque a consequat ante Sit amet magna at volutapt.</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="activity-dot-primary"></div>
                                        <div class="media-body"><span>James liked Nike Shoes</span>
                                            <p class="font-roboto">Aenean sit amet magna vel magna fringilla ferme.</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="activity-dot-secondary"></div>
                                        <div class="media-body"><span>john just buy your product<i class="fa fa-circle circle-dot-secondary pull-right"></i></span>
                                            <p class="font-roboto">Vestibulum nec mi suscipit, dapibus purus.....</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="activity-dot-primary"></div>
                                        <div class="media-body"><span>Jihan Doe just save your product<i class="fa fa-circle circle-dot-primary pull-right"></i></span>
                                            <p class="font-roboto">Curabitur egestas consequat lorem.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="code-box-copy">
                                    <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head5" title="Copy"><i class="icofont icofont-copy-alt"></i></button>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

@endsection
