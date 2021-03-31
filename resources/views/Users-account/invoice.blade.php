<!DOCTYPE html>
<html>
<head>
    <title>Invoice</title>
    <link rel="stylesheet" href="{{asset('assets/css/vendor/bootstrap.min.css')}}">
    <style>
        body{
            background:#80808026;
        }
        #invoice{
            box-shadow: 5px 5px 5px 5px #8888880d;
        }
    </style>
    <script src="jquery.min.js"></script>
    <link href="toastr.css" rel="stylesheet"/>
    <script src="toastr.js"></script>
    @toastr_css
</head>

<body>
<div class="container" >
    <br>
    <div style="display:flex;width:1000px; justify-content:space-between;">
        <div>
{{--           <h1 class="text-success">Invoice</h1>--}}
        </div>
        <div>
            <h1><a href="{{url('/home')}}"> <img src="{{asset('/assets/images/undo.png')}}"/></a></h1>
        </div>
    </div>

    <div class="row" >
        <div class="card text-center">
{{--            <div class="card-header">--}}
{{--                Bytesaddon Invoice--}}
{{--            </div>--}}
            <div class="card-body" style="width:1000px; height:900px;" id="invoice">
               <img src="{{asset('/assets/images/logo-dark.png')}}"/>
                <div>
                    <br>
                    Computer Vilage ,Lagos<br>
                    email@bytesaddon.com.ng<br>
                    09000000300 ,090998484884 <br>
                    <hr>
                </div>

                <div style="display:flex; justify-content: flex-start;">
                    <span class="text-success">#Order Date: {{$order->created_at->format('D M Y')}}</span>
                </div>
                <div style="display:flex; justify-content: flex-start;">
                    <span class="text-success">#Order Ref:</span>
                </div>
                <div style="display:flex; justify-content: flex-start;">
                    <span class="text-success">#Order Status: {{Ucfirst($order->status)}}</span>
                </div>
                <br><br>

                <div style="display:flex; justify-content: space-between;">
                    <div>
                        <h4>Order Details</h4>
                    </div>
                    <div>
                        <a href="{{url('/download/pdf/'.$order->id)}}">
                            <button class="btn btn-success">Download Invoice</button>
                        </a>

                    </div>

                </div>
                <br>
                <div>
                    <table class="table table-striped">
                        <thead>
                        <tr>
{{--                            <th scope="col">#</th>--}}
                            <th scope="col">Product</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Discount</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
{{--                            <th scope="row">1</th>--}}
                            <td>{{$order->product['name']}}</td>
                            <td>&#8358; {{number_format($order->product_amount)}}</td>
                            <td>{{number_format($order->discounted_price)}}</td>
                        </tr>

                        </tbody>
                    </table>
                </div>

                <div style="display:flex; justify-content: flex-end;">
                    <h2 class="text-success">#Total: &#8358; {{number_format($order->product_amount)}}</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@jquery
@toastr_js
@toastr_render
</body>

</html>
