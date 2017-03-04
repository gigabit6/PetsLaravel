<?php
/**
 * Created by PhpStorm.
 * User: Gergana
 * Date: 03-Mar-17
 * Time: 8:00 PM
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
        <h1>{{$user->name}}</h1>
        <div class="form-group">
            <p>Email: {{$user->email}}</p>
        </div>

            <div class="form-group">
                <p> Is Admin :{{$user->isAdmin? 'Yes':'No'}}</p>
            </div>

        <div class="form-group">
            <a href="{{URL::previous()}}" class="btn btn-info">Back</a>
        </div>
    </div>
@endsection

