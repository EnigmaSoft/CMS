<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Integral - A fully responsive, HTML5 based admin template">
	<meta name="keywords" content="Responsive, Web Application, HTML5, Admin Template, business, professional, Integral, web design, CSS3">
	<title>Integral | Blank Page</title>
	<!-- Site favicon -->
	<link href="{{ asset('static/panel/images/favicon.ico') }}" rel="icon" type="image/x-icon" />
	<!-- Entypo font stylesheet -->
	<link href="{{ asset('static/panel/css/entypo.css') }}" rel="stylesheet">
	<!-- Font awesome stylesheet -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<!-- Bootstrap stylesheet min version -->
	<link href="{{ asset('static/panel/css/bootstrap.min.css') }}" rel="stylesheet">
	<!-- Integral core stylesheet -->
	<link href="{{ asset('static/panel/css/theme.css') }}" rel="stylesheet">
    <link href="{{ asset('static/panel/css/integral-forms.css') }}" rel="stylesheet">
    
    
    <style>
        @stack('custom-css')
    </style>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<!-- Loader Backdrop -->
	<div class="loader-backdrop">
		<!-- Loader -->
		<div class="loader">
			<div class="bounce-1"></div>
			<div class="bounce-2"></div>
		</div>
		<!-- /loader -->
	</div>
	<!-- loader backgrop -->

	<!-- Page container -->
	<div class="page-container">

		<!-- Page Sidebar -->
		<div class="page-sidebar">

				<!-- Site header	-->
			<header class="site-header">
				<div class="site-logo"><a href="index.html"><img src="{{ asset('static/panel/images/logo.png') }}" alt="Integral" title="Integral"></a></div>
				<div class="sidebar-collapse hidden-xs"><a class="sidebar-collapse-icon" href="#"><i class="icon-menu"></i></a></div>
				<div class="sidebar-mobile-menu visible-xs"><a data-target="#side-nav" data-toggle="collapse" class="mobile-menu-icon" href="#"><i class="icon-menu"></i></a></div>
			</header>
			<!-- /site header -->

			<!-- Main navigation -->
			<ul id="side-nav" class="main-menu navbar-collapse collapse">
				<li class="navigation-header">Main</li>
				<li class="active"><a href="index.html"><i class="icon-gauge"></i><span class="title">Dashboard</span></a></li>
				<li class="has-sub"><a href="collapsed-sidebar.html"><i class="icon-layout"></i><span class="title">Layouts</span></a>
					<ul class="nav collapse">
						<li><a href="collapsed-sidebar.html"><span class="title">Collapsed Sidebar</span></a></li>
						<li><a href="fixed-sidebar.html"><span class="title">Fixed Sidebar</span></a></li>
					</ul>
				</li>
				<li class="navigation-header">Components</li>
				<li class="has-sub"><a href="panels.html"><i class="icon-newspaper"></i><span class="title">UI Elements</span></a>
					<ul class="nav collapse">
						<li><a href="panels.html"><span class="title">Panels</span></a></li>
						<li><a href="buttons.html"><span class="title">Buttons</span></a></li>
						<li><a href="typography.html"><span class="title">Typography</span></a></li>
						<li><a href="tabs-accordions.html"><span class="title">Tabs &amp; Accordions</span></a></li>
						<li><a href="tooltips-popovers.html"><span class="title">Tooltips &amp; Popovers</span></a></li>
						<li><a href="navbars.html"><span class="title">Navbars</span></a></li>
						<li><a href="breadcrumbs.html"><span class="title">Breadcrumbs</span></a></li>
						<li><a href="badges-label.html"><span class="title">Badges &amp; Labels</span></a></li>
						<li><a href="progress-bars.html"><span class="title">Progress Bars</span></a></li>
						<li><a href="modals.html"><span class="title">Modals</span></a></li>
						<li><a href="alerts.html"><span class="title">Alerts</span></a></li>
						<li><a href="pagination.html"><span class="title">Pagination</span></a></li>
						<li><a href="video.html"><span class="title">Video</span></a></li>
					</ul>
				</li>
				<li class="has-sub"><a href="basic-tables.html"><i class="icon-window"></i><span class="title">Tables</span></a>
					<ul class="nav collapse">
						<li><a href="basic-tables.html"><span class="title">Basic Tables</span></a></li>
						<li><a href="data-tables.html"><span class="title">Data Tables</span></a></li>
					</ul>
				</li>
				<li class="has-sub"><a href="form-basic.html"><i class="icon-doc-text"></i><span class="title">Forms</span></a>
					<ul class="nav collapse">
						<li><a href="form-basic.html"><span class="title">Basic Form</span></a></li>
						<li><a href="form-advanced.html"><span class="title">Advanced Plugins</span></a></li>
						<li><a href="form-wizard.html"><span class="title">Form Wizard</span></a></li>
						<li><a href="file-upload.html"><span class="title">File upload</span></a></li>
						<li><a href="editors.html"><span class="title">Editors</span></a></li>
					</ul>
				</li>
				<li class="navigation-header">Extra</li>
				<li class="has-sub"><a href="graph-flot.html"><i class="icon-chart-bar"></i><span class="title">Graphs</span></a>
					<ul class="nav collapse">
						<li><a href="graph-flot.html"><span class="title">Flot Charts</span></a></li>
						<li><a href="graph-morris.html"><span class="title">Morris Charts</span></a></li>
						<li><a href="graph-peity.html"><span class="title">Peity Charts</span></a></li>
						<li><a href="graph-sparkline.html"><span class="title">Sparkline Charts</span></a></li>
						<li><a href="graph-chartjs.html"><span class="title">ChartsJs</span></a></li>
						<li><a href="graph-chartist.html"><span class="title">Chartist</span></a></li>
						<li><a href="graph-c3.html"><span class="title">C3 Charts</span></a></li>
					</ul>
				</li>
				<li class="has-sub"><a href="mail-inbox.html"><i class="icon-mail"></i><span class="title">Mailbox</span></a>
					<ul class="nav collapse">
						<li><a href="mail-inbox.html"><span class="title">Inbox</span></a></li>
						<li><a href="mail-compose.html"><span class="title">Compose Mail</span></a></li>
						<li><a href="mail-read.html"><span class="title">View Mail</span></a></li>
					</ul>
				</li>
				<li><a href="maps-vector.html"><i class="icon-location"></i><span class="title">Vector Map</span> <span class="label label-secondary pull-right">NEW</span></a></li>
			</ul>
			<!-- /main navigation -->
		</div>
		<!-- /page sidebar -->

		<!-- Main container -->
		<div class="main-container">

			<!-- Main header -->
			<div class="main-header row">
				<div class="col-sm-6 col-xs-7">

					<!-- User info -->
					<ul class="user-info pull-left">
						<li class="profile-info dropdown"><a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false"> <img width="44" class="img-circle avatar" alt="" src="{{ asset('static/panel/images/man-3.jpg') }}">John Henderson <span class="caret"></span></a>

							<!-- User action menu -->
							<ul class="dropdown-menu">

								<li><a href="#/"><i class="icon-user"></i>My profile</a></li>
								<li><a href="#/"><i class="icon-mail"></i>Messages</a></li>
								<li><a href="#"><i class="icon-clipboard"></i>Tasks</a></li>
								<li class="divider"></li>
								<li><a href="#"><i class="icon-cog"></i>Account settings</a></li>
								<li><a href="#"><i class="icon-logout"></i>Logout</a></li>
							</ul>
							<!-- /user action menu -->

						</li>
					</ul>
					<!-- /user info -->

				</div>

				<div class="col-sm-6 col-xs-5">
					<div class="pull-right">
						<!-- User alerts -->
						<ul class="user-info pull-left">

							<!-- Notifications -->
							<li class="notifications dropdown">
								<a data-close-others="true" data-hover="dropdown" data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon-attention"></i><span class="badge badge-info">6</span></a>
								<ul class="dropdown-menu pull-right">
									<li class="first">
										<div class="small"><a class="pull-right" href="#">Mark all Read</a> You have <strong>3</strong> new notifications.</div>
									</li>
									<li>
										<ul class="dropdown-list">
											<li class="unread notification-success"><a href="#"><i class="icon-user-add pull-right"></i><span class="block-line strong">New user registered</span><span class="block-line small">30 seconds ago</span></a></li>
											<li class="unread notification-secondary"><a href="#"><i class="icon-heart pull-right"></i><span class="block-line strong">Someone special liked this</span><span class="block-line small">60 seconds ago</span></a></li>
											<li class="unread notification-primary"><a href="#"><i class="icon-user pull-right"></i><span class="block-line strong">Privacy settings have been changed</span><span class="block-line small">2 hours ago</span></a></li>
											<li class="notification-danger"><a href="#"><i class="icon-cancel-circled pull-right"></i><span class="block-line strong">Someone special liked this</span><span class="block-line small">60 seconds ago</span></a></li>
											<li class="notification-info"><a href="#"><i class="icon-info pull-right"></i><span class="block-line strong">Someone special liked this</span><span class="block-line small">60 seconds ago</span></a></li>
											<li class="notification-warning"><a href="#"><i class="icon-rss pull-right"></i><span class="block-line strong">Someone special liked this</span><span class="block-line small">60 seconds ago</span></a></li>
										</ul>
									</li>
									<li class="external-last"> <a href="#">View all notifications</a> </li>
								</ul>
							</li>
							<!-- /notifications -->

							<!-- Messages -->
							<li class="notifications dropdown">
								<a data-close-others="true" data-hover="dropdown" data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon-mail"></i><span class="badge badge-secondary">12</span></a>
								<ul class="dropdown-menu pull-right">
									<li class="first">
										<div class="dropdown-content-header"><i class="fa fa-pencil-square-o pull-right"></i> Messages</div>
									</li>
									<li>
										<ul class="media-list">
											<li class="media">
												<div class="media-left"><img alt="" class="img-circle img-sm" src="{{ asset('static/panel/images/domnic-brown.png') }}"></div>
												<div class="media-body">
													<a class="media-heading" href="#">
														<span class="text-semibold">Domnic Brown</span>
														<span class="media-annotation pull-right">Tue</span>
													</a>
													<span class="text-muted">Your product sounds interesting I would love to check this ne...</span>
												</div>
											</li>
											<li class="media">
												<div class="media-left"><img alt="" class="img-circle img-sm" src="{{ asset('static/panel/images/john-smith.png') }}"></div>
												<div class="media-body">
													<a class="media-heading" href="#">
														<span class="text-semibold">John Smith</span>
														<span class="media-annotation pull-right">12:30</span>
													</a>
													<span class="text-muted">Thank you for posting such a wonderful content. The writing was outstanding...</span>
												</div>
											</li>
											<li class="media">
												<div class="media-left"><img alt="" class="img-circle img-sm" src="{{ asset('static/panel/images/stella-johnson.png') }}"></div>
												<div class="media-body">
													<a class="media-heading" href="#">
														<span class="text-semibold">Stella Johnson</span>
														<span class="media-annotation pull-right">2 days ago</span>
													</a>
													<span class="text-muted">Thank you for trusting us to be your source for top quality sporting goods...</span>
												</div>
											</li>
											<li class="media">
												<div class="media-left"><img alt="" class="img-circle img-sm" src="{{ asset('static/panel/images/alex-dolgove.png') }}"></div>
												<div class="media-body">
													<a class="media-heading" href="#">
														<span class="text-semibold">Alex Dolgove</span>
														<span class="media-annotation pull-right">10:45</span>
													</a>
													<span class="text-muted">After our Friday meeting I was thinking about our business relationship and how fortunate...</span>
												</div>
											</li>
											<li class="media">
												<div class="media-left"><img alt="" class="img-circle img-sm" src="{{ asset('static/panel/images/domnic-brown.png') }}"></div>
												<div class="media-body">
													<a class="media-heading" href="#">
														<span class="text-semibold">Domnic Brown</span>
														<span class="media-annotation pull-right">4:00</span>
													</a>
													<span class="text-muted">I would like to take this opportunity to thank you for your cooperation in recently completing...</span>
												</div>
											</li>
										</ul>
									</li>
									<li class="external-last"> <a href="#">All Messages</a></li>
								</ul>
							</li>
							<!-- /messages -->

						</ul>
						<!-- /user alerts -->

					</div>
				</div>
			</div>
			<!-- /main header -->

			<!-- Main content -->
			<div class="main-content">
				<h1 class="page-title">@yield('page-title')</h1>

				<!-- Breadcrumb -->
				<ol class="breadcrumb breadcrumb-2">
					<li><a href="index.html"><i class="fa fa-home"></i>Home</a></li>
					<li><a href="login.html">Various Screens</a></li>
					<li class="active"><strong>Blank Page</strong></li>
				</ol>

				<!--div class="row">
					<div class="col-xs-12 col-lg-6">
					    <div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Latest comments</h3>
							</div>
							<div class="panel-body">
								<div class="dashboard__comments">
									<div class="dashboard-comments__item">
										<div class="dashboard-comments__avatar">
											<img src="{{ asset('static/panel/images/user_1.jpg') }}" alt="...">
										</div>
										<div class="dashboard-comments__body">
											<h5 class="dashboard-comments__sender">John Doe <small>2 hours ago</small></h5>
											<div class="dashboard-comments__content">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, corporis. Voluptatibus odio perspiciatis non quisquam provident, quasi eaque officia.
											</div>
											<div class="dashboard-comments__controls">
												<a href="#">View</a>
												<a href="#">Edit</a>
												<a href="#">Remove</a>
											</div>
										</div>
									</div>
									<div class="dashboard-comments__item">
										<div class="dashboard-comments__avatar">
											<img src="{{ asset('static/panel/images/user_2.jpg') }}" alt="...">
										</div>
										<div class="dashboard-comments__body">
											<h5 class="dashboard-comments__sender">Jane Roe <small>5 hours ago</small></h5>
											<div class="dashboard-comments__content">
						  			        	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero itaque dolor laboriosam dolores magnam mollitia, voluptatibus inventore accusamus illo.
											</div>
											<div class="dashboard-comments__controls">
												<a href="#">View</a>
												<a href="#">Edit</a>
												<a href="#">Remove</a>
											</div>
										</div>
									</div>
									<div class="dashboard-comments__item">
										<div class="dashboard-comments__avatar">
											<img src="{{ asset('static/panel/images/user_3.jpg') }}" alt="...">
										</div>
										<div class="dashboard-comments__body">
											<h5 class="dashboard-comments__sender">Richard Roe <small>1 day ago</small></h5>
											<div class="dashboard-comments__content">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, esse, magni aliquam quisquam modi delectus veritatis est ut culpa minus repellendus.
											</div>
											<div class="dashboard-comments__controls">
												<a href="#">View</a>
												<a href="#">Edit</a>
												<a href="#">Remove</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="panel-footer">
								<a href="#" class="btn btn-primary">View all comments</a> <a href="#" class="btn btn-link">Mark all as read</a>
							</div>
					    </div>
					</div>
				</div-->

				<div class="row">
					<div class="col-lg-12">
                        @yield('content')
					</div>
				</div>
			</div>
			<!-- /main content -->

			<!-- Footer -->
			<footer class="footer-main row">
				<div class="col-xs-12">
					Copyright &copy; {{ date('Y') }} <strong>EnigmaCMS</strong> by <a target="_blank" href="#/">Snopboy</a>
				</div>
			</footer>
			<!-- /footer -->

		</div>
		<!-- /main container -->

	</div>
	<!-- /page container -->

	<!--Load JQuery-->
	<script src="{{ asset('static/panel/js/jquery.min.js') }}"></script>
	<script src="{{ asset('static/panel/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('static/panel/js/jquery.metisMenu.js') }}"></script>
	<script src="{{ asset('static/panel/js/functions.js') }}"></script>
	<script src="{{ asset('static/panel/js/loader.js') }}"></script>
</body>
</html>
