@extends('layouts.app')


@section('contentheader_title', 'Orders')
@section('contentheader_page', 'Admin')
@section('contentheader_page_active', 'Orders')

@section('content')

<div class="col-md-3 col-sm-4">
                    <div class="box-header">
                        <i class="fa"></i>
                    </div>
                    <!-- compose message btn -->
                    <a   href="{{ route('admin.orders.create') }}" class="btn btn-block btn-primary" ><i class="fa fa-pencil"></i> Novo Cliente</a>
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
            <th>Data</th>
            <th>Itens</th>
            <th>Entregador</th>
            <th>Status</th>
            <th>Ação</th>
        </tr>
        </thead>

        <tbody>
        @foreach($orders as $order)
            <tr>
                <td>{{$order->id}}</t>
                <td>R$ {{$order->total}}</t>
                <td>{{$order->created_at}}</t>
                <td>
                    <ul>
                    @foreach($order->items as $item)
                    <li>{{$item->product->name}}</li>
                    @endforeach
                    </ul>
                    </t>
                <td>
                    @if ($order->deliveryman)
                        {{($order->deliveryman->name)}}
                    @else
                            --
                    @endif
                    </t>
                <td>{{$order->status}}</t>
                <td width = '130'>
                    <a href="{{ route('admin.orders.edit',['id'=>$order->id])}}"
                       class="btn-sm btn-info"><i class="fa fa-edit"></i></a>
                </td>
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


