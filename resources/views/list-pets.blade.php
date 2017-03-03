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
    @foreach($products as $p)
    <div class="col-sm-4 col-lg-4 col-md-4">
        <div class="thumbnail">
            @if(Auth::check() && Auth::user()->isAdmin == 1)
            <form action="{{route('pet.delete',$p->id)}}" method="POST" style="display:inline-table;">
                <button class="btn btn-danger">X</button>
                {{csrf_field()}}
                <input type="hidden" value="DELETE" name="_method">
            </form>
            <a href="{{route('admin-products.edit',$p->id)}}" class="btn btn-info">edit</a>
            @endif
            <img src="{{URL::asset($p->imagePath)}}" alt="" class="img-responsive">

            <div class="caption">
                <h4 class="pull-right">${{$p->price}}</h4>
                <h4><a href="{{route('preview',$p->id)}}">{{$p->title}}</a>
                </h4>

                <p>{{$p->short_description}}</p>
            </div>
        </div>

    </div>
    @endforeach
</div>

<div class="col-md-12">
    ff
</div>
@endsection