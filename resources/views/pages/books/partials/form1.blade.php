<div class="row">
    <div class="col">
        {!! Form::label('cod', 'Codigo', ['class' => "form-group col-form-label $errors->has('cod') ? ' has-danger' : '' "]) !!}
        {!! Form::text('cod', null, ['class' => "form-control $errors->has('cod') ? ' is-invalid' : '' ", 'disabled', 'placeholder' => 'EJ: C-00ASDF51']) !!}
        @if ($errors->has('cod'))
            <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('cod') }}</span>
        @endif
    </div>
    
    <div class="col">
        {!! Form::label('quantity', 'Cantidad', ['class' => "form-group col-form-label $errors->has('quantity') ? ' has-danger' : '' "]) !!}
        {!! Form::text('quantity', null, ['class' => "form-control $errors->has('quantity') ? ' is-invalid' : '' ", 'placeholder' => 'EJ: 40']) !!}
        @if ($errors->has('quantity'))
            <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('quantity') }}</span>
        @endif
    </div>
</div>

<div class="text-center mt-3">
    {!! Form::submit('Guardar', ['class' => 'btn btn-success input-cuadrado']) !!}
</div>