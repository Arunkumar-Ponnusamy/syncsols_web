<!DOCTYPE html>
<html>
    
<!-- Mirrored from themesground.com/nexus-admin/template/HTML/calendar.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Jan 2018 18:02:33 GMT -->
<head>
        <meta charset="UTF-8">
        <title>SyncSols | Dashboard</title>   
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="description" content="">
        <meta name="keywords" content="nexus bootstrap template, nexus admin, bootstrap,admin template, bootstrap admin,">
        <meta name="author" content="ThemesGround">

        <!-- Base Css Files -->
        <link rel="stylesheet" href="{{asset('public/assets/dist/css/demo.css')}}">
        <link rel="stylesheet" href="{{asset('public/assets/dist/css/dropify.min.css')}}">
        <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
      <link rel="icon" href="{{asset('public/assets/img/fav.jpg')}}">
        <link href="{{asset('public/assets/libs/jqueryui/ui-lightness/jquery-ui-1.10.4.custom.min.css')}}" rel="stylesheet" />
        <link href="{{asset('public/assets/libs/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
        <link href="{{asset('public/assets/libs/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
        <link href="{{asset('public/assets/libs/fontello/css/fontello.css')}}" rel="stylesheet" />
        <link href="{{asset('public/assets/libs/animate-css/animate.min.css')}}" rel="stylesheet" />
        <link href="{{asset('public/assets/libs/nifty-modal/css/component.css')}}" rel="stylesheet" />
        <link href="{{asset('public/assets/libs/magnific-popup/magnific-popup.css')}}" rel="stylesheet" /> 
        <link href="{{asset('public/assets/libs/ios7-switch/ios7-switch.css')}}" rel="stylesheet" /> 
        <link href="{{asset('public/assets/libs/pace/pace.css')}}" rel="stylesheet" />
        <link href="{{asset('public/assets/libs/sortable/sortable-theme-bootstrap.css')}}" rel="stylesheet" />
        <link href="{{asset('public/assets/libs/bootstrap-datepicker/css/datepicker.css')}}" rel="stylesheet" />
        <link href="{{asset('public/assets/libs/jquery-icheck/skins/all.css')}}" rel="stylesheet" />
        <!-- Code Highlighter for Demo -->
        <link href="{{asset('public/assets/libs/prettify/github.css')}}" rel="stylesheet" />
        
                <!-- Extra CSS Libraries Start -->
 <!-- jvectormap -->
    <link rel="stylesheet" href="{{asset('public/assets/libs/jquery-jvectormap/css/jquery-jvectormap-1.2.2.css')}}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{asset('public/assets/libs/bootstrap-datepicker/css/datepicker.css')}}">

    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{asset('public/assets/libs/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
             <!-- Extra CSS Libraries Start -->
                <link href="{{asset('public/assets/libs/fullcalendar/fullcalendar.css')}}" rel="stylesheet" type="text/css" />
       <link href="{{asset('public/assets/css/style.css')}}" rel="stylesheet" type="text/css" />
       <link href="{{asset('public/assets/css/main.css')}}" rel="stylesheet" type="text/css" />
                <!-- Extra CSS Libraries End -->
        <link href="{{asset('public/assets/css/style-responsive.css')}}" rel="stylesheet" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        
        <link rel="apple-touch-icon" href="{{asset('public/assets/img/apple-touch-icon.png')}}" />
        <link rel="apple-touch-icon" sizes="57x57" href="{{asset('public/assets/img/apple-touch-icon-57x57.png')}}" />
        <link rel="apple-touch-icon" sizes="72x72" href="{{asset('public/assets/img/apple-touch-icon-72x72.png')}}" />
        <link rel="apple-touch-icon" sizes="76x76" href="{{asset('public/assets/img/apple-touch-icon-76x76.png')}}" />
        <link rel="apple-touch-icon" sizes="114x114" href="{{asset('public/assets/img/apple-touch-icon-114x114.png')}}" />
        <link rel="apple-touch-icon" sizes="120x120" href="{{asset('public/assets/img/apple-touch-icon-120x120.png')}}" />
        <link rel="apple-touch-icon" sizes="144x144" href="{{asset('public/assets/img/apple-touch-icon-144x144.png')}}" />
        <link rel="apple-touch-icon" sizes="152x152" href="{{asset('public/assets/img/apple-touch-icon-152x152.png')}}" />
    </head>
    <body class="fixed-left">
        <!-- Modal Start -->
	<!-- Begin page -->
	<div id="wrapper">
		
<!-- Top Bar Start -->
<div class="topbar">
    <div class="topbar-left">
      <div class="logo">
            <h1><a href="{{url('admin/dashboard')}}"><img src="{{asset('public/assets/img/logo.png')}}" width=50%></a></h1>
        </div>
       
    </div>
    <!-- Button mobile view to collapse sidebar menu -->
    <div class="navbar" role="navigation">
    
        <div class="container">
        
            <div class="navbar-collapse2">
                 <button class="button-menu-mobile open-left">
        <i class="fa fa-bars"></i>
        </button> <h1 class="title">Dashboard</h1>
                <ul class="nav navbar-nav navbar-right top-navbar">
                <li>
                         <!-- Search form -->
                <form role="search" class="navbar-form">
                    <div class="form-group">
                        <input type="text" placeholder="Search" class="form-control">
                        <button type="submit" class="btn search-button"><i class="fa fa-search"></i></button>
                    </div>
                </form>
                </li>
                    <li class="dropdown notifications-menu hide-phone">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i><span class="label label-blue absolute">4</span></a>
                        <ul class="dropdown-menu">
                  <li class="header">You have 10 notifications</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <div class="slimScrollDiv">
                    <ul class="menu">
                      <li>
                        <a href="#">
                          <i class="fa fa-pencil"></i> 5 new customers joined today
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-pencil"></i> 5 new customers joined
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-user text-red"></i> You changed your username
                        </a>
                      </li>
                    </ul><div class="slimScrollBar" style="width: 3px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 200px; background: rgb(0, 0, 0);"></div><div class="slimScrollRail" style="width: 3px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; opacity: 0.2; z-index: 90; right: 1px; background: rgb(51, 51, 51);"></div></div>
                  </li>
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
                    </li>
                    <li class="dropdown iconify hide-phone messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="label label-warning absolute">10</span></a>
                        <ul class="dropdown-menu">
                  <li class="header">You have 4 messages</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <div class="slimScrollDiv">
                    <ul class="menu">
                      <li><!-- start message -->
                        <a href="#">
                          <div class="pull-left">
                            <img src="{{asset('public/images/users/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Support Team
                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li><!-- end message -->
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="{{asset('public/images/users/user3-128x128.jpg')}}" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Nexus Design Team
                            <small><i class="fa fa-clock-o"></i> 2 hours</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="{{asset('public/images/users/user4-128x128.jpg')}}" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Developers
                            <small><i class="fa fa-clock-o"></i> Today</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="{{asset('public/images/users/user3-128x128.jpg')}}" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Sales Department
                            <small><i class="fa fa-clock-o"></i> Yesterday</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="{{asset('public/images/users/user4-128x128.jpg')}}" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Reviewers
                            <small><i class="fa fa-clock-o"></i> 2 days</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                    </ul><div class="slimScrollBar" style="width: 3px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 95.2381px; background: rgb(0, 0, 0);"></div><div class="slimScrollRail" style="width: 3px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; opacity: 0.2; z-index: 90; right: 1px; background: rgb(51, 51, 51);"></div></div>
                  </li>
                  <li class="footer"><a href="#">See All Messages</a></li>
                </ul>
                    </li>
                    <li class="dropdown tasks-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-tasks"></i>
                  <span class="label label-danger absolute">9</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 5 tasks</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 200px;"><ul class="menu" style="overflow: hidden; width: 100%; height: 200px;">
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Update software
                            <small class="pull-right">47%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">20% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            iphone Design
                            <small class="pull-right">40%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">40% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Fix all bugs
                            <small class="pull-right">60%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">60% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <!-- end task item -->
                    </ul><div class="slimScrollBar" style="width: 3px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; background: rgb(0, 0, 0);"></div><div class="slimScrollRail" style="width: 3px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; opacity: 0.2; z-index: 90; right: 1px; background: rgb(51, 51, 51);"></div></div>
                  </li>
                  <li class="footer">
                    <a href="#">View all tasks</a>
                  </li>
                </ul>
              </li>
                    <li class="dropdown topbar-profile">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="rounded-image topbar-profile-image"><img src="{{asset('public/assets/img/fav.jpg')}}"></span> Syncsols </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">My Profile</a></li>
                            <li><a href="#">Change Password</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="icon-help-2"></i> Help</a></li>
                            <li><a href="lockscreen.html"><i class="icon-lock-1"></i> Lock me</a></li>
                            <li><a class="md-trigger" data-modal="logout-modal"><i class="icon-logout-1"></i> Logout</a></li>
                        </ul>
                    </li>
                    <li class="right-opener">
                        <a href="#" class=""><i class="fa fa-power-off" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>
<!-- Top Bar End -->
		    <!-- Left Sidebar Start -->
        <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">
                <!--- Profile -->
                <div class="profile-info">
                    <div>
                      <a href="url('/')" class="rounded-image profile-image"><img src="{{asset('public/assets/img/fav.jpg')}}"></a>
                    </div>
                    <div>
                        <div class="profile-text">Syncsols</div>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
              
                <div id="sidebar-menu">
  <ul>
    <li><a href="{{url('admin/dashboard')}}"><i class="fa fa-home"></i> <span>Dashboard</span> </a>
     
    </li>
    <li class='has_sub'><a href='javascript:void(0);'><i class="fa fa-laptop"></i> <span>Home Page</span> 
    
    <span class="pull-right"><i class="fa fa-angle-down"></i></span> <span class="label label-primary pull-right">6</span></a>
      <ul>
        <li><a href="{{url('admin/banners')}}"><span>Banner</span></a></li>
        <li><a href="{{url('admin/features')}}"><span>Features</span></a></li>
        <!-- <li><a href="{{url('admin/ourservices')}}"><span>Our Services</span></a></li> -->
        <li><a href="{{url('admin/team')}}"><span>Team</span></a></li>
        <li><a href="{{url('admin/works')}}"><span>Our Works</span></a></li>
        <li><a href="{{url('admin/counts')}}"><span>Counts</span></a></li>
        <li><a href="{{url('admin/testimonials')}}"><span>Testimonials</span></a></li>
      </ul>
    </li>

    <li class='has_sub'><a href='javascript:void(0);'><i class="fa fa-question-circle"></i> <span>About Page</span> 
    
    <span class="pull-right"><i class="fa fa-angle-down"></i></span> <span class="label label-primary pull-right">1</span></a>
      <ul>
        <li><a href="{{url('admin/about')}}"><span>About</span></a></li>
      </ul>
    </li>

    <li class='has_sub'><a href='javascript:void(0);'><i class="fa fa-product-hunt"></i> <span>Projects Page</span> 
    
    <span class="pull-right"><i class="fa fa-angle-down"></i></span> <span class="label label-primary pull-right">1</span></a>
      <ul>
        <li><a href="{{url('admin/projects')}}"><span>Project Detail</span></a></li>
      </ul>
    </li>

    <li class='has_sub'><a href='javascript:void(0);'><i class="fa fa-life-ring"></i> <span>Services Page</span> 
    
    <span class="pull-right"><i class="fa fa-angle-down"></i></span> <span class="label label-primary pull-right">1</span></a>
      <ul>
        <li><a href="{{url('admin/services')}}"><span>Services Detail</span></a></li>
      </ul>
    </li>

    <li><a href="{{url('admin/setting')}}"><i class="fa fa-cogs"></i> <span>Setting</span> </a>
     
    </li>
<!--     <li class='has_sub'><a href='javascript:void(0);'><i class="fa fa-laptop"></i> <span>UI Elements</span> 
    
    <span class="pull-right"><i class="fa fa-angle-down"></i></span> <span class="label label-primary pull-right">4</span></a>
      <ul>
      	<li><a href='grid.html'><span>Grid</span></a></li>
        <li><a href='buttons.html'><span>Buttons</span></a></li>
        <li><a href='alerts.html'><span>Alerts</span></a></li>
        <li><a href='modals.html'><span>Modals</span></a></li>
        <li><a href='icons.html'><span>Icons</span></a></li>
        <li><a href='progress-bars.html'><span>Progress Bars</span></a></li>
        <li><a href='notifications.html'><span>Notifications</span></a></li>
        <li><a href='tabs-accordions.html'><span>Tabs & Accordions</span></a></li>
        <li><a href='typography.html'><span>Typography</span></a></li>
      </ul>
    </li>
    
    <li class='has_sub'><a href='javascript:void(0);'><i class="fa fa-square-o"></i> <span>Forms</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
      <ul>
        <li><a href='forms.html'><span>Form Elements</span></a></li>
        <li><a href='form-wizard.html'><span>Form Wizard</span></a></li>
        
        <li><a href='form-validation.html'><span>Form Validation</span></a></li>
        <li><a href='form-uploads.html'><span>File Uploads</span></a></li>
      </ul>
    </li>
    
    <li class='has_sub'><a href='javascript:void(0);'><i class="fa fa-table"></i> <span>Tables</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span> <span class="label pull-right bg-purple1">New</span></a>
      <ul>
        <li><a href='tables.html'><span>Basic Tables</span></a></li>
        <li><a href='datatables.html'><span>Data Tables</span></a></li>
      </ul>
    </li>
     <li><a href='calendar.html'><i class="fa fa-calendar-check-o"></i> <span>Calendar</span>  <span class="label pull-right bg-red">3</span></a>
    </li>
    
    <li class='has_sub'><a href='javascript:void(0);'><i class='fa fa-envelope'></i> <span>Mailbox</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span> <span class="label pull-right bg-yellow">12</span></a>
      <ul>
        <li><a href='inbox.html'><span>Inbox</span></a></li>
        <li><a href='read-message.html'><span>Email</span></a></li>
        <li><a href='new-message.html'><span>New Message</span></a></li>
      </ul>
    </li>
    
    <li class='has_sub'><a href='javascript:void(0);'><i class="fa fa-bar-chart"></i> <span>Charts</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
      <ul>
        <li><a href='sparkline-charts.html'><span>Sparkline Charts</span></a></li>
        <li><a href='rickshaw-charts.html'><span>Rickshaw Charts</span></a></li>
        <li><a href='morris-charts.html'><span>Morris Charts</span></a></li>
        <li><a href='other-charts.html'><span>Other Charts</span></a></li>
      </ul>
    </li>
    
    <li class='has_sub'><a href='javascript:void(0);'><i class="fa fa-bookmark-o"></i> <span>Extras</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
      <ul>
      	<li><a href='profile.html'><span>User Profile</span></a></li>
        <li><a href='invoice.html'><span>Invoice</span></a></li>
        <li><a href='gallery.html'><span>Gallery</span></a></li>
        <li><a href='maintenance.html'><span>Maintenance</span></a></li>
        <li class='has_sub'><a href='javascript:void(0);'><span>3 Level menu</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
          <ul>
            <li><a href='javascript:void(0);'><span>Sub Item</span></a></li>
          </ul>
        </li>
        <li class='has_sub'><a href='javascript:void(0);'><span>4 Level Menu</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
          <ul>
            <li class='has_sub'><a href='javascript:void(0);'><span>Sub Item - level 3</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
              <ul>
                <li><a href='javascript:void(0);'><span>Sub Item - level 4</span></a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li><a href='blank.html'><span>Blank Page</span></a></li>
        <li><a href='login.html'><span>Login</span></a></li>
        <li><a href='register.html'><span>Register</span></a></li>
        <li><a href='lockscreen.html'><span>Lock Screen</span></a></li>
        <li><a href='404.html'><span>404 Error</span></a></li>
        </ul>
    </li> -->
  </ul>

</div>

<div class="box box-widget widget-user">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-black">
                  <h3 class="widget-user-username">Saraha Smith</h3>
                  <h5 class="widget-user-desc">Web Designer</h5>
                </div>
                <div class="widget-user-image">
                  <img class="img-circle" src="{{asset('public/images/users/user3-128x128.jpg')}}" alt="User Avatar">
                </div>
                <div class="box-footer">
                  <div class="row">
                    <div class="col-xs-12 border-bottom">
                      <div class="description-block">
                        <h5 class="description-header">3,200</h5>
                        <span class="description-text">SALES</span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-xs-12 border-bottom">
                      <div class="description-block">
                        <h5 class="description-header">13,000</h5>
                        <span class="description-text">FOLLOWERS</span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-xs-12">
                      <div class="description-block">
                        <h5 class="description-header">35</h5>
                        <span class="description-text">PRODUCTS</span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div>
              </div>
              
              <div class="box box-widget">
                <div class="box-header with-border">
                  <div class="user-block">
                    <img class="img-circle" src="{{asset('public/images/users/user1-128x128.jpg')}}" alt="user image">
                    <span class="username"><a href="#">Jonathan Doe</a></span>
                    <span class="description">Shared publicly - 7:30 PM Today</span>
                  </div><!-- /.user-block -->
                  <!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body pad_none" style="display: block;">
                  <img class="img-responsive pad_minus" src="{{asset('public/assets/img/blog-img.jpg')}}" alt="Photo">
                  <div style="padding:15px; overflow:hidden">
                  <p>Bacon ipsum dolor sit amet salami venison chicken.</p>
                
                  <span class="pull-left text-muted">127 likes - 3 comments</span>
                  </div>
                </div><!-- /.box-body -->
                <div class="box-footer box-comments" style="display: block;">
                  <div class="box-comment">
                    <!-- User image -->
                    <img class="img-circle img-sm" src="{{asset('public/images/users/user3-128x128.jpg')}}" alt="user image">
                    <div class="comment-text">
                      <span class="username">
                        Kendra Hall
                        <span class="text-muted">8:03 PM Today</span>
                      </span><!-- /.username -->
                     Aeneam eu leo quam. Cras mattis consecterur purus 
                    </div><!-- /.comment-text -->
                  </div><!-- /.box-comment -->
                  <div class="box-comment">
                    <!-- User image -->
                    <img class="img-circle img-sm" src="{{asset('public/images/users/user4-128x128.jpg')}}" alt="user image">
                    <div class="comment-text">
                      <span class="username">
                        Mark Doe
                        <span class="text-muted">8:03 PM Today</span>
                      </span><!-- /.username -->
                     Donec sed odio dui. Aeneam eu leo quam. Cras mattis
                    </div><!-- /.comment-text -->
                  </div><!-- /.box-comment -->
                </div><!-- /.box-footer -->
                <div class="box-footer" style="display: block;">
                  <form action="#" method="post">
                    <img class="img-responsive img-circle img-sm" src="{{asset('public/images/users/user4-128x128.jpg')}}" alt="alt text">
                    <!-- .img-push is used to add margin to elements next to floating images -->
                    <div class="img-push">
                      <input type="text" class="form-control input-sm" placeholder="Enter your comment here">
                    </div>
                  </form>
                </div><!-- /.box-footer -->
              </div>


        </div>
            
        </div>
        <!-- Left Sidebar End -->		    
