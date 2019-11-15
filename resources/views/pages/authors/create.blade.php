@extends('layouts.app', ['activePage' => 'books', 'titlePage' => __('Crear Libro'), 'show' => 'hidden'])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">

            {!! Form::open(['route' => 'authors.store', 'method' => 'POST']) !!}
                {{-- @csrf --}}
                {!! Form::token() !!}
                <div class="card ">
                    <div class="card-header card-header-info">
                        <h4 class="card-title">{{ __('Agregar Libro') }}</h4>
                        <p class="card-category"></p>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                        <div class="col-md-12 text-right">
                            <a href="{{ route('authors.index') }}" class="btn btn-sm btn-warning input-cuadrado">{{ __('Regresar a la lista') }}</a>
                        </div>
                        </div>

                        <div class="container">
                            @include('pages.authors.partials.form')
                        </div>

                    </div>
                </div>
            {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
@endsection