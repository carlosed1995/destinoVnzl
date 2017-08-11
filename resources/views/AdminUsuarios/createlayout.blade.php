
<!-- //breadcrumbs -->
<!--- groceries -->
<div class="container">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> {{ trans('adminlte_lang::message.someproblems') }}
                    <br>
                    <br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif @if(Session::has('flash_message'))
                <div class="alert alert-success">
                    {{ Session::get('flash_message') }}
                </div>
                @endif
        </div>
<p class="login-box-msg"> Campos Obligatorios: *</p>

                <div class="panel-body">                   
                        {{ csrf_field() }}
                            <label>Correo Electrónico*</label>
                                <input type="text" class="form-control" name="email" > 
                  
                            <label >Contraseña *</label>                            
                                <input  type="password" class="form-control" name="password" >                               
                                                 
                            <label  >Confirmar Contraseña *</label>                            
                                <input id="password" class="form-control" type="password">
                       
                            <label >Nombres *</label>                           
                                <input type="text" class="form-control" name="txtnombres" > 
                  
                            <label  >Apellidos *</label>                            
                                <input  type="text" class="form-control" name="txtapellidos" >
                  
                           <div  name="genero">
                            <label for="rif" >Tipo Documento *</label>                            
                                {{Form::select('tipodoc', $tipodoc,['id_tipodoc'=>'id_tipodoc'],array('placeholder'=>'Ingrese el tipo de documento','class'=>'form-control','id'=>'tipodoc'))}}
                             
                          </div>                        
                            <label  >Cédula / Pasaporte *</label>                            
                                <input  type="text" class="form-control" name="txtcedula">
                        
                            <label >Fecha de Nacimiento *</label>                            
                                <input id="horario" type="date" class="form-control" name="txtfechanac">
                  
                           <div  name="genero">                             
                            <label for="rif" >Género *</label>                            
                                {{Form::select('genero', $genero,['idGenero'=>'idGenero'],array('placeholder'=>'Ingrese el género','class'=>'form-control','id'=>'genero'))}}  
                           </div>
                        
                            <label  >Teléfono Local</label>                            
                                <input type="text" class="form-control" name="txttellocal">
                  
                            <label for="rif" >Teléfono Móvil *</label>                            
                                <input type="text" class="form-control" name="txttelmov">
                         
                            <label for="rif" >Dirección </label>                            
                                <input  type="text" class="form-control" name="txtdireccion">
                        
                   <label>Estado</label>
<div class="form-group">
	<select name="txtestado" id="id-estado" class="form-control">
			<option value="">Seleccione</option>
			@foreach($estado as $estad)
			<option value="{{$estad->id}}">{{$estad->Nombre}}</option>
			@endforeach
		</select>

</div>
             

                  <label>Ciudad</label>
	<div class="form-group">
		<select name="txtciudad" id="select-project" class="form-control" required>
				<option>Seleccione</option>
			<option value="">Seleccione</option>

		</select>	
		
	</div>
                  
                  <br>
                  <br>

                        <div class="form-group">                            
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Registrar
                                </button>
                        </div>                  
                </div>
            </div>
        </div>

<script>
$(function(){	
	$('#id-estado').on('change', onSelectEstadosk);
//	$('select-level');	
});
	
	function onSelectEstadosk(){
	var idk =	$(this).val();
		//ajazzz		
		$.get('/proyecto1/'+idk+'/nombres', function(data){
			var htmlSleck = '<option value="">Seleccione</option>';
			for(var i=0; i<data.length; i++){
			htmlSleck += '<option value="'+data[i].id+'">'+data[i].Nombre+'</option>';
				$('#select-project').html(htmlSleck);				
			}			
		});	
	}
	</script>

