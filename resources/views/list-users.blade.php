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
        @if(count($users) > 0)
        <table class="table table-stripped">
            <tr>
                <th>
                    Name
                </th>
                <th>
                    E-mail
                </th>
                <th>
                    IsAdmin
                </th>
                <th>
                    Actions
                </th>
            </tr>
            @foreach($users as $u)
                <tr>
                    <td>
                        {{$u->name}}
                    </td>
                    <td>
                        {{$u->email}}
                    </td>
                    <td>
                        {{$u->isAdmin ? 'Yes':"No"}}
                    </td>
                    <td>
                        <form action="{{route('users.delete',$u->id)}}" method="POST" style="display:inline-table;">
                            <button class="btn btn-danger">X</button>
                            {{csrf_field()}}
                            <input type="hidden" value="DELETE" name="_method">
                        </form>
                        <a href="{{route('users.edit',$u->id)}}" class="btn btn-info">Edit</a>
                        <a href="{{route('user.details',$u->id)}}" class="btn btn-info">Details</a>
                    </td>

                </tr>
            @endforeach
        </table>
        @else
            <div>No users available</div>
        @endif
    </div>

@endsection