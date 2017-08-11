@extends('layouts.admin')
    @section('content')

  @include('alerts.success')
<br>
<br>

<table class="table table-hover">
<thead>
      <th>Preguntas Frecuentes</th>
		</thead>
	<tbody>
        @foreach($preguntasfrecuentes as $preguntas)
        <tr>
            <td>{!! $preguntas->preguntas !!}</td> 
            <td>
              <a href="{{route('adminpreguntas.edit', $preguntas->id)}}" class="btn btn-warning">Editar</a>
          </td>
        </tr>
		@endforeach
	</tbody>
</table>
    @endsection





 


