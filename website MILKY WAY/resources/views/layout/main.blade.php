<!doctype html>
<html lang="en">
   <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <script src="https://kit.fontawesome.com/d54aea4276.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    
    <!-- My Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Anton" rel="stylesheet">

    <title>Milky Way</title>
   </head>


   <body>
    
   <!-- navbar start here -->
   <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
         <a class="navbar-brand" href="home.php">M I L K Y way</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link" href="{{ url('home') }}">Home</a>
            <a class="nav-item nav-link" href="{{ url('home/product') }}">Product</a>
            <a class="nav-item nav-link" href="{{ url('home/profile') }}">About</a>
            <a class="nav-item btn btn-custom tombol" href="{{ url('home/contact') }}">Contact Us</a>
            </div>
         </div>
      </div>
   </nav>
   <!-- navbar end here -->
   

   <!-- picture start here -->
   <div class="picture">
      <div class="container">
         <h1 class="display-4">Fresh <span>MILK</span> <br> made with <span>LOVE</span><h1>
      </div>
   </div>
   <!-- picture ends here -->
   

   <!-- container start here -->
   @yield('container')

   <a class="btnup" href="#"><i class="fas fa-arrow-up"></i></a>
   
   
   <!-- sticky footer start -->
   <footer class="footer mt-auto py-3">
      <div class="container" align="center">
         <h4>Few words about M I L K Y way</h4>
         <p>We are passionate about providing the best milk delivery service and providing interesting information about our products.</p>
         <a href="https://www.facebook.com/nadya.zahra.3956"><i class="fab fa-facebook"></i></a>
         <a href="https://twitter.com/nadyaz12"><i class="fab fa-twitter"></i></a>
         <a href="https://www.instagram.com/nadyazahr/"><i class="fab fa-instagram"></i></a>
      </div>
   </footer>
   
   <!-- Copyright -->
   <div class="copyright">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <p class="p-small">Copyright © 2020 <a href="https://www.instagram.com/nadyazahr/">Nadya Zahra</a></p>
            </div> 
         </div> 
      </div> 
   </div> 

   <!-- sticky footer end -->


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script> -->

   </body>
</html>