@extends('layouts.customer')

@section('content')

<form action="" method="POST">
    <div class="d-flex w-100 " style="height:20%">
        <div class="col-md-12 py-5"><img class="py-3 " style="width: 300px;" src="image/logo.JPG" alt="Logo"></div>
    </div>
    <div class="d-flex w-100">
        <div class="col-md-9 layer_1">
            <div class="form-inline p-5 justify-content-center"><input class="form-control mr-sm-2 " type="text"
                    placeholder="Search" style="border-radius: 10px;width: 80%; height: 70px"></div>
            @foreach ($categories as $category)
            <div class="section-divider">
                <h2>{{$category->categoryName}}</h2>
            </div>
            <div class="container d-flex justify-content-around text-center md-12 py-5">
                @foreach ($products as $product)
                <div class="card col-md-3 p-0">
                    <button class="btn btn-white col-md-12">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->productName }}</h5>
                            <img class="py-3 img-fluid" src="image/{{ $product->photoPath }}" alt="Ambitions">
                            <p class="card-text">IDR {{ $product->price }}</p>
                        </div>
                    </button>
                </div>
                @endforeach

            </div>
            @endforeach

        </div>

        <!-- Cart -->
        <div class="col-md-3 orderLayer">
            <div style="position: absolute;left: 10px; top: -100px;">
                <img class=" img-fluid" src="image/discount.jpg" alt="Ambitions">
            </div>
            <main>

                <div class="title text-center ">
                    <h2 class="p-5">MY ORDER</h2>

                </div>
                <div class="section-divider2"></div>
                <div class="row">
                    <div class="col-md-7">
                        <img class="p-3 img-fluid" src="image/BG Nexus Brushed Steel Screwless Double Socket FBS22G.jpg"
                            alt="Ambitions">
                        <div class="mb-4 mt-2 d-flex justify-content-between">
                            <button class="btn button2" style="font-size: 20px; width: 90%" type="button"
                                value="-">-</button>
                            <button class="btn button1 ml-4" style="font-size: 20px; width: 90%" type="button"
                                value="+">+</button>
                        </div>
                    </div>
                    <div class="col-md-5 bottomright">SWITCH LAMP<br><span style="text-decoration: line-through;">IDR
                            50.000</span> IDR 25.000 </div>
                </div>
                <div class="section-divider2"></div>
                <div class="row">
                    <div class="col-md-7">
                        <img class="p-3 img-fluid" src="image/Elephant Watering Can.jpg" alt="Ambitions">
                        <div class="mb-4 mt-2 d-flex justify-content-between">
                            <button class="btn button2" style="font-size: 20px; width: 90%" type="button"
                                value="-">-</button>
                            <button class="btn button1 ml-4" style="font-size: 20px; width: 90%" type="button"
                                value="+">+</button>
                        </div>
                    </div>
                    <div class="col-md-5 bottomright">WATERING CAN <br>IDR 55.000 </div>
                </div>
                <div class="section-divider2"></div>
                <div class="row">
                    <div class="col-md-7">
                        <img class="p-3 img-fluid" src="image/Capture b.JPG" alt="Ambitions">
                        <div class="mb-4 mt-2 d-flex justify-content-between">
                            <button class="btn button2" style="font-size: 20px; width: 90%" type="button"
                                value="-">-</button>
                            <button class="btn button1 ml-4" style="font-size: 20px; width: 90%" type="button"
                                value="+">+</button>
                        </div>
                    </div>
                    <div class="col-md-5 bottomright">BEDLAMP <br>IDR 129.000 </div>
                </div>
                <div class="section-divider2"></div>
                <div class="row">
                    <div class="col-md-7">
                        <img class="p-3 img-fluid" src="image/Capture e.JPG " alt="Ambitions">
                        <div class="mb-4 mt-2 d-flex justify-content-between">
                            <button class="btn button2" style="font-size: 20px; width: 90%" type="button"
                                value="-">-</button>
                            <button class="btn button1 ml-4" style="font-size: 20px; width: 90%" type="button"
                                value="+">+</button>
                        </div>
                    </div>
                    <div class="col-md-5 bottomright">BLENDER <br><span style="text-decoration: line-through;">IDR
                            300.000</span> IDR 225.000</div>
                </div>
                <div class="section-divider2"></div>
                <div class="row">
                    <div class="col-md-7">
                        <img class="p-3 img-fluid" src="image/How to Take Apart a Lightbulb _ eHow_com.jpg"
                            alt="Ambitions">
                        <div class="mb-4 mt-2 d-flex justify-content-between">
                            <button class="btn button2" style="font-size: 20px; width: 90%" type="button"
                                value="-">-</button>
                            <button class="btn button1 ml-4" style="font-size: 20px; width: 90%" type="button"
                                value="+">+</button>
                        </div>
                    </div>
                    <div class="col-md-5 bottomright">BULB <br>IDR 70.000 </div>
                </div>
            </main>
            <div class=" footer p-5 ">
                <div class="section-divider2"></div>
                <div class="d-flex justify-content-between">
                    <p>Total (5)</p>
                    <p style="font-weight: 600;">IDR 491.100</p>
                </div><button class="btn w-100 button1 my-3 p-4" style="font-weight: 900; font-size: 250%;"
                    type="submit" name="pay">PAY</button><button class="btn w-100 button2 text-white" type="reset"
                    value="reset">CANCEL</button>
            </div>
        </div>
    </div>
</form>


@endsection
