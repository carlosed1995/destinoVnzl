@include('layouts.htmljs.htmladmin')
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body>
	<script src="../public/js/solonumeros.js"></script>

	
	 <link href="../../public/plugins/bootstrap-onoff/css/bootstrap-toggle.min.css" media="screen" rel="stylesheet" type="text/css">
	 <script src="../../public/plugins/bootstrap-onoff/js/bootstrap-toggle.min.js" type="text/javascript"></script>
	
		 <link href="../public/plugins/multiselect-master/css/style.css" rel="stylesheet" type="text/css">
	 <script src="../public/plugins/multiselect-master/dist/js/multiselect.js" type="text/javascript"></script>
	
	
	
    <div id="wrapper">
        
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{url('/adminUsuario')}}">Admin Programa Destinos</a>
            </div>
					<ul class="nav navbar-top-links navbar-right">
                 <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                       {!!Auth::user()->name!!} <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Ajustes</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{{url('/logoutad')}}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                      
                         <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i>Admin Usuarios<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('usuarios.create')}}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>
                                <li>
                                    <a href="{!!URL::to('/usuarios') !!}"><i class='fa fa-list-ol fa-fw'></i>Lista de usuarios</a>
                                </li>
                            </ul>
                        </li>          
                        <li>
                            <a href="#"><i class="fa fa-cutlery fa-fw"></i>Restaurantes<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!!URL::to('/restaurantAdmin/create') !!}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>
                                <li>
                                    <a href="{!!URL::to('/restaurantAdmin') !!}"><i class='fa fa-list-ol fa-fw'></i>Lista de Restaurants</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-building-o fa-fw"></i>Hoteles<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('detallehotel.create')}}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>
                                <li>
                                    <a href="{{route('detallehotel.index')}}"><i class='fa fa-list-ol fa-fw'></i>Consultar</a>
                                </li>                                 
                            </ul>
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-photo fa-fw"></i>Planes Unicos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('PlanesUnicos.create')}}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>
                                <li>
                                    <a href="{{route('PlanesUnicos.index')}}"><i class='fa fa-list-ol fa-fw'></i>Consultar</a>
                                </li>
                            </ul>
                        </li>
                           <!--<li>
                            <a href="#"><i class="fa fa-gift fa-fw"></i>Promociones<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>
                                <li>
                                    <a href="#"><i class='fa fa-list-ol fa-fw'></i>Consultar</a>
                                </li>
                            </ul>
                        </li>-->
						 <li>
                            <a href="#"><i class="fa fa-sun-o fa-fw"></i>Tu destino<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('tudestinos.create')}}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>
                                <li>
                                    <a href="{{route('tudestinos.index')}}"><i class='fa fa-list-ol fa-fw'></i>Consultar</a>
                                </li>
                            </ul>
                        </li>
											  <!--  <li>
                            <a href=""><i class="fa fa-pencil-square fa-fw"></i>Etiquetas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!!URL::to('/tags/create') !!}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>
                                <li>
                                    <a href="{!!URL::to('/tags') !!}"><i class='fa fa-list-ol fa-fw'></i>Consultar</a>
                                </li>
                            </ul>
                        </li>-->
						<li>
                            <a href="#"><i class="fa fa-glass fa-fw"></i>Servicios de Hotel<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('iconos.create')}}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>
                                <li>
                                    <a href="{!!URL::to('/iconos') !!}"><i class='fa fa-list-ol fa-fw'></i>Consultar</a>
                                </li>
                            </ul>
                        </li>
											
						<li>
                            <a href="#"><i class="fa fa-camera fa-fw"></i>Diversión<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('parques.create')}}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>
                                <li>
                                    <a href="{{route('parques.index')}}"><i class='fa fa-list-ol fa-fw'></i>Consultar</a>
                                </li>
                            </ul>
                        </li>
										
						<li>
                            <a href="#"><i class=""></i>Regiones<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('regiones.create')}}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>
                                <li>
                                    <a href="{!!URL::to('/regiones') !!}"><i class='fa fa-list-ol fa-fw'></i>Consultar</a>
                                </li>
                            </ul>
                        </li>
					    <li>
                            <a href="#"><i class=""></i>Terminos y Condiciones<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('adminterminos.create')}}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>
                                <li>
                                    <a href="{{route('adminterminos.index')}}"><i class='fa fa-list-ol fa-fw'></i>Consultar</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class=""></i>Preguntas Frecuentes<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('adminpreguntas.create')}}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>
                                <li>
                                    <a href="{{route('adminpreguntas.index')}}"><i class='fa fa-list-ol fa-fw'></i>Consultar</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class=""></i>Modo de uso<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('adminmodo.create')}}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>
                                <li>
                                    <a href="{{route('adminmodo.index')}}"><i class='fa fa-list-ol fa-fw'></i>Consultar</a>
                                </li>
                            </ul>
                        </li>
                        
                           <li>
                            <a href="#"><i class=""></i>Certificados<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li> 
                                    <a href="{{route('certificados.create')}}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>
                                <li>
                                    <a href="{{route('certificados.index')}}"><i class='fa fa-list-ol fa-fw'></i>Consultar</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class=""></i>Banner Home<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li> 
                                    <a href="{{route('adminbanner.create')}}"><i class='fa fa-plus fa-fw'></i> Agregar Banner Principales</a>
                                </li>
                                <li>
                                    <a href="{{route('adminbanner.index')}}"><i class='fa fa-list-ol fa-fw'></i>Consultar Banner Principales</a>
                                </li>
                                <li> 
                                    <a href="{{route('adminbannersec.create')}}"><i class='fa fa-plus fa-fw'></i> Agregar Banner Secundarios</a>
                                </li>
                                <li>
                                    <a href="{{route('adminbannersec.index')}}"><i class='fa fa-list-ol fa-fw'></i>Consultar Banner Secundarios</a>
                                </li>
                            </ul>
                            
                        </li>
                        
											
											

                    </ul>
                </div>
            </div>
     </nav>
        <div id="page-wrapper">
          <br>
          @include('alerts.success')
          @include('alerts.errors')
            @yield('content')
        </div>
    </div>
  
@include('layouts.htmljs.scriptadmin')

</body>

</html>