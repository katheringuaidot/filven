@extends('layouts.app', ['activePage' => 'books', 'titlePage' => __('Editar cantidad de libro'), 'show' => 'hidden'])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">

            {!! Form::model($book, ['route' => ['books.sumarStock', $book->id], 'method' => 'PUT']) !!}
                {{-- @csrf --}}
                {!! Form::token() !!}
                <div class="card ">
                    <div class="card-header card-header-info">
                        <h4 class="card-title">{{ __('Cantidad Libro') }}</h4>
                        <p class="card-category"></p>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                        <div class="col-md-12 text-right">
                            <a href="{{ route('books.index') }}" class="btn btn-sm btn-warning input-cuadrado">{{ __('Regresar a la lista') }}</a>
                        </div>
                        </div>

                        <div class="container">
                            @include('pages.books.partials.form1')
                        </div>

                    </div>
                </div>
            {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
@endsection

@push('js')
  <script>

    $(document).ready(function(){
        $('#id_author').change(function(){
          let id = $('#id_author').val();
          var url = "http://localhost/facturacion/public/editions/"+id;

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