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
        <title>iPhone Repair | iTech</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Exo" rel="stylesheet">

        <!-- Styles -->
        <style>
            span {
                font-size: 20px;
            }
            button, input, optgroup, select, textarea {
                margin: 3px;
                margin-left: 25px;
                width: 210px;
            }
            .col-xs-2 {
                margin-right: 20px;
            }
            .col-xs-3 {
                margin-right: 20px;
            }
            .col-xs-5 {
                padding-left: 10px;
            }
            .col-md-4 {
                padding-left: 10px;
            }

            .form-control {
                width: 210px;
            }
            .btn-primary {
                margin-left: 14px;
            }
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
                <h1>iPhone Repair</h1>
                <h4>Need Help? Call us at 520.789.6296</h4>
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
              <li class="breadcrumb-item"><a href="/repairs">Repairs</a></li>
              <li class="breadcrumb-item active">iPhone</li>
            </ol>
        </section>

        <!-- iPhone Menu -->
        <section>
            <script>
                function changePhoneImage() {
                    var image = document.getElementById("modelSelect").value;
                    document.getElementById("phoneImage").innerHTML = image;

                    //iphone 7
                    if (image == '<img src="media/iphone-7.png" class="img-responsive" alt="iPhone Repair">'){
                        var repair = document.getElementById("repairSelect").value;
                        if (repair == 'lcd'){
                            document.getElementById("repairPrice").innerHTML = "$149";
                        }
                        if (repair == 'battery'){
                            document.getElementById("repairPrice").innerHTML = "$89";
                        }
                        if (repair == 'chargeport'){
                            document.getElementById("repairPrice").innerHTML = "$89";
                        }
                        if (repair == 'water'){
                            document.getElementById("repairPrice").innerHTML = "$69";
                        }
                        if (repair == 'misc'){
                            document.getElementById("repairPrice").innerHTML = "$89";
                        }
                    }
                    //iphone 7+
                    if (image == '<img src="media/iphone-7-plus.png" class="img-responsive" alt="iPhone Repair">'){
                        var repair = document.getElementById("repairSelect").value;
                        if (repair == 'lcd'){
                            document.getElementById("repairPrice").innerHTML = "$169";
                        }
                        if (repair == 'battery'){
                            document.getElementById("repairPrice").innerHTML = "$89";
                        }
                        if (repair == 'chargeport'){
                            document.getElementById("repairPrice").innerHTML = "$89";
                        }
                        if (repair == 'water'){
                            document.getElementById("repairPrice").innerHTML = "$69";
                        }
                        if (repair == 'misc'){
                            document.getElementById("repairPrice").innerHTML = "$89";
                        }
                    }
                    //iphone 6s
                    if (image == '<img src="media/iphone-6s.png" class="img-responsive" alt="iPhone Repair">'){
                        var repair = document.getElementById("repairSelect").value;
                        if (repair == 'lcd'){
                            document.getElementById("repairPrice").innerHTML = "$119";
                        }
                        if (repair == 'battery'){
                            document.getElementById("repairPrice").innerHTML = "$79";
                        }
                        if (repair == 'chargeport'){
                            document.getElementById("repairPrice").innerHTML = "$79";
                        }
                        if (repair == 'water'){
                            document.getElementById("repairPrice").innerHTML = "$69";
                        }
                        if (repair == 'misc'){
                            document.getElementById("repairPrice").innerHTML = "$79";
                        }
                    }
                    //iphone 6s+
                    if (image == '<img src="media/iphone-6s-plus.png" class="img-responsive" alt="iPhone Repair">'){
                        var repair = document.getElementById("repairSelect").value;
                        if (repair == 'lcd'){
                            document.getElementById("repairPrice").innerHTML = "$139";
                        }
                        if (repair == 'battery'){
                            document.getElementById("repairPrice").innerHTML = "$79";
                        }
                        if (repair == 'chargeport'){
                            document.getElementById("repairPrice").innerHTML = "$79";
                        }
                        if (repair == 'water'){
                            document.getElementById("repairPrice").innerHTML = "$69";
                        }
                        if (repair == 'misc'){
                            document.getElementById("repairPrice").innerHTML = "$79";
                        }
                    }
                    //iphone 6
                    if (image == '<img src="media/iphone-6.png" class="img-responsive" alt="iPhone Repair">'){
                        var repair = document.getElementById("repairSelect").value;
                        if (repair == 'lcd'){
                            document.getElementById("repairPrice").innerHTML = "$99";
                        }
                        if (repair == 'battery'){
                            document.getElementById("repairPrice").innerHTML = "$69";
                        }
                        if (repair == 'chargeport'){
                            document.getElementById("repairPrice").innerHTML = "$69";
                        }
                        if (repair == 'water'){
                            document.getElementById("repairPrice").innerHTML = "$69";
                        }
                        if (repair == 'misc'){
                            document.getElementById("repairPrice").innerHTML = "$69";
                        }
                    }
                    //iphone 6+
                    if (image == '<img src="media/iphone-6-plus.png" class="img-responsive" alt="iPhone Repair">'){
                        var repair = document.getElementById("repairSelect").value;
                        if (repair == 'lcd'){
                            document.getElementById("repairPrice").innerHTML = "$129";
                        }
                        if (repair == 'battery'){
                            document.getElementById("repairPrice").innerHTML = "$69";
                        }
                        if (repair == 'chargeport'){
                            document.getElementById("repairPrice").innerHTML = "$69";
                        }
                        if (repair == 'water'){
                            document.getElementById("repairPrice").innerHTML = "$69";
                        }
                        if (repair == 'misc'){
                            document.getElementById("repairPrice").innerHTML = "$69";
                        }
                    }
                    //iphone 5/5s/5c
                    if (image == '<img src="media/iphone-5.png" class="img-responsive" alt="iPhone Repair">'){
                        var repair = document.getElementById("repairSelect").value;
                        if (repair == 'lcd'){
                            document.getElementById("repairPrice").innerHTML = "$79";
                        }
                        if (repair == 'battery'){
                            document.getElementById("repairPrice").innerHTML = "$59";
                        }
                        if (repair == 'chargeport'){
                            document.getElementById("repairPrice").innerHTML = "$59";
                        }
                        if (repair == 'water'){
                            document.getElementById("repairPrice").innerHTML = "$69";
                        }
                        if (repair == 'misc'){
                            document.getElementById("repairPrice").innerHTML = "$59";
                        }
                    }
                }
            </script>

            <div class="container">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                        <div class="product-image">
                            <p id="phoneImage"><img src="media/iphone.png" class="img-responsive" alt="iPhone Repair"></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row" style="padding-top:20px">
                            <div class="col-xs-2">
                                <span>Model</span>
                            </div>
                            <div class="col-xs-2">
                                <select id="modelSelect" onchange="changePhoneImage()">
                                    <option value='<img src="media/iphone-7.png" class="img-responsive" alt="iPhone Repair">'>iPhone 7
                                    <option value='<img src="media/iphone-7-plus.png" class="img-responsive" alt="iPhone Repair">'>iPhone 7 Plus
                                    <option value='<img src="media/iphone-6s.png" class="img-responsive" alt="iPhone Repair">'>iPhone 6s
                                    <option value='<img src="media/iphone-6s-plus.png" class="img-responsive" alt="iPhone Repair">'>iPhone 6s Plus
                                    <option value='<img src="media/iphone-6.png" class="img-responsive" alt="iPhone Repair">'>iPhone 6
                                    <option value='<img src="media/iphone-6-plus.png" class="img-responsive" alt="iPhone Repair">'>iPhone 6 Plus
                                    <option value='<img src="media/iphone-5.png" class="img-responsive" alt="iPhone Repair">'>iPhone 5/5s/5c
                                </select>
                            </div>
                        </div>

                        <div class="row" style="padding-top:20px">
                            <div class="col-xs-2">
                                <span>Color</span>
                            </div>
                            <div class="col-xs-2">
                                <select id="colorSelect">
                                    <option>Black
                                    <option>White
                                </select>
                            </div>
                        </div>

                        <div class="row" style="padding-top:20px">
                            <div class="col-xs-2">
                                <span>Repair</span>
                            </div>
                            <div class="col-xs-2">
                                <select id="repairSelect" onchange="changePhoneImage()">
                                    <option value="lcd">Glass/LCD Screen
                                    <option value="battery">Battery
                                    <option value="chargeport">Chargeport
                                    <option value="water">Water Damage
                                    <option value="misc">Speakers/Buttons/Misc.
                                </select>
                            </div>
                        </div>

                        <div class="row" style="padding-top:20px">
                            <div class="col-xs-2">
                                <span>Area</span>
                            </div>
                            <div class="col-xs-2">
                                <select id="areaSelect" onchange="changePhoneImage()">
                                    <option value="inside">Gilbert
                                    <option value="inside">Mesa
                                    <option value="inside">Tempe
                                    <option value="inside">Scottsdale
                                    <option value="inside">Phoenix
                                    <option value="outside">Peoria
                                </select>
                            </div>
                        </div>

                        <div class="row" style="padding-top:20px">
                            <div class="col-xs-3">
                                <span style="color:#377def">Price:</span>
                            </div>
                            <div class="col-xs-5" style="margin-right:0px; padding-right:0px;">
                                <span id="repairPrice" style="color:#377def">$179</span>
                                <span style="color:#377def; font-size:12px;">+ tax</span>
                            </div>
                        </div>

                        <hr>

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
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </section>
    </body>
</html>
