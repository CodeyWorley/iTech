@extends('layouts.app')

@section('title', 'Repairs')

@section('styles')
@endsection

@section('content')
    <section>

        <!-- Bread Crumbs -->
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active">Repairs</li>
        </ol>

        <!-- Menu -->
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="panel">
                        <div class="panel-body"><a href="/iphone-repair" title=""><img src="media/iphone-7.png" class="img-responsive" alt="iPhone"></a></div>
                        <div class="panel-footer text-center">iPhone</div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="panel">
                        <div class="panel-body"><a href="/samsung-repair" title=""><img src="media/samsung-s8.png" class="img-responsive" alt="Samsung"></a></div>
                        <div class="panel-footer text-center">Samsung</div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="panel">
                        <div class="panel-body"><a href="/ipad-repair" title=""><img src="media/ipad.png" class="img-responsive" alt="iPad"></a></div>
                        <div class="panel-footer text-center">iPad</div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="panel">
                        <div class="panel-body"><a href="/mac-repair" title=""><img src="media/macbook.png" class="img-responsive" alt="Mac"></a></div>
                        <div class="panel-footer text-center">Mac</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="panel">
                        <div class="panel-body"><a href="/pc-repair" title=""><img src="media/laptop.png" class="img-responsive" alt="PC"></a></div>
                        <div class="panel-footer text-center">PC</div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="panel">
                        <div class="panel-body"><a href="/smart-watch-repair" title=""><img src="media/apple-watch.png" class="img-responsive" alt="Smart Watch"></a></div>
                        <div class="panel-footer text-center">Smart Watch</div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="panel">
                        <div class="panel-body"><a href="/console-repair" title=""><img src="media/wii-u.png" class="img-responsive" alt="Console"></a></div>
                        <div class="panel-footer text-center">Console</div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="panel">
                        <div class="panel-body"><a href="/hand-held-repair" title=""><img src="media/3ds.png" class="img-responsive" alt="Hand Held"></a></div>
                        <div class="panel-footer text-center">Hand Held</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="panel">
                        <div class="panel-body"><a href="/ipod-repair" title=""><img src="media/ipod.png" class="img-responsive" alt="iPod"></a></div>
                        <div class="panel-footer text-center">iPod</div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="panel">
                        <div class="panel-body"><a href="/electronics-repair" title=""><img src="media/garage-opener.png" class="img-responsive" alt="Electronics"></a></div>
                        <div class="panel-footer text-center">Electronics</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
