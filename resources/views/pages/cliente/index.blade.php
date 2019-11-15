@extends('layouts.app', ['activePage' => 'cliente', 'titlePage' => __('Gestion  de Clientes'), 'show' => 'hidden'])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-info">
                <h4 class="card-title ">{{ __('Cliente') }}</h4>
                <p class="card-category"> {{ __('Aquí puedes ver los Clientes') }}</p>
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
                </div>
                <div class="table-responsive">
                  <table class="table text-center">
                    <thead class=" text-primary">
                      <th>
                        {{ __('#') }}
                      </th>
                      <th>
                          {{ __('Cedula') }}
                      </th>
                      <th>
                        {{ __('Nombre') }}
                      </th>
                      <th>
                        {{ __('Direccion') }}
                      </th>
                      <th>
                          {{ __('Telefono') }}
                      </th>
                       <th>
                            {{ __('Fecha de Creacion') }}
                       </th>
                    </thead>
                    <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @if (count($clientes) > 0)
                      @foreach($clientes as $cliente)
                        <tr>
                          <td>
                                {{ $i }}
                          </td>
                          <td>
                            {{ $cliente->ci }}
                          </td>
                          <td>
                            {{ $cliente->name }}
                          </td>
                          <td>
                              {{ $cliente->adress }}
                          </td>
                          <td>
                                {{ $cliente->phone }}
                          </td>
                          <td>
                            {{ $cliente->created_at->format('d-m-Y') }}
                          </td>
                         
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
                  {{-- {{ $clientes->links() }} --}}
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection
