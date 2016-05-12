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
  


    {!! Form::model($cupom,['route'=>['admin.cupoms.update',$cupom->id]]) !!}


     @include('admin.cupoms._form')


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

                    {!! Form::submit('Salvar Cupoom',['class'=>'btn btn-success dave-btn-salvar'])!!}

                    <button class="btn btn-success dave-btn-salvar"  type="submit" data-loading-text="Salvando...">
                        <i class="fa fa-save"></i>
                        {!! 'Salvar' !!}
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




