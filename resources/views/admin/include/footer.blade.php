	<script>
		var resizefunc = [];
	</script>
        <script src="{{asset('public/assets/dist/js/dropify.min.js')}}"></script>
        <script>
            $(document).ready(function(){
                // Basic
                $('.dropify').dropify();


                // Used events
                var drEvent = $('.dropify-event').dropify();

                drEvent.on('dropify.beforeClear', function(event, element){
                    return confirm("Do you really want to delete \"" + element.filename + "\" ?");
                });

                drEvent.on('dropify.afterClear', function(event, element){
                    alert('File deleted');
                });
            });
        </script>
	<script type="text/javascript">
	$(document).ready( function () {
	    $('#table_id').DataTable();
	} );
		
	</script>
	    	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<!-- <script src="{{asset('public/assets/libs/jquery/jquery-1.11.1.min.js')}}"></script> -->

	<script src="{{asset('public/assets/libs/bootstrap/js/bootstrap.min.js')}}"></script>
	<!-- <script src="{{asset('public/assets/libs/jqueryui/jquery-ui-1.10.4.custom.min.js')}}"></script> -->
	<script src="{{asset('public/assets/libs/jquery-ui-touch/jquery.ui.touch-punch.min.js')}}"></script>
	
	<script src="{{asset('public/assets/libs/jquery-animate-numbers/jquery.animateNumbers.js')}}"></script>
	<script src="{{asset('public/assets/libs/ios7-switch/ios7.switch.js')}}"></script>
	<script src="{{asset('public/assets/libs/fastclick/js/fastclick.js')}}"></script>
	<script src="{{asset('public/assets/libs/jquery-blockui/jquery.blockUI.js')}}"></script>
	<script src="{{asset('public/assets/libs/bootstrap-bootbox/bootbox.min.js')}}"></script>
	<script src="{{asset('public/assets/libs/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
	<script src="{{asset('public/assets/libs/jquery-sparkline/jquery-sparkline.js')}}"></script>
	<script src="{{asset('public/assets/libs/nifty-modal/js/classie.js')}}"></script>
	<script src="{{asset('public/assets/libs/nifty-modal/js/modalEffects.js')}}"></script>
	<script src="{{asset('public/assets/libs/sortable/sortable.min.js')}}"></script>
	<script src="{{asset('public/assets/libs/bootstrap-fileinput/bootstrap.file-input.js')}}"></script>
	<script src="{{asset('public/assets/libs/bootstrap-select/bootstrap-select.min.js')}}"></script>
	<script src="{{asset('public/assets/libs/bootstrap-select2/select2.min.js')}}"></script>
	<script src="{{asset('public/assets/libs/magnific-popup/jquery.magnific-popup.min.js')}}"></script> 
	<script src="{{asset('public/assets/libs/pace/pace.min.js')}}"></script>
	<script src="{{asset('public/assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
	<script src="{{asset('public/assets/libs/jquery-icheck/icheck.min.js')}}"></script>

	<!-- Demo Specific JS Libraries -->
	<script src="{{asset('public/assets/libs/prettify/prettify.js')}}"></script>

	<script src="{{asset('public/assets/js/init.js')}}"></script>
    <!-- Page Specific JS Libraries -->
	<script src="{{asset('public/assets/libs/fullcalendar/fullcalendar.min.js')}}"></script>
	<script src="{{asset('public/assets/js/pages/calendar.js')}}"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>	
	</body>

</html>