<?php 
// 	session_start();
// if (!isset($_SESSION["id_utilisateur"])) {
// 	header("Location:index.php");    
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Accueil</title>
		
        <!-- Common Plugins -->
        <link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		
		<!-- Vector Map Css-->
        <link href="assets/lib/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
		
		<!-- Chart C3 -->
		<link href="assets/lib/chart-c3/c3.min.css" rel="stylesheet">
		<link href="assets/lib/chartjs/chartjs-sass-default.css" rel="stylesheet">

        <!-- DataTables -->
        <link href="assets/lib/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
        <link href="assets/lib/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/lib/toast/jquery.toast.min.css" rel="stylesheet">
		
        <!-- Custom Css-->
        <link href="assets/scss/style.css" rel="stylesheet">
        
    </head>
    <body>

			<!-- ============================================================== -->
			<!-- 						Topbar Start 							-->
			<!-- ============================================================== -->
			<div class="top-bar light-top-bar">
			<div class="container-fluid">
				<div class="row">
					<div class="col">
						<a class="admin-logo dark-logo" href="accueil.php">
							<h1>UIT Poitiers</h1>
						</a>				
						<div class="left-nav-toggle" >
							<a  href="#" class="nav-collapse"><i class="fa fa-bars"></i></a>
						</div>
						<div class="left-nav-collapsed" >
							<a  href="#" class="nav-collapsed"><i class="fa fa-bars"></i></a>
						</div>
						<div class="search-form hidden-xs">
							<form>
								<input class="form-control" placeholder="Search for..." type="text"> <button class="btn-search" type="button"><i class="fa fa-search"></i></button>
							</form>
						</div>
						<ul class="list-inline top-right-nav">
							<li class="dropdown icons-dropdown d-none-m">
								<a class="dropdown-toggle " data-toggle="dropdown" href="#"><i class="fa fa-envelope"></i> <div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div></a>
								
								<ul class="dropdown-menu top-dropdown lg-dropdown notification-dropdown">
									<li>
										<div class="dropdown-header">
											<a class="float-right" href="#"><small>View All</small></a> Messages
										</div>
										
										<div class="scrollDiv">
											<div class="notification-list">
												<a class="clearfix" href="javascript:%20void(0);">
													<span class="notification-icon">
														<img alt="" class="rounded-circle" src="assets/img/avtar-2.png" width="50">
													</span> 
													<span class="notification-title">
													Admin
													<label class="label label-warning float-right">Support</label>
													</span> 
													<span class="notification-description">Lorem Ipsum is simply dummy text of the printing.</span> 
													<span class="notification-time">15 minutes ago</span>
												</a>
												
												<a class="clearfix" href="javascript:%20void(0);">
													<span class="notification-icon">
													<img alt="" class="rounded-circle" src="assets/img/avtar-3.png" width="50">
													</span> 
													<span class="notification-title">
													Govindo Doe 
													<label class="label label-warning float-right">Support</label>
													</span> 
													<span class="notification-description">Lorem Ipsum is simply dummy text of the printing.</span> 
													<span class="notification-time">15 minutes ago</span>
												</a> 
												
												<a class="clearfix" href="javascript:%20void(0);">
													<span class="notification-icon">
													<img alt="" class="rounded-circle" src="assets/img/avtar-4.png" width="50">
													</span> 
													<span class="notification-title">
													Megan Doe 
													<label class="label label-warning float-right">Support</label>
													</span>
													<span class="notification-description">Lorem Ipsum is simply dummy text of the printing.</span>
													<span class="notification-time">15 minutes ago</span>
												</a> 
												
												<a class="clearfix" href="javascript:%20void(0);">
													<span class="notification-icon">
													<img alt="" class="rounded-circle" src="assets/img/avtar-5.png" width="50">
													</span>
													<span class="notification-title">
													Hritik Doe 
													<label class="label label-warning float-right">Support</label>
													</span>
													<span class="notification-description">Lorem Ipsum is simply dummy text of the printing.</span>
													<span class="notification-time">15 minutes ago</span>
												</a>
												
											</div>
										</div>
									</li>
								</ul>
							</li>
							<li class="dropdown icons-dropdown d-none-m">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-bell"></i> <div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div></a>
								<ul class="dropdown-menu top-dropdown lg-dropdown notification-dropdown">
									<li>
										<div class="dropdown-header">
											<a class="float-right" href="#"><small>View All</small></a> Notifications
										</div>
										<div class="scrollDiv">
											<div class="notification-list">
											
												<a class="clearfix" href="javascript:%20void(0);">
													<span class="notification-icon">
														<i class="icon-cloud-upload text-primary"></i>
													</span>
													<span class="notification-title">Upload Complete</span> 
													<span class="notification-description">Lorem Ipsum is simply dummy text of the printing.</span>
													<span class="notification-time">15 minutes ago</span>
												</a> 
												
												<a class="clearfix" href="javascript:%20void(0);">
													<span class="notification-icon">
														<i class="icon-info text-warning"></i>
													</span>
													<span class="notification-title">Storage Space low</span>
													<span class="notification-description">Lorem Ipsum is simply dummy text of the printing.</span>
													<span class="notification-time">15 minutes ago</span>
												</a>
												
												<a class="clearfix" href="javascript:%20void(0);">
													<span class="notification-icon">
														<i class="icon-check text-success"></i>
													</span>
													<span class="notification-title">Project Task Complete</span>
													<span class="notification-description">Lorem Ipsum is simply dummy text of the printing.</span>
													<span class="notification-time">15 minutes ago</span>
												</a>
												
												<a class="clearfix" href="javascript:%20void(0);">
													<span class="notification-icon">
														<i class=" icon-graph text-danger"></i>
													</span>
													<span class="notification-title">CPU Usage</span>
													<span class="notification-description">Lorem Ipsum is simply dummy text of the printing.</span>
													<span class="notification-time">15 minutes ago</span>
												</a>
												
											</div>
										</div>
									</li>
								</ul>
							</li>
							
							<li class="dropdown avtar-dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#">
									<img alt="" class="rounded-circle" src="assets/img/avtar-2.png" width="30">
									Admin
								</a>
								<ul class="dropdown-menu top-dropdown">
									<li>
										<a class="dropdown-item" href="javascript:%20void(0);"><i class="icon-bell"></i> Activities</a>
									</li>
									<li>
										<a class="dropdown-item" href="profile.php"><i class="icon-user"></i> Profile</a>
									</li>
									<li>
										<a class="dropdown-item" href="javascript:%20void(0);"><i class="icon-settings"></i> Settings</a>
									</li>
									<li class="dropdown-divider"></li>
									<li>
										<a class="dropdown-item" href="javascript:%20void(0);"><i class="icon-logout"></i> Logout</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		
		<!-- ============================================================== -->
		<!--                        Topbar End                              -->
		<!-- ============================================================== -->
		
		
		
		

        <!-- ============================================================== -->
		<!-- 						Navigation Start 						-->
		<!-- ============================================================== -->
        <div class="main-sidebar-nav dark-navigation">
            <div class="nano">
                <div class="nano-content sidebar-nav">
				
					<div class="card-body border-bottom text-center nav-profile">
						<div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div>
                        <img alt="profile" class="margin-b-10  " src="assets/img/avtar-2.png" width="80">
                        <p class="lead margin-b-0 toggle-none">Mr Admin</p>
                        <p class="text-muted mv-0 toggle-none">Welcome</p>						
                    </div>
					
                    <ul class="metisMenu nav flex-column" id="menu">
                        <!--<li class="nav-heading"><span>MAIN</span></li>-->	
						<li class="nav-item active">
							<a class="nav-link" href="accueil.php">
								<i class="fa fa-home"></i> 
								<span class="toggle-none">Accueil </span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link"  href="batiment.php" aria-expanded="true">
							<i class="fa fa-th-large"></i> 
							<span class="toggle-none">Bâtiments</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link"  href="etage.php" aria-expanded="true">
							<i class="fa fa-th-large"></i> 
							<span class="toggle-none">Etages</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link"  href="salles.php" aria-expanded="true">
							<i class="fa fa-th-large"></i> 
							<span class="toggle-none">Salles</span>
							</a>
						</li>
						<li class="nav-item">
                            <a class="nav-link"  href="capteur.php" aria-expanded="false">
                            <i class="fa fa-codepen"></i> 
                            <span class="toggle-none">Capteurs</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"  href="climatiseur.php" aria-expanded="false">
                            <i class="fa fa-codepen"></i> 
                            <span class="toggle-none">Climatiseurs</span>
                            </a>
                        </li>

						<li class="nav-item">
                            <a class="nav-link" href="alert.php" aria-expanded="false">
                            	<i class="fa fa-envelope-open"></i> 
                            	<span class="toggle-none">Alertes</span>
                            </a> 
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
		<!-- 						Navigation End	 						-->
		<!-- ============================================================== -->

			
		<!-- ============================================================== -->
		<!-- 						Content Start	 						-->
		<!-- ============================================================== -->
		<div class="row page-header no-background no-shadow margin-b-0">
				<div class="col-lg-6 align-self-center ">
				  <h2>Dashboard</h2>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Dashboard</li>
					</ol>
				</div>
				<div class="col-lg-6 align-self-center text-right">
					<a href="#" class="btn btn-success box-shadow btn-icon btn-rounded"><i class="fa fa-plus"></i> Create New</a>
				</div>
		</div>
		
        <section class="main-content">
            <div class="row w-no-padding margin-b-30">
			
				<div class="col-md-3">
                    <div class="widget  bg-light">
                        <div class="row row-table ">
                            <div class="margin-b-30">
								<h2 class="margin-b-5">Nombre des salles <br>en service</h2>
								<p class="text-muted">Total </p>
								<span class="float-right text-primary widget-r-m">550</span>
							</div>
                        </div>
                    </div>
                </div>
				
                <div class="col-md-3">
                    <div class="widget  bg-light">
                        <div class="row row-table ">
                            <div class="margin-b-30">
								<h2 class="margin-b-5">Nombre des salles hort service</h2>
								<p class="text-muted">Total </p>
								<span class="float-right text-indigo widget-r-m">220</span>
							</div>
                        </div>
                    </div>
                </div>
				
				<div class="col-md-3">
                    <div class="widget  bg-light">
                        <div class="row row-table ">
                            <div class="margin-b-30">
								<h2 class="margin-b-5">nombres des alert aujourd'hui </h2>
								<p class="text-muted">Total </p>
								<span class="float-right text-success widget-r-m">13</span>
							</div>
                        </div>
                    </div>
                </div>
				
				<div class="col-md-3">
                    <div class="widget  bg-light">
                        <div class="row row-table ">
                            <div class="margin-b-30">
								<h2 class="margin-b-5">nombres des capteur enpane Aaujourd'hui</h2>
								<p class="text-muted">Total Visitors</p>
								<span class="float-right text-warning widget-r-m">9</span>
							</div>
                        </div>
                    </div>
                </div>
            </div>
			
			<div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header card-default">
                            Lorem Ipsum is simply dummy text of the printing
                        </div>
                        <div class="card-body text-center">
							<div class="row">
								<div class="col-md-3">
									<h3><small>Default</small></h3>
									<div id="easypie1" data-percent="85" class="easypie-chart">
										<span>85</span>
									</div>
								</div>
								
								<div class="col-md-3">
									<h3><small>Slim</small></h3>
									 <div id="easypie2" data-percent="45" class="easypie-chart">
										<span>45</span>
									 </div>
								</div>
								
								<div class="col-md-3">
									<h3><small>Track color</small></h3>
									 <div id="easypie3" data-percent="75" class="easypie-chart">
										<span>75</span>
									 </div>
								</div>
								
								<div class="col-md-3">
									<h3><small>Scale color</small></h3>
									<div id="easypie4" data-percent="60" class="easypie-chart">
										<span>60</span>
									</div>
								</div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
            <div class="row">
                <div class="col-md-8"></div>
				<div class="col-md-4"></div>
			</div>
			
			<div class="row">
                  <div class="col-md-12">
					<div class="card">
					  <div class="card-header">
						Recent Comments
						<p class="text-muted">Latest Comments on users</p>
					  </div>
						<div class="comment-widgets">
						  <div class="d-flex flex-row comment-row">
							<div class="mr-2"><img alt="user" class="rounded-circle" src="assets/img/avtar-1.png" width="50"></div>
							<div class="comment-text w-100">
							  <h5>John Doe</h5>
							  <p class="m-b-5">Lorem Ipsum is simply dummy text of the printing and type setting industry.</p>
							  <div class="comment-footer">
								<span class="text-muted pull-right">April 8, 2018</span> 
								<span class="label label-info">Pending</span> 
								<span class="action-icons">
									<a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a> 
									<a href="javascript:void(0)"><i class="ti-check"></i></a>
									<a href="javascript:void(0)"><i class="ti-heart"></i></a>
								</span>
							  </div>
							</div>
						  </div>
						  <div class="d-flex flex-row comment-row active">
							<div class="mr-2">
							  <span class="round"><img alt="user" src="assets/img/avtar-2.png" width="50"></span>
							</div>
							<div class="comment-text active w-100">
							  <h5>John Doe</h5>
							  <p class="m-b-5">Lorem Ipsum is simply dummy text of the printing and type setting industry.</p>
							  <div class="comment-footer">
								<span class="text-muted pull-right">April 7, 2018</span> 
								<span class="label label-success">Approved</span> 
								<span class="action-icons">
									<a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a> 
									<a href="javascript:void(0)"><i class="ti-check"></i></a>
									<a href="javascript:void(0)"><i class="ti-heart"></i></a>
								</span>
							  </div>
							</div>
						  </div><!-- Comment Row -->
						  <div class="d-flex flex-row comment-row">
							<div class="mr-2">
							  <span class="round"><img alt="user" src="assets/img/avtar-3.png" width="50"></span>
							</div>
							<div class="comment-text w-100">
							  <h5>John Doe</h5>
							  <p class="m-b-5">Lorem Ipsum has beenorem Ipsum is simply dummy text of the printing and type setting industry.</p>
							  <div class="comment-footer">
								<span class="text-muted pull-right">April 6, 2018</span> <span class="label label-danger">Rejected</span> <span class="action-icons"><a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a> <a href="javascript:void(0)"><i class="ti-check"></i></a> <a href="javascript:void(0)"><i class="ti-heart"></i></a></span>
							  </div>
							</div>
						  </div><!-- Comment Row -->
						</div>
			
					</div>
				</div>
				
				<div class="col-md-6">
                   
                </div>

            </div>
           
			<div class="row">
				<div class="col-lg-8 col-xlg-9"></div>
				<div class="col-md-4"></div>	
			</div>	
            <footer class="footer">
                <span>Copyright &copy; 2018 EST Salé</span>
            </footer>

        </section>

        <!-- ============================================================== -->
		<!-- 						Content End		 						-->
		<!-- ============================================================== -->

		
        <!-- Common Plugins -->
        <script src="assets/lib/jquery/dist/jquery.min.js"></script>
		<script src="assets/lib/bootstrap/js/popper.min.js"></script>
        <script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/lib/pace/pace.min.js"></script>
        <script src="assets/lib/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
        <script src="assets/lib/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/lib/nano-scroll/jquery.nanoscroller.min.js"></script>
        <script src="assets/lib/metisMenu/metisMenu.min.js"></script>
        <script src="assets/js/custom.js"></script>
        <script src="assets/js/chartJs.custom.js"></script>
			
        <!--Chart Script-->
        <script src="assets/lib/chartjs/chart.min.js"></script>
		<script src="assets/lib/chartjs/chartjs-sass.js"></script>

		<!--Vetor Map Script-->
		<script src="assets/lib/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="assets/lib/vectormap/jquery-jvectormap-us-aea-en.js"></script>
		
		<!-- Chart C3 -->
        <script src="assets/lib/chart-c3/d3.min.js"></script>
        <script src="assets/lib/chart-c3/c3.min.js"></script>
	
        <!-- Datatables-->
        <script src="assets/lib/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/lib/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/lib/toast/jquery.toast.min.js"></script>
        <script src="assets/js/dashboard.js"></script>

        <!--Common Plugins-->
        <script src="assets/lib/jquery/dist/jquery.min.js"></script>
		<script src="assets/lib/bootstrap/js/popper.min.js"></script>
        <script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/lib/pace/pace.min.js"></script>
        <script src="assets/lib/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
        <script src="assets/lib/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/lib/nano-scroll/jquery.nanoscroller.min.js"></script>
        <script src="assets/lib/metisMenu/metisMenu.min.js"></script>
        <script src="assets/js/custom.js"></script>

        <!-- Radial Chart-->
        <script src="assets/lib/radial-charts/jquery.knob.js"></script>
        <script src="assets/lib/radial-charts/jquery.easypiechart.js"></script>
		<script src="assets/js/radial.custom.js"></script>

        <!-- Radial Chart-->
        <script src="assets/lib/radial-charts/jquery.knob.js"></script>
        <script src="assets/lib/radial-charts/jquery.easypiechart.js"></script>
		<script src="assets/js/radial.custom.js"></script>
		
    </body>

</html>
