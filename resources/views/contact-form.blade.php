@extends('layouts.master')
@section('content')
<form method="POST">
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" id="email" class="form-control" name="email" placeholder="enter email"
               required="required"/>
    </div>

    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" class="form-control" name="name" placeholder="enter name"
               required="required"/>
    </div>

    <div class="form-group">
        <label for="descr">Description:</label>
        <input type="text" id="descr" class="form-control" name="descr" placeholder="enter description"
               required="required"/>
    </div>

    <input type="hidden" value="PUT" name="_method"/>
    {{csrf_field()}}
    <button class="btn btn-success">Send</button>
</form>
@endsection