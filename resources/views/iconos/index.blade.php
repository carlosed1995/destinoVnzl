@extends('layouts.admin')
@section('content')

<!--Buscador  -->
<div class="navbar-form pull-right">
<div class="input-group">
{!! Form::text('name', null, ['class' => 'form-control','id'=>'search', 'placeholder' => 'Buscar servicio', 'aria-describedby' => 'Buscar' ])!!}
  <span class="input-group-addon" id="Buscar"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
</div>
	</div>
<!--Buscador -->

<br>
<br>
<br>



 <div class="box box-primary">
<div class="box-body">
 <div class="table-responsive">
      <table class="table table-hover" id="example1">
		<thead>
			<th>Nombre</th>
			<th>Imagen</th>
			<th></th>
		</thead>
		@foreach($servic as $servi)
				
			<tbody>
				<td>{{$servi->nombre}}</td>
					<td><img width='50' height='50' src="/../public/imagenes/{{$servi->img}}"></td>
			<td></td>
				
  <td>
		<a href="{{route('iconos.show', $servi->id)}}" onclick="return confirm('¿Esta seguro de eliminar este servicio?')" class="btn btn-danger">Eliminar</a>	
	</td>
        <td>
	{!!link_to_route('iconos.edit', $title = 'Editar', $parameters = [$servi->id], $attributes = ['class'=>'btn btn-info'])!!}
	</td>
	

	</tbody>
	@endforeach

	</table>
	 
	 <script type="text/javascript">
	 $('#search').on('keyup', function(){
		 var value = $(this).val();
		 $.ajax({
			 type: 'get',
			 url: "{{URL::to('search')}}",
			 data: "{'search': value}",
			 success:function(data){
				 console.log(data);
			 }
			 
			 
		 });
		 
		 
	 });
		 
		 
	 </script>


{!!$servic->render()!!}
	@endsection