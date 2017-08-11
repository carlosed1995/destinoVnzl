@extends('layouts.admin')
@section('content')

{!!Form::open(['route'=>['restaurantAdmin.update', $rest->id],'method'=>'PATCH', 'files' => true])!!}
<div class="container" style="margin-top: 60px;">
	<ul class="nav nav-tabs nav-justified">
		<li class="active" ><a href="#editar" data-toggle="tab">Editar Restaurante</a></li>
			<li><a href="#texto" data-toggle="tab">Editar Textos</a></li>
		<li><a href="#imagenes" data-toggle="tab">Cambiar Imágenes</a></li>
	</ul>
	<div class="tab-content">
		<div class="tab-pane fade in active" id="editar">
			@include('usuario.forms.naveditrest')
			{!!Form::close()!!}
		</div>
		<div class="tab-pane fade in" id="texto">
			@include('usuario.forms.textos')
		</div>
			<div class="tab-pane fade" id="imagenes">	
				@include('usuario.forms.imgrestedit')
		</div>
	</div>
</div>
<!--Pais estado-->

	
 


@endsection