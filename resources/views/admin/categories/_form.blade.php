<div class="form-group col-sm-12">
    {!!Form::label('name','Nome')!!}
    <div class="input-group col-sm-12">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Nome','id'=>'nome'])!!}
    </div>
</div>