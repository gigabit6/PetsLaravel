@extends('layouts.master')

@section('content')
    <div class="jumbotron">
    <h1 class="text-center">Pet Shop</h1>

    <h4 class="page-content text-center" style="margin-bottom: 20px">Welcome to our pet shop.</h4>

        <div class="text-center">
            <img src="{{URL::asset("photos/head-logo.png")}}">
        </div>
        @if(!Auth::check())
            <p class="text-center">
                <a class="btn btn-lg " href="{{route('register')}}" role="button">Register</a>
            </p>

            <p class="text-center">
                <a class="btn btn-lg" href="{{route('login')}}" role="button">Log In</a>
            </p>

        @endif
    </div>

@endsection
