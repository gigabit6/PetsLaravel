<?php
/**
 * Created by PhpStorm.
 * User: Gergana
 * Date: 03-Mar-17
 * Time: 8:25 PM
 */?>
@extends('layouts.master')

@section('content')
    <div class="col-md-12">
        @foreach($pets as $p)
            <div class="col-sm-4 col-lg-4 col-md-4">
                <div class="thumbnail" style="overflow: auto;">
                    @if(Auth::check() && Auth::user()->isAdmin == 0)
                        <form action="{{route('pets.delete',$p->id)}}" method="POST" style="display:inline-table;">
                            <button class="btn btn-danger">X</button>
                            {{csrf_field()}}
                            <input type="hidden" value="DELETE" name="_method">
                        </form>
                        <a href="{{route('pets.edit',$p->id)}}" class="btn btn-info pull-right">edit</a>
                    @endif
                    <img src="{{URL::asset($p->photo)}}" alt="" class="img-responsive" style="max-width: 100%;max-height: 100%">

                    <div class="caption">
                        <h4><a href="{{route('pets.details',$p->id)}}">{{$p->name}}</a>
                        </h4>

                        <p>{{$p->type}}</p>
                    </div>
                </div>

            </div>
        @endforeach
    </div>

@endsection