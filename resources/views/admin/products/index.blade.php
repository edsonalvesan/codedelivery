@extends('layouts.app')

@section('contentheader_title', 'Produtos')
@section('contentheader_page', 'Admin')
@section('contentheader_page_active', 'Produtos')

@section('content')





<div class="col-md-3 col-sm-4">
                    <div class="box-header">
                        <i class="fa"></i>
                    </div>
                    <!-- compose message btn -->
                    <a   href="{{ route('admin.products.create') }}" class="btn btn-block btn-primary" ><i class="fa fa-pencil"></i> Novo Produto</a>
                    <!-- Navigation - folders-->
                    <div style="margin-top: 15px;">
                    </div>
                </div>



                <!-- Main content -->
        
                    <div class="row">
                        
                        <div class="col-xs-12">
                            <div class="text-center">

                            <div class="box">
                                <div class="box-body table-responsive">


                 
<table class="table table-bordered table-striped bootstrap-datatable datatable">

        <thead>
        <tr>
            <th>ID</th>
            <th>Produto</th>
            <th>Categoria</th>
            <th>Preço</th>
            <th>Ação</th>
        </tr>
        </thead>

        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->category->name}}</td>
                <td>{{$product->price}}</td>
                <td width = '130'>
                    <a href="{{ route('admin.products.edit',['id'=>$product->id])}}"
                       class="btn-sm btn-info"><i class="fa fa-edit"></i></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $products->render() }}
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>

         


@endsection


