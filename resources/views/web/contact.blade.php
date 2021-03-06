@include('layouts.header')
	<link href="{{asset('public/assets/new/css/contact.css')}}" rel='stylesheet' type='text/css' />
	<!--/w3_short-->
	<!--/banner-->
	<div class="banner-inner">
	</div>
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="index.html">Home</a>
		</li>
		<li class="breadcrumb-item active">Contact</li>
	</ol>
	<!--/model-->
	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Introduction Video</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body video">
					<iframe src="https://player.vimeo.com/video/33531612"></iframe>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>
	<!--//model-->
	<!--/contact-->
	<section class="services">
		<div class="container">
			<!---728x90--->

			<h3 class="tittle_w3ls">Contact Us</h3>
			<!---728x90--->

			<div class="row inner-sec-w3layouts-agileinfo">
				<div class="contact-map">

					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15568.97998896122!2d79.971715!3d12.697426!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xca83da7123b3e602!2sSyncSols!5e0!3m2!1sen!2sin!4v1518287928800"
					    class="map" style="border:0" allowfullscreen=""></iframe>
				</div>
				<div class="address row">
					<div class="col-md-4 address-grid-wthree-agileits" data-aos="zoom-out">
						<div class="address-info">
							<div class="address-left">
								<span class="fas fa-phone-volume" aria-hidden="true"></span>
							</div>
							<div class="address-right">
								<h6>Phone Number</h6>
								<p>{{Setting::get('contact_number')}}</p>

							</div>

						</div>
					</div>
					<div class="col-md-4 address-grid-wthree-agileits" data-aos="zoom-out">
						<div class="address-info">
							<div class="address-left">
								<span class="far fa-envelope" aria-hidden="true"></span>
							</div>
							<div class="address-right">
								<h6>Email Address</h6>
								<p>Email :
									<a href="mailto:{{Setting::get('contact_email')}}"> {{Setting::get('contact_email')}}</a>
								</p>
							</div>

						</div>
					</div>
					<div class="col-md-4 address-grid-wthree-agileits" data-aos="zoom-out">
						<div class="address-info">
							<div class="address-left">
								<span class="fas fa-map-marker-alt" aria-hidden="true"></span>
							</div>
							<div class="address-right">
								<h6>Location</h6>
								<p>{{Setting::get('contact_address1')}}<br/>{{Setting::get('contact_address2')}}

								</p>
							</div>
						</div>
					</div>

				</div>
				
				<div class="contact_grid_right">
					<h6>Please fill this form to contact with us.</h6>
					<form action="#" method="post">
						<div class="contact_left_grid">
							<input type="text" name="Name" placeholder="Name" required="">
							<input type="email" name="Email" placeholder="Email" required="">
							<input type="text" name="Subject" placeholder="Subject" required="">
							<textarea name="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
							<input type="submit" value="Submit">
							<input type="reset" value="Clear">
							<div class="clearfix"> </div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!---728x90--->

@include('layouts.footer')
