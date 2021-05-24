@extends('layout.app')

@section('tittle', 'Add Order')

@section('breadcrumbs')
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Add Order</h1>
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
    <div class="content mt-3">
    
        <div class="animated fadeIn">
                <div class="col-lg-12">
                    <div class="card">
   
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                      <div class="card-header">
                        <strong>Add</strong> Order
                      </div>
                      <form action="{{ route('orders.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                        @csrf
                      <div class="card-body card-block">
                        <!-- <div class="row form-group">
                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Myircode</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="myircode_order" name="myircode_order"  class="form-control"></div>
                          </div> -->
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="name_order" name="name_order" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Address</label></div>
                            <div class="col-12 col-md-9"><textarea name="address_order" id="address_order" rows="4" class="form-control"></textarea></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Benchmark</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="mark_order" name="mark_order" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Telephone</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="telp_order" name="telp_order" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Email</label></div>
                            <div class="col-12 col-md-9"><input type="email" id="email_order" name="email_order" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Pack</label></div>
                            <div class="col-12 col-md-9">
                              <select name="pack_order" id="pack_order" class="form-control">
                                <option value="">Please select</option>
                                <option value="1P">1P</option>
                                <option value="2P">2P</option>
                                <option value="3P">3P</option>
                              </select>
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">ODP</label></div>
                            <div class="col-12 col-md-9">
                                <div class="col-4 p-0">
                                    <select name="odpzone_order" id="odpzone_order" class="form-control">
                                        <option value="">Please select</option>
                                        <option value="STN">STN</option>
                                        <option value="KDT">KDT</option>
                                        <option value="LBD">LBD</option>
                                    </select>
                                </div>
                                <div class="col-1 p-0 text-center">-</div>
                                <div class="col-3 p-0"><input type="text" id="odp_order" name="odp_order" class="form-control"></div>
                                <div class="col-1 p-0 text-center">-</div>
                                <div class="col-3 p-0"><input type="text" id="odpnum_order" name="odpnum_order" class="form-control"></div>
                            </div>
                          </div>
      
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Status</label></div>
                            <div class="col-12 col-md-9">
                              <select name="status_order" id="status_order" class="form-control">
                                <option value="">Please select</option>
                                <option value="Not Yet Taken">Not Yet Taken</option>
                                <option value="Constraints">Constraints</option>
                                <option value="Success">Success</option>
                              </select>
                            </div>
                          </div>

                        
                      </div>
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <!-- <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button> -->
                      </div>
                      </form>
                    </div>
                </div>
        </div>

    </div>
@endsection