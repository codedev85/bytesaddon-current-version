@extends('layouts.app-admin')
@section('title' ,'Admin-Dashboard | Add Product')
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

        <div class="card text-center">
            <div class="card-header"><h2>Product(s)</h2></div>
            <div class="card-body">
                <div style="display:flex; justify-content: flex-end;">
                    <div class="col-md-4 col-lg-4 col-xl-4 col-sm-4">
                        <form action="{{url('/search/products')}}" method="POST">
                            @csrf
                            <div style="display:flex; justify-content: flex-end;">
                                <input type="text" name="search" placeholder="Search Products......" class="form-control"/>

                                <button class="btn btn-success" >search</button>
                            </div>

                        </form>
                    </div>
                </div>


                <br><br>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Product Description</th>
                        <th scope="col">Product Amount</th>
                        <th scope="col">Product Image</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $key => $product)
                    <tr>
                        <th scope="row">{{$key + 1}}</th>
                        <td><a href="">{{Ucfirst(str_limit($product->name ,$limit=50 ,$end='...'))}}</a></td>
                        <td>{{Ucfirst(str_limit($product->description, $limit=50,$end='...'))}}</td>
                        <td>&#8358; {{number_format($product->amount)}}</td>
                        <td><img src="{{url('storage/'.$product->image1)}}"  height="100" width="100"/></td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action Button
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="{{ url('/product/'.$product->slug.'/edit') }}">
                                    <button class="dropdown-item" type="button">Edit</button>
                                    </a>
                                    <button class="dropdown-item"  type="button" id="updateStatus" data-toggle="modal" data-target="#statusModal"  data-id="{{$product->id}}">Status</button>
                                    <hr>
                                    <button class="dropdown-item" type="button">
                                        <form id="delete-form" method="POST" action="{{ url('/product/delete/'.$product->slug) }}">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                        
                                            <div class="form-group">
                                              <input type="submit" class="btn btn-danger" value="Delete Product">
                                            </div>
                                          </form>
                                    </button>
                                </div>
                            </div>
                        </td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>

            <div class="card-footer text-muted">{{$products->links()}}</div>
        </div>

    </div>


    <!-- Modal -->
    <div class="modal fade" id="statusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Change Product Status</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="statusdata">
                <input type="hidden" id="status_id" name="status_id" value="">
                <div style="display:flex; justify-content: flex-end">
                    <h3 id="status_current" class="text-success"></h3>
                </div>
                <input type="hidden" id="status_id"/>

                <div class="modal-body">
                    <label>Product Status</label>
                  <select class="form-control" name="sales" id="sales">
                      <option value="On Sales">On Sales</option>
                      <option value="Top Rated">Top rated</option>
                  </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="submit">Save changes</button>
                </div>
            </div>
        </form>
        </div>
    </div>
        <!--- modal ends here -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script>

        $(document).ready(function () {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('body').on('click', '#submit', function (event) {

                event.preventDefault()
                var id = $("#status_id").val();
                var sales = $("#sales").val();
                $.ajax({
                    url: '/update/product/status/' + id,
                    type: "POST",
                    data: {
                        id: id,
                        sales : sales,
                    },
                    dataType: 'json',
                    success: function (data) {
                        $('#statusdata').trigger("reset");
                        $('#statusModal').modal('hide');
                        window.location.reload(true);
                    }
                });
            });

            $('body').on('click', '#updateStatus', function (event) {
                event.preventDefault();
                var id = $(this).data('id');
            
                $.get('/product/' + id + '/status', function (data) {
                    $('#status_id').val(data.data.id);
                    $('#status_current').text(data.data.push_sales);

                })
            });

        });
    </script>
@endsection

