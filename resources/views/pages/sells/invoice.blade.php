<!DOCTYPE html>
<html>
<head>
	<title>FACTURA</title>
	<link href='#' rel='stylesheet' type='text/css'>
	<!-- <link rel="stylesheet" href="sass/main.css" media="screen" charset="utf-8"/> -->
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta http-equiv="content-type" content="text-html; charset=utf-8">
	<style type="text/css">
		html, body, div, span, applet, object, iframe,
		h1, h2, h3, h4, h5, h6, p, blockquote, pre,
		a, abbr, acronym, address, big, cite, code,
		del, dfn, em, img, ins, kbd, q, s, samp,
		small, strike, strong, sub, sup, tt, var,
		b, u, i, center,
		dl, dt, dd, ol, ul, li,
		fieldset, form, label, legend,
		table, caption, tbody, tfoot, thead, tr, th, td,
		article, aside, canvas, details, embed,
		figure, figcaption, footer, header, hgroup,
		menu, nav, output, ruby, section, summary,
		time, mark, audio, video {
			margin: 0;
			padding: 0;
			border: 0;
			font: inherit;
			font-size: 100%;
			vertical-align: baseline;
		}

		html {
			line-height: 1;
		}

		ol, ul {
			list-style: none;
		}

		table {
			border-collapse: collapse;
			border-spacing: 0;
		}

		caption, th, td {
			text-align: left;
			font-weight: normal;
			vertical-align: middle;
		}

		q, blockquote {
			quotes: none;
		}
		q:before, q:after, blockquote:before, blockquote:after {
			content: "";
			content: none;
		}

		a img {
			border: none;
		}

		article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section, summary {
			display: block;
		}

		/* body {
			font-family: 'Source Sans Pro', sans-serif;
			font-weight: 300;
			font-size: 12px;
			margin: 0;
			padding: 0;
		}
		body a {
			text-decoration: none;
			color: inherit;
		}
		body a:hover {
			color: inherit;
			opacity: 0.7;
		} */
		body .container {
			min-width: 500px;
			margin: 0 0;
			padding: 0 20px;
		}
		body .clearfix:after {
			content: "";
			margin: 5px;
			display: table;
			clear: both;
			padding: 0;

		}
		body .left {
			float: right;
			padding: 0;
		}
		body .right {
			float: left;
			padding: 0;

		}
/* 		body .helper {
			display: inline-block;
			height: 100%;
			vertical-align: middle;
		}
 */		body .no-break {
			page-break-inside: avoid;
		}

		header {
			margin-top: 20px;

		}
/*  		header figure {
			float: right;
			width: 100px;
			height: 100px;
			margin-right: 100px;
			background-color: #8BC34A;
			text-align: center;
		}
 */		header figure img {
			margin-top: 13px;
		}		
 		header .company-address {
			float: right;
			max-width: 15px;
			line-height: 1.0em;
		}
		header .company-address .title {
			color: #8BC34A;
			font-weight: 100;
			font-size: 0.5em;
			text-transform: uppercase;
		}
		header .company-contact {
			float: left;
			height: 30px;
			padding: 0 5px;
			background-color: #8BC34A;
			color: white;
		}
		header .company-contact span {
			display: inline-block;
			vertical-align: middle;
		}
		header .company-contact .circle {
			width: 20px;
			height: 100px;
			background-color: white;
			border-radius: 50%;
			text-align: center;
		}
		header .company-contact .circle img {
			vertical-align: middle;
		}
		header .company-contact .phone {
			height: 100%;
			margin-right: 20px;
		}
		header .company-contact .email {
			height: 100%;
			min-width: 100px;
			text-align: right;
		}
		section .details {
			margin-bottom: 55px;
		}
		section .details .client {
			width: 30%;
			color: #777777;
			overflow: hidden; 
			padding: 0; 
			line-height: 20px;
		}
 		section .details .client .name {
			color: #8BC34A;
		}
 		section .details .data {
			width: 50%;
			color: #777777;
			text-align: left;
			font-size: 5px;
		}
		section .details .title {
			margin-bottom: 15px;
			color: #8BC34A;
			font-size: 3em;
			font-weight: 400;
			text-transform: uppercase;
		}
		section table {
			width: 100%;
			border-collapse: collapse;
			border-spacing: 0;
			font-size: 0.9166em;
		}
		section table .qty, section table .unit, section table .total {
			width: 15%;
		}
		section table .desc {
			width: 55%;
		}
		section table thead {
			display: table-header-group;
			vertical-align: middle;
			border-color: inherit;
		}
		section table thead th {
			padding: 1px 10px;
			background: #8BC34A;
			border-bottom: 3px solid #FFFFFF;
			border-right: 2px solid #FFFFFF;
			text-align: right;
			color: white;
			font-weight: 400;
			text-align: center;
			text-transform: uppercase;
		}
		section table thead th:last-child {
			border-right: none;
		}
		section table thead .desc {
			text-align: center;
		}
		section table thead .qty {
			text-align: center;
		}
		section table tbody td {
			padding: 10px;
			background: #E8F3DB;
			color: #777777;
			text-align: right;
			border-bottom: 5px solid #FFFFFF;
			border-right: 4px solid #E8F3DB;
		}
		section table tbody td:last-child {
			border-right: none;
		}
		section table tbody h3 {
			margin-bottom: 5px;
			color: #8BC34A;
			font-weight: 600;
		}
		section table tbody .desc {
			text-align: left;
			font-size: 1.0em;
			text-transform: capitalize;
		}
		section table tbody .qty {
			text-align: center;
			font-size: 1.0em;

		}
/* 		section table.grand-total {
			margin-bottom: 10px;
		}
 */		section table.grand-total td {
			padding: 5px 5px;
			border: none;
			color: #777777;
			text-align: right;
			font-size: 1.0em;

		}
	
		section table.grand-total .desc {
			background-color: transparent;
		}
		section table.grand-total tr:last-child td {
			font-weight: 600;
			color: #8BC34A;
			font-size: 1.0em;
		}

		footer {
			margin-bottom: 10px;
		}
		footer .end {
			padding-top: 5px;
			border-top: 2px solid #8BC34A;
			text-align: center;
		}
		.fact{
			color: #8BC34A;
			font-size: 40px;
			text-align:center;
			padding: 1px 0px;

		}
	</style>
</head>

<body>
	<header class="clearfix">

      
	</header>

	<section>
		<div class="container">
			<div class="details clearfix">
				<div class="client left">
				@foreach ($FactureCliente as $FactureClient)
					@if($loop->first)
					<p><br><br/>Cliente: {{ $FactureClient->name}}</p>
					<p>CI: {{ $FactureClient->ci}}</p>
					<p>Dirección: {{ $FactureClient->adress}}</p>
					<p>Telefono: {{ $FactureClient->phone}}</p>

					@endif
				@endforeach
				</div>
				<div class="data right">
				@foreach ($empresa as $empres)
					@if($loop->first)
						<div class="title">{{ $empres->name }}</div>
						<div class="adress">{{ $empres->adress }}</div>
						<div class="phone">{{ $empres->phone }}</div>
						<div class="rif">{{ $empres->rif }}</div>
						

					<!-- 	<div class="date">
							Date of Invoice: 01/06/2014<br>
							Due Date: 30/06/2014
						</div> -->
					@endif
				@endforeach
					
				</div>
			</div>
			<div class="fact">Factura</div>
			<table border="0" cellspacing="0" cellpadding="0">
				<thead>
					<tr>
						<th class="">#</th>
						<th class="desc">Descripción</th>
						<th class="unit">Precio</th>
						<th class="qty">Cantidad</th>
						<th class="total">Total</th>
					</tr>
				</thead>
				<tbody>
				@php
					$i = 1;
					$subTotal = 0;
				@endphp
				@foreach ($sell_plus as $sell_plu)
					<tr>
						<td class="">{{$i}}</td>
						<td class="desc">{{$sell_plu->name}}</td>
						<td class="unit">{{number_format($sell_plu->precies,2)}}</td>
						<td class="qty">{{$sell_plu->quantity}}</td>
						<td class="total">{{ number_format($sell_plu->quantity * $sell_plu->precies,2) }}</td>
					</tr>
					@php
                $subTotal = ($sell_plu->quantity * $sell_plu->precies) + $subTotal;
                $i++;
            @endphp
          @endforeach
				</tbody>
			</table>
			<div class="no-break">
				<table class="grand-total">
					<tbody>
						<tr>
							<td class="desc"></td>
							<td class="qty"></td>
							<td class="unit">SUBTOTAL:</td>
							<td class="total">{{number_format($subTotal,2)}}</td>
						</tr>
						<tr>
							<td class="desc"></td>
							<td class="qty"></td>
							<td class="unit">Iva {{$FactureCliente[0]->iva}}%</td>
							<td class="total">{{ number_format($FactureCliente[0]->sub_total,2) }}</td>
						</tr>
						<tr>
							<td class="desc"></td>
							<td class="unit" colspan="2">TOTAL A PAGAR:</td>
							<td class="total">{{ number_format($FactureCliente[0]->total,2)}}</td>
						</tr>
					</tbody>
					<footer>
							<div class="end">Gracias por su Compra.</div>
					</footer>
				</table>
			</div>
		</div>
	</section>

</body>

</html>