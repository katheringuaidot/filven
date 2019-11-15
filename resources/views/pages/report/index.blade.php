@extends('layouts.app', ['activePage' => 'report', 'titlePage' => __('Reporte'), 'show' => 'report'])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-info">
                <h4 class="card-title ">{{ __('Reporte') }}</h4>
                <p class="card-category"> {{ __('Reporte') }}</p>
              </div>
              <div class="card-body">
                <div class="row">
                    <div class="col-12"> <h3>Busqueda por Fecha</h3></div>
                    {!! Form::open(['route' => 'report.consult1', 'method' => 'POST']) !!}
                        {{-- @csrf --}}
                        {!! Form::token() !!}
                            <div class="form-group{{ $errors->has('date_start') ? ' has-danger' : '' }}">
                                Fecha de inicio
                                <input class="form-control{{ $errors->has('date_start') ? ' is-invalid' : '' }}" name="date_start" id="date_start" type="date" placeholder="{{ __('Fecha de inicio') }}" value="{{ old('date_start') }}" required="true" aria-required="true"/>
                                @if ($errors->has('date_start'))
                                    <span id="name-error" class="error text-danger" for="date_start">{{ $errors->first('date_start') }}</span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('date_end') ? ' has-danger' : '' }}">
                                Fecha final
                                <input class="form-control{{ $errors->has('date_end') ? ' is-invalid' : '' }}" name="date_end" id="date_end" type="date" placeholder="{{ __('Fecha final') }}" value="{{ old('date_end') }}" required="true" aria-required="true"/>
                                @if ($errors->has('date_end'))
                                    <span id="name-error" class="error text-danger" for="date_end">{{ $errors->first('date_start') }}</span>
                                @endif
                            </div>

                            <button type="submit">Enviar</button>
                    {!! Form::close() !!}
                          
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection
