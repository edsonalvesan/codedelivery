<div class="form-group col-sm-12">
    <?php echo Form::label('name','Nome'); ?>

    <div class="input-group col-sm-12">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        <?php echo Form::text('user[name]',null,['class'=>'form-control','placeholder'=>'Nome','id'=>'nome']); ?>

    </div>
</div>

<div class="form-group col-sm-12">
    <?php echo Form::label('email','E-mail'); ?>

    <div class="input-group col-sm-12">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        <?php echo Form::text('user[email]',null,['class'=>'form-control','placeholder'=>'Nome','id'=>'nome']); ?>

    </div>
</div>

<div class="form-group col-sm-12">
    <?php echo Form::label('phone','Telefone'); ?>

    <div class="input-group col-sm-12">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        <?php echo Form::text('phone',null,['class'=>'form-control','placeholder'=>'Nome','id'=>'nome']); ?>

    </div>
</div>

<div class="form-group col-sm-12">
    <?php echo Form::label('adress','Endereço'); ?>

    <div class="input-group col-sm-12">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        <?php echo Form::textarea('adress',null,['class'=>'form-control','placeholder'=>'Nome','id'=>'nome']); ?>

    </div>
</div>

<div class="form-group col-sm-12">
    <?php echo Form::label('city','Cidade'); ?>

    <div class="input-group col-sm-12">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        <?php echo Form::text('city',null,['class'=>'form-control','placeholder'=>'Nome','id'=>'nome']); ?>

    </div>
</div>


<div class="form-group col-sm-12">
    <?php echo Form::label('state','Estado'); ?>

    <div class="input-group col-sm-12">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        <?php echo Form::text('state',null,['class'=>'form-control','placeholder'=>'Nome','id'=>'nome']); ?>

    </div>
</div>

<div class="form-group col-sm-12">
    <?php echo Form::label('zipcode','Estado'); ?>

    <div class="input-group col-sm-12">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        <?php echo Form::text('zipcode',null,['class'=>'form-control','placeholder'=>'Nome','id'=>'nome']); ?>

    </div>
</div>
