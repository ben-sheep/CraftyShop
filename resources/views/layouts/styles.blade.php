@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- dl Icon CSS -->
    <link rel="stylesheet" href="{{ asset('css/dl-icon.css') }}">
    <!-- All Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}">
    <!-- Revoulation Slider CSS  -->
    <link rel="stylesheet" href="{{ asset('css/revoulation.css') }}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <style>
        .shop-cart{
            margin: auto;
            position: absolute;
            top: 0; left: 0; bottom: 0; right: 0;
        }
    </style>
@endsection
