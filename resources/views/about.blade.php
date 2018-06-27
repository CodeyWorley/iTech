@extends('layouts.app')

@section('title', 'About')

@section('styles')

h2 {
    margin-top: 100px;
    margin-bottom: 50px;
    margin-left: 20px;
    margin-right: 20px;
}

h3 {
    margin-bottom: 20px;
    margin-top: 50px;
    color: #377def;
}

footer {
    margin-top: 200px;
}

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
              <li class="breadcrumb-item active">About</li>
            </ol>
        </section>

        <div class="container text-center">
            <h2>Just some tech savy guys helping the world in a positive and unique way.</h2>
            <div class="row">
                <div class="col-sm-4">
                    <h3>Knowlege</h3>
                    <p>tech is advancing at an exponential rate. We pride ourselves on our ability to keep up-to-date with the latest and greatest solutions!</p>
                </div>
                <div class="col-sm-4">
                    <h3>Convenience</h3>
                    <p>You have a busy life. We understand this and do our best to make appointments as quick and easy as possible.</p>
                </div>
                <div class="col-sm-4">
                    <h3>Focus</h3>
                    <p>Yes we are here to fix and troubleshoot your tech. But above all we are here to help people. We arent satisfied until you are satisfied!</p>
                </div>
                <div id="spacer"></div>
            </dive>
        </div>
@endsection
