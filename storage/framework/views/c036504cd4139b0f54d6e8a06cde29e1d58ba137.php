


<?php $__env->startSection('contentheader_title', 'Cupons'); ?>
<?php $__env->startSection('contentheader_page', 'Admin'); ?>
<?php $__env->startSection('contentheader_page_active', 'Categorias'); ?>

<?php $__env->startSection('content'); ?>

<div class="col-md-3 col-sm-4">
                    <div class="box-header">
                        <i class="fa"></i>
                    </div>
                    <!-- compose message btn -->
                    <a   href="<?php echo e(route('admin.cupoms.create')); ?>" class="btn btn-block btn-primary" ><i class="fa fa-pencil"></i> Novo Cupom</a>
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
            <th>Código</th>
            <th>Valor</th>
        </tr>
        </thead>

        <tbody>
        <?php foreach($cupoms as $cupom): ?>
            <tr>
                <td><?php echo e($cupom->id); ?></td>
                <td><?php echo e($cupom->code); ?></td>
                <td><?php echo e($cupom->value); ?></td>
                <td width = '130'>
                    <a href="<?php echo e(route('admin.cupoms.edit',['id'=>$cupom->id])); ?>"
                       class="btn-sm btn-info"><i class="fa fa-edit"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

                                    <?php echo e($cupoms->render()); ?>

                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>