@extends('layouts.cashier')

@section('content')

    <!-- content start -->
    <div class="container-fluid">

      <h5 class="my-4">Daftar Order Product</h5>

      <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead class="kepala">
            <tr>
                <th class="judul">No</th>
                <th class="judul">Nomor Order</th>
                <th class="judul">Status Order</th>
                <th class="judul">Total Pembayaran</th>
                <th class="judul">Tanggal</th>
                <th class="judul">Action</th>
            </tr>
        </thead>
        <tbody>
            @php
    				$i = 0
    				@endphp
            @foreach($orders as $order)
            <tr>
                <th scope="row">{{ ++$i}}</th>
                <td>{{ $order->orderId }}</td>
                <td><a href="#" class="badge bg-warning">{{ $order->status }}</a></td>
                <td>{{ $order->total }}</td>
                <td>{{ $order->update_at }}</td>
                <td><a href="/cashier/detailOrder"><i class="fas fa-info-circle fa-md"></i>Detail</a></td>
            </tr>
            @endforeach
            <!--Example-->
            <tr>
                <th scope="row">1</th>
                <td>123456</td>
                <td><a href="#" class="badge bg-warning">Pending</a></td>
                <td>Rp. #</td>
                <td>12-Des-2020</td>
                <td><a href="/cashier/detailOrder"><i class="fas fa-info-circle fa-md"></i>Detail</a></td>
            </tr>

            <tr>
                <th scope="row">2</th>
                <td>123456</td>
                <td><a href="#" class="badge bg-warning">Pending</a></td>
                <td>Rp. #</td>
                <td>12-Des-2020</td>
                <td><a href="/cashier/detailOrder"><i class="fas fa-info-circle fa-md"></i>Detail</a></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>456789</td>
                <td><a href="#" class="badge bg-success">Paid</a></td>
                <td>Rp. #</td>
                <td>12-Des-2020</td>
                <td><a href="/cashier/detailOrder"><i class="fas fa-info-circle fa-md"></i>Detail</a></td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>123456</td>
                <td><a href="#" class="badge bg-warning">Pending</a></td>
                <td>Rp. #</td>
                <td>12-Des-2020</td>
                <td><a href="/cashier/detailOrder"><i class="fas fa-info-circle fa-md"></i>Detail</a></td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td>456789</td>
                <td><a href="#" class="badge bg-success">Paid</a></td>
                <td>Rp. #</td>
                <td>12-Des-2020</td>
                <td><a href="/cashier/detailOrder"><i class="fas fa-info-circle fa-md"></i> Detail</a></td>
            </tr>
        </tbody>
        <tfoot class="kepala">
            <tr>
                <th class="judul">No</th>
                <th class="judul">Nomor Order</th>
                <th class="judul">Status Order</th>
                <th class="judul">Total Pembayaran</th>
                <th class="judul">Tanggal</th>
                <th class="judul">Action</th>
            </tr>
        </tfoot>
    </table>

    </div>
    <!-- content ends -->

    <script>
    $(document).ready(function() {
    $('#example').DataTable();
    } );
    </script>
@endsection
