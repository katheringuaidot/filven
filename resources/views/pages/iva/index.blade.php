@extends('layouts.app', ['activePage' => 'iva', 'titlePage' => __('Iva'), 'show' => 'hidden'])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-info">
                <h4 class="card-title ">{{ __('Iva') }}</h4>
                <p class="card-category"> {{ __('Aquí puedes administrar los Iva') }}</p>
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
                    <a href="{{ route('iva.create') }}" class="btn btn-sm btn-info input-cuadrado">{{ __('Agregar') }}</a>
                  </div>
                </div>
                <div class="table-responsive">
                  <table class="table text-center">
                    <thead class=" text-primary">
                      <th>
                          {{ __('#') }}
                      </th>
                      <th>
                        {{ __('Iva') }}
                      </th>
                      @if (Auth::User()->rol == 1)
                        <th class="">
                          {{ __('Acciones') }}
                        </th>
                      @endif
                    </thead>
                    <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @if (count($ivas) > 0)
                      @foreach($ivas as $iva)
                          <tr>
                              <td>
                                {{ $i }}
                              </td>
                              <td>
                                {{ $iva->name }}
                              </td>
                              @if (Auth::User()->rol == 1)
                              <td class="td-actions">
                                  <form action="{{ route('iva.destroy', $iva) }}" method="post">
                                      @csrf
                                      @method('delete')
                                  
                                      <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('iva.edit', $iva) }}" data-original-title="" title="">
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
                            <td class="text-center" colspan="3">Sin Registros</td>
                          </tr>
                    @endif
                  </tbody>
                  </table>
                </div>
                <div class="float-right">
                  {{ $ivas->links() }}
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection
