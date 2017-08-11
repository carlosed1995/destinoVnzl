@extends('layouts.admin')
@section('content')
{!!Form::open(['route'=>['iconos.update',$servicio->id],'method'=>'PUT', 'files'=>true])!!}
<div class="form-group">
{!!Form::label('txttitulo', 'Titulo del Servicio')!!}
{!!Form::text('txttitulo', $servicio->nombre, ['class'=>'form-control','placeholder'=>'Ingrese el titulo del servicio'])!!}
  </div>

		<label class="control-label">Seleccione icono</label>

<label class="control-label">Select File</label>
<input id="imgx" value="$servicio->img" name="img" type="file" multiple class="file file-loading" data-allowed-file-extensions='["jpg", "png", "jpeg"]'>




{!!Form::submit('Actualizar', ['class'=>'btn btn-primary'])!!}
{!!Form::close()!!}
<script>
  
   $("#imgx").fileinput({
           initialPreviewAsData: true,
            initialPreview: [
                "/../public/imagenes/{{$servicio->img}}",
               
            ],
     
       initialPreviewConfig: [
                {caption: "{{$servicio->img}}", size: 329892, width: "120px", url: "{{$servicio->img}}", key: 1}
            ],
     
        });

</script>



@endsection



