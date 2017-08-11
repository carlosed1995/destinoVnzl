function ordenarPrecios(){
	var myList = $('#hotel-list-content');
	var listItems = myList.children('.hotel-list').get();
	
	listItems.sort(function(a, b){
		var aPrice=a.getAttribute("rel");
		var bPrice=b.getAttribute("rel");
		aPrice=parseFloat(aPrice);
		bPrice=parseFloat(bPrice);
    	return aPrice > bPrice ? 1 : -1;
	});
	
	$(myList).append(listItems);
}
//-----------------------------------------------------------------------------------------------------------------
function ordenarRelevancia(){
	var myList = $('#hotel-list-content');
	var listItems = myList.children('.hotel-list').get();
	
	listItems.sort(function(a, b){
		var aRelevance=a.getAttribute("max");
		var bRelevance=b.getAttribute("max");
		aRelevance=parseInt(aRelevance, 10);
		bRelevance=parseFloat(bRelevance,10);
    	return aRelevance > bRelevance ? 1 : -1;
	});
	
	$(myList).append(listItems);
}

//-----------------------------------------------------------------------------------------------------------------
function showOrHide(hotel,withPrice, /*withStars, */withRanking, types, kinds, ambiences, services){	
	var showPrice=true;
	var showRanking=true;
	//var showStars=true;

	var showType=false;
	var showKind=false;
	var showAmbience=false;
	var showService=false;

	if(withPrice && !hotel.hasClass("show-price")) //Precio
		showPrice=false;
	
	if(withRanking && !hotel.hasClass("show-point"))//Puntaje
		showRanking=false;
	
	/*if(withStars && !hotel.hasClass("show-star"))
		showStars=false;*/

	if(types.length==0){
		showType=true;
	}else{
		for (var i=0; i < types.length; i++) {
			if(hotel.hasClass(types[i]))
				showType=true;
		};
	}
	
	if(kinds.length==0){
		showKind=true;
	}else{
		for (var i=0; i < kinds.length; i++) {
			if(hotel.hasClass(kinds[i]))
				showKind=true;
		};
	}
	
	if(ambiences.length==0){
		showAmbience=true;
	}else{
		for (var i=0; i < ambiences.length; i++) {
			if(hotel.hasClass(ambiences[i]))
				showAmbience=true;
		};
	}
	
	if(services.length==0){
		showService=true;
	}else{
		for (var i=0; i < services.length; i++) {
			if(hotel.hasClass(services[i])){
				showService=true;
			}else{
				showService=false;
				break;
			}		
		};
	}
	
	return (showPrice && /*showStars && */showRanking && showType && showKind && showAmbience && showService);
}
//-----------------------------------------------------------------------------------------------------------------
function initialize() {
  	var myLatlng = new google.maps.LatLng($("#lat").val(), $("#lon").val());
 	var map_canvas  = document.getElementById('map_canvas');
    var map_options = {
  		center: myLatlng,
  		zoom: 5
    };
    var map = new google.maps.Map(map_canvas, map_options);
    var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      //title: 'Hello World!'
  	}); 
  	
  	marker.setMap(map);
}
//-----------------------------------------------------------------------------------------------------------------

function loadScript() {
  var script = document.createElement('script');
  script.type = 'text/javascript';
  script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&'+'callback=initialize';
  document.body.appendChild(script);
}

//-----------------------------------------------------------------------------------------------------------------

function cargarListadoHotelesSimilares(idLocacion){
	var urlToSearch = "http://" + window.location.hostname + "/searches/listadoHotelesSimilares";
	var parametros = {
		"idLocacion" : idLocacion,
	};

	$("#loader-interno").css("display", "in-line");
	
	$.ajax({
        data: parametros,
        url: urlToSearch,
        type:  'post',
        success:  function (response) {
        	$("#hotels-suggestions").append(response);
        	$("#loader-interno").css("display", "none");
        	
        	$(".more-information-click").click(function(){
				var idHotel=$(this).attr("rel");
				$('#more-information-form-'+idHotel).submit();
			});
        }
	});

}

//-----------------------------------------------------------------------------------------------------------------

function cargarListadoHotelesInicial(){
	$("#right-section").empty();
	$("#loader-section").empty();
	cargarListadoHoteles(0);
}
//-----------------------------------------------------------------------------------------------------------------

function cargarListadoHoteles(pagina){
	
	var success=true;

	var idLocacion=	$('#idLugarViaje').val();
	var idTipo=	$('#idTipoAlojamiento').val();
	var idAmbiente=	$('#idAmbiente').val();
	var idCategoria=$('#idCategoria').val();
	var fechaSalida= $('#lodging-availability-end-date').val();
	var fechaLlegada= $('#lodging-availability-begin-date').val();
	var $tipoPaqueteExists = $("#tipoPaquete");
	if ($tipoPaqueteExists.length){
		var tipoPaquete= $('#tipoPaquete').val(); 
	}else{
		var tipoPaquete=-1;
	}
	
	
	console.log(tipoPaquete);
	var urlToSearch="";
	
	if((fechaLlegada=="" && fechaSalida!="") || (fechaLlegada!="" && fechaSalida=="")){
		success=false;
	}
	
	if(success){
		if(parseInt(idTipo)>0){
			urlToSearch = "http://" + window.location.hostname + "/searches/listadoHotelesSectionTipos";
		}else if(parseInt(idAmbiente)>0){
			urlToSearch = "http://" + window.location.hostname + "/searches/listadoHotelesSectionAmbientes";
		}else if(parseInt(idCategoria)>0){
			urlToSearch = "http://" + window.location.hostname + "/searches/listadoHotelesSectionCategorias";
		}else{
			urlToSearch = "http://" + window.location.hostname + "/searches/listadoHotelesSection";
		}
		
		var noHayFechas=0;
		
		if(fechaLlegada=="" && fechaSalida==""){
			noHayFechas=1;
		}
		
		var cantidadHotelesInicial;
		
		if(noHayFechas==1){
			$("#more-lodging").css("display", "none");
		}
	
		if(pagina==0){
			var loader=$("#loader").clone();
			$("#loader-section").html(loader);
			$("#loader-section").css("display", "block");
		}else{
			$("#loader-cargar-mas").css("display", "in-line");
		}
		var parametros = {
			"idLocacion" : idLocacion,
		    "fechaLlegada" : fechaLlegada,
		    "fechaSalida" : fechaSalida,
		    "idTipo":idTipo,
		    "idAmbiente":idAmbiente,
		    "idCategoria":idCategoria,
		    "offset":pagina,
		    "tipoPaquete":tipoPaquete 
		};

		$.ajax({
	        data: parametros,
	        url: urlToSearch,
	        type:  'post',
	        success:  function (response) {
	        	var respuesta = agregarMigajas(response);
	        	var cantidadHotelesInicial=parseInt(respuesta.find("#cantHoteles").val(),10);
	        	cantidadHoteles=(parseInt(pagina, 10)*10)+cantidadHotelesInicial;
	
	        	if(pagina>0) {
	        		$("#right-section").find("#hotel-list-content").append(respuesta.find("#hotel-list-content").html());
	        	}else{
	        		$("#right-section").html(respuesta);
	        		if(idLocacion!=1){
	        			cargarListadoHotelesSimilares(idLocacion);
	        		}
	        	}
	        	
	        	if(noHayFechas==0){
					$("#cantidad-hoteles").text(cantidadHoteles);
				}
	        	
				$("#more-lodging").unbind().click(function() {
					var newPagina=pagina+1;
					$(this).css("display", "none");
					cargarListadoHoteles(newPagina);
					return false;
				});
				
	        	if(pagina==0) {
					ordenarRelevancia();
					$("#loader-section").css("display", "none");
				}else{
					$("#loader-cargar-mas").css("display", "none");
				}
				
				if(cantidadHotelesInicial>=10){
					$("#more-lodging").css("display", "block");
	        	}else{
	        		$("#more-lodging").css("display", "none");
	        	}
	        	
	        	$(".more-information-click").click(function(){
					var idHotel=$(this).attr("rel");
					$('#more-information-form-'+idHotel).submit();
				});
	
				$("#lugarViaje").val(($("#hideDirection").val()));

				$( "#lugarViaje" ).autocomplete({
				  source: function( request, response ) {
					var likeClue=request.term;
					var urlToSearch = "http://" + window.location.hostname + "/searches/autocompleteLugares";
				    $.ajax({
				      url: urlToSearch,
					  type: "POST",
				      data: {
				        clue: likeClue
				      },
				      success: function( data ) {
				      	data = eval('(' + data + ')');
				        response( $.map( data, function( item ) {
				          return {
				            idLocacion:item.id_locacion,
				            nombreLocacion: item.nombre_locacion,
				            direccion: item.direccion_con_padres
				          };
				        }));
				      }
				    });
				  },
				  minLength: 2,
				  select: function( event, ui ) {
				   $("#lugarViaje").val(ui.item.direccion);
				   $("#idLugarViaje").val(ui.item.idLocacion);
				   return false;
				  }
				  
				}).data( "ui-autocomplete" )._renderItem = function( ul, item ) {
						return $( "<li>" ).append( "<a><span class='autocomplete_name'>" + item.direccion+"</span></a>" ).appendTo( ul );
				};
				
				$(".link-sugerencia" ).click(function() {
					var idLocacion=$(this).attr("rel");
					$("#idLugarViaje").val(idLocacion);
					cargarListadoHotelesInicial();
				});
	
				$(".lodging-services img").tooltip();
				
				$(".order-hotel" ).click(function() {
					$(".order-hotel").each(function(){
						$(this).removeClass("gray_btn_active");
					});
					$(this).addClass("gray_btn_active");
				});
				
				$("#ordenar-relevancia" ).click(function() {
					ordenarRelevancia();
				});
				
				$("#ordenar-precios" ).click(function() {
					ordenarPrecios();
				});
	        }
		});
	}else{
		showInfoModal("Alerta", "Debes colocar fecha de llegada y fecha de salida.", "", "bad");
	}

	//return false;
}

//-----------------------------------------------------------------------------------------------------------------

cargarListadoHotelesInicial();


$(".check-filter").change(function() {
	var mostrarTodo=1;
	//var acumuladoService="";
	var acumuladoTotal;
	var classType= new Array();
	var classKind= new Array();
	var classAmbience= new Array();
	var classService= new Array();
	//$('.hotel-list').css("display", "none");//Se oculta toda la lista de hoteles
	$('.hotel-list').removeClass("show-price");
	$('.hotel-list').removeClass("show-star");
	$('.hotel-list').removeClass("show-point");
	
	
	var infPricePos=999;
	var maxPricePos=-1;
	var infPriceVal=-1;			
	var maxPriceVal=-1;

	var infNumStar=999;
	var maxNumStar=-1;
	var rangeStar="";

	var infPunt=999;
	var maxPunt=-1;
	var rangeStar="";

	var withPrice=0;
	var withStars=0;
	var withRanking=0;

	$(".filter-price").prop("disabled", false);
	$(".filter-star").prop("disabled", false);
	$(".filter-point").prop("disabled", false);

	$(".filter-price").each(function() {
		if($(this).is(":checked")){
			mostrarTodo=0;
			withPrice=1;
			var classPrice=($(this).attr('class').split(' ')[3]).split('-')[1];
			classPrice=parseInt(classPrice, 10);
			if(classPrice<infPricePos){
				infPricePos=classPrice;
			}else if(classPrice>=maxPricePos){
				maxPricePos=classPrice;
			}
		}
	});

	if(maxPricePos>-1){
		for (var i=infPricePos; i <= maxPricePos; i++) {
			if(i!=infPricePos && i!=maxPricePos){
				$(".price-"+i).prop("disabled", true);
			}else{
				if(i==infPricePos){
					infPriceVal=parseInt(($(".price-"+i).attr('class').split(' ')[0]).split('-')[0],10);
				}else if(i==maxPricePos){
					maxPriceVal=parseInt(($(".price-"+i).attr('class').split(' ')[0]).split('-')[1],10);
				}
			}
		  	$(".price-"+i).prop("checked", true);
		};
	}else{
		if(infPricePos!=999){
			infPriceVal=parseInt(($(".price-"+infPricePos).attr('class').split(' ')[0]).split('-')[0],10);
			maxPriceVal=parseInt(($(".price-"+infPricePos).attr('class').split(' ')[0]).split('-')[1],10);
		}
	}
	
	if(infPriceVal>-1 && maxPriceVal!=-1){
		$('.hotel-list').each(function() {
			var price=parseInt(($(this).attr('class').split(' ')[1]).split('-')[1],10);
			if(price>=infPriceVal && price<=maxPriceVal){
				$(this).addClass("show-price");
			}
		});
	}
	
	

	//SECCION ESTRELLAS *******************************************************************************************
	/*$(".filter-star").each(function() {//Se recorren los checkbox de estrellas
		if($(this).is(":checked")){//Si esta check se toma el numero de estrella seleccionado
			mostrarTodo=0; //se indica que no se muestre todo
			withStars=1;
			var numStar=$(this).attr('rel');//Se obtiene el numero de la estrella
			numStar=parseInt(numStar, 10);
			if(numStar<=infNumStar){//Se calculan los limites inf y superior del rango de estrellas marcado
				infNumStar=numStar;
			}else if(numStar>=maxNumStar){
				maxNumStar=numStar;
			}
		}
	});

	if(maxNumStar>-1){ //Si hay un limite superior (más de dos check seleccionados) se hacen los calculos para desabilitar
		for (var i=infNumStar; i <= maxNumStar; i++) {
			if(i!=infNumStar && i!=maxNumStar){//Si no son los limites inf ni sup se desabilita el checkbox
				$("."+i+"-estrella").prop("disabled", true);
			}
		  	$("."+i+"-estrella").prop("checked", true);//Se hace check del rango de checkbox
		};
		rangeStar=infNumStar+"-"+maxNumStar;//Se guarda el rango como string
	}else{
		rangeStar=infNumStar;//Se guarda el rango inferior ya que solo fue marcado un checkbox
	}
	
	//Se marcan con la clase show-star los hoteles que cumplan con el rango de estrellas especificado
	$('.hotel-list').each(function() {
		var star=parseInt(($(this).attr('class').split(' ')[2]).split('-')[1],10);//Se obtiene el precio del hotel
		if(infNumStar>-1 && maxNumStar!=-1){
			if(star>=infNumStar && star<=maxNumStar){
				$(this).addClass("show-star");
			}
		}else{
			if(maxNumStar==-1){
				if(star==infNumStar){
					$(this).addClass("show-star");
				}
			}
		}
	});*/

	$(".filter-point").each(function() {
		if($(this).is(":checked")){
			withRanking=1;
			mostrarTodo=0;
			var numPunt=$(this).attr('rel');
			numPunt=parseInt(numPunt, 10);
			if(numPunt<infPunt){
				infPunt=numPunt;
			}else if(numPunt>maxPunt){
				maxPunt=numPunt;
			}
		}
	});

	if(maxPunt>-1){
		for (var i=infPunt; i <= maxPunt; i++) {
			
			if(i!=infPunt && i!=maxPunt){
				$("."+i+"-punto").prop("disabled", true);
			}
		  	$("."+i+"-punto").prop("checked", true);
		};
	}

	$('.hotel-list').each(function() {
		var point=parseInt(($(this).attr('class').split(' ')[3]).split('-')[1],10);
		if(infPunt>-1 && maxPunt!=-1){
			if(point>=infPunt && point<=maxPunt){
				$(this).addClass("show-point");
			}
		}else{
			if(maxPunt==-1){
				if(point==infPunt){
					$(this).addClass("show-point");
				}
			}
		}
	});

	$(".filter-type").each(function() {
		if($(this).is(":checked")){
			mostrarTodo=0;
			classType.push($(this).attr('rel')+'-type');
		}
	});

	$(".filter-service").each(function() {
		if($(this).is(":checked")){
			mostrarTodo=0;
			classService.push($(this).attr('rel')+'-service');
		}
	});

	$(".filter-kind").each(function() {
		if($(this).is(":checked")){
			mostrarTodo=0;
			classKind.push($(this).attr('rel')+'-kind');
		}
	});

	
	$(".filter-ambience").each(function() {
		if($(this).is(":checked")){
			mostrarTodo=0;
			classAmbience.push($(this).attr('rel')+'-ambience');
		}
	});
	
	
	if(mostrarTodo==1){
		$('.hotel-list').css("display", "block");
	}else{
		
		$('.hotel-list').each(function() {
			var show=showOrHide($(this), withPrice, /*withStars,*/ withRanking, classType, classAmbience, classKind, classService);
			if (show)
				$(this).css("display", "block");
			else
				$(this).css("display", "none");
		});
	}
});



$(".all-select").click(function() {
    $(this).focus();
    $(this).select();
});

$("#buscar-listado").click(function() {
    cargarListadoHotelesInicial();
});



