@extends('layouts.app')

@section('content')

<ul id="demo1">
            <li>
                <img src="images/11.jpg" alt="" />
                <!--Slider Description example-->
                <div class="slide-desc">
                    <h3>PROXIMAMENTE </h3>
                    <p>(Para navegar a fondo debes registrarte)</p>
                </div>
            </li>
            <li>
                <img src="images/22.jpg" alt="" />
                  <div class="slide-desc">
                    <h3>DESTINOS</h3>
                    <p>(Para navegar a fondo debes registrarte)</p>
                </div>
            </li>
            
            <li>
                <img src="images/44.jpg" alt="" />
                <div class="slide-desc">
                    <h3>LOYALFELL</h3>
                    <p>(Para navegar a fondo debes registrarte)</p>
                </div>
            </li>
</ul>
<div class="top-brands">
        <div class="container">
        <h2>Hoteles y Promociones</h2>
            <div class="grid_3 grid_5">
                <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                    <ul id="myTab" class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#expeditions" id="expeditions-tab" role="tab" data-toggle="tab" aria-controls="expeditions" aria-expanded="true">HOTELES</a></li>
                        <li role="presentation"><a href="#tours" role="tab" id="tours-tab" data-toggle="tab" aria-controls="tours">PROMOCIONES</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="expeditions" aria-labelledby="expeditions-tab">
                            <div class="agile-tp">
                                <h5>INFORMACION DE HOTELES</h5>
                                <p class="w3l-ad">DESCRIPCION...</p>
                            </div>
                            <div class="agile_top_brands_grids">
                            @foreach($pruebahotel as $pruebahoteles)
                                <div class="col-md-4 top_brand_left">
                                    <div class="hover14 column">
                                        <div class="agile_top_brand_left_grid">
                                            <div class="agile_top_brand_left_grid1">
                                                <figure>
                                                    <div class="snipcart-item block" >
                                                        <div class="snipcart-thumb">
                                                            <a href="{{url('/detallehotel')}}"><img title="HOTELS " alt=" " src="/../public/imagenes/{{$pruebahoteles->img}}" /></a>        
                                                            <p>{{$pruebahoteles->nombre}}</p>
                                                            <div class="stars">
                                                                <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                                            </div>
                                                            <h4>Descuento: {{$pruebahoteles->descuento}}</h4>
                                                        </div>
                                                        <div class="snipcart-details top_brand_home_details">
                                                        <!-- Asi se redireccion con el boton a otras vistas. simpre ira <a></a> antes de cada boton con su ruta especifica -->
                                                        <a href="{{url('/detallehotel')}}">                                                
                                                        <input type="submit" name="submit" value="Ver detalle" class="button"/></a>
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                            @endforeach  
                                
                            <div class="clearfix"> </div>
                            </div>
                            
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tours" aria-labelledby="tours-tab">
                            <div class="agile-tp">
                                <h5>INFORMACION DE PROMOCIONES</h5>
                                <p class="w3l-ad">DESCRIPCION...</p>
                            </div>
                            <div class="agile_top_brands_grids">
                                @foreach($restaurant as $restaurante)
                                <div class="col-md-4 top_brand_left">
                                    <div class="hover14 column">
                                        <div class="agile_top_brand_left_grid">                                            
                                            <div class="agile_top_brand_left_grid1">
                                                <figure>
                                                    <div class="snipcart-item block" >
                                                        <div class="snipcart-thumb">
                                                            <a href="{{ route('restaurantes.show', $restaurante->id) }}"><img title=" " alt=" " src="/../public/imagenes/{{$restaurante->img}}" /></a>        
                                                            <p>{{$restaurante->nombre}}</p>
                                                            <div class="stars">
                                                                <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                                            </div>
                                                            <h4>Precio: <span>BsF...</span></h4>
                                                        </div>
                                                        <div class="snipcart-details top_brand_home_details">
                                                        <!-- Asi se redireccion con el boton a otras vistas. simpre ira <a></a> antes de cada boton con su ruta especifica -->
                                                        <a href="{{ route('restaurantes.show', $restaurante->id) }}">                                                
                                                        <input type="submit" name="submit" value="Ver detalle" class="button"/></a>
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                             @endforeach      
                                <div class="clearfix"> </div>
                            </div>                            
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

     @include('layouts.contenido.escapes')

    @include('layouts.contenido.planesvip')

@endsection
