<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{$page->title}}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1,maximum-scale=1">
    @yield('meta')

    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,500,600,700,800,900&display=swap">
    <link rel="stylesheet" href="{{asset('assets/css/icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/plugins.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/colors.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/styles.css')}}">
    @yield('styles')
    <style>
        .social-links li{
            background-color:#03A3DF !important;
        }
    </style>
    @yield('head')
</head>
<body>

@include('partials.header')

@include('partials.mobile_nav')

@yield('content')

@include('partials.footer')


<div class="scroll-up">
    <i class="fa fa-angle-up"></i>
</div>

<script src="{{asset('/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/assets/js/plugins.min.js')}}"></script>
<script src="{{asset('/assets/js/main-scripts.js')}}"></script>

@yield('scripts')
</body>
</html>
