@extends('layouts.app')

@section('title', 'Developement')

@section('styles')
.row {
    margin-right: 50px;
}
h3 {
    color: #377def;
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
              <li class="breadcrumb-item active">Developement</li>
            </ol>
        </section>

        <div class="container">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-3">
                    <!-- Contact -->
                    {!! Form::open(array('route' => 'contact_store', 'class' => 'form')) !!}
                    <div class="container fluid">
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
                                <span>Message</span>
                            </div>
                            <div class="col-xs-2">
                                <textarea id="form_name" type="textarea" rows="5" name="request" class="form-control" placeholder="Message" required="required" data-error="Message is required."></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="row" style="padding-top:20px">
                            <div class="form-group">
                                {!! Form::submit('Send Message!',
                                  array('class'=>'btn btn-primary')) !!}
                            </div>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-3">
                    <h3>Website Developement</h3>
                    <p>Give your brand/product the online pressence it deserves! With our unique dev style we can craft a site to fit any budget. We also offer consulting and developement on existing sites!</p>

                    <h3>Store Building & SEO</h3>
                    <p>Move your store to the internet and increase customer base exponentially! </p>

                    <h3>Custom Programming</h3>
                    <p>Have a project that needs a user interface or some automaton? We have a multitude of custom projects under our belt and love a good challenge!</p>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
@endsection
