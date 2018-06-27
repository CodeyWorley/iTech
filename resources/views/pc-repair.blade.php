@extends('layouts.app')

<!-- PHP variables -->
<?php
    $name = "PC";
    $type = "Repair";
    $crumb = "Repairs";
    $crumbLink = "/repairs";
    $imageMain = '<img src="media/laptop.png"; class="img-responsive" alt="PC Repair">';
    $priceMain = "Please call/text/email";
    $descMain = "Does your device have a cracked screen, is there something wrong with the picture quality, or is it not responsive to touch? We can fix that in under 30 minutes with our glass/LCD repair!";
    $taxMain = ""; // leave blank if no tax

    $imageTwo = '<img src="media/monitor.png"; class="img-responsive" alt="PC Repair">';
 ?>

@section('title', 'PC Repair') <!-- Remember to change this -->

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
                var computerlcd = "LCDs can regularly incur damage, such as cracks, dead pixels or other distortions. If your device is in need of a screen repair, we can have it looking like new in under an hour!";


                var parts = "$79";
                var waterPrice = "$49";
                var batteryPrice = "$30";

                var contact = "Please call/text/email";
                var tax = "+ tax";
                var noTax = "";

                // Edit for each below

                //laptop
                if (image == '<?php echo $imageMain; ?>') {
                    var fix = document.getElementById("fixSelect").value;
                    if (fix == 'lcd'){
                        document.getElementById("price").innerHTML = contact;
                        document.getElementById("details").innerHTML = computerlcd;
                        document.getElementById("tax").innerHTML = noTax;
                    }
                    if (fix == 'battery'){
                        document.getElementById("price").innerHTML = contact;
                        document.getElementById("details").innerHTML = battery;
                        document.getElementById("tax").innerHTML = noTax;
                    }
                    if (fix == 'drive'){
                        document.getElementById("price").innerHTML = contact;
                        document.getElementById("details").innerHTML = hardDrive;
                        document.getElementById("tax").innerHTML = noTax;
                    }
                    if (fix == 'os'){
                        document.getElementById("price").innerHTML = "$99";
                        document.getElementById("details").innerHTML = "Time for some spring cleaning? With an OS restore you can completely wipe your computer to it's brand new state! This repair is best used to get rid of mass clutter or nasty virus's and malware. Ask about our new Hard Drive Cloning if you want to keep all your files with the restore.";
                        document.getElementById("tax").innerHTML = tax;
                    }
                    if (fix == 'virus'){
                        document.getElementById("price").innerHTML = "$99";
                        document.getElementById("details").innerHTML = "Is your PC plagued by frequent crashes, freezing, performance issues, or other strange error messages? If so, your device could be infected with a virus or spyware. These can wreak havoc on your computer, so if you suspect your PC has become infected, try our PC Virus/Spyware Removal Service. We will remove all traces of the virus or spyware from your PC, ensuring your computer functions like normal again.";
                        document.getElementById("tax").innerHTML = tax;
                    }
                    if (fix == 'memory'){
                        document.getElementById("price").innerHTML = contact;
                        document.getElementById("details").innerHTML = "Does your PC take too long to boot? Or maybe it starts slowing down as you open more applications and files. It might be time to have your memory (RAM) upgraded or replaced.";
                        document.getElementById("tax").innerHTML = noTax;
                    }
                    if (fix == 'water'){
                        document.getElementById("price").innerHTML = "$99";
                        document.getElementById("details").innerHTML = water;
                        document.getElementById("tax").innerHTML = tax;
                    }
                }
                //desktop
                if (image == '<?php echo $imageTwo; ?>') {
                    var fix = document.getElementById("fixSelect").value;
                    if (fix == 'lcd'){
                        document.getElementById("price").innerHTML = contact;
                        document.getElementById("details").innerHTML = computerlcd;
                        document.getElementById("tax").innerHTML = noTax;
                    }
                    if (fix == 'battery'){
                        document.getElementById("price").innerHTML = contact;
                        document.getElementById("details").innerHTML = battery;
                        document.getElementById("tax").innerHTML = noTax;
                    }
                    if (fix == 'drive'){
                        document.getElementById("price").innerHTML = contact;
                        document.getElementById("details").innerHTML = hardDrive;
                        document.getElementById("tax").innerHTML = noTax;
                    }
                    if (fix == 'os'){
                        document.getElementById("price").innerHTML = "$99";
                        document.getElementById("details").innerHTML = "Time for some spring cleaning? With an OS restore you can completely wipe your computer to it's brand new state! This repair is best used to get rid of mass clutter or nasty virus's and malware. Ask about our new Hard Drive Cloning if you want to keep all your files with the restore.";
                        document.getElementById("tax").innerHTML = tax;
                    }
                    if (fix == 'virus'){
                        document.getElementById("price").innerHTML = "$99";
                        document.getElementById("details").innerHTML = "Is your PC plagued by frequent crashes, freezing, performance issues, or other strange error messages? If so, your device could be infected with a virus or spyware. These can wreak havoc on your computer, so if you suspect your PC has become infected, try our PC Virus/Spyware Removal Service. We will remove all traces of the virus or spyware from your PC, ensuring your computer functions like normal again.";
                        document.getElementById("tax").innerHTML = tax;
                    }
                    if (fix == 'memory'){
                        document.getElementById("price").innerHTML = contact;
                        document.getElementById("details").innerHTML = "Does your PC take too long to boot? Or maybe it starts slowing down as you open more applications and files. It might be time to have your memory (RAM) upgraded or replaced.";
                        document.getElementById("tax").innerHTML = noTax;
                    }
                    if (fix == 'water'){
                        document.getElementById("price").innerHTML = "$99";
                        document.getElementById("details").innerHTML = water;
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
                            <select id="typeSelect" class="form-control" onchange="changeImage()"> <!-- Edit for each -->
                            <option value='<?php echo $imageMain; ?>'>Laptop
                            <option value='<?php echo $imageTwo; ?>'>Desktop
                            </select>
                        </div>
                    </div>

                    <div class="row" style="padding-top:20px">
                        <div class="col-xs-2">
                            <span>Repair</span>
                        </div>
                        <div class="col-xs-2">
                            <select id="fixSelect" class="form-control" onchange="changeImage()"> <!-- Edit for each -->
                            <option value="lcd">Glass/LCD Screen
                            <option value="battery">Battery
                            <option value="drive">Hard Drive
                            <option value="os">OS Restore
                            <option value="virus">Virus/Spyware
                            <option value="memory">Memory Upgrade
                            <option value="water">Water Damage
                            </select>
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
                        Price may vary by version of device.
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
