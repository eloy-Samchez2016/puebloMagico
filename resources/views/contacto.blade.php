@extends('layouts.principal')

@section('menu')
	<li><a href="{!!URL::to('/')!!}">home</a></li>
	<li><a href="{!!URL::to('/atractivo')!!}">Atractivo</a></li>
	<li><a href="{!!URL::to('/eventos')!!}">Eventos</a></li>
	<li><a href="{!!URL::to('/servicios')!!}">Servicios</a></li>
	<li><a href="{!!URL::to('/contacto')!!}" class="active">contacto</a></li>
@stop

@section('content')
				<!--bannerslider-->
				<div class="header-banner ban1">
				</div>
				<!--bannerslider-->
	<div class="content">
		<div class="contact">
			<div class="container">
				<h2>Contact Us</h2>
				<div class="contact-form">
					<div class="col-md-8 contact-form-right">
						<h4>Contact Form</h4>
						<form>
						<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
						<input class="email" type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
						<input type="text" value="Telephone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone';}" required="">
						<textarea type="text"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
						<input type="submit" value="Submit" >
						</form>
					</div>
					<div class="col-md-4 contact-form-left">
						<h4>Address :</h4>
						<p>Eiusmod Tempor inc</p>
						<p>2455 W Victory Way Craig,</p>
						<p>81625, In USA </p>
						<p>Telephone : +1 800 603 6035</p>
						<p>FAX : +1 800 889 9898</p>
						<a href="mailto:example@email.com">mail@example.com</a>
					</div>
					<div class="clearfix"></div>
				</div>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11439370.393546116!2d-106.64859421179041!3d45.574158005280175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8743a12d37f5a8b1%3A0x2efb87be4404b475!2sLand+Brokers+Realty!5e0!3m2!1sen!2sin!4v1442034109218"  frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
<!--//contact-->
	</div>
@stop