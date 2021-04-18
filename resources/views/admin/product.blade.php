@extends('admin.layout')

@section('title','Product')

@section('content')

<div class="container-fluid">
                    <h3 class="text-dark mb-4">Products</h3>
                    @if(session('error'))
                        <span style='color:red;' class='pull-right'>{{flasherror()}}</span>
                    @elseif(session('success'))
                        <span style='color:green;' class='pull-right'>{{flashsuccess()}}</span>
                    @endif
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 font-weight-bold">Show Info <a class="pull-right btn btn-success" href="{{url('admin/addproduct')}}" >Add Product</a> </p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3 text-nowrap">
                                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label>Show&nbsp;<select class="form-control form-control-sm custom-select custom-select-sm">
                                                <option value="10" selected="">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select></label></div>
                                </div>
                                <div class="col-md-3 text-nowrap">
                                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label>Product&nbsp;<select class="form-control form-control-sm custom-select custom-select-sm">
                                                <option selected="">---select---</option>
                                                <option value="25">Bedsheet</option>
                                                <option value="50">Pillow</option>
                                                <option value="100">Blanket</option>
                                            </select></label></div>
                                </div>
                                <div class="col-md-3 text-nowrap">
                                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label>Category&nbsp;<select class="form-control form-control-sm custom-select custom-select-sm">
                                                <option value="" selected="">---select---</option>
                                                <option value="25">Kids</option>
                                                <option value="50">Double</option>
                                                <option value="100">Adult</option>
                                            </select></label></div>
                                </div>
                                <div class="col-md-3 text-nowrap">
                                    <div id="dataTable_length" class="dataTables_length form-group" aria-controls="dataTable"><label> 
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    <input type="submit" value="submit" class="btn btn-success">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="text-md-right dataTables_filter" id="dataTable_filter"><label><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
                                </div>
                            </div>
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Product type</th>
                                            <th>Product Category</th>
                                            <th>Available Quantity</th>
                                            <th>Price</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($product as $pro)
                                        <tr>
                                            <td><img src="{{url('images').'/'.$pro->preview_image}}" height="50" width="50" class="img-thumnail" />{{$pro->product_name}}</td>
                                            <td>{{$pro->product_type}}</td>
                                            <td>{{$pro->product_category}}</td>
                                            <td style="@php echo (($pro->available_quantity < $pro->alert_at)?'color:red':'') @endphp" >{{$pro->available_quantity}}</td>
                                            <td>{{$pro->product_price}}</td>
                                            <td><a href="{{url('admin/productedit?id=').$pro->id}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>&nbsp;&nbsp; <a href="{{url('admin/productdel?id=').$pro->id}}"><i class="fa fa-trash-o" aria-hidden="true"></i></a> </td>
                                        </tr>
                                        @endforeach
                                        <tr>
                                            <td><img class="rounded-circle mr-2" width="30" height="30" src="{{url('admin_img/avatars/avatar1.jpeg')}}">Airi Satou</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>33</td>
                                            <td>2008/11/28</td>
                                            <td>$162,700</td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle mr-2" width="30" height="30" src="{{url('admin_img/avatars/avatar1.jpeg')}}">Airi Satou</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>33</td>
                                            <td>2008/11/28</td>
                                            <td>$162,700</td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle mr-2" width="30" height="30" src="{{url('admin_img/avatars/avatar1.jpeg')}}">Airi Satou</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>33</td>
                                            <td>2008/11/28</td>
                                            <td>$162,700</td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle mr-2" width="30" height="30" src="{{url('admin_img/avatars/avatar1.jpeg')}}">Airi Satou</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>33</td>
                                            <td>2008/11/28</td>
                                            <td>$162,700</td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle mr-2" width="30" height="30" src="{{url('admin_img/avatars/avatar1.jpeg')}}">Airi Satou</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>33</td>
                                            <td>2008/11/28</td>
                                            <td>$162,700</td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle mr-2" width="30" height="30" src="{{url('admin_img/avatars/avatar1.jpeg')}}">Airi Satou</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>33</td>
                                            <td>2008/11/28</td>
                                            <td>$162,700</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td><strong>Name</strong></td>
                                            <td><strong>Position</strong></td>
                                            <td><strong>Office</strong></td>
                                            <td><strong>Age</strong></td>
                                            <td><strong>Start date</strong></td>
                                            <td><strong>Salary</strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-6 align-self-center">
                                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
                                </div>
                                <div class="col-md-6">
                                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                        <ul class="pagination">
                                            <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@stop