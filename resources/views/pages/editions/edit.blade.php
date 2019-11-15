@extends('layouts.app', ['activePage' => 'editions', 'titlePage' => __('Editar Edicion'), 'show' => 'hidden'])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">

            {!! Form::model($edition, ['route' => ['editions.update', $edition->id], 'method' => 'PUT']) !!}
                {{-- @csrf --}}
                {!! Form::token() !!}
                <div class="card ">
                    <div class="card-header card-header-info">
                        <h4 class="card-title">{{ __('Editar Edicion') }}</h4>
                        <p class="card-category"></p>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                        <div class="col-md-12 text-right">
                            <a href="{{ route('editions.index') }}" class="btn btn-sm btn-warning input-cuadrado">{{ __('Regresar a la lista') }}</a>
                        </div>
                        </div>

                        <div class="container">
                            @include('pages.editions.partials.form')
                        </div>

                    </div>
                </div>
            {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
@endsection