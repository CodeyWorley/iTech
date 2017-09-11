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
        <title>Contact | iTech</title>

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
                    <li><a href="programming">Programming</a></li>
                    <li><a href="about">Company</a></li>
                    <li><a href="contact">Contact</a></li>
                  </ul>
                </div>
              </div>
            </nav>
        </section>

        <!-- Page Head -->
        <section>
            <div class="page-header text-center">
                <h1>Contact Us</h1>
                <h4>We are here to help!</h4>
            </div>
        </section>

        <!-- Alerts -->
        @if (Session::has('message'))
           <div class="alert alert-info text-center">{{ Session::get('message') }}</div>
        @endif

        <!-- Bread Crumbs -->
        <section>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Contact</li>
            </ol>
        </section>

        <!-- Contact -->
        {!! Form::open(array('route' => 'contact_store', 'class' => 'form')) !!}
        <div class="row" style="padding-top:20px">
            <div class="col-xs-2">
                <span>Name</span>
            </div>
            <div class="col-xs-2">
                <input id="form_name" type="text" name="name" class="form-control" placeholder="Name" required="required" data-error="First name is required.">
                <div class="help-block with-errors"></div>
            </div>
        </div>

        <div class="row" style="padding-top:20px">
            <div class="col-xs-2">
                <span>Email</span>
            </div>
            <div class="col-xs-2">
                <input id="form_name" type="text" name="email" class="form-control" placeholder="Email" required="required" data-error="First name is required.">
                <div class="help-block with-errors"></div>
            </div>
        </div>

        <div class="row" style="padding-top:20px">
            <div class="col-xs-2">
                <span>Phone</span>
            </div>
            <div class="col-xs-2">
                <input id="form_name" type="text" name="phone" class="form-control" placeholder="Phone" required="required" data-error="First name is required.">
                <div class="help-block with-errors"></div>
            </div>
        </div>

        <div class="row" style="padding-top:20px">
            <div class="form-group">
                {!! Form::submit('Lets Fix It!',
                  array('class'=>'btn btn-primary')) !!}
            </div>
        </div>
        {!! Form::close() !!}

    </body>
</html>
