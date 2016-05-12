


<?php $__env->startSection('contentheader_title', 'Clientes'); ?>
<?php $__env->startSection('contentheader_page', 'Admin'); ?>
<?php $__env->startSection('contentheader_page_active', 'Clientes'); ?>

<?php $__env->startSection('content'); ?>

<div class="col-md-3 col-sm-4">
                    <div class="box-header">
                        <i class="fa"></i>
                    </div>
                    <!-- compose message btn -->
                    <a   href="<?php echo e(route('admin.clients.create')); ?>" class="btn btn-block btn-primary" ><i class="fa fa-pencil"></i> Novo Cliente</a>
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
        <?php foreach($clients as $client): ?>
            <tr>
                <td><?php echo e($client->id); ?></td>
                <td><?php echo e($client->user->name); ?></td>
                <td width = '130'>
                    <a href="<?php echo e(route('admin.clients.edit',['id'=>$client->id])); ?>"
                       class="btn-sm btn-info"><i class="fa fa-edit"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <?php echo e($clients->render()); ?>

                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>