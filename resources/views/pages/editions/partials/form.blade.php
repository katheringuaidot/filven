<div class="row">
    <div class="col">
        {!! Form::label('id_author', 'Autor', ['class' => "form-group col-form-label $errors->has('id_author') ? 'has-danger' : '' "]) !!}
        {!! Form::select('id_author',$authors,null, ['placeholder' => 'Seleccione..', 'class' => 'form-control']) !!}
        @if ($errors->has('id_author'))
            <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('id_author') }}</span>
        @endif
    </div>
    <div class="col">
        {!! Form::label('name', 'Edicion', ['class' => "form-group col-form-label $errors->has('name') ? 'has-danger' : '' "]) !!}
        {!! Form::text('name', null, ['class' => "form-control $errors->has('name') ? ' is-invalid' : '' " , 'placeholder' => 'EJ: Luis Perez']) !!}
        @if ($errors->has('name'))
            <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
        @endif
    </div>
    <div class="col">
        {!! Form::label('year', 'Año', ['class' => "form-group col-form-label $errors->has('year') ? 'has-danger' : '' "]) !!}
        {!! Form::date('year', null, ['class' => "form-control $errors->has('year') ? ' is-invalid' : '' "]) !!}
        @if ($errors->has('year'))
            <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('year') }}</span>
        @endif
    </div>
</div>

<div class="text-center mt-3">
    {!! Form::submit('Guardar', ['class' => 'btn btn-success input-cuadrado']) !!}
</div>