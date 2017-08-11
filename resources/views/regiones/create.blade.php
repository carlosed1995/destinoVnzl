@extends('layouts.admin')
@section('content')

{!!Form::open(['route' => 'regiones.store', 'method' => 'post', 'files' => true])!!}
  											

<div class="form-group">
 <label>Nombre de Región</label>
			<input type="text" name="txtnombre" placeholder="Ingrese nombre región " id="" class="form-control" >
</div>
		<div class="form-group">



<!--<div class="form-group">
			<label>Sugerencias</label>
			<input type="text" name="txtsugerencia" placeholder="Ingrese sugerencia del chef" id="" class="form-control" >

</div>-->
			
      <label>Categoria</label>
<div class="form-group">
	<div id="">
    
   
	<select id="tablaent" value="seleccione" name="txttablaent" class="form-control" required>
 @foreach($tablaent as $tabla)
			<option value="{{$tabla->id}}">{{$tabla->nombre}}</option>
  @endforeach
		</select>
  
	</div>
</div>
      
      
      
      
      
      

<label>Estados</label>
<div class="form-group">
	
	<select data-placeholder="Seleccione" id="estados"  name="estados[]"  class="form-control" required>
		<option value="0">Seleccione</option>	
    @foreach($estado as $estad)
			<option value="{{$estad->id}}">{{$estad->Nombre}}</option>
			@endforeach
		</select>

</div>
			
			
					<div class="row">
    <div class="col-xs-5">
        <select name="from[]" id="ciud" class="js-multiselect form-control" size="8" multiple="multiple">
        </select>
    </div>
    
    <div class="col-xs-2">
        <button type="button" id="js_right_All_1" class="btn btn-block"><i class="glyphicon glyphicon-forward"></i></button>
        <button type="button" id="js_right_Selected_1" class="btn btn-block"><i class="glyphicon glyphicon-chevron-right"></i></button>
        <button type="button" id="js_left_Selected_1" class="btn btn-block"><i class="glyphicon glyphicon-chevron-left"></i></button>
        <button type="button" id="js_left_All_1" class="btn btn-block"><i class="glyphicon glyphicon-backward"></i></button>
    </div>
    
    <div class="col-xs-5">
        <select name="to[]" id="selecionado" class="form-control" size="8" multiple="multiple">
			
			
			</select>
    </div>
</div>
			
<script type="text/javascript">
jQuery(document).ready(function($) {
    $('.js-multiselect').multiselect({
        right: '#selecionado',
        rightAll: '#js_right_All_1',
        rightSelected: '#js_right_Selected_1',
        leftSelected: '#js_left_Selected_1',
        leftAll: '#js_left_All_1'
    });
});
</script>
      
			<br>
			<br>

         
      

<script>


 $("#tablaent").chosen({

	});

</script>
    
    
    
    
    
		
	
<div class="form-group">
	<label>Imagen de Región</label>
	<input id="img" name="img" type="file" class="file file-loading" data-allowed-file-extensions='["jpg", "png", "jpeg"]' >

</div>
    
      
    <input id="" type="checkbox" value="1" name="chekk" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger"> 

    
<br>
    <br>
	 <div class="form-group">      
  {!!Form::submit('Registrar',['class'=>'btn btn-info', 'id'=>'btn'])!!}			

</div>
      
      
   
      

<script>
$(function(){
  $('#agregar').click( function(){
                  var lista;
            $('#ciud :selected').each(function(){
               lista+=('<option value="'+$(this).val()+'">'+$(this).text()+'</option>');
            });
	/*	$.post( "/resources/views/regiones/select.php", { name: lista })
  .done(function( data ) {
    $("#pp").html(data);
  });*/
			
	
		$("#selecionado").append(lista);
	$("#selecionado_chosen").chosen().trigger("chosen:updated");
						/* $("#selecionado").trigger("chosen:updated");
						
        $("#selecionado").trigger("liszt:updated");*/
  
                  
  });
   
      
	
  
	$('#estados').click('change', onSelectEstadosk);
//	$('select-level');
	
});
	
	function onSelectEstadosk(){
	var idk =	$(this).val();

		//ajazzz
		
		
		$.get('/proyecto1/'+idk+'/nombre', function(data){
			var htmlSleck = '';
			for(var i=0; i<data.length; i++){
			htmlSleck += '<option value="'+data[i].id+'">'+data[i].Nombre+'</option>';
				$('#ciud').html(htmlSleck);		
			}	
		});
		
	}
	
</script>
			
			
			
	




@endsection



