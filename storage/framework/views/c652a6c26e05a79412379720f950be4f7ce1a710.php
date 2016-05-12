


<?php $__env->startSection('contentheader_title', 'Pedidos'); ?>
<?php $__env->startSection('contentheader_page', 'Clientes'); ?>
<?php $__env->startSection('contentheader_page_active', 'Pedidos'); ?>

<?php $__env->startSection('content'); ?>

<div class="col-md-3 col-sm-4">
                    <div class="box-header">
                        <i class="fa"></i>
                    </div>
                    <!-- compose message btn -->
                    <a   href="<?php echo e(route('customer.order.create')); ?>" class="btn btn-block btn-primary" ><i class="fa fa-pencil"></i> Novo Pedido</a>
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
        <?php foreach($orders as $order): ?>
            <tr>
                <td><?php echo e($order->id); ?></td>
                <td><?php echo e($order->total); ?></td>
                <td><?php echo e($order->status); ?></td>

            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <?php echo e($orders->render()); ?>

                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>