
<div class="form-group">
		{!!Form::label('nombre','Nombre:')!!}
		{!!Form::text('txtnombre',$hotl->nombre,['class'=>'form-control','disabled','placeholder'=>'Ingresa el Nombre del usuario'])!!}
</div>

<div class="form-group">
		{!!Form::label('direccion','Dirección:')!!}
		{!!Form::text('txtdireccion',$hotl->direccion,['class'=>'form-control','disabled','placeholder'=>'Ingresa el Nombre del usuario'])!!}
</div>
 <div class="form-group">
      {!!Form::label('url', 'Página Web:')!!}
     {!!Form::text('txturl', $hotl->url,['class' =>'form-control','disabled'])!!}
       
  </div> 

<div class="form-group">
   
 {!!Form::label('horario','Horario de atención')!!}
{!!Form::text('txthorario', $hotl->horario, ['class' => 'form-control','disabled'])!!}
  
</div>


<div class="form-group">
  {!!Form::label('descuento','Descuentos')!!}
{!!Form::text('txtdescuento', $hotl->descuentos, ['class' => 'form-control','disabled'])!!}
    
</div>
<div class="form-group">
  {!!Form::label('rif','Rif Restaurant')!!}
{!!Form::text('txtrif', $hotl->rif, ['class' => 'form-control','disabled'])!!}
</div>   

	<br>
	<br>
	<br>

<div class="action">
<button id='submitCreate' type="button" value="Reservar" class="btn btn-info btn-lg mostrarModal" class="button" id='{{$hotl->id}}' data-title="Edit" data-id="{{$hotl->id}}"  data-toggle="modal" type="button">Agregar imagen</button>
 </div>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"> <span aria-hidden="true" class="">×</span><span class="sr-only">Cerrar</span></button>
                        <h4 class="modal-title" id="myModalLabel">Cargar Archivos</h4>
                    </div>
                    <div class="modal-body">
                     {!!Form::open(['route' => 'subirimagenesHotl.store', 'method' => 'post', 'files' => true])!!}
  													@include('alerts.success') 
                         <input type="hidden" id="id_imagen" value="" name="id_imagen"> 
                  
																							<script>
window.onload = function(){
	var btn = document.getElementById('btn');
	btn.onclick = function(){
		var imagen = document.getElementById('img').file;
		 if(imagen.length == 0){
			 alert("Seleccione una Imagen");
		 }else{
			 if(imagen.type != "image/png" && imagen.type != "image/jpg" && imagen.type != "image/jpg" && "image/gif" ){
				 alert('Ingrese un formato valido de imagen con extención png, jpg, jpg, gif');
				 return exit;
			 }
			 
		 }
	}
	
}



</script>
											
											<div class="form-group">													
														
											<label class="control-label">Seleccione imagenes</label>
											<input id="img" name="img[]" type="file" class="file" multiple class="file file-loading" data-allowed-file-extensions='["jpg", "png", "jpeg"]'>

												</div>
                    {!!Form::submit('Subir Imagenes',['class'=>'btn btn-primary', 'id' => 'btn'])!!}
    							{!!Form::close()!!}
                    </div>
										</div>
					</div>
</div>