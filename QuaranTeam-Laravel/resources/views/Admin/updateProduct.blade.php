@extends('layouts.admin')

@section('content')
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h2 class="display-4">HELLO,</h2>
      <p class="lead">Please update your product detail here.</p>
    </div>

  </header>

  <div class="py-5 bg-custom">

  <form class="form-group" action="{{ route('product.update', [$products->productId]) }}" method="POST" enctype="multipart/form-data">

    @csrf
    @method('PUT')

    <div class="container p-3 d-flex flex-row justify-content-center align-items-start">

      <!-- image content -->
        <div class="row">
          <div class="container p-3 justify-content-center">
            <img src="{{ asset('img/egg chair.jpg') }}" width="365px" height="" class="rounded float img-fluid shadow" alt="Responsive Image">
          </div>

          <!-- file button content -->
            <div class="container d-flex p-2 justify-content-center align-items-center">
              <div class="input-group-md">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" aria-describedby="inputGroupFileAddon01" name="photo_Path">
                  <label class="custom-file-label" for="inputGroupFile01">Choose Picture</label>
                </div>
              </div>
            </div>

        </div>

            <div class="container p-3">
              <div class="d-flex shadow p-3 bg-white rounded align-items-start">
                <div class="col col-md">

                    <!-- form content -->
                    <div class="form-group">
                      <label for="Name">Product Name</label>
                      <input type="name" class="form-control" name="product_Name" placeholder="Masukkan Nama Produk" value="{{ $products->product_Name }}">
                    </div>

                    <div class="form-group">
                      <label for="Name">Price</label>
                      <input type="price" class="form-control" name="product_Price" placeholder="IDR" value="{{ $products->product_Price }}">
                    </div>

                    <div class="form-group">
                      <label for="Name">Quantity</label>
                      <input type="number" class="form-control" name="product_Quantity" min="1" max="1000" value="{{ $products->product_Quantity }}">
                    </div>

                    <label for="category">Category</label>
                    <select class="form-control mb-3" name="categoryId">
                      @foreach( $category as $ct )
                      <option value="{{ $ct->categoryId }}">{{ $ct->category_Name }}</option>
                      @endforeach
                    </select>

                    <div class="form-group">
                      <label for="textarea">Add Description</label>
                      <textarea class="form-control" rows="3" name="product_Description" placeholder="Masukkan Deskripsi Produk Disini">{{ $products->product_Description }}</textarea>
                    </div>

                    <!-- button content -->
                    <div class="container d-flex flex-row justify-content-center">
                      <div class="mr-3">
                        <button class="btn btn-secondary btn-md-6" type="submit" value="submit">Submit</button>
                      </div>
                      <div class="ml-3">
                        <a href="{{ route('product.index') }}" class="btn btn-danger btn-md-6">Cancel</a>
                      </div>
                    </div>

                </div>
              </div>
            </div>
          </div>
        </form>
  </div>
  <script>
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
    </script>
@endsection
