@extends('layout/main')

@section('container')

<!-- Container Start Here -->
<div class="container admin-create">

    <h3>Update Product</h3>
    <p>Update your product here</p>

    <form method="POST" action="{{ route('milk.update', [$milks->id]) }}" enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="product_name">Product Name</label>
            <input type="text" class="form-control" name="judul" placeholder="Product Name" value="{{ $milks->judul }}">
        </div>

        <label for="price">Price</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">IDR</span>
            </div>
            <input type="text" class="form-control" aria-label="price" aria-describedby="basic-addon1" name="harga" placeholder="Product Price" value="{{ $milks->harga }}">
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea class="form-control" rows="4" name="description" placeholder="Product Description" data-error="Insert product description" required>{{ $milks->description }}</textarea>
        </div>

        <div class="form-group mt-3">
            <label for="exampleFormControlFile1">Image file input</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="gambar">
        </div>

        <div class="submit-button text-center">
            <button class="btn btn-custom tombol" type="submit" value="submit">Submit Update</button>
        </div>

    </form>
</div>
<!-- Container Ends -->

@endsection