@extends('layouts.admin')
@section('content')
<script src="../public/js/solonumeros.js"></script>

{!!Form::open(['route'=>['certificados.update',$certificados->id],'method'=>'PATCH', 'files' => true])!!}

<div class="container" style="margin-top: 60px;">
	<ul class="nav nav-tabs nav-justified">
		<li class="active"><a href="#editar" data-toggle="tab">Editar Certificado</a></li>
		<li><a href="#imagenes" data-toggle="tab">Cambiar Imágenes</a></li>
	</ul>
	<div class="tab-content">
		<div class="tab-pane fade in active" id="editar">		
@include('certificados.update')   
 
      	{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
				{!!Form::close()!!}
		</div>
			<div class="tab-pane fade" id="imagenes">	
				
    @include('certificados.images')
		
		</div>
	</div>
</div>
<br>
<br>

@endsection
