@extends('layouts.admin')
    @section('content')

  @include('alerts.success')
<br>
<br>

<table class="table table-hover">
<thead>
      <th>Terminos y Condiciones</th>
		</thead>
	<tbody>
        @foreach($terminos as $termino)
        <tr>
            <td>{!! $termino->terminoscond !!}</td> 
            <td>
              <a href="{{route('adminterminos.edit', $termino->id)}}" class="btn btn-warning">Editar</a>
          </td>
        </tr>
        @endforeach  
	</tbody>
</table>

    @endsection





 


