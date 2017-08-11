@extends('layouts.admin')
    @section('content')

  @include('alerts.success')
<br>
<br>

<table class="table table-hover">
<thead>
      <th>Titulo Nro 1</th>
      <th>Titulo Nro 2</th>
      <th>Editar</th>
		</thead>
	<tbody>
        @foreach($banner as $ban)
        <tr>
            <td>
            	{!!$ban->titulo1!!}
            </td> 
                        <td>
            	{!!$ban->titulo2!!}
            </td> 
            <td>
              <a href="{{route('adminbanner.edit', $ban->id)}}" class="btn btn-warning">Editar</a>
          </td>
        </tr>
        @endforeach  
	</tbody>
</table>

    @endsection





 


