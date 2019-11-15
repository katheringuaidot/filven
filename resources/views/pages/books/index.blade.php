@extends('layouts.app', ['activePage' => 'books', 'titlePage' => __('Libros'), 'show' => 'hidden'])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-info">
                <h4 class="card-title ">{{ __('Libros') }}</h4>
                <p class="card-category"> {{ __('Aquí puedes administrar los Libros') }}</p>
              </div>
              <div class="card-body">
                @if (session('status'))
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                        <span>{{ session('status') }}</span>
                      </div>
                    </div>
                  </div>
                @endif
                <div class="row">
                  <div class="col-12 text-right">
                    <a href="{{ route('books.create') }}" class="btn btn-sm btn-info input-cuadrado">{{ __('Agregar') }}</a>
                  </div>
                </div>
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>{{ __('#') }}</th>
                      <th>{{ __('ISBN') }}</th>
                      <th>{{ __('Nombre de libro') }}</th>
                      <th>{{ __('Autor') }}</th>
                      <th>{{ __('Editorial') }}</th>
                      <th>{{ __('Cantidad') }}</th>
                      <th>{{ __('Precio Unitario') }}</th>
                      @if (Auth::User()->rol == 1)
                        <th class="text-right">
                          {{ __('Acciones') }}
                        </th>
                      @endif
                    </thead>
                    <tbody>
                      @php
                          $i = 1;
                      @endphp
                      @foreach($books as $book)
                        <tr>
                          <td>{{ $i }}</td>
                          <td>{{ $book->cod }} </td>
                          <td>{{ $book->name }}</td>
                          <td>
                            @foreach ($auth as $auths)
                                @if ($auths->id == $book->id_author)
                                  {{$auths->name}}
                                @endif
                            @endforeach
                            </td>
                          <td>
                              @foreach ($edition as $e)
                                @if ($e->id == $book->id_edition)
                                  {{$e->name}}
                                @endif
                              @endforeach
                          </td>
                          <td>{{ $book->quantity }}</td>  
                          <td>{{ $book->precie }}</td>
                          @if (Auth::User()->rol == 1)
                            <td class="td-actions text-right">
                                <form action="{{ route('books.destroy', $book) }}" method="post">
                                    @csrf
                                    @method('delete')

                                    <!--boton para sumar cantidad de libro-->
                                    <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('books.getstock',$book->id) }}" data-original-title="" title="">
                                        <i class="material-icons">add</i>
                                        <div class="ripple-container"></div>
                                      </a>
                                    <!-- Boton para Editar -->
                                    <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('books.edit', $book) }}" data-original-title="" title="">
                                      <i class="material-icons">edit</i>
                                      <div class="ripple-container"></div>
                                    </a>

                                    <!-- Boton para Eliminar -->
                                    <button type="submit" class="btn btn-danger btn-link" >
                                        <i class="material-icons">close</i>
                                        <div class="ripple-container"></div>
                                    </button>
                                </form>
                            </td>
                          @endif
                        </tr>
                        @php
                          $i++;
                      @endphp
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <div class="float-right">
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection
