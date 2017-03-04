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
        <h1>{{$pet->name}}</h1>

        <div class="form-group">
            <h3> {{$pet->type}}</h3>
        </div>
        <div class="form-group">
            <img src="{{URL::asset($pet->photo)}}" class="img-responsive" style="max-height: 300px">
        </div>

        <div class="form-group">
            <a href="{{URL::previous()}}" class="btn btn-info">Back</a>
        </div>
    </div>
@endsection
