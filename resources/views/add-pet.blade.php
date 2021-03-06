<?php
/**
 * Created by PhpStorm.
 * User: Gergana
 * Date: 03-Mar-17
 * Time: 4:52 PM
 */ ?>

@extends('layouts.master')
@section('content')
    <div class="col-md-6">
        @if(session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
        @endif
        <h1>Add new pet</h1>

        <form method="POST" enctype="multipart/form-data">
            <!--<div class="form-group">
                <input type="hidden" class="form-control" name="user_id" value="{{ Auth::user()->id}}" required="required"/>
            </div>-->
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Enter Name" required="required"/>
            </div>

            <div class="form-group">
                <select name="type" class="form-control" required="required">
                    <option value="dog">Dog</option>
                    <option value="cat">Cat</option>
                    <option value="fish">Fish</option>
                    <option value="hamster">Hamster</option>
                </select>
            </div>
            <div class="form-group">
                <input type="file" name="photo" required="required"/>
            </div>
            {{csrf_field()}}
            <button class="btn btn-success">Submit</button>
        </form>
    </div>
@stop
