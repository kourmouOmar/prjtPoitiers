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
$id_capteur = $_REQUEST['id'];
$tab=$_REQUEST['table'];

					if($tab == "capteur_temperature") {$cat="Capteur de température";}
					if($tab == "capteur_humid") {$cat="Capteur d'humidité";}
					if($tab == "capteur_detecteur_incendie") {$cat="Capteur de détection d'incendies";}
					if($tab == "capteur_mouvement") {$cat="Capteur de mouvement";}




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
        <title>Capteur - Détails</title>
		
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
					 		<?php 
							
							
								$sql = "select * from $tab where  id=$id_capteur";
								foreach ($pdo->query($sql) as $row) 
								{ $numcapteur= $row['Num_serie']; $id_salle=$row['id_salle'];}

								echo "Capteur : $numcapteur  ";
                        	?>
								 
							<p class="text-muted">Les informations complètes sur le capteur.</p>
                    	</div>
                	</div>
             	</div>
            </div>
                <div class="row" id="sortable-view">
                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-header sortable-title">
                        	<div class="card-header sortable-title">
                            	Détail du capteur:
                        	</div>

							<?php 
							
							if($tab == "capteur_temperature") 
							{

								echo "
								<table class='table table-hover'>

                            <thead>
							<tr><th colspan='7' class='text-center' >"; echo $cat ;
							echo "</th></tr>
							<tr style='text-align:center'><th>N° serie</th><th>Description</th><th>Endroit</th><th>Etat du capteur</th><th>Température réelle</th>
							<th>Temp MAX</th><th>Temp MIN</th>
							</tr>
                            </thead>
                            <tbody>
								";

								$sql1= "select * from ".$tab." where id=".$id_capteur;
								foreach ($pdo->query($sql1) as $row) 
								{
									
									$num_serie=$row['Num_serie'];
									$description=$row['Description'];
									$endroit=$row['Endroit'];
									$etat=$row['Etat'];
									$temp_reelle=$row['Temp_reelle'];
									$temp_max=$row['Temp_max'];
									$temp_min=$row['Temp_min'];
									$id_batiment = $row['id_batiment'];
									$id_etage = $row['id_etage'];
									$id_salle = $row['id_salle'];
									$id_couloir = $row['id_couloir'];
									$id_escalier = $row['id_escalier'];
									$id_zone = $row['id_zone'];
									
									
									echo"<tr style='text-align:center' ><td>".$num_serie."</td>";
									echo"<td>".$description."</td>";
									echo"<td>".$endroit."</td>";
									echo"<td>".$etat."</td>";
									echo"<td>".$temp_reelle."</td>";
									echo"<td>".$temp_max."</td>";
									echo"<td>".$temp_min."</td></tr>";
								}
								echo "</tbody></table>";

							}

							if($tab == "capteur_humid") 
							{

								echo "
								<table class='table table-hover'>

                            <thead>
							<tr><th colspan='7' class='text-center' >"; echo $cat ;
							echo "</th></tr>
							<tr style='text-align:center'><th>N° serie</th><th>Description</th><th>Endroit</th><th>Etat du capteur</th><th>Humidité réelle</th>
							<th>Humid MAX</th><th>Humid MIN</th>
							</tr>
                            </thead>
                            <tbody>
								";

								$sql1= "select * from ".$tab." where id=".$id_capteur;
								foreach ($pdo->query($sql1) as $row) 
								{
									
									$num_serie=$row['Num_serie'];
									$description=$row['Description'];
									$endroit=$row['Endroit'];
									$etat=$row['Etat'];
									$humid_reelle=$row['Humid_reelle'];
									$humid_max=$row['Humid_max'];
									$humid_min=$row['Humid_min'];
									$id_batiment = $row['id_batiment'];
									$id_etage = $row['id_etage'];
									$id_salle = $row['id_salle'];
									$id_couloir = $row['id_couloir'];
									$id_escalier = $row['id_escalier'];
									$id_zone = $row['id_zone'];
									
									echo '<tr style="text-align:center">';
									echo"<td>".$num_serie."</td>";
									echo"<td>".$description."</td>";
									echo"<td>".$endroit."</td>";
									echo"<td>".$etat."</td>";
									echo"<td>".$humid_reelle."</td>";
									echo"<td>".$humid_max."</td>";
									echo"<td>".$humid_min."</td></tr>";
								}
								echo "</tbody></table>";
							}




							if($tab == "capteur_mouvement") 
							{

								echo "
								<table class='table table-hover'>

                            <thead>
							<tr><th colspan='7' class='text-center' >"; echo $cat ;
							echo "</th></tr>
							<tr style='text-align:center' ><th>N° serie</th><th>Description</th><th>Endroit</th><th>Etat du capteur</th><th>Etat de mouvement</th></tr>
                            </thead>
                            <tbody style='text-align:center'>
								";

								$sql1= "select * from ".$tab." where id=".$id_capteur;
								foreach ($pdo->query($sql1) as $row) 
								{
									
									$num_serie=$row['Num_serie'];
									$description=$row['Description'];
									$endroit=$row['Endroit'];
									$etat=$row['Etat'];
									$etat_mouvement=$row['etat_mouvement'];
									$id_batiment = $row['id_batiment'];
									$id_etage = $row['id_etage'];
									$id_salle = $row['id_salle'];
									$id_couloir = $row['id_couloir'];
									$id_escalier = $row['id_escalier'];
									$id_zone = $row['id_zone'];
									
									
									
									echo"<tr style='text-align:center' ><td>".$num_serie."</td>";
									echo"<td>".$description."</td>";
									echo"<td>".$endroit."</td>";
									echo"<td>".$etat."</td>";
									echo"<td>".$etat_mouvement."</td></tr>";
								}
								echo "</tbody></table>";
							}

							if($tab == "capteur_detecteur_incendie") 
							{

								echo "
								<table class='table table-hover'>

                            <thead>
							<tr><th colspan='7' class='text-center' >"; echo "Détecteurs d'incendies" ;
							echo "</th></tr>
							<tr style='text-align:center' ><th>N° serie</th><th>Description</th><th>Endroit</th><th>Etat du capteur</th><th>Etat de mouvement</th></tr>
                            </thead>
                            <tbody style='text-align:center'>
								";

								$sql1= "select * from ".$tab." where id=".$id_capteur;
								foreach ($pdo->query($sql1) as $row) 
								{
									
									$num_serie=$row['Num_serie'];
									$description=$row['Description'];
									$endroit=$row['Endroit'];
									$etat=$row['Etat'];
									$etat_incendie=$row['etat_incendie'];
									$id_batiment = $row['id_batiment'];
									$id_etage = $row['id_etage'];
									$id_salle = $row['id_salle'];
									$id_couloir = $row['id_couloir'];
									$id_escalier = $row['id_escalier'];
									$id_zone = $row['id_zone'];
									
									
									
									echo"<tr style='text-align:center' ><td>".$num_serie."</td>";
									echo"<td>".$description."</td>";
									echo"<td>".$endroit."</td>";
									echo"<td>".$etat."</td>";
									echo"<td>".$etat_incendie."</td></tr>";
								}
								echo "</tbody></table>";
							}
							

                        	
                        		 ?>
                       			
                           </tbody>
                           </table>
                        	
                        </div>
                    
                         
                        
                    </div>
                </div>
                <div class="col-sm-4">
                	<div class="card">
                        <div class="card-header sortable-title">
                            Détails de l'endroit:
                        </div>
						<p class="text-muted"></p>
                        <div class="card-body"> 

							<?php
								if($endroit == "batiment") 
									{

											echo "
											<table class='table table-hover'>

										<thead>
										<tr><th colspan='2' class='text-center' >"; echo "Bâtiment" ;
										echo "</th></tr>
										<tr style='text-align:center'><th>Nom</th><th>Description</th></tr>
										</thead>
										<tbody>
											";

											$sql1= "select * from batiment where id=$id_batiment";
											foreach ($pdo->query($sql1) as $row) 
											{
												
												$nom=$row['nom'];
												$description=$row['Description'];
												
												
												
												echo"<tr style='text-align:center' ><td>".$nom."</td>";
												echo"<td>".$description."</td></tr>";
											}

									}


									if($endroit == "etage") 
									{

												echo "
												<table class='table table-hover'>

											<thead>
											<tr><th colspan='2' class='text-center' >"; echo "Etage" ;
											echo "</th></tr>
											<tr style='text-align:center'><th>Nom</th><th>Nom du bâtiment</th></tr>
											</thead>
											<tbody>
												";

												$sql1= "select * from etage where id=$id_etage";
												foreach ($pdo->query($sql1) as $row) 
												{
													
													$nom=$row['nom'];
													$description=$row['Description'];
													$id_batiment_etage = $row['id_batiment'];

													$sql= "select * from batiment where id=$id_batiment_etage";
													foreach ($pdo->query($sql) as $row) 
													{
														$nom_batiment = $row['nom'];
													}
													
													echo"<tr style='text-align:center' ><td>".$nom."</td>";
													echo"<td>".$nom_batiment."</td></tr>";
												}
												echo "</tbody></table>";
									}

									if($endroit == "salle") 
									{

													echo "
													<table class='table table-hover'>

												<thead>
												<tr><th colspan='3' class='text-center' >"; echo "Etage" ;
												echo "</th></tr>
												<tr style='text-align:center'><th>Nom</th><th>Etage</th><th>Bâtiment</th></tr>
												</thead>
												<tbody>
													";

													$sql1= "select * from salle where id=$id_salle";
													foreach ($pdo->query($sql1) as $row) 
													{
														
														$nom=$row['Num_salle'];
														$id_etage = $row['id_etage'];
														
															$sql= "select * from etage where id=$id_etage";
															foreach ($pdo->query($sql) as $row) 
														{
															
															$nom_etage=$row['nom'];
															
															$id_batiment_etage = $row['id_batiment'];

															$sql= "select * from batiment where id=$id_batiment_etage";
															foreach ($pdo->query($sql) as $row) 
															{
																$nom_batiment = $row['nom'];
															}
														
													
													}
													
													
													echo"<tr style='text-align:center' ><td>".$nom."</td>";
													echo"<td>".$nom_etage."</td><td>".$nom_batiment."</td></tr>";
												}				
												echo "</tbody></table>";
									}

									if($endroit == "couloir") 
									{

													echo "
													<table class='table table-hover'>

												<thead>
												<tr><th colspan='3' class='text-center' >"; echo "Couloir" ;
												echo "</th></tr>
												<tr style='text-align:center'><th>Nom</th><th>Etage</th><th>Bâtiment</th></tr>
												</thead>
												<tbody>
													";

													$sql1= "select * from couloir where id=$id_couloir";
													foreach ($pdo->query($sql1) as $row) 
													{
														
														$nom=$row['nom'];
														$id_etage = $row['id_etage'];
														
															$sql= "select * from etage where id=$id_etage";
															foreach ($pdo->query($sql) as $row) 
														{
															
															$nom_etage=$row['nom'];
															
															$id_batiment_etage = $row['id_batiment'];

															$sql= "select * from batiment where id=$id_batiment_etage";
															foreach ($pdo->query($sql) as $row) 
															{
																$nom_batiment = $row['nom'];
															}
														
													
													}
													
													
													echo"<tr style='text-align:center' ><td>".$nom."</td>";
													echo"<td>".$nom_etage."</td><td>".$nom_batiment."</td></tr>";
												}				
												echo "</tbody></table>";
									}

									if($endroit == "escalier") 
									{

													echo "
													<table class='table table-hover'>

												<thead>
												<tr><th colspan='3' class='text-center' >"; echo "Escalier" ;
												echo "</th></tr>
												<tr style='text-align:center'><th>Nom</th><th>Etage</th><th>Bâtiment</th></tr>
												</thead>
												<tbody>
													";

													$sql1= "select * from escalier where id=$id_escalier";
													foreach ($pdo->query($sql1) as $row) 
													{
														
														$nom=$row['nom'];
														$id_etage = $row['id_etage_bas'];
														
															$sql= "select * from etage where id=$id_etage";
															foreach ($pdo->query($sql) as $row) 
														{
															
															$nom_etage=$row['nom'];
															
															$id_batiment_etage = $row['id_batiment'];

															$sql= "select * from batiment where id=$id_batiment_etage";
															foreach ($pdo->query($sql) as $row) 
															{
																$nom_batiment = $row['nom'];
															}
														
													
													}
													
													
													echo"<tr style='text-align:center' ><td>".$nom."</td>";
													echo"<td>".$nom_etage."</td><td>".$nom_batiment."</td></tr>";
												}				
												echo "</tbody></table>";
									}

									if($endroit == "zone") 
									{

											echo "
											<table class='table table-hover'>

										<thead>
										<tr><th colspan='2' class='text-center' >"; echo "Zone" ;
										echo "</th></tr>
										<tr style='text-align:center'><th>Nom</th><th>Description</th></tr>
										</thead>
										<tbody>
											";

											$sql1= "select * from zone where id=$id_zone";
											foreach ($pdo->query($sql1) as $row) 
											{
												
												$nom=$row['nom'];
												$description=$row['description'];
												
												
												
												echo"<tr style='text-align:center' ><td>".$nom."</td>";
												echo"<td>".$description."</td></tr>";
											}
											echo "</tbody></table>";
									}


		?>
                         </div>
                    </div>
                </div>
                </div>
               	</div>
               	
				</div>

				<!--
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
			-->
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