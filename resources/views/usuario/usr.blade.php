
<div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
                <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Inicio</a></li>
                <li class="active">Hoteles</li>
            </ol>
        </div>
    </div>
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

<div class="register">
        <div class="container">
            <h2>Registro</h2>
                <div class="panel-body">                   
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label  class="col-md-4 control-label">Correo Electrónico</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="email" >

                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-md-4 control-label">Contraseña</label>

                            <div class="col-md-6">
                                <input  type="password" class="form-control" name="password" >

                               
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-md-4 control-label">Confirmar Contraseña</label>

                            <div class="col-md-6">
                                <input id="telefono" class="form-control" type="password">
                            </div>
                        </div>
                        <br>
                        <br>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Nombres</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="txtnombres" >

                        
                            </div>
                        </div>

                        <div class="form-group">
                            <label  class="col-md-4 control-label">Apellidos</label>

                            <div class="col-md-6">
                                <input  type="text" class="form-control" name="txtapellidos" >

                            
                            </div>
                        </div>

                       
                           <div class="form-group" name="genero">
                            <label for="rif" class="col-md-4 control-label">Tipo Documento</label>

                            <div class="col-md-6">
                                {{Form::select('tipodoc', $tipodoc,['id_tipodoc'=>'id_tipodoc'],array('placeholder'=>'Ingrese el tipo de documento','class'=>'form-control','id'=>'tipodoc'))}}

                            </div>
                        </div>


                        <div class="form-group">
                            <label  class="col-md-4 control-label">Cédula / Pasaporte</label>

                            <div class="col-md-6">
                                <input  type="text" class="form-control" name="txtcedula">

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Fecha de Nacimiento</label>

                            <div class="col-md-6">
                                <input id="horario" type="date" class="form-control" name="txtfechanac">

                            
                            </div>
                        </div>

                           <div class="form-group" name="genero">
                            <label for="rif" class="col-md-4 control-label">Género</label>

                            <div class="col-md-6">
                                {{Form::select('genero', $genero,['idGenero'=>'idGenero'],array('placeholder'=>'Ingrese el género','class'=>'form-control','id'=>'genero'))}}

                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-md-4 control-label">Teléfono Local</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="txttellocal">

                            </div>
                        </div>
                         <div class="form-group">
                            <label for="rif" class="col-md-4 control-label">Teléfono Móvil</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="txttelmov">

                            </div>
                        </div>
                         <div class="form-group">
                            <label for="rif" class="col-md-4 control-label">Dirección</label>

                            <div class="col-md-6">
                                <input  type="text" class="form-control" name="txtdireccion">

                            </div>
                        </div>
                     
                        <div class="form-group">
                            <label for="rif" class="col-md-4 control-label">Estado</label>

                            <div class="col-md-6">
            
<label>Estado</label>
<div class="form-group">
	<select name="txtestado" id="id-estado" class="form-control">
			<option value="">Seleccione</option>
			@foreach($estado as $estad)
			<option value="{{$estad->id}}">{{$estad->Nombre}}</option>
			@endforeach
		</select>

</div>




                            </div>
                        </div>
                           <div class="form-group" name="ciudad">
                            <label for="rif" class="col-md-4 control-label">Ciudad</label>

                            <div class="col-md-6">
                            


	<label>Ciudad</label>
	<div class="form-group">
		<select name="txtciudad" id="select-project" class="form-control" required>
				<option>Seleccione</option>
			<option value="">Seleccione</option>

		</select>	
		
	</div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Register
                                </button>
                            </div>
                        </div>                  
                </div>
            </div>
        </div>



<!--Estado y ciudades-->
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




  

