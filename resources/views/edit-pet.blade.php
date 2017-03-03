<?php
/**
 * Created by PhpStorm.
 * User: Gergana
 * Date: 03-Mar-17
 * Time: 5:01 PM
 */

@extends('layouts.master')

@section('content')
    <div class="col-md-6">
        @if(session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
        @endif
        <h1>Edit new product</h1>

        <div class="form-group">
            <a href="{{URL::previous()}}" class="btn btn-info">back</a>
        </div>
        <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <input type="text" class="form-control" name="name" value="{{$pet->name}}" placeholder="enter name"
                       required="required"/>
            </div>

            <div class="form-group">
                <input type="number" name="type" class="form-control" step="0.01" value="{{$pet->type}}"
                       placeholder="enter type" required="required"/>
            </div>


            <div class="form-group">
                <input type="file" name="photo"/>
            </div>

            <div class="form-group">
                <img src="{{URL::asset($pet->imagePath)}}" class="img-responsive">
            </div>

            <input type="hidden" value="PUT" name="_method"/>
            {{csrf_field()}}
            <button class="btn btn-success">upload</button>
        </form>
    </div>
@endsection