<!DOCTYPE html>
<html lang="en">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="msapplication-tap-highlight" content="no">
		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url('assets/favicon/apple-icon-57x57.png')?>">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url('assets/favicon/apple-icon-60x60.png')?>">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url('assets/favicon/apple-icon-72x72.png')?>">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/favicon/apple-icon-76x76.png')?>">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url('assets/favicon/apple-icon-114x114.png')?>">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url('assets/favicon/apple-icon-120x120.png')?>">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url('assets/favicon/apple-icon-144x144.png')?>">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url('assets/favicon/apple-icon-152x152.png')?>">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('assets/favicon/apple-icon-180x180.png')?>">
		<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo base_url('assets/favicon/android-icon-192x192.png')?>">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url('assets/favicon/favicon-32x32.png')?>">
		<link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url('assets/favicon/favicon-96x96.png')?>">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/favicon/favicon-16x16.png')?>">
		<link rel="manifest" href="<?php echo base_url('assets/favicon/favicon-32x32.png')?>/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="<?php echo base_url('assets/favicon/ms-icon-144x144.png')?>">
		<meta name="theme-color" content="#ffffff">
		<link href="<?php echo base_url('assets/jquery-ui/jquery-ui.css')?>" rel="stylesheet" type="text/css" />

		<link rel="icon" href="<?php echo base_url('assets/images/favicon-32x32.png')?>" sizes="32x32">
		<link rel="apple-touch-icon-precomposed" href="<?php echo base_url('assets/images/favicon/apple-touch-icon-152x152.png')?>">
		<meta name="msapplication-TileColor" content="#00bcd4">
		<meta name="msapplication-TileImage" content="<?php echo base_url('assets/images/favicon/mstile-144x144.png')?>">
		

		<link href="<?php echo base_url('assets/materialize/css/materialize.css')?>" type="text/css" rel="stylesheet" media="screen,projection">
		<link href="<?php echo base_url('assets/materialize/css/style.css')?>" type="text/css" rel="stylesheet" media="screen,projection">
		<link href="<?php echo base_url('assets/materialize/css/custom-style.css')?>" type="text/css" rel="stylesheet" media="screen,projection">
        <link href="<?php echo base_url('assets/materialize/js/plugins/perfect-scrollbar/perfect-scrollbar.css')?>" type="text/css" rel="stylesheet" media="screen,projection">
        <link href="<?php echo base_url('assets/materialize/js/plugins/jvectormap/jquery-jvectormap.css')?>" type="text/css?>" rel="stylesheet" media="screen,projection">
        <link href="<?php echo base_url('assets/materialize/js/plugins/chartist-js/chartist.min.css')?>" type="text/css" rel="stylesheet" media="screen,projection">
        <link href="<?php echo base_url('assets/materialize/js/plugins/chartist-js/chartist.min.css')?>" type="text/css" rel="stylesheet" media="screen,projection">
        <link href="<?php echo base_url('assets/materialize/js/plugins/fullcalendar/css/fullcalendar.min.css')?>" type="text/css" rel="stylesheet" media="screen,projection">
        <link href="<?php echo base_url('assets/materialize/js/plugins/data-tables/css/jquery.dataTables.min.css')?>" type="text/css" rel="stylesheet" media="screen,projection">
        
        <script type="text/javascript" src="<?php echo base_url('assets/materialize/js/jquery-1.11.2.min.js')?>"></script>  
        <script type="text/javascript" src="<?php echo base_url('assets/materialize/js/materialize.js')?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/materialize/js/plugins/data-tables/js/jquery.dataTables.min.js')?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/materialize/js/plugins/data-tables/data-tables-script.js')?>"></script>
    	<style>
	    	@media screen and (max-width: 477px) {
	  			html {
	    /* reducing base font size will reduce all rem sizes */
	    			font-size: 11px;
	  			}
	  		@media screen and (max-width: 350px) {
		  		html {
		    /* reducing base font size will reduce all rem sizes */
		    		font-size: 8px;
	  		}
    	</style>
    </head>

	<body>
		<ul id="option" class="dropdown-content ">
			<li class="blue-text"><a href="<?php echo base_url('student/profile')?>"> Profile</a>
			</li>
			<li><a href="<?php echo base_url('student/settings')?>">Settings</a>
			</li>
			<li><a href="<?php echo base_url('student/cod_help')?>"> Help</a>
			</li>
			<?php if($this->ion_auth->in_group('admin')||$this->ion_auth->in_group('cod')){ ?>
				<li><a href="<?php echo base_url('/student')?>">Stud</a>
				</li>
				<li><a href="<?php echo base_url('/cod')?>">COD</a>
				</li>
				<?php if($this->ion_auth->in_group('admin')){ ?>
					<li><a href="<?php echo base_url('/admin')?>"> Admin</a>
					</li>
				<?php } ?>
			<?php } ?>
			<li class="divider">
			</li>
			<li><a href="<?php echo base_url('auth/logout')?>"> Logout</a>
			</li>
		</ul>
		<header id="header" class="page-topbar">
			<div class="navbar-fixed">
				<nav class="cyan">
					<div class="nav-wrapper">
						<ul class="left">
						  <li><h1 class="logo-wrapper"><a href="<?php echo base_url('/cod');?>" class="brand-logo darken-1">TAPS</a></h1></li>
						</ul>
						<div class="header-search-wrapper hide-on-med-and-down">
							<i class="mdi-action-search"></i>
							<input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore TAPS"/>
						</div>
						<ul class="right hide-on-med-and-down">
							<li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
							</li>
							<li><a class="dropdown-button waves-effect waves-block waves-light" href="#!" data-activates="option"><i class="mdi-action-settings"></i></a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>
		<div id="main">
			<div class="wrapper">
				<aside id="left-sidebar-nav">
					<ul id="slide-out" class="side-nav fixed leftside-navigation">
						<li class="user-details cyan darken-2">
							<div class="row">
								<div class="col col s4 m4 l4">
									<a href="<?php echo base_url('student/upload/upload_photo')?>" style="display:inline;"> 
										<img src="<?php if (file_exists('./assets/stud_profile_pic/'.$user['encrypt'].$user['userid'].'.jpg')){echo base_url('./assets/stud_profile_pic/'.$user['encrypt'].$user['userid'].'.jpg');} else {echo base_url('assets/materialize/images/avatar.jpg');}?>" alt="" class="circle responsive-img valign profile-image">
									</a>
								</div>
								<div class="col col s8 m8 l8">
									<ul id="profile-dropdown" class="dropdown-content">
										<li><a href="<?php echo base_url('student/profile')?>"><i class="mdi-action-face-unlock"></i> Profile</a>
										</li>
										<li><a href="<?php echo base_url('student/settings')?>"><i class="mdi-action-settings"></i> Settings</a>
										</li>
										<li><a href="<?php echo base_url('/cod/cod_help')?>"><i class="mdi-communication-live-help"></i> Help</a>
										</li>
										<?php if($this->ion_auth->in_group('admin')||$this->ion_auth->in_group('cod')){ ?>
										<li><a href="<?php echo base_url('/student')?>"><i class="mdi-social-school"></i>Stud</a>
										</li>
										<li><a href="<?php echo base_url('/cod')?>"><i class="mdi-social-people"></i>COD</a>
										</li>
										<?php if($this->ion_auth->in_group('admin')){ ?>
										<li><a href="<?php echo base_url('/admin')?>"><i class="mdi-hardware-security"></i> Admin</a>
										</li>
										<?php } ?>
										<?php } ?>

										<li class="divider">
										</li>
										<li><a href="<?php echo base_url('auth/logout')?>"><i class="mdi-hardware-keyboard-tab"></i>Logout</a>
										</li>
										<li class="divider">
										</li>
									</ul>
									<a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="layout01.html#" data-activates="profile-dropdown"><?php echo $user['first_name'] ?><i class="mdi-navigation-arrow-drop-down right"></i></a>
									<p class="user-roal">COD</p>
								</div>
							</div>
						</li>
						<li class="bold active">
							<a href="<?php echo base_url('/cod')?>" class="waves-effect waves-cyan">
								<i class="mdi-action-home"></i>Home
							</a>
						</li>
						<li class="bold">
							<a href="<?php echo base_url('/cod/show_calender')?>" class="waves-effect waves-cyan">
								<i class="mdi-editor-insert-invitation"></i>Calender
							</a>
						</li>
						<li class="no-padding">
							<ul class="collapsible collapsible-accordion">
								<li class="bold">
									<a class="collapsible-header waves-effect waves-cyan"><i class="mdi-communication-business"></i>Companies
									</a>
									<div class="collapsible-body">
										<ul>
											<li><a href="<?php echo base_url('/cod/all_companies')?>">All Companies</a>
											</li>                                        
											<li><a href="<?php echo base_url('/cod/add_company')?>">Add Company</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="bold">
									<a class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-work"></i>Company Visits</a>
									<div class="collapsible-body">
										<ul>
											<li><a href="<?php echo base_url('/cod/all_visits')?>">All Company Visits</a>
											</li>
											<li><a href="<?php echo base_url('/cod/add_visit')?>">Add Company Visit</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="bold">
									<a class="collapsible-header waves-effect waves-cyan"><i class="mdi-hardware-cast"></i>News Feed</a>
									<div class="collapsible-body">
										<ul>
											<li><a href="<?php echo base_url('/cod/show_news_feed_form')?>">Add News </a>
									</li>                                        
								   
									<li><a href="<?php echo base_url('/cod/show_all_news')?>">Show All News</a>
									</li>
										</ul>
									</div>
								</li>
								<li class="bold">
									<a class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-autorenew"></i>Rounds</a>
									<div class="collapsible-body">
										<ul>
											<li><a href="<?php echo base_url('/cod/round')?>" class="waves-effect waves-cyan">Round Details</a>
											</li>
											<li><a href="<?php echo base_url('/cod/show_modify_round_visits')?>">Modify Round Details</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</li>
						<li class="bold">
							<a href="<?php echo base_url('/cod/get_branch_student_list')?>" class="waves-effect waves-cyan">
								<i class="mdi-editor-format-list-numbered"></i>Branch List
							</a>
						</li>

						<li class="bold"><a href="<?php echo base_url('/cod/profilelock') ?>" class="waves-effect waves-cyan"><i class="mdi-action-lock-open"></i> User Profile-Lock</a>
						</li>
						<li class="bold">
							<a href="<?php echo base_url('/cod/report')?>" class="waves-effect waves-cyan">
								<i class="mdi-action-assessment"></i>Report Generation
							</a>
						</li>
						
						<li class="bold">
							<a href="<?php echo base_url('/cod/sms')?>" class="waves-effect waves-cyan">
								<i class="mdi-content-markunread"></i>SMS
							</a>
						</li>
					</ul>
					<a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
				</aside>
				<section>
					<div class="container">