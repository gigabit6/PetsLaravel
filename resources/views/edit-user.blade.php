<?php
/**
 * Created by PhpStorm.
 * User: Gergana
 * Date: 03-Mar-17
 * Time: 7:50 PM
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
        <h1>Edit user</h1>

        <div class="form-group">
            <a href="{{URL::previous()}}" class="btn btn-info">back</a>
        </div>
        <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <input type="text" class="form-control" name="name" value="{{$user->name}}" placeholder="enter name"
                       required="required"/>
            </div>

            <div class="form-group">
                <input type="number" name="email" class="form-control"  value="{{$user->email}}"
                       placeholder="enter email" required="required"/>
            </div>

            <div class="form-group">
                <input type="password" name="password" class="form-control"  value="{{$user->password}}"
                       placeholder="enter password" required="required"/>
            </div>

            <div class="form-group">
                <label for="isAdmin">Is Admin?</label>
                <input type="checkbox" name="isAdmin" value="{{$user->isAdmin}}"/>
            </div>

            <input type="hidden" value="PUT" name="_method"/>
            {{csrf_field()}}
            <button class="btn btn-success">Save</button>
        </form>
    </div>
@endsection
