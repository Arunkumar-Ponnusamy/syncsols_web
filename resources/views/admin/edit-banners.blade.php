@include('admin.include.header')
<!-- Start right content -->
<div class="content-page">
<!-- ============================================================== -->
<!-- Start Content here -->
<!-- ============================================================== -->
<div class="content">
							

<div class="widget">
<div class="widget-header transparent">
<h2><strong>Home</strong> <a href="" >Banner</a> > Edit</h2>
<div class="additional-btn">
<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
<a href="{{url('admin/banners')}}" class="btn btn-default pull-right"><i class="fa fa-angle-left"></i> Back</a>
<!-- 							<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a> -->
</div>
</div>
    <div class="widget-content padding">
    <form action="{{url('admin/banners/'.$banner->id)}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}                      
    <div class="form-group">
    <label for="input-text" class="col-sm-2 control-label">Banner Text</label>
    <div class="col-sm-10">
    <input type="text" name="banner_text" value="{{$banner->banner_text}}" class="form-control" id="input-text" placeholder="Banner Text">
    </div>
    </div>
    </br>
    </br>
    <div class="form-group">
    <label for="input-text" class="col-sm-2 control-label">Banner Image</label>
    <div class="col-sm-10">
        @if($banner->image)
        <img style="height: 90px; margin-bottom: 15px; border-radius:1em;" src="{{img($banner->image)}}">
        @endif
        <input type="file" name="image" id="input-file-max-fs" class="dropify" data-max-file-size="10M" />
    </div>
    </div>
    </br>
    </br>
    <div class="form-group">
    <label for="input-text" class="col-sm-2 control-label">Enable Video</label>
    <div class="col-sm-10">
    <!-- Rounded switch -->
    <label class="switch">
      <input class="form-control" id="enable_video" name="enable_video" type="checkbox" value="1" @if($banner->enable_video=='1'){{'checked'}}@endif>
      <span class="slider round"></span>
    </label>
    </div>
    </div>
    </br>
    </br>

    <div class="form-group video_caption">
    <label for="input-text" class="col-sm-2 control-label">Video Caption</label>
    <div class="col-sm-10">
    <input type="text" name="video_caption" class="form-control video_caption" value="{{$banner->video_caption}}" id="video_caption" placeholder="Video Caption">
    </div>
    </div>
    </br>
    </br>

    <div class="form-group video_choice_toggle">
    <label for="input-text" class="col-sm-2 control-label">Video Choice</label>
    <div class="col-sm-10">
    <select name="video_choice_toggle" class="form-control video_choice_toggle" value="" id="video_choice_toggle">
      <option value="video_url" @if($banner->video_choice_toggle=='video_url'){{'selected'}}@endif>Video URL</option>
      <option value="video_file" @if($banner->video_choice_toggle=='video_file'){{'selected'}}@endif>Video File</option>
    </select>
    </div>
    </div>
    </br>
    </br>

    <div class="form-group video_link">
    <label for="input-text" class="col-sm-2 control-label">Banner Video URL</label>
    <div class="col-sm-10">
    <input type="text" name="video_link" class="form-control video_link" value="{{$banner->video_link}}" id="video_link" placeholder="Banner Video URL">
    </div>
    </div>
    </br>
    </br>

    <div class="form-group video">
    <label for="input-text" class="col-sm-2 control-label">Banner Video</label>
    <div class="col-sm-10">
        @if($banner->video!='' || $banner->video!=NULL)
        <video style="height: 90px; margin-bottom: 15px; border-radius:1em;" src="{{img($banner->video)}}" controls="controls"></video>
        @endif
        <input type="file" name="video" id="input-file-max-fs" class="dropify video" data-max-file-size="50M" />
    </div>
    </div>
    </br>
    </br>

    <div class="form-group position">
    <label for="input-text" class="col-sm-2 control-label">Banner Position</label>
    <div class="col-sm-10">
    <input type="number" name="position" class="form-control position" value="{{$banner->position}}" id="position" placeholder="Banner Position">
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
<script type="text/javascript">video_link
  @if($banner->video_choice_toggle!='video_url')
  $(".video_link").hide();
  @endif
  @if($banner->video_choice_toggle!='video_file')
  $(".video").hide();
  @endif
  @if($banner->enable_video!='1')
  $(".video_choice_toggle").hide();
  @endif
  $("#enable_video").change(function() {
      if(this.checked) {
      $(".video_link").show();
      // $(".video").show();
      $(".video_choice_toggle").show();
      } else {
      $(".video_link").hide();
      $(".video").hide();
      $(".video_choice_toggle").hide();
      }
  });
  $("#video_choice_toggle").change(function() {
      if($("#video_choice_toggle").val()=='video_url') {
      
      $(".video_link").show();
      $(".video").hide();
      } else if($("#video_choice_toggle").val()=='video_file') {
      $(".video_link").hide();
      $(".video").show();
      }
  });
  
</script>
@include('admin.include.footer')
