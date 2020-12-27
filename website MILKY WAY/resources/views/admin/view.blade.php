@extends('layout/main')

@section('container')

<!-- Container Start Here -->
<div class="container mt-5 mb-5">

    <a href="{{ route('milk.create') }}" class="btn btn-custom tombol mb-3">Add Product</a>

    <table class="table">
        <thead class="thead-light">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Image</th>
            <th scope="col">Title</th>
            <th scope="col">Price</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $milks as $milk )
                <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td class="text-center">
                    <img src="{{ url('storage/foto/'.$milk->gambar) }}" class="rounded" style="width: 150px"/>
                </td>
                <td>{{ $milk->judul }}</td>
                <td>{{ $milk->harga }}</td>
                <td>{{ $milk->description }}</td>
                <td>
                    <form action="{{ route('milk.destroy', $milk->id) }}" method="POST">
                        <a href="{{ route('milk.edit', $milk->id) }}" class="btn btn-info btn-sm">Edit</a>
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger btn-sm" type="submit" value="delete">Delete</button>
                    </form>
                </td>
                </tr>
                <tr>
            @endforeach
        </tbody>
    </table>
</div>
<!-- Container Ends -->

@endsection