@extends('layout/main')

@section('container')

<!-- Container Starts Here -->

<div class="product-title">
  <h2>These Are Some of Our Best Products</h2>
  <p>Grab it fast before it runs out</p>
</div>

<div class="product">
  <div class="small-container">
    <div class="row">
      @foreach ( $milks as $milk )
        <div class="col-3">
          <img src="{{ url('/foto/'.$milk->gambar) }}" alt="Milky Way Products" class="rounded">
          <p>{{ $milk->judul }}</p>
          <p class="desc">{{ $milk->description }}</p>
          <span>IDR {{ $milk->harga }}/bottle</span>
          <a class="btn btn-custom tombol" href="{{ url('home/cart/'.$milk->id) }}">Buy</a>
        </div>
      @endforeach
    </div>
  </div>
</div>

<!-- Container Ends Here -->

@endsection