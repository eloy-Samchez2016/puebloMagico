@extends('layouts.principal')

@section('menu')
	<li><a href="{!!URL::to('/')!!}">home</a></li>
	<li><a href="{!!URL::to('/atractivo')!!}" class="active">Atractivo</a></li>
	<li><a href="{!!URL::to('/eventos')!!}">Eventos</a></li>
	<li><a href="{!!URL::to('/servicios')!!}">Servicios</a></li>
	<li><a href="{!!URL::to('/contacto')!!}">contacto</a></li>
@stop

@section('content')
<!--bannerslider-->
				<div class="header-banner ban1">
				</div>
				<!--bannerslider-->
	<div class="content">
		<!--services-->
		<div class="services">
			<div class="container">
				<h2>services</h2>
					<div class="services-grids">
					<div class="col-md-6 services-grid">
						<img src="images/s1.jpg" class="img-responsive" alt=""/>
						<div class="ser-info">
							<h4>PROPERTY MARKETING</h4>
							<p>Mauris fermentum tortor non enim aliquet condimentum nam aliquam pretium feugiat duis sem est viverra eu interdum ac.</p>
						</div>
					</div>
					<div class="col-md-6 services-grid">
						<img src="images/s2.jpg" class="img-responsive" alt=""/>
						<div class="ser-info">
							<h4>BUYER AGENCY</h4>
							<p>Mauris fermentum tortor non enim aliquet condimentum nam aliquam pretium feugiat duis sem est viverra eu interdum ac.</p>
						</div>
					</div>
					<div class="clearfix"></div>
					</div>
					<div class="services-grids1">
					<div class="col-md-6 services-grid">
						<img src="images/s3.jpg" class="img-responsive" alt=""/>
						<div class="ser-info">
							<h4>PROPERTY MARKETING</h4>
							<p>Mauris fermentum tortor non enim aliquet condimentum nam aliquam pretium feugiat duis sem est viverra eu interdum ac.</p>
						</div>
					</div>
					<div class="col-md-6 services-grid">
						<img src="images/s4.jpg" class="img-responsive" alt=""/>
						<div class="ser-info">
							<h4>BUYER AGENCY</h4>
							<p>Mauris fermentum tortor non enim aliquet condimentum nam aliquam pretium feugiat duis sem est viverra eu interdum ac.</p>
						</div>
					</div>
					<div class="clearfix"></div>
					</div>
			</div>
		</div>
		<!--services-->
		<div class="advantages">
					<div class="container">
						<h3>Advantages</h3>
						<div class="advantages-grids">
							<div class="col-md-4 advantage-grid">
								<div class="advantage">
									<div class="left-grid">
										<p>01</p>
									</div>
								<div class="right-grid">
									<h4>Decking concrete Kool</h4>
									<p>How wonderful it is that nobody need wait a singlemoment before starting to improve the world.</p>
								</div>
							<div class="clearfix"></div>
							</div>
							</div>	
								<div class="col-md-4 advantage-grid">
									<div class="advantage">
									<div class="left-grid">
										<p>02</p>
									</div>
								<div class="right-grid">
									<h4>Decking concrete Kool</h4>
									<p>How wonderful it is that nobody need wait a singlemoment before starting to improve the world.</p>
								</div>
							<div class="clearfix"></div>
							</div>
								</div>	
								<div class="col-md-4 advantage-grid">
									<div class="advantage">
									<div class="left-grid">
										<p>03</p>
									</div>
								<div class="right-grid">
									<h4>Decking concrete Kool</h4>
									<p>How wonderful it is that nobody need wait a singlemoment before starting to improve the world.</p>
								</div>
							<div class="clearfix"></div>
							</div>
								</div>
								<div class="col-md-4 advantage-grid">
									<div class="advantage">
									<div class="left-grid">
										<p>04</p>
									</div>
								<div class="right-grid">
									<h4>Decking concrete Kool</h4>
									<p>How wonderful it is that nobody need wait a singlemoment before starting to improve the world.</p>
								</div>
							<div class="clearfix"></div>
							</div>
								</div>
								<div class="col-md-4 advantage-grid">
									<div class="advantage">
									<div class="left-grid">
										<p>05</p>
									</div>
								<div class="right-grid">
									<h4>Decking concrete Kool</h4>
									<p>How wonderful it is that nobody need wait a singlemoment before starting to improve the world.</p>
								</div>
							<div class="clearfix"></div>
							</div>
								</div>
								<div class="col-md-4 advantage-grid">
									<div class="advantage">
									<div class="left-grid">
										<p>06</p>
									</div>
								<div class="right-grid">
									<h4>Decking concrete Kool</h4>
									<p>How wonderful it is that nobody need wait a singlemoment before starting to improve the world.</p>
								</div>
							<div class="clearfix"></div>
							</div>
								</div>
								<div class="clearfix"></div>	
							</div>
						</div>
					</div>
				<!--advantage-->
		<div class="service-list">
			<div class="container">
				<h3>what we offer</h3>
					<div class="service-grids">
						<div class="col-md-4 ser-list">
						<ul>
							<li><a href="#">Fusce interdum metus et turpis</a></li>
							<li><a href="#">Morbi volutpat enim placerat </a></li>
							<li><a href="#">Praesent porttitor congue elit, non</a></li>
							<li><a href="#">Lorem ipsum dolor sed leoraesent</a></li>
							<li><a href="#">Fusce interdum metus et turpis ornare</a></li>
							<li><a href="#">Morbi volutpat enim placerat ipsum</a></li>
						</ul>
						</div>
						<div class="col-md-4 ser-list">
						<ul>
							<li><a href="#">Pestibulum molestieenean nonummy</a></li>
							<li><a href="#">Hendreritivamus eget nibh vel metus</a></li>
							<li><a href="#">Aenean nec eros luctus stibulum ante</a></li>
							<li><a href="#">Osollic velitauguet pharetra augue nec</a></li>
							<li><a href="#">Pestibulum molestieenean nonummy</a></li>
							<li><a href="#">Hendreritivamus eget nibh vel metus</a></li>
						</ul>
						</div>
						<div class="col-md-4 ser-list">
						<ul>
							<li><a href="#">Lorem ipsum dolor sit</a></li>
							<li><a href="#">Vestibulum ante faucibus orci</a></li>
							<li><a href="#">Dapibus pulvinonec eget tellus</a></li>
							<li><a href="#">Tincidunt ac, viverraonec porta diam </a></li>
							<li><a href="#">Lorem ipsum dolor sit</a></li>
							<li><a href="#">Vestibulum ante faucibus orci ltrices</a></li>
						</ul>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>

	</div>
@stop