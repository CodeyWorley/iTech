@extends('layouts.app')

<!-- PHP variables -->
<?php
    $name = "Hard Drive Clone";
    $type = "Service";
    $crumb = "Services";
    $crumbLink = "/services";
    $imageMain = '<img src="media/ssd.png"; class="img-responsive" alt="Hard Drive Clone">';
    $priceMain = "$99";
    $descMain = "Does it feel like your computer has become slower over the years? Usually a quick clearing of adware, bloatware, and spyware as well as a disk cleanup can do wonders for your computers speed and longevity. Let the experts at iTech get your computer back into great condition!";
    $taxMain = "+ tax"; // leave blank if no tax

 ?>

@section('title', 'Hard Drive Clone') <!-- Remember to change this -->

<!-- End veriables -->

@section('styles')
@endsection

@section('content')

    <!-- Alerts -->
    @if (Session::has('message'))
       <div class="alert alert-info text-center">{{ Session::get('message') }}</div>
    @endif

    <!-- Bread Crumbs -->
    <section>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item"><a href=<?php echo $crumbLink; ?>><?php echo $crumb; ?></a></li>
          <li class="breadcrumb-item active"><?php echo $name; ?></li>
        </ol>
    </section>

    <!-- Selection Menu -->
    <section>
        <script>
            function changeImage() {
                var image = document.getElementById("typeSelect").value;
                document.getElementById("itemImage").innerHTML = image;

                //variables
                var lcd = "Does your device have a cracked screen, is there something wrong with the picture quality, or is it not responsive to touch? We can fix that in under 30 minutes with our glass/LCD repair!";
                var battery = "Is your device's battery not lasting as long as it used to? All rechargeable batteries can only be cycled so many times before their capacity and runtime start to deplete. We can bring your device back up to it's full run time potential.";
                var chargeport = "Having a hard time charging your device? All charge ports will eventually get too worn out to function perfectly. We can have your device charging like it used to in no time!";
                var water = "Is your device acting strangely after exposure to liquid? If so, our water damage repair diagnostic is what you need!";
                var misc = "Having an issue with your device's speaker, camera, microphone, or buttons? Most minor issues like these can be fixed in under 30 minutes with a part swap!";
                var glass = "Does your device have a cracked screen and/or not responsive to touch? We can fix that in an hour with our glass repair service! This repair does not include the lcd. Feel free to ask for more details."
                var diskDrive = "Does your device have trouble reading discs? Over time the mechanical parts and even the optical sensor can go bad in any console. Let the experts at iTech get your device back to its full potential!";
                var hardDrive = "Having trouble saving data to your hard drive? Most of the time a swap to a larger drive can do wonders for your device. ";
                var ports = "Sometimes the ports on your console can get damaged. Let the experts at iTech handle this difficult repair for you!";

                var parts = "$79";
                var waterPrice = "$49";
                var batteryPrice = "$30";

                var contact = "Please call/text/email";
                var tax = "+ tax";
                var noTax = "";

                // Edit for each below

                //electronic
                if (image == '<?php echo $imageMain; ?>') {
                    var fix = document.getElementById("fixSelect").value;
                    if (fix == 'electronic'){
                        document.getElementById("price").innerHTML = contact;
                        document.getElementById("details").innerHTML = electronic;
                        document.getElementById("tax").innerHTML = tax;
                    }
                }
            }
        </script>

        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <div class="product-image">
                        <p id="itemImage"><?php echo $imageMain; ?></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row" style="padding-top:20px">
                        <div class="col-xs-2">
                            <span>Type</span>
                        </div>
                        <div class="col-xs-2">
                            <div style="margin-left:23px; font-size:32px;">
                                Home/Office
                            </div>
                        </div>
                    </div>

                    <div class="row" style="padding-top:20px;">
                        <div class="col-xs-2">
                            <span>Service</span>
                        </div>
                        <div class="col-xs-4">
                            <div style="margin-left:23px; width:100%; font-size:32px;">
                                Data transfer
                            </div>
                        </div>
                    </div>

                    <div class="row" style="padding-top:20px">
                        <div class="col-xs-3">
                            <span>Details</span>
                        </div>
                        <div class="col-xs-5">
                            <p style="word-wrap:break-word; width:225px;" id="details"><?php echo $descMain; ?></p>
                        </div>
                    </div>

                    <div class="row" style="padding-top:20px">
                        <div class="col-xs-3">
                            <span style="color:#377def">Price</span>
                        </div>
                        <div class="col-xs-5" style="margin-right:0px; padding-right:0px;">
                            <span id="price" style="color:#377def"><?php echo $priceMain; ?></span>
                            <span id="tax" style="color:#377def; font-size:22px;"><?php echo $taxMain; ?></span> <!-- need to fix font-size -->
                        </div>
                    </div>

                    <div class="row" style="padding-top:20px; padding-left:20px; color:#377def;">
                    	We price match all local competitors!
                    </div>

                    <hr>

                    <!-- Form -->
                    {!! Form::open(array('route' => 'contact_store', 'class' => 'form')) !!}
                    <div class="row" style="padding-top:20px">
                        <div class="col-xs-2">
                            <span>Name</span>
                        </div>
                        <div class="col-xs-2">
                            <input id="form_name" type="text" name="name" class="form-control" placeholder="Name" required="required" data-error="Name is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="row" style="padding-top:20px">
                        <div class="col-xs-2">
                            <span>Email</span>
                        </div>
                        <div class="col-xs-2">
                            <input id="form_name" type="text" name="email" class="form-control" placeholder="Email" required="required" data-error="Email is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="row" style="padding-top:20px">
                        <div class="col-xs-2">
                            <span>Phone</span>
                        </div>
                        <div class="col-xs-2">
                            <input id="form_name" type="text" name="phone" class="form-control" placeholder="Phone">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="row" style="padding-top:20px">
                        <div class="col-xs-2">
                            <span>Area</span>
                        </div>
                        <div class="col-xs-2">
                            <input id="form_area" type="text" name="area" class="form-control" placeholder="Zip">
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
@endsection
