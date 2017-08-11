<div class="newproducts-w3agile">
        <div class="container">
            <h3>PLAN VIP</h3>
                <div class="agile_top_brands_grids">
                @foreach($planesvip as $planvip)
                    <div class="col-md-3 top_brand_left-1">
                        <div class="hover14 column">
                            <div class="agile_top_brand_left_grid">
                                <div class="agile_top_brand_left_grid_pos">
                                    <img src="/../public/images/offer.png" alt=" " class="img-responsive">
                                </div>
                                <div class="agile_top_brand_left_grid1">
                                    <figure>
                                        <div class="snipcart-item block">
                                            <div class="snipcart-thumb">
                                                <a href="products.html"><img title=" " alt=" " src="/../public/images/apple-icon-152x152.png"></a>     
                                                <p>{{$planvip->nombre}}</p>
                                                <div class="stars">
                                                    <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                                </div>
                                                    <h4>PRECIO: <span>{{$planvip->costo}}BsF</span></h4>
                                            </div>
                                            <div class="snipcart-details top_brand_home_details">
                                                        <!-- Asi se redireccion con el boton a otras vistas. simpre ira <a></a> antes de cada boton con su ruta especifica -->
                                            <a href="{{ route('planesvip.show', $planvip->idPlanesvip) }}">                                                
                                            <input type="submit" name="submit" value="Ver detalle" class="button"/></a>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                  <div class="clearfix"> </div>
                </div>
        </div>
    </div>