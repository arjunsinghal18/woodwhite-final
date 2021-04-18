<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> -->
<style>
.row{
    display:flex;
}
</style>
<style>
                        tr.borderOK{
                            border-bottom: 2px solid black;
                            font-size:11px;
                            font-weight:800;
                        }
                    </style>
<center>
<h2 style="font-size:30px; font-weight:normal" >the WoodWhite</h2>
<hr>
</center>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <h4>BILLING ADDRESS</h4>
            <p class="address_line" style="margin-top:0px; margin-bottom:0px;">{{$address[0]->full_name}}</p>
            <p class="address_line" style="margin-top:0px; margin-bottom:0px;">{{$address[0]->addressline1.' '.$address[0]->addressline2}}</p>
            <p class="address_line" style="margin-top:0px; margin-bottom:0px;">{{$address[0]->city. '('.$address[0]->pincode.')'}}</p>
            <p class="address_line" style="margin-top:0px; margin-bottom:0px;">{{$address[0]->state.' India'}}</p>
            <p class="address_line" style="margin-top:0px; margin-bottom:0px;">{{'Contact Number : '.$address[0]->contact}}</p>
        </div>
        <div class="col-md-8" style="text-align:right;">
            <h3 style="font-weight:normal">TAX INVOICE</h3>
            <p>{{'Order No. : '.$order_det[0]->order_id}}</p>
            <p>Rest of the comapny details</p>
        </div>
    </div>
</div>

<table class="">
    <tr>
        <th style="border:1px solid black;">Order Id</th>
        <th>Product Name</th>
    </tr>
</table>