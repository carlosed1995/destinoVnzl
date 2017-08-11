$(".action-show-bank-accounts").click(function(){
	$('#modalBankAccounts').modal('toggle');
	
	return false;
});

/*$(function() {
    $("img.lazy").lazyload();
});*/

/*$('.has-sub').click( function(e) {
    e.preventDefault();
    $(this).parent().toggleClass('tap');
});*/
var cHeight = 0;

$('#lodging-banner-carousel-top-left').on('slide.bs.carousel', function (e) {
    var $nextImage = null;

    $activeItem = $('.active.item', this);

    if (e.direction == 'left'){
        $nextImage = $activeItem.next('.item').find('img');
    } else {
		if ($activeItem.index() == 0){
            $nextImage = $('img:last', $activeItem.parent());
        } else {
            $nextImage = $activeItem.prev('.item').find('img');
        }
    }

    // prevents the slide decrease in height
    // if (cHeight == 0) {
       // cHeight = $(this).height();
       // $activeItem.next('.item').height(cHeight);
    // }

    // prevents the loaded image if it is already loaded
    var src = $nextImage.data('lazy-load-src');
    
    if (typeof src !== "undefined" && src != "") {
       $nextImage.attr('src', src)
       $nextImage.data('lazy-load-src', '');
    }
});

if (screen.width > 480) {
  	var myInterval=false;
	 $('.control-recomendation').mouseover(function() {
	  	var ctrl = $(this);
	   	var interval=1;
	  
	   	myInterval = setInterval(function(){
	         ctrl.trigger("click");
	    },interval);
	 });
	 $('.control-recomendation').mouseout(function(){
		clearInterval(myInterval);
		myInterval = false;
	 });

	 var myInterval=false;
	 $('.control-package').mouseover(function() {
	  	var ctrl = $(this);
	   	var interval=1;
	  
	   	myInterval = setInterval(function(){
	         ctrl.trigger("click");
	    },interval);
	 });
	 $('.control-package').mouseout(function(){
		clearInterval(myInterval);
		myInterval = false;
	 });
}

$('#myCarousel, #myCarouselRecomendations,#myCarouselPackages,#myCarouselCategories,#myCarouselTypes, #myCarouselRegions').carousel({interval:false});
//$('#myCarouselRecomendations').carousel({interval:false});
if ($(window).width() < 480) {

	$('.carousel .recomendationCarrusel').each(function(){
	  var next = $(this).next();
	  if (!next.length) {
	    next = $(this).siblings(':first');
	  }
	  next.children(':first-child').clone().appendTo($(this));
	  
	  for (var i=0;i<0;i++) {
	    next=next.next();
	    if (!next.length) {
	    	next = $(this).siblings(':first');
	  	}
	    
	    next.children(':first-child').clone().appendTo($(this));
	  }
	});

}else{

	$('.carousel .recomendationCarrusel').each(function(){
	  var next = $(this).next();
	  if (!next.length) {
	    next = $(this).siblings(':first');
	  }
	  next.children(':first-child').clone().appendTo($(this));
	  
	  for (var i=0;i<2;i++) {
	    next=next.next();
	    if (!next.length) {
	    	next = $(this).siblings(':first');
	  	}
	    
	    next.children(':first-child').clone().appendTo($(this));
	  }
	});

};
/*$('.carousel .recomendationCarrusel').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));
  
  for (var i=0;i<2;i++) {
    next=next.next();
    if (!next.length) {
    	next = $(this).siblings(':first');
  	}
    
    next.children(':first-child').clone().appendTo($(this));
  }
});*/

 //--------
 $('.carousel .packagesCarrusel').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));
  
  for (var i=0;i<2;i++) {
    next=next.next();
    if (!next.length) {
    	next = $(this).siblings(':first');
  	}
    
    next.children(':first-child').clone().appendTo($(this));
  }
});

var myInterval=false;


 

// $('#lodging-others-carousel').carousel({interval:false});
// var myInterval=false;
// $('.carousel-control').mouseover(function() {
//   	var ctrl = $(this);
//   	var interval=1;
  
//     myInterval = setInterval(function(){
//          ctrl.trigger("click");
//     },interval);
// });
                            
// $('.carousel-control').mouseout(function(){
// 	clearInterval(myInterval);
// 	myInterval = false;
// });



var num = 100; //number of pixels before modifying styles

$(window).bind('scroll', function () {
    if ($(window).scrollTop() > num) {
        $('.stickyMenu').addClass('fixedMenu');
        //$("#lodging-landing-carousel").css('margin', '0px -15px');
        $("#lodging-landing-nav-pills").css('margin', '0px -15px');
        //$("#lodging-landing-flights").css('margin', '0px -15px');
        
        $('.maleta123').css('visibility','visible');

       // $(".maleta123").css('position', 'inline-block');
        //$(".dropdown-toggle").css('padding-left', '15px !important;');
        
    } else {
        $('.stickyMenu').removeClass('fixedMenu');
        //$("#lodging-landing-nav-pills").css('margin', '15px -15px');
        $("#lodging-landing-nav-pills").css('margin-bottom', '0px');
        $("#lodging-landing-nav-pills").css('margin-top', '15px');
        $("#lodging-landing-nav-pills").css('margin-left', '-15px');
        $("#lodging-landing-nav-pills").css('margin-right', '-15px');

        
        
        $('.maleta123').css('visibility','hidden');
        // $(".dropdown-toggle").css('margin-left', '30px');
    }
});

function change_by_over(str, type) {
	var result = "";
	if(type == 1) {
		result = str.replace("off", "on");
	} else {
		result = str.replace("on", "off");
	}

	return result;
}
//-----------------------------------------------------------------------------------------------------------------

function calcularNoches(dateBegin,dateEnd){
	var noches=daydiff(dateBegin,dateEnd);
	var dias=noches+1;

	var stringDias = (dias!=1) ? " días y " : " día y ";
	var stringNoches=(noches!=1) ? " noches" : " noche";

	var stringFinal=dias.toString()+stringDias+noches.toString()+stringNoches;
	$("#title-estadia").css("display", "block");
	$("#nochesEstadiaText").text(stringFinal);
}

//-----------------------------------------------------------------------------------------------------------------

function daydiff(first, second) {
	console.log(first);
	console.log(second);
	var diff=(second - first) / (1000 * 60 * 60 * 24);
    return (Math.floor(diff));
}
//-----------------------------------------------------------------------------------------------------------------

function addDays(date, amount) {
	var tzOff = date.getTimezoneOffset() * 60 * 1000,
	t = date.getTime(),
	d = new Date(),
	tzOff2;

	t += (1000 * 60 * 60 * 24) * amount;
	d.setTime(t);

	tzOff2 = d.getTimezoneOffset() * 60 * 1000;
	if (tzOff != tzOff2) {
		var diff = tzOff2 - tzOff;
		t += diff;
		d.setTime(t);
	}

	return d;
}
//-----------------------------------------------------------------------------------------------------------------

function myDateFormatter(dateObject) {
    var d = new Date(dateObject);
    var day = d.getDate();
    var month = d.getMonth() + 1;
    var year = d.getFullYear();
    if (day < 10) {
        day = "0" + day;
    }
    if (month < 10) {
        month = "0" + month;
    }
    var date = day + "/" + month + "/" + year;

    return date;
};
//-----------------------------------------------------------------------------------------------------------------

var today = new Date();
// var tomorrow = new Date();
// tomorrow.setDate(today.getDate()+1);

today = Date.parse(today.getMonth()+1+'/'+today.getDate()+'/'+today.getFullYear());
//tomorrow = Date.parse(tomorrow.getMonth()+1+'/'+tomorrow.getDate()+'/'+tomorrow.getFullYear());

//-----------------------------------------------------------------------------------------------------------------

$(".dropdown-menu a").click(function(){
	$(this).parent().parent().parent().removeClass("open");

	var goTo = $(this).attr("href");
	if((goTo != "")&&(goTo != "#")) {
		return true;
	}

	return false;
});

$(".dropdown-menu label").click(function(){
	return false;
});

$(".dropdown-menu input").click(function(){
	return false;
});

// $("li.dropdown").hover(
// 	function() {
// 		$(this).addClass("open");
// 	}, function() {
// 		$(this).removeClass("open");
// 	}
// );

$(".lodging-services img").tooltip();

$(".lodging-principal-price img").tooltip();

$("#datetime-picker-begin").datetimepicker({
	pickTime: false,
	minDate:today,
	language: 'ES'
});

$("#datetime-picker-end").datetimepicker({
	pickTime: false,
	useCurrent: false,
	minDate:today,
	language: 'ES'
});

$("#datetime-picker-begin-package").datetimepicker({
	pickTime: false,
	minDate:today,
	language: 'ES'
});

$("#datetime-picker-end-package").datetimepicker({
	pickTime: false,
	useCurrent: false,
	minDate:today,
	language: 'ES'
});

function cambiarTipoSearch(tipo){
	$('#tipoSearch').val(tipo);
}

$('#lodging-landing-nav-pills').click(function(){
	var action= $("#search-form").attr('action');
	var tipo=$("#tipoSearch").val();
	var s= action;
	var n = action.indexOf('_');
	s = s.substring(0, n != -1 ? n : s.length);
	//$("#search-form")[0].reset();
	if (tipo==2) {
		$("#search-form").attr("action", s+"_paquetes");
		$(".hide-date-search").hide();
		$(".show-package-type").show();
	}else{
		$("#search-form").attr("action", s);
		$(".hide-date-search").show();
		$(".show-package-type").hide();
	};
});

$("#datetime-picker-begin").on("dp.change",function (e) {
	$("#datetime-picker-end").data("DateTimePicker").setMinDate(addDays(e.date._d, 1));
	var ccc=$('#datetime-picker-end').data("DateTimePicker").getDate();
	if(!ccc._i){
		var dateEnd = myDateFormatter(addDays(e.date._d, 1));
		$('#datetime-picker-end').data("DateTimePicker").setDate(dateEnd);
	}else{
		if($("#datetime-picker-end").parent().hasClass('lodging-availability-date-end-container')){
			var dateBegin=$('#datetime-picker-begin').data("DateTimePicker").getDate();
			var dateEnd=$('#datetime-picker-end').data("DateTimePicker").getDate();
			if((dateBegin && dateEnd) && (dateBegin._i && dateEnd._i)){
				calcularNoches(dateBegin,dateEnd);
			}
	 	}
	}
});

$("#datetime-picker-end").on("dp.change",function (e) {
	$("#datetime-picker-begin").data("DateTimePicker").setMaxDate(addDays(e.date._d, -1));
	
	 if($("#datetime-picker-end").parent().hasClass('lodging-availability-date-end-container')){
		var dateBegin=$('#datetime-picker-begin').data("DateTimePicker").getDate();
		var dateEnd=$('#datetime-picker-end').data("DateTimePicker").getDate();
		if((dateBegin && dateEnd) && (dateBegin._i && dateEnd._i)){
			calcularNoches(dateBegin,dateEnd);
		}
	 }
});

$("#lodging-landing-carousel").carousel({
	interval:2000
});

$("#lodging-banner-carousel").carousel({
	interval:2000
});

$("#lodging-banner-carousel-top-left").carousel({
	interval:5000
});

$("#lodging-banner-carousel-top-right").carousel({
	interval:5000
});
$("#lodging-banner-carousel-bottom-left").carousel({
	interval:5000
});

$("#lodging-banner-carousel-bottom-right").carousel({
	interval:5000
});

$("#lodging-banner-carousel-bottom-middle").carousel({
	interval:5000
});
// $(".lodging-landing-carousel-bar button").click(function(){
	// //window.location = "search.html";
// });

$("#lodging-landing-carousel .item").click(function(){
	if(!$(this).hasClass("item-rel-special")) {
		window.location = "http://" + window.location.hostname + "/busqueda/" + $(this).attr("rel");
	} else {
		window.open("http://" + window.location.hostname + "/" + $(this).attr("rel"), '_blank');
	}
});

$("#lodging-banner-carousel .item").click(function(){
	if(!$(this).hasClass("item-rel-special")) {
		window.location = "http://" + window.location.hostname + "/busqueda/" + $(this).attr("rel");
	} else {
		window.open("http://" + window.location.hostname + "/" + $(this).attr("rel"), '_blank');
	}
});

/*$("#lodging-banner-carousel-top-left .item").click(function(){
	if(!$(this).hasClass("item-rel-special")) {
		window.location = "http://" + window.location.hostname + "/busqueda/" + $(this).attr("rel");
	} else {
		window.open("http://" + window.location.hostname + "/" + $(this).attr("rel"), '_blank');
	}
});*/

$("#lodging-banner-carousel-top-left .item").click(function(){
	id=$(this).attr('id');
	link=$(this).attr("rel");
	ga('send', 'event', 'Pagina de Inicio', 'Clic Banner Principal', link+' + '+id);
	if(!$(this).hasClass("item-rel-special")) {
		window.open("http://" + window.location.hostname + "/hotel/" + $(this).attr("rel"), '_blank');
	}else{
		window.open("http://" + window.location.hostname + "/busqueda/" + $(this).attr("rel"), '_blank');
	}
	//window.location = "http://" + window.location.hostname + "/hotel/" + $(this).attr("rel");
});

$(".lodging-banner-carousel-top-right").click(function(){
	id=$(this).attr('id');
	ga('send', 'event', 'Pagina de Inicio', 'Clic Banner Auxiliares Superiores', 'Banner '+id);
	if(!$(this).hasClass("item-rel-special")) {
		window.open("http://" + window.location.hostname + "/busqueda/" + $(this).attr("rel"), '_blank');
	}else{
		window.open("http://" + window.location.hostname + "/" + $(this).attr("rel"), '_blank');
	}
	
	//window.location = "http://" + window.location.hostname + "/hotel/" + $(this).attr("rel");
});


/*$("#lodging-banner-carousel-top-right .item").click(function(){
	if(!$(this).hasClass("item-rel-special")) {
		window.location = "http://" + window.location.hostname + "/busqueda/" + $(this).attr("rel");
	} else {
		window.open("http://" + window.location.hostname + "/" + $(this).attr("rel"), '_blank');
	}
});*/
$("#lodging-banner-carousel-bottom-left .item").click(function(){
	if(!$(this).hasClass("item-rel-special")) {
		window.location = "http://" + window.location.hostname + "/busqueda/" + $(this).attr("rel");
	} else {
		window.open("http://" + window.location.hostname + "/" + $(this).attr("rel"), '_blank');
	}
});
$("#lodging-banner-carousel-bottom-middle .item").click(function(){
	if(!$(this).hasClass("item-rel-special")) {
		window.location = "http://" + window.location.hostname + "/busqueda/" + $(this).attr("rel");
	} else {
		window.open("http://" + window.location.hostname + "/" + $(this).attr("rel"), '_blank');
	}
});
$("#lodging-banner-carousel-bottom-right .item").click(function(){
	if(!$(this).hasClass("item-rel-special")) {
		window.location = "http://" + window.location.hostname + "/busqueda/" + $(this).attr("rel");
	} else {
		window.open("http://" + window.location.hostname + "/" + $(this).attr("rel"), '_blank');
	}
});

// $("#lodging-landing-carousel .item-rel-ss-special > img").click(function(){
// 	window.open("http://" + window.location.hostname + "/" + $(this).attr("rel"), '_blank');
// });

$("#comments-personal-carousel").carousel({
	interval:false
});

$(".carousel-similar").carousel({
	interval:false
});

$(".lodging-landing-element").click(function(){
	window.location = "http://" + window.location.hostname + "/busqueda/" + $(this).attr("rel");
});

$(".lodging-similar-element").click(function(){
	console.log($(this).attr("name"));
	ga('send', 'event', 'Pagina de Inicio', 'Clic en Seccion', $(this).attr("name")+':'+$(this).attr("rel"));
	window.open("http://" + window.location.hostname + "/busqueda/" + $(this).attr("rel"), '_blank');
	//window.location = "http://" + window.location.hostname + "/busqueda/" + $(this).attr("rel");
});

$(".lodging-recomendations-element").click(function(){
	ga('send', 'event', 'Pagina de Inicio', 'Clic en Seccion', 'Recomendación:'+$(this).attr("rel"));
	window.open("http://" + window.location.hostname + "/hotel/" + $(this).attr("rel"), '_blank');
	//window.location = "http://" + window.location.hostname + "/hotel/" + $(this).attr("rel");
});

// $(".lodging-list-element-button button").click(function(){
// 	window.location = "minisite.html";
// });

//------------------------------------------------------------------------------

// pre-submit callback 
function showRequestSubscribelNew(formData, jqForm, options) {
	var success = true;
	console.log("showRequestSubscribelNew");
	var mailToSend = $("#footer_suscribe").val().trim();
	if(mailToSend!="" && isEmail(mailToSend)) {
		$('#modal-loader').modal('toggle');
		
	} else {
		showInfoModal("Alerta", "Por favor introduce una dirección de Correo Eletrónico válida", "", "bad");
		success=false;
	}
	//$('#modal-loader').modal('toggle');
    return success;
}
 
// post-submit callback 
function showResponseSubscribeNew(responseText, statusText, xhr, $form) {
	console.log("showResponseSubscribeNew");
	var data = eval('(' + responseText + ')');
	var tonyTitle = "¡Lo sentimos!";
	var tonyMsg = "No hemos podido registrar tu correo. Inténtalo nuevamente.";
	var tonyResult = "bad";
	if(data.Result>0) {
		if(data.Register>0) {
			tonyTitle = "¡Felicidades!";
			tonyMsg = "¡Listo! Te has registrado exitósamente en nuestra base de datos. Ahora recibirás los mejores hospedajes de Venezuela en tu correo.";
			tonyResult = "good";
			
			// Google Analytics
			ga('send', 'event', 'MicroConversion', 'Suscripcion Newsletter', 'Formulario-Footer');
		} else if(data.Register<0) {
			tonyMsg = "Ya has registrado tu correo en nuestra base de datos. Sigue navegando en 123Reserva.com para que comiences a vivir tu viaje desde ya.";
		}
	}
	if (data.Result==-1) {tonyMsg = "Por favor recuerda marcar la casilla de verificación.";};
	$('#modal-loader').modal('hide');
	$("#footer_suscribe").val("");
	showInfoModal(tonyTitle, tonyMsg, "", tonyResult);
    
   // $(".addhotel-nav-tabs li.disabled").unbind("click").removeClass("disabled");
	//alert("Se ha guardado el hotel exitosamente");
}
$("#footer-suscribe-form").ajaxForm({ 
   
    beforeSubmit:  showRequestSubscribelNew,   // pre-submit callback 
    success:       showResponseSubscribeNew  // post-submit callback 
});

//------------------------------------------------------------------------------

//------------------------------------------------------------------------------

// pre-submit callback 
function showRequestPopSubscribelNew(formData, jqForm, options) {
	var success = true;
	console.log("showRequestPopSubscribelNew");
	var mailToSend = $("#pop-suscribe-email").val().trim();
	if(mailToSend=="" || !isEmail(mailToSend)) {
		$('#pop-suscribe-email').parent().addClass("has-error");
		$('#local-error').css({ display: 'inline' });
		success=false;
	}
	//$('#modal-loader').modal('toggle');
    return success;
}
 
// post-submit callback 
function showResponsePopSubscribeNew(responseText, statusText, xhr, $form) {
	console.log("showResponsePopSubscribeNew");
	var data = eval('(' + responseText + ')');
	
	if(data.Result>0) {
		ga('send', 'event', 'MicroConversion', 'Suscripcion Newsletter', 'Pop-up');	
	}
	$('#modal-suscribe').modal('hide');
	$("#pop-suscribe-email").val("");
}
$("#pop-suscribe-form").ajaxForm({ 
   
    beforeSubmit:  showRequestPopSubscribelNew,   // pre-submit callback 
    success:       showResponsePopSubscribeNew  // post-submit callback 
});
//---------------------------------------------------------------------------------------------------------

$(".payment-method-image").hover(
	function() {
		$(this).attr("src", change_by_over($(this).attr("src"), 1));
	}, function() {
		$(this).attr("src", change_by_over($(this).attr("src"), 2));
	}
);

$("#footer_suscribe_button").click(function(){
	var mailToSend = $("#footer_suscribe").val().trim();
	if(mailToSend!="" && isEmail(mailToSend)) {
		$('#modal-loader').modal('toggle');
		$.ajax({
	        url:"http://" + window.location.hostname + "/home/newsletter_suscribe_ajax",
	        type:  'post',
	        data: {"mail" : mailToSend},
	        success: function(data, textStatus, jqXHR) {
				data = eval('(' + data + ')');
				var tonyTitle = "¡Lo sentimos!";
				var tonyMsg = "No hemos podido registrar tu correo. Inténtalo nuevamente.";
				var tonyResult = "bad";
				if(data.Result>0) {
					if(data.Register>0) {
						tonyTitle = "¡Felicidades!";
						tonyMsg = "¡Listo! Te has registrado exitósamente en nuestra base de datos. Ahora recibirás los mejores hospedajes de Venezuela en tu correo.";
						tonyResult = "good";
						
						// Google Analytics
						ga('send', 'event', 'MicroConversion', 'Suscripcion Newsletter', 'Formulario-Footer');
					} else if(data.Register<0) {
						tonyMsg = "Ya has registrado tu correo en nuestra base de datos. Sigue navegando en 123Reserva.com para que comiences a vivir tu viaje desde ya.";
					}
				}
				
				$('#modal-loader').modal('hide');
				$("#footer_suscribe").val("");
				showInfoModal(tonyTitle, tonyMsg, "", tonyResult);
			}
		});
	} else {
		showInfoModal("Alerta", "Por favor introduce una dirección de Correo Eletrónico válida", "", "bad");
	}
	
	return false;
});

$("#suscribe_newsletter_button").click(function(){
	var mailToSend = $("#suscribe_newsletter").val().trim();
    $(".equis-suscribe").css("display","block");
	if(mailToSend!="" && isEmail(mailToSend)) {
        $('#modal-loader').modal('toggle');
		$.ajax({
	        url:"http://" + window.location.hostname + "/home/newsletter_suscribe_ajax",
	        type:  'post',
	        data: {"mail" : mailToSend},
	        success: function(data, textStatus, jqXHR) {
				data = eval('(' + data + ')');
				var tonyTitle = "¡Lo sentimos!";
				var tonyMsg = "No hemos podido registrar tu correo. Inténtalo nuevamente.";
				var tonyImage = "bad";
				if(data.Result>0) {
					if(data.Register>0) {
                        $(".equis-suscribe").css("display","none");
						tonyTitle = "¡Felicidades!";
						tonyMsg = "¡Listo! Te has registrado exitósamente en nuestra base de datos. Ahora recibirás los mejores hospedajes de Venezuela en tu correo.";
						tonyResult = "good";
						
                        window.setTimeout(function(){
                           window.location.href = "http://" + window.location.hostname+"/home";
                        }, 5000);
					} else if(data.Register<0) {
						tonyMsg = "Ya has registrado tu correo en nuestra base de datos. Sigue navegando en 123Reserva.com para que comiences a vivir tu viaje desde ya.";
					}
				}
				
				$('#modal-loader').modal('hide');
				
				showInfoModal(tonyTitle, tonyMsg, "", tonyResult);
			}
		});
	} else {
		showInfoModal("Alerta", "Por favor introduce una dirección de Correo Eletrónico válida", "", "bad");
	}
	
	return false;
});