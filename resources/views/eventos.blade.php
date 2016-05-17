@extends('layouts.principal')

@section('menu')
	<li><a href="{!!URL::to('/')!!}">home</a></li>
	<li><a href="{!!URL::to('/atractivo')!!}">Atractivo</a></li>
	<li><a href="{!!URL::to('/eventos')!!}" class="active">Eventos</a></li>
	<li><a href="{!!URL::to('/servicios')!!}">Servicios</a></li>
	<li><a href="{!!URL::to('/contacto')!!}">contacto</a></li>
@stop

@section('content')
<!--bannerslider-->
				<div class="header-banner ban1">
				</div>
				<!--bannerslider-->
		<div class="content">
		<!--about-->
			<div class="about-section">
				<div class="container">
					<h2> who we are</h2>
					<div class="about-grids">
						<div class="col-md-6 about-grid">
							<iframe src="https://player.vimeo.com/video/128330811" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 
						</div>
						<div class="col-md-6 about-grid1">
							<h4>Cras feugiat, felis sit amet molestie </h4>
								<p>lorem Ipsum is simply dummy text of the printing and typesetting industry., Lorem Ipsum dummy text ever since dummy text of the printing and usings 1500s,Duis aute irure dolor in reprehenderit in voluptate velit esse when an,Lorem Ipsum has been the industry's standard dummy text ever since dummy text of the printing and usings 1500s,</p>
								<p>lorem Ipsum is simply dummy text of the printing and typesetting industry., Lorem Ipsum dummy text ever since dummy text of the printing and usings 1500s,Duis aute irure dolor in reprehenderit in voluptate velit esse when an,Lorem Ipsum has been the industry's standard dummy text ever since dummy text of the printing and usings 1500s,</p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
	<!--about-->
			<div class="agency-list">
				<div class="container">
					<h3>agent listing</h3>
					<div class="agent-grids">
						<div class="col-md-3 agent-grid">
							<img src="images/a1.jpg" class="img-responsive" alt=""/>
						</div>
						<div class="col-md-3 agent-grid1">
							<h4>Lewis Tompson</h4>
							<p>Nam aliquam pretium feugiat. Duis sem est viverra eu interdum ac suscipit Nam aliquam pretium feugiat. Duis sem est viverra eu interdum ac suscipit </p>
							<span class="agent-text"> +1 800 603 6035</span>
							<span class="agent-text" ><a href="mailto:info@example.com">mail@example.com</a></span>
						</div>
						<div class="col-md-3 agent-grid">
							<img src="images/a2.jpg" class="img-responsive" alt=""/>
						</div>
						<div class="col-md-3 agent-grid1">
							<h4>Jessica Priston</h4>
							<p>Nam aliquam pretium feugiat. Duis sem est viverra eu interdum ac suscipit Nam aliquam pretium feugiat. Duis sem est viverra eu interdum ac suscipit</p>
							<span class="agent-text"> +1 800 603 6035</span>
							<span class="agent-text" ><a href="mailto:info@example.com">mail@example.com</a></span>
						</div>
						<div class="clearfix"></div>
						</div>
						<div class="agent-grids1">
						<div class="col-md-3 agent-grid">
							<img src="images/a3.jpg" class="img-responsive" alt=""/>
						</div>
						<div class="col-md-3 agent-grid1">
							<h4>Lewis Tompson</h4>
							<p>Nam aliquam pretium feugiat. Duis sem est viverra eu interdum ac suscipit Nam aliquam pretium feugiat. Duis sem est viverra eu interdum ac suscipit</p>
							<span class="agent-text"> +1 800 603 6035</span>
							<span class="agent-text" ><a href="mailto:info@example.com"> mail@example.com</a></span>
						</div>
						<div class="col-md-3 agent-grid">
							<img src="images/a4.jpg" class="img-responsive" alt=""/>
						</div>
						<div class="col-md-3 agent-grid1">
							<h4>Jessica Priston</h4>
							<p>Nam aliquam pretium feugiat. Duis sem est viverra eu interdum ac suscipit Nam aliquam pretium feugiat. Duis sem est viverra eu interdum ac suscipit</p>
							<span class="agent-text"> +1 800 603 6035</span>
							<span class="agent-text" ><a href="mailto:info@example.com">mail@example.com</a></span>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="whychoose">
				<div class="container">
					<h3>why choose us</h3>
					<div class="choose-grids">
						<div class="col-md-4 choose-grid">
						<h4><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Nam aliquam pretium</h4>
						<p>Aenean ac leo eget nunc fringilla fringilla a non nulla! Nunc orci mi, venenatis quis ultrices vitae, congue non nibh. Nulla bibendum justo eget.</p>
						</div>
						<div class="col-md-4 choose-grid">
						<h4><span class="glyphicon glyphicon-lock" aria-hidden="true"></span>Nam aliquam pretium</h4>
						<p>Aenean ac leo eget nunc fringilla fringilla a non nulla! Nunc orci mi, venenatis quis ultrices vitae, congue non nibh. Nulla bibendum justo eget.</p>
						</div>
						<div class="col-md-4 choose-grid">
						<h4><span class="glyphicon glyphicon-book" aria-hidden="true"></span>Nam aliquam pretium</h4>
						<p>Aenean ac leo eget nunc fringilla fringilla a non nulla! Nunc orci mi, venenatis quis ultrices vitae, congue non nibh. Nulla bibendum justo eget.</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="choose-grids1">
						<div class="col-md-4 choose-grid">
						<h4><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Nam aliquam pretium</h4>
						<p>Aenean ac leo eget nunc fringilla fringilla a non nulla! Nunc orci mi, venenatis quis ultrices vitae, congue non nibh. Nulla bibendum justo eget.</p>
						</div>
						<div class="col-md-4 choose-grid">
						<h4><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>Nam aliquam pretium</h4>
						<p>Aenean ac leo eget nunc fringilla fringilla a non nulla! Nunc orci mi, venenatis quis ultrices vitae, congue non nibh. Nulla bibendum justo eget.</p>
						</div>
						<div class="col-md-4 choose-grid">
						<h4><span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>Nam aliquam pretium</h4>
						<p>Aenean ac leo eget nunc fringilla fringilla a non nulla! Nunc orci mi, venenatis quis ultrices vitae, congue non nibh. Nulla bibendum justo eget.</p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
@stop