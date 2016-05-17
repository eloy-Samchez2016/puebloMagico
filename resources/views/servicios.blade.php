@extends('layouts.principal')

@section('menu')
	<li><a href="{!!URL::to('/')!!}">home</a></li>
	<li><a href="{!!URL::to('/atractivo')!!}">Atractivo</a></li>
	<li><a href="{!!URL::to('/eventos')!!}">Eventos</a></li>
	<li><a href="{!!URL::to('/servicios')!!}" class="active">Servicios</a></li>
	<li><a href="{!!URL::to('/contacto')!!}">contacto</a></li>
@stop

@section('content')
		<!--bannerslider-->
				<div class="header-banner ban1">
				</div>
				<!--bannerslider-->
		<div class="content">
		<!--gallery-->
	<div class="properties">		
		<div class="container">
			<h2>properties</h2>
			<div class="properties-grids">				
				<div class="col-md-4 propertie-grids view view-fourth">
					<a class="example-image-link" href="images/g1.jpg" data-lightbox="example-set" data-title="">
						<img src="images/g1.jpg" class="img-responsive" alt=""/>
						<div class="mask">
							<h5>Properties</h5>
						</div>
					</a>
				</div>
				<div class="col-md-4 propertie-grids view view-fourth">
					<a class="example-image-link" href="images/g2.jpg" data-lightbox="example-set" data-title="">
						<img src="images/g2.jpg" class="img-responsive" alt=""/>
						<div class="mask">
							<h5>Properties</h5>
						</div>
						</a>
					</div>
				<div class="col-md-4 propertie-grids view view-fourth">
					<a class="example-image-link" href="images/g3.jpg" data-lightbox="example-set" data-title="">
						<img src="images/g3.jpg" class="img-responsive" alt=""/>
						<div class="mask">
							<h5>Properties</h5>
						</div>
					</a>
				</div>
				<div class="col-md-4 propertie-grids view view-fourth">
					<a class="example-image-link" href="images/g4.jpg" data-lightbox="example-set" data-title="">
						<img src="images/g4.jpg" class="img-responsive" alt=""/>
						<div class="mask">
							<h5>Properties</h5>
						</div>
					</a>
				</div>
				<div class="col-md-4 propertie-grids view view-fourth">
					<a class="example-image-link" href="images/g5.jpg" data-lightbox="example-set" data-title="">
						<img src="images/g5.jpg" class="img-responsive" alt=""/>
						<div class="mask">
							<h5>Properties</h5>
						</div>
					</a>
				</div>
				<div class="col-md-4 propertie-grids view view-fourth">
					<a class="example-image-link" href="images/g6.jpg" data-lightbox="example-set" data-title="">
						<img src="images/g6.jpg" class="img-responsive" alt=""/>
						<div class="mask">
							<h5>Properties</h5>
						</div>
					</a>
				</div>
				<div class="col-md-4 propertie-grids view view-fourth">
					<a class="example-image-link" href="images/g7.jpg" data-lightbox="example-set" data-title="">
						<img src="images/g7.jpg" class="img-responsive" alt=""/>
						<div class="mask">
							<h5>Properties</h5>
						</div>
					</a>
				</div>
				<div class="col-md-4 propertie-grids view view-fourth">
					<a class="example-image-link" href="images/g8.jpg" data-lightbox="example-set" data-title="">
						<img src="images/g8.jpg" class="img-responsive" alt=""/>
						<div class="mask">
							<h5>Properties</h5>
						</div>
					</a>
				</div>
				<div class="col-md-4 propertie-grids view view-fourth">
					<a class="example-image-link" href="images/g9.jpg" data-lightbox="example-set" data-title="">
						<img src="images/g9.jpg" class="img-responsive" alt=""/>
						<div class="mask">
							<h5>Properties</h5>
						</div>
					</a>
				</div>
				<div class="clearfix"> </div>	
				<script src="js/lightbox-plus-jquery.min.js"> </script>
			</div>				
		</div>
	</div>	
	<!--portfolio-->
	</div>
@stop