@include('layouts.header')
<style>
.fiz_team_area {
    padding: 100px 0px;
}

@foreach($banners as $key=>$banner)
@if($key==0)
.carousel-item {
    background: -webkit-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{'storage/app/'.$banner->image}}) no-repeat;
    background: -moz-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{'storage/app/'.$banner->image}}) no-repeat;
    background: -ms-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{'storage/app/'.$banner->image}}) no-repeat;
    background: linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{'storage/app/'.$banner->image}}) no-repeat;
    background-size: cover;
}
@else
.carousel-item.item{{$key+1}} {
    background: -webkit-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{'storage/app/'.$banner->image}}) no-repeat;
    background: -moz-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{'storage/app/'.$banner->image}}) no-repeat;
    background: -ms-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{'storage/app/'.$banner->image}}) no-repeat;
    background: linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url({{'storage/app/'.$banner->image}}) no-repeat;
    background-size: cover;
}
@endif
@endforeach
/*.carousel-item.item2 {
    background: -webkit-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(../images/banner2.jpg) no-repeat;
    background: -moz-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(../images/banner2.jpg) no-repeat;
    background: -ms-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(../images/banner2.jpg) no-repeat;
    background: linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(../images/banner2.jpg) no-repeat;
    background-size: cover;
}

.carousel-item.item3 {
    background: -webkit-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(../images/banner3.jpg) no-repeat;
    background: -moz-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(../images/banner3.jpg) no-repeat;
    background: -ms-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(../images/banner3.jpg) no-repeat;
    background: linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(../images/banner3.jpg) no-repeat;
    background-size: cover;
}

.carousel-item.item4 {
    background: -webkit-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(../images/banner4.jpg) no-repeat;
    background: -moz-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(../images/banner4.jpg) no-repeat;
    background: -ms-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(../images/banner4.jpg) no-repeat;
    background: linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(../images/banner4.jpg) no-repeat;
    background-size: cover;
}
*/

/* Slider */

.slick-slide {
    margin: 0px 20px;
}

.partner-image {
    width: 100%;
}

.slick-slider
{
    position: relative;
    display: block;
    box-sizing: border-box;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
            user-select: none;
    -webkit-touch-callout: none;
    -khtml-user-select: none;
    -ms-touch-action: pan-y;
        touch-action: pan-y;
    -webkit-tap-highlight-color: transparent;
}

.slick-list
{
    position: relative;
    display: block;
    overflow: hidden;
    margin: 0;
    padding: 0;
}
.slick-list:focus
{
    outline: none;
}
.slick-list.dragging
{
    cursor: pointer;
    cursor: hand;
}

.slick-slider .slick-track,
.slick-slider .slick-list
{
    -webkit-transform: translate3d(0, 0, 0);
       -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
         -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
}

.slick-track
{
    position: relative;
    top: 0;
    left: 0;
    display: block;
}
.slick-track:before,
.slick-track:after
{
    display: table;
    content: '';
}
.slick-track:after
{
    clear: both;
}
.slick-loading .slick-track
{
    visibility: hidden;
}

.slick-slide
{
    display: none;
    float: left;
    min-height: 1px;
}
[dir='rtl'] .slick-slide
{
    float: right;
}
.slick-slide img
{
    display: block;
}
.slick-slide.slick-loading img
{
    display: none;
}
.slick-slide.dragging img
{
    pointer-events: none;
}
.slick-initialized .slick-slide
{
    display: block;
}
.slick-loading .slick-slide
{
    visibility: hidden;
}
.slick-vertical .slick-slide
{
    display: block;
    height: auto;
    border: 1px solid transparent;
}
.slick-arrow.slick-hidden {
    display: none;
}	


</style>
	<!--/banner-->
	<div class="banner">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
                @foreach($banners as $key=>$banner)
                <li data-target="#carouselExampleIndicators" data-slide-to="{{$key}}" class="@if($key==0){{'active'}}@endif"></li>
                @endforeach
			</ol>
			<div class="carousel-inner" role="listbox">
                @foreach($banners as $key=>$banner)
				<div class="carousel-item @if($key==0){{'active'}}@else{{'item'.($key+1)}}@endif">
					<div class="carousel-caption">
						<h3>{{$banner->banner_text}}</h3>

                        @if($banner->enable_video==1)
						<div class="bnr-button">
							<button type="button" class="btn btn-primary play" data-toggle="modal" data-target="#exampleModal">
								<i class="fas fa-play"></i>
							</button>
						</div>
                        @endif

					</div>
				</div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">{{$banner->video_caption}}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body video">
                            @if($banner->video_choice_toggle=='video_url')
                            <iframe src="{{$banner->video_link}}"></iframe>
                            @else
                            <video style="height: 205px; border-radius:1em;" src="{{img($banner->video)}}" controls="controls"></video>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
            <!--//model-->
                @endforeach
<!-- 				<div class="carousel-item item2">
					<div class="carousel-caption">
						<h3>We Deliver Quality Projects.</h3>

						<div class="bnr-button">
							<button type="button" class="btn btn-primary play" data-toggle="modal" data-target="#exampleModal">
								<i class="fas fa-play"></i>
							</button>
						</div>
					</div>
				</div>
				<div class="carousel-item item3">
					<div class="carousel-caption">
						<h3>Best Creative Agency for your needs</h3>

						<div class="bnr-button">
							<button type="button" class="btn btn-primary play" data-toggle="modal" data-target="#exampleModal">
								<i class="fas fa-play"></i>
							</button>
						</div>

					</div>
				</div>
				<div class="carousel-item item4">
					<div class="carousel-caption">
						<h3>We Deliver Quality Projects.</h3>

						<div class="bnr-button">
							<button type="button" class="btn btn-primary play" data-toggle="modal" data-target="#exampleModal">
								<i class="fas fa-play"></i>
							</button>
						</div>
					</div>
				</div>
 -->			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	<!--/model-->
	<!--//banner-->
	<section class="banner-bottom">
		<div class="container">

<!-- 			<div class="row inner-sec-w3layouts-agileinfo">

				<div class="col-lg-5 bt-bottom-info" data-aos="fade-right">
					<h5>We help our customer to build Digital World</h5>

				</div>
				<div class="col-lg-7 bt-bottom-info" data-aos="fade-left">
					<p>Maecenas quis neque libero. Class aptent taciti.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Pellentesque
						convallis diam consequat magna vulputate malesuada. Cras a ornare elit. Nulla viverra pharetra sem, eget pulvinar neque
						pharetra ac.</p>
				</div>
			</div> -->
			
			<div class="row inner-sec-w3layouts-agileinfo">
                @foreach($features as $feature)
				<div class="col-lg-4 bottom-sub-grid text-center aos-init aos-animate" data-aos="zoom-in">
					<div class="bt-icon">

						<span class="{{$feature->fa_icon}}"></span>
					</div>

					<h4 class="sub-tittle_w3ls">{{$feature->highlight_text}}</h4>
					<p>{{$feature->small_description}}</p>
					<p>
						<a class="btn btn-secondary view" href="single.html" role="button">View details</a>
					</p>
				</div>
                @endforeach
				<!-- /.col-lg-4 -->
<!-- 				<div class="col-lg-4 bottom-sub-grid text-center aos-init aos-animate" data-aos="zoom-in">
					<div class="bt-icon">
						<span class="far fa-thumbs-up"></span>
					</div>

					<h4 class="sub-tittle_w3ls">Excellent Support</h4>
					<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
					<p>
						<a class="btn btn-secondary view" href="single.html" role="button">View details</a>
					</p>
				</div>
				/.col-lg-4
				<div class="col-lg-4 bottom-sub-grid text-center aos-init aos-animate" data-aos="zoom-in">
					<div class="bt-icon">
						<span class="fas fa-tv"></span>
					</div>

					<h4 class="sub-tittle_w3ls">Responsive</h4>
					<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
					<p>
						<a class="btn btn-secondary view" href="single.html" role="button">View details</a>
					</p>
				</div>
 -->				<!-- /.col-lg-4 -->
			</div>
		</div>
		<!-- /.row -->
		</div>
	</section>

	<!---->
	<!-- /stats -->
	<section class="stats_test container-fluid">
		<div class="row inner_stat_wthree_agileits">
            @foreach($counts as $key => $count)
			<div class="col-md-3 stats_left @if($key!=0){{'counter_grid'.$key}}@else{{'counter_grid'}}@endif">
				<i class="{{$count->fa_icon}}"></i>
				<p class="counter">{{$count->count}}</p>
				<h4>{{$count->name}}</h4>
			</div>
            @endforeach
<!-- 			<div class="col-md-3 stats_left counter_grid1">
				<i class="fas fa-users"></i>
				<p class="counter">165</p>
				<h4>Trainers</h4>
			</div>
			<div class="col-md-3 stats_left counter_grid2">
				<i class="far fa-edit"></i>
				<p class="counter">563</p>
				<h4>Pojects</h4>
			</div>
			<div class="col-md-3 stats_left counter_grid3">
				<i class="far fa-smile"></i>
				<p class="counter">1045</p>
				<h4>Happy Clients</h4>
			</div>
 -->
		</div>
		</div>
	</section>
    <br/>
	<!-- //stats -->

   <h3 class="tittle_w3ls" style="padding-bottom: 4%;padding-top: 4%;">Amazing Team</h3>
   <section class="customer-logos">
                @foreach($team_members as $key => $team)
      <div class="slide"><img class="partner-image" src="{{img($team->display_picture)}}">
                    <div class="team-info">
                        <div class="caption">
                            <h4>{{$team->name}}</h4>
                            <h6>{{$team->designation}}<h6>
                        </div>
                        <div class="social-icons-section">
                            <a class="fac" target="_blank" href="{{$team->facebook}}">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="twitter" target="_blank" href="{{$team->twitter}}">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="pinterest" target="_blank" href="{{$team->linkedin}}">
                                <i class="fab fa-linkedin"></i>
                            </a>

                        </div>

                    </div>

      </div>
                @endforeach
   </section>
	<!--/Projects-->
	<section class="services">
		<div class="container">
			<h3 class="tittle_w3ls">Our Works</h3>
			@foreach($projects as $key => $project)
			@if($key%3==0)
			<div class="row inner-sec-w3layouts-agileinfo">
			@endif
				<div class="col-md-4 proj_gallery_grid" data-aos="zoom-in">
					<div class="section_1_gallery_grid">
						<a title="{{$project->header_text}}" href="{{img($project->picture)}}">
							<div class="section_1_gallery_grid1">
								<img width=100 height=150 src="{{img($project->picture)}}" alt=" " class="img-responsive" />
								<div class="proj_gallery_grid1_pos">
									<h3>{{$project->header_text}}</h3>
									<p>{{$project->short_description}}</p>
								</div>
							</div>
						</a>
					</div>
				</div>
			@if(($key+1)%3==0)
			</div>
			@endif
			@endforeach
<!-- 					<div class="section_1_gallery_grid" data-aos="zoom-in">
						<a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="{{asset('public/assets/new/images/g2.jpg')}}">
							<div class="section_1_gallery_grid1">
								<img src="{{asset('public/assets/new/images/g2.jpg')}}" alt=" " class="img-responsive" />
								<div class="proj_gallery_grid1_pos">
									<h3>Digital Biz</h3>
									<p>Add some text</p>
								</div>
							</div>
						</a>
					</div>
					<div class="section_1_gallery_grid" data-aos="zoom-in">
						<a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="{{asset('public/assets/new/images/g3.jpg')}}">
							<div class="section_1_gallery_grid1">
								<img src="{{asset('public/assets/new/images/g3.jpg')}}" alt=" " class="img-responsive" />
								<div class="proj_gallery_grid1_pos">
									<h3>Digital Biz</h3>
									<p>Add some text</p>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4 proj_gallery_grid" data-aos="zoom-in">
					<div class="section_1_gallery_grid">
						<a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="{{asset('public/assets/new/images/g4.jpg')}}">
							<div class="section_1_gallery_grid1">
								<img src="{{asset('public/assets/new/images/g4.jpg')}}" alt=" " class="img-responsive" />
								<div class="proj_gallery_grid1_pos">
									<h3>Digital Biz</h3>
									<p>Add some text</p>
								</div>
							</div>
						</a>
					</div>
					<div class="section_1_gallery_grid" data-aos="zoom-in">
						<a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="{{asset('public/assets/new/images/g5.jpg')}}">
							<div class="section_1_gallery_grid1">
								<img src="{{asset('public/assets/new/images/g5.jpg')}}" alt=" " class="img-responsive" />
								<div class="proj_gallery_grid1_pos">
									<h3>Digital Biz</h3>
									<p>Add some text</p>
								</div>
							</div>
						</a>
					</div>
					<div class="section_1_gallery_grid" data-aos="zoom-in">
						<a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="{{asset('public/assets/new/images/g6.jpg')}}">
							<div class="section_1_gallery_grid1">
								<img src="{{asset('public/assets/new/images/g6.jpg')}}" alt=" " class="img-responsive" />
								<div class="proj_gallery_grid1_pos">
									<h3>Digital Biz</h3>
									<p>Add some text</p>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4 proj_gallery_grid" data-aos="zoom-in">
					<div class="section_1_gallery_grid">
						<a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="{{asset('public/assets/new/images/g7.jpg')}}">
							<div class="section_1_gallery_grid1">
								<img src="{{asset('public/assets/new/images/g7.jpg')}}" alt=" " class="img-responsive" />
								<div class="proj_gallery_grid1_pos">
									<h3>Digital Biz</h3>
									<p>Add some text</p>
								</div>
							</div>
						</a>
					</div>
					<div class="section_1_gallery_grid" data-aos="zoom-in">
						<a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="{{asset('public/assets/new/images/g8.jpg')}}">
							<div class="section_1_gallery_grid1">
								<img src="{{asset('public/assets/new/images/g8.jpg')}}" alt=" " class="img-responsive" />
								<div class="proj_gallery_grid1_pos">
									<h3>Digital Biz</h3>
									<p>Add some text</p>
								</div>
							</div>
						</a>
					</div>
					<div class="section_1_gallery_grid" data-aos="zoom-in">
						<a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="{{asset('public/assets/new/images/g9.jpg')}}">
							<div class="section_1_gallery_grid1">
								<img src="{{asset('public/assets/new/images/g9.jpg')}}" alt=" " class="img-responsive" />
								<div class="proj_gallery_grid1_pos">
									<h3>Digital Biz</h3>
									<p>Add some text</p>
								</div>
							</div>
						</a>
					</div> -->



		</div>
	</section>
	<!--//Projects-->
	<!--reviews_sec-->
<!--	<section class="reviews_sec" id="testimonials">
		<h3 class="tittle_w3ls cen">Testimonial</h3>
		<div class="inner-sec-w3layouts-agileinfo">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
                        @foreach($testimonials as $testimonial)
						<li>
							<div class="testimonials_grid">
								<div class="testimonials_grid-inn">
									<img width=70 src="{{img($testimonial->display_picture)}}" alt=" " class="img-responsive" />
									<div class="test_social_pos">
										<ul class="social_list1">
											<li>
												<a target="_blank" href="{{$testimonial->facebook}}" class="facebook1">
													<i class="fab fa-facebook-f"></i>

												</a>
											</li>
											<li>
												<a target="_blank" href="{{$testimonial->twitter}}" class="twitter2">
													<i class="fab fa-twitter"></i>

												</a>
											</li>
											<li>
												<a target="_blank" href="{{$testimonial->dripple}}" class="dribble3">
													<i class="fab fa-dribbble"></i>
												</a>
											</li>
										</ul>
									</div>
								</div>
								<h3>{{$testimonial->name}}
 									<span>Customer</span>
								</h3>
								<i>{{$testimonial->country}}</i>
								<p>{{$testimonial->review}}</p>
							</div>
						</li>
                        @endforeach  -->
<!-- 						<li>
							<div class="testimonials_grid">
								<div class="testimonials_grid-inn">
									<img src="{{asset('public/assets/new/images/t2.jpg')}}" alt=" " class="img-responsive" />
									<div class="test_social_pos">
										<ul class="social_list1">
											<li>
												<a href="#" class="facebook1">
													<i class="fab fa-facebook-f"></i>

												</a>
											</li>
											<li>
												<a href="#" class="twitter2">
													<i class="fab fa-twitter"></i>

												</a>
											</li>
											<li>
												<a href="#" class="dribble3">
													<i class="fab fa-dribbble"></i>
												</a>
											</li>
										</ul>
									</div>
								</div>
								<h3>Esmeralda
									<span>Customer</span>
								</h3>
								<i>United States</i>
								<p>Maecenas interdum, metus vitae tincidunt porttitor, magna quam egestas sem, ac scelerisque nisl nibh vel lacus. Proin
									eget gravida odio. Donec ullamcorper est eu accumsan cursus.</p>
							</div>
						</li>
						<li>
							<div class="testimonials_grid">
								<div class="testimonials_grid-inn">
									<img src="{{asset('public/assets/new/images/t1.jpg')}}" alt=" " class="img-responsive" />
									<div class="test_social_pos">
										<ul class="social_list1">
											<li>
												<a href="#" class="facebook1">
													<i class="fab fa-facebook-f"></i>

												</a>
											</li>
											<li>
												<a href="#" class="twitter2">
													<i class="fab fa-twitter"></i>

												</a>
											</li>
											<li>
												<a href="#" class="dribble3">
													<i class="fab fa-dribbble"></i>
												</a>
											</li>
										</ul>
									</div>
								</div>
								<h3>Anamaria
									<span>Customer</span>
								</h3>
								<i>United States</i>
								<p>Maecenas interdum, metus vitae tincidunt porttitor, magna quam egestas sem, ac scelerisque nisl nibh vel lacus. Proin
									eget gravida odio. Donec ullamcorper est eu accumsan cursus.</p>
							</div>
						</li> -->
					</ul>
				</div>
			</section>
		</div>
	</section>
	<!---->
@include('layouts.footer')
