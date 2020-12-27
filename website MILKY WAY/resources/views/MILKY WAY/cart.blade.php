@extends('layout/main')

@section('container')

<!-- Container Start Here -->
<div class="container cart">
    @if(empty($cart) || count($cart) == 0)
        <h1 class="display-4 text-center">Sorry, There is No Product(s).</h1> 
    @else
    <div class="product-title">
        <h2>Thank You For Believing In Our Product</h2>
        <p>Provide the best milk for all of us</p>
    </div>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Total</th>
                <th scope="col">Sub Total</th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
            <?php 
                $grandtotal = 0;
            ?>
            @foreach( $cart as $cr => $val )
            <?php
                $subtotal = $val["harga"] * $val["jumlah"];
            ?>
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $val["judul"] }}</td>
                    <td>{{ $val["harga"] }}</td>
                    <td>{{ $val["jumlah"] }} Bottle</td>
                    <td>{{ $subtotal }}</td>
                    <td>
                        <a href="{{ url('/home/cart/hapus/'.$cr) }}" class="btn btn-warning">Cancel</a>
                    </td>
                </tr>
            </tbody>
                <?php  
                    $grandtotal += $subtotal;
                ?>
            @endforeach
            <tr>
                <th colspan="4">Grand Total</th>
                <th>{{ $grandtotal }}</th>
            </tr>
        </table>
        <hr class="mb-3">

        <div class="form-payment">

            <p>Please fill in the following form to continue purchasing</p>

            <form action="{{ route('payment.submit') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="mb-3">
                    <label for="address">Fullname</label>
                    <input type="text" class="form-control" id="fullname" placeholder="Your name" name="fullname" required>
                </div>
                
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="you@example.com" name="email">
                </div>

                <div class="mb-3">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" placeholder="1234 Main St" name="address" required>
                </div>

                <div class="mb-3">
                    <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                    <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                </div>
                <hr class="mb-3">

                <h5 class="font-weight-bold">Payment</h5>

                <div class="row mb-4">
                    <div class="col">
                        <label for="country">Payment Method</label>
                        <input type="text" class="form-control" name="payment_method" placeholder="Credit/Debit/Paypal Card" required>
                    </div>
                    <div class="col">
                        <label for="country">Credit Card Number</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="col">
                        <label for="country">Name on Card</label>
                        <input type="text" class="form-control" required>
                    </div>
                </div>

                <div class="submit-button text-center mb-4">
                    <button class="btn btn-custom tombol" id="submit" type="submit">Pay Product</button>
                </div>
            </form>
        </div> <!-- End form-payment -->

    @endif
</div>
<!-- Container Ends Here -->

@endsection