@extends('layouts.master')

@section('content')
        <h1>Shop</h1>

        <p class="page-content">Welcome to our pet shop.</p>
        @if(!Auth::check())
            <p>
                <a class="btn btn-lg btn-success" href="{{route('register')}}" role="button">Register</a>
            </p>
        @endif

@endsection
