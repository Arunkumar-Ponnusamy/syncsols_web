@include('layouts.header')
	<!--/banner-->
	<div class="banner-inner">
	</div>
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="index.html">Home</a>
		</li>
		<li class="breadcrumb-item active">Single Page</li>
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
	<!--//banner-->

	<!--/blog-->
	<section class="services">
		<div class="container">
				<!---728x90--->

			<h3 class="tittle_w3ls">Service Page</h3>
				<!---728x90--->

			<div class="row inner-sec-w3layouts-agileinfo">
				<div class="col-lg-8 blog-sp" data-aos="fade-right">
					<article class="blog-x row">
						<div class="blog-img">
							<a href="single.html">
								<img src="{{asset('public/assets/new/images/banner2.jpg')}}" alt="" class="img-responsive" />
							</a>
						</div>
						<div class="blog_info">
							<h5>
								<a href="single.html">Sadipisci velit sed quia non nuuam.</a>
							</h5>
							<p>By
								<a href="#" class="user-blog">james</a>
							</p>

							<p>Pellentesque eleifend ultricies tellus,varius risus, id dignissim sapien velit id felis ac cursus eros.Pellentesque
								eleifend ultricies tellus,varius risus, id dignissim sapien velit id felis ac cursus eros.</p>
							<ul class="blog_list_agile_w3ls">
								<li>
									<a href="#">
										<span class="fa fa-comment" aria-hidden="true"></span>
										173</a>
									<i>|</i>
								</li>
								<li>
									<a href="#">
										<span class="fa fa-heart" aria-hidden="true"></span>
										10</a>
									<i>|</i>
								</li>
								<li>
									<a href="#">
										<span class="fa fa-tag" aria-hidden="true"></span>
										5</a>
								</li>
							</ul>
							<h4>January 3,2018</h4>
						</div>
						<div class="clearfix"></div>
					</article>
					<div class="comment-top">
						<h4>Comments</h4>
						<div class="media">
							<img src="{{asset('public/assets/new/images/t1.jpg')}}" alt="" class="img-responsive" />
							<div class="media-body">
								<h5 class="mt-0">Joseph Goh</h5>
								<p>Lorem Ipsum convallis diam consequat magna vulputate malesuada. id dignissim sapien velit id felis ac cursus eros.
									Cras a ornare elit.</p>

								<div class="media mt-3">
									<a class="d-flex pr-3" href="#">
										<img src="{{asset('public/assets/new/images/t2.jpg')}}" alt="" class="img-responsive" />
									</a>
									<div class="media-body">
										<h5 class="mt-0">Richard Spark</h5>
										<p>Lorem Ipsum convallis diam consequat magna vulputate malesuada. id dignissim sapien velit id felis ac cursus eros.
											Cras a ornare elit.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="comment-top">
						<h4>Leave a Comment</h4>
						<div class="comment-bottom">
							<form action="#" method="post">
								<input type="text" name="Name" placeholder="Name" required="">
								<input type="email" name="Email" placeholder="Email" required="">

								<input type="text" name="Subject" placeholder="Subject" required="">

								<textarea name="Message" placeholder="Message..." required=""></textarea>

								<input type="submit" value="Send">
							</form>
						</div>
					</div>
				</div>
				<aside class="col-lg-4 single-left" data-aos="fade-left">
					<div class="single-gd-wthree-agileits">
						<img src="{{asset('public/assets/new/images/banner1.jpg')}}" class="img-responsive" alt="">
						<h4>Sign up to our newsletter</h4>
						<form action="#" method="post">

							<input type="email" name="Email" placeholder="Email" required="">
							<div class="button">

								<input type="submit" value="Subscribe">

							</div>
						</form>
					</div>
					<div class="single-gd-wthree-agileits" data-aos="fade-up">
						<h4>Our Progress</h4>
						<div class="progress">
							<div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0"
							    aria-valuemax="100"></div>
						</div>
						<div class="progress">
							<div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
							    aria-valuemax="100"></div>
						</div>
						<div class="progress">
							<div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0"
							    aria-valuemax="100"></div>
						</div>
						<div class="progress">
							<div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0"
							    aria-valuemax="100"></div>
						</div>
						<div class="progress">
							<div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0"
							    aria-valuemax="100"></div>
						</div>
					</div>
					<div class="single-gd-wthree-agileits tech-btm" data-aos="fade-down">
						<h4>Top stories of the week </h4>
						<div class="blog-grids">
							<div class="blog-grid-left">
								<a href="single.html">
									<img src="{{asset('public/assets/new/images/b1.jpg')}}">
								</a>
							</div>
							<div class="blog-grid-right">

								<h5>
									<a href="single.html">Pellentesque dui, non felis. Maecenas male</a>
								</h5>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="blog-grids">
							<div class="blog-grid-left">
								<a href="single.html">
									<img src="{{asset('public/assets/new/images/b2.jpg')}}" class="img-responsive" alt="">
								</a>
							</div>
							<div class="blog-grid-right">

								<h5>
									<a href="single.html">Pellentesque dui, non felis. Maecenas male</a>
								</h5>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="blog-grids">
							<div class="blog-grid-left">
								<a href="single.html">
									<img src="{{asset('public/assets/new/images/b3.jpg')}}" class="img-responsive" alt="">
								</a>
							</div>
							<div class="blog-grid-right">

								<h5>
									<a href="single.html">Pellentesque dui, non felis. Maecenas male</a>
								</h5>
							</div>
							<div class="clearfix"> </div>
						</div>

					</div>
					<div class="single-gd-wthree-agileits">
						<h4>Accordion example</h4>
						<div id="accordion">
							<div class="card">
								<div class="card-header" id="headingOne">
									<h5 class="mb-0">
										<button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											Collapsible Group Item #1
										</button>
									</h5>
								</div>

								<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
									<div class="card-body">
										Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headingTwo">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											Collapsible Group Item #2
										</button>
									</h5>
								</div>
								<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
									<div class="card-body">
										Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headingThree">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
											Collapsible Group Item #3
										</button>
									</h5>
								</div>
								<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
									<div class="card-body">
										Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
									</div>
								</div>
							</div>
						</div>
					</div>

				</aside>

			</div>


		</div>

		</div>
	</section>
		<!---728x90--->
@include('layouts.footer')