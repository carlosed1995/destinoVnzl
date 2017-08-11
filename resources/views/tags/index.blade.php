@extends('layouts.admin')
    @section('content')

  @include('alerts.success')
<br>
<br>
{!!Form::open(['route' => 'tags.index', 'method' => 'get', 'class' => 'navbar-form pull-right'])!!}
<div class="input-group">
 
  {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar Etiqueta', 'aria-describedby' => 'Buscar' ])!!}
  <span class="input-group-addon" id="Buscar"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
</div>
{!!Form::close() !!}
<table class="table table-striped">
		<thead>
			<th>ID</th>
      <th>Nombre</th>
      <th>Accion</th>
		</thead>
			<tbody>
        @foreach($tags as $tag)
        <tr>
            <td>{{$tag->id}}</td>
            <td>{{$tag->name}}</td> 
            <td>
              <a href="{{route('tags.edit', $tag->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true" ></span></a>
          </td>
        </tr>
        @endforeach              
			</tbody>		
	</table>
 
<div class="text-center">
  {!! $tags->render()!!}
</div>
 

    @endsection