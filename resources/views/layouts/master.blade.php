<?php
/**
 * Created by PhpStorm.
 * User: Gergana
 * Date: 03-Mar-17
 * Time: 4:07 PM
 */ ?><!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <base href="{{URL::asset('/')}}" target="_top">

    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{ URL::asset('font-awesome/4.2.0/css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" href="{{ URL::asset('css/custom.css') }}" class="theme-stylesheet" id="theme-style"/>
    <link rel="stylesheet" href="{{ URL::asset('fonts/fonts.googleapis.com.css')}}"/>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.2.1.1.min.js')}}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ URL::asset('js/custom.js')}}"></script>
</head>
<body class="nav-md">
<div class="container body">
    <div class="main_container" id="main-container">

        @include('partials.sidebar')
        @include('partials.header')
        <div class="right_col" role="main">

            <div class="breadcrumbs" id="breadcrumbs">

            </div>
            @yield('content')
        </div>

        @include('partials.footer')
    </div>
</div>
</body>
</html>