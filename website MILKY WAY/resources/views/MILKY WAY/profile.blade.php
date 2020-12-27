@extends('layout/main')

@section('container')

<!-- container start here -->
<div class="container about">
    <div class="row">
        <div class="col">
            <h2><span>MILKY</span>way</h2>
            <p>"Milky Way is committed to providing you with only the best quality dairy products and the highest standards of service. 
            It is high quality natural fresh milk with all the goodness of all the nutrients in it, from protein, carbohydrates, vitamins, and various minerals such as calcium, magnesium, phosphorus. 
            Turning all Milky Way products into balanced nutritious milk that is good for the whole family to drink every day. Apart from that, it also contains good nutrition to support the growth of both children and adults.</p>
            <p>Our products are made with milk produced from Milky Way Farms only. Being able to produce our own milk means that we do not have to buy milk from other farms. This allows us to not only produce the highest quality raw milk but also guarantee that no additives, hormones, or antibiotics are added. </p>
            <a class="btn btn-custom tombol" href="{{ url('home/read_more') }}">Read More</a>
        </div>
    </div>

    <!-- carousel for picture -->
    <div id="carouselExampleControls" class="carousel slide mt-5" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="{{ asset('/gambar/cooww.jpg') }}" class="d-block w-100" alt="Milky Way Assets">
            </div>
            <div class="carousel-item">
            <img src="{{ asset('/gambar/cowsignal.jpg') }}" class="d-block w-100" alt="Milky Way Assets">
            </div>
            <div class="carousel-item">
            <img src="{{ asset('/gambar/sapi.jpg') }}" class="d-block w-100" alt="Milky Way Assets">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- end of carousel -->

    <div class="row my-5">
        <div class="col-sm-6 col-lg-4">
            <div class="service-block-inner">
                <h3>Always <span>Fresh</span></h3>
                <p>Always provide the latest products that are freshly processed</p>
            </div>
        </div>
        <div class="col-sm-6 col-lg-4">
            <div class="service-block-inner">
                <h3>Best <span>Quality</span></h3>
                <p>Always guarantee product quality with practical and hygienic packaging</p>
            </div>
        </div>
        <div class="col-sm-6 col-lg-4">
            <div class="service-block-inner">
                <h3>Fast <span>Response</span></h3>
                <p>Customer service is always available for every customer story about our products</p>
            </div>
        </div>
    </div>
</div>
<!-- container ends here -->

@endsection