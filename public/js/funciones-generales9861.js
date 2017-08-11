Number.prototype.formatMoney = function(c, d, t){
	var n = this, 
	c = isNaN(c = Math.abs(c)) ? 2 : c, 
	d = d == undefined ? "." : d, 
	t = t == undefined ? "," : t, 
	s = n < 0 ? "-" : "", 
	i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "", 
	j = (j = i.length) > 3 ? j % 3 : 0;

	return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
};

function isEmail(email){
    var regex = /^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
    return regex.test(email);
}
//-----------------------------------------------------------------------------------------------------------------

function isOnlyLetters(word){
    var regex=/^[a-zA-ZáéíóúÁÉÍÓÚÑñüÜ\s]*$/;
    return regex.test(word);
}
//-----------------------------------------------------------------------------------------------------------------

function isPhone(phone){
	var regex=/^(\(?\d{7}\)?)$/;
   // var regex=/^(\(?\d{4}\)?)([.-])(\d{7})$/;
    return regex.test(phone);
}
//-----------------------------------------------------------------------------------------------------------------

function isCi(ci) {
    var regex = /^[\d]{4,8}$/;
    return regex.test(ci);
}
//-----------------------------------------------------------------------------------------------------------------

function isCreditCard(creditCard) {
    var regex = /^[\d]{15,16}$/;
    return regex.test(creditCard);
}
//-----------------------------------------------------------------------------------------------------------------

function isSecurityCode(cod) {
    var regex = /^[\d]{3,4}$/;
    return regex.test(cod);
}
//-----------------------------------------------------------------------------------------------------------------
function quitAlerts(){
	$(".has-error" ).each(function() {
		$(this).removeClass('has-error');
	});
	$(".has-warning" ).each(function() {
		$(this).removeClass('has-warning');
	});
	
	$(".alert-warning" ).css("display", "none");
	$(".alert-danger" ).css("display", "none");

	$("#error-text-feedback").empty();
	$("#error-text-agregar-hotel").empty();
	$("#error-text").empty();
	$("#warning-text").empty();

}

//-----------------------------------------------------------------------------------------------------------------
function showAlerts2(mensajeError,mensajeWarning,clase){
	//console.log(mensajeError);
	if(mensajeError!=""){
		$("#error-text-"+clase).append(mensajeError);
		$(".alert-danger-"+clase ).slideDown("slow");
	}
		
	if(mensajeWarning!=""){
		$("#warning-text-"+clase).append(mensajeWarning);
		$(".alert-warning-"+clase ).slideDown("slow");
		
	}
}
//-----------------------------------------------------------------------------------------------------------------
function showAlerts(mensajeError,mensajeWarning){

	if(mensajeError!=""){
		$("#error-text").append(mensajeError);
		$(".alert-danger" ).slideDown("slow");
	}
		
	if(mensajeWarning!=""){
		$("#warning-text").append(mensajeWarning);
		$(".alert-warning" ).slideDown("slow");
		
	}
}

//-----------------------------------------------------------------------------------------------------------------

function showAlertsCuenta(mensajeError,mensajeWarning,clase){

	if(mensajeError!=""){
		$("#error-text-"+clase).append(mensajeError);
		$(".alert-danger-"+clase ).slideDown("slow");
	}
		
	if(mensajeWarning!=""){
		$("#warning-text-"+clase).append(mensajeWarning);
		$(".alert-warning-"+clase ).slideDown("slow");
		
	}
}

//-----------------------------------------------------------------------------------------------------------------
function agregarMigajas(response){
	
	var respuesta = $(response);      	
	var migajaClone = respuesta.find(".breadcrumb-clone").clone();
	$(".breadcrumb-container > .container").html(migajaClone);
	respuesta.find(".breadcrumb-clone").remove();
	
	return respuesta;
}
//-----------------------------------------------------------------------------------------------------------------
function validarBuscarHome(){
	var fechaSalida= $('#lodging-landing-begin-date').val();
	var fechaLlegada= $('#lodging-landing-end-date').val();
	var success=true;

	if((fechaLlegada=="" && fechaSalida!="") || (fechaLlegada!="" && fechaSalida=="")){
		success=false;
	}
	
	if(!success){
		showInfoModal("Alerta", "Debes colocar fecha de llegada y fecha de salida.", "", "bad");
		return false;
	}
	
	
}
//-----------------------------------------------------------------------------------------------------------------
function guardarLogin(deDondeVengo){
	
	var urlToSearch=window.location.protocol+"//" +window.location.hostname + "/profiles/comprobarLogin";
	var email="";
	var password="";
	
	quitAlerts();
	
	if(deDondeVengo=="resumen"){
		var email=	$('#emailLoginResumen').val();
		var password= $('#passLoginResumen').val();
	}else if(deDondeVengo=="admin"){
		var email=	$('#emailLoginAdmin').val();
		var password= $('#passLoginAdmin').val();
	}else{
		var email=	$('#emailLogin').val();
		var password= $('#passLogin').val();
	}
	
	var success=true;
	var mensajeError="";
	var mensajeWarning="";
	
	if(email==""){
		mensajeError=mensajeError+"Correo Electrónico (es obligatorio).\n";
		success=false;
		if(deDondeVengo=="resumen"){
			$('#emailLoginResumen').parent().parent().addClass("has-error");
		}
	}else if(!isEmail(email)){
		mensajeWarning=mensajeWarning+"Correo Electrónico (formato incorrecto. Ejem: prueba@gmail.com).\n";
		success=false;
		if(deDondeVengo=="resumen"){
			$('#emailLoginResumen').parent().parent().addClass("has-warning");
		}
	}
	
	if(password==""){
		mensajeError=mensajeError+"Contraseña (es obligatorio).\n";
		success=false;
		if(deDondeVengo=="resumen"){
			$('#passLoginResumen').parent().parent().addClass("has-error");
		}
	}
	
	if(success){
		var parametros = {
		"email" : email,
	    "password" : password,
		};
		
		$('#modal-loader').modal('toggle');
	
		$.ajax({
				data:parametros,
		        url:urlToSearch,
		        type:  'post',
		        success:  function (response) {
		        	$('#modal-loader').modal('hide');
		        	
		        	if(deDondeVengo=="resumen"){
		        		if(response!=0){
		        			// Google Analytics
		        			ga('send','pageview','/login-ajax');
		        			
		        			location.reload();
			        	}else{
			        		showInfoModal("Alerta", "Login no válido", "", "bad");
			        	}
		        	}else if(deDondeVengo=="admin"){
		        		if(response!=0){
		        			window.location = "http://" + window.location.hostname+"/admin/hotels";
		        		}
		        	}else{
		        		if(response==1 || response==2){
	        				// Google Analytics
		        			ga('send','pageview','/login-principal-ajax');
		        			
		        			if((window.location.href.indexOf('http://' + window.location.host + '/profiles/registro') != -1)|| 
		        				(window.location.href.indexOf('http://' + window.location.host + '/cuenta/registro') != -1)||
		        				(window.location.href.indexOf('http://' + window.location.host + '/cuenta/recuperar_contrasena') != -1)||
		        				(window.location.href.indexOf('http://' + window.location.host + '/profiles/recuperarPassword') != -1)) {
							   window.location = "http://" + window.location.hostname;
							}else{
								location.reload();
							}
			        	}else if(response==0){
			        		showInfoModal("Alerta", "Login no válido", "", "bad");
			        	}
		        		
		        	}
		        }
			});
			
	}else{
		if(deDondeVengo=="resumen"){
			showAlerts(mensajeError, mensajeWarning);
		}
	}
}

//-----------------------------------------------------------------------------------------------------------------

function guardarRegistro(deDondeVengo){
	
	quitAlerts();
	
	var urlToSearch=window.location.protocol+"//" + window.location.hostname + "/profiles/guardarRegistro";
	
	var nombre=	$('#nombreRegistro').val();
	var apellido= $('#apellidoRegistro').val();
	var email= $('#emailRegistro').val();
	var password= $('#passRegistro').val();
	var passwordConfirmar= $('#passConfirmarRegistro').val();
	var success=true;
	var mensajeError="";
	var mensajeWarning="";
	
	if(nombre==""){
		mensajeError=mensajeError+"<li>Nombre (es obligatorio).</li>";
		success=false;
		$('#nombreRegistro').parent().addClass("has-error");
	}else if(!isOnlyLetters(nombre)){
		mensajeWarning=mensajeWarning+"<li>Nombre (formato incorrecto. Sólo letras).</li>";
		success=false;
		$('#nombreRegistro').parent().addClass("has-warning");
	}
	
	if(apellido==""){
		mensajeError=mensajeError+"<li>Apellido (es obligatorio).</li>";
		success=false;
		$('#apellidoRegistro').parent().addClass("has-error");
	}else if(!isOnlyLetters(apellido)){
		mensajeWarning=mensajeWarning+"<li>Apellido (formato incorrecto. Sólo letras).</li>";
		success=false;
		$('#apellidoRegistro').parent().addClass("has-warning");
	}
	
	if(email==""){
		mensajeError=mensajeError+"<li>Correo Electrónico (es obligatorio).</li>";
		success=false;
		$('#emailRegistro').parent().addClass("has-error");
	}else if(!isEmail(email)){
		mensajeWarning=mensajeWarning+"<li>Correo Electrónico (formato incorrecto. Ejem: prueba@gmail.com).</li>";
		success=false;
		$('#emailRegistro').parent().addClass("has-warning");
	}
	
	if(password==""){
		mensajeError=mensajeError+"<li>Contraseña (es obligatorio).</li>";
		success=false;
		$('#passRegistro').parent().parent().addClass("has-error");
	}
	
	if(passwordConfirmar==""){
		mensajeError=mensajeError+"<li>Confirmar Contraseña (es obligatorio).</li>";
		success=false;
		$('#passConfirmarRegistro').parent().parent().addClass("has-error");
	}
	
	if(passwordConfirmar!="" && password!="" && password!=passwordConfirmar){
		mensajeWarning=mensajeWarning+"<li>Confirmar contraseña (debe coincidir con la contraseña).</li>";
		success=false;
		$('#passConfirmarRegistro').parent().parent().addClass("has-warning");
	}
	
	if(!$('#aceptoTerminos').is(":checked")){
		mensajeError=mensajeError+"<li>Debe aceptar los términos y condiciones.</li>";
		success=false;
	}
	
	if(success){
		var parametros = {
		"nombre": nombre,
		"apellido": apellido,
		"email" : email,
	    "password" : password
		};
		
		$('#modal-loader').modal('toggle');
		
		$.ajax({
				data:parametros,
		        url:urlToSearch,
		        type:  'post',
		        success:  function (response) {
		        		$('#modal-loader').modal('hide');
		        		if(response==1){
			        		if(deDondeVengo=="resumen"){
		        				// Google Analytics
			        			ga('send','pageview','/registro-ajax');
			        			ga('send', 'event', 'MicroConversion', 'Registration', 'Resumen');
			        			
			        			location.reload();
			        		}else{
		        				// Google Analytics
			        			ga('send','pageview','/registro-principal-ajax');
			        			ga('send', 'event', 'MicroConversion', 'Registration', 'Inicio');
			        			
			        			window.location.href = "http://" + window.location.hostname + "/cuenta";
			        		}
			        	}else if(response==2){
			        		showAlerts("Ya existe un usuario con este email", "");
			        		$('#emailRegistro').parent().addClass("has-error");
			        	}else if(response==0){
			        		showAlerts("El usuario no pudo ser guardado", "");
			        	}
		        }
			});
			
	}else{
		showAlerts(mensajeError, mensajeWarning);
	}
}

//-----------------------------------------------------------------------------------------------------------------

function guardarPerfil(deDondeVengo){

	quitAlerts();
	
	var urlToSearch=window.location.protocol+"//" + window.location.hostname + "/profiles/guardarPerfil";
	
	var success=true;
	
	var mensajeError="";
	var mensajeWarning="";
	var nombre=	$('#nombre-session').val();
	var apellido= $('#apellido-session').val();
	var ci= $('#ci-session').val();
	var nacionalidad= $('#nacionalidad-user').val();
	var ciudad= $('#ciudad-user').val();
	var correo= $('#correo-session').val();
	var telefono= $('#telefono-session').val();
	var celular= $('#celular-session').val();
	var codigo_celular = $('#codigo-celular').val();
    var codigo_habitacion = $('#codigo-habitacion').val();
	var destinos = [1];

	$(".check-destino").each(function() {
		if($(this).is(":checked")) {
			destinos.push($(this).attr('rel'));
		}	
	});
	
	if(nombre==""){
		mensajeError=mensajeError+"<li>Nombre (es obligatorio)</li>";
		success=false;
		$('#nombre-session').parent().addClass("has-error");
	}/*else if(!isOnlyLetters(nombre)){
		mensajeWarning=mensajeWarning+"<li>Nombre (formato incorrecto.Sólo letras)</li>";
		success=false;
		$('#nombre-session').parent().addClass("has-warning");
	}*/
	
	if(apellido==""){
		mensajeError=mensajeError+"<li>Apellido (es obligatorio)</li>";
		success=false;
		$('#apellido-session').parent().addClass("has-error");
	}else if(!isOnlyLetters(apellido)){
		mensajeWarning=mensajeWarning+"<li>Apellido (formato incorrecto. Sólo letras)</li>";
		success=false;
		$('#apellido-session').parent().addClass("has-warning");
	}
	
	if(correo==""){
		mensajeError=mensajeError+"<li>Correo Electrónico (es obligatorio)</li>";
		success=false;
		$('#correo-session').parent().addClass("has-error");
	}else if(!isEmail(correo)){
		mensajeWarning=mensajeWarning+"<li>Correo Electrónico (formato incorrecto. Ejem: prueba@gmail.com)</li>";
		success=false;
		$('#correo-session').parent().addClass("has-warning");
	}
	
	if(ci==""){
		mensajeError=mensajeError+"<li>Cédula (es obligatorio)</li>";
		success=false;
		$('#ci-session').parent().addClass("has-error");
	}/*else if(!isCi(ci)){
		mensajeWarning=mensajeWarning+"<li>Cédula (formato incorrecto. Ejem: 12345678)</li>";
		success=false;
		$('#ci-session').parent().addClass("has-warning");
	}*/
	
	if(nacionalidad==0){
		mensajeError=mensajeError+"<li>Nacionalidad (es obligatorio)</li>";
		success=false;
		$('#nacionalidad-user').parent().addClass("has-error");
	}
	
	if(ciudad==0){
		mensajeError=mensajeError+"<li>Ciudad (es obligatorio)</li>";
		success=false;
		$('#ciudad-user').parent().addClass("has-error");
	}
	
	if(telefono==""){
		mensajeError=mensajeError+"<li>Teléfono (es obligatorio)</li>";
		success=false;
		$('#telefono-session').parent().addClass("has-error");
	}else if(!isPhone(telefono)){
		mensajeWarning=mensajeWarning+"<li>Teléfono (formato incorrecto. Ejem: 1234567)</li>";
		success=false;
		$('#telefono-session').parent().addClass("has-warning");
	}
	if(celular==""){
		mensajeError=mensajeError+"<li>Teléfono celular (es obligatorio)</li>";
		success=false;
		$('#celular-session').parent().addClass("has-error");
	}else if(celular!="" && !isPhone(celular)){
		mensajeWarning=mensajeWarning+"<li>Teléfono celular (formato incorrecto. Ejem: 1234567)</li>";
		success=false;
		$('#celular-session').parent().addClass("has-warning");	
	}
	
	if(success){
		$('#modal-loader').modal('toggle');
		var parametros = {
			"nombre" : nombre,
		    "apellido" : apellido,
		    "ci" : ci,
		    "nacionalidad" : nacionalidad,
		    "ciudad" : ciudad,
		    "correo" : correo,
		    "telefono" : telefono,
		    "celular" : celular,
		    "destinos" : destinos,  
            "codigo_celular" : codigo_celular,
            "codigo_habitacion" : codigo_habitacion,
		};

	$.ajax({
			data:parametros,
	        url:urlToSearch,
	        type:  'post',
	        success:  function (response) {
	        	$('#modal-loader').modal('hide');
	        	if(response==1){
		        	if(deDondeVengo=="cuenta"){
		        		location.reload();
		        	}else{
		        		cargarSeccionResumen("tipoPagoResumen");
		        	}
	        	}else{
	        		showAlerts("El usuario no pudo ser guardado", "");
	        		
	        	}
	        	
	        }
		});
	}else{
		showAlerts(mensajeError, mensajeWarning);
	}
}

function showInfoModal(titulo, mensajePrincipal, mensajeSecundario, tonyImg){
	
	$("#texto-titulo-info").text(titulo);
	$("#texto-principal-info").text(mensajePrincipal);
	$("#tony-mensaje").attr("src","http://123reserva.com/img/site/general/tony-botones-"+tonyImg+".png");
	$('#modal-info div.modal-body').removeAttr("style");	
	$('#modal-info').modal('toggle');
	
}

function showInfoModalFeedback(titulo, mensajePrincipal, mensajeSecundario, tonyImg){
	
	$("#texto-titulo-info-feedback").text(titulo);
	$("#texto-principal-info-feedback").text(mensajePrincipal);
	$("#texto-secundario-info-feedback").text(mensajeSecundario);
	$("#tony-mensaje-feedback").attr("src","http://123reserva.com/img/site/general/tony_ok.png");
	$('#modal-info-success-feedback div.modal-header').removeAttr("style");	
	$('#modal-info-success-feedback div.modal-body').removeAttr("style");	
	$('#modal-info-success-feedback').modal('toggle');
	
}
//-----------------------------------------------------------------------------------------------------------------

var STATUS_RESERVATION_DISFRUTADA = 1;
var STATUS_RESERVATION_POR_APROBACION= 2;
var STATUS_RESERVATION_POR_DISFRUTAR= 3;
var STATUS_RESERVATION_CANCELADA= 4;
var STATUS_RESERVATION_POR_PAGAR= 5;
var STATUS_RESERVATION_RECHAZADA_POR_PAGO= 6;
var STATUS_RESERVATION_PROBLEMAS_CON_PUNTO= 7;
var STATUS_RESERVATION_POR_COTIZACION= 8;
var STATUS_RESERVATION_ERROR_COTIZACION= 9;
var STATUS_RESERVATION_SIN_DISPONIBILIDAD= 10;
var STATUS_RESERVATION_ERROR_EN_PLATAFORMA= 11;

//-----------------------------------------------------------------------------------------------------------------

$("#ingresarLogin" ).click(function() {
	guardarLogin("");
});

$("#irRegistro" ).click(function() {
	window.location ="http://" + window.location.hostname + "/cuenta/registro";
});

$("#irContrasena" ).click(function() {
	window.location ="http://" + window.location.hostname + "/cuenta/recuperar_contrasena";
});

$("#irPerfil" ).click(function() {
	window.location ="http://" + window.location.hostname + "/cuenta";
});

$("#salirCuenta" ).click(function() {
	$.ajax({
        url:"logout",
        type:  'post',
        success:  function (response) {
			window.location = "http://" + window.location.hostname;
        }
	});
});

$(".close-info" ).click(function() {
	$('#modal-info').modal('hide');
});

function recuperarPass(deDondeVengo){
	quitAlerts();
	
	var success=true;
	var urlToSearch="http://" + window.location.hostname + "/profiles/recuperarPasswordActionAjax";
	var mensajeError="";
	var mensajeWarning="";
	var correo=	$('#recuperar-correo').val();
	
	if(correo==""){
		mensajeError=mensajeError+"<li>Correo Electrónico (es obligatorio)</li>";
		success=false;
		$('#recuperar-correo').parent().addClass("has-error");
	}else if(!isEmail(correo)){
		mensajeWarning=mensajeWarning+"<li>Correo Electrónico (formato incorrecto. Ejem: prueba@gmail.com)</li>";
		success=false;
		$('#recuperar-correo').parent().addClass("has-warning");
	}

	if(success){
		$('#modal-loader').modal('toggle');
		var parametros = {
			"mail" : correo,  
		};
		$.ajax({
			data: parametros,
	        url: urlToSearch,
	        type: 'post',
    		cache: false,
        	success: function(data, textStatus, jqXHR) {
	        	$('#modal-loader').modal('hide');
	        	
				data = eval('(' + data + ')');
				console.log(data);
				
				var goodOrBad = "bad";
				var message = "";
				if(data.Result>0) {
					if(data.Sended>0) {
						goodOrBad = "good";
						message = "Acabamos de enviarte un correo electrónico con las instrucciones que debes seguir para recuperar tu contraseña.";
					} else {
						message = "Hubo un error al intentar enviarte el correo electrónico. Por favor verifica tu correo e inténtalo nuevamente.";
					}
				} else {
					message = "Hubo un error al intentar recuperar tu contraseña.Por favor inténtalo nuevamente.";
				}
				
				showInfoModal("Alerta", message, "", goodOrBad);
				
				if(deDondeVengo=="resumen"){
					window.setTimeout(function() {location.reload();}, 2000);
				}
	        }
		});
	}else{
		showAlerts(mensajeError, mensajeWarning);
	}
}

$(".close").click(function() {
	$(this).parent().slideUp("slow");
});

$("#registrarUser").click(function() {
	guardarRegistro("");
});

$("#recuperar-pass").click(function() {
	recuperarPass("");
});

$(".close-pago" ).click(function() {
	window.location = "http://" + window.location.hostname+"/cuenta/reservas";
});