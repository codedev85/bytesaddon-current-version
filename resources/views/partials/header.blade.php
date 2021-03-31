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

        /*#heroColor {*/
        /*    min-height:100%;*/
        /*    background:linear-gradient(0deg, rgba(255, 0, 150, 0.3), rgba(255, 0, 150, 0.3)), url(http://lorempixel.com/800/600/nature/2);*/
        /*    background-size:cover;*/
        /*}*/
    </style>
    @toastr_css
</head>
