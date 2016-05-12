@extends('layouts.app')


@section('contentheader_title', 'Clientes')
@section('contentheader_page', 'Admin')
@section('contentheader_page_active', 'Clientes')

@section('content')

<div class="col-md-3 col-sm-4">
                    <div class="box-header">
                        <i class="fa"></i>
                    </div>
                    <!-- compose message btn -->
                    <a   href="{{ route('admin.clients.create') }}" class="btn btn-block btn-primary" ><i class="fa fa-pencil"></i> Novo Cliente</a>
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
            <th>Nome</th>
            <th>Ação</th>
        </tr>
        </thead>

        <tbody>
        @foreach($clients as $client)
            <tr>
                <td>{{$client->id}}</td>
                <td>{{$client->user->name}}</td>
                <td width = '130'>
                    <a href="{{ route('admin.clients.edit',['id'=>$client->id])}}"
                       class="btn-sm btn-info"><i class="fa fa-edit"></i></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $clients->render() }}
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>

@endsection


