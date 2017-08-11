@extends('layouts.admin')
    @section('content')

  {!!Form::open(['route'=>[ 'adminbannersec.update', $bannersec->id],'method'=>'PATCH', 'files' => true])!!}

<br>

<label>Banner Nro 1</label>


<div class="form-group">
		{!!Form::label('titulo2','Titulo :')!!}
		{!!Form::text('titulo1',$bannersec->titulo1,['class'=>'form-control','placeholder'=>''])!!}
</div>

<div class="form-group">
	<label>Imagen </label>
	<input id="img1" name="img1" type="file" class="file file-loading" data-allowed-file-extensions='["jpg", "png", "jpeg"]' >
</div>

<label>Banner Nro 2</label>


<div class="form-group">
		{!!Form::label('titulo2','Titulo :')!!}
		{!!Form::text('titulo2',$bannersec->titulo2,['class'=>'form-control','placeholder'=>''])!!}
</div>

<div class="form-group">
	<label>Imagen </label>
	<input id="img2" name="img2" type="file" class="file file-loading" data-allowed-file-extensions='["jpg", "png", "jpeg"]' >
</div>

<label>Banner Nro 3</label>


<div class="form-group">
		{!!Form::label('titulo3','Titulo :')!!}
		{!!Form::text('titulo3',$bannersec->titulo3,['class'=>'form-control','placeholder'=>''])!!}
</div>

<div class="form-group">
	<label>Imagen </label>
	<input id="img3" name="img3" type="file" class="file file-loading" data-allowed-file-extensions='["jpg", "png", "jpeg"]' >
</div>

<label>Banner Nro 4</label>


<div class="form-group">
		{!!Form::label('titulo4','Titulo :')!!}
		{!!Form::text('titulo4',$bannersec->titulo4,['class'=>'form-control','placeholder'=>''])!!}
</div>

<div class="form-group">
	<label>Imagen </label>
	<input id="img4" name="img4" type="file" class="file file-loading" data-allowed-file-extensions='["jpg", "png", "jpeg"]' >
</div>


<!--SCRIPTS BANNER IMAGENES--->
<script>
  
   $("#img1").fileinput({
           initialPreviewAsData: true,
            initialPreview: [
                "/../public/imagenes/{{$bannersec->img1}}",               
            ],
     
       initialPreviewConfig: [
                {caption: "{{$bannersec->img1}}", size: 329892, width: "120px",  key: 1}
            ],     
        });
</script>

<script>
  
   $("#img2").fileinput({
           initialPreviewAsData: true,
            initialPreview: [
                "/../public/imagenes/{{$bannersec->img2}}",               
            ],
     
       initialPreviewConfig: [
                {caption: "{{$bannersec->img2}}", size: 329892, width: "120px",  key: 1}
            ],     
        });
</script>

<script>
  
   $("#img3").fileinput({
           initialPreviewAsData: true,
            initialPreview: [
                "/../public/imagenes/{{$bannersec->img3}}",               
            ],
     
       initialPreviewConfig: [
                {caption: "{{$bannersec->img3}}", size: 329892, width: "120px",  key: 1}
            ],     
        });
</script>

<script>
  
   $("#img4").fileinput({
           initialPreviewAsData: true,
            initialPreview: [
                "/../public/imagenes/{{$bannersec->img4}}",               
            ],
     
       initialPreviewConfig: [
                {caption: "{{$bannersec->img4}}", size: 329892, width: "120px",  key: 1}
            ],     
        });
</script>



       <div class="form-group">
              {!!Form::submit('Editar',['class'=>'btn btn-primary'])!!}
      </div>   
    {!!Form::close()!!}

    @endsection