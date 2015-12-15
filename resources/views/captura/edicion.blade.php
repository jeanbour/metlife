@extends('layout')

@section('content')

	{!! Form::open(['route' => 'registrarServicios', 'method' => 'POST', 'role' => 'form']) !!}

	<div class="container">
		<div class="col-md-12 page-header">
			<h1>Emision Rechazos y Recibos 	<small> | Captura</small></h1>
		</div>

    </div>

    {!! Form::close() !!}

@endsection

@section('scripts')

    {!! Html::script('assets/js/produccion.js') !!}

@endsection('scripts')
