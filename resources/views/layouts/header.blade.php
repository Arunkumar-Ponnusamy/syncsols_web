<!DOCTYPE html>
<html lang="">

<head>
	<!-- custom-theme -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="SyncSols - A Web Automation Company" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //custom-theme -->
    <link rel="icon" href="{{asset('public/assets/img/fav.jpg')}}">
	<link href="{{asset('public/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
	<!-- Owl-carousel-CSS -->
	<link href="{{asset('public/css/owl.carousel.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('public/css/team.css')}}" type="text/css" media="all" />
	<link href="{{asset('public/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome-icons -->
	<link href="{{asset('public/css/font-awesome.css')}}" rel="stylesheet">
	<!-- //font-awesome-icons -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
	<title>{{Setting::get('site_name')}} </title>
</head>
<body>
	<!-- banner -->

	<div class="main_section_agile" id="home">
		<div class="agileits_w3layouts_banner_nav">

			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="{{url('/')}}"> <img src="{{img(Setting::get('site_logo'))}}" style="width:150px;height:100%;"></a></h1>

				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="link-effect-2" id="link-effect-2">
						<ul class="nav navbar-nav">
							<li class="active"><a href="{{url('/')}}" class="effect-3">Home</a></li>
							<li><a href="{{url('aboutus')}}" class="effect-3">About</a></li>
							<li class="dropdown">
								<a href="" class="dropdown-toggle effect-3" data-toggle="dropdown">Services <b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="{{url('blog')}}">It Solutions</a></li>
									<li><a href="{{url('blog')}}">Event Management</a></li>
								</ul>
							</li>
							<li><a href="{{'http://www.thelabview.com/'}}" class="effect-3">Blog</a></li>
<!-- 							<li class="dropdown">
								<a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown">Short Codes <b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="icons.html">Web Icons</a></li>
									<li><a href="typography.html">Typography</a></li>
								</ul>
							</li> -->
							<li><a href="{{url('contact')}}" class="effect-3">Mail Us</a></li>
						</ul>
					</nav>
				</div>
			</nav>
			<div class="clearfix"> </div>
		</div>
	</div>
