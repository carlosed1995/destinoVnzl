@extends('layouts.admin')
@section('content')
<script src="../public/js/solonumeros.js"></script>

{!!Form::open(['route'=>['PlanesUnicos.update',$planes->id],'method'=>'PATCH', 'files' => true])!!}

<div class="container" style="margin-top: 60px;">
	<ul class="nav nav-tabs nav-justified">
		<li class="active"><a href="#editar" data-toggle="tab">Editar Destino</a></li>
		<li><a href="#textos" data-toggle="tab">Cambiar Textos</a></li>
		<li><a href="#imagenes" data-toggle="tab">Cambiar Imágenes</a></li>
	</ul>
	<div class="tab-content">
		<div class="tab-pane fade in active" id="editar">		
@include('PlanesUnicos.update')
	
     
				{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
				{!!Form::close()!!}
		</div>
			<div class="tab-pane fade" id="textos">	
				
        			@include('PlanesUnicos.textos')
		
		</div>
		
		
			<div class="tab-pane fade" id="imagenes">	
				
        			@include('PlanesUnicos.images')
		
		</div>
	</div>
</div>
<br>
<br>

@endsection


 