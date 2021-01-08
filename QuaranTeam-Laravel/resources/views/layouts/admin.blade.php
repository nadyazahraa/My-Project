
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styleAdmin.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Admin</title>
</head>
<body>
    <!-- Navbar -->
  	<nav class="navbar navbar-expand-lg navbar-light text-dark justify-content-between ">
  		<a href="/index"><img src="https://i.ibb.co/TvzPvsx/logo-ag.png" alt="logo-ag" border="0" width="130px"></a>
    		<div class="collapse navbar-collapse" id="navbarSupportedContent">
    			<ul class="navbar-nav ml-auto">
    				<li class="nav-item active">
    					<a class="nav-link text-dark" href="/index">Home</a>
    				</li>
    				<li class="nav-item active">
    					<a class="nav-link text-dark" href="/product">Products</a>
    				</li>
    				<li class="nav-item active">
    					<a class="nav-link text-dark" href="/admin">Users</a>
    				</li>
    			</ul>
    		</div>

    		<ul class="navbar-nav ml-auto">
    			<li class="nav-item ml-2 active dropdown">
    				<a class="dropdown-toggle btn btn-outline-warning" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> {{ Auth::user()->name }}</a>
    				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
    					<a class="dropdown-item" href="#">Profile</a>
    					<div class="dropdown-divider"></div>
    					<a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
    				</div>
    			</li>
    		</ul>
  	</nav>
    <div style="height:10px; background-image: linear-gradient(to right, #00b8f0 , #009d56, #ffcc29);"></div>

    @yield('content')

  <!-- Javascript -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>
