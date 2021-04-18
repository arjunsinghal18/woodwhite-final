@extends('admin.layout')

@section('title','Product Add')

@section('content')
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

<div class="container">
<h2>Add New Product</h2>
<hr>
    @if (count($errors)>0)
      @foreach($errors->all() as $error)
        <p class="text-danger" >{{$error}}</p>
      @endforeach
    @endif
    <form action="{{url('admin/add_product')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control" name="product_name" placeholder="Product Name" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <p class="form-control" id="preview_para"  readonly>Preview Image</p>
                    <input type="file" class="form-control" id="preview_img" name="preview_image" placeholder="Product Name" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <p class="form-control" id="display_para"  readonly>Display Image</p>
                    <input type="file" class="form-control" id="display_img" name="display_image" placeholder="Product Name" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <select name="product_type" class="form-control">
                        <option value="">---Product Type---</option>
                        <option value="bedsheet">Bedsheet</option>
                        <option value="pillow">Pillow</option>
                        <option value="blanket">Blanket</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                <select name="product_category" class="form-control">
                        <option value="">---Product Category---</option>
                        <option value="moonshine">Moonshine</option>
                        <option value="floral">Floral</option>
                        <option value="Abstract">Abstract</option>
                        <option value="Kids">Kids</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control" name="product_price[]" placeholder="Price 1" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control" name="product_price[]" placeholder="Price 2" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control" name="product_size[]" placeholder="Product Size 1" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control" name="product_size[]" placeholder="Product Size 2" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control" name="compare_price[]" placeholder="Compare Price 1" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control" name="compare_price[]" placeholder="Compare Price 2" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control" name="product_background" placeholder="Background Color (HEXA)" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control" name="product_quote" placeholder="Product Quote" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control" name="product_quantity[]" placeholder="Product Quantity 1" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control" name="product_quantity[]" placeholder="Product Quantity 2" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control" name="product_sku[]" placeholder="Product SKU 1" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control" name="product_sku[]" placeholder="Product SKU 2" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control" name="available_quantity[]" placeholder="Available Quantity 1" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control" name="available_quantity[]" placeholder="Available Quantity 2" required>
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label>Description</label>
                    <input type="text" class="form-control" id="prodes" name="product_description" placeholder="descripstion" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input type="submit" value="submit" name="submit" class="btn btn-success">
                </div>
            </div>
        </div>
    </form>
</div>

<script>
 
    $(document).ready(function () {
 
        // extraPlugins needs to be set too.
        CKEDITOR.replace( 'product_description');
 
    });
</script>

@stop