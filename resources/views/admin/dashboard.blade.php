@include('admin.include.header')
		<!-- Start right content -->
        <div class="content-page">
			<!-- ============================================================== -->
			<!-- Start Content here -->
			<!-- ============================================================== -->
            <div class="content">
            	<!-- BEGIN MODAL -->
	            <div class="modal fade" id="event-modal">
	                <div class="modal-dialog">
	                    <div class="modal-content">
	                        <div class="modal-header">
	                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                            <h4 class="modal-title"><strong>Manage</strong> event</h4>
	                        </div>
	                        <div class="modal-body">
	                            <p></p>
	                        </div>
	                        <div class="modal-footer">
	                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	                            <button type="button" class="btn btn-success save-event">Add event</button>
	                            <button type="button" class="btn btn-danger delete-event" data-dismiss="modal">Delete</button>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <!-- END MODAL -->
				<div class="row">
					<div class="col-md-12 portlets">
						<div class="widget">
							<div class="widget-header">
								<h2>Events Manager</h2>
								<div class="additional-btn">
									<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
									<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
									<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
								</div>
							</div>
							<div class="widget-content padding">
								<div class="col-md-3">
				                    <div class="widget bg-gray-light">
				                        <div class="widget-body">
				                            <div class="row">
				                                <div class="col-md-12 col-sm-12 col-xs-12">
				                                    <h3 class="text-white" id="calender-current-date">Events</h3>
				                                    <div id='draggable-events'>
				                                        <p>Drag and drop your event or click in the calendar</p><br>
				                                        <div class="draggable-event btn btn-block bg-green-1 text-white-1" data-class="bg-green-1">
				                                            <i class="fa fa-move"></i>Entertainment
				                                        </div>
				                                        <div class="draggable-event btn btn-block bg-pink-1 text-white-1" data-class="bg-pink-1">
				                                            <i class="fa fa-move"></i>Meeting
				                                        </div>
				                                        <div class="draggable-event btn btn-block bg-lightblue-1 text-white-1" data-class="bg-lightblue-1">
				                                            <i class="fa fa-move"></i>Lunch
				                                        </div>
				                                        <div class="draggable-event btn btn-block bg-red-1 text-white-1" data-class="bg-red-1">
				                                            <i class="fa fa-move"></i>Work
				                                        </div>
				                                        <div class="draggable-event btn btn-block bg-blue-1 text-white-1" data-class="bg-blue-1">
				                                            <i class="fa fa-move"></i>Sport
				                                        </div><br>
				                                        <p>
				                                            <label>
				                                                <input id="drop-remove" type="checkbox"> remove after drop
				                                            </label>
				                                        </p>
				                                    </div>
				                                </div>
				                            </div>
				                        </div>
				                    </div>
				                </div>
				                <div class="col-md-9">
				                    <div class="widget bg-white">
				                        <div class="widget-body">
				                            <div class="row">
				                                <div class="col-md-12 col-sm-12 col-xs-12">
				                                    <div id="calendar"></div>
				                                </div>
				                            </div>
				                        </div>
				                    </div>
				                </div>
							</div>
						</div>
					</div>
				</div>

				           	
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
	<!-- End of eoverlay modal -->
@include('admin.include.footer')
