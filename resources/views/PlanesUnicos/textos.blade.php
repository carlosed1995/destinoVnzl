



@foreach($texto as $text)

{!!Form::open(['route'=>['texto.update',$text->id],'method'=>'PATCH', 'files' => true])!!}

<div class="form-group">
<input type="text" value="{!!$text->titulo1!!}" name="titulo1" placeholder="Título del texto" id="" class="form-control" >
 {!!Form::textarea('txttitulo1',$text->texto1,['class'=>'form-control ckeditor','placeholder'=>'terminos y condiciones'])!!}
</div>

<br>
<br>

<div class="form-group">
<input type="text" value="{!!$text->titulo2!!}"  name="titulo2" placeholder="Título del texto" id="" class="form-control" >
 {!!Form::textarea('txttitulo2',$text->texto2,['class'=>'form-control ckeditor','placeholder'=>'terminos y condiciones'])!!}
</div>


    <div class="form-group">
<h3>
  Estatus del texto 
    </h3> 

	<div class="box-tools">
		  @if($text->act2)   
	  <div class="btn-group">
     <td>
			 <a href="{{route('texto.show', $text->id)}}" class="btn btn-lg btn-success">ON</a>
       <a href="{{route('texto.edit', $text->id)}}" onclick="return confirm('¿Seguro que deseas desactivar el texto?')" class="btn btn-lg btn-default">OFF</a></td>
    </div>
	@else
    <div class="btn-group">
    <td>
	    <a href="{{route('texto.show', $text->id)}}" onclick="return confirm('¿Seguro que sedeas activar el texto?')" class="btn btn-lg btn-default">ON</a>
      <a href="{{route('texto.edit', $text->id)}}" class="btn btn-lg btn-danger">OFF</a></td>
    </div>
 @endif
	</div>
          </div>
<br>
 


  <div class="form-group">
<input type="text" value="{!!$text->titulo3!!}" name="titulo3" placeholder="Título del texto" id="" class="form-control" >
 {!!Form::textarea('txttitulo3',$text->texto3,['class'=>'form-control ckeditor','placeholder'=>'terminos y condiciones'])!!}
</div>

  <br>
  <div class="form-group">
<h3>
  Estatus del texto 
    </h3> 

	<div class="box-tools">
		  @if($text->act3)   
	  <div class="btn-group">
     <td>
			 <a href="{{route('destiact.show', $text->id)}}" class="btn btn-lg btn-success">ON</a>
       <a href="{{route('destiact.edit', $text->id)}}" onclick="return confirm('¿Seguro que deseas desactivar el texto?')" class="btn btn-lg btn-default">OFF</a></td>
    </div>
	@else
    <div class="btn-group">
    <td>
	    <a href="{{route('destiact.show', $text->id)}}" onclick="return confirm('¿Seguro que sedeas activar el texto?')" class="btn btn-lg btn-default">ON</a>
      <a href="{{route('destiact.edit', $text->id)}}" class="btn btn-lg btn-danger">OFF</a></td>
    </div>
 @endif
	</div>
          </div>

  
  
  
  <br>
<br>


  <div class="form-group">
  	<input type="text" value="{!!$text->titulo4!!}" name="titulo4" placeholder="Título del texto" id="" class="form-control" >
 {!!Form::textarea('txttitulo4',$text->texto4,['class'=>'form-control ckeditor','placeholder'=>'terminos y condiciones'])!!}
</div>

    <br>
    <br>
  <div class="form-group">
<h3>
  Estatus del texto 
    </h3> 

	<div class="box-tools">
		  @if($text->act4)   
	  <div class="btn-group">
     <td>
			 <a href="{{route('destiact4.show', $text->id)}}" class="btn btn-lg btn-success">ON</a>
       <a href="{{route('destiact4.edit', $text->id)}}" onclick="return confirm('¿Seguro que deseas desactivar el texto?')" class="btn btn-lg btn-default">OFF</a></td>
    </div>
	@else
    <div class="btn-group">
    <td>
	    <a href="{{route('destiact4.show', $text->id)}}" onclick="return confirm('¿Seguro que sedeas activar el texto?')" class="btn btn-lg btn-default">ON</a>
      <a href="{{route('destiact4.edit', $text->id)}}" class="btn btn-lg btn-danger">OFF</a></td>
    </div>
 @endif
	</div>
          </div>
 

			<br>
		
				{!!Form::submit('Actualizar',['class'=>'btn btn-primary col-lg-12'])!!}
			
				{!!Form::close()!!}
			  @endforeach
			
			
			