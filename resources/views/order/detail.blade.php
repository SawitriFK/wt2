@extends('layout.app')

@section('tittle', 'Detail Order')

@section('breadcrumbs')
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Detail Order</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active"><i class="fa fa-dashboard"></i></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Name</label></div>
                    <div class="col-12 col-md-8">
                    <p class="form-control-static">{{ $order->name_order }}.</p>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Address</label></div>
                    <div class="col-12 col-md-8">
                    <p class="form-control-static">{{ $order->address_order }}</p>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Benchmark</label></div>
                    <div class="col-12 col-md-8">
                    <p class="form-control-static">{{ $order->mark_order }}</p>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Telephone</label></div>
                    <div class="col-12 col-md-8">
                    <p class="form-control-static">{{ $order->telp_order }}</p>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Email</label></div>
                    <div class="col-12 col-md-8">
                    <p class="form-control-static">{{ $order->email_order }}</p>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Pack</label></div>
                    <div class="col-12 col-md-8">
                    <p class="form-control-static">{{ $order->pack_order }}</p>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">ODP</label></div>
                    <div class="col-12 col-md-8">
                    <p class="form-control-static">{{ $order->odpzone_order }} - {{ $order->odp_order }} - {{ $order->odpnum_order }}</p>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Status</label></div>
                    <div class="col-12 col-md-8">
                    <p class="form-control-static">{{ $order->status_order }}</p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection