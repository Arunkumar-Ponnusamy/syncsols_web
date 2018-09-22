<!DOCTYPE html>
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->

<head>
     <meta charset="UTF-8" />
    <link rel="icon" href="{{asset('public/assets/img/fav.jpg')}}">
    <title>Syncsols Admin Panel | Login Page</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
  <script>
    addEventListener("load", function () {
      setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
      window.scrollTo(0, 1);
    }
  </script>
  <!-- Meta tag Keywords -->
  <!-- css files -->
  <link rel="stylesheet" href="{{asset('public/assets/css/admin/style.css')}}" type="text/css" media="all" />
  <!-- Style-CSS -->
  <link rel="stylesheet" href="{{asset('public/assets/css/admin/fontawesome-all.css')}}">
  <!-- Font-Awesome-Icons-CSS -->
  <!-- //css files -->
  <!-- web-fonts -->
  <link href="http://fonts.googleapis.com/css?family=Nova+Round" rel="stylesheet">
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<script src="{{asset('public/assets/js/ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js')}}"></script>
<script src="{{asset('public/assets/js/m.servedby-buysellads.com/monetization.js')}}" type="text/javascript"></script>
<script>
(function(){
  if(typeof _bsa !== 'undefined' && _bsa) {
      // format, zoneKey, segment:value, options
      _bsa.init('flexbar', 'CKYI627U', 'placement:syncsols');
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
      _bsa.init('stickybox', 'CKYI653J', 'placement:syncsols');
    }
})();
</script>
<script>
  (function(v,d,o,ai){ai=d.createElement("script");ai.defer=true;ai.async=true;ai.src=v.location.protocol+o;d.head.appendChild(ai);})(window, document, "{{'public/assets/js/vdo.ai/core/w3layouts/vdo.ai.js'}}");
  </script>
</head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
<body>
  <!-- title -->
  <h1 class="login">
        <span></span>
      </h1>      

  <!-- //title -->
  <!---728x90--->

  <!-- content -->
  <div class="sub-main-w3">
    <form action="{{url('admin/login')}}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <h1 class="login">
        <span><img width="25%" src="{{asset('public/assets/img/logo.png')}}"></span>
      </h1>      
      <h1 class="login" >
        <span>A</span>dmin
        <span>P</span>anel
      </h1>
      <div class="form-group">
        <input type="email" class="form-control textbox" name="email" placeholder="E-mail" required>
      </div>
      <div class="form-group">
        <input type="password" class="form-control textbox" required  name="password" placeholder="Password">
      </div>
      <div class="form-group-2">
        <button class="btn btn-default btn-osx btn-lg" type="submit">
          <i class="fas fa-long-arrow-alt-right"></i>
        </button>
      </div>
      <div class="alert alert-success hidden" role="alert">You Have Successfully Logged In</div>
    </form>
    <!-- //switch -->
  </div>
  <!-- //content -->
  <!---728x90--->

  <!-- copyright -->
  <div class="footer">
    <p>&copy; 2018 Syncsols. All rights reserved | Design by
      <a href="http://syncsols.com/">Syncsols</a>
    </p>
  </div>
  <!-- //copyright -->
  <!---728x90--->

    
  <!-- Jquery -->
  <script src="{{asset('public/assets/js/admin/jquery-2.2.3.min.js')}}"></script>
  <!-- //Jquery -->
  <!-- validify plugin -->
  <script src="{{asset('public/assets/js/admin/validify.js')}}"></script>
  <script>
    $("#demo").validify({
      errorStyle: "validifyError",
      successStyle: "validifySuccess",
      emailFieldName: "email",
      emailCheck: true,
      requiredAttr: "required",
    });
  </script>
  <!-- //validify plugin -->

</body>

    <!-- END BODY -->
</html>
  