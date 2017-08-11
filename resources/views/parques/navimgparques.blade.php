@extends('layouts.admin')
@section('content')
<script src="../public/js/solonumeros.js"></script>

{!!Form::open(['route'=>['parques.update',$parques->id],'method'=>'PATCH', 'files' => true])!!}

<div class="container" style="margin-top: 60px;">
	<ul class="nav nav-tabs nav-justified">
		<li class="active"><a href="#editar" data-toggle="tab">Editar Hotel</a></li>
		<li><a href="#textos" data-toggle="tab">Cambiar textos</a></li>
		<li><a href="#imagenes" data-toggle="tab">Cambiar Imágenes</a></li>
	</ul>
	<div class="tab-content">
		<div class="tab-pane fade in active" id="editar">		
@include('parques.update')
	
     
				{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
				{!!Form::close()!!}
		</div>
		
		
		<div class="tab-pane fade" id="textos">	
				
        			@include('parques.textos')
		
		</div>
			<div class="tab-pane fade" id="imagenes">	
				
        			@include('parques.images')
		
		</div>
	</div>
</div>
<br>
<br>

@endsection
