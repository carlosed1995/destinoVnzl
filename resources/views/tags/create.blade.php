@extends('layouts.admin')
    @section('content')

  {!!Form::open(['route' => 'tags.store', 'method' => 'post', 'files' => true])!!}
  @include('alerts.success')
<br>
      <div class="form-group">
              {!! Form::label('name', 'Nombre') !!}
              {!!Form::text('name', null, ['class'=> 'form-control', 'placeholder' => 'Nombre de la etiqueta', 'required' ])!!}
      </div>
<div class="form-group">
  	<select name="txtselect" id="id-servicio" class="form-control" required>
			<option value="">Seleccione</option>
			@foreach($tags as $tag)
			<option value="{{$tag->id}}">{{$tag->name}}</option>
			@endforeach
		</select>	

</div>

	


       <div class="form-group">
              {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
      </div>


<script>
	

$("#id-servicio").chosen({disable_search_threshold: 10});
	

</script>


 
    {!!Form::close()!!}

    @endsection