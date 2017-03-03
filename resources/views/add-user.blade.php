<?php
/**
 * Created by PhpStorm.
 * User: Gergana
 * Date: 03-Mar-17
 * Time: 7:35 PM
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
        <h1>Add new user</h1>

        <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="enter name" required="required"/>
            </div>
            <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="enter e-mail" required="required"/>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" required="required" placeholder="enter password" />
            </div>
            <div class="form-group">
                <input type="checkbox" name="isAdmin" />
                <label for="isAdmin">Is Admin?</label>
            </div>
            {{csrf_field()}}
            <button class="btn btn-success">Submit</button>
        </form>
    </div>
@stop

