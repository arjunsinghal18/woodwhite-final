@extends('admin.layout')

@section('title','Product Add')

@section('content')

<div class="container">
    <form action="{{url('admin/user_register')}}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Admin Name">
                </div>
                <div class="form-group">
                    <input type="text" name="username" class="form-control" placeholder="Username">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="text" name="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                    <input type="submit" value="Submit" name="submit" class="btn btn-success">
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </form>
</div>

@stop