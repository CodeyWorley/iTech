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
        <title>iTech Servivces</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Exo" rel="stylesheet"

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
                    <li><a href="programming">Programming</a></li>
                    <li><a href="about">Company</a></li>
                    <li><a href="contact">Contact</a></li>
                  </ul>
                </div>
              </div>
            </nav>
        </section>
        <!-- Services -->
        <section>
            <div class="page-header text-center">
                <h1>We're Experts</h1>
                <h4>Need Help? Call us at 520.789.6296</h4>
            </div>
            <!-- Bread Crumbs -->
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Services</li>
            </ol>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="panel">
                            <div class="panel-body"><a href="/" title=""><img src="media/itserviceicon.png" class="img-responsive" alt="IT"></a></div>
                            <div class="panel-footer text-center">Home/Office IT</div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="panel">
                            <div class="panel-body"><a href="/" title=""><img src="media/mouse.png" class="img-responsive" alt="IT Packages"></a></div>
                            <div class="panel-footer text-center">IT Packages</div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="panel">
                            <div class="panel-body"><a href="/" title=""><img src="media/lock.png" class="img-responsive" alt="Security"></a></div>
                            <div class="panel-footer text-center">Security</div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="panel">
                            <div class="panel-body"><a href="/" title=""><img src="media/recycle.png" class="img-responsive" alt="Recycling"></a></div>
                            <div class="panel-footer text-center">Recycling</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </body>
</html>
