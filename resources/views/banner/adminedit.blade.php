@extends('layouts.admin')
    @section('content')

  {!!Form::open(['route'=>[ 'adminbanner.update', $banner->id],'method'=>'PATCH', 'files' => true])!!}
  @include('alerts.success')
<br>

      <div class="form-group">
      {!!Form::label('titulo1', 'Titulo Nro 1:')!!}
        {!!Form::textarea('titulo1', $banner->titulo1,['class'=>'form-control ckeditor','placeholder'=>'Titulo Nro 1'])!!}
      </div>
            <div class="form-group">
      {!!Form::label('titulo2', 'Titulo Nro :')!!}
        {!!Form::textarea('titulo2', $banner->titulo2,['class'=>'form-control ckeditor','placeholder'=>'Titulo Nro 2'])!!}
      </div>
      
 <div class="form-group">
	<label>Imagen Principal</label>
	<input id="img" name="img" type="file" class="file file-loading" data-allowed-file-extensions='["jpg", "png", "jpeg"]'>
</div>
<script>
  
   $("#img").fileinput({
           initialPreviewAsData: true,
            initialPreview: [
                "/../public/imagenes/{{$banner->img}}",               
            ],
     
       initialPreviewConfig: [
                {caption: "{{$banner->img}}", size: 329892, width: "120px",  key: 1}
            ],     
        });
</script>
       <div class="form-group">
              {!!Form::submit('Editar',['class'=>'btn btn-primary'])!!}
      </div>   
    {!!Form::close()!!}

    @endsection