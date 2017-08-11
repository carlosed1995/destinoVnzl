@extends('layouts.admin')
    @section('content')

  @include('alerts.success')
<br>
<br>

<table class="table table-hover">
<thead>
      <th>Titulo Nro 1</th>
      <th>Titulo Nro 2</th>
      <th>Titulo Nro 3</th>
      <th>Titulo Nro 4</th>
      <th>Editar</th>
		</thead>
	<tbody>
        @foreach($bannersec as $secundario)
        <tr>
            <td>
            	{{$secundario->titulo1}}
            </td> 
                      <td>
            	{{$secundario->titulo2}}
            </td> 
                               <td>
            	{{$secundario->titulo3}}
            </td> 
                               <td>
            	{{$secundario->titulo4}}
            </td> 

            <td>
              <a href="{{route('adminbannersec.edit', $secundario->id)}}" class="btn btn-warning">Editar</a>
          </td>
        </tr>
        @endforeach  
	</tbody>
</table>

    @endsection





 


