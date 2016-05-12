<div class="form-group col-sm-12">
    {!!Form::label('name','Nome')!!}
    <div class="input-group col-sm-12">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        {!!Form::text('user[name]',null,['class'=>'form-control','placeholder'=>'Nome','id'=>'nome'])!!}
    </div>
</div>

<div class="form-group col-sm-12">
    {!!Form::label('email','E-mail')!!}
    <div class="input-group col-sm-12">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        {!!Form::text('user[email]',null,['class'=>'form-control','placeholder'=>'Nome','id'=>'nome'])!!}
    </div>
</div>

<div class="form-group col-sm-12">
    {!!Form::label('phone','Telefone')!!}
    <div class="input-group col-sm-12">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        {!!Form::text('phone',null,['class'=>'form-control','placeholder'=>'Nome','id'=>'nome'])!!}
    </div>
</div>

<div class="form-group col-sm-12">
    {!!Form::label('adress','Endereço')!!}
    <div class="input-group col-sm-12">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        {!!Form::textarea('adress',null,['class'=>'form-control','placeholder'=>'Nome','id'=>'nome'])!!}
    </div>
</div>

<div class="form-group col-sm-12">
    {!!Form::label('city','Cidade')!!}
    <div class="input-group col-sm-12">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        {!!Form::text('city',null,['class'=>'form-control','placeholder'=>'Nome','id'=>'nome'])!!}
    </div>
</div>


<div class="form-group col-sm-12">
    {!!Form::label('state','Estado')!!}
    <div class="input-group col-sm-12">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        {!!Form::text('state',null,['class'=>'form-control','placeholder'=>'Nome','id'=>'nome'])!!}
    </div>
</div>

<div class="form-group col-sm-12">
    {!!Form::label('zipcode','Estado')!!}
    <div class="input-group col-sm-12">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        {!!Form::text('zipcode',null,['class'=>'form-control','placeholder'=>'Nome','id'=>'nome'])!!}
    </div>
</div>
