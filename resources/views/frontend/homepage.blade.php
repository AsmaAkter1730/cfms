<!DOCTYPE html>
<html>

<head>
	<title> Cattle Farm Management System</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Cattle Farm Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //for-mobile-apps -->
	<link href="{{url('/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- //js -->
	<link href='//fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
</head>

<body>
	<!-- header -->
	<div class="top-nav">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--shylock">
						<ul class="nav navbar-nav link-effect-7" id="link-effect-7">


							<li><a href="{{route('logins')}}" data-hover="Login">Login</a></li>
							<li><a href="#Services" data-hover="Services">Services</a></li>
							<li><a href="#gallery" data-hover="Gallery">Gallery</a></li>

						</ul>
					</nav>
				</div>
			</nav>
		</div>
	</div>
	<!-- //header -->
	<!-- banner -->
	<div class="banner">
		<div class="container">
			<div class="w3ls_logo">

				<h1><a href="#"> Cattle Farm </a></h1>

			</div>


		</div>
	</div>
	<!-- //banner -->
	<!-- banner-bottom green border-->
	<div class="banner-bottom">
		<div class="container">
			<div class="col-md-7 wthree_banner_bottom_left">

			</div>
			<div class="col-md-5 wthree_banner_bottom_right">

			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //banner-bottom -->
	<!-- services -->
	<div class="services" id='Services'>
		<h3 class="head">Our Services </h3>
		<br>
		<div class="container">
			<div class="col-md-4 agileits_service_grid">
				<div class="agileits_service_grid1">
					<span></span>
				</div>
				<h3>Milk</h3>
				<p>Milk protein is of high nutritional value because it contains all the essential amino acids.</p>
			</div>
			<div class="col-md-4 agileits_service_grid">
				<div class="agileits_service_grid2">
					<span></span>
				</div>
				<h3>Feeding Plan</h3>
				<p>A guideline is to feed 0.5 kg of a 34 to 50% protein concentrates for every 5 kg of milk produced above 20 kg of milk.</p>
			</div>
			<div class="col-md-4 agileits_service_grid">
				<div class="agileits_service_grid3">
					<span></span>
				</div>
				<h3>Dairy Cow</h3>
				<p>Dairy cows produce milk for around 10 months following the birth of the calf. A typical western dairy cow is usually milked twice per day and produces on average 30 litres (8 gallons) of milk daily</p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //services -->
	<!-- gallery -->
	<div class="gallery" id='gallery'>
		<h3 class="head"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span>Our Cattle Farm Gallery</h3>
		<div class="w3_gallery_grids">
			<div id="jzBox" class="jzBox">
				<div id="jzBoxNextBig"></div>
				<div id="jzBoxPrevBig"></div>
				<img src="#" id="jzBoxTargetImg" alt=" " />
				<div id="jzBoxBottom">
					<div id="jzBoxTitle"></div>
					<span id="jzBoxMoreItems">
						<div id="jzBoxCounter"></div>
						<i class="arrow-left" id="jzBoxPrev"></i>
						<i class="arrow-right" id="jzBoxNext"></i>
					</span>
					<i class="close" id="jzBoxClose"></i>
				</div>
			</div>
			<div class="col-md-2 w3_gallery_grid">
				<a href="{{url('/images/1.jpg')}}" class="jzBoxLink" title="Cattle Farm">
					<img src="{{url('/images/1.jpg')}}" alt=" " class="img-responsive" />
				</a>
				<div class="w3_gallery_grid1">
					<h4>Cow</h4>
					<p></p>
				</div>
			</div>
			<div class="col-md-2 w3_gallery_grid">
				<a href="{{url('/images/2.png')}}" class="jzBoxLink" title="Cattle Farm">
					<img src="{{url('/images/2.png')}}" alt=" " class="img-responsive" />
				</a>
				<div class="w3_gallery_grid1">
					<h4>Calf</h4>
					<p></p>
				</div>
			</div>
			<div class="col-md-2 w3_gallery_grid">
				<a href="{{url('/images/3.jpg')}}" class="jzBoxLink" title="Cattle Farm">
					<img src="{{url('/images/3.jpg')}}" alt=" " class="img-responsive" />
				</a>
				<div class="w3_gallery_grid1">
					<h4>Milk collect</h4>
					<p>.</p>
				</div>
			</div>
			<div class="col-md-2 w3_gallery_grid">
				<a href="{{url('/images/5.jpg')}}" class="jzBoxLink" title="Cattle Farm">
					<img src="{{url('/images/5.jpg')}}" alt=" " class="img-responsive" />
				</a>
				<div class="w3_gallery_grid1">
					<h4>Take Breath</h4>
					<p></p>
				</div>
			</div>
			<div class="col-md-2 w3_gallery_grid">
				<a href="{{url('/images/40.jpg')}}" class="jzBoxLink" title="Cattle Farm">
					<img src="{{url('/images/40.jpg')}}" alt=" " class="img-responsive" />
				</a>
				<div class="w3_gallery_grid1">
					<h4>Grass-eating</h4>
					<p></p>
				</div>
			</div>
			<div class="col-md-2 w3_gallery_grid">
				<a href="{{url('/images/6.jpg')}}" class="jzBoxLink" title="Cattle Farm">
					<img src="{{url('/images/6.jpg')}}" alt=" " class="img-responsive" />
				</a>
				<div class="w3_gallery_grid1">
					<h4>Milk</h4>
					<p></p>
				</div>
			</div>
			<div class="clearfix"> </div>
			<script src="js/jzBox.js"></script>
		</div>
	</div>
	<!-- //gallery -->


	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="col-md-4 agileinfo_footer_grid">
				<h3>About Us</h3>

				<ul class="w3agile_footer_grid_list">
					<li>Konabari,Gazipur</li>
					<li>Dhaka-1203,Bangladesh</li>
					<li>cellphone: 01945295745</li>

				</ul>



			</div>
			<div class="col-md-4 agileinfo_footer_grid">
				<!--	<h3>Links</h3>
				<ul class="w3agile_footer_grid_list">
					<li>Home</li>
                    <li>Aboutus</li>
					<li>Service</li>

				</ul>  -->
			</div>

			<div class="col-md-4 agileinfo_footer_grid">
				<h3>Our Services</h3>
				<ul class="w3agile_footer_grid_list">
					<li>We are providing different services</li>
					<li>We are one of leading company</li>
					<li>Profitability is the primary goal of all business</li>
					<li>Learn how to grow your Business</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //footer -->
	<!-- copy-right -->
	<div class="w3agile_copy_right">
		<div class="container">
			<p>Cattle Farm @ 2021</p>
		</div>
	</div>
	<!-- //copy-right -->
	<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //here ends scrolling icon -->
</body>

</html>