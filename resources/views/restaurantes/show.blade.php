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
            	            	            @if(Session::has('flash_message'))
 <div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-6">
			<div class="alert alert-success alert-dismissable" align="center">
			  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			        {{ Session::get('flash_message') }}
			 </div>
		</div>
	</div>
</div>
@endif
              <h1 data-c-scroll-aware data-classes="is-hidden" data-add-on-enter data-remove-on-leave data-target="#device-header" itemprop="name">
                  Restaurante:<br>{{$rest->nombre}}
              </h1>
            </div>
          </div>
           <ul class="nav nav-tabs">
			  <li class="active"><a href="#tab_a" data-toggle="tab">Detalles</a></li>
			  <!--AQUI EMPIEZA EL FOREACH PARA GENERAR LAS PESTAÑAS
			  <li><a href="#tab_b" data-toggle="tab">Terminos</a></li>-->
			  <!--AQUI TERMINA EL FOREACH PARA GENERAR LAS PESTAÑAS-->
			
			</ul>
			<div class="tab-content">
			   <div class="tab-pane active" id="tab_a">
									<div class="l-section l-section--bordered l-section--padded l-section--tight l-section--flush-mobile u-text-align-center">
                  <table class="c-feature-table c-feature-table--two-column c-feature-table--padded-mobile">
                    <tbody>
                     <tr>
                        <td itemprop="additionalProperty" itemscope itemtype="http://schema.org/PropertyValue">
                        	<br>
                          <h4 class="epsilon c-feature-table__header" itemprop="name">Estado</h4>
                          <div itemprop="value">
                              <p class="delta text-weight-normal"><?php echo ucwords(strtolower($rest->Estado)); ?></p>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td itemprop="additionalProperty" itemscope itemtype="http://schema.org/PropertyValue">
                          <h4 class="epsilon c-feature-table__header" itemprop="name">Ciudad</h4>
                          <div itemprop="value">
                              <p class="delta text-weight-normal"><?php echo ucwords(strtolower($rest->Ciudad)); ?></p>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td itemprop="additionalProperty" itemscope itemtype="http://schema.org/PropertyValue">
                          <h4 class="epsilon c-feature-table__header" itemprop="name">Zona</h4>
                          <div itemprop="value">
                              <p class="delta text-weight-normal"><?php echo ucwords(strtolower($rest->Zona)); ?></p>
                          </div>
                        </td>
                      </tr>
                      <tr>
						<td itemprop="additionalProperty" itemscope itemtype="http://schema.org/PropertyValue">
                          <h4 class="epsilon c-feature-table__header" itemprop="name">Dirección</h4>
                          <div itemprop="value">
                            <p class="delta text-weight-normal">{{$rest->direccion}}</p>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td itemprop="additionalProperty" itemscope itemtype="http://schema.org/PropertyValue">
                          <h4 class="epsilon c-feature-table__header" itemprop="name">Contacto</h4>
                          <p class="delta text-weight-normal c-feature-table__span-double" itemprop="value">Tlf: {{$rest->telefono}}</p>
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
							<button id='submitCreate' type="button" value="Reservar" class="btn btn-info btn-lg mostrarModal" class="button" id='{{$rest->id}}' data-user="{{Auth::user()->name}}" data-title="Edit" data-id="{{$rest->id}}" data-nombre="{{$rest->nombre}}" data-direccion="{{$rest->direccion}}" data-url="{{$rest->url}}" data-horario="{{$rest->horario}}" data-descripcion="{{$rest->descripcion}}" data-sugerencias="{{$rest->sugerencias}}" data-descuento="{{$rest->descuentos}}" data-toggle="modal" type="button">Reservar</button>
						</div>
						@endif
                        </td>
                    </tr>

                    </tbody>
                  </table>

            </div>
			        </div>

			        <div class="tab-pane" id="tab_b">
				<div class="l-section l-section--bordered l-section--padded l-section--tight l-section--flush-mobile u-text-align-center">
                  <table class="c-feature-table c-feature-table--two-column c-feature-table--padded-mobile">
                    <tbody>
                      <tr>
                        <td itemprop="additionalProperty" itemscope itemtype="http://schema.org/PropertyValue">
                          <h4 class="epsilon c-feature-table__header" itemprop="name"></h4>
                          <p class="delta text-weight-normal c-feature-table__span-double" itemprop="value"></p>
                        </td>
                      </tr>
                    </tbody>
                  </table>

            </div>
			        </div>
			</div><!-- tab content -->

            
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


       </div>

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
@if (Auth::guest())
								<!-------MODAL GUEST------->
									<div class="modal fade" id="myModal" role="dialog">
											<div class="modal-dialog">
											
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal">&times;</button>
														<h4 class="modal-title">AVISO</h4>
													</div>
													<div class="modal-body">
														<p>Para disfrutar de todos nuestros servicios, como la reserva de restaurantes debes estar registrado y haber iniciado sesion.
															</p>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
													</div>
												</div>

											</div>
										</div>
	@else
		<!---MODAL RESERVA AUTH--->


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


<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      			<div class="modal-dialog">
       			 <div class="modal-content">
								<div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"> <span aria-hidden="true" class="">×</span><span class="sr-only">Cerrar</span></button>
                        <h4 class="modal-title" id="myModalLabel">Reservar Restaurant</h4>
                    </div>
                    <div class="modal-body">
                        {!!Form::open(['route' => 'reservarestaurante.store', 'method' => 'post'])!!}                       
                      <input type="hidden" id="id_hotel" value="" name="id_hotel">
											<input type="hidden" id="idReservaHtl" value="" name="idReservaHtl">
											 
											<h4 class="price">Datos Personales:</h4>
												<div class="form-group">
																 <label>Nombres</label>
																<input type="text" name="nombre" disabled placeholder="{{ Auth::user()->name }}" id="" class="form-control">
												</div>
												 <div class="form-group">
																<label>Apellidos</label>
																<input type="text" name="apellidos" disabled placeholder="{{ Auth::user()->apellido }}"  id="" class="form-control">
												</div>
													<div class="form-group">
																<label>Cedula</label> 
																<input type="text" name="documento" disabled placeholder="{{ Auth::user()->cedula }}" id="" class="form-control">
													</div> 
												<div class="form-group">
															 <label>Telefono</label>
																<input type="text" name="telefono_fijo"  disabled placeholder="{{ Auth::user()->telefono_movil}}"  id="" class="form-control">
												</div>
												<div class="form-group">
															 <label>Otro Telefono (Opcional)</label>
																<input type="text" name="telefono_cel" placeholder="Ingrese un numero de telefono" id="" class="form-control">
												</div>
												<div class="form-group">
															 <label>Correo</label>
																<input type="text" name="correo" placeholder="{{ Auth::user()->email}}" id="" class="form-control">
												</div>
											<h4 class="price">Datos del Restaurant:</h4>
														<div class="form-group">
															 <label>Nombre del Restaurant</label>																
																<input type="text" name="" disabled id="nombreModal" class="form-control">
														</div>
											<input type="hidden" id="nombreModal" value="{{$rest->nombre}}" name="nombrerest">
              											<div class="form-group">
															<label>Fecha:</label>
																<div class="input-group">
																	<div class="input-group-addon">
																		<i class="fa fa-calendar"></i>
																	</div>
																	<input type="date" required  data-date-format='yyyy-mm-dd' name="fecha" class="form-control pull-right" id="reservation">
															</div> 
              											</div>

											  <div class="form-group has-feedback">
                                <label>Cantidad de Personas</label>
                                <select id="cant_personas" type="set" class="form-control" name="cant_personas">
                                    <option>1</option>
                                    <option>2</option>
																		<option>3</option>
                                    <option>4</option>
																		<option>5</option>
                                </select>
                        </div>
											<div class="form-group">
															 <label>Direccion</label>
																<input type="text" name="direccion" disabled placeholder="Ingrese un numero de telefono" id="direccionModal" class="form-control">
											</div>
											<input type="hidden" id="direccionModal" value="{{$rest->direccion}}" name="direccion">
											<div class="form-group">
											{!!Form::label('comentarios','Comentarios:')!!}
											{!!Form::textarea('comentarios',null,['class'=>'form-control textarea-content','placeholder'=>'Ingrese algun comentario que desee enviar(Opcional)'])!!}
											</div>
                    {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
                    
                    <button type="button"  class="btn btn-default pull-right" data-dismiss="modal">Cerrar</button>
    								{!!Form::close()!!}
                    </div>
        </div>
      </div>
    </div>

					

<div style="display:none">
	 {!!Form::open(['route' => 'reservarestaurant.store', 'method' => 'post', 'id' => 'creaEntidad'])!!} 
	{!!Form::close()!!}
</div>


@endif
	
@endsection
</html>