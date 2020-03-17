<?php 
include '../DB.php'; 
$pdo = Database::connect(); 
session_start();
if (!isset($_SESSION["id_utilisateur"])) {header("Location:index.php");    }
$id_utilisateur=$_SESSION['id_utilisateur'];

$sql = "select * from  utilisateur where id=$id_utilisateur";
foreach ($pdo->query($sql) as $row){
   $nom=$row['Nom'];
   $prenom=$row['Prenom'];
   $tel=$row['telephone'];
   $email=$row['email'];
   $login=$row['login'];
   $password=$row['password'];

} 


$id_capt = $_REQUEST['val'];

	if (isset($_POST['modif'])) {

		$num_serie=$_POST['num_serie'];
		$description=$_POST['description'];
		$etat=$_POST['etat'];
		$id_salle=$_POST['salle_capteur'];
		$tempmin=$_POST['tempmin'];
		$tempmax=$_POST['tempmax'];
		$tempreel=$_POST['tempreel'];
		$endroit=$_POST['endroit'];

		$Longitude = $_POST['longitude'];
		$Latitude = $_POST['latitude'];
		$adress_ip = $_POST['adress_ip'];
		$ext_int = $_POST['exterieur_interieur'];
		$id = $_POST['id'];

		if($endroit == "batiment") 
		{
			$sql = "UPDATE capteur_temperature set Num_serie = ?, Description = ?, Endroit = ?, Etat = ?,
				 Temp_max = ?, Temp_min = ?, Temp_reelle = ?,Longitude = ?, Latitude = ? , adress_ip = ? ,
				  exterieur_interieur = ?,id_batiment = ? WHERE id = ?";

			$q = $pdo->prepare($sql);
			$q->execute(array($num_serie,$description,$endroit,$etat,$tempmax,$tempmin,$tempreel,$Longitude,$Latitude,$adress_ip,$ext_int,$id,$id_capt));
			header("Location: ../capteur.php");	
		}

		if($endroit == "etage") 
		{
			$sql = "UPDATE capteur_temperature set Num_serie = ?, Description = ?, Endroit = ?, Etat = ?,
				 Temp_max = ?, Temp_min = ?, Temp_reelle = ?,Longitude = ?, Latitude = ? , adress_ip = ? ,
				  exterieur_interieur = ?,id_etage = ? WHERE id = ?";

			$q = $pdo->prepare($sql);
			$q->execute(array($num_serie,$description,$endroit,$etat,$tempmax,$tempmin,$tempreel,$Longitude,$Latitude,$adress_ip,$ext_int,$id,$id_capt));
			header("Location: ../capteur.php");	
		}

		if($endroit == "salle") 
		{
			$sql = "UPDATE capteur_temperature set Num_serie = ?, Description = ?, Endroit = ?, Etat = ?,
				 Temp_max = ?, Temp_min = ?, Temp_reelle = ?,Longitude = ?, Latitude = ? , adress_ip = ? ,
				  exterieur_interieur = ?,id_salle = ? WHERE id = ?";

			$q = $pdo->prepare($sql);
			$q->execute(array($num_serie,$description,$endroit,$etat,$tempmax,$tempmin,$tempreel,$Longitude,$Latitude,$adress_ip,$ext_int,$id,$id_capt));
			header("Location: ../capteur.php");	
		}

		if($endroit == "couloir") 
		{
			$sql = "UPDATE capteur_temperature set Num_serie = ?, Description = ?, Endroit = ?, Etat = ?,
				 Temp_max = ?, Temp_min = ?, Temp_reelle = ?,Longitude = ?, Latitude = ? , adress_ip = ? ,
				  exterieur_interieur = ?,id_couloir = ? WHERE id = ?";

			$q = $pdo->prepare($sql);
			$q->execute(array($num_serie,$description,$endroit,$etat,$tempmax,$tempmin,$tempreel,$Longitude,$Latitude,$adress_ip,$ext_int,$id,$id_capt));
			header("Location: ../capteur.php");	
		}

		if($endroit == "escalier") 
		{
			$sql = "UPDATE capteur_temperature set Num_serie = ?, Description = ?, Endroit = ?, Etat = ?,
				 Temp_max = ?, Temp_min = ?, Temp_reelle = ?,Longitude = ?, Latitude = ? , adress_ip = ? ,
				  exterieur_interieur = ?,id_escalier = ? WHERE id = ?";

			$q = $pdo->prepare($sql);
			$q->execute(array($num_serie,$description,$endroit,$etat,$tempmax,$tempmin,$tempreel,$Longitude,$Latitude,$adress_ip,$ext_int,$id,$id_capt));
			header("Location: ../capteur.php");	
		}

		if($endroit == "zone") 
		{
			$sql = "UPDATE capteur_temperature set Num_serie = ?, Description = ?, Endroit = ?, Etat = ?,
				 Temp_max = ?, Temp_min = ?, Temp_reelle = ?,Longitude = ?, Latitude = ? , adress_ip = ? ,
				  exterieur_interieur = ?,id_zone = ? WHERE id = ?";

			$q = $pdo->prepare($sql);
			$q->execute(array($num_serie,$description,$endroit,$etat,$tempmax,$tempmin,$tempreel,$Longitude,$Latitude,$adress_ip,$ext_int,$id,$id_capt));
			header("Location: ../capteur.php");	
		}

		
	}  		
?>
<!DOCTYPE html>
<html lang="fr">

<style type="text/css">
	 a{
	  text-decoration: none;"
	 	}
</style>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Modifier un capteur de température</title>
		
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
							<h1>IUT Poitiers</h1>
						</a>				
						<div class="left-nav-toggle" >
							<a  href="#" class="nav-collapse"><i class="fa fa-bars"></i></a>
						</div>
						<div class="left-nav-collapsed" >
							<a  href="#" class="nav-collapsed"><i class="fa fa-bars"></i></a>
						</div>
						<div class="search-form hidden-xs">
							<form>
								<input class="form-control" placeholder="Chercher..." type="text"> <button class="btn-search" type="button"><i class="fa fa-search"></i></button>
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
									<?php echo $prenom; ?>
								</a>
								<ul class="dropdown-menu top-dropdown">
									<li>
										<a class="dropdown-item" href="javascript:%20void(0);"><i class="icon-bell"></i> Activitées</a>
									</li>
									<li>
										<a class="dropdown-item" href="../profile.php"><i class="icon-user"></i> Profil</a>
									</li>
									<li>
										<a class="dropdown-item" href="javascript:%20void(0);"><i class="icon-settings"></i> Paramètres</a>
									</li>
									<li class="dropdown-divider"></li>
									<li>
										<a class="dropdown-item" href="../index.php"><i class="icon-logout"></i>Déconnexion</a>									</li>
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
                        <p class="lead margin-b-0 toggle-none">Mr <?php echo $prenom; ?></p>
                        <p class="text-muted mv-0 toggle-none">Bonjour</p>						
                    </div>
					
                    <ul class="metisMenu nav flex-column" id="menu">
                        <!--<li class="nav-heading"><span>MAIN</span></li>-->	
						<li class="">
							<a class="nav-link" href="../accueil.php">
								<i class="fa fa-home"></i> 
								<span class="toggle-none">Accueil</span>
							</a>
						</li>
						<li class="nav-item ">
							<a class="nav-link "  href="../batiment.php" aria-expanded="false">
							<i class="fa fa-th-large"></i> 
							<span class="toggle-none">Bâtiments</span>
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
						<li class="nav-item active ">
                            <a class="nav-link"  href="../capteur.php" aria-expanded="false">
                            <i class="fa fa-codepen"></i> 
                            <span class="toggle-none">Capteurs</span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link"  href="../climatiseur.php" aria-expanded="false">
                            <i class="fa fa-codepen"></i> 
                            <span class="toggle-none">Climatiseurs</span>
                            </a>
                        </li>
						<li class="nav-item">
                            <a class="nav-link" href="../alert.php" aria-expanded="false">
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
		
        <section class="main-content">
            <div class="row w-no-padding margin-b-30">
            </div>
             <div class="row">
					<div class="col-md-12">
                    <div class="card">
					 	<div class="card-header card-default">
							Capteur  :
							<?php 
								$sql1 = "select * from capteur_temperature where  id=$id_capt";
								foreach ($pdo->query($sql1) as $row){
									$num=$row['Num_serie'];
								} 
								echo "".$num."";
							?>
							
						<p class="text-muted">Modifier les informations du capteur</p>

                        </div>
                         <div class="card-body " >
                        <?php 
                    	
							$sql = "select * from capteur_temperature where  id=$id_capt";
							foreach ($pdo->query($sql) as $row) 
							{

								$nser= $row['Num_serie'] ;
								$des= $row['Description'];
								$endroit= $row['Endroit'];
								$etat= $row['Etat'];
								$tempmax= $row['Temp_max'];
								$tempmin= $row['Temp_min'];
								$tempreel= $row['Temp_reelle'];

								$Longitude = $row['Longitude'];
								$Latitude = $row['Latitude'];
								$adress_ip = $row['adress_ip'];
								$ext_int = $row['exterieur_interieur'];

								$id_batiment = $row['id_batiment'];
								$id_etage = $row['id_etage'];
								$id_salle = $row['id_salle'];
								$id_couloir = $row['id_couloir'];
								$id_escalier = $row['id_escalier'];
								$id_zone = $row['id_zone'];
								

								
								
							}
						?>

                	
                     <form method="post"  >

							<div class=""> 
							
							<div class="col-md-12">
										<div class="card">
											<div class="card-body " >
										
											<form method="post"  enctype="multipart/form-data">


											<?php 
									if($endroit == "batiment") 
									{
										echo '
										<input type="text" hidden="hidden" name="id" value="'.$id_batiment.'" class="form-control form-control-rounded">
										';
									}

									if($endroit == "etage") 
									{
										echo '
										<input type="text" hidden="hidden" name="id" value="'.$id_etage.'" class="form-control form-control-rounded">
										';
									}

									if($endroit == "salle") 
									{
										echo '
										<input type="text" hidden="hidden" name="id" value="'.$id_salle.'" class="form-control form-control-rounded">
										';
									}

									if($endroit == "couloir") 
									{
										echo '
										<input type="text" hidden="hidden" name="id" value="'.$id_couloir.'" class="form-control form-control-rounded">
										';
									}

									if($endroit == "escalier") 
									{
										echo '
										<input type="text" hidden="hidden" name="id" value="'.$id_escalier.'" class="form-control form-control-rounded">
										';
									}

									if($endroit == "zone") 
									{
										echo '
										<input type="text" hidden="hidden" name="id" value="'.$id_zone.'" class="form-control form-control-rounded">
										';
									}


									?>

							<div class="row">
								
								<div class="col-md-4">
									<div class="form-group  ">
                                    	<label>N° serie</label>
                                    	<input type="text"  name="num_serie" value="<?php  echo $nser ?>" class="form-control form-control-rounded">
                                	</div>
								</div>
								
								<div class="col-md-4">
									<div class="form-group  ">
                                    	<label>Description</label>
                                    	<input type="text"  name="description" value="<?php  echo $des  ?>" class="form-control form-control-rounded">
                                	</div>
								</div>
								
								<div class="col-md-4">
                                   <div class="form-group">
                                   		<label>Etat</label>
                                    	<select name="etat" style="border-color:red;"class="form-control form-control-rounded">
											<option value="<?php echo $etat  ?>" disabled selected hidden><?php echo $etat  ?></option>                                   
                                    		<option value="En service"> En service</option>
                                    		<option value="Hors service"> Hors service</option>
                                    	</select>
                                	</div>
								</div>
							</div>

								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label>Températeur minimale</label>
											<input type="text" name="tempmin" value="<?php echo $tempmin  ?>" class="form-control form-control-rounded">
										</div>
									</div>

									<div class="col-md-4">
										<div class="form-group">
											<label>Températeur maximale</label>
											<input type="text" name="tempmax" value="<?php  echo $tempmax ?>" class="form-control form-control-rounded">
										</div>
									</div>

									<div class="col-md-4">
										<div class="form-group">
											<label>Températeur réelle</label>
											<input type="text" name="tempreel" value="<?php  echo $tempreel ?>"class="form-control form-control-rounded">
										</div>
									</div>

									
								</div>

								<div class="row" >
									<div class="col-md-3">
										<div class="form-group">
											<label>Longitude</label>
											<input type="text" name="longitude" value="<?php  echo $Longitude ?>" class="form-control form-control-rounded">
										</div>
									</div>

									<div class="col-md-3">
										<div class="form-group">
											<label>Latitude</label>
											<input type="text" name="latitude" value="<?php  echo $Latitude ?>" class="form-control form-control-rounded">
										</div>
									</div>

									<div class="col-md-3">
										<div class="form-group">
											<label>Adresse IP</label>
											<input type="text" name="adress_ip" value="<?php  echo $adress_ip ?>" class="form-control form-control-rounded">
											<input type="text" hidden="hidden" name="endroit" value="<?php  echo $endroit ?>" class="form-control form-control-rounded">
										</div>
									</div>


									<?php 
									if($endroit == "batiment") 
									{
										echo '
										<div class="col-md-3" id="ext_int" style="">
											<div class="form-group">
												<label>Extérieur / Intérieur</label>
												<select name="exterieur_interieur" class="form-control form-control-rounded">
												<option value="0" disabled selected hidden>'.$ext_int.'</option>                                   
												<option value="Exterieur"> Extérieur</option>
												<option value="Interieur"> Intérieur</option>
											</select>
											</div>
										</div>
										';
									}
									?>
									

									
								</div>

								<div class="row" style="margin:auto">
								<div class="col-md-4">
									<div class="form-group">
										<input type="submit" name="modif" value="Modifier" width="40%" class="btn btn-sm btn-success">
									</div>
								</div>
								</div>
   
                          </form>
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