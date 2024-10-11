<!doctype html>
<html lang="en" dir="ltr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="msapplication-TileColor" content="#0061da">
	<meta name="theme-color" content="#1643a3">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<link rel="icon" href="favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

	<!-- TITLE -->
	<title>Event : <?=@$title;?></title>

	<!-- DASHBOARD CSS -->
	<link href="<?= base_url(); ?>assets/css/dashboard.css" rel="stylesheet" />

	<!-- SIDE-MENU CSS -->
	<link href="<?= base_url(); ?>assets/plugins/toggle-menu/sidemenu.css" rel="stylesheet">

	<!--C3.JS CHARTS PLUGIN -->
	<link href="<?= base_url(); ?>assets/plugins/charts-c3/c3-chart.css" rel="stylesheet" />

	<!-- TABS CSS -->
	<link href="<?= base_url(); ?>assets/plugins/tabs/style-2.css" rel="stylesheet" type="text/css">

	<!-- CUSTOM SCROLL BAR CSS-->
	<link href="<?= base_url(); ?>assets/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet" />

	<!--- FONT-ICONS CSS -->
	<link href="<?= base_url(); ?>assets/css/icons.css" rel="stylesheet" />

	<!-- SIDEBAR CSS -->
	<link href="<?= base_url(); ?>assets/plugins/sidebar/sidebar.css" rel="stylesheet">
		<link href="<?= base_url(); ?>assets/plugins/select2/select2.min.css" rel="stylesheet"/>

</head>

<body class="app sidebar-mini">

	<!-- GLOBAL-LOADER -->
	<div id="global-loader">
		<img src="<?= base_url(); ?>assets/images/loader.svg" class="loader-img" alt="Loader">
	</div>

	<div class="page">
		<div class="page-main">
			<!-- HEADER -->
			<div class="app-header header">
				<div class="container-fluid">
					<div class="d-flex">
						<a class="header-brand" href="index.html">
							<img src="<?= base_url(); ?>assets/images/brand/logo.png"
								class="header-brand-img desktop-logo" alt="Amtos logo">
							<img src="<?= base_url(); ?>assets/images/brand/logo-1.png"
								class="header-brand-img mobile-view-logo" alt="Amtos logo">
						</a><!-- LOGO -->
						<a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar"
							href="#"></a><!-- sidebar-toggle-->
						<div class="d-flex order-lg-2 ml-auto header-right-icons header-search-icon">
							<a href="#" data-toggle="search" class="nav-link nav-link-lg d-md-none navsearch"><i
									class="ion ion-search"></i></a>
							<div class="">
								<form class="form-inline">
									<div class="search-element">
										<input type="search" class="form-control header-search" placeholder="Search…"
											aria-label="Search" tabindex="1">
										<button class="btn btn-primary-color" type="submit"><i
												class="ion ion-search"></i></button>
									</div>
								</form>
							</div><!-- SEARCH -->
							<div class="dropdown d-md-flex">
								<a class="nav-link icon full-screen-link nav-link-bg" id="fullscreen-button">
									<i class="fe fe-maximize-2"></i>
								</a>
							</div><!-- FULL-SCREEN -->
							<div class="dropdown d-md-flex notifications">
								<a class="nav-link icon" data-toggle="dropdown">
									<i class="fe fe-bell"></i>
									<span class="nav-unread bg-warning"></span>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
									<div class="dropdown-item p-4 bg-image-2 text-center text-white">
										<h4 class="mb-1">3 New </h4>
										<span class="text-white-transparent user-semi-title">Notifications</span>
									</div>
									<a href="#" class="dropdown-item mt-2 d-flex pb-3">
										<div class="notifyimg bg-success">
											<i class="fa fa-thumbs-o-up"></i>
										</div>
										<div>
											<strong>Someone likes our posts.</strong>
											<div class="small text-muted">3 hours ago</div>
										</div>
									</a>
									<a href="#" class="dropdown-item d-flex pb-3">
										<div class="notifyimg bg-warning">
											<i class="fa fa-commenting-o"></i>
										</div>
										<div>
											<strong> 3 New Comments</strong>
											<div class="small text-muted">5 hour ago</div>
										</div>
									</a>
									<a href="#" class="dropdown-item d-flex pb-3">
										<div class="notifyimg bg-danger">
											<i class="fa fa-cogs"></i>
										</div>
										<div>
											<strong> Server Rebooted.</strong>
											<div class="small text-muted">45 mintues ago</div>
										</div>
									</a>
									<div class="dropdown-divider"></div>
									<a href="#" class="dropdown-item text-center">View all Notification</a>
								</div>
							</div><!-- NOTIFICATIONS -->
							<div class="dropdown d-md-flex message">
								<a class="nav-link icon text-center" data-toggle="dropdown">
									<i class="fe fe-mail floating"></i>
									<span class=" nav-unread badge badge-success badge-pill">6</span>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
									<div class="dropdown-item p-4 bg-image-3 text-center text-white">
										<h4 class="mb-1">4 New </h4>
										<span class="text-white-transparent user-semi-title">Messages</span>
									</div>
									<a href="#" class="dropdown-item d-flex mt-2 pb-3">
										<div class="avatar avatar-md brround mr-3 d-block cover-image"
											data-image-src="<?= base_url(); ?>assets/images/faces/male/41.jpg">
											<span class="avatar-status bg-green"></span>
										</div>
										<div>
											<strong>Madeleine</strong>
											<p class="mb-0 fs-13 text-muted ">Hey! there I' am available</p>
											<div class="small text-muted">3 hours ago</div>
										</div>
									</a>
									<a href="#" class="dropdown-item d-flex pb-3">
										<div class="avatar avatar-md brround mr-3 d-block cover-image"
											data-image-src="<?= base_url(); ?>assets/images/faces/female/1.jpg">
											<span class="avatar-status bg-red"></span>
										</div>
										<div>
											<strong>Anthony</strong>
											<p class="mb-0 fs-13 text-muted ">New product Launching</p>
											<div class="small text-muted">5 hour ago</div>
										</div>
									</a>
									<a href="#" class="dropdown-item d-flex pb-3">
										<div class="avatar avatar-md brround mr-3 d-block cover-image"
											data-image-src="<?= base_url(); ?>assets/images/faces/female/18.jpg">
											<span class="avatar-status bg-yellow"></span>
										</div>
										<div>
											<strong>Olivia</strong>
											<p class="mb-0 fs-13 text-muted ">New Schedule Realease</p>
											<div class="small text-muted">45 mintues ago</div>
										</div>
									</a>
									<div class="dropdown-divider"></div>
									<a href="#" class="dropdown-item text-center">See all Messages</a>
								</div>
							</div><!-- MESSAGE-BOX -->
							<div class="dropdown text-center selector profile-1">
								<a href="#" data-toggle="dropdown" class="nav-link leading-none d-flex">
									<span><img src="<?= base_url(); ?>assets/images/faces/female/16.jpg"
											alt="profile-user"
											class="avatar avatar-sm brround cover-image mb-1 ml-0"></span>
									<span class=" ml-3 d-none d-lg-block ">
										<span class="text-white "><?= @$userRow->name; ?></span>
									</span>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
									<div class="text-center bg-image p-4 text-white">
										<a href="#"
											class="dropdown-item text-white text-center font-weight-sembold user"
											data-toggle="dropdown"><?= @$userrow->name; ?></a>
										<span class="text-center user-semi-title text-white">web designer</span>
									</div>
									<a class="dropdown-item" href="#">
										<i class="dropdown-icon mdi mdi-account-outline"></i> Profile
									</a>
									<a class="dropdown-item" href="#">
										<i class="dropdown-icon  mdi mdi-settings"></i> Settings
									</a>
									<a class="dropdown-item" href="#">
										<span class="float-right"><span class="badge badge-danger">6</span></span>
										<i class="dropdown-icon mdi  mdi-message-outline"></i> Inbox
									</a>
									<a class="dropdown-item" href="#">
										<i class="dropdown-icon mdi mdi-comment-check-outline"></i> Message
									</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#">
										<i class="dropdown-icon mdi mdi-compass-outline"></i> Need help?
									</a>
									<a class="dropdown-item" href="login.html">
										<i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
									</a>
								</div>
							</div><!-- PROFILE -->
							<div class="dropdown d-md-flex header-settings">
								<a href="#" class="nav-link icon " data-toggle="sidebar-right"
									data-target=".sidebar-right">
									<i class="fa fa-cog fa-spin"></i>
								</a>
							</div><!-- SIDE-MENU -->
						</div>
						<a href="#" class="header-toggler d-lg-none ml-lg-0" data-toggle="collapse"
							data-target="#headerMenuCollapse">
							<span class="header-toggler-icon"></span>
						</a>
					</div>
				</div>
			</div>
			<!-- HEADER END -->

			<!--aside open-->
			<aside class="app-sidebar">
				<div class="app-sidebar__user">
					<div class="dropdown user-pro-body text-center">
						<div class="user-pic">
							<img src="<?= base_url(); ?>assets/images/faces/female/16.jpg" alt="user-img"
								class="avatar-xl rounded-circle mb-1">
						</div>
						<div class="user-info">
							<h6 class=" mb-1 text-dark"><?= @$userRow->name; ?></h6>
							<span class="text-muted app-sidebar__user-name text-sm">
								Web-Designer<br><?= @$userRow->role; ?></span>
						</div>
					</div>
				</div>

				<ul class="side-menu">
					<li class="slide">
						<a class="side-menu__item" href="<?= base_url() . 'index.php/Admin' ?>"><i
								class="side-menu__icon fa fa-laptop"></i><span
								class="side-menu__label">Dashboard</span></a>

					</li>
				</ul>

				<ul class="side-menu">
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="#">
							<i class="side-menu__icon fa fa-laptop"></i>
							<span class="side-menu__label">Category</span>
						</a>
						<ul class="slide-menu">
							<li><a href="<?= base_url() . 'index.php/categorylist' ?>" class="slide-item">  List</a>
							</li>
							<li><a href="<?= base_url() . 'index.php/addcategory' ?>" class="slide-item"> Add </a>
							</li>
							<li><a href="<?= base_url() . 'index.php/addservice' ?>" class="slide-item">  Service</a>
							</li>
							<li><a href="<?= base_url() . 'index.php/servicelist' ?>" class="slide-item"> Service List</a>
							</li>
						</ul>
					</li>
				</ul>
				<ul class="side-menu">
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="#">
							<i class="side-menu__icon fa fa-laptop"></i>
							<span class="side-menu__label">Customer</span>
						</a>
						<ul class="slide-menu">
							<li><a href="<?= base_url() . 'index.php/client' ?>" class="slide-item">Add
									</a></li>
							<li><a href="<?= base_url() . 'index.php/clientlist' ?>" class="slide-item">List
									</a></li>
						</ul>
					</li>
				</ul>
				<ul class="side-menu">
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="#">
							<i class="side-menu__icon fa fa-laptop"></i>
							<span class="side-menu__label">Client</span>
						</a>
						<ul class="slide-menu">
							<li><a href="<?= base_url() . 'index.php/client' ?>" class="slide-item"> Add  </a></li>
							<li><a href="<?= base_url() . 'index.php/clientlist' ?>" class="slide-item"> List  </a>
							</li>
						</ul>
					</li>
				</ul>
				<ul class="side-menu">
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="#">
							<i class="side-menu__icon fa fa-laptop"></i>
							<span class="side-menu__label">Book</span>
						</a>
						<ul class="slide-menu">
							<li><a href="<?= base_url() . 'index.php/book' ?>" class="slide-item"> Book</a></li>
							<li><a href="<?= base_url() . 'index.php/bokinglist' ?>" class="slide-item">  List</a></li>

						</ul>
					</li>
				</ul>


				<ul class="side-menu">
					<li class="slide">
						<a class="side-menu__item" href="<?= base_url() . 'index.php/logout' ?>"><i
								class="side-menu__icon fa fa-laptop"></i><span
								class="side-menu__label">Logout</span></a>

					</li>
				</ul>

			</aside>
			<!--aside closed-->
			<!--app-content open-->
			<div class="app-content">
				<div class="side-app">

					<!-- PAGE-HEADER -->
					<div class="page-header">
						<h4 class="page-title">
							<?= @$title; ?>
						</h4>
						
					</div>
					<!-- PAGE-HEADER END -->