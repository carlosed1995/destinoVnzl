@extends('layouts.admin')
@section('content')
@include('alerts.success')

{!!Form::open(['route' => 'detallehotel.store', 'method' => 'post', 'class'=>'form-group', 'id'=>'crearhotel', 'files' => true])!!} 
	<script src="../public/js/validacionhotel.js"></script>

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/css/bootstrap-select.min.css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/js/bootstrap-select.min.js"></script>



<div class="form-group">
	<div class="nombre">
<label for="nombre" class="col-md-4 control-label">Nombre del Hotel</label>
<input id="nombre" type="text" class="form-control" placeholder="Nombre del Hotel" name="nombre" value="{{ old('nombres') }}" required>
<span class="help-block"></span>
	</div>

</div>
<div class="form-group">
	<div class="direccion">
	<label for="direccion" class="col-md-4 control-label">Direccion</label>
	<input id="direccion" type="text" class="form-control" placeholder="Direccion" name="direccion" value="{{ old('direccion') }}" required>
<span class="help-block"></span>
	</div>

</div>
<div class="form-group">
	<div class="telefono">
		
<label for="telefono" class="col-md-4 control-label">Telefono</label>
	<input id="telefono" type="text" class="form-control" placeholder="Telefono " name="telefono" value="{{ old('telefono') }}" minlength="11" maxlength="11"  required>
	<span class="help-block"></span>
	</div>
	</div>
<div class="form-group">
	<label for="telefono" class="col-md-4 control-label">Telefono (Opcional)</label>
	<input id="telefonoopcional" type="text" class="form-control" placeholder="Telefono (Opcional)" name="telefono2" value="{{ old('telefono (Opcional)') }}"  minlength="11" maxlength="11">
</div>


<br>


<div class="form-group">
<input type="text" name="titulo1" placeholder="Título del texto" id="" class="form-control" required>
 {!!Form::textarea('txttitulo1',null,['class'=>'form-control ckeditor','placeholder'=>'terminos y condiciones'])!!}
</div>

<br>
<br>
<div class="form-group">
<input type="text" name="titulo2" placeholder="Título del texto" id="" class="form-control" >
 {!!Form::textarea('txttitulo2',null,['class'=>'form-control ckeditor','placeholder'=>'terminos y condiciones'])!!}
</div>
    <div class="form-group">
<h3>
  Estatus del texto 
    </h3> 


                 <div class="checkbox">
         <label>
<input id="micheckbox" name="micheckbox" type="checkbox" value="1" name="chekk" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger"> 

                </label>
             </div>
          </div>
<br>
 
  

<button id="alternar" class="btn btn-default" type="button">Agregar Nuevo</button>
<br>
<br>

<script>
  $(document).ready(function(){ 
   $('#alternar').on('click',function(){
      $('#txt1').toggle('slow');
   });
});
</script>

<script>
  $(document).ready(function(){ 
   $('#alternar2').on('click',function(){
      $('#txt2').toggle('slow');
   });
});
</script>


<div id="txt1" style="display:none;">
    
  <div class="form-group">
<input type="text" name="titulo3" placeholder="Título del texto" id="" class="form-control" >
 {!!Form::textarea('txttitulo3',null,['class'=>'form-control ckeditor','placeholder'=>'terminos y condiciones'])!!}
</div>
  
  <br>
  <div class="form-group">
<h3>
  Estatus del texto
    </h3> 


     <div class="checkbox">
         <label>
<input id="micheckbox2" name="micheckbox2" type="checkbox" value="1" name="chekk" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger"> 


                </label>
             </div>
          </div>

  
  
  
  <br>
<br>

<button id="alternar2" class="btn btn-default" type="button">Agregar Nuevo</button>
<br>
<br>
  <div id="txt2" style="display:none;">
  <div class="form-group">
<input type="text" name="titulo4" placeholder="Título del texto" id="" class="form-control" >
 {!!Form::textarea('txttitulo4',null,['class'=>'form-control ckeditor','placeholder'=>'terminos y condiciones'])!!}
</div>
    <br>
    <br>
    <div class="form-group">
<h3>
  Estatus del texto 
    </h3> 


     <div class="checkbox">
         <label>
<input id="micheckbox3" name="micheckbox3" type="checkbox" value="1" name="chekk" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger"> 


                </label>
                </div>
         
          </div>
  
  </div>
</div>

<!--<div class="form-group">
	<label for="url" class="col-md-4 control-label">Página Web</label>
	<input id="url" type="text" class="form-control" placeholder="Pagina Web" name="url" value="{{ old('url') }}">
</div>
<div class="form-group{{ $errors->has('correo') ? ' has-error' : '' }}">
	<label for="correo" class="col-md-4 control-label">Correo</label>
	<input id="correo" type="email" class="form-control" placeholder="Correo" name="correo" value="{{ old('correo') }}">
</div>-->
<!--<div class="form-group{{ $errors->has('terminosCond') ? ' has-error' : '' }}">
													<label for="correo" class="col-md-4 control-label">Terminos y Condiciones</label>
                                <input id="terminosCond" type="text" class="form-control" placeholder="Terminos y Condiciones" name="terminosCond" value="{{ old('terminosCond') }}" >
                        </div>-->
<!--<div class="form-group{{ $errors->has('horario') ? ' has-error' : '' }}">
	<label for="horario" class="col-md-4 control-label">Horario</label>
	<input id="horario" type="text" class="form-control" placeholder="A partir de las 8:00 Am Hasta las 9:30 Pm" name="horario">
</div>-->

<div class="form-group{{ $errors->has('descuento') ? ' has-error' : '' }}">
	<label for="descuento" class="col-md-4 control-label">Descuento</label>
	<input id="descuento-confirm" type="text" class="form-control" placeholder="(Ejemplo) 50%" name="descuento" required>
</div>

<div class="form-group has-feedback">
    <label>Estrellas del Hotel</label>
        <select id="estrellas" type="set" class="form-control" name="estrellas">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
</div>



<label>Servicio</label>
<div class="form-group">
	<div id="idservici">
	<select data-placeholder="Seleccione" id="idservicio" name="id-servicio[]" multiple class="form-control" required>
			@foreach($servicio as $servic)
			<option value="{{$servic->id}}">{{$servic->nombre}}</option>
			@endforeach
		</select>
	</div>
</div>

<script>
	$("#idservicio").chosen({

	});
</script>
<script>
</script>
<!-- prueba nuevos tags-->
<!--	<div class="form-group">
																	<label for="tags" class="control-label">Tags</label>
																	<div class="bs-example">
																					<input type="text" name="etiquetas" value="" data-role="tagsinput" />
																				</div>
																	</div>-->
<!--nuevos tagas-->
<!--INICIO DE LOS TAGS 
																		<div class="example example_markup">
																				<h3>Etiquetas</h3>																				
																				<div class="bs-example">
																					<input type="text" name="etiquetas" value="" data-role="tagsinput" />
																				</div>
																				<div class="accordion">
																					<div class="accordion-group">
																						<div class="accordion-heading">
																						</div>
																						<div id="accordion_example_markup" class="accordion-body collapse">
																							<div class="accordion-inner highlight">
																								<pre><code data-language="html">&lt;input type=&quot;text&quot; value=&quot; &quot; data-role=&quot;tagsinput&quot; /&gt;</code></pre>
																							</div>
																						</div>
																					</div>
																				</div>																				 
																			</div>
											<!--FIN DE LOS TAGS-->
<div class="form-group{{ $errors->has('rif') ? ' has-error' : '' }}">
	<label for="rif" class="col-md-4 control-label">Rif del Hotel</label>
	<input id="rif" type="text" class="form-control" placeholder="Rif del establecimiento(opcional)" name="rif">
</div>
<br>


<br>

<div align="center">
<h2>Redes Sociales</h2>
</div>
<div class="form-group">

		
<label for="" class="col-md-4 control-label">Facebook</label>
	<input id="" type="text" class="form-control" placeholder="Facebook " name="facebook" >
	<span class="help-block"></span>

	</div>
	
	
	<div class="form-group">

		
<label for="" class="col-md-4 control-label">Instagram</label>
	<input id="" type="text" class="form-control" placeholder="Instagram" name="instagram" >
	<span class="help-block"></span>

	</div>
	
	
	
		
	<div class="form-group">

		
<label for="" class="col-md-4 control-label">Twitter</label>
	<input id="" type="text" class="form-control" placeholder="Twitter" name="twitter" >
	<span class="help-block"></span>

	</div>
		
		
			<div class="form-group">

		
<label for="" class="col-md-4 control-label">Google+</label>
	<input id="" type="text" class="form-control" placeholder="google" name="google" >
	<span class="help-block"></span>

	</div>
	
	
		<div class="form-group">

		
<label for="" class="col-md-4 control-label">Youtube</label>
	<input id="" type="text" class="form-control" placeholder="youtube" name="youtube" >
	<span class="help-block"></span>

	</div>

	<br><br>
	


<!-- ESTAAAAAAAADOOOOOOOOOSSSSSSSS VIEJOS -->
<!-- <div class="form-group  {{ $errors->has('rif') ? ' has-error' : '' }}" name="ciudad">
                            <label for="rif" class="col-md-4 control-label">Ciudad</label>
                                {{Form::select('ciudad', $ciudad,['id_ciudad'=>'id_ciudad'],array('placeholder'=>'Ingrese la Ciudad','class'=>'form-control','id'=>'ciudad'))}}
                        </div>
                        <div class="form-group  {{ $errors->has('estado') ? ' has-error' : '' }}" name="estado">
                            <label for="rif" class="col-md-4 control-label">Estado</label>
                                {{Form::select('estado', $estado,['id_estado'=>'id_estado'],array('placeholder'=>'Ingrese el Estado','class'=>'form-control','id'=>'estado'))}}
                        </div>-->
<!--ESTADOSSSSSSSSSSS  VIEJOSSSSSSSSSSSSSSS -->

<label>Pais</label>
<div class="form-group">
	<select name="txtpais" id="txtpais" class="form-control" required>
			<option value="">Seleccione</option>
			@foreach($pais as $ps)
			<option value="{{$ps->id}}">{{$ps->Nombre}}</option>
			@endforeach
		</select>

</div>


<label>Estado</label>
<div class="form-group">
	<select name="txtestado" id="id-estado" class="form-control" required>
			<option value="">Seleccione</option>
			@foreach($estado as $estad)
			<option value="{{$estad->id}}">{{$estad->Nombre}}</option>
			@endforeach
		</select>

</div>



<label>Ciudad</label>
<div class="form-group">
	<select name="txtciudad" id="select-project" class="form-control" required>
			<option value="">Seleccione</option>
		</select>

</div>


<label>Zona</label>
<div class="form-group">
	<select name="txtzona" id="select-level" class="form-control" required>
			<option>Seleccione</option>
			<option value="">Seleccione</option>
		</select>
</div>

<div class="form-group  {{ $errors->has('categoria') ? ' has-error' : '' }}" name="categoria">
	<label for="rif" class="col-md-4 control-label">Categoria</label> {{Form::select('categoria', $categoria,['idCategoria'=>'idCategoria'],array('placeholder'=>'Ingrese la categoria','class'=>'form-control','id'=>'categoria', 'required'))}}
</div>


<script>
</script>

<div class="form-group">
	<label>Imagen Principal</label>
	<input id="img" name="img" type="file" class="file file-loading" data-allowed-file-extensions='["jpg", "png", "jpeg"]' required>
</div>

<script>
	$(function() {

		$('#select-project').on('change', onSelectEstados);
		//	$('select-level');

	});

	function onSelectEstados() {
		var ides = $(this).val();

		//ajazzz


		$.get('/proyecto/' + ides + '/nombre', function(data) {
			var htmlSlec = '<option value="">Seleccione</option>';
			for (var i = 0; i < data.length; i++) {
				htmlSlec += '<option value="' + data[i].id + '">' + data[i].Nombre + '</option>';
				$('#select-level').html(htmlSlec);

			}

		});


	}
</script>
<!-- ciudades zpnas-->

<script>
	$(function() {

		$('#id-estado').on('change', onSelectEstadosk);
		//	$('select-level');

	});

	function onSelectEstadosk() {
		var idk = $(this).val();

		//ajazzz


		$.get('/proyecto1/' + idk + '/nombre', function(data) {
			var htmlSleck = '<option value="">Seleccione</option>';
			for (var i = 0; i < data.length; i++) {
				htmlSleck += '<option value="' + data[i].id + '">' + data[i].Nombre + '</option>';
				$('#select-project').html(htmlSleck);

			}

		});


	}
</script>




<div class="form-group">
	{!!Form::submit('Registrar',['class'=>'btn btn-primary', 'id'=>'btn'])!!}
</div>
@section('scripts')

@endsection {!!Form::close()!!} @endsection