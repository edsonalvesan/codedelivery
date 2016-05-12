

<?php $__env->startSection('contentheader_title', 'Produtos'); ?>
<?php $__env->startSection('contentheader_page', 'Admin'); ?>
<?php $__env->startSection('contentheader_page_active', 'Produtos'); ?>

<?php $__env->startSection('content'); ?>





<div class="col-md-3 col-sm-4">
                    <div class="box-header">
                        <i class="fa"></i>
                    </div>
                    <!-- compose message btn -->
                    <a   href="<?php echo e(route('admin.products.create')); ?>" class="btn btn-block btn-primary" ><i class="fa fa-pencil"></i> Novo Produto</a>
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
        <?php foreach($products as $product): ?>
            <tr>
                <td><?php echo e($product->id); ?></td>
                <td><?php echo e($product->name); ?></td>
                <td><?php echo e($product->category->name); ?></td>
                <td><?php echo e($product->price); ?></td>
                <td width = '130'>
                    <a href="<?php echo e(route('admin.products.edit',['id'=>$product->id])); ?>"
                       class="btn-sm btn-info"><i class="fa fa-edit"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <?php echo e($products->render()); ?>

                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>

         


<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>