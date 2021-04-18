@extends('includes.layout')

@section('title','The Whitewoods')

@section('content')

<div class="main_div">
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
            <p class="btn query_btn new_query_btn">Have Queries</p>
                <div class="new_query">
                    <form action="{{url('addquery')}}" method="post">
                        @csrf
                        <textarea name="message" id="" cols="30" rows="10" placeholder="Enter your Message Here" class="form-control query_area"></textarea>
                        <input type="submit" value="Submit" class="btn query_btn">
                    </form>
                </div>
                <br>
                <table class="table-bordered table order_detail">
                    <tr>
                        <th>Query No.</th>
                        <th>Message</th>
                        <th>Action taken</th>
                        <!-- <th>Action</th> -->
                    </tr>
                    
                    @foreach($queries as $query)
                        <tr>
                            <td>{{$query->query_no}}</td>
                            <td>{{$query->message}}</td>
                            <td>{{ $query->action != '' ? 'Replied Via Mail' : 'Pending' }}</td>
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