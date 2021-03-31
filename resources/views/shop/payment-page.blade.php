
<!DOCTYPE html>
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{--    <title>{{ config('app.name', 'Laravel') }}</title>--}}
    <title>@yield('title')</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Place favicon.ico in the root directory -->
    <link href="{{asset('assets/images/favicon.ico')}}" type="img/x-icon" rel="shortcut icon">
    <!-- All css files are included here. -->
    <link rel="stylesheet" href="{{asset('assets/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/iconfont.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/helper.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/plugins.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- Modernizr JS -->
    <script src="{{asset('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>

    {{--    <script src="http://demo.expertphp.in/js/jquery.js"></script>--}}
    {{--    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>--}}
    <script src="jquery.min.js"></script>
    <link href="toastr.css" rel="stylesheet"/>
    <script src="toastr.js"></script>
    <style>
        #notification{
            display:none;
        }
        #cartPanel{
            height:300px;
            overflow-y: scroll;;
        }
        body{
            background:#80808033;
        }

        /*#heroColor {*/
        /*    min-height:100%;*/
        /*    background:linear-gradient(0deg, rgba(255, 0, 150, 0.3), rgba(255, 0, 150, 0.3)), url(http://lorempixel.com/800/600/nature/2);*/
        /*    background-size:cover;*/
        /*}*/
    </style>
    @toastr_css
</head>
<body>

<div class="col-md-4 col-sm4 col-lg-4 col-xl-4" style="margin:auto ">
    <div class="card text-center" id="paymentForm" >
{{--        <div class="card-header">--}}
{{--            Featured--}}
{{--        </div>--}}
        <div class="card-body">
            <h3 class="card-title">Confirm Your Payment</h3>
            <img src="{{asset('assets/images/confirm/confirm.png')}}"/>
            <p class="card-text">You need to click on the confirm payment below to finalize your purchase(s)</p>
{{--            <a href="#" class="btn btn-success">Confirm Payment</a>--}}
            <form id="paymentForm">
                <div class="form-group">
{{--                    <label for="email">Email Address</label>--}}
                    <input type="hidden" id="email-address"  value="{{auth()->user()->email}}"required />
                </div>
                <div class="form-group">
{{--                    <label for="amount">Amount</label>--}}
                    <input type="hidden" id="amount" value="{{$paymentVal}}" required />
                </div>
                <div class="form-group">
{{--                    <label for="first-name">First Name</label>--}}
                    <input type="hidden" id="first-name"  value="{{auth()->user()->name}}"/>
                </div>

                <div class="form-submit">
                    <button type="submit" onclick="payWithPaystack()" class="btn btn-success">Make Payment</button>
                </div>
            </form>
        </div>
{{--        <div class="card-footer text-muted">--}}
{{--            2 days ago--}}
{{--        </div>--}}
    </div>
</div>

@jquery
@toastr_js
@toastr_render

</body>
<script src="https://js.paystack.co/v1/inline.js"></script>
<script>
    const paymentForm = document.getElementById('paymentForm');
    paymentForm.addEventListener("submit", payWithPaystack, false);
    function payWithPaystack(e) {
        e.preventDefault();
        let handler = PaystackPop.setup({
            key: 'pk_test_20e05ff9b5eb9c701b14a644ba525e104e59021e', // Replace with your public key
            email: document.getElementById("email-address").value,
            amount: document.getElementById("amount").value * 100,
            ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
            // label: "Optional string that replaces customer email"
            onClose: function(){
                alert('Window closed.');
            },
            callback: function(response){
                delay=2000;
                var url = 'http://bytesaddon-new.test';
                setTimeout(function(){ window.location = url; }, delay);
                // let message = 'Payment complete! Reference: ' + response.reference;
                // alert(message);
            }
        });
        handler.openIframe();
    }
</script>

</htmL>











