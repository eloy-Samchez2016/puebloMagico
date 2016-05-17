<!DOCTYPE HTML>
<html>
<head>	
<title>Pueblo Magico San Pedro y San Pablo Teposcolula</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Freehold Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/responsiveslides.min.js"></script>
 <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
</head>
<body>
			<!--header-->
			<div class="header">
				<div class="container">
					<div class="top-header">
						<div class="logo">
							<h1><a href="{!!URL::to('/')!!}">Pueblo Magico</a></h1>
						</div>
						<div class="top-menu">
						 <span class="menu"><img src="images/nav.png" alt=""/></span>
							<ul>
								@yield('menu')
							</ul>
							 <!--script-nav-->
							 <script>
								 $("span.menu").click(function(){
								 $(".top-menu ul").slideToggle("slow" , function(){
								 });
								 });
							 </script>
						</div>
					</div>
				</div>	
			</div>	
			<!--header-->
				@yield('content')
				<!--detail-->
		<div class="details-section">
			<div class="container">
				<div class="details-grids">
					<div class="col-md-3 detail-grid">
						<h3>about</h3>
						<p>Cum sociis natoque penatibus et magnis. dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio.</p>
					</div>
					<div class="col-md-3 detail-grid">
						<h3>support</h3>
						<ul>
							<li><a href="#">New Listing Sign-Up</a></li>
							<li><a href="#">Consectetur adipiscing</a></li>
							<li><a href="#">Integer molestie lorem</a></li>
							<li><a href="#">Facilisis in pretium nisl</a></li>
						</ul>

					</div>
					<div class="col-md-3 detail-grid">
						<h3>Social</h3>
						<ul>
							<li><a href="#">facebook</a></li>
							<li><a href="#">twitter</a></li>
							<li><a href="#">google +</a></li>
							<li><a href="#">vimeo</a></li>
						</ul>
					</div>
					<div class="col-md-3 detail-grid">
						<form>
							<h3>Newsletter</h3>
							<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
							<input type="submit" value=" ">
						</form>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	<!--detail-->
			<div class="footer-section">
				<div class="container">
					<div class="footer-top">
						<p>Copyright &copy; 2016 Freehold. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
					</div>

				</div>
			</div>
			<!--footer-->

</body>
</html>
