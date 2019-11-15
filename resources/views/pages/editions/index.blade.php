@extends('layouts.app', ['activePage' => 'editions', 'titlePage' => __('Ediciones'), 'show' => 'hiden'])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-info">
                <h4 class="card-title ">{{ __('Ediciones') }}</h4>
                <p class="card-category"> {{ __('Aquí puedes administrar las Ediciones') }}</p>
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
                    <a href="{{ route('editions.create') }}" class="btn btn-sm btn-info input-cuadrado">{{ __('Agregar') }}</a>
                  </div>
                </div>
                <div class="table-responsive">
                  <table class="table text-center">
                    <thead class=" text-primary">
                      <th>{{ __('#') }}</th>
                      <th>{{ __('Autor') }}</th>
                      <th>{{ __('Edicion') }}</th>
                      <th>{{ __('Fecha') }}</th>
                      @if (Auth::User()->rol == 1)
                        <th class="">{{ __('Acciones') }}</th>
                      @endif
                    </thead>
                    <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @if (count($editions) > 0)
                      @foreach($editions as $edition)
                          <tr>
                              <td>{{ $i }}</td>
                              <td>{{ $edition->name_author }}</td>
                              <td>{{ $edition->name }}</td>
                              <td>{{ date('d-m-Y', strtotime($edition->year))}}</td>
                              @if (Auth::User()->rol == 1)
                              <td class="td-actions">
                                  <form action="{{ route('editions.destroy', $edition) }}" method="post">
                                      @csrf
                                      @method('delete')
                                  
                                      <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('editions.edit', $edition) }}" data-original-title="" title="">
                                          <i class="material-icons">edit</i>
                                          <div class="ripple-container"></div>
                                      </a>
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
                    @else
                          <tr>
                            <td class="text-center" colspan="4">Sin Registros</td>
                          </tr>
                    @endif
                  </tbody>
                  </table>
                </div>
                <div class="float-right">
                  {{-- {{ $editions->links() }} --}}
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection
