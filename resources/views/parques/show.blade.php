@extends('layouts.appdetalle')

@section('content')
<body class="product-detail" > 
	
<header class="l-header is-relative" data-l-header role="banner"> 
  <nav class="c-nav c-nav--main" id="navigation" role="navigation" data-c-toggle-close="navigation" data-close-on-current-target>
    <div class="c-nav__inner">
    </div>
  </nav>
</header>
    <main id="main" role="main">

<div aria-hidden="true" aria-labelledby="comparison-tool-header" class="c-comparison-tool" role="dialog" tabindex="9002"
     data-c-comparison-tool>
  <div class="c-modal" aria-hidden="true" aria-labelledby="retailers-modal-main-modal-header" role="dialog" tabindex="0" id="retailers-modal-main" data-c-modal>
    <div class="c-modal__wrapper" data-modal-element="wrapper">
      <button class="btn btn--close c-modal__close" type="button" aria-label="Close" data-modal-element="close">

      </button>

    </div>
  </div>

  <div class="c-modal" aria-hidden="true" aria-labelledby="retailers-modal-comparison-1-modal-header" role="dialog" tabindex="0" id="retailers-modal-comparison-1" data-c-modal>
    <div class="c-modal__wrapper" data-modal-element="wrapper">

    </div>
  </div>
  <div class="c-modal" aria-hidden="true" aria-labelledby="retailers-modal-comparison-2-modal-header" role="dialog" tabindex="0" id="retailers-modal-comparison-2" data-c-modal>
    <div class="c-modal__wrapper" data-modal-element="wrapper">

    </div>
  </div>
  <div class="c-modal" aria-hidden="true" aria-labelledby="retailers-modal-comparison-3-modal-header" role="dialog" tabindex="0" id="retailers-modal-comparison-3" data-c-modal>
    <div class="c-modal__wrapper" data-modal-element="wrapper">


    </div>
  </div>
  <div class="c-modal" aria-hidden="true" aria-labelledby="retailers-modal-comparison-5-modal-header" role="dialog" tabindex="0" id="retailers-modal-comparison-5" data-c-modal>
    <div class="c-modal__wrapper" data-modal-element="wrapper">

    </div>
  </div>
  <div class="c-modal" aria-hidden="true" aria-labelledby="retailers-modal-comparison-6-modal-header" role="dialog" tabindex="0" id="retailers-modal-comparison-6" data-c-modal>
    <div class="c-modal__wrapper" data-modal-element="wrapper">


    </div>
  </div>
  <div class="c-modal" aria-hidden="true" aria-labelledby="retailers-modal-comparison-7-modal-header" role="dialog" tabindex="0" id="retailers-modal-comparison-7" data-c-modal>
    <div class="c-modal__wrapper" data-modal-element="wrapper">
      
    </div>
  </div>
  <div class="c-modal" aria-hidden="true" aria-labelledby="retailers-modal-comparison-8-modal-header" role="dialog" tabindex="0" id="retailers-modal-comparison-8" data-c-modal>
    <div class="c-modal__wrapper" data-modal-element="wrapper">


    </div>
  </div>


  <div data-comparison-inner>

    <header class="l-header l-header--locked l-header--modal" role="banner" data-comparison-header>
      <div class="l-header__title-container">
        <button class="btn btn--icon l-header__link" aria-label="Close" tabindex="9002" data-comparison-deactivate data-modal-element="close">
        </button>
       
      </div>
    </header>

    <div class="c-comparison-tool__scroll-container" data-scroll-container>
<!--CODIGO BASURA PERO NO PUEDE QUEDAR VACIO YA QUE EL MAIN JS DA ERROR-->
      <div class="c-comparison-tool__main-container" data-main-container>
        <table class="c-feature-table" data-main-table>
          <tbody>
              <tr>
                <td class="c-comparison-tool__hidden-container c-comparison-tool__overlay-container"
                    aria-labelledby="comparison-see-all-specs"
                    aria-expanded="false"
                    role="tabpanel"
                    data-comparison-hidden-content>

                  <div class="c-comparison-tool__overlay-content"
                       id="comparison-see-all-specs"
                       role="tablist"
                       data-see-all-container>
                    <button class="btn btn--text"
                            aria-expanded="false"
                            role="tab"
                            tabindex="9012"
                            data-see-all-button
                            data-ca-category="compare-tech-specs"
                            data-ca-action="expanded">
                    </button>
                  </div>
                </td>
              </tr>
                <tr>
                  <td class="u-bg-white c-comparison-tool__hidden-container"
                      aria-labelledby="comparison-see-all-specs"
                      aria-expanded="false"
                      role="tabpanel"
                      data-comparison-hidden-content>
                      <button class="btn btn--text c-comparison-tool__hidden-content"
                         tabindex="9012"
                         data-c-modal-trigger
                         data-modal-id="retailers-modal-main">
                      </button>
                  </td>
                </tr>


          </tbody>
        </table>
      </div>

      <div class="c-comparison-tool__comparison-container" data-comparison-container>
        <table class="c-feature-table" data-comparison-table>
          <tbody>

                <tr>
                      <td class="u-bg-white c-comparison-tool__hidden-container"
                          aria-labelledby="comparison-see-all-specs"
                          aria-expanded="false"
                          role="tabpanel"
                          data-comparison-hidden-content>
                          <button class="btn btn--text c-comparison-tool__hidden-content"
                             tabindex="9012"
                             data-c-modal-trigger
                             data-modal-id="retailers-modal-comparison-1">
                          </button>
                      </td>
                      <td class="u-bg-white c-comparison-tool__hidden-container"
                          aria-labelledby="comparison-see-all-specs"
                          aria-expanded="false"
                          role="tabpanel"
                          data-comparison-hidden-content>
                          <button class="btn btn--text c-comparison-tool__hidden-content"
                             tabindex="9012"
                             data-c-modal-trigger
                             data-modal-id="retailers-modal-comparison-2">
                          </button>
                      </td>
                      <td class="u-bg-white c-comparison-tool__hidden-container"
                          aria-labelledby="comparison-see-all-specs"
                          aria-expanded="false"
                          role="tabpanel"
                          data-comparison-hidden-content>
                          <button class="btn btn--text c-comparison-tool__hidden-content"
                             tabindex="9012"
                             data-c-modal-trigger
                             data-modal-id="retailers-modal-comparison-3">
                          </button>
                      </td>
                      <td class="u-bg-white c-comparison-tool__hidden-container"
                          aria-labelledby="comparison-see-all-specs"
                          aria-expanded="false"
                          role="tabpanel"
                          data-comparison-hidden-content>
                          <button class="btn btn--text c-comparison-tool__hidden-content"
                             tabindex="9012"
                             data-c-modal-trigger
                             data-modal-id="retailers-modal-comparison-5">
                          </button>
                      </td>
                      <td class="u-bg-white c-comparison-tool__hidden-container"
                          aria-labelledby="comparison-see-all-specs"
                          aria-expanded="false"
                          role="tabpanel"
                          data-comparison-hidden-content>
                          <button class="btn btn--text c-comparison-tool__hidden-content"
                             tabindex="9012"
                             data-c-modal-trigger
                             data-modal-id="retailers-modal-comparison-6">
                          </button>
                      </td>
                      <td class="u-bg-white c-comparison-tool__hidden-container"
                          aria-labelledby="comparison-see-all-specs"
                          aria-expanded="false"
                          role="tabpanel"
                          data-comparison-hidden-content>
                          <button class="btn btn--text c-comparison-tool__hidden-content"
                             tabindex="9012"
                             data-c-modal-trigger
                             data-modal-id="retailers-modal-comparison-7">
                          </button>
                      </td>
                      <td class="u-bg-white c-comparison-tool__hidden-container"
                          aria-labelledby="comparison-see-all-specs"
                          aria-expanded="false"
                          role="tabpanel"
                          data-comparison-hidden-content>
                          <button class="btn btn--text c-comparison-tool__hidden-content"
                             tabindex="9012"
                             data-c-modal-trigger
                             data-modal-id="retailers-modal-comparison-8">
                          </button>
                      </td>
                      <td class="u-bg-white c-comparison-tool__hidden-container"
                          aria-labelledby="comparison-see-all-specs"
                          aria-expanded="false"
                          role="tabpanel"
                          data-comparison-hidden-content>
                      </td>
                      <td class="u-bg-white c-comparison-tool__hidden-container"
                          aria-labelledby="comparison-see-all-specs"
                          aria-expanded="false"
                          role="tabpanel"
                          data-comparison-hidden-content>
                      </td>
                </tr>
          </tbody>
        </table>
      </div>
<!--CODIGO BASURA PERO NO PUEDE QUEDAR VACIO YA QUE EL MAIN JS DA ERROR-->
    </div>
  </div>
</div>

  <article itemscope itemtype="http://schema.org/Product" data-comparison-sibling>

    <section class="product-detail u-bg-white">
      <div class="grid grid--full c-flow-container" data-c-flow-container>

        <div class="grid__item desktop--one-half">
          <div class="c-carousel__positioning-container c-flow-item c-flow-item--half u-bg-gray-light" data-c-flow-item>

            <div class="product-detail__images product-detail__device-container--phones">

   <div class="c-carousel c-carousel--full-height c-carousel--full-width c-carousel--right c-carousel--has-pager product-detail__carousel" data-c-carousel-simple data-fade="true" data-touch-gestures="true">	 
   	<div class="c-carousel__items c-carousel__items--single" data-carousel-element="items">
				@foreach($imagen as $key => $image)
			<div id="carousel-device-1" class="item{{ $key == 0 ? ' active' : '' }}">
				<div class="c-carousel__item" role="tabpanel" id="carousel-device-1" data-carousel-element="item">
					<div class="c-device product-detail__device--phones product-detail__image-container">
								<picture class="c-device__image-container product-detail__image">									
									<source srcset="/../public/imagenes/{{$image->n}}, /../public/imagenes/{{$image->n}}" media="(min-width: 1000px)">
									<img class="c-device__image" src="/../public/imagenes/{{$image->n}}" srcset="/../public/imagenes/{{$image->n}} 2x, /../public/imagenes/{{$image->n}} 1x" alt="">
								</picture>
										<style>
											#product-detail-image {
												background-image: url('/../public/imagenes/{{$image->n}}');
											}
											@media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
												#product-detail-image {
													background-image: url('/../public/imagenes/{{$image->n}}');
												}
											}
												@media (min-width: 1000px) {
													#product-detail-image {
														background-image: url('/../public/imagenes/{{$image->n}}');
													}
												}
												@media (min-width: 1000px) and (-webkit-min-device-pixel-ratio: 2), (min-width: 1000px) and (min-resolution: 192dpi) {
													#product-detail-image {
														background-image: url('/../public/imagenes/{{$image->n}}');
													}
												}
										</style>
					</div>
				</div>
			</div>
			
				@endforeach
		 </div>
                  <ul class="c-pager c-carousel__pager" role="tablist" data-carousel-pager>
                  	<?php $xxx = 0; ?>
                  	@foreach($imagen as $key => $image)
                      <li class="c-pager__item carousel__dot" role="tab" aria-controls="carousel-device-<?php echo $xxx++; ?>"aria-selected="true">
                        <button class="c-pager__item-link" data-g-event="image-device-carousel" data-g-action="item-clicked" data-g-label="0"></button>
                      </li>
					@endforeach
                  </ul>
                </div>
            </div>
          </div>
        </div>
     <div class="grid__item desktop--one-half product-detail__content u-bg-white">
          <div class="l-section l-section--bordered l-section--padded u-text-align-left u-upto-desktop-is-hidden">
            <div class="l-section__intro product-detail__intro u-text-align-left u-tight-left">
              <h1 data-c-scroll-aware data-classes="is-hidden" data-add-on-enter data-remove-on-leave data-target="#device-header" itemprop="name">
                  Parque: {{$parque->nombre}}
              </h1>
            </div>
          </div>
            <div class="l-section l-section--bordered l-section--padded l-section--tight l-section--flush-mobile u-text-align-center">



                  <table class="c-feature-table c-feature-table--two-column c-feature-table--padded-mobile">
                    <tbody>
                     <tr>
                        <td itemprop="additionalProperty" itemscope itemtype="http://schema.org/PropertyValue">
                        	<br>
                          <h4 class="epsilon c-feature-table__header" itemprop="name">Estado</h4>
                          <div itemprop="value">
                              <p class="delta text-weight-normal"></p>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td itemprop="additionalProperty" itemscope itemtype="http://schema.org/PropertyValue">
                          <h4 class="epsilon c-feature-table__header" itemprop="name">Ciudad</h4>
                          <div itemprop="value">
                              <p class="delta text-weight-normal"></p>
                          </div>
                        </td>
                      </tr>
                      <tr>
						<td itemprop="additionalProperty" itemscope itemtype="http://schema.org/PropertyValue">
                          <h4 class="epsilon c-feature-table__header" itemprop="name">Dirección</h4>
                          <div itemprop="value">
                            <p class="delta text-weight-normal">{{$parque->direccion}}</p>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td itemprop="additionalProperty" itemscope itemtype="http://schema.org/PropertyValue">
                          <h4 class="epsilon c-feature-table__header" itemprop="name">Contacto</h4>
                          <p class="delta text-weight-normal c-feature-table__span-double" itemprop="value">Tlf: {{$parque->telefono}}</p>
                        </td>
                      </tr>

                      <tr>
                        <td itemprop="additionalProperty" itemscope itemtype="http://schema.org/PropertyValue">
            				@if (Auth::guest()) 
						<div class="action">
							<button  type="button" class="btn btn-info btn-lg mostrarmodal" data-toggle="modalco" data-target="#myModal">Reservar</button>
						</div>
						@else
						<div class="action">
						<button  type="button" id='submitCreate' value="Reservar" class="btn btn-info btn-lg mostrarModal" class="button" id='{{$parque->id}}' data-user="{{Auth::user()->name}}" data-title="Edit" data-id="{{$parque->id}}" data-nombre="{{$parque->nombre}}" data-direccion="{{$parque->direccion}}"  data-toggle="modal" type="button">Reservar</button>
						</div>
					@endif
                        </td>
                      </tr>
                    </tbody>
                  </table>

            </div>
            		<script>
			
window.onload = function(){	
$("#submitCreate").click(function(){
	var dato = $("#id_hotel").val();
	var form = $("#creaEntidad");
	var routex=form.attr('action');
	var token = $("#creaEntidad input[name=_token]").val();
//alert(routex+' - '+token);
	$.ajax({
		url: routex,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',
		data:{id_hotel: dato},

		success:function(idRecibe){
			$("#idReservaHtl").val(idRecibe);
			
		},
		error:function(xhr, textStatus, error){
			alert('Error');
			console.log(xhr.statusText);
      console.log(textStatus);
      console.log(error);
		
			//$("#msj").html(msj.responseJSON.genre);
			//$("#msj-error").fadeIn();
		}
	});
}); // hasta aqui llega la function de registrar a los 3 primeros id
	
}
						</script>

<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>



       </div>
    </section>

      <section class="l-section u-bg-white" data-comparison-sibling data-c-tracking-section data-tracking-name="device-carousel">
            <div class="c-devices-pager" data-c-carousel-devices>
    <div class="c-tabs u-overflow-hidden" data-c-tabs>
      <div class="o-container">


  <div class="c-tabs-nav c-tabs-nav--device-carousel"
    data-active-item="1"
    data-default-key="0"
    data-c-tabs-nav
data-ca-category="device-carousel" >
    <ul class="c-tabs-nav__items"role="tablist">
        <li class="c-tabs-nav__item" data-item="1" role="presentation">
    <a id="devices-tab-phone" aria-controls="devices-panel-phone" data-carousel-device="carousel-devices-phone" href="#devices-panel-phone" class="c-tabs-nav__link" role="tab"data-ca-label="phone">

    </a>
  </li>

    </ul>
    <span class="c-tabs-nav__indicator"></span>
  </div>
      </div>
<!--CARROUSEL DE DETALLE HOTEL-->
      <div class="c-devices-pager-carousel" data-lazy-loading data-c-carousel-analytics data-ca-category="device-carousel" data-ca-label-prefix="phone:">
        <div class="c-devices-pager-carousel__dynamic-items" data-c-tabs-content>
            <div class="c-tabs__section c-carousel" aria-hidden="true" id="devices-panel-phone" aria-labelledby="devices-tab-phone" role="tabpanel">
              <div class="c-devices-pager-carousel__items" id="carousel-devices-phone">

              </div>
              <div class="u-text-align-center"><a class="btn" href="#">View all phones</a></div>
            </div>


        </div>
        <div class="c-devices-pager-carousel__swap-container">
          <div class="c-devices-pager-carousel__items c-carousel" data-carousel-element="items" data-c-scroll-aware data-classes="is-in-viewport" data-add-on-enter aria-labelledby="c-devices-pager-carousel__title" aria-describedby="c-devices-pager-carousel__description" role="complementary">
          </div>
        </div>

      </div>
    </div>
  </div>

      </section>

  </article>
    </main>
			
<script src="/../public/jsandroid/hammer.min.js"></script>
      <script src="/../public/jsandroid/TweenMax.min.js"></script>
			<script async src="/../public/js/main9861.js">
      <script src="http://www.google.com/jsapi"></script>
      <script async src="/../public/jsandroid/plusone.js">
        {"parsetags": "explicit"}
      </script>
      <script src="/../public/jsandroid/main.min.js"></script>
	
      <script>
        android.init();
      </script>
	
  </body>
@include('parques.modal')
	
@endsection
</html>