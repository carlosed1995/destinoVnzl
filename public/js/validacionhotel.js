$(document).ready(function(){ 


  $("#btn").click(validar);
  $("#nombre").keyup(validar);
  $("#direccion").keyup(validardir);
  $("#telefono").keyup(validartel);

  
function validar(){
	   
    let valor = document.getElementById("nombre").value;
	 if(valor==null  || valor.length == 0 || /^\s+$/.test(valor)  ) {
  $("#ok").remove();
		 $('#nombre').parent().parent().attr("class", "form-group has-error has-feedback");  
		  $('#nombre').parent().children('span').text("Este campo es requerido").show();
		  $('#nombre').parent().append("<span id='ok' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                    
	return false;
}else{
	
	     $("#ok").remove();
                        $('#nombre').parent().parent().attr("class", "form-group has-success has-feedback");
                        $('#nombre').parent().children('span').hide();
                        $('#nombre').parent().append("<span id='ok' class='glyphicon glyphicon-ok form-control-feedback'></span>");
             
	  return true;
	
}
	

}
  
  
  
  function validardir(){
	   
    let valor = document.getElementById("direccion").value;
	 if(valor==null  || valor.length == 0 || /^\s+$/.test(valor)  ) {
  $("#ok").remove();
		 $('#direccion').parent().parent().attr("class", "form-group has-error has-feedback");  
		  $('#direccion').parent().children('span').text("Este campo es requerido").show();
		  $('#direccion').parent().append("<span id='ok' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                    
	return false;
}else{
	
	     $("#ok").remove();
                        $('#direccion').parent().parent().attr("class", "form-group has-success has-feedback");
                        $('#direccion').parent().children('span').hide();
                        $('#direccion').parent().append("<span id='ok' class='glyphicon glyphicon-ok form-control-feedback'></span>");
             
	  return true;
	
}
	

}
  
    function validartel(){
	   
    let valor = document.getElementById("telefono").value;
	 if(valor == null  || valor.length == 0 || /^\s+$/.test(valor)  ) {
  $("#ok").remove();
		 $('#telefono').parent().parent().attr("class", "form-group has-error has-feedback");  
		  $('#telefono').parent().children('span').text("Este campo es requerido").show();
		  $('#telefono').parent().append("<span id='ok' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                    
	return false;
}else{
	
	     $("#ok").remove();
                        $('#telefono').parent().parent().attr("class", "form-group has-success has-feedback");
                        $('#telefono').parent().children('span').hide();
                        $('#telefono').parent().append("<span id='ok' class='glyphicon glyphicon-ok form-control-feedback'></span>");
             
	  return true;
	
}
	

}
  


	


  
  
  
  
  
  
  
		});