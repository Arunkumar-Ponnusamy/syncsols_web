<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<title>SyncSols - An Automation Company</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="SyncSols - An Automation Company" />

	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
    <link rel="icon" href="{{asset('public/assets/img/fav.jpg')}}">
	<link href="{{asset('public/assets/new/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="{{asset('public/assets/new/css/flexslider.css')}}" type="text/css" media="screen" property="" />
	<link href="{{asset('public/assets/new/css/style.css')}}" rel='stylesheet' type='text/css' />
	<link href="{{asset('public/assets/new/css/blog.css')}}" type="text/css" rel="stylesheet" media="all">
	<link href="{{asset('public/assets/new/css/simpleLightbox.css')}}" rel='stylesheet' type='text/css' />
	<link href="{{asset('public/assets/new/css/fontawesome-all.css')}}" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Poppins:100i,200,200i,300,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-149356938-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-149356938-1');
	</script>
</head>

<body>
<script src="{{asset('public/assets/new/js/ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js')}}"></script>
<script src="{{asset('public/assets/new/js/m.servedby-buysellads.com/monetization.js')}}" type="text/javascript"></script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
  	}
})();
</script>
<script>
(function(){
if(typeof _bsa !== 'undefined' && _bsa) {
	// format, zoneKey, segment:value, options
	_bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
}
})();
</script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
  	}
})();
</script>
<script>
	(function(v,d,o,ai){ai=d.createElement("script");ai.defer=true;ai.async=true;ai.src=v.location.protocol+o;d.head.appendChild(ai);})(window, document, "{{'public/assets/new/js/vdo.ai/core/w3layouts/vdo.ai.js'}}");
	</script>
<body>
	<header>
		<div class="header_top" id="home">
			<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
				<a class="navbar-brand" href="{{url('/')}}">
					<img src="{{img(Setting::get('site_logo'))}}" style="width:100px;height:50%;"></a>
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mx-auto tp-nav">
						<li class="nav-item active">
							<a class="nav-link" href="{{url('home')}}">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{url('aboutus')}}">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{url('clients')}}">Clients/Partners</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{'http://www.thelabview.com/'}}">Blog</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{url('projects')}}">Projects</a>
						</li>
<!-- 						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
							    aria-expanded="false">
								Services
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="{{url('services')}}">Service 1</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="{{url('services')}}">Service 2</a>
							</div>
						</li> -->
						<li class="nav-item">
							<a class="nav-link" href="{{url('careers')}}">Careers</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{url('contact')}}">Contact</a>
						</li>
					</ul>
<!-- 					<form action="#" method="post" class="form-inline my-2 my-lg-0 search">
						<input class="form-control mr-sm-2" type="search" placeholder="Search here..." name="Search" required="">
						<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
					</form> -->

				</div>
			</nav>
		</div>
	</header>
	<!--//header-->
