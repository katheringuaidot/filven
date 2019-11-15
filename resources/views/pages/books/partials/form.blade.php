<div class="row">
    <div class="col">
        {!! Form::label('cod', 'ISBN', ['class' => "form-group col-form-label $errors->has('cod') ? ' has-danger' : '' "]) !!}
        {!! Form::text('cod', null, ['class' => "form-control $errors->has('cod') ? ' is-invalid' : '' " , 'placeholder' => 'EJ: C-00ASDF51']) !!}
        @if ($errors->has('cod'))
            <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('cod') }}</span>
        @endif
    </div>

    <div class="col">
        {!! Form::label('name', 'Nombre', ['class' => "form-group col-form-label $errors->has('name') ? ' has-danger' : '' "]) !!}
        {!! Form::text('name', null, ['class' => "form-control $errors->has('name') ? ' is-invalid' : '' ", 'placeholder' => 'EJ: Harry Potter']) !!}
        @if ($errors->has('name'))
            <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
        @endif
    </div>
    
    
    <div class="col">
        {!! Form::label('id_author', 'Autor', ['class' => "form-group col-form-label $errors->has('cod') ? ' has-danger' : '' "]) !!}
        {!! Form::select('id_author', $auth,null, ['placeholder' => 'Seleccione..', 'class' => 'form-control', 'id' => 'id_author']) !!}
        @if ($errors->has('id_author'))
            <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('id_author') }}</span>
        @endif
    </div>
</div>

<div class="row mt-3">
    <div class="col">
        {!! Form::label('id_edition', 'Edicion', ['class' => "form-group col-form-label $errors->has('id_edition') ? ' has-danger' : '' "]) !!}
        {!! Form::select('id_edition', [],null, ['placeholder' => 'Seleccione..', 'class' => 'form-control', 'id' => 'id_edition']) !!}
        @if ($errors->has('id_edition'))
            <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('id_edition') }}</span>
        @endif
    </div>
    
    <div class="col">
        {!! Form::label('quantity', 'Cantidad', ['class' => "form-group col-form-label $errors->has('quantity') ? ' has-danger' : '' "]) !!}
        {!! Form::text('quantity', null, ['class' => "form-control $errors->has('quantity') ? ' is-invalid' : '' ", 'placeholder' => 'EJ: 40']) !!}
        @if ($errors->has('quantity'))
            <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('quantity') }}</span>
        @endif
    </div>

    <div class="col">
        {!! Form::label('precie', 'Precio', ['class' => "form-group col-form-label $errors->has('precie') ? ' has-danger' : '' "]) !!}
        {!! Form::text('precie', null, ['class' => "form-control $errors->has('precie') ? ' is-invalid' : '' ", 'placeholder' => 'EJ: 40000']) !!}
        @if ($errors->has('precie'))
            <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('precie') }}</span>
        @endif
    </div>

    <div class="col">
        {!! Form::label('year', 'Año', ['class' => "form-group col-form-label $errors->has('year') ? ' has-danger' : '' "]) !!}
        {!! Form::text('year', null, ['class' => "form-control $errors->has('year') ? ' is-invalid' : '' ", 'placeholder' => 'EJ: 2012']) !!}
        @if ($errors->has('year'))
            <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('year') }}</span>
        @endif
    </div>
</div>

<div class="text-center mt-3">
    {!! Form::submit('Guardar', ['class' => 'btn btn-success input-cuadrado']) !!}
</div>

@push('js')
  <script>

    $(document).ready(function(){
        $('#id_author').change(function(){
          let id = $('#id_author').val();

          var url = `{{ url("editions")}}/${id}`;

          $.get(url, function(res){
            $('#id_edition').html('');
            res.forEach(e => {
              $('#id_edition').append(`
                <option value='${e.id}'>${e.name}</option>
              `);              
            });
          });
        });
    });
  </script>

@endpush