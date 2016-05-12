

<?php $__env->startSection('content'); ?>

<div class="row">
                        <!-- left column -->
                        <div class="col-xs-12">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title"></h3>
                                </div><!-- /.box-header -->
  


    <?php echo Form::model($client,['route'=>['admin.clients.update',$client->id]]); ?>



     <?php echo $__env->make('admin.clients._form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


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

                    <?php echo Form::submit('Criar categoria',['class'=>'btn btn-success dave-btn-salvar']); ?>


                    <button class="btn btn-success dave-btn-salvar"  type="submit" data-loading-text="Salvando...">
                        <i class="fa fa-save"></i>
                        <?php echo 'Salvar'; ?>

                    </button>

                </div>
            </div>

        </div>
    </div>

    <?php echo Form::close(); ?>


</div>


                 
                        </div><!--/.col (left) -->
                        <!-- right column -->
                        
                        </div><!--/.col (right) -->
                    

<?php $__env->stopSection(); ?>





<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>