@include('layouts.htmljs.htmlheader')
@include('layouts.htmljs.htmlreset')
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body id="app-layout">
          <div class="page-loader">
            <div class="loader">Loading...</div>
        </div>
<div class="logo_products">
        <div class="container">

            <div class="w3ls_logo_products_left">
                    @if (Auth::guest())
                            <h1><a href="{{url('/')}}"><img class="logohome" title=" " alt=" " src="/../public/img/01.png" /></a></h1>
                        @else
                            <h1><a href="{{url('/home')}}"><img class="logohome" title=" " alt=" " src="/../public/img/01.png" /></a></h1>
                   @endif
            </div>
            
            <div class="clearfix"> </div>
        </div>
    </div>

<div class="navigation-agileits">
        <div class="container">
            <nav class="navbar navbar-default">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header nav_2">
                                <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div> 
                            <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                                <ul class="nav navbar-nav">
                                @if (Auth::guest())
                                    <li class="active"><a href="{{url('/')}}" class="act">Inicio</a></li>
                                @else
                                    <li class="active"><a href="{{url('/home')}}" class="act">Inicio</a></li> 
                                @endif  
                                    <!-- Mega Menu -->
                                    <li class="dropdown">
                                        <a href="{{route('hoteles.index')}}" class="dropdown-toggle" >Hoteles<b class="caret"></b></a>
                                        <ul class="dropdown-menu multi-column columns-3">
                                            <div class="row">
                                                <div class="multi-gd-img">
                                                    <ul class="multi-column-dropdown">
                                                        <h6>All Groceries</h6>
                                                        <li><a href="groceries.html">Dals & Pulses</a></li>
                                                        <li><a href="groceries.html">Almonds</a></li>
                                                        <li><a href="groceries.html">Cashews</a></li>
                                                        <li><a href="groceries.html">Dry Fruit</a></li>
                                                        <li><a href="groceries.html"> Mukhwas </a></li>
                                                        <li><a href="groceries.html">Rice & Rice Products</a></li>
                                                    </ul>
                                                </div>  
                                                
                                            </div>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{route('restaurantes.index')}}" class="dropdown-toggle" >Restaurantes<b class="caret"></b></a>
                                        <ul class="dropdown-menu multi-column columns-3">
                                            <div class="row">
                                                <div class="multi-gd-img">
                                                    <ul class="multi-column-dropdown">
                                                        <h6>All Household</h6>
                                                        <li><a href="household.html">Cookware</a></li>
                                                        <li><a href="household.html">Dust Pans</a></li>
                                                        <li><a href="household.html">Scrubbers</a></li>
                                                        <li><a href="household.html">Dust Cloth</a></li>
                                                        <li><a href="household.html"> Mops </a></li>
                                                        <li><a href="household.html">Kitchenware</a></li>
                                                    </ul>
                                                </div>
                                                
                                                
                                            </div>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{route('tudestino.index')}}" class="dropdown-toggle" >Tu Destino<b class="caret"></b></a>
                                        <ul class="dropdown-menu multi-column columns-3">
                                            <div class="row">
                                                <div class="multi-gd-img">
                                                    <ul class="multi-column-dropdown">
                                                        <h6>Baby Care</h6>
                                                        <li><a href="personalcare.html">Baby Soap</a></li>
                                                        <li><a href="personalcare.html">Baby Care Accessories</a></li>
                                                        <li><a href="personalcare.html">Baby Oil & Shampoos</a></li>
                                                        <li><a href="personalcare.html">Baby Creams & Lotion</a></li>
                                                        <li><a href="personalcare.html"> Baby Powder</a></li>
                                                        <li><a href="personalcare.html">Diapers & Wipes</a></li>
                                                    </ul>
                                                </div>
                                                
                                            </div>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{route('planunico.index')}}" class="dropdown-toggle" >Planes Únicos<b class="caret"></b></a>
                                        <ul class="dropdown-menu multi-column columns-3">
                                            <div class="row">
                                                <div class="multi-gd-img">
                                                    <ul class="multi-column-dropdown">
                                                        <h6>All Accessories</h6>
                                                        <li><a href="packagedfoods.html">Baby Food</a></li>
                                                        <li><a href="packagedfoods.html">Dessert Items</a></li>
                                                        <li><a href="packagedfoods.html">Biscuits</a></li>
                                                        <li><a href="packagedfoods.html">Breakfast Cereals</a></li>
                                                        <li><a href="packagedfoods.html"> Canned Food </a></li>
                                                        <li><a href="packagedfoods.html">Chocolates & Sweets</a></li>
                                                    </ul>
                                                </div>
                                                
                                            
                                            </div>
                                        </ul>
                                    </li>
                                  <!--  <li class="dropdown">
                                        <a href="{{url('/promociones')}}" class="dropdown-toggle">Promociones<b class="caret"></b></a>
                                        <ul class="dropdown-menu multi-column columns-3">
                                            <div class="row">
                                                <div class="multi-gd-img">
                                                    <ul class="multi-column-dropdown">
                                                        <h6>Tea & Coeffe</h6>
                                                        <li><a href="beverages.html">Green Tea</a></li>
                                                        <li><a href="beverages.html">Ground Coffee</a></li>
                                                        <li><a href="beverages.html">Herbal Tea</a></li>
                                                        <li><a href="beverages.html">Instant Coffee</a></li>
                                                        <li><a href="beverages.html"> Tea </a></li>
                                                        <li><a href="beverages.html">Tea Bags</a></li>
                                                    </ul>
                                                </div>
                            
                                            </div>
                                        </ul>
                                    </li>-->
                                    <li><a href="{{ url('/diversion') }}">Diversion</a></li>
                                    @if (Auth::guest())
                                <li><a class="pull-right" href="{{ url('/login') }}">Login</a></li>
                                <li><a class="pull-right" href="{{ url('/registrar') }}">Registrar</a></li>
                                @else
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" class="pull-right" data-toggle="dropdown" role="button" aria-expanded="false">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                    </ul>
                                </li>
                            @endif

                                </ul>
                            </div>
                </nav>


            </div>
            <div class="clearfix"> </div>
                                        @if(Session::has('flash_message'))
<div class="alert alert-success alert-dismissable" id="success-alert">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ Session::get('flash_message') }}
    </div>
    <script>
    $("#success-alert").fadeTo(10000, 500).slideUp(1000, function(){
    $("#success-alert").slideUp(1000);
});
</script>
@endif
           
        </div>


    @yield('content')
    

<footer>

   	<div class="footer-main">

   		<div class="row">
	      	<div class="col-two tab-1-3 mob-1-2 site-links">
	      		<h4>Hoteles</h4>
	      		<ul>
	      			<li><a href="#">Aliados</a></li>
						<li><a href="#">Casas</a></li>
						<li><a href="#">Villas</a></li>
						<li><a href="#">Posadas</a></li>
					</ul>
	      	</div> <!-- /site-links -->  

	      	<div class="col-two tab-1-3 mob-1-2 social-links">

	      		<h4>Restaurantes</h4>

	      		<ul>
	      			<li><a href="#">Caracas</a></li>
						<li><a href="#">Maracaibo</a></li>
						<li><a href="#">Margarita</a></li>
						<li><a href="#">Valencia</a></li>
					</ul>
	      	           	
	      	</div> <!-- /social -->
        <div class="col-two tab-1-3 mob-1-2 social-links">

	      		<h4>Tu Destino</h4>

	      		<ul>
	      			<li><a href="#">Conoce Venezuela</a></li>
						<li><a href="#">Transporte</a></li>
						<li><a href="#">Seguro</a></li>						
					</ul>
	      	           	
	      	</div>
        <div class="col-two tab-1-3 mob-1-2 social-links">

	      		<h4>Planes unicos</h4>

	      		<ul>
	      			<li><a href="#">Excursiones</a></li>
						<li><a href="#">Full Day</a></li>
						<li><a href="#">Ruta</a></li>
					</ul>	      	           	
	      	</div>
        <div class="col-two tab-1-3 mob-1-2 social-links">

	      		<h4>Diversion</h4>
	      		<ul>
	      			<li><a href="#">Acuaticos</a></li>
						<li><a href="#">Terrestres</a></li>
						<li><a href="#">Aereos</a></li>
						<li><a href="#">Gastronomicos</a></li>
					</ul>	      	           	
	      	</div>        
        <div class="col-four tab-full mob-full footer-info">            

	            <div class="footer-logo"></div>
		      </div> <!-- /footer-info -->
        <div class="col-twelve">

		         <div id="go-top" style="display: block;">
		            <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon ion-android-arrow-up"></i></a>
		         </div>         
	      	</div>
        
          <div class="colelem" id="u99">
            
        </div>
         <div class="clearfix colelem" id="pu100-4"><!-- group -->
         <img class="grpelem" id="u100-4" alt="Copyright 2017 © Corporación Loyalfeel. All rights reserved" width="336" height="21" src="/../public/imgnuevo/u100-4.png"/><!-- rasterized frame -->
          <a href="{{route('terminos.index')}}">
				 <img class="grpelem" id="u115-4" alt="Términos y condiciones" width="133" height="18" src="/../public/imgnuevo/u115-4.png"/>
					 </a>
                  <div class="grpelem" id="u121"><!-- simple frame --></div><!-- rasterized frame -->
         <div class="grpelem" id="u121"><!-- simple frame --></div>
         <a href="{{route('preguntas.index')}}">
         <img class="grpelem" id="u118-4" alt="Preguntas frecuentes" width="120" height="18" src="/../public/imgnuevo/u118-4.png"/>
         </a>
         <div class="grpelem" id="u124"><!-- simple frame --></div>
         <a href="{{route('modo.index')}}">
         <img class="grpelem" id="u120-4" alt="Modo de uso" width="74" height="16" src="/../public/imgnuevo/u120-4.png"/>
         </a>
           <div class="grpelem" id="u124"><!-- simple frame --></div>
         <img class="grpelem" id="u107-4" alt="Venezuela" width="58" height="16" src="/../public/imgnuevo/u107-4.png"/><!-- rasterized frame -->
         <div class="clip_frame grpelem" id="u108"><!-- image -->
          <img class="block" id="u108_img" src="/../public/imgnuevo/website_destino-092.png" alt="" width="25" height="21"/>
         </div>
        </div>
	      </div> <!-- /row -->

   	</div> <!-- /footer-main -->

        <div class="footer-bottom"></div>
        		<div class="col-twelve">
	      		<div class="copyright">
      
        
       </div>
		         </div>       
	      	</div>

   </footer> 
    <!-- JavaScripts -->
 @include('layouts.htmljs.scripts')
 @include('layouts.htmljs.google')
</body>
</html>

