@extends('layouts.admin')

@section('content')
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h2 class="display-4">WELCOME</h2>
  		<p class="lead">What do you want to <a class="btn btn-md btn-success" href="{{ route('product.create') }}">Add</a> today?</p>
    </div>


    <div class=" container px-5">
        <!-- Table Start Here -->
        <table class="table table table-striped table-bordered">
            <thead>
                <tr class="text-white" style="background-image: linear-gradient(to right, #00b8f0 , #009d56, #ffcc29);">
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Category</th>
                    <th scope="col">Description</th>
                    <th scope="col">Picture</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
              @foreach( $products as $pr )
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td> {{ $pr->product_Name }} </td>
                    <td> {{ $pr->product_Price }} </td>
                    <td> {{ $pr->product_Quantity }} </td>
                    <td> {{ isset($pr->category->category_Name) ? $pr->category->category_Name : 'NA' }} </td>
                    <td> {{ $pr->product_Description }} </td>
                    <td class="text-center">
                      <img src="{{ asset('img/'.$pr->photo_Path) }}" class="rounded" style="width: 100px; height: auto;"/>
                    </td>
                    <td>
                        <a href="{{ route('product.edit', $pr->productId) }}"><i class="fa fa-fw fa-edit"></i>Edit |</a>
                        <a href="/admin/deleteProduct/{{ $pr->productId }}" class="text-danger" type="submit" value="delete" onClick="return confirm('Are you sure to delete this user?');"><i class="fa fa-fw fa-trash"></i> Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
