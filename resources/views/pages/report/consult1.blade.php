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

                  <table class="table">
                    <tr>
                        {{-- <th>Fecha</th> --}}
                        <th>Libros</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Total</th>
                    </tr>
                    <tr>
                    </tr>
                    @php
                        $total = 0;
                        $count = 0;
                    @endphp
                    @foreach ($sells as $sell)
                        <tr>
                          {{-- <th>{{ date('d-m-Y', strtotime($sell->date)) }}</th> --}}
                          <td>{{ $sell->name }}</td>
                          <td>{{ $sell->count }}</td>
                          <td>{{ $sell->precies }}</td>
                          <td>{{ $sell->precies * $sell->count }}</td>
                        </tr>
                        @php
                            $count = $count + $sell->count;
                            $total = $total + ($sell->precies * $sell->count);
                        @endphp
                    @endforeach
                    <tr>
                        <th>Total</th>
                        <th>{{ $count }}</th>
                        <th></th>
                        <th style="text-align:center">{{ $total }}</th>
                    </tr>
                </table>
                <div class="row">
                  <div class="col-12 text-right">
                    <a href="{{ route('report.index') }}" class="btn btn-sm btn-info input-cuadrado">{{ __('Volver') }}</a>
                  <a id="Navigate" href="{{ route('reportpdf') }}">
                        <input
                          type="button"
                          id="NavigateButton"
                          style="
                            background-image: url(http://cdn3.blogsdna.com/wp-content/uploads/2010/03/Windows-Phone-7-Series-Icons-Pack.png);
                            background-repeat: no-repeat;
                            background-position: -272px -112px;
                            cursor:pointer;
                            height: 40px;
                            width: 40px;
                            border-radius: 26px;
                            border-style: solid;
                            border-color:#000;
                            border-width: 3px;" title="Navigate"
                          />
                      </a>
                    {{--<td><button type="button" href="{{ url('report/reportpdf.blade.php') }}">imprimir</button></td>
                  <a href="{{ route('reportpdf') }}" class="btn btn-sm btn-warning input-ovalado">{{ __('imprimir') }}</a>--}}
                  </div>
                 {{--  <div class="col-md-12 text-right">
                    <a href="{{ route('report.pdf.report') }}" class="btn btn-sm btn-warning input-ovalado">{{ __('imprimir') }}</a>
                </div> --}}
                </div>


                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection
