@extends('layouts.admin')
@section('content')
<script src="../public/js/solonumeros.js"></script>
{!!Form::open(['route'=>['detallehotel.update', $pruebahoteles->id],'id'=>'registroForm','method'=>'PATCH', 'files' => true])!!}
<div class="container" style="margin-top: 60px;">
	<ul class="nav nav-tabs nav-justified">
		<li class="active"><a href="#editar" data-toggle="tab">Editar Hotel</a></li>
		<li><a href="#textos" data-toggle="tab">Editar Textos</a></li>
		<li><a href="#imagenes" data-toggle="tab">Cambiar Imágenes</a></li>
	</ul>
	<div class="tab-content">
		<div class="tab-pane fade in active" id="editar">
			@include('hoteles.navmodificarservicios')
     
				{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
				{!!Form::close()!!}
		</div>
		
		
			<div class="tab-pane fade in active" id="textos">
			@include('hoteles.textos')
     
		</div>
		
		
		
		
			<div class="tab-pane fade" id="imagenes">	
				@include('hoteles.image')
				
		</div>
	</div> 
</div>
<br>
<br>

	
		


<!--<div class="form-group">
  {!!Form::label('terminosCond','Terminos y Condiciones')!!}
{!!Form::text('terminosCond', $pruebahoteles->terminosCond, ['class' => 'form-control'])!!}     
</div>-->
@endsection








