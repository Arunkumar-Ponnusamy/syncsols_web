@include('admin.include.header')
<!-- Start right content -->
<div class="content-page">
<!-- ============================================================== -->
<!-- Start Content here -->
<!-- ============================================================== -->
<div class="content">
							
<!-- Your awesome content goes here -->
<div class="row">

<!-- 					<div class="col-sm-6 portlets">

<div class="widget">
<div class="widget-header transparent">
<h2><strong>Default</strong> Form</h2>
<div class="additional-btn">
<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
</div>
</div>
<div class="widget-content padding">							
<div id="basic-form">
<form role="form">
  <div class="form-group">
	<label for="exampleInputEmail1">Email address</label>
	<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
  </div>
  <div class="form-group">
	<label for="exampleInputPassword1">Password</label>
	<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
	<input type="file" class="btn btn-default" title="Search for a file to add">
	<p class="help-block">Example block-level help text here.</p>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
</div>
</div>

</div>
-->					
<!-- 					<div class="col-sm-6 portlets">

<div class="widget">
<div class="widget-header transparent">
<h2><strong>Horizontal</strong> Form</h2>
<div class="additional-btn">
<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
</div>
</div>
<div class="widget-content padding">						
<div id="horizontal-form">
<form class="form-horizontal" role="form">
  <div class="form-group">
	<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
	<div class="col-sm-10">
	  <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
	  <p class="help-block">Example block-level help text here.</p>
	</div>
  </div>
  <div class="form-group">
	<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
	<div class="col-sm-10">
	  <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
	</div>
  </div>
  <div class="form-group">
	<div class="col-sm-offset-2 col-sm-10">
	  <div class="checkbox">
		<label>
		  <input type="checkbox"> Remember me
		</label>
	  </div>
	</div>
  </div>
  <div class="form-group">
	<div class="col-sm-offset-2 col-sm-10">
	  <button type="submit" class="btn btn-default">Sign in</button>
	</div>
  </div>
</form>
</div>
</div>
</div>

</div>
-->					
</div>

<!-- 				<div class="widget">
<div class="widget-header transparent">
<h2><strong>Inline</strong> Form</h2>
<div class="additional-btn">
<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
</div>
</div>
<div class="widget-content padding">
<form class="form-inline" role="form">
<div class="form-group">
<label class="sr-only" for="exampleInputEmail2">Email address</label>
<input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
</div>
<div class="form-group">
<label class="sr-only" for="exampleInputPassword2">Password</label>
<input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
</div>
<div class="checkbox">
<label>
<input type="checkbox"> Remember me
</label>
</div>
<button type="submit" class="btn btn-default">Sign in</button>
<a class="btn btn-primary md-trigger" data-modal="form-modal">Form in Modal</a>
</form>
</div>
</div>
-->				

<div class="widget">
<div class="widget-header transparent">
<h2>Features of <strong>SyncSols</strong></h2>
<div class="additional-btn">
<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
<!-- 							<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a> -->
</div>
</div>
<div class="widget-content padding">
<form action="{{url('admin/setting')}}" method="POST" enctype="multipart/form-data">
{{ csrf_field() }}                      
<div class="form-group">
<label for="input-text" class="col-sm-2 control-label">FA Icon</label>
<div class="col-sm-10">
<input type="text" name="fa_icon" value="{{Setting::get('site_name')}}" class="form-control" id="input-text" placeholder="FA Icon">
</div>
</div>
</br>
</br>
<div class="form-group">
<label for="input-text" class="col-sm-2 control-label">Highlight Text</label>
<div class="col-sm-10">
<input type="text" name="highlight_text" class="form-control" value="{{Setting::get('contact_number')}}" id="input-text" placeholder="Highlight Text">
</div>
</div>
</br>
</br>
<div class="form-group">
<label for="input-text" class="col-sm-2 control-label">Small Description</label>
<div class="col-sm-10">
<input type="text" name="small_description" class="form-control" value="{{Setting::get('contact_number')}}" id="input-text" placeholder="Small Description">
</div>
</div>
</br>
</br>
<div class="form-group">
<label for="input-text" class="col-sm-2 control-label">Full Description</label>
<div class="col-sm-10">
<textarea type="text" name="full_description"  value="{{Setting::get('contact_address1')}}" class="form-control" id="myeditor" placeholder="Full Description">{{Setting::get('contact_address1')}}</textarea>
</div>
</div>
</br>
</br>

<button type="submit" class="btn btn-default">Save	</button>

<!--  -->
</form>
</div>

</div>
<!-- End of your awesome content -->


</div>
<!-- ============================================================== -->
<!-- End content here -->
<!-- ============================================================== -->

</div>
<!-- End right content -->

</div>
<!-- End of page -->
<!-- the overlay modal element -->
<div class="md-overlay"></div>
<link href="{{asset('public/assets/js/admin/libs/jqueryui/ui-lightness/jquery-ui-1.10.4.custom.min.css')}}" rel="stylesheet" />
<link href="{{asset('public/assets/js/admin/libs/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
<link href="{{asset('public/assets/js/admin/libs/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
<link href="{{asset('public/assets/js/admin/libs/fontello/css/fontello.css')}}" rel="stylesheet" />
<link href="{{asset('public/assets/js/admin/libs/animate-css/animate.min.css')}}" rel="stylesheet" />
<link href="{{asset('public/assets/js/admin/libs/nifty-modal/css/component.css')}}" rel="stylesheet" />
<link href="{{asset('public/assets/js/admin/libs/magnific-popup/magnific-popup.css')}}" rel="stylesheet" /> 
<link href="{{asset('public/assets/js/admin/libs/ios7-switch/ios7-switch.css')}}" rel="stylesheet" /> 
<link href="{{asset('public/assets/js/admin/libs/pace/pace.css')}}" rel="stylesheet" />
<link href="{{asset('public/assets/js/admin/libs/sortable/sortable-theme-bootstrap.css')}}" rel="stylesheet" />
<link href="{{asset('public/assets/js/admin/libs/bootstrap-datepicker/css/datepicker.css')}}" rel="stylesheet" />
<link href="{{asset('public/assets/js/admin/libs/jquery-icheck/skins/all.css')}}" rel="stylesheet" />
<!-- Code Highlighter for Demo -->
<link href="{{asset('public/assets/js/admin/libs/prettify/github.css')}}" rel="stylesheet" />

<!-- Extra CSS Libraries Start -->
<!-- jvectormap -->
<link rel="stylesheet" href="{{asset('public/assets/js/admin/libs/jquery-jvectormap/css/jquery-jvectormap-1.2.2.css')}}">
<!-- Date Picker -->
<link rel="stylesheet" href="{{asset('public/assets/js/admin/libs/bootstrap-datepicker/css/datepicker.css')}}">

<!-- bootstrap wysihtml5 - text editor -->
<link rel="stylesheet" href="{{asset('public/assets/js/admin/libs/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
<!-- Extra CSS Libraries Start -->
<link href="{{asset('public/assets/js/admin/libs/dropzone/css/dropzone.css')}}" rel="stylesheet" type="text/css" />

<!-- Demo Specific JS Libraries -->
<script src="{{asset('public/assets/js/admin/libs/prettify/prettify.js')}}"></script>
<script src="{{asset('public/assets/js/admin/libs/dropzone/dropzone.min.js')}}"></script>
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script type="text/javascript">
    CKEDITOR.replace('myeditor');
   $(document).ready(function(){
    $("#cms-select").change(function(){
        var types = $("#cms-select").val();
        
        $.ajaxSetup({
                headers: { 'X-CSRF-TOKEN': $('meta[name="_toke-n"]').attr('content') }
            });

        $.ajax({url: "{{ url('admin/cms') }}/"+types, 
            success: function(data) {
                console.log(data);
               CKEDITOR.instances["myeditor"].setData(data)
            }});
    });
});
    
</script>
@include('admin.include.footer')
