


<?php $__env->startSection('contentheader_title', 'Orders'); ?>
<?php $__env->startSection('contentheader_page', 'Admin'); ?>
<?php $__env->startSection('contentheader_page_active', 'Orders'); ?>

<?php $__env->startSection('content'); ?>

<div class="col-md-3 col-sm-4">
                    <div class="box-header">
                        <i class="fa"></i>
                    </div>
                    <!-- compose message btn -->
                    <a   href="<?php echo e(route('admin.orders.create')); ?>" class="btn btn-block btn-primary" ><i class="fa fa-pencil"></i> Novo Cliente</a>
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
        <?php foreach($orders as $order): ?>
            <tr>
                <td><?php echo e($order->id); ?></t>
                <td>R$ <?php echo e($order->total); ?></t>
                <td><?php echo e($order->created_at); ?></t>
                <td>
                    <ul>
                    <?php foreach($order->items as $item): ?>
                    <li><?php echo e($item->product->name); ?></li>
                    <?php endforeach; ?>
                    </ul>
                    </t>
                <td>
                    <?php if($order->deliveryman): ?>
                        <?php echo e(($order->deliveryman->name)); ?>

                    <?php else: ?>
                            --
                    <?php endif; ?>
                    </t>
                <td><?php echo e($order->status); ?></t>
                <td width = '130'>
                    <a href="<?php echo e(route('admin.orders.edit',['id'=>$order->id])); ?>"
                       class="btn-sm btn-info"><i class="fa fa-edit"></i></a>
                </td>
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