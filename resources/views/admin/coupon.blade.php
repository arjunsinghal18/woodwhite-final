@extends('admin.layout')

@section('title','The Whitewood Admin')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="add_coupon">
            <p class="btn btn-success coupon_add_btn">Add Coupon</p>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row add_coupon_field">
        <div class="col-col-md-4 form-group" style="padding-right:7px;">
            <input type="text" name="" id="" class="form-control" placeholder="Name">
        </div>
        <div class="col-col-md-4 form-group" style="padding-right:7px;">
            <select class="form-control">
                <option value="">---Type----</option>
                <option value="fixed">Fixed</option>
                <option value="percent">Percent</option>
            </select>
        </div>
        <div class="col-col-md-4 form-group" style="padding-right:7px;">
            <input type="text" name="" id="" class="form-control" placeholder="Value">
        </div>
        <div class="col-col-md-4 form-group " style="padding-right:7px;">
            <input type="text" name="" id="" class="form-control" placeholder="Discount Upto">
        </div>
        <div class="col-col-md-4 form-group " style="padding-right:7px;">
            <input type="text" name="" id="" class="form-control" placeholder="Valid Till">
        </div>
        <div class="col-col-md-4 form-group " style="padding-right:7px;">
            <input type="submit" class="btn btn-success">
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <table class="table table-bordered" >
            <tr>
                <th>Id</th>
                <th>Valid Till</th>
                <th>Name</th>
                <th>Type</th>
                <th>Value</th>
                <th>Upto</th>
                <th>Action</th>
            </tr>

            @foreach($coupon as $coupons)
                <tr>
                    <td>{{$coupons->id}}</td>
                    <td>{{$coupons->valid_till}}</td>
                    <td>{{$coupons->name}}</td>
                    <td>{{$coupons->type}}</td>
                    <td>{{$coupons->value}}</td>
                    <td>{{$coupons->upto}}</td>
                    <td> <a href=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> </td>
                </tr>
            @endforeach

        </table>
    </div>
</div>
@stop