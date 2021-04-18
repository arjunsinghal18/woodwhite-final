@extends('includes.layout')

@section('title','The Whitewoods')

@section('content')

<div class="main_div" style="">
<div class="breadcrump">
        <!-- <i><span class="ba"><hr id="hr"></span><span class="ba"><hr id="hr"></span><span class="ba"><hr id="hr"></span></i> -->
       <!-- <i class="fa fb"> <span class="ba"><hr id="hr"></span><span class="ba"><hr id="hr"></span><span class="ba"><hr id="hr"></span> </i> -->
       <!-- &nbsp;  -->
        </div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 user_account_sidebar">
            @include('includes.user_sidebar')
        </div>
        <div class="col-md-9">
            <div class="row user_details">
                <div class="col-md-4 user_account_div">
                    <label for="" class="user_label">Full Name</label>
                    <input type="text" value="{{$user[0]->name}}" id="user_name" class="form-control user_account_input">
                </div>
                <div class="col-md-4 user_account_div">
                    <label for="" class="user_label">Username</label>
                    <input type="text" value="{{$user[0]->username}}" id="user_username" class="form-control user_account_input">
                </div>
                <div class="col-md-4 user_account_div">
                    <label for="" class="user_label">Email</label>
                    <input type="text" value="{{$user[0]->email}}" id="user_email" class="form-control user_account_input">
                </div>
                <div class="col-md-4 ">
                    <label for="" class="user_label">Contact</label>
                    <input type="text" value="{{$user[0]->contact}}" id="user_contact" class="form-control user_account_input">
                </div>
            </div>
            <div class="row user_update">
                <div class="col-md-4">
                    <!-- <p class="user_update_btn" onclick="userupdate()">Update</p> -->
                </div>
            </div>
            
        </div>
    </div>
</div>

<div class="ads">
@foreach($user as $us)

<!-- <div class="container acc_det">
    <div class="row">
        <div class="col-md-4">
            <label for="" class="user_label">Full Name</label>
            <input type="text" value="{{$us->name}}" class="form-control">
        </div>
        <div class="col-md-4">
            <label for="" class="user_label">Username</label>
            <input type="text" value="{{$us->username}}" class="form-control">
        </div>
        <div class="col-md-4">
            <label for="" class="user_label">Email</label>
            <input type="text" value="{{$us->email}}" class="form-control">
        </div>
        <div class="col-md-4">
            <label for="" class="user_label">Contact</label>
            <input type="text" value="{{$us->contact}}" class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <input type="submit" value="Submit" class="btn">
        </div>
    </div>
</div> -->

@endforeach
@include('includes.footer')
</div>
</div>
@stop