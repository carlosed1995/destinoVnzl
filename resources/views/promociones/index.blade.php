@extends('layouts.app')

@section('content')

<div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
                <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Inicio</a></li>
                <li class="active">Promociones</li>
            </ol>
        </div>
    </div>
<!-- //breadcrumbs -->
<!--- groceries -->
    <div class="products">
        <div class="container">
            <div class="col-md-4 products-left">
                <div class="categories">
                    <h2>CATERGORIAS</h2>
                    <ul class="cate">
                    <li><a><i class="fa fa-arrow-right"></i>PROXIMAMENTE</a></li>
                            <li><a href=""><i class="fa fa-arrow-right" aria-hidden="true"></i> CATEGORIAS</a></li>
                            <li><a href=""><i class="fa fa-arrow-right" aria-hidden="true"></i> CATEGORIAS</a></li>
                            <li><a href=""><i class="fa fa-arrow-right" aria-hidden="true"></i> CATEGORIAS</a> </li>
                            <li><a href=""><i class="fa fa-arrow-right" aria-hidden="true"></i> CATEGORIAS</a> </li>
                            <li><a href=""><i class="fa fa-arrow-right" aria-hidden="true"></i> CATEGORIAS</a></li>             
                    </ul>

                </div>                                                                                                                                                                              
            </div>

            <div class="col-md-8 products-right">
                <div class="products-right-grid">
                    <div class="products-right-grids">
                        <!-- desbloquear cuando se integre la funcionalidad filtros
                        <div class="sorting">
                            <select id="country" onchange="change_country(this.value)" class="frm-field required sect">
                                <option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>Default sorting</option>
                                <option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>Sort by popularity</option> 
                                <option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>Sort by average rating</option>                    
                                <option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>Sort by price</option>                             
                            </select>
                        </div>
                        <div class="sorting-left">
                            <select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
                                <option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>Item on page 9</option>
                                <option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>Item on page 18</option> 
                                <option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>Item on page 32</option>                   
                                <option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>All</option>                               
                            </select>
                        </div>-->
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="agile_top_brands_grids">
                    <div class="col-md-4 top_brand_left">
                        <div class="hover14 column">
                            <div class="agile_top_brand_left_grid">
                                <div class="agile_top_brand_left_grid_pos">
                                    <img src="images/offer.png" alt=" " class="img-responsive">
                                </div>
                                <div class="agile_top_brand_left_grid1">
                                    <figure>
                                        <div class="snipcart-item block">
                                            <div class="snipcart-thumb">
                                                <a href="single.html"><img title=" " alt=" " src="images/apple-icon-152x152.png"></a>       
                                                <p>Nombre del Hotel</p>
                                                <h4>DESCUENTO: 50%</h4>
                                            </div>
                                            <div class="snipcart-details top_brand_home_details">
                                                        <!-- Asi se redireccion con el boton a otras vistas. simpre ira <a></a> antes de cada boton con su ruta especifica -->
                                            <a href="{{url('/detallepromo')}}">                                                
                                            <input type="submit" name="submit" value="Ver detalle" class="button"/></a>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 top_brand_left">
                        <div class="hover14 column">
                            <div class="agile_top_brand_left_grid">
                                <div class="agile_top_brand_left_grid_pos">
                                    <img src="images/offer.png" alt=" " class="img-responsive">
                                </div>
                                <div class="agile_top_brand_left_grid1">
                                    <figure>
                                        <div class="snipcart-item block">
                                            <div class="snipcart-thumb">
                                                <a href="single.html"><img title=" " alt=" " src="images/apple-icon-152x152.png"></a>       
                                                <p>Nombre del Hotel</p>
                                                <h4>DESCUENTO: 50%</h4>
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
                    </div>
                    <div class="col-md-4 top_brand_left">
                        <div class="hover14 column">
                            <div class="agile_top_brand_left_grid">
                                <div class="agile_top_brand_left_grid_pos">
                                    <img src="images/offer.png" alt=" " class="img-responsive">
                                </div>
                                <div class="agile_top_brand_left_grid1">
                                    <figure>
                                        <div class="snipcart-item block">
                                            <div class="snipcart-thumb">
                                                <a href="single.html"><img title=" " alt=" " src="images/apple-icon-152x152.png"></a>       
                                                <p>Nombre del Hotel</p>
                                                <h4>DESCUENTO: 50%</h4>
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
                    </div>
                        <div class="clearfix"> </div>
                </div>
                <div class="agile_top_brands_grids">
                    <div class="col-md-4 top_brand_left">
                        <div class="hover14 column">
                            <div class="agile_top_brand_left_grid">
                                <div class="agile_top_brand_left_grid_pos">
                                    <img src="images/offer.png" alt=" " class="img-responsive">
                                </div>
                                <div class="agile_top_brand_left_grid1">
                                    <figure>
                                        <div class="snipcart-item block">
                                            <div class="snipcart-thumb">
                                                <a href="single.html"><img title=" " alt=" " src="images/apple-icon-152x152.png"></a>       
                                                <p>Nombre del Hotel</p>
                                                <h4>DESCUENTO: 50%</h4>
                                            </div>
                                            <div class="snipcart-details top_brand_home_details">
                                                        <!-- Asi se redireccion con el boton a otras vistas. simpre ira <a></a> antes de cada boton con su ruta especifica -->
                                            <a href="{{url('/hoteles')}}">                                                
                                            <input type="submit" name="submit" value="Ver detalle" class="button"/></a>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 top_brand_left">
                        <div class="hover14 column">
                            <div class="agile_top_brand_left_grid">
                                <div class="agile_top_brand_left_grid_pos">
                                    <img src="images/offer.png" alt=" " class="img-responsive">
                                </div>
                                <div class="agile_top_brand_left_grid1">
                                    <figure>
                                        <div class="snipcart-item block">
                                            <div class="snipcart-thumb">
                                                <a href="single.html"><img title=" " alt=" " src="images/apple-icon-152x152.png"></a>       
                                                <p>Nombre del Hotel</p>
                                                <h4>DESCUENTO: 50%</h4>
                                            </div>
                                            <div class="snipcart-details top_brand_home_details">
                                                        <!-- Asi se redireccion con el boton a otras vistas. simpre ira <a></a> antes de cada boton con su ruta especifica -->
                                            <a href="{{url('/hoteles')}}">                                                
                                            <input type="submit" name="submit" value="Ver detalle" class="button"/></a>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 top_brand_left">
                        <div class="hover14 column">
                            <div class="agile_top_brand_left_grid">
                                <div class="agile_top_brand_left_grid_pos">
                                    <img src="images/offer.png" alt=" " class="img-responsive">
                                </div>
                                <div class="agile_top_brand_left_grid1">
                                    <figure>
                                        <div class="snipcart-item block">
                                            <div class="snipcart-thumb">
                                                <a href="single.html"><img title=" " alt=" " src="images/apple-icon-152x152.png"></a>       
                                                <p>Nombre del Hotel</p>
                                                <h4>DESCUENTO: 50%</h4>
                                            </div>
                                            <div class="snipcart-details top_brand_home_details">
                                                        <!-- Asi se redireccion con el boton a otras vistas. simpre ira <a></a> antes de cada boton con su ruta especifica -->
                                            <a href="{{url('/hoteles')}}">                                                
                                            <input type="submit" name="submit" value="Ver detalle" class="button"/></a>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="clearfix"> </div>
                </div>
                <div class="agile_top_brands_grids">
                    <div class="col-md-4 top_brand_left">
                        <div class="hover14 column">
                            <div class="agile_top_brand_left_grid">
                                <div class="agile_top_brand_left_grid_pos">
                                    <img src="images/offer.png" alt=" " class="img-responsive">
                                </div>
                                <div class="agile_top_brand_left_grid1">
                                    <figure>
                                        <div class="snipcart-item block">
                                            <div class="snipcart-thumb">
                                                <a href="single.html"><img title=" " alt=" " src="images/apple-icon-152x152.png"></a>       
                                                <p>Nombre del Hotel</p>
                                                <h4>DESCUENTO: 50%</h4>
                                            </div>
                                            <div class="snipcart-details top_brand_home_details">
                                                        <!-- Asi se redireccion con el boton a otras vistas. simpre ira <a></a> antes de cada boton con su ruta especifica -->
                                            <a href="{{url('/hoteles')}}">                                                
                                            <input type="submit" name="submit" value="Ver detalle" class="button"/></a>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 top_brand_left">
                        <div class="hover14 column">
                            <div class="agile_top_brand_left_grid">
                                <div class="agile_top_brand_left_grid_pos">
                                    <img src="images/offer.png" alt=" " class="img-responsive">
                                </div>
                                <div class="agile_top_brand_left_grid1">
                                    <figure>
                                        <div class="snipcart-item block">
                                            <div class="snipcart-thumb">
                                                <a href="single.html"><img title=" " alt=" " src="images/apple-icon-152x152.png"></a>       
                                                <p>Nombre del Hotel</p>
                                                <h4>DESCUENTO: 50%</h4>
                                            </div>
                                            <div class="snipcart-details top_brand_home_details">
                                                        <!-- Asi se redireccion con el boton a otras vistas. simpre ira <a></a> antes de cada boton con su ruta especifica -->
                                            <a href="{{url('/hoteles')}}">                                                
                                            <input type="submit" name="submit" value="Ver detalle" class="button"/></a>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 top_brand_left">
                        <div class="hover14 column">
                            <div class="agile_top_brand_left_grid">
                                <div class="agile_top_brand_left_grid_pos">
                                    <img src="images/offer.png" alt=" " class="img-responsive">
                                </div>
                                <div class="agile_top_brand_left_grid1">
                                    <figure>
                                        <div class="snipcart-item block">
                                            <div class="snipcart-thumb">
                                                <a href="single.html"><img title=" " alt=" " src="images/apple-icon-152x152.png"></a>       
                                                <p>Nombre del Hotel</p>
                                                <h4>DESCUENTO: 50%</h4>
                                            </div>
                                            <div class="snipcart-details top_brand_home_details">
                                                        <!-- Asi se redireccion con el boton a otras vistas. simpre ira <a></a> antes de cada boton con su ruta especifica -->
                                            <a href="{{url('/hoteles')}}">                                                
                                            <input type="submit" name="submit" value="Ver detalle" class="button"/></a>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="clearfix"> </div>
                </div>
                <nav class="numbering">
                    <ul class="pagination paging">
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="active"><a href="#">1<span class="sr-only">(current)</span></a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
<!-- groceries --->
<!-- //footer -->


@endsection
