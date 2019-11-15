@extends('layouts.app', ['activePage' => 'sells', 'titlePage' => __('Ventas'), 'show' => 'hidden'])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-info">
                <h4 class="card-title ">{{ __('Ventas') }}</h4>
                <p class="card-category"> {{ __('Aquí puedes administrar los Ventas') }}</p>
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
                    {{-- <a href="#" class="btn btn-sm btn-info input-cuadrado" data-toggle="modal" data-target="#exampleModal">{{ __('Agregar') }}</a> --}}
                    <a href="{{ route('sells.create') }}" class="btn btn-sm btn-info input-cuadrado">{{ __('Agregar') }}</a>
                  </div>
                </div>
                <div class="table-responsive">
                  <table class="table text-center">
                    <thead class=" text-primary">
                      <th>
                          {{ __('#') }}
                      </th>
                      <th>
                        {{ __('Vendedor') }}
                      </th>
                      <th>
                        {{ __('Fecha de la Factura') }}
                      </th>
                      {{--@if (Auth::User()->rol == 1)
                       <th class="">
                        {{ __('Mostrar') }}
                      </th>
                      @endif--}}
                    </thead>
                    <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @if (count($sells) > 0)
                      @foreach($sells as $sell)
                          <tr>
                              <td>
                                {{ $i }}
                              </td>
                              <td>
                               @foreach ($user as $u)
                                @if($u->id === $sell->id_user)
                                {{$u->name}}
                                @endif
                                                                  
                                @endforeach
                              <!-- {{ $sell->id_user }}verificar para que salga el nombre de quien-->
                              </td>
                              <td>
                                {{ $sell->created_at->format('d-m-Y') }}
                              </td>
                             {{-- @if (Auth::User()->rol == 1)
                             <td class="td-actions">
                                  <form>                            
                                      <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('sells.edit', $sell) }}" data-original-title="" title="">
                                          <i class="material-icons">Ver</i>
                                          <div class="ripple-container"></div>
                                      </a>
                                  </form>
                              </td>
                              @endif--}}
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
                  {{-- {{ $sells->links() }} --}}
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection


