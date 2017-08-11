@extends('layouts.admin')
    @section('content')

  @include('alerts.success')
<br>
<br>

<table class="table table-hover">
<thead>
      <th>Modo de uso</th>
		</thead>
	<tbody>
        @foreach($modo as $modo)
        <tr>
            <td>{!! $modo->modo !!}</td> 
            <td>
              <a href="{{route('adminmodo.edit', $modo->id)}}" class="btn btn-warning">Editar</a>
          </td>
        </tr>
		@endforeach
	</tbody>
</table>
    @endsection





 


