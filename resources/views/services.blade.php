@extends('layouts.app')

@section('title', 'Services')

@section('styles')
@endsection

@section('content')
    <section>

        <!-- Bread Crumbs -->
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active">Services</li>
        </ol>

        <!-- Menu -->
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="panel">
                        <div class="panel-body"><a href="/it-services" title=""><img src="media/monitor.png" class="img-responsive" alt="IT"></a></div>
                        <div class="panel-footer text-center">IT</div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="panel">
                        <div class="panel-body"><a href="/hard-drive-clone" title=""><img src="media/ssd.png" class="img-responsive" alt="Hard Drive Clone"></a></div>
                        <div class="panel-footer text-center">Hard Drive Clone</div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="panel">
                        <div class="panel-body"><a href="/computer-clean-up" title=""><img src="media/laptop.png" class="img-responsive" alt="Computer Clean Up"></a></div>
                        <div class="panel-footer text-center">Computer Clean Up</div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="panel">
                        <div class="panel-body"><a href="/network-services" title=""><img src="media/router.png" class="img-responsive" alt="Network"></a></div>
                        <div class="panel-footer text-center">Network</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="panel">
                        <div class="panel-body"><a href="/printer-services" title=""><img src="media/printer.png" class="img-responsive" alt="Printer"></a></div>
                        <div class="panel-footer text-center">Printer</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
