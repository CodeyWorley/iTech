<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

        <!-- Title -->
        <title>iTech Home</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
        </style>
    </head>
    <body>

        <!-- Navbar -->
        <section>
            <nav class="navbar navbar-default" role="navigation">
              <div class="container">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand-centered">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <div class="navbar-brand navbar-brand-centered">
                      <h2 class="logo"><a href="/"><span style="color:#377def;">i</span>Tech</a></h2>
                  </div>
                </div>
                <div class="collapse navbar-collapse" id="navbar-brand-centered">
                  <ul class="nav navbar-nav">
                    <li><a href="/repairs">Repairs</a></li>
                    <li><a href="/services">Services</a></li>
                    <li><a href="/products">Products</a></li>
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="/programming">Programming</a></li>
                    <li><a href="/company">Company</a></li>
                    <li><a href="/contact">Contact</a></li>
                  </ul>
                </div>
              </div>
            </nav>
        </section>

        <!-- Carousel -->
        <section>
            <div id="carousel-container" class="container">
                <div id="carousel" class="carousel slide" data-ride="carousel" data-interval="4000">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel" data-slide-to="1"></li>
                        <li data-target="#carousel" data-slide-to="2"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="media/repairs.png" style="max-height: 650px">
                            <div class="carousel-caption">
                                <div class="allign-center">
                                    <div class="pitch-text">
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="media/products.png" style="max-height: 650px">
                            <div class="carousel-caption">
                                <div class="allign-center">
                                    <div class="pitch-text">
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="media/itservice.png" style="max-height: 650px">
                            <div class="carousel-caption">
                                <div class="allign-center">
                                    <div class="pitch-text">
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
                            <span class=""></span>
                        </a>
                        <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
                            <span class=""></span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- links -->
        <section>
            <h1 style="background-color: black;">new</h2>
        </section>




    </body>
</html>
