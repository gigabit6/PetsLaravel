<?php
/**
 * Created by PhpStorm.
 * User: Gergana
 * Date: 03-Mar-17
 * Time: 5:04 PM
 */ ?>
@extends('layouts.master')

@section('content')
<div class="col-md-12">
    @foreach($pets as $p)
    <div class="col-sm-4 col-lg-4 col-md-4">
        <div class="thumbnail" style="overflow: auto; min-height: 390px;">
            @if(Auth::check() && Auth::user()->isAdmin == 1)
            <form action="{{route('pets.delete',$p->id)}}" method="POST" style="display:inline-table;">
                <button class="btn btn-danger">X</button>
                {{csrf_field()}}
                <input type="hidden" value="DELETE" name="_method">
            </form>

                <a href="{{route('pets.edit',$p->id)}}" class="btn btn-info pull-right">Edit</a>
            @endif
            <form action="{{route('pets.buy',$p->id)}}" method="POST" style="display:inline-table;;margin-left: 185px">
                    <button class="btn btn-success text-center">Buy</button>
                    {{csrf_field()}}
                    <input type="hidden" value="POST" name="_method">
                </form>
            <img src="{{URL::asset($p->photo)}}" alt="" class="img-responsive" style="max-height: 250px">

            <div class="caption text-center">
                <h4><a href="{{route('pets.details',$p->id)}}">{{$p->name}}</a>
                </h4>

                <p>{{$p->type}}</p>
            </div>
        </div>

    </div>
    @endforeach
</div>

@endsection