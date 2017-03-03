<?php
/**
 * Created by PhpStorm.
 * User: Gergana
 * Date: 03-Mar-17
 * Time: 5:10 PM
 */
?>
@extends('layouts.master')

@section('content')
    <div class="col-md-6">
        @if(session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
        @endif
        <h1>{{$product->title}}</h1>

        <div class="form-group">
            <a href="{{URL::previous()}}" class="btn btn-info">back</a>
        </div>
        <div class="form-group">
            <p>{{$pet->name}} $</p>
        </div>

        <div class="form-group">
            <p> {{$pet->type}}</p>
        </div>
        <div class="form-group">
            <img src="{{URL::asset($product->imagePath)}}" class="img-responsive">
        </div>
    </div>
@endsection
