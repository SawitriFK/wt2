@extends('layout.app')

@section('tittle', 'Dashboard')

@section('breadcrumbs')
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>ViewOrder</h1>
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
        <div class="row">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

<div class="col-md-12">
    <div class="card">
        <!-- <div class="card-header">
            <strong class="card-title">Data Table</strong>
        </div> -->
        <div class="card-body">
  <table id="bootstrap-data-table" class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>Name</th>
        <th>ODP</th>
        <th>Status</th>
        <th></th>
      </tr>
    </thead>
    @foreach ($orders as $order)
    <tbody>
      <tr>
        <td>{{ $order->name_order }}</td>
        <td>{{ $order->odpzone_order }} - {{ $order->odp_order }} - {{ $order->odpnum_order }}</td>
        <td>{{ $order->status_order }}</td>
        <td>
        <form action="{{ route('orders.destroy',$order->id) }}" method="POST">
        <a href="{{ route('orders.edit',$order->id) }}"><i class="fa fa-edit fa-hover pr-3"></i></a></div>
        <a href="{{ route('orders.show',$order->id) }}"><i class="fa fa-eye fa-hover pr-3"></i></a></div>
        <button type="submit" class="fa fa-trash-o fa-hover" style="box-shadow: none!important; outline: none!important;"></button>
        @csrf
        @method('DELETE')
        </form>
        </td>
      </tr>
      
      
      
    @endforeach
    </tbody>
  </table>
        </div>
    </div>
</div>


</div>

        </div>

    </div>
@endsection