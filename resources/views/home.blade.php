@extends('layouts.app')

@section('content')
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- Main stylesheet and color file-->
    <main>      
      <section class="home-destinos home-parallax home-fade home-full-height" id="home">
        <div class="hero-slider">
          <ul class="slides">
          	@foreach($banner as $baner)
            <li class="bg-dark-30 bg-dark" style="background-image:url(/../public/imagenes/{{$baner->img}});">
              <div class="titan-caption">
                <div class="caption-content">

                  <div class="font-alt mb-30 titan-title-size4">{!!$baner->titulo1!!}</div>
                  <div class="font-alt mb-40 titan-title-size-4">{!!$baner->titulo2!!}</div>
                </div>
              </div>
            </li>
            @endforeach
          </ul>
        </div>
      </section>
      <div class="main">
        <hr class="divider-w">        
        <section class="module pb-0" id="works">
          <ul class="works-grid works-grid-gut works-grid-4 works-hover-w" id="works-grid">
          	@foreach($bannersec as $secundario)
            <li class="work-item illustration webdesign"><a href="">
                <div class="work-image"><img src="/../public/imagenes/{{$secundario->img1}}" alt="Portfolio Item"/></div>
                <div class="work-caption font-alt">
                  <h3 class="work-title">{{$secundario->titulo1}}</h3>
                  <div class="work-descr">Explorar</div>
                </div>
                </a>
            </li>
            
            <li class="work-item marketing photography"><a href="">
                <div class="work-image"><img src="/../public/imagenes/{{$secundario->img2}}" alt="Portfolio Item"/></div>
                <div class="work-caption font-alt">
                  <h3 class="work-title">{{$secundario->titulo2}}</h3>
                  <div class="work-descr">Explorar</div>
                </div></a></li>
            <li class="work-item illustration photography"><a href="">
                <div class="work-image"><img src="/../public/imagenes/{{$secundario->img3}}" alt="Portfolio Item"/></div>
                <div class="work-caption font-alt">
                  <h3 class="work-title">{{$secundario->titulo3}}</h3>
                  <div class="work-descr">Explorar</div>
                </div></a></li>
            <li class="work-item marketing photography"><a href="">
                <div class="work-image"><img src="/../public/imagenes/{{$secundario->img4}}" alt="Portfolio Item"/></div>
                <div class="work-caption font-alt">
                  <h3 class="work-title">{{$secundario->titulo4}}</h3>
                  <div class="work-descr">Explorar</div>
                </div></a></li>
          </ul>
          @endforeach
          </ul>
        </section>
        
        <hr class="divider-w">
         <section class="module" id="contact">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Contactanos</h2>
                <div class="module-subtitle font-serif"></div>
              </div>
            </div>
            
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                {!!Form::open(['route' => 'contacto.store', 'method' => 'post'])!!}
                @if (Auth::guest()) 
                <input type="hidden"  value="" name="id_usuario"> 
                @else
                <input type="hidden"  value="{{Auth::user()->id}}" name="id_usuario"> 
                @endif
                  <div class="form-group">
                    <label class="sr-only" for="name">Nombre</label>
                    <input class="form-control" type="text" id="name" name="nombre" placeholder="Nombre*" required="required" data-validation-required-message="Ingrese su nombre completo"/>
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <label class="sr-only" for="email">Correo</label>
                    <input class="form-control" type="email" id="email" name="correo" placeholder="Correo*" required="required" data-validation-required-message="Ingrese su correo electronico"/>
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" rows="7" id="message" name="comentario" placeholder="Mensaje*" required="required" data-validation-required-message="Sus comentarios"></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
		       <div class="form-group">
		              {!!Form::submit('Enviar',['class'=>'btn btn-default'])!!}
		      </div>
		      {!!Form::close()!!}
                <div class="ajax-response font-alt" id="contactFormResponse"></div>
              </div>
            </div>
          </div>
        </section>
        <section class="module" id="services">
          <div class="container">
            <div class="row multi-columns-row">
              <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="features-item">
                	<a target="_blank" href="https://www.facebook.com/Destino-Venezuela-248692658869370/">
                  <div class="features-icon"><spanboton class="fa fa-facebook"></spanboton></div>
                  </a>
                  <h3 class="features-title font-alt">Facebook</h3>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="features-item">
                	<a target="_blank" href="https://twitter.com/destino_ve">
                  <div class="features-icon"><spanboton class="fa fa-twitter"></spanboton></div>
                  </a>
                  <h3 class="features-title font-alt">Twitter</h3>
                  <p></p>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="features-item">
                	<a target="_blank" href="https://www.instagram.com/destino_ve/?hl=es">
                  <div class="features-icon"><spanboton class="fa fa-instagram"></spanboton></div>
                  </a>
                  <h3 class="features-title font-alt">Instragam</h3>
                  <p></p>
                </div>
              </div>
            </div>
          </div>
        </section>
        
        <section id="map-section">
          <div id="map"></div>
        </section>
        
        
      </div>
      <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    </main>
    <!--  
    JavaScripts
    =============================================
    -->
    <script src="/../public/jstitan/lib/jquery/dist/jquery.js"></script>
    <script src="/../public/jstitan/lib/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/../public/jstitan/lib/wow/dist/wow.js"></script>
    <script src="/../public/jstitan/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script>
    <script src="/../public/jstitan/lib/isotope/dist/isotope.pkgd.js"></script>
    <script src="/../public/jstitan/lib/imagesloaded/imagesloaded.pkgd.js"></script>
    <script src="/../public/jstitan/lib/flexslider/jquery.flexslider.js"></script>
    <script src="/../public/jstitan/lib/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="/../public/jstitan/lib/smoothscroll.js"></script>
    <script src="/../public/jstitan/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
    <script src="/../public/jstitan/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
    <script src="/../public/jstitan/plugins.js"></script>
    <script src="/../public/jstitan/main.js"></script>
    
  </body>
@endsection

