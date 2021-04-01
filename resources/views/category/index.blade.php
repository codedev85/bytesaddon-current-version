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
                            <li class="breadcrumb-item">Category</li>
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
                    <div class="col-xl-3"></div>
                    <div class="col-xl-6 box-col-6 col-md-6">
                        <div class="container-fluid">
                            <div class="card">
                                <div class="card-header">
                                    <h5>All Category</h5>
                                </div>
                                <div class="card-body">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Category Name</th>
                                            <th scope="col">Action</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($cats as $index =>  $cat)
                                        <tr>
                                            <th scope="row">{{$index+1}}</th>
                                            <td>{{$cat->category}}</td>
                                            <td>
                                               <button type="button" class="btn btn-success" id="editCat" data-toggle="modal" data-target="#editModal" data-id="{{ $cat->id }}" >Edit</button>
                                               {{-- data-attr="{{url('/category/'.$cat->id.'/edit')}}" --}}
                                            </td>
                                        </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label>Category Name</label>
                    <input type="text" class="form-control" id="cat_name"/>
                    <input type="hidden" class="form-control" id="cat_id"/>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="submit">Save changes</button>
                </div>
            </div>
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
                var id = $("#cat_id").val();
                var  cat = $("#cat_name").val();
                $.ajax({
                    url: '/category/update/' + id,
                    type: "POST",
                    data: {
                        id: id,
                        cat : cat,
                    },
                    dataType: 'json',
                    success: function (data) {
                        $('#statusdata').trigger("reset");
                        $('#statusModal').modal('hide');
                        window.location.reload(true);
                    }
                });
            });

            $('body').on('click', '#editCat', function (event) {
                event.preventDefault();
                var id = $(this).data('id');
                $.get('/category/' + id + '/edit', function (data) {
                    $('#cat_id').val(data.data.id);
                    $('#cat_name').val(data.data.category);
                })
            });

            });
   </script>
@endsection

