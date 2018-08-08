	<!-- footer -->
	<div class="footer">
		<div class="f-bg-w3l">
				<div class="col-md-3 w3layouts_footer_grid">
					<h2>Subscribe <span>Newsletter</span></h2>
					<p>By subscribing to our mailing list you will always get latest news from us.</p>
					<form action="#" method="post">
						<input type="email" name="Email" placeholder="Enter your email..." required="">
						<button class="btn1"><i class="fa fa-envelope-o" aria-hidden="true"></i></button>
						<div class="clearfix"> </div>
					</form>
					
				
				</div>
				<div class="col-md-4 w3layouts_footer_grid">
					<h3>Recent <span>Works</span></h3>
					 <ul class="con_inner_text midimg">
						<li><a href="#"><img src="{{BASE_URL}}public/images/banner22.jpg" alt="" class="img-responsive" /></a></li>
					    <li><a href="#"><img src="{{BASE_URL}}public/images/banner33.jpg" alt="" class="img-responsive" /></a></li>
						<li><a href="#"><img src="{{BASE_URL}}public/images/banner44.jpg" alt="" class="img-responsive" /></a></li>
						<li><a href="#"><img src="{{BASE_URL}}public/images/banner11.jpg" alt="" class="img-responsive" /></a></li>
						<li><a href="#"><img src="{{BASE_URL}}public/images/banner22.jpg" alt="" class="img-responsive" /></a></li>
					    <li><a href="#"><img src="{{BASE_URL}}public/images/banner33.jpg" alt="" class="img-responsive" /></a></li>
						 <li><a href="#"><img src="{{BASE_URL}}public/images/banner11.jpg" alt="" class="img-responsive" /></a></li>
						<li><a href="#"><img src="{{BASE_URL}}public/images/banner44.jpg" alt="" class="img-responsive" /></a></li>
				     </ul>
					
				</div>
				<div class="col-md-2 w3layouts_footer_grid">
					<h3>Our <span>Links</span> </h3>
					  <ul class="links">
							<li><a href="{{url('/')}}">Home</a></li>
							<li><a href="{{url('aboutus')}}">About</a></li>
							<li><a href="{{'http://www.thelabview.com/'}}">Blog</a></li>
							<li><a href="{{url('contact')}}">Mail Us</a></li>
						</ul>
				</div>
				<div class="col-md-3 w3layouts_footer_grid">
					<h2>Contact <span>Us</span></h2>
					    <ul class="con_inner_text">
							<li><span class="fa fa-map-marker" aria-hidden="true"></span>1234k Avenue, 4th block, <label> New York City.</label></li>
							<li><span class="fa fa-envelope-o" aria-hidden="true"></span> <a href="mailto:info@example.com">info@example.com</a></li>
							<li><span class="fa fa-phone" aria-hidden="true"></span> +1234 567 567</li>
						</ul>

					<ul class="social_agileinfo">
						<li><a href="#" class="w3_facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" class="w3_twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" class="w3_instagram"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#" class="w3_google"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>


				<div class="clearfix"> </div>
					<p class="copyright">© 2018 Syncsols. All Rights Reserved | Design by <a href="http://syncsols.com/" target="_blank">syncsols</a></p>
			</div>
	</div>
	<!-- //footer -->

	<!-- js -->
	<script type="text/javascript" src="{{BASE_URL}}public/js/jquery-2.1.4.min.js"></script>
	<!-- //js -->
	<!-- stats -->
	<script src="{{BASE_URL}}public/js/jquery.waypoints.min.js"></script>
	<script src="{{BASE_URL}}public/js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->
	<!-- Slider script -->
	<script src="{{BASE_URL}}public/js/responsiveslides.min.js"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			$("#slider").responsiveSlides({
				auto: true,
				nav: true,
				manualControls: '#slider3-pager',
			});
		});
	</script>

	<!-- /nav -->
	<!-- requried-jsfiles-for owl -->
	<script src="{{BASE_URL}}public/js/owl.carousel.js"></script>
	<script>
		$(document).ready(function () {
			$("#owl-demo2").owlCarousel({
				items: 1,
				lazyLoad: false,
				autoPlay: true,
				navigation: false,
				navigationText: false,
				pagination: true,
			});
		});
	</script>
	<!-- //requried-jsfiles-for owl -->

	<script src="{{BASE_URL}}public/js/modernizr-2.6.2.min.js"></script>
	<!-- //nav -->
	<!-- js for portfolio lightbox -->
	<script src="{{BASE_URL}}public/js/jquery.chocolat.js "></script>
	<link rel="stylesheet " href="{{BASE_URL}}public/css/chocolat.css " type="text/css" media="all" />
	<!--light-box-files -->
	<script type="text/javascript ">
		$(function () {
			$('.portfolio-grids a').Chocolat();
		});
	</script>
	<!-- /js for portfolio lightbox -->


	<script type="text/javascript" src="{{BASE_URL}}public/js/bootstrap-3.1.1.min.js"></script>


</body>

</html>