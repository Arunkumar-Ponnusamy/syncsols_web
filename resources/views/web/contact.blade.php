@include('layouts.header')
	<!--/w3_short-->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">

			<ul class="w3_short">
				<li><a href="{{url('/')}}">Home</a><span>|</span></li>
				<li>Reach Syncsols at</li>
			</ul>
		</div>
	</div>
	<!--//w3_short-->

   <!-- /mail -->
    <div class="banner-bottom inner">
        <div class="container">
            <div class="wthree_head_section">
                <h3 class="w3l_header w3_agileits_header">Mail <span>Us</span></h3>
            </div>
          <div class="agile_wthree_inner_grids">
          <div class="contact_img_agile">
		</div>
		<div class="contact-form agile_inner_grids">
			  <div class="wthree_head_section">
                <h3 class="w3l_header w3_agileits_header">Send <span>Message </span></h3>
            </div>
			<form action="#" method="post">
				<div class="fields-grid">
					<div class="styled-input agile-styled-input-top">
						<input type="text" name="Full Name" required="">
						<label>Full Name</label>
						<span></span>
					</div>
					<div class="styled-input agile-styled-input-top">
						<input type="text" name="Phone" required="">
						<label>Phone</label>
						<span></span>
					</div>
					<div class="styled-input">
						<input type="email" name="Email" required="">
						<label>Email</label>
						<span></span>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="styled-input textarea-grid">
					<textarea name="Message" required=""></textarea>
					<label>Message</label>
					<span></span>
				</div>
				<input type="submit" value="SEND">
			</form>
		</div>
		<div class="clearfix"> </div>
          </div>
        </div>
    </div>
    <!-- //mail -->
    	<!-- /map -->
			<div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15568.97998896122!2d79.971715!3d12.697426!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xca83da7123b3e602!2sSyncSols!5e0!3m2!1sen!2sin!4v1518287928800" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

			</div>
		<!-- //map -->
@include('layouts.footer')
