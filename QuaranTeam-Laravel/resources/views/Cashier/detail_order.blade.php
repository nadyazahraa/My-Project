<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Icon CSS -->
    <script src="https://kit.fontawesome.com/d54aea4276.js" crossorigin="anonymous"></script>
    <!-- style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    <title>DETAIL ORDER</title>
  </head>
  <body>

    <!-- Start Main Top -->
    <div class="main-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col mt-3">
                  <a href="/cashier/order"><img src="https://i.ibb.co/TvzPvsx/logo-ag.png" alt="logo-ag" border="0" width="210px"></a>
                </div>

                <div class="col-3 my-3">
                  <div class="detail-top">
                    <ul class="list-inline">
                      <li class="list-inline-item"><p>Tanggal</p><span>12/19/2020</span></li>
                      <li class="list-inline-item"><p>No. Order</p><span>123456</span></li>
                    </ul>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Top -->

    <div class="container-fluid">

      <!-- Total Start -->
      <div class="row">
        <div class="col-md-4">
          <div class="form-group mt-3">
            <label class="input-group-uang"><i class="fas fa-plus-circle"></i> Jumlah Uang</label>
            <input type="text" class="form-control">
            <small class="form-text text-muted text-right">Masukkan jumlah uang disini</small>
          </div>
        </div>

        <div class="col ml-5 mt-2 total">
          <p>Total</p>
          <span>Rp. 112,500</span>
        </div>
      </div>
      <!-- Total End -->


      <!-- Table Start -->
        <table class="table table-bordered mt-3">
          <thead class="table-active">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Kode Item</th>
              <th scope="col">Nama Item</th>
              <th scope="col">Qty</th>
              <th scope="col">Harga</th>
              <th scope="col">Diskon</th>
              <th scope="col">Subtotal</th>
            </tr>
          </thead>
          <tbody>
            @php
    				$i = 0
    				@endphp

            <tr>
              <th scope="row">1</th>
              <td>0123</td>
              <td>Lampu Gantung</td>
              <td>1</td>
              <td>IDR 50,000</td>
              <td>5 %</td>
              <td>IDR 47,500</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>0456</td>
              <td>Kabel HDMI</td>
              <td>1</td>
              <td>IDR 10,000</td>
              <td>0 %</td>
              <td>IDR 10,000</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>0789</td>
              <td>Penyiram Tanaman</td>
              <td>2</td>
              <td>IDR 20,000</td>
              <td>0 %</td>
              <td>IDR 40,000</td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>0234</td>
              <td>Sekop</td>
              <td>1</td>
              <td>IDR 15,000</td>
              <td>0 %</td>
              <td>IDR 15,000</td>
            </tr>
          </tbody>
          <tfoot class="table-active">
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
            </tr>
          </tfoot>
        </table>
      <!-- Table End -->

      <div class="container">
        <button type="button" class="btn btn-danger btn-lg btn-block">Bayar</button>
      </div>

    </div>

    <!-- footer start -->
    <footer class="page-footer font-small blue">

      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="#"> AG.com</a>
      </div>
      <!-- Copyright -->

    </footer>
    <!-- footer ends -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>
