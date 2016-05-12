<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        <?php echo $__env->yieldContent('contentheader_title', 'Page Header here'); ?>
        <small><?php echo $__env->yieldContent('contentheader_description'); ?></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i><?php echo $__env->yieldContent('contentheader_page', 'Page'); ?></a></li>
        <li class="active"><?php echo $__env->yieldContent('contentheader_page_active', 'Page'); ?></li>
    </ol>

     <?php echo $__env->yieldContent('content'); ?>

</section>