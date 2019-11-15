<!DOCTYPE html>
<html>
<head>
	<title>FACTURA</title>
	<link href='#' rel='stylesheet' type='text/css'>
	<!-- <link rel="stylesheet" href="sass/main.css" media="screen" charset="utf-8"/> -->
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="content-type" content="text-html; charset=utf-8">
</head>
<body>
	<header class="clearfix">
        <div class="data right">
            @foreach ($empresa as $empres)
                @if($loop->first)
                    <div class="title">{{ $empres->name }}</div>
                    <div class="adress">{{ $empres->adress }}</div>
                    <div class="phone">{{ $empres->phone }}</div>
                    <div class="rif">{{ $empres->rif }}</div>
                @endif
            @endforeach
        </div>
	</header>
	<section>

			<div class="fact">Reporte</div>
			<h4>Reporte</h4>
<table>
<tr>
 <th>Libros</th>
 <th>Cantidad</th>
 <th>Precio.U</th>
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
	</section>

</body>

</html>
