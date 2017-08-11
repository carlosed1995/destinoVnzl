@extends('layouts.app')

@section('content')

<div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
                <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Inicio</a></li>
                <li class="active">Hoteles</li>
            </ol>
        </div>
    </div>
        
		
		<!-- Google Code for Remarketing Tag -->
		<script type="text/javascript">
		/* <![CDATA[ */
		var google_conversion_id = 971907020;
		var google_custom_params = window.google_tag_params;
		var google_remarketing_only = true;
		/* ]]> */
		</script>




    <body itemscope itemtype="http://schema.org/WebPage" >
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <section class="lodging-list-container">
    <div class="container2">
 
    <!--Sugerencias hijos-->  
	<!--Info hotel-->
            <div class="col-md-12 products-right">             
                <div class="agile_top_brands_grids">
                  @foreach($pruebahotel as $hotel)
									<?php //print_r($hotel); ?>
                    @if($hotel['act'])
                     <div class="col-md-3 top_brand_left">
                        <div class="hover14 column">
                            <div class="agile_top_brand_left_grid">
                                <div class="agile_top_brand_left_grid1">
                                     <div class="col-xs-8 col-sm-8 col-md-6 col-lg-6 cursor-finger more-information-click" rel="141">
                                       <a href="{{ route('hoteles.show', $hotel->id) }}">
                                         <img src="/../public/imagenes/{{$hotel->img}}" alt="Foto 1" class="img-responsive">
                                          <div class="lodging-similar-element" name="Destinos">		                            
                                            <spann>
                                                <h7>Descuento: {{$hotel->descuento}}</h7>
                                            </spann>
                                            <div style="clear:both;"></div>
                                            </div>
                                        </a> 
                                      </div>
                                  <!--SECCION VER MAS-->
                                  <!--BOTON VER MAS-->
                                   <div class="col-xs-4 col-sm-4 col-md-2 col-lg-boton-2 col-md-push-4 col-lg-boton-4">
                                      <a href="{{ route('hoteles.show', $hotel->id) }}">
                                        <button type="button"  class="btn btn-default pull-right" data-dismiss="modal">Ver mas</button>
                                    </a>
                                  </div>
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-pull-2 col-lg-pull-2">
                      
                 <h1 rel="141" class="tipo- cursor-finger more-information-click">
                  {{$hotel->nombre}}
                 </h1>
            <label for="" class="label-services">Direccion</label>
                  <h2 class="zona">
                    <?php  echo substr($hotel->direccion,0,30)."...";  ?> <br>
										<!-- Mostar estado y ciudad aqui-->
										
										<br>
                  </h2>

            <!--JOIN ICONOS-->
            <?php
            $tiposerv = DB::table('t_tipos_serv')
            ->join('pruebahotel','pruebahotel.id', '=', 't_tipos_serv.idEntidad')
            ->join('n_tiposervicio','n_tiposervicio.id', '=', 't_tipos_serv.tipo')
            //LIMITAR LAS IMAGENES  /////////
            ->where('t_tipos_serv.idEntidad', '=', $hotel->id)
            ->select('n_tiposervicio.*')
            ->get();         
            ?>
            <!--JOIN ICONOS-->
                      <label for="" class="label-services">Servicios</label>
                      <div class="lodging-services lodging-search-services-services">
                      @foreach($tiposerv as $servicio)
                        <img src="/../public/imagenes/{{$servicio->img}}" data-original-title="{{$servicio->nombre}" data-toggle="tooltip" data-placement="bottom">
                      @endforeach
                      </div>
                  </div>

                                </div>
                            </div>
                        </div>
                      <br>
                    </div>
                  
                  @endif
                  @endforeach
                                      <br>
                  <br>
                        <div class="clearfix"> </div>
                </div>
              <div class="pagination">{!!$pruebahotel->render()!!}</div>
                
                        <div class="clearfix"> </div>
                  </div>
           </div>
    </div>           
</section>               

@endsection

            