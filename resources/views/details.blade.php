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
        <div class="panel panel-default" style="width: 400px">
            <div class="panel-heading">Pet Comments:</div>
            <div class="panel-body">
                <ol>
                    @foreach($comments as $c)
                        <li>{{$c->message}}</li>
                    @endforeach
                </ol>
            </div>
        </div>

        <div class="panel panel-default" style="width: 400px">
            <div class="panel-body">
                <form method="POST" enctype="multipart/form-data" action="{{route('pets.addComments',$pet->id)}}">
                    <div class="form-group">
                        <input type="text" name="message" class="form-control" placeholder="Enter comment"
                               required="required"/>
                    </div>
                    <button class="btn btn-success">Comment</button>
                    {{csrf_field()}}
                    <input type="hidden" value="POST" name="_method">
                </form>
            </div>
        </div>
        <div class="form-group">
            <a href="{{URL::previous()}}" class="btn btn-info">Back</a>
        </div>
    </div>
@endsection
