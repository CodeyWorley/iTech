<!doctype html>
<!-- Stored in resources/views/layouts/app.blade.php -->

<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Title -->
        <title>@yield('title') | iTech</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=refrigerator" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Share+Tech" rel="stylesheet">

        <!-- Styles -->
        <style> @yield('styles') </style>
    </head>

    <body>
      <!-- Navbar -->
      <section>
          <nav class="navbar navbar-default">
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><span style="color:#377def; font-size:38px;">i</span>Tech</a>
              </div>
              <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="/repairs">Repairs</a></li>
                  <li><a href="/services">Services</a></li>
                  <li><a href="/developement">Developement</a></li>
                  <li><a href="/about">About</a></li>
                  <li><a href="/contact">Contact</a></li>
                </ul>
              </div>
            </div>
          </nav>
      </section>


        <!-- Page Head -->
        <section>
          <div class="page-header text-center">
              <h1>@yield('title')</h1>
              <h4>Need Help? Call us at <a href="tel:520-789-6296">520.789.6296</a></h4>
          </div>
        </section>


      @yield('content')

      <footer>
            <div class="row" style="text-align:center;">
                <a href="https://www.facebook.com/itechadvanced"><i class="fa fa-facebook"></i></a>
                <a href="https://www.amazon.com/localservices/ya/sellerprofile/ref=vas_home_spp_A3MONRKQGZRSOT?sellerID=A3MONRKQGZRSOT"><i class="fa fa-amazon"></i></a>
                <a href="https://goo.gl/maps/rC2vk3teY622"><i class="fa fa-google"></i></a>
                <a href="yelp.com"><i class="fa fa-yelp"></i></a>
            </div>

          <div class="row">
              <div class="col-sm-1"></div>
              <div class="col-sm-2">
                  <p>© 2017 iTech</p>
              </div>
              <div class="col-sm-9">
                  <p>iPhone, iPod, iPad and Mac are registered trademarks of Apple, Inc. iTech is an independent service company and is in no way affiliated with Apple Inc.</p>
              </div>
          </div>
      </footer>

    </body>
</html>
