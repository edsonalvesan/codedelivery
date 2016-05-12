<div class="form-group col-sm-12">
    <?php echo Form::label('category','Categoria'); ?>

    <div class="input-group col-sm-12">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        <?php echo Form::select('category_id', $categories, null,['class'=>'form-control','placeholder'=>'Nome','id'=>'nome']); ?>

    </div>
</div>

<div class="form-group col-sm-12">
    <?php echo Form::label('name','Nome'); ?>

    <div class="input-group col-sm-12">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        <?php echo Form::text('name',null,['class'=>'form-control','placeholder'=>'Nome','id'=>'nome']); ?>

    </div>
</div>

<div class="form-group col-sm-12">
    <?php echo Form::label('Description','Descrição'); ?>

    <div class="input-group col-sm-12">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        <?php echo Form::textarea('description',null,['class'=>'form-control','placeholder'=>'Nome','id'=>'nome']); ?>

    </div>
</div>

<div class="form-group col-sm-12">
    <?php echo Form::label('price','Preço'); ?>

    <div class="input-group col-sm-12">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        <?php echo Form::text('price',null,['class'=>'form-control','placeholder'=>'Nome','id'=>'nome']); ?>

    </div>
</div>