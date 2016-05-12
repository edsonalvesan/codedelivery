@extends('layouts.app')

@section('content')

<div class="row">
                        <!-- left column -->
                        <div class="col-xs-12">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title"></h3>
                                </div><!-- /.box-header -->

                                <h2>Pedido {{$order->id}} - R$ {{$order->total}}</h2>
                                <h3>Cliente: {{$order->client->user->name}}</h3>
                                <h4>Data: {{$order->created_at}}</h4>

                                <p>
                                    <b>Entregar em:</b> <br>
                                        {{$order->client->adress}} - {{$order->client->city}} - {{$order->client->state}}
                                </p>

    {!! Form::model($order,['route'=>['admin.orders.update',$order->id]]) !!}


<div class="form-group col-sm-12">
    {!!Form::label('status','Status')!!}
    <div class="input-group col-sm-12">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        {!!Form::select('status', $list_status, null,['class'=>'form-control','placeholder'=>'','id'=>'nome'])!!}
    </div>
</div>

  <div class="form-group col-sm-12">
      {!!Form::label('entregador','Entregador')!!}
      <div class="input-group col-sm-12">
          <span class="input-group-addon"><i class="fa fa-user"></i></span>
          {!!Form::select('user_deliveryman_id', $deliveryman, null,['class'=>'form-control','placeholder'=>'','id'=>'nome'])!!}
      </div>
  </div>


    <div class="box-footer">
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    <a href="" class="btn btn-default">
                        <i class="fa fa-arrow-left"></i>
                        Cancelar
                    </a>
                </div>
                <div class="col-md-6 text-right">

                    {!! Form::submit('Salvar',['class'=>'btn btn-success dave-btn-salvar'])!!}

                    </button>

                </div>
            </div>

        </div>
    </div>

    {!! Form::close() !!}

</div>


                 
                        </div><!--/.col (left) -->
                        <!-- right column -->
                        
                        </div><!--/.col (right) -->
                    

@endsection




