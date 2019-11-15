<div class="row">
    <div class="col">
        {!! Form::label('name', 'Nombre', ['class' => "form-group col-form-label $errors->has('name') ? 'has-danger' : '' "]) !!}
        {!! Form::text('name', null, ['class' => "form-control $errors->has('name') ? ' is-invalid' : '' " , 'placeholder' => 'EJ: Luis Perez']) !!}
        @if ($errors->has('name'))
            <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
        @endif
    </div>
</div>

<div class="text-center mt-3">
    {!! Form::submit('Guardar', ['class' => 'btn btn-success input-cuadrado']) !!}
</div>