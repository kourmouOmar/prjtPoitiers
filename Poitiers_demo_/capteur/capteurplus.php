<?php 
include '../DB.php';
$pdo = Database::connect();
$id_cap = $_REQUEST['val'];
$tab=$_REQUEST['tab'];


?>

<!DOCTYPE html>
<html lang="en">

<style type="text/css">
	 a{
	  text-decoration: none;"
	 	}
</style>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>salle</title>
		
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
														<img alt="" class="rounded-circle" src="assets/img/avtar-2.png" width="50">
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
						<li class="nav-item  ">
							<a class="nav-link"  href="../capteur.php" aria-expanded="false">
							<i class="fa fa-th-large"></i> 
							<span class="toggle-none">bâtiment</span>
							</a>
						</li>
						<li class="nav-item  ">
							<a class="nav-link"  href="../etage.php" aria-expanded="true">
							<i class="fa fa-th-large"></i> 
							<span class="toggle-none">Etages</span>
							</a>
						</li>
						<li class="nav-item ">
							<a class="nav-link"  href="../salles.php" aria-expanded="true">
							<i class="fa fa-th-large"></i> 
							<span class="toggle-none">Salles</span>
							</a>
						</li>
						<li class="nav-item active">
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
					 		<?php 
                        	
								$sql = "select * from $tab where  id=$id_cap";
								foreach ($pdo->query($sql) as $row) 
								{$numclim= $row['Num_serie']; $id_salle=$row['id_salle'];}

								echo "Capteur : $numclim  ";
                        	?>
								 
							<p class="text-muted">Lorem ipsum dolor sit amet</p>
                        	</div>
                    	</div>
                 	</div>
            </div>
                <div class="row" id="sortable-view">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header sortable-title">
                        	<div class="card-header sortable-title">
                            	Détail capteur
                        	</div>
                        	<table class="table table-hover">

                            <thead>
                            <tr>
                                <th colspan="4" class="text-center">Climatiseur</th>
                            </tr>
                            <tr>
                                <th>Nom</th><th>Endroit</th><th>Catégorie</th><th>etat</th>
                            </tr>
                            </thead>
                            <tbody>
                        		
                        		<?php 

                        			$mk= "select * from $tab where  id=$id_cap";
                        			foreach ($pdo->query($mk) as $row) {
                        				$cat=$row['categorie'];
                        				$num=$row['Num_serie'];
                        				$end=$row['endroit'];
                        				$etat=$row['etat'];
                        				$desc=$row['Description'];
                        				
									echo"<tr><td>".$num."</td>";
									echo"<td>".$end."</td>";
									echo"<td>".$cat."</td>";
									echo"<td>".$etat."</td></tr>";
								}
                        		 ?>
                       			
                           </tbody>
                           </table>
                        </div>
                    
                         <div class="card-header sortable-title">
                        	<table class="table table-hover">

                            <thead>
                            <tr>
                                <th colspan="3" class="text-center">description</th>
                            </tr>
                            <tr>
                                <th colspan="3" ><?php echo $desc; ?></th>
                            </tr>
                            </thead>
                           </table>
                        </div>
                        
                    </div>
                </div>
                <div class="col-sm-6">
                	<div class="card">
                        <div class="card-header sortable-title">
                            Détail du salle
                        </div>
                        <div class="card-body"> 
                            
                            <table class="table table-hover">
                            <thead>
                            <tr>
                                <th colspan="2" class="text-center">salle</th>
                                
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            	$sql = "select * from salle where  id=$id_salle";
								foreach ($pdo->query($sql) as $row) {
									
								$num_salle= $row['Num_salle'] ;
								$id_bt= $row['id_categorie'];
								$etat= $row['Etat'];
								$nbr_fent= $row['nbr_fenetres'];
								$nbr_port= $row['nbr_portes'];	
								$id_etage = $row['id_etage'];
								$id_categorie =$row['id_categorie'];

									$sql9 = "select * from etage where  id=$id_etage";
									foreach ($pdo->query($sql9) as $row) {
										$nom_etage=$row['nom'];
										$id_bat=$row['id_batiment'];
									}
									$sql8 = "select * from batiment where  id=$id_bat";
									foreach ($pdo->query($sql8) as $row) {
										$nom_bat=$row['nom'];
									}
								}	
                          		echo " 
                          		<tr>
                               		<td>nom</td><td>$num_salle</td>
                               	</tr>
                               	<tr>
                               		<td>etat</td><td>$etat</td>
                               	</tr>
                               	<tr>
                               		<td>nom batiment</td><td>$nom_bat</td>
                               	</tr>
                               	<tr>
                               		<td>nom étage</td><td>$nom_etage</td>
                               	</tr>
                               	<tr>
                               		<td>nombres des fentres</td><td>$nbr_fent</td>
                               	</tr>
                               	<tr>
                               		<td>nombres des portes</td><td>$nbr_port</td>
                            	</tr>";




                        			
                        	
                            ?>
                            </tbody>
                        </table>
                         </div>
                    </div>
                </div>
                </div>
               	</div>
               	
				</div>
            <div class="row w-no-padding margin-b-30 card" style="padding:20px">
            	<div class="col-md-12">
                    
                    <div class="row">
                    	<div class="col-md-4">
                    		<img src="../images/mini04.jpg" width="250px" />
                    	</div>
                    	<div class="col-md-4">
                    		<img src="../images/mini04.jpg" width="250px" />
                    	</div>
                    	<div class="col-md-4">
                    		<img src="../images/mini04.jpg" width="250px" />
                    	</div>
                    </div>
                    <br><br><br>
                    <div class="row">
                    	<div class="col-md-6">
                    		<img src="../plan/plan1.svg" width="500px">
                    	</div>
                    	<div class="col-md-6">
                    		<p class="margin-b-0">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                            </p>
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
        <script src="../assets/lib/chart-c3/d3.min.js"></script>
        <script src="../assets/lib/chart-c3/c3.min.js"></script>
	
        <!-- Datatables-->
        <script src="../assets/lib/datatables/jquery.dataTables.min.js"></script>
        <script src="../assets/lib/datatables/dataTables.responsive.min.js"></script>
        <script src="../assets/lib/toast/jquery.toast.min.js"></script>
        <script src="../assets/js/dashboard.js"></script>
		
    </body>

</html>