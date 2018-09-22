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
						<h2><strong>Site</strong> Settings</h2>
						<div class="additional-btn">
							<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
<!-- 							<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
							<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a> -->
						</div>
					</div>
					<div class="widget-content padding">
						<form class="form-horizontal" role="form">
						  <div class="form-group">
							<label for="input-text" class="col-sm-2 control-label">Site Name</label>
							<div class="col-sm-10">
							  <input type="text" class="form-control" id="input-text" placeholder="Site Name">
							</div>
						  </div>
						  <div class="form-group">
							<label for="input-text" class="col-sm-2 control-label">Contact Number</label>
							<div class="col-sm-10">
							  <input type="text" class="form-control" id="input-text" placeholder="Contact">
							</div>
						  </div>
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
@include('admin.include.footer')
