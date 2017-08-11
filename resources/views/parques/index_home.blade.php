@extends('layouts.app')

@section('content')

<div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
                <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Inicio</a></li>
                <li class="active">Diversión</li>
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


    <link rel="stylesheet" type="text/css" href="/../public/css123/bootstrap123.css" />
    <link rel="stylesheet" type="text/css" href="/../public/css123/main.css" />

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
                  @foreach($parques as $parque)
								
                    @if($parque['act'])
                     <div class="col-md-3 top_brand_left">
                        <div class="hover14 column">
                            <div class="agile_top_brand_left_grid">
                                <div class="agile_top_brand_left_grid1">
                                     <div class="col-xs-8 col-sm-8 col-md-6 col-lg-6 cursor-finger more-information-click" rel="141">
                                       <a href="#">
                                       	<a href="{{ route('diversion.show', $parque->id) }}">
                                         <img src="/../public/imagenes/{{$parque->img}}" alt="Foto 1" class="img-responsive">

                                        </a> 
                                      </div>
                                  <!--SECCION VER MAS-->
                                  <!--BOTON VER MAS-->
                                   <div class="col-xs-4 col-sm-4 col-md-2 col-lg-boton-2 col-md-push-4 col-lg-boton-4">
                                      <a href="{{ route('diversion.show', $parque->id) }}">
                                        <button type="button"  class="btn btn-default pull-right" data-dismiss="modal">Ver mas</button>
                                    </a>
                                  </div>
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-pull-2 col-lg-pull-2">
                      
                 <h1 rel="141" class="tipo- cursor-finger more-information-click">
                  {{$parque->nombre}}
                 </h1>
            <label for="" class="label-services">Direccion</label>
                  <h2 class="zona">
                    <?php  echo substr($parque->direccion,0,30)."...";  ?> <br>
										<!-- Mostar estado y ciudad aqui-->
										
										<br>
                  </h2>

            <!--JOIN ICONOS-->
        
            
            <!--JOIN ICONOS-->
                     <!-- <label for="" class="label-services">Servicios</label>-->
                      <div class="lodging-services lodging-search-services-services">
              
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
              <div class="pagination">{!!$parques->render()!!}</div>
                
                        <div class="clearfix"> </div>
                  </div>
           </div>
    </div>           
</section>               

@endsection