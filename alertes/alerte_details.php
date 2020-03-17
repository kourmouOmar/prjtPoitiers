<?php 
session_start();
include '../DB.php'; $pdo = Database::connect(); 
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
$id_alerte = $_REQUEST['id'];
	
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
        <title>Alertes - Détails sur l'alerte</title>
		
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
    <body onload="clignotement()">

			<!-- ============================================================== -->
			<!-- 						Topbar Start 							-->
			<!-- ============================================================== -->
			<div class="top-bar light-top-bar">
			<div class="container-fluid">
				<div class="row">
					<div class="col">
						<a class="admin-logo dark-logo" href="accueil.php">
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
								<span class="toggle-none">Accueil </span>
							</a>
						</li>
						<li class="nav-item  ">
							<a class="nav-link"  href="../batiment.php" aria-expanded="false">
							<i class="fa fa-th-large"></i> 
							<span class="toggle-none">Bâtiments</span>
							</a>
						</li>
						<li class="nav-item ">
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
                            <span class="toggle-none">Capteurs</span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link"  href="../climatiseur.php" aria-expanded="false">
                            <i class="fa fa-codepen"></i> 
                            <span class="toggle-none">Climatiseurs</span>
                            </a>
                        </li>
						<li class="nav-item active">
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
                                        <?php 
                                        
                                       

                                        $sqlll = "select * from alerte where id=$id_alerte";
										foreach ($pdo->query($sqlll) as $row) 
										{
											$heure = $row['heure'] ;
                                            $date = $row['date'] ;
                                            $id_capteur =$row['id_capteur'] ;
                                            $table_capteur =$row['type_capteur'] ;
											$id_type_alerte =$row['id_type_alerte'] ;
											
										}	
                                        
                            $sql = "select * from type_alerte where id=$id_type_alerte";
							foreach ($pdo->query($sql) as $row) {$nom_alerte= $row['nom'] ;}
							 //nom du capteur et id_salle
							$sql1 = "select * from $table_capteur where id=$id_capteur";
							foreach ($pdo->query($sql1) as $row) 
							{
								$num_serie_capteur= $row['Num_serie'] ;
								if($table_capteur == "capteur_temperature") {$temp_reele = $row['Temp_reelle'] ;}
								if($table_capteur == "capteur_detecteur_incendie") {$etat_incendie= $row['etat_incendie'] ;}
								$id_salle_capteur= $row['id_salle'];}

                             //nom de la salle et id_etage
							 $sql1 = "select * from salle where  id=$id_salle_capteur";
							 foreach ($pdo->query($sql1) as $row) 
							 {
							 $nom_salle_capteur= $row['Num_salle'] ;
							 $id_etage_salle_capteur= $row['id_etage'] ;
							}           
                            //nom de l'etage et id_batiment
							$sql1 = "select * from etage where  id=$id_etage_salle_capteur";
							foreach ($pdo->query($sql1) as $row) 
							{
								$nom_etage_salle_capteur= $row['nom'] ;
								$id_batiment_etage_salle_capteur= $row['id_batiment'] ;
							}     

                            //nom du batiment
							$sql1 = "select * from batiment where  id=$id_batiment_etage_salle_capteur";
							foreach ($pdo->query($sql1) as $row) 
							{
								$nom_batiment_etage_salle_capteur= $row['nom'] ;
								

							}
							echo "Localisation : $nom_batiment_etage_salle_capteur - $nom_etage_salle_capteur - $nom_salle_capteur |  Alerte : $nom_alerte ";
     
							?>
										<p class="text-muted">Informations complètes sur l'alerte:</p>
									</div>
								</div>
							</div>
					</div>
					<script>
					function clignotement()
					{ 
						if (document.getElementById("gif").style.display=="block") {document.getElementById("gif").style.display="none";}

						else {document.getElementById("gif").style.display="block"; }
					} 

						// mise en place de l appel régulier de la fonction toutes les 1.2 secondes <img src="../plans/plan_bibliotheque.jpg" style="width:120%;position: relative;margin:auto" />

						setInterval("clignotement()", 500); 

					</script>

						<div class="row" id="sortable-view">
										<div class="col-sm-9">
											<div class="card">
												<div class="card-header sortable-title">
													Détails
													<p class="text-muted">Informations complètes sur l'alerte: Salle - <?php echo $nom_salle_capteur;?></p>
												</div>
												<div class="row card-body"> 
													<div class="col-sm-6" style="margin:auto">
														<img src="../images/plan.png" style="width:100%;position: relative;margin:auto" />	
														<img id="gif" src="../images/alert.png" style="width:8%;position:absolute;top:23%;right:24%" />
													</div>

													<div class="col-sm-4" style="margin:auto">
													
															<?php 

															if ($table_capteur == "capteur_temperature")
															{
																echo "<table class='table text-center'>
																<thead> <tr> <th colspan='2' class='text-center'> Informations </th> </tr> </thead>

																<tbody>
																<tr><td>Capteur</td><td>$num_serie_capteur</td></tr>
																<tr><td>Température actuelle</td><td>$temp_reele</td></tr>
																</tbody>
															</table>";
															}

															if ($table_capteur == "capteur_detecteur_incendie")
															{
																echo "<table class='table text-center'>
																<thead> <tr> <th colspan='2' class='text-center'> Informations </th> </tr> </thead>

																<tbody>
																<tr><td>Capteur</td><td>$num_serie_capteur</td></tr>
																<tr><td>Etat d'indendie</td><td>$etat_incendie</td></tr>
																</tbody>
															</table>";
															}
															?>

													</div>

												
												</div>
												
											</div>
										</div>
										<div class="col-sm-3">
											<div class="card">
												<div class="card-header sortable-title">
													Actions:
												</div>
												<div class="card-body"> 
												<?php 

												if ($nom_alerte == "Froid") 
												{
													echo "
													<table class='table text-center'>
													<thead> <tr> <th class='text-center'> Actions </th> </tr> </thead>

													<tbody>
													<tr><td><button type='button' class='btn btn-sm btn-default'>Envoyer un message</button></td></tr>
													<tr><td><button type='button' class='btn btn-sm btn-danger'>Arrêter le climatiseur</button></td></tr>
													<tr><td><button type='button' class='btn btn-sm btn-success'>Allumer le chauffage</button></td></tr>
													</tbody>
													</table>
													";
												}

												if ($nom_alerte == "Chaud") 
												{
													echo "
													<table class='table text-center'>
													<thead> <tr> <th class='text-center'> Actions </th> </tr> </thead>

													<tbody>
													<tr><td><button type='button' class='btn btn-sm btn-default'>Envoyer un message</button></td></tr>
													<tr><td><button type='button' class='btn btn-sm btn-danger'>Allumer le climatiseur</button></td></tr>
													<tr><td><button type='button' class='btn btn-sm btn-success'>Arrêter le chauffage</button></td></tr>
													</tbody>
													</table>
													";

												}

												if ($nom_alerte == "Feu") 
												{
													echo "
													<table class='table text-center'>
													<thead> <tr> <th class='text-center'> Actions </th> </tr> </thead>

													<tbody>
													<tr><td><button type='button' class='btn btn-sm btn-default'>Envoyer un message</button></td></tr>
													<tr><td><button type='button' class='btn btn-sm btn-danger'>Appeller 15 (Les pompiers)</button></td></tr>
													</tbody>
													</table>
													";
												
												}
												?>
                            

												</div>
											</div>
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