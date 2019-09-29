	<!--footer-->
	<footer>
		<div class="container">
			<div class="row footer-top-w3layouts-agile">
				<div class="col-lg-3 footer-grid" data-aos="zoom-in">
					<div class="footer-title">
						<h2>About Us</h2>
					</div>
					<div class="footer-text">
						<p>Syncsols is an automation ..</p>

					</div>
				</div>
				<div class="col-lg-3 footer-grid" data-aos="zoom-in">
					<div class="footer-title">
						<h3>Contact Us</h3>
					</div>
					<div class="footer-office-hour">
						<ul>
							<li class="hd">Address :</li>
							<li>{{Setting::get('contact_address1')}}</li>
							<li>{{Setting::get('contact_address2')}}</li>

						</ul>
						<ul>
							<li class="hd">Phone: {{Setting::get('contact_number')}}</li>
							<li class="hd">Email:
								<a href="mailto:{{Setting::get('contact_email')}}">{{Setting::get('contact_email')}}</a>
							</li>
							<li class="hd">Fax: {{Setting::get('fax')}}</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 footer-grid" data-aos="zoom-in">
					<div class="footer-title">
						<h3>Recent Works</h3>
					</div>
					<div class="footer-list">
						<div class="flickr-grid">
							<a href="single.html">
								<img src="{{asset('public/assets/new/images/g1.jpg')}}" alt=" ">
							</a>
						</div>
						<div class="flickr-grid">
							<a href="#">
								<img src="{{asset('public/assets/new/images/g2.jpg')}}" alt=" ">
							</a>
						</div>
						<div class="flickr-grid">
							<a href="#">
								<img src="{{asset('public/assets/new/images/g3.jpg')}}" alt=" ">
							</a>
						</div>
						<div class="flickr-grid">
							<a href="#">
								<img src="{{asset('public/assets/new/images/g4.jpg')}}" alt=" ">
							</a>
						</div>
						<div class="flickr-grid">
							<a href="#">
								<img src="{{asset('public/assets/new/images/g9.jpg')}}" alt=" ">
							</a>
						</div>
						<div class="flickr-grid">
							<a href="#">
								<img src="{{asset('public/assets/new/images/g5.jpg')}}" alt=" ">
							</a>
						</div>
						<div class="flickr-grid">
							<a href="single.html">
								<img src="{{asset('public/assets/new/images/g6.jpg')}}" alt=" ">
							</a>
						</div>
						<div class="flickr-grid">
							<a href="#">
								<img src="{{asset('public/assets/new/images/g7.jpg')}}" alt=" ">
							</a>
						</div>
						<div class="flickr-grid">
							<a href="#">
								<img src="{{asset('public/assets/new/images/g8.jpg')}}" alt=" ">
							</a>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-lg-3 footer-grid" data-aos="zoom-in">
					<div class="footer-title">
						<h3>Subscribe</h3>
					</div>
					<p>to get our regular updates</p>
					<form action="#" method="post" class="newsletter">
						<input class="email" type="email" placeholder="Your email..." required="">
						<button class="btn1">
							<i class="far fa-envelope"></i>
						</button>
					</form>
					<div class="clearfix"></div>
				</div>

			</div>

		</div>
	</footer>
	<!---->
	<div class="copyright">
		<div class="container">
			<div class="copyrighttop" data-aos="fade-left">
				<ul>
					<li>
						<h4>Follow us on:</h4>
					</li>
					<li>
						<a class="facebook" href="{{Setting::get('facebook')}}">
							<i class="fab fa-facebook-f"></i>
						</a>
					</li>
					<li>
						<a class="facebook" href="{{Setting::get('twitter')}}">
							<i class="fab fa-twitter"></i>
						</a>
					</li>
					<li>
						<a class="facebook" href="{{Setting::get('google')}}">
							<i class="fab fa-google-plus-g"></i>
						</a>
					</li>
					<li>
						<a class="facebook" href="{{Setting::get('instagram')}}">
							<i class="fab fa-instagram"></i>
						</a>
					</li>
				</ul>
			</div>
			<div class="copyrightbottom" data-aos="fade-right">
				<p>© 2019 {{Setting::get('site_name')}}. All Rights Reserved
				</p>

			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- js -->
	<script type="text/javascript" src="{{asset('public/assets/new/js/jquery-2.2.3.min.js')}}"></script>
	<!-- //js -->
	<!-- simpleLightbox -->
	<script src="{{asset('public/assets/new/js/simpleLightbox.js')}}"></script>
	<script>
		$('.proj_gallery_grid a').simpleLightbox();
	</script>
	<!-- //simpleLightbox -->
	<!-- flexSlider -->
	<script defer src="{{asset('public/assets/new/js/jquery.flexslider.js')}}"></script>
	<script type="text/javascript">
	 
	  $(window).load(function(){
		$('.flexslider').flexslider({
		  animation: "slide",
		  start: function(slider){
			$('body').removeClass('loading');
		  }
		});
	  });
	</script>
  
	<!-- //flexSlider -->

	<!-- stats -->
	<script src="{{asset('public/assets/new/js/jquery.waypoints.min.js')}}"></script>
	<script src="{{asset('public/assets/new/js/jquery.countup.js')}}"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->
	<!-- /js files -->
	<link href="{{asset('public/assets/new/css/aos.css')}}" rel='stylesheet prefetch' type="text/css" media="all" />
	<link href="{{asset('public/assets/new/css/aos-animation.css')}}" rel='stylesheet prefetch' type="text/css" media="all" />
	<script src="{{asset('public/assets/new/js/aos.js')}}"></script>
	<script src="{{asset('public/assets/new/js/aosindex.js')}}"></script>
	<!-- //js files -->
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="{{asset('public/assets/new/js/move-top.js')}}"></script>
	<script type="text/javascript" src="{{asset('public/assets/new/js/easing.js')}}"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->

	<script type="text/javascript">
		$(document).ready(function () {
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
	<a href="#home" class="scroll" id="toTop" style="display: block;">
		<span id="toTopHover" style="opacity: 1;"> </span>
	</a>
	<script type="text/javascript" src="{{asset('public/assets/new/js/bootstrap.min.js')}}"></script>


</body>


</html>