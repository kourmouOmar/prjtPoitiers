<?php 
include '../DB.php';
$pdo = Database::connect();
$id = $_REQUEST['val'];
                        
	$sql = "select * from batiment where  id=$id";
	foreach ($pdo->query($sql) as $row) {
		$n= $row['nom'] ;
		$d= $row['Description'] ;
		$id_plan=$row['id_plan'];
	}
?>
<!DOCTYPE html>
<html lang="en">

<style type="text/css">
	a{
	  text-decoration: none;
	}
</style>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>bâtiment</title>
		
        <!-- Common Plugins -->
        <link href="../assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		
		<!-- Vector Map Css-->
        <link href="../assets/lib/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
		
		<!-- Chart C3 -->
		<link href="../assets/lib/chart-c3/c3.min.css" rel="stylesheet">
		<link href="../assets/lib/chartjs/chartjs-sass-default.css" rel="stylesheet">

        <!-- DataTables -->
        <link href="../assets/lib/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
        <link href="../assets/lib/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="../assets/lib/toast/jquery.toast.min.css" rel="stylesheet">
		
        <!-- Custom Css-->
        <link href="../assets/scss/style.css" rel="stylesheet">
        
    </head>
    <body>

			<!-- ============================================================== -->
			<!-- 						Topbar Start 							-->
			<!-- ============================================================== -->
			<div class="top-bar light-top-bar">
			<div class="container-fluid">
				<div class="row">
					<div class="col">
						<a class="admin-logo dark-logo" href="index.html">
							<h1>UIT Poitie</h1>
						</a>				
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
														<img alt="" class="rounded-circle" src="../assets/img/avtar-2.png" width="50">
													</span> 
													<span class="notification-title">
													John Doe 
													<label class="label label-warning float-right">Support</label>
													</span> 
													<span class="notification-description">Lorem Ipsum is simply dummy text of the printing.</span> 
													<span class="notification-time">15 minutes ago</span>
												</a>
												
												<a class="clearfix" href="javascript:%20void(0);">
													<span class="notification-icon">
													<img alt="" class="rounded-circle" src="../assets/img/avtar-3.png" width="50">
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
													<img alt="" class="rounded-circle" src="../assets/img/avtar-4.png" width="50">
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
													<img alt="" class="rounded-circle" src="../assets/img/avtar-5.png" width="50">
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
									<img alt="" class="rounded-circle" src="../assets/img/avtar-2.png" width="30">
									John Doe
								</a>
								<ul class="dropdown-menu top-dropdown">
									<li>
										<a class="dropdown-item" href="javascript:%20void(0);"><i class="icon-bell"></i> Activities</a>
									</li>
									<li>
										<a class="dropdown-item" href="javascript:%20void(0);"><i class="icon-user"></i> Profile</a>
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
                        <img alt="profile" class="margin-b-10  " src="../assets/img/avtar-2.png" width="80">
                        <p class="lead margin-b-0 toggle-none">Mr med Doe</p>
                        <p class="text-muted mv-0 toggle-none">Welcome</p>						
                    </div>
					
                    <ul class="metisMenu nav flex-column" id="menu">
                        <!--<li class="nav-heading"><span>MAIN</span></li>-->	
						<li class="">
							<a class="nav-link" href="../accueil.php">
								<i class="fa fa-home"></i> 
								<span class="toggle-none">Accueil </span>
							</a>
						</li>
						<li class="nav-item  active">
							<a class="nav-link"  href="../batiment.php" aria-expanded="false">
							<i class="fa fa-th-large"></i> 
							<span class="toggle-none">bâtiment</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link"  href="../etage.php" aria-expanded="true">
							<i class="fa fa-th-large"></i> 
							<span class="toggle-none">Etages</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link"  href="../salles.php" aria-expanded="true">
							<i class="fa fa-th-large"></i> 
							<span class="toggle-none">Salles</span>
							</a>
						</li>
						<li class="nav-item ">
                            <a class="nav-link"  href="../capteur.php" aria-expanded="false">
                            <i class="fa fa-codepen"></i> 
                            <span class="toggle-none">les capteur </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link"  href="../climatiseur.php" aria-expanded="false">
                            <i class="fa fa-codepen"></i> 
                            <span class="toggle-none">les clims </span>
                            </a>
                        </li>
						<li class="nav-item">
                            <a class="nav-link" href="../alert.php" aria-expanded="false">
                            	<i class="fa fa-envelope-open"></i> 
                            	<span class="toggle-none">Aleret</span>
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
		
        <section class="main-content">
            <div class="row w-no-padding margin-b-30">
            </div>

				<div class="row">
					<div class="col-md-12">
                    	<div class="card">
					 		<div class="card-header card-default">
								les bâtiments // <?php echo $n; ?>
								<p class="text-muted">Lorem ipsum dolor sit amet</p>
                        	</div>

                    	</div>
                 	</div>
                </div>
                 <div class="row" id="sortable-view">
                <div class="col-sm-6">
                    <div class="card">

                        <div class="card-body">
                            <img class="margin-b-0" alrt="img1"/>
                            <h1> bâtiment  : </h1>
                            <p> <?php echo $d; ?></p>

                           <?php 
            				$mkk= "select *  from plan where id=$id_plan";
                        	foreach ($pdo->query($mkk) as $row) {
                        	$path=$row['path'];
                        }
            			?>
            			<img src="<?php echo" ../images/$path" ?>" width="500px">
                        </div>
                         
                    </div>
                </div>
                <div class="col-sm-6">
                	<div class="card">
                      
                        <div class="card-body">
                        	<div class="card">
                        <div class="card-header card-default">
                            les etages
                        </div>
                        <div class="card-body">
                            <table class="table table-hover">

                            <thead>
                            <tr>
                                <th colspan="2" class="text-center">Etages</th>
                            </tr>
                            <tr>
                                <th>Nom</th><th>Description</th>
                            </tr>
                            </thead>
                            <tbody>
                        		
                        		<?php 
                        			$mk= "select * from etage where  id_batiment=$id";
                        			foreach ($pdo->query($mk) as $row) {
                        				$nom_etage=$row['nom'];
                        				$description=$row['Description'];
									echo"<tr><td>".$nom_etage."</td><td>".$description."</td></tr>";
								}
                        		 ?>
                       			
                           </tbody>
                           </table>
                        </div>
                </div>
               	</div>
				</div>
            <footer class="footer">
                <span>Copyright &copy; 2018 EST Salé</span>
            </footer>

        </section>
        <!-- ============================================================== -->
		<!-- 						Content End		 						-->
		<!-- ============================================================== -->

		
        <!-- Common Plugins -->
        <script src="../assets/lib/jquery/dist/jquery.min.js"></script>
		<script src="../assets/lib/bootstrap/js/popper.min.js"></script>
        <script src="../assets/lib/bootstrap/js/bootstrap.min.js"></script>
        <script src="../assets/lib/pace/pace.min.js"></script>
        <script src="../assets/lib/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
        <script src="../assets/lib/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="../assets/lib/nano-scroll/jquery.nanoscroller.min.js"></script>
        <script src="../assets/lib/metisMenu/metisMenu.min.js"></script>
        <script src="../assets/js/custom.js"></script>
			
        <!--Chart Script-->
        <script src="../assets/lib/chartjs/chart.min.js"></script>
		<script src="../assets/lib/chartjs/chartjs-sass.js"></script>

		<!--Vetor Map Script-->
		<script src="../assets/lib/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="../assets/lib/vectormap/jquery-jvectormap-us-aea-en.js"></script>
		
		<!-- Chart C3 -->
        <script src="assets/lib/chart-c3/d3.min.js"></script>
        <script src="assets/lib/chart-c3/c3.min.js"></script>
	
        <!-- Datatables-->
        <script src="assets/lib/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/lib/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/lib/toast/jquery.toast.min.js"></script>
        <script src="assets/js/dashboard.js"></script>
		
    </body>

</html>