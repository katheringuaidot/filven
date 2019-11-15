@extends('layouts.app', ['activePage' => 'cliente', 'titlePage' => __('Gestion de Cliente'), 'show' => 'show'])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('cliente.store') }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('post')

            <div class="card ">
              <div class="card-header card-header-info">
                <h4 class="card-title">{{ __('Agregar Cliente') }}</h4>
                <p class="card-category"></p>
              </div>
              <div class="card-body ">
                <div class="row">
                  <div class="col-md-12 text-right">
                      <a href="{{ route('cliente.index') }}" class="btn btn-sm btn-warning input-cuadrado">{{ __('Regresar a la lista') }}</a>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Nombre del Cliente') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __('Name') }}" value="{{ old('name') }}" required="true" aria-required="true"/>
                      @if ($errors->has('name'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Cedula') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('ci') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('ci') ? ' is-invalid' : '' }}" name="ci" id="input-name" type="text" placeholder="{{ __('Cedula') }}" value="{{ old('name') }}" required="true" aria-required="true"/>
                      @if ($errors->has('ci'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('ci') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __(' Dirección ') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('adress') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('adress') ? ' is-invalid' : '' }}" name="adress" id="input-adress" type="text" placeholder="{{ __('Dirección') }}" value="{{ old('name') }}" required="true" aria-required="true"/>
                      @if ($errors->has('adress'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('adress') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Telefono') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('phone') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" id="input-phone" type="text" placeholder="{{ __('Telefono') }}" value="{{ old('name') }}" required="true" aria-required="true"/>
                      @if ($errors->has('phone'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('phone') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-success input-cuadrado">{{ __('Agregar') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection