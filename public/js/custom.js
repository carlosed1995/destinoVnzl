$('#submitCreate').on('click', function(){
	$('#nombreModal').text($('#nombre').val())
})
$('#submitCreate').on('click', function(){
	$('#apellidoModal').text($('#apellido').val())
})
$('#submitCreate').on('click', function(){
	$('#cedulaModal').text($('#cedula').val())
})
$('#submitCreate').on('click', function(){
	$('#telenoModal').text($('#telefono').val())
})
$('#submitCreate').on('click', function(){
	$('#ciudadModal').text($('#ciudad').val())
})
$('#submitCreate').on('click', function(){
	$('#direccionModal').text($('#direccion').val())
})
$('#submitCreate').on('click', function(){
	$('#descripccionModal').text($('#descripcion').val())
})
$('#submitCreate').on('click', function(){
	$('#turnoModal').text($('#turno').val())
})
$('#submitCreate').on('click', function(){
	$('#generoModal').text($('#genero').val())
})
$('#submitCreate').on('click', function(){
	$('#especialidadModal').text($('#especialidad option:selected').text())
})
$('#submitCreate').on('click', function(){
	$('#consultorioModal').text($('#consultorio option:selected').text())
})
$('#submitCreate').on('click', function(){
	$('#doctoresModal').text($('#doctores option:selected').text())
})
$('#submitCreate').on('click', function(){
	$('#fechaModal').text($('#fecha').val())
})
$('#submitCreate').on('click', function(){
	$('#nacimientoModal').text($('#nacimiento').val())
})
$('#submitCreate').on('click', function(){
	$('#edadModal').text($('#edad').val())
})
$('#submitCreate').on('click',function(){
	$('#emailModal').text($('#email').val())
})

$('.mostrarModal').on('click', function(){
$('.bd-example-modal-lg').modal('toggle');
})
$('.mostrarModalregistro').on('click', function(){
$('.bd-example-modal-lg').modal('toggle');
})

$('.delete-modal').on('click', function(){
$('.deleteContent').modal('show');
})


$('.mostrarmodal').on('click', function(){
$('.fade').modal('toggle');
})
$('.modal').on('click', function () {
  $('bs-example-modal-lg').modal('toggle');
})

//$('#myModal').modal('toggle');
//$('#myModal').modal('show');
//$('#myModal').modal('hide');

$('#confirmDelete').on('show.bs.modal', function(e) {
    //get data-id attribute of the clicked element
        var productId = $(e.relatedTarget).data('planesvip_idPlanesvip');
        var productName = $(e.relatedTarget).data('planesvip_nombre');
    $("#confirmDelete #pName").val( productName );
    $("#delForm").attr('action', 'put your action here with productId');//e.g. 'domainname/products/' + productId
});

//GALERIA IMAGENES//
$(document).ready(function() {
    $('#Carousel').carousel({
        interval: 5000
    })
});
//GALERIA IMAGENES//
$('.modal').on('click', function(){	
})
//MOSTRAR DATOS INPUT EN FORM MODAL EDIT V

$('.mostrarModal').on('click', function(){
	$('#idPlanesvip').val($(this).data('id'));
	$('#id_hotel').val($(this).data('id'));
	$('#id_rest').val($(this).data('id'));
	$('#id_imagen').val($(this).data('id'));
	$('#consultorio_id').val($(this).data('id'));
	$('#paciente_id').val($(this).data('id'));
	$('#especialidad_id').val($(this).data('id'));
	$('#nombreModal').val($(this).data('nombre'));
	$('#direccionModal').val($(this).data('direccion'));
	$('#cedulaModal').val($(this).data('cedula'));
	$('#telefonoModal').val($(this).data('telefono'));
	$('#direccionModal').val($(this).data('direccion'));
	$('#motivomodal').val($(this).data('motivo'));
	$('#turnoModal').val($(this).data('turno'));
	$('#generoModal').val($(this).data('genero'));
	$('#especialidadModal').text($(this).data('especialidad option:selected'));
	$('#doctorModal').text($(this).data('doctor option:selected'));
	$('#consultorioModal').text($(this).data('consultorio option:selected'));
	$('#fechaModal').val($(this).data('fecha'));
	$('#edadModal').val($(this).data('edad'));
	$('#fechanacimientoModal').val($(this).data('fechanacimiento'));
	$('#nacimientoModal').val($(this).data('nacimiento'));
	$('#ciudadModal').val($(this).data('ciudad'));
	$('#emailModal').val($(this).data('email'));
})

$('.delete-Modal').on('click', function(){
	$('#cita_id').val($(this).data('id'));
	$('#doctor_id').val($(this).data('id'));
	$('#consultorio_id').val($(this).data('id'));
	$('#paciente_id').val($(this).data('id'));
	$('#especialidad_id').val($(this).data('id'));
	$('#nombreModal').val($(this).data('nombre'));
	$('#apellidoModal').val($(this).data('apellido'));
	$('#cedulaModal').val($(this).data('cedula'));
	$('#telefonoModal').val($(this).data('telefono'));
	$('#direccionModal').val($(this).data('direccion'));
	$('#motivomodal').val($(this).data('motivo'));
	$('#turnoModal').val($(this).data('turno'));
	$('#generoModal').val($(this).data('genero'));
	$('#especialidadModal').text($(this).data('especialidad option:selected'));
	$('#doctorModal').text($(this).data('doctor option:selected'));
	$('#consultorioModal').text($(this).data('consultorio option:selected'));
	$('#fechaModal').val($(this).data('fecha'));
	$('#edadModal').val($(this).data('edad'));
	$('#fechanacimientoModal').val($(this).data('fechanacimiento'));
	$('#nacimientoModal').val($(this).data('nacimiento'));
	$('#ciudadModal').val($(this).data('ciudad'));
	$('#emailModal').val($(this).data('email'));
})


$(document).on('click', '.delete-Modal', function() {
  	$('#myModal').modal('show');
  	$('#cita_id').val($(this).data('id'));
	$('#doctor_id').val($(this).data('id'));
	$('#consultorio_id').val($(this).data('id'));
	$('#paciente_id').val($(this).data('id'));
	$('#especialidad_id').val($(this).data('id'));
	$('#nombreModal').val($(this).data('nombre'));
	$('#apellidoModal').val($(this).data('apellido'));
	$('#cedulaModal').val($(this).data('cedula'));
	$('#telefonoModal').val($(this).data('telefono'));
	$('#direccionModal').val($(this).data('direccion'));
	$('#motivomodal').val($(this).data('motivo'));
	$('#turnoModal').val($(this).data('turno'));
	$('#generoModal').val($(this).data('genero'));
	$('#especialidadModal').text($(this).data('especialidad option:selected'));
	$('#doctorModal').text($(this).data('doctor option:selected'));
	$('#consultorioModal').text($(this).data('consultorio option:selected'));
	$('#fechaModal').val($(this).data('fecha'));
	$('#edadModal').val($(this).data('edad'));
	$('#fechanacimientoModal').val($(this).data('fechanacimiento'));
	$('#nacimientoModal').val($(this).data('nacimiento'));
	$('#ciudadModal').val($(this).data('ciudad'));
	$('#emailModal').val($(this).data('email'));
});

$(document).on('click', '.delete-modal', function() {
  $('#footer_action_button').text(" Delete");
  $('#footer_action_button').removeClass('glyphicon-check');
  $('#footer_action_button').addClass('glyphicon-trash');
  $('.actionBtn').removeClass('btn-success');
  $('.actionBtn').addClass('btn-danger');
  $('.actionBtn').addClass('delete');
  $('.modal-title').text('Delete');
  $('.id').text($(this).data('id'));
  $('.deleteContent').show();
  $('.form-horizontal').hide();
  $('.title').html($(this).data('title'));
  $('#myModal').modal('show');
});

$('.modal-footer').on('click', '.delete', function() {
  $.ajax({
    type: 'get',
    url: 'deletePaciente',
    data: {
      '_token': $('input[name=_token]').val(),
      'id': $('.id').text()
    },
    success: function(data) {
      $('.paciente' + $('.id').text()).remove();
    }
  });
});

/* inicio funcion de notas */

$(document).on('click', '#addnotebtn', function() {
   $( "#addnote" ).animate({
     opacity: 1
   }, 1500 );
});

$(document).on('click', '#closenotebtn', function() {
   $( "#addnote" ).animate({
     opacity: 0
   }, 1500 );
});

var Modal = (function() {

  var trigger = $qsa('.modal__trigger'); // what you click to activate the modal
  var modals = $qsa('.modal'); // the entire modal (takes up entire window)
  var modalsbg = $qsa('.modal__bg'); // the entire modal (takes up entire window)
  var content = $qsa('.modal__content'); // the inner content of the modal
	var closers = $qsa('.modal__close'); // an element used to close the modal
  var w = window;
  var isOpen = false;
	var contentDelay = 400; // duration after you click the button and wait for the content to show
  var len = trigger.length;

  // make it easier for yourself by not having to type as much to select an element
  function $qsa(el) {
    return document.querySelectorAll(el);
  }

  var getId = function(event) {

    event.preventDefault();
    var self = this;
    // get the value of the data-modal attribute from the button
    var modalId = self.dataset.modal;
    var len = modalId.length;
    // remove the '#' from the string
    var modalIdTrimmed = modalId.substring(1, len);
    // select the modal we want to activate
    var modal = document.getElementById(modalIdTrimmed);
    // execute function that creates the temporary expanding div
    makeDiv(self, modal);
  };

  var makeDiv = function(self, modal) {

    var fakediv = document.getElementById('modal__temp');

    /**
     * if there isn't a 'fakediv', create one and append it to the button that was
     * clicked. after that execute the function 'moveTrig' which handles the animations.
     */

    if (fakediv === null) {
      var div = document.createElement('div');
      div.id = 'modal__temp';
      self.appendChild(div);
      moveTrig(self, modal, div);
    }
  };

  var moveTrig = function(trig, modal, div) {
    var trigProps = trig.getBoundingClientRect();
    var m = modal;
    var mProps = m.querySelector('.modal__content').getBoundingClientRect();
    var transX, transY, scaleX, scaleY;
    var xc = w.innerWidth / 2;
    var yc = w.innerHeight / 2;

    // this class increases z-index value so the button goes overtop the other buttons
    trig.classList.add('modal__trigger--active');

    // these values are used for scale the temporary div to the same size as the modal
    scaleX = mProps.width / trigProps.width;
    scaleY = mProps.height / trigProps.height;

    scaleX = scaleX.toFixed(3); // round to 3 decimal places
    scaleY = scaleY.toFixed(3);


    // these values are used to move the button to the center of the window
    transX = Math.round(xc - trigProps.left - trigProps.width / 2);
    transY = Math.round(yc - trigProps.top - trigProps.height / 2);

		// if the modal is aligned to the top then move the button to the center-y of the modal instead of the window
    if (m.classList.contains('modal--align-top')) {
      transY = Math.round(mProps.height / 2 + mProps.top - trigProps.top - trigProps.height / 2);
    }


		// translate button to center of screen
		trig.style.transform = 'translate(' + transX + 'px, ' + transY + 'px)';
		trig.style.webkitTransform = 'translate(' + transX + 'px, ' + transY + 'px)';
		// expand temporary div to the same size as the modal
		div.style.transform = 'scale(' + scaleX + ',' + scaleY + ')';
		div.style.webkitTransform = 'scale(' + scaleX + ',' + scaleY + ')';


		window.setTimeout(function() {
			window.requestAnimationFrame(function() {
				open(m, div);
			});
		}, contentDelay);

  };

  var open = function(m, div) {

    if (!isOpen) {
      // select the content inside the modal
      var content = m.querySelector('.modal__content');
      // reveal the modal
      m.classList.add('modal--active');
      // reveal the modal content
      content.classList.add('modal__content--active');

      /**
       * when the modal content is finished transitioning, fadeout the temporary
       * expanding div so when the window resizes it isn't visible ( it doesn't
       * move with the window).
       */

      content.addEventListener('transitionend', hideDiv, false);

      isOpen = true;
    }

    function hideDiv() {
      // fadeout div so that it can't be seen when the window is resized
      div.style.opacity = '0';
      content.removeEventListener('transitionend', hideDiv, false);
    }
  };

  var close = function(event) {

		event.preventDefault();
    event.stopImmediatePropagation();

    var target = event.target;
    var div = document.getElementById('modal__temp');

    /**
     * make sure the modal__bg or modal__close was clicked, we don't want to be able to click
     * inside the modal and have it close.
     */

    if (isOpen && target.classList.contains('modal__bg') || target.classList.contains('modal__close')) {

      // make the hidden div visible again and remove the transforms so it scales back to its original size
      div.style.opacity = '1';
      div.removeAttribute('style');

			/**
			* iterate through the modals and modal contents and triggers to remove their active classes.
      * remove the inline css from the trigger to move it back into its original position.
			*/

			for (var i = 0; i < len; i++) {
				modals[i].classList.remove('modal--active');
				content[i].classList.remove('modal__content--active');
				trigger[i].style.transform = 'none';
        trigger[i].style.webkitTransform = 'none';
				trigger[i].classList.remove('modal__trigger--active');
			}

      // when the temporary div is opacity:1 again, we want to remove it from the dom
			div.addEventListener('transitionend', removeDiv, false);

      isOpen = false;

    }

    function removeDiv() {
      setTimeout(function() {
        window.requestAnimationFrame(function() {
          // remove the temp div from the dom with a slight delay so the animation looks good
          div.remove();
        });
      }, contentDelay - 50);
    }

  };

  var bindActions = function() {
    for (var i = 0; i < len; i++) {
      trigger[i].addEventListener('click', getId, false);
      closers[i].addEventListener('click', close, false);
      modalsbg[i].addEventListener('click', close, false);
    }
  };

  var init = function() {
    bindActions();
  };

  return {
    init: init
  };

}());

Modal.init();





/* fin funcion de notas */

[].forEach.call(document.getElementsByClassName('tags-input'), function (el) {
    let hiddenInput = document.createElement('input'),
        mainInput = document.createElement('input'),
        tags = [];
    
    hiddenInput.setAttribute('type', 'hidden');
    hiddenInput.setAttribute('name', el.getAttribute('data-name'));

    mainInput.setAttribute('type', 'text');
    mainInput.classList.add('main-input');
    mainInput.addEventListener('input', function () {
        let enteredTags = mainInput.value.split(',');
        if (enteredTags.length > 1) {
            enteredTags.forEach(function (t) {
                let filteredTag = filterTag(t);
                if (filteredTag.length > 0)
                    addTag(filteredTag);
            });
            mainInput.value = '';
        }
    });

    mainInput.addEventListener('keydown', function (e) {
        let keyCode = e.which || e.keyCode;
        if (keyCode === 8 && mainInput.value.length === 0 && tags.length > 0) {
            removeTag(tags.length - 1);
        }
    });

    el.appendChild(mainInput);
    el.appendChild(hiddenInput);

    addTag('hello!');

    function addTag (text) {
        let tag = {
            text: text,
            element: document.createElement('span'),
        };

        tag.element.classList.add('tag');
        tag.element.textContent = tag.text;

        let closeBtn = document.createElement('span');
        closeBtn.classList.add('close');
        closeBtn.addEventListener('click', function () {
            removeTag(tags.indexOf(tag));
        });
        tag.element.appendChild(closeBtn);

        tags.push(tag);

        el.insertBefore(tag.element, mainInput);

        refreshTags();
    }

    function removeTag (index) {
        let tag = tags[index];
        tags.splice(index, 1);
        el.removeChild(tag.element);
        refreshTags();
    }

    function refreshTags () {
        let tagsList = [];
        tags.forEach(function (t) {
            tagsList.push(t.text);
        });
        hiddenInput.value = tagsList.join(',');
    }

    function filterTag (tag) {
        return tag.replace(/[^\w -]/g, '').trim().replace(/\W+/g, '-');
    }
});