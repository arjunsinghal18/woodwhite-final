@extends('includes.layout')

@section('title','The Whitewoods')

@section('content')

<div  class="main_div">
<div class="breadcrump">
        <!-- <i><span class="ba"><hr id="hr"></span><span class="ba"><hr id="hr"></span><span class="ba"><hr id="hr"></span></i> -->
       <!-- <i class="fa fb"> <span class="ba"><hr id="hr"></span><span class="ba"><hr id="hr"></span><span class="ba"><hr id="hr"></span> </i> -->
       <!-- &nbsp; <i class="fa fa-shopping-cart" aria-hidden="true"> <span id="cart_count" >{{ Cart::count() }}</span></i> -->
        </div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 user_account_sidebar">
            @include('includes.user_sidebar')
        </div>
        <div class="col-md-9">
            <div class="row user_details">
                <table class="table-bordered table order_detail">
                    <tr>
                        <th>Date</th>
                        <th>Order Id</th>
                        <th>Product Name</th>
                        <th>Amount</th>
                        <th>Action</th>
                    </tr>
                    
                    @foreach($order as $orders)
                        @php
                        $order_det = json_decode($orders->order_details,true);
                        @endphp
                        <tr>
                            <td>{{pretty_date($orders->created_at)}}</td>
                            <td>{{$orders->order_id}}</td>
                            @foreach($order_det as $det)
                                <td>{{$det['name']}}</td>        
                                <td>{{$det['tax'] + $det['subtotal']}}</td>
                                @php
                                break;
                                @endphp
                            @endforeach
                            
                            <td><a href="{{url('getorderpdf?order_id='.$orders->order_id.'&address_id='.$orders->address_id)}}" class="order_view" ><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                        </tr>
                            
                    @endforeach
                </table>
            </div>
            <div class="row user_update">
                <div class="col-md-4">
                    <!-- <p class="user_update_btn" onclick="userupdate()">Update</p> -->
                </div>
            </div>
            
        </div>
    </div>
</div>
@include('includes.footer')
</div>
@stop