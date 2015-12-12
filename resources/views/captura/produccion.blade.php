@extends('layout')

@section('content')
	<div class="container">
		<div class="col-md-12 page-header">
			<h1>Producción 	<small> | Captura</small></h1>			
		</div>
        <div class="col-md-12">
            <div class="form-group col-md-3 col-sm-3 col-xs-12">
                {!! Field::select('tipo_negocio', ['1' => 'Nuevo negocio', '2' => 'Incremento', '3' => 'Inclusion']) !!}
            </div>
            <div class="form-group col-md-3 col-sm-3 col-xs-12">
                {!! Field::select('oficina', ['1' => 'Oficina 1', '2' => 'Oficina 2', '3' => 'Oficina 3']) !!}
            </div>
            <div class="form-group col-md-3 col-sm-3 col-xs-12">
                {!! Field::text('numero_poliza') !!}
            </div>
            <div class="form-group col-md-3 col-sm-3 col-xs-12">
                {!! Field::text('numero_solicitud') !!}
            </div>
        </div>
        <div class="col-md-12">
        	<div class="form-group col-md-3 col-sm-3 col-xs-12">
        		{!! Field::text('fecha_captura') !!}
        	</div>
        	<div class="form-group col-md-3 col-sm-3 col-xs-12">
        		{!! Field::text('fecha_emision') !!}
        	</div>
        </div>
        <div class="col-md-12">
            <h3>Datos del solicitante</h3>
            <div class="form-group col-md-3 col-sm-3 col-xs-12">
                {!! Field::text('nombre') !!}
            </div>
            <div class="form-group col-md-3 col-sm-3 col-xs-12">
                {!! Field::text('apellido_paterno') !!}
            </div>
            <div class="form-group col-md-3 col-sm-3 col-xs-12">
                {!! Field::text('apellido_materno') !!}
            </div>
            <div class="form-group col-md-3 col-sm-3 col-xs-12">
                {!! Field::text('rfc') !!}
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group col-md-3 col-sm-3 col-xs-12">
                {!! Field::text('curp') !!}
            </div>
            <div class="form-group col-md-3 col-sm-3 col-xs-12">
                {!! Field::text('fecha_nacimiento') !!}
            </div>
            <div class="form-group col-md-2 col-sm-2 col-xs-12">
                {!! Field::text('edad') !!}
            </div>
            <div class="form-group col-md-2 col-sm-2 col-xs-12">
                {!! Field::text('estatura') !!}
            </div>
            <div class="form-group col-md-32 col-sm-2 col-xs-12">
                {!! Field::text('peso') !!}
            </div>
        </div>
        <div class="col-md-12">
        	<h3>Datos de contacto</h3>
            <div class="form-group col-md-3 col-sm-3 col-xs-12">
                {!! Field::text('celular') !!}
            </div>
            <div class="form-group col-md-3 col-sm-3 col-xs-12">
                {!! Field::text('telefono_particular') !!}
            </div>
            <div class="form-group col-md-3 col-sm-3 col-xs-12">
                {!! Field::text('telefono_trabajo') !!}
            </div>
            <div class="form-group col-md-3 col-sm-3 col-xs-12">
                {!! Field::text('email') !!}
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group col-md-3 col-sm-3 col-xs-12">
                {!! Field::select('dependencia', ['imss', 'sep', 'etc']) !!}
            </div>
            <div class="form-group col-md-3 col-sm-3 col-xs-12">
                {!! Field::text('centro_trabajo') !!}
            </div>
            <div class="form-group col-md-3 col-sm-3 col-xs-12">
                {!! Field::text('ocupacion') !!}
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
            <div class="form-group col-md-3 col-sm-3 col-xs-12">
                {!! Field::text('numero_exterior') !!}
            </div>
            <div class="form-group col-md-3 col-sm-3 col-xs-12">
                {!! Field::text('numero_interior') !!}
            </div>
        </div>
        <div class="col-md-12">
            <h3>Datos del plan</h3>
            <div class="form-group col-md-3 col-sm-3 col-xs-12">
                {!! Field::select('plan', ['ML99', 'PT20', 'PM20']) !!}
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <div class="row form-group">
                    <div class="col-md-1">
                        <p>Coberturas</p>
                    </div>
                    <div class="col-md-3">
                        <p>Benef. solicitados</p>
                    </div>
                </div>                    
                <div class="row form-group">
                    <div class="checkbox col-md-1"><label>{!! Form::checkbox('CMA', 'CMA', null, ['id' => 'cma']); !!} CMA</label></div>
                    <div class="col-md-3"> {!! Field::custom('beneficios_solic[1]', ['class' => 'beneficios_solic col-md-3', 'disabled', 'ben' => 'cma']) !!} </div>
                </div>                
                <div class="row form-group">
                    <div class="checkbox col-md-1"><label>{!! Form::checkbox('TIBA', 'TIBA', null, ['id' => 'tiba']) !!} TIBA  </label></div>
                    <div class="col-md-3"> {!! Field::custom('beneficios_solic[2]', ['class' => 'beneficios_solic col-md-3', 'disabled', 'ben' => 'tiba']) !!} </div>
                </div>                    
                <div class="row form-group">
                    <div class="checkbox col-md-1"><label>{!! Form::checkbox('CII', 'CII', null, ['id' => 'cii']) !!} CII  </label></div>
                    <div class="col-md-3"> {!! Field::custom('beneficios_solic[3]', ['class' => 'beneficios_solic col-md-3', 'disabled', 'ben' => 'cii']) !!} </div>
                </div>                    
                <div class="row form-group">
                    <div class="checkbox col-md-1"><label>{!! Form::checkbox('BAC', 'BAC', null, ['id' => 'bac']) !!} BAC  </label></div>
                    <div class="col-md-3"> {!! Field::custom('beneficios_solic[4]', ['class' => 'beneficios_solic col-md-3', 'disabled', 'ben' => 'bac']) !!} </div>
                </div>                    
                <div class="row form-group">
                    <div class="checkbox col-md-1"><label>{!! Form::checkbox('BCAC1', 'BCAC1', null, ['id' => 'bcac1']) !!} BCAC1  </label></div>
                    <div class="col-md-3"> {!! Field::custom('beneficios_solic[5]', ['class' => 'beneficios_solic col-md-3', 'disabled', 'ben' => 'bcac1']) !!} </div>
                </div>                
                <div class="row form-group">
                    <div class="checkbox col-md-1"><label>{!! Form::checkbox('BCAC2', 'BCAC2', null, ['id' => 'bcac2']) !!} BCAC2  </label></div>
                    <div class="col-md-3"> {!! Field::custom('beneficios_solic[6]', ['class' => 'beneficios_solic col-md-3', 'disabled', 'ben' => 'bcac2']) !!} </div>
                </div>                    
                <div class="row form-group">
                    <div class="checkbox col-md-1"><label>{!! Form::checkbox('BCAC3', 'BCAC3', null, ['id' => 'bcac3']) !!} BCAC3  </label></div>
                    <div class="col-md-3"> {!! Field::custom('beneficios_solic[7]', ['class' => 'beneficios_solic col-md-3', 'disabled', 'ben' => 'bcac3']) !!} </div>
                </div>                    
                <div class="row form-group">
                    <div class="checkbox col-md-1"><label>{!! Form::checkbox('BCAT', 'BCAT', null, ['id' => 'bcat']) !!} BCAT  </label></div>
                    <div class="col-md-3"> {!! Field::custom('beneficios_solic[8]', ['class' => 'beneficios_solic col-md-3', 'disabled', 'ben' => 'bcat']) !!} </div>
                </div>                
                <div class="row form-group">
                    <div class="checkbox col-md-1"><label>{!! Form::checkbox('BCAY', 'BCAY', null, ['id' => 'bcay']) !!} BCAY  </label></div>
                    <div class="col-md-3"> {!! Field::custom('beneficios_solic[9]', ['class' => 'beneficios_solic col-md-3', 'disabled', 'ben' => 'bcay']) !!} </div>
                </div>                
                <div class="row form-group">
                    <div class="checkbox col-md-1"><label>{!! Form::checkbox('GFA', 'GFA', null, ['id' => 'gfa']) !!} GFA  </label></div>
                    <div class="col-md-3"> {!! Field::custom('beneficios_solic[10]', ['class' => 'beneficios_solic col-md-3', 'disabled', 'ben' => 'gfa']) !!} </div>
                </div>                    
                <div class="row form-group">
                    <div class="checkbox col-md-1"><label>{!! Form::checkbox('GFC', 'GFC', null, ['id' => 'gfc']) !!} GFC  </label></div>
                    <div class="col-md-3"> {!! Field::custom('beneficios_solic[11]', ['class' => 'beneficios_solic col-md-3', 'disabled', 'ben' => 'gfc']) !!} </div>
                </div>                    
                <div class="row form-group">
                    <div class="checkbox col-md-1"><label> <input type="checkbox" id="gfc1"> GFC1  </label></div>
                    <div class="col-md-3"> {!! Field::custom('beneficios_solic[12]', ['class' => 'beneficios_solic col-md-3', 'disabled', 'ben' => 'gfc1']) !!} </div>
                    <div class="col-md-3"> 
                        <div class="radio"> 
                            <label class="radio-inline"> <input type="radio" disabled name="gfc1" value="Basico"> Basico </label> 
                            <label class="radio-inline"> <input type="radio" disabled name="gfc1" value="Extra"> Extra </label> 
                        </div>
                    </div>
                </div>                    
                <div class="row form-group">
                    <div class="checkbox col-md-1"><label> <input type="checkbox" id="gfc2"> GFC2  </label></div>
                    <div class="col-md-3"> {!! Field::custom('beneficios_solic[13]', ['class' => 'beneficios_solic col-md-3', 'disabled', 'ben' => 'gfc2']) !!} </div>
                    <div class="col-md-3"> 
                        <div class="radio"> 
                            <label class="radio-inline"> <input type="radio" disabled name="gfc2" value="Basico"> Basico </label> 
                            <label class="radio-inline"> <input type="radio" disabled name="gfc2" value="Extra"> Extra </label> 
                        </div>
                    </div>
                </div>                    
                <div class="row form-group">
                    <div class="checkbox col-md-1"><label> <input type="checkbox" id="gfc3"> GFC3  </label></div>
                    <div class="col-md-3"> {!! Field::custom('beneficios_solic[14]', ['class' => 'beneficios_solic col-md-3', 'disabled', 'ben' => 'gfc3']) !!} </div>
                    <div class="col-md-3"> 
                        <div class="radio"> 
                            <label class="radio-inline"> <input type="radio" disabled name="gfc3" value="Basico"> Basico </label> 
                            <label class="radio-inline"> <input type="radio" disabled name="gfc3" value="Extra"> Extra </label> 
                        </div>
                    </div>
                </div>                    
                <div class="row form-group">
                    <div class="checkbox col-md-1"><label> <input type="checkbox" id="gfh"> GFH  </label></div>
                    <div class="col-md-3"> {!! Field::custom('beneficios_solic[15]', ['class' => 'beneficios_solic col-md-3', 'disabled', 'ben' => 'gfh']) !!} </div>
                    <div class="col-md-3"> 
                        <div class="radio"> 
                            <label class="radio-inline"> <input type="radio" disabled name="gfh" value="Basico"> Basico </label> 
                            <label class="radio-inline"> <input type="radio" disabled name="gfh" value="Extra"> Extra </label> 
                        </div>
                    </div>
                </div>                    
                <div class="row form-group">
                    <div class="checkbox col-md-1"><label> <input type="checkbox" id="ge"> GE  </label></div>
                    <div class="col-md-3"> {!! Field::custom('beneficios_solic[16]', ['class' => 'beneficios_solic col-md-3', 'disabled', 'ben' => 'ge']) !!} </div>
                    <div class="col-md-3"> 
                        <div class="radio"> 
                            <label class="radio-inline"> <input type="radio" disabled name="ge" value="Basico"> Basico </label> 
                            <label class="radio-inline"> <input type="radio" disabled name="ge" value="Extra"> Extra </label> 
                        </div>
                    </div>
                </div>                
                <div class="checkbox"><label>{!! Form::checkbox('VPT', 'VPT') !!} VPT  </label></div>
                <div class="checkbox"><label>{!! Form::checkbox('VP01', 'VP01') !!} VP01  </label></div>
                <div class="checkbox"><label>{!! Form::checkbox('VP02', 'VP02') !!} VP02  </label></div>
                <div class="checkbox"><label>{!! Form::checkbox('VP03', 'VP03') !!} VP03   </label></div>
                <div class="checkbox"><label>{!! Form::checkbox('VP04', 'VP04') !!} VP04  </label></div>
                <div class="checkbox"><label>{!! Form::checkbox('BIT', 'BIT') !!} BIT  </label></div>
                <div class="checkbox"><label>{!! Form::checkbox('PFT', 'PFT') !!} PFT  </label></div>
                <div class="checkbox"><label>{!! Form::checkbox('DPF6A20', 'DPF6A20') !!} DPF6A20   </label></div>
                <label>{!! Form::checkbox('ET', 'ET') !!} ET  </label>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

    {!! Html::script('assets/js/produccion.js') !!}

@endsection('scripts')
