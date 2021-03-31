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
                            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Dashboard</li>
                            <li class="breadcrumb-item">Add Product</li>
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

            <div class="row size-column">
                <div class="col-xl-12 col-md-12 col-lg-12 col-sm-12 box-col-12 xl-100">
                    <div class="row dash-chart">
                        <div class="col-xl-1"></div>
                        <div class="col-xl-10 col-lg-10 col-sm-10 col-xs-10 box-col-6 col-md-6">
                                <div class="container-fluid">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Add Product</h5>
                                        </div>
                                        <div class="card-body">
                                            <form action="{{url('/store/product')}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-12 col-lg-12 col-xl-12 col-sm-12 mb-3">
                                                        <label for="product_name">Product Name</label>
                                                        <input class="form-control" id="product_name" type="text" placeholder="Product Name" value="{{old('name')}}" name="name" required>
{{--                                                        <span>{{errors()->first('category')}}</span>--}}
                                                    </div>
                                                    <div class="col-md-12 col-lg-12 col-xl-12 col-sm-12 mb-3">
                                                        <label for="product_name">Amount</label>
                                                        <input class="form-control" id="amount" type="text" placeholder="Product Amount" value="{{old('amount')}}" name="amount" required>
                                                        {{--                                                        <span>{{errors()->first('category')}}</span>--}}
                                                    </div>
                                                    <div class="col-md-12 col-lg-12 col-xl-12 col-sm-12 mb-3">
                                                        <label for="categoryId">Category</label>
                                                      <select name="category" id="categoryId" class="form-control">
                                                          <option value="">-- Select Category ---</option>
                                                          @foreach($categories as $key => $cat)
                                                              <option value="{{$cat->id}}">{{$cat->category}}</option>
                                                          @endforeach
                                                      </select>
                                                    </div>
                                                    <div class="col-md-12 col-lg-12 col-xl-12 col-sm-12 mb-3">
                                                    <div class="form-group">
                                                        <label for="subcategory">Select SubCategory:</label>
                                                        <select name="sub_category" class="form-control" id="subcategory" >
                                                        </select>
                                                    </div>
                                                    </div>
                                                    <div class="col-md-12 col-lg-12 col-xl-12 col-sm-12 mb-3">
                                                        <label for="image1">Image1</label>
                                                        <input type="file" class="form-control" name="image1"/>
                                                        {{--                                                        <span>{{errors()->first('category')}}</span>--}}
                                                    </div>
                                                    <div class="col-md-12 col-lg-12 col-xl-12 col-sm-12 mb-3">
                                                        <label for="image2">Image2</label>
                                                        <input type="file" class="form-control" name="image2"/>
                                                        {{--                                                        <span>{{errors()->first('category')}}</span>--}}
                                                    </div>
                                                    <div class="col-md-12 col-lg-12 col-xl-12 col-sm-12 mb-3">
                                                        <label for="image3">Image3</label>
                                                        <input type="file" class="form-control" name="image3"/>
                                                        {{--                                                        <span>{{errors()->first('category')}}</span>--}}
                                                    </div>

                                                    <div class="col-md-12 col-lg-12 col-xl-12 col-sm-12 mb-3">
                                                        <label for="description">Description</label>
                                                        <textarea class="form-control" cols="10" rows="10"  name="description"></textarea>
                                                        {{--                                                        <span>{{errors()->first('category')}}</span>--}}
                                                    </div>

                                                </div>
                                                <button class="btn btn-primary" type="submit">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                             </div>
                        </div>
                   </div>
            </div>
        </div>
    </div>
{{--    </div>--}}
    <script type="text/javascript">
        $(document).ready(function() {
            $('select[name="category"]').on('change', function() {
                var categoryID = $(this).val();
                if(categoryID) {
                    $.ajax({
                        url: '/subcategory/fetch/'+categoryID,
                        type: "GET",
                        dataType: "json",
                        success:function(data) {

                            $('select[name="sub_category"]').empty();
                            $.each(data, function(key, value) {
                                console.log(value,key)
                                $('select[name="sub_category"]').append('<option value="'+ key +'">'+ value +'</option>');
                            });


                        }
                    });
                }else{
                    $('select[name="sub_category"]').empty();
                }
            });
        });
    </script>

@endsection

