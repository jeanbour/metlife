@extends('layout')

@section('content')

	{!! Form::open(['route' => 'registrarServicios', 'method' => 'POST', 'role' => 'form']) !!}

	<div class="container">
		<div class="col-md-12 page-header">
			<h1>Servicios 	<small> | Captura</small></h1>
		</div>
        <div class="col-md-12">
        	<h3>Información de servicio</h3>
            <div class="form-group col-md-3 col-sm-3 col-xs-12">
                {!! Field::select('oficina', ['1' => 'Oficina 1', '2' => 'Oficina 2', '3' => 'Oficina 3']) !!}
            </div>
        	<div class="form-group col-md-3 col-sm-3 col-xs-12">
        		{!! Field::text('fecha_captura') !!}
        	</div>
        </div>
        <div class="col-md-12">
            <div class="form-group col-md-3 col-sm-3 col-xs-12">
                {!! Field::text('rfc') !!}
            </div>
            <div class="form-group col-md-3 col-sm-3 col-xs-12">
                {!! Field::text('nombre') !!}
            </div>
            <div class="form-group col-md-3 col-sm-3 col-xs-12">
                {!! Field::text('apellido_paterno') !!}
            </div>
            <div class="form-group col-md-3 col-sm-3 col-xs-12">
                {!! Field::text('apellido_materno') !!}
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group col-md-3 col-sm-3 col-xs-12">
                {!! Field::text('poliza') !!}
            </div>
            <div class="form-group col-md-3 col-sm-3 col-xs-12">
                {!! Field::select('plan', ['ML99', 'PT20', 'PM20']) !!}
            </div>
            <div class="form-group col-md-3 col-sm-3 col-xs-12">
                {!! Field::select('servicio', ['2000', '2100', '2101', '2102', '2103', '2104']) !!}
            </div>
            <div class="form-group col-md-3 col-sm-3 col-xs-12">
                {!! Field::text('descripcion') !!}
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group col-md-3 col-sm-3 col-xs-12">
                {!! Field::select('agente',['agente 1', 'agente 2', 'agente 3']) !!}
            </div>
            <div class="form-group col-md-3 col-sm-3 col-xs-12">
                {!! Field::select('auxiliar', ['auxiliar 1', 'auxiliar 2', 'auxiliar 3']) !!}
            </div>
        </div>
        <div class="col-md-12">
            <h3>Información de contacto</h3>
            <div class="form-group col-md-3 col-sm-3 col-xs-12">
                {!! Field::text('telefono_trabajo') !!}
            </div>
            <div class="form-group col-md-3 col-sm-3 col-xs-12">
                {!! Field::text('telefono_particular') !!}
            </div>
            <div class="form-group col-md-3 col-sm-3 col-xs-12">
                {!! Field::text('celular') !!}
            </div>
            <div class="form-group col-md-3 col-sm-3 col-xs-12">
                {!! Field::text('email') !!}
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group col-md-3 col-sm-3 col-xs-12">
                {!! Field::text('pais', ['value' => 'Mexico', 'disabled']) !!}
            </div>
            <div class="form-group col-md-3 col-sm-3 col-xs-12">
                {!! Field::text('estado') !!}
            </div>
            <div class="form-group col-md-3 col-sm-3 col-xs-12">
                {!! Field::text('municipio') !!}
            </div>
            <div class="form-group col-md-3 col-sm-3 col-xs-12">
                {!! Field::text('localidad_colonia') !!}
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group col-md-3 col-sm-3 col-xs-12">
                {!! Field::text('calle') !!}
            </div>
            <div class="form-group col-md-2 col-sm-2 col-xs-12">
                {!! Field::text('numero_exterior') !!}
            </div>
            <div class="form-group col-md-2 col-sm-2 col-xs-12">
                {!! Field::text('numero_interior') !!}
            </div>
            <div class="form-group col-md-2 col-sm-3 col-xs-12">
                {!! Field::text('codigo_postal') !!}
            </div>
        </div>
        <div class="row">
        	<div class="form-group col-md-4 col-md-offset-4">
        		<input type="submit" id="guardar" value="Guardar" class="btn btn-info form-control">
        	</div>
        </div>
    </div>

    {!! Form::close() !!}

@endsection

@section('scripts')

    {!! Html::script('assets/js/produccion.js') !!}

@endsection('scripts')
