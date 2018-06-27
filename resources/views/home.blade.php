@extends('layouts.app')

@section('title', 'Phone Repair And IT Service')

@section('styles')
p {
    margin-left: 20px;
    margin-right: 20px;
}
h2 {
    color: #377def;
}
.carousel-inner>.item>a>img, .carousel-inner>.item>img, .img-responsive, .thumbnail a>img, .thumbnail>img {
    display: unset;
}
footer {
    margin-top:0px;
}
@endsection

@section('content')

<!-- Alerts -->
@if (Session::has('message'))
   <div class="alert alert-info text-center">{{ Session::get('message') }}</div>
@endif
        <!-- Carousel -->
        <section>
            <div class="container" style="text-align: center; vertical-align: middle;">
                <img class="img-responsive" src="media/ad-location.png" alt="Any Location, Any Time" style="margin-right:0px;">
                <img class="img-responsive" src="media/ad-price.png" alt="Price Match Guarantee">
                <img class="img-responsive" src="media/ad-warranty.png" alt="30 Day Warranty">
            </div>
        </section>

        <!-- How it works -->
        <section>
            <div class="container text-center" style="background-color: #f2f2f2; padding-top:50px; padding-bottom:50px;">
                <h2 >How it Works</h2>
                <div style="color:black;">
                    <p>Call,text, or email to setup an appointment with your desired location and time.</p>
                    <p>A professional itechnician will give you a heads up before heading to the appointment location.</p>
                    <p>Your repair or service will be carefully handled until you are 100% satisfied.</p>
                    <p>(Optional) Brag about us on your favorite social media!</p>
                </div>
            </div>
        </section>

        <!-- links -->
        <section>

        </section>
@endsection
