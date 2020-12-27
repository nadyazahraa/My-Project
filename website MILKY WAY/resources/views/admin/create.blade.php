@extends('layout/main')

@section('container')

<!-- Container Start Here -->
<div class="container admin-create">

    <h3>Input Product</h3>
    <p>Insert your product here</p>

    <form method="POST" action="{{ route('milk.store') }}" enctype="multipart/form-data">

        @csrf

        <div class="form-group">
            <label for="product_name">Product Name</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="judul" placeholder="Product Name" required data-error="Please enter product name">
        </div>

        <label for="price">Price</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">IDR</span>
            </div>
            <input type="text" class="form-control" aria-label="price" aria-describedby="basic-addon1" name="harga" placeholder="Product Price" required data-error="Please enter the price">
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="description" placeholder="Product Description" data-error="Insert product description" required></textarea>
        </div>

        <div class="form-group mt-3">
            <label for="exampleFormControlFile1">Image file input</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="gambar">
        </div>

        <div class="submit-button text-center">
            <button class="btn btn-custom tombol" type="submit" value="submit">Submit Product</button>
        </div>

    </form>
</div>
<!-- Container Ends -->

@endsection