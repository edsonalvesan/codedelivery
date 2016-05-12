@extends('layouts.app')


@section('contentheader_title', 'Pedidos')
@section('contentheader_page', 'Clientes')
@section('contentheader_page_active', 'Pedidos')

@section('content')

<div class="col-md-3 col-sm-4">
                    <div class="box-header">
                        <i class="fa"></i>
                    </div>
                    <!-- compose message btn -->
                    <a   href="{{ route('customer.order.create') }}" class="btn btn-block btn-primary" ><i class="fa fa-pencil"></i> Novo Pedido</a>
                    <!-- Navigation - folders-->
                    <div style="margin-top: 15px;">
                    </div>
                </div>




                    <div class="row">
                        
                        <div class="col-xs-12">
                            <div class="text-center">

                            <div class="box">
                                <div class="box-body table-responsive">


                 
<table class="table table-bordered table-striped bootstrap-datatable datatable">

        <thead>
        <tr>
            <th>ID</th>
            <th>Total</th>
            <th>Status</th>
        </tr>
        </thead>

        <tbody>
        @foreach($orders as $order)
            <tr>
                <td>{{$order->id}}</td>
                <td>{{$order->total}}</td>
                <td>{{$order->status}}</td>

            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $orders->render() }}
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>

@endsection


