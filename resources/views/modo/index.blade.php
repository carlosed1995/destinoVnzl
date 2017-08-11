@extends('layouts.app')
@section('content')
		
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
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h1>Modo de uso</h1>
        @foreach($modo as $modo)
				<p class="with-margin">
        {!!$modo->modo!!}
				</p>
        @endforeach
				<!--<h1>¿Quiénes somos?</h1>
				<p class="with-margin">
					Somos 123reserva.com una empresa conformada por un grupo de jóvenes profesionales y emprendedores que busca promocionar los atractivos turísticos que ofrece nuestro país, a través del impulso de las más variadas opciones de hospedaje a nivel nacional. 
				</p>
				<h1>Nuestro equipo</h1>
				<p class="with-margin">
					Nuestro baluarte son los profesionales que día a día laboran para que 123reserva.com pueda ofrecerle al usuario la información más completa y actualizada sobre más de 300 hospedajes en todo el país.
					Nuestro equipo se encuentra habilitado todo el año para resolver cualquier duda que el usuario pueda presentar durante el proceso de reserva o una vez realizada la operación. 
				</p>
				<h1>Nuestros valores</h1>
				<p class="with-margin">
					La adaptabilidad del sistema, el acceso a la más completa información que necesita el viajero y la atención garantizada en caso de cualquier duda a través de los distintos canales de atención habilitados hacen que la relación con el usuario se fortalezca y siempre desee regresar a la página de 123reserva.com al momento de organizar un nuevo viaje.
					Nos esforzamos en crear un lazo de confianza con el usuario al garantizar transacciones seguras y su reserva en el hospedaje de su preferencia. Los dispositivos de seguridad habilitados evitan fraudes y son garantía de responsabilidad en todo el proceso que culmina con el disfrute de sus vacaciones soñadas.
				</p>-->
			</div>
     </div>
      </section>
      
      
      @endsection