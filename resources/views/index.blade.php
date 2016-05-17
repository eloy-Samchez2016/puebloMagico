@extends('layouts.principal')

@section('menu')
	<li><a href="{!!URL::to('/')!!}" class="active">home</a></li>
	<li><a href="{!!URL::to('/atractivo')!!}">Atractivo</a></li>
	<li><a href="{!!URL::to('/eventos')!!}">Eventos</a></li>
	<li><a href="{!!URL::to('/servicios')!!}">Servicios</a></li>
	<li><a href="{!!URL::to('/contacto')!!}">contacto</a></li>
@stop

@section('content')
				<!--bannerslider-->
				<div class="header-banner">
					<div class="slider">
						<div class="container">
							<div class="callbacks_container">
								<ul class="rslides" id="slider">
									<li>	
										<div class="caption">
											<h3>Canyon Milagro - New Mexico</h3>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Lorem ipsum dolor sit amet, </p>          
										</div>
									</li>
									<li>
										<div class="caption">
											<h3>Middle Loup River Property-NEW!</h3>  
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Lorem ipsum dolor sit amet, </p>          
										</div>
									</li>
									<li>	
										<div class="caption">
											<h3>Western Heartlands - Wayoming</h3>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Lorem ipsum dolor sit amet, </p>          
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!--bannerslider-->
				<!--welcome-->
				<div class="content">
					<div class="welcome">
						<div class="container">
							<h2>welcome to Freehold agency</h2>
							<div class="wel-grids">
								<div class="col-md-4 wel-grid">
									<img src="images/p1.jpg" class="img-responsive" alt=""/>
									<h4>Morbi Pellentesque Urna</h4>
									<p>Nullam placerat aliquet nisl id finibus. Nulla mollis mattis magna in hendrerit. Pellentesque nunc nisl, dapibus eget erat non, sagittis accumsan dolor.</p>
								</div>
								<div class="col-md-4 wel-grid">
									<img src="images/p2.jpg" class="img-responsive" alt=""/>
									<h4>Morbi Pellentesque Urna</h4>
									<p>Nullam placerat aliquet nisl id finibus. Nulla mollis mattis magna in hendrerit. Pellentesque nunc nisl, dapibus eget erat non, sagittis accumsan dolor.</p>
								</div>
								<div class="col-md-4 wel-grid">
									<img src="images/p3.jpg" class="img-responsive" alt=""/>
									<h4>Morbi Pellentesque Urna</h4>
									<p>Nullam placerat aliquet nisl id finibus. Nulla mollis mattis magna in hendrerit. Pellentesque nunc nisl, dapibus eget erat non, sagittis accumsan dolor.</p>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				<!--welcome-->
				<!--feature-->
					<div class="feature">
						<div class="container">
							<h3>feature project</h3>
								<div class="feature-grids">
									<div class="col-md-3 feature-grid">
									<a href="#" class="mask">
									<img src="images/p4.jpg" class="img-responsive zoom-img" alt=""></a>	
									</div>
									<div class="col-md-3 feature-grid1">
										<h4>Latest land for sale:</h4>
										<p>Nullam placerat aliquet nisl id finibus. Nulla mollis mattis magna in hendrerit. Pellentesque nunc nisl, dapibus eget erat non, sagittis accumsan dolor.Nullam placerat aliquet nisl id finibus. Nulla mollis mattis </p>
										<a href="#" class="button">read more</a>
									</div>
									<div class="col-md-3 feature-grid">
										<a href="#" class="mask">
									<img src="images/p5.jpg" class="img-responsive zoom-img" alt=""></a>	
									</div>
									<div class="col-md-3 feature-grid">
										<a href="#" class="mask">
									<img src="images/p6.jpg" class="img-responsive zoom-img" alt=""></a>	
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="feature-grids1">
									<div class="col-md-6 feat-grid">
										<a href="#" class="mask">
									<img src="images/p7.jpg" class="img-responsive zoom-img" alt=""></a>	
									</div>
									<div class="col-md-6 feat-grid">
										<div class="feat-grids">
											<div class="featu-grid">
												<a href="#" class="mask">
												<img src="images/p8.jpg" class="img-responsive zoom-img" alt=""></a>	
											</div>
											<div class="featu-grid1">
												<h4>Latest land for sale:</h4>
												<p>Nullam placerat aliquet nisl id finibus. Nulla mollis mattis magna in hendrerit. Pellentesque nunc nisl, dapibus eget erat non, sagittis accumsan dolor.Nullam placerat aliquet nisl id finibus. Nulla mollis mattis </p>
												<a href="#" class="button">read more</a>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="feature-grids2">
									<div class="col-md-3 feature-grid">
										<a href="#" class="mask">
									<img src="images/p9.jpg" class="img-responsive zoom-img" alt=""></a>	
									</div>
									<div class="col-md-3 feature-grid">
										<a href="#" class="mask">
									<img src="images/p10.jpg" class="img-responsive zoom-img" alt=""></a>	
									</div>
									<div class="col-md-3 feature-grid1">
										<h4>Latest land for sale:</h4>
										<p>Nullam placerat aliquet nisl id finibus. Nulla mollis mattis magna in hendrerit. Pellentesque nunc nisl, dapibus eget erat non, sagittis accumsan dolor.Nullam placerat aliquet nisl id finibus. Nulla mollis mattis </p>
										<a href="#" class="button">read more</a>
									</div>
									<div class="col-md-3 feature-grid">
										<a href="#" class="mask">
									<img src="images/p11.jpg" class="img-responsive zoom-img" alt=""></a>	
									</div>
									<div class="clearfix"></div>
								</div>
						</div>
					</div>
				<!--feature-->
				<div class="testimonials">
					<div class="container">
						<h3>testimonials</h3>
						<div class="test-grids">
							<div class="col-md-4 test-grid">
								<img src="images/te1.png" class="img-responsive" alt=""/>
								<h4>Bradley Grosh</h4>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum</p>
							</div>
							<div class="col-md-4 test-grid">
							<img src="images/te2.png" class="img-responsive" alt=""/>
								<h4>David Austin</h4>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum</p>
							</div>
							<div class="col-md-4 test-grid">
								<img src="images/te3.png" class="img-responsive" alt=""/>
								<h4>Patrick Pool</h4>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="test-grids1">
							<div class="col-md-6 test-grid1">
								<img src="images/te4.png" class="img-responsive" alt=""/>
								<h4>Bradley Grosh</h4>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum</p>
							</div>
							<div class="col-md-6 test-grid2">
							<img src="images/te5.png" class="img-responsive" alt=""/>
								<h4>David Austin</h4>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum</p>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<!--agency-->
					<div class="brokers">
						<div class="container">
							<h3>our agents</h3>
							<div class="broker-grids">
								<div class="col-md-4 broker-grid">
									<h4>paul robertson</h4>
									<p>Paul is a licensed real estate broker in USA</p>
									<p>9870 St Vincent Place,Glasgow, DC 45 Fr 45..</p>
									<p>Telephone: +1 800 603 6035</p>
									<p>Email : <a href="mailto:info@example.com"> mail@example.com</a></p>																										
								</div>
								<div class="col-md-4 broker-grid">
									<h4>robert lee</h4>
									<p>Robert is a licensed real estate broker in UA</p>
									<p>9863 - 9867 Mill Road, Cambridge, MG9 99H.</p>
									<p>Telephone: +1 800 603 6035</p>
									<p>Email : <a href="mailto:info@example.com"> mail@example.com</a></p>																										
								</div>
								<div class="col-md-4 broker-grid">
									<h4>joel</h4>
									<p>Joel is a licensed real estate agent in UK</p>
									<p>8901 Marmora Road, Glasgow, D04 89GR</p>
									<p>Telephone: +1 800 603 6035</p>
									<p>Email : <a href="mailto:info@example.com"> mail@example.com</a></p>																										
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				<!--agency-->
				</div>


@stop