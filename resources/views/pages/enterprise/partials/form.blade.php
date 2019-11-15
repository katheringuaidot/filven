<div class="row">
    <div class="col">
        {!! Form::label('name', 'Nombre', ['class' => "form-group col-form-label $errors->has('name') ? 'has-danger' : '' "]) !!}
        {!! Form::text('name', null, ['class' => "form-control $errors->has('name') ? ' is-invalid' : '' " , 'placeholder' => 'EJ: Luis Perez']) !!}
        @if ($errors->has('name'))
            <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
        @endif
    </div>
    <div class="col">
        {!! Form::label('adress', 'Direccion', ['class' => "form-group col-form-label $errors->has('adress') ? 'has-danger' : '' "]) !!}
        {!! Form::text('adress', null, ['class' => "form-control $errors->has('adress') ? ' is-invalid' : '' " , 'placeholder' => 'EJ: Los teques']) !!}
        @if ($errors->has('adress'))
            <span id="adress-error" class="error text-danger" for="input-adress">{{ $errors->first('adress') }}</span>
        @endif
    </div>
</div>
<div class="row">
    <div class="col">
        {!! Form::label('phone', 'Telefono', ['class' => "form-group col-form-label $errors->has('phone') ? 'has-danger' : '' "]) !!}
        {!! Form::text('phone', null, ['class' => "form-control $errors->has('phone') ? ' is-invalid' : '' " , 'placeholder' => 'EJ: 0414-999-99-99']) !!}
        @if ($errors->has('phone'))
            <span id="phone-error" class="error text-danger" for="input-phone">{{ $errors->first('phone') }}</span>
        @endif
    </div>
    <div class="col">
        {!! Form::label('rif', 'Rif', ['class' => "form-group col-form-label $errors->has('rif') ? 'has-danger' : '' "]) !!}
        {!! Form::text('rif', null, ['class' => "form-control $errors->has('rif') ? ' is-invalid' : '' " , 'placeholder' => 'EJ: J-854236489']) !!}
        @if ($errors->has('rif'))
            <span id="rif-error" class="error text-danger" for="input-rif">{{ $errors->first('rif') }}</span>
        @endif
    </div>
</div>


<div class="text-center mt-3">
    {!! Form::submit('Guardar', ['class' => 'btn btn-success input-cuadrado']) !!}
</div>