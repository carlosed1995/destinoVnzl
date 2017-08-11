@extends('layouts.app')

@section('content')

<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Detalle</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
	<div class="products">
		<div class="container">
			<div class="agileinfo_single">
				
				<div class="col-md-4 agileinfo_single_left">
					<img id="example" src="images/apple-icon-152x152.png" alt=" " class="img-responsive">
				</div>
				<div class="col-md-8 agileinfo_single_right">
				<h2>NOMBRE HOTEL</h2>
					<div class="rating1">
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5">
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3" checked="">
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
					</div>
					<div class="w3agile_description">
						<h4>Descripcion:</h4>
						<p>INFOMARCION SOBRE EL HOTEL SUS SERVICIOS Y MAS.</p>
					</div>
					<div class="snipcart-item block">
						<div class="snipcart-thumb agileinfo_single_right_snipcart">
							<h4 class="m-sing">DESCUENTO: 50%</h4>
						</div>
						<div class="snipcart-details agileinfo_single_right_details">
							

									
						<input type="submit" name="submit" value="Reservar" class="button">

						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>





@endsection
