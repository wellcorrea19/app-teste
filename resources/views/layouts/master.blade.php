<!DOCTYPE HTML>
<html>
<head>
  <title>Elo Softwares</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

  <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
  <link href="css/style.css" rel='stylesheet' type='text/css' />
  <link href="css/font-awesome.css" rel="stylesheet"> 
  <link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
  <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
  <link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
  
  <script src="js/jquery-1.10.2.min.js"></script>
  <script src="js/Chart.js"></script>

</head> 
   
 <body class="sticky-header left-side-collapsed">
    <section>
    <!-- left side start-->
		<div class="left-side sticky-left-side">

			<!--logo and iconic logo start-->
			<div class="logo">
				<img src="/imgs/logo-elo.jpg" style="height: 80px; width: 80px; position: absolute; bottom: 0; left: calc(55% - 50px);">
			</div>
			<div class="logo-icon text-center">
				<a href="index.html"><i class="lnr lnr-home"></i> </a>
			</div>

			<!--logo and iconic logo end-->
			<div class="left-side-inner">

			<!--sidebar nav start-->
				<ul class="nav nav-pills nav-stacked custom-nav">
					<li class="active"><a href="index.html"><i class="lnr lnr-power-switch"></i><span>Dashboard</span></a></li>
					<li class="menu-list">
						<a href="#"><i class="lnr lnr-cog"></i>
						<span>Cadastros</span></a>
						<ul class="sub-menu-list">
							<li><a href="grids.html">Cidade</a> </li>
							<li><a href="widgets.html">Rastreador</a></li>
							<li><a href="widgets.html">Tipo Tração</a></li>
							<li><a href="widgets.html">Tipo Reboque</a></li>
							<li><a href="widgets.html">Modelo Tração</a></li>
							<li><a href="widgets.html">Modelo Reboque</a></li>
							<li><a href="widgets.html">Marca Tração</a></li>
							<li><a href="widgets.html">Marca Reboque</a></li>
							<li><a href="widgets.html">Tração</a></li>
							<li><a href="widgets.html">Reboque</a></li>
							<li><a href="widgets.html">Setor</a></li>
						</ul>
					</li>             
					<li class="menu-list"><a href="#"><i class="lnr lnr-envelope"></i>
						<span>Cadastro de Pessoas</span></a>
					</li>      
					<li class="menu-list"><a href="#"><i class="lnr lnr-indent-increase"></i> <span>Menu Levels</span></a>  
						<ul class="sub-menu-list">
							<li><a href="charts.html">Basic Charts</a> </li>
						</ul>
					</li>
					<li class="menu-list"><a href="#"><i class="lnr lnr-book"></i>  <span>Pages</span></a> 
						<ul class="sub-menu-list">
							<li><a href="sign-in.html">Sign In</a> </li>
							<li><a href="sign-up.html">Sign Up</a></li>
							<li><a href="blank_page.html">Blank Page</a></li>
						</ul>
					</li>
				</ul>
			<!--sidebar nav end-->
			</div>
		</div>
		<!-- left side end-->
    
		<!-- main content start-->
		<div class="main-content">
			<!-- header-starts -->
			<div class="header-section">
			 
			<!--toggle button start-->
			<a class="toggle-btn  menu-collapsed"><img src="imgs/barras-elo.png" style="height: 20px;"></a>
			<!--toggle button end-->

			<!--notification menu start -->
			<div class="menu-right">
				<div class="user-panel-top">  	
					<div class="profile_details_left">
						<ul class="nofitications-dropdown">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">3</span></a>						
								<ul class="dropdown-menu">
									<li>
										<div class="notification_header">
											<h3>You have 3 new messages</h3>
										</div>
									</li>
									<li><a href="#">
										<div class="user_img"><img src="images/1.png" alt=""></div>
										<div class="notification_desc">
										<p>Lorem ipsum dolor sit amet</p>
										<p><span>1 hour ago</span></p>
										</div>
										<div class="clearfix"></div>	
										</a></li>
										<li class="odd"><a href="#">
										<div class="user_img"><img src="images/1.png" alt=""></div>
										<div class="notification_desc">
										<p>Lorem ipsum dolor sit amet </p>
										<p><span>1 hour ago</span></p>
										</div>
										<div class="clearfix"></div>	
										</a></li>
									<li><a href="#">
										<div class="user_img"><img src="images/1.png" alt=""></div>
										<div class="notification_desc">
										<p>Lorem ipsum dolor sit amet </p>
										<p><span>1 hour ago</span></p>
										</div>
										<div class="clearfix"></div>	
									</a></li>
									<li>
										<div class="notification_bottom">
											<a href="#">See all messages</a>
										</div> 
									</li>
								</ul>
							</li>
							<li class="login_box" id="loginContainer">
								<div class="search-box">
									<div id="sb-search" class="sb-search">
										<form>
											<input class="sb-search-input" placeholder="Enter your search term..." type="search" id="search">
											<input class="sb-search-submit" type="submit" value="">
											<span class="sb-icon-search"> </span>
										</form>
									</div>
								</div>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
									<ul class="dropdown-menu">
										<li>
											<div class="notification_header">
												<h3>You have 3 new notification</h3>
											</div>
										</li>
										<li><a href="#">
											<div class="user_img"><img src="images/1.png" alt=""></div>
										   <div class="notification_desc">
											<p>Lorem ipsum dolor sit amet</p>
											<p><span>1 hour ago</span></p>
											</div>
										  <div class="clearfix"></div>	
										 </a></li>
										 <li class="odd"><a href="#">
											<div class="user_img"><img src="images/1.png" alt=""></div>
										   <div class="notification_desc">
											<p>Lorem ipsum dolor sit amet </p>
											<p><span>1 hour ago</span></p>
											</div>
										   <div class="clearfix"></div>	
										 </a></li>
										 <li><a href="#">
											<div class="user_img"><img src="images/1.png" alt=""></div>
										   <div class="notification_desc">
											<p>Lorem ipsum dolor sit amet </p>
											<p><span>1 hour ago</span></p>
											</div>
										   <div class="clearfix"></div>	
										 </a></li>
										 <li>
											<div class="notification_bottom">
												<a href="#">See all notification</a>
											</div> 
										</li>
									</ul>
							</li>	
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">22</span></a>
								<ul class="dropdown-menu">
									<li>
										<div class="notification_header">
											<h3>You have 8 pending task</h3>
										</div>
									</li>
									<li><a href="#">
											<div class="task-info">
											<span class="task-desc">Database update</span><span class="percentage">40%</span>
											<div class="clearfix"></div>	
											</div>
											<div class="progress progress-striped active">
												<div class="bar yellow" style="width:40%;"></div>
										</div>
									</a></li>
									<li><a href="#">
										<div class="task-info">
											<span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
											<div class="clearfix"></div>	
										</div>
										
										<div class="progress progress-striped active">
												<div class="bar green" style="width:90%;"></div>
										</div>
									</a></li>
									<li><a href="#">
										<div class="task-info">
											<span class="task-desc">Mobile App</span><span class="percentage">33%</span>
											<div class="clearfix"></div>	
										</div>
										<div class="progress progress-striped active">
												<div class="bar red" style="width: 33%;"></div>
										</div>
									</a></li>
									<li><a href="#">
										<div class="task-info">
											<span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
											<div class="clearfix"></div>	
										</div>
										<div class="progress progress-striped active">
												<div class="bar  blue" style="width: 80%;"></div>
										</div>
									</a></li>
									<li>
										<div class="notification_bottom">
											<a href="#">See all pending task</a>
										</div> 
									</li>
								</ul>
							</li>		   							   		
							<div class="clearfix"></div>	
						</ul>
					</div>
					<div class="profile_details">		
						<ul>
							<li class="dropdown profile_details_drop">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<div class="profile_img">	
										<span style="background:url(images/1.jpg) no-repeat center"> </span> 
										 <div class="user-name">
											<p>Michael<span>Administrator</span></p>
										 </div>
										 <i class="lnr lnr-chevron-down"></i>
										 <i class="lnr lnr-chevron-up"></i>
										<div class="clearfix"></div>	
									</div>	
								</a>
								<ul class="dropdown-menu drp-mnu">
									<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
									<li> <a href="#"><i class="fa fa-user"></i>Profile</a> </li> 
									<li> <a href="#"><i class="fa fa-sign-out"></i> Logout</a> </li>
								</ul>
							</li>
							<div class="clearfix"> </div>
						</ul>
					</div>		
				</div>
			  </div>
			<!--notification menu end -->
			</div>
		<!-- //header-ends -->

            <!--footer section start-->
			<footer>
			   <p>&copy 2020 Elo Softwares. Todos os Direitos Reservados | Desenvolvido por Wellington R. Corrêa
			</footer>
        <!--footer section end-->

      <!-- main content end-->
   </section>
  
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>