<?php
/**
 * Created by PhpStorm.
 * User: Gergana
 * Date: 03-Mar-17
 * Time: 5:01 PM
 */ ?>

@extends('layouts.master')

@section('content')
    <div class="col-md-6">
        @if(session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
        @endif
        <h1>Edit Pet</h1>

        <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <input type="text" class="form-control" name="name" value="{{$pet->name}}" placeholder="enter name"
                       required="required"/>
            </div>

            <div class="form-group">
                <input type="text" name="type" class="form-control"  value="{{$pet->type}}"
                       placeholder="enter type" required="required"/>
            </div>


            <div class="form-group">
                <input type="file" name="photo"/>
            </div>
            <img src="{{URL::asset($pet->photo)}}" alt="" class="img-responsive" style="max-height: 250px">
            <input type="hidden" value="POST" name="_method"/>
            {{csrf_field()}}
            <a href="{{URL::previous()}}" class="btn btn-info">Back</a>
            <button class="btn btn-success">Save</button>
        </form>
    </div>
@endsection