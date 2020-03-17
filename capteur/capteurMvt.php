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
	if (isset($_POST['ok'])) {

		
		if($_POST['endroit_capteur'] == "batiment") 
		{
			$id_batiment = $_POST['batiment_capteur'];

			$num_serie=$_POST['num_serie'];
			$description=$_POST['description'];
			$etat=$_POST['etat'];

			$endroit = "batiment";
			$etat_mouvement = $_POST['etat_mouvement'];
			

			$Longitude = $_POST['longitude'];
			$Latitude = $_POST['latitude'];
			$adress_ip = $_POST['adress_ip'];
			$ext_int = $_POST['exterieur_interieur'];

			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$sql = "INSERT INTO capteur_mouvement(Num_serie,Description,Endroit,Etat,etat_mouvement,Longitude,Latitude,adress_ip,exterieur_interieur,id_batiment) values(?,?,?,?,?,?,?,?,?,?)";
			$q = $pdo->prepare($sql);
			$q->execute(array($num_serie,$description,$endroit,$etat,$etat_mouvement,$Longitude,$Latitude,$adress_ip,$ext_int,$id_batiment));
			header("Location: capteurMvt.php");



		}

		if($_POST['endroit_capteur'] == "etage") 
		{
			$id_etage = $_POST['etage_etage_capteur'];
			
			$num_serie=$_POST['num_serie'];
			$description=$_POST['description'];
			$etat=$_POST['etat'];

			$endroit = "etage";
			$etat_mouvement = $_POST['etat_mouvement'];

			$Longitude = $_POST['longitude'];
			$Latitude = $_POST['latitude'];
			$adress_ip = $_POST['adress_ip'];
			$ext_int = $_POST['exterieur_interieur'];

			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$sql = "INSERT INTO capteur_mouvement(Num_serie,Description,Endroit,Etat,etat_mouvement,Longitude,Latitude,adress_ip,exterieur_interieur,id_etage) values(?,?,?,?,?,?,?,?,?,?)";
			$q = $pdo->prepare($sql);
			$q->execute(array($num_serie,$description,$endroit,$etat,$etat_mouvement,$Longitude,$Latitude,$adress_ip,$ext_int,$id_etage));
			header("Location: capteurMvt.php");
		}

		if($_POST['endroit_capteur'] == "salle") 
		{
			$id_salle = $_POST['salle_salle_capteur'];

			$num_serie=$_POST['num_serie'];
			$description=$_POST['description'];
			$etat=$_POST['etat'];

			$endroit = "salle";
			$etat_mouvement = $_POST['etat_mouvement'];

			$Longitude = $_POST['longitude'];
			$Latitude = $_POST['latitude'];
			$adress_ip = $_POST['adress_ip'];
			$ext_int = $_POST['exterieur_interieur'];

			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$sql = "INSERT INTO capteur_mouvement(Num_serie,Description,Endroit,Etat,etat_mouvement,Longitude,Latitude,adress_ip,exterieur_interieur,id_salle) values(?,?,?,?,?,?,?,?,?,?)";
			$q = $pdo->prepare($sql);
			$q->execute(array($num_serie,$description,$endroit,$etat,$etat_mouvement,$Longitude,$Latitude,$adress_ip,$ext_int,$id_salle));
			header("Location: capteurMvt.php");
		}

		if($_POST['endroit_capteur'] == "couloir") 
		{
			$id_couloir = $_POST['couloir_salle_capteur'];
			
			$num_serie=$_POST['num_serie'];
			$description=$_POST['description'];
			$etat=$_POST['etat'];

			$endroit = "couloir";
			$etat_mouvement = $_POST['etat_mouvement'];

			$Longitude = $_POST['longitude'];
			$Latitude = $_POST['latitude'];
			$adress_ip = $_POST['adress_ip'];
			$ext_int = $_POST['exterieur_interieur'];

			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$sql = "INSERT INTO capteur_mouvement(Num_serie,Description,Endroit,Etat,etat_mouvement,Longitude,Latitude,adress_ip,exterieur_interieur,id_couloir) values(?,?,?,?,?,?,?,?,?,?)";
			$q = $pdo->prepare($sql);
			$q->execute(array($num_serie,$description,$endroit,$etat,$etat_mouvement,$Longitude,$Latitude,$adress_ip,$ext_int,$id_couloir));
			header("Location: capteurMvt.php");
		}

		if($_POST['endroit_capteur'] == "escalier") 
		{
			$id_escalier = $_POST['escalier_capteur'];

			$num_serie=$_POST['num_serie'];
			$description=$_POST['description'];
			$etat=$_POST['etat'];

			$endroit = "escalier";
			$etat_mouvement = $_POST['etat_mouvement'];

			$Longitude = $_POST['longitude'];
			$Latitude = $_POST['latitude'];
			$adress_ip = $_POST['adress_ip'];
			$ext_int = $_POST['exterieur_interieur'];

			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$sql = "INSERT INTO capteur_mouvement(Num_serie,Description,Endroit,Etat,etat_mouvement,Longitude,Latitude,adress_ip,exterieur_interieur,id_escalier) values(?,?,?,?,?,?,?,?,?,?)";
			$q = $pdo->prepare($sql);
			$q->execute(array($num_serie,$description,$endroit,$etat,$etat_mouvement,$Longitude,$Latitude,$adress_ip,$ext_int,$id_escalier));
			header("Location: capteurMvt.php");
		}

		if($_POST['endroit_capteur'] == "zone") 
		{
			$id_zone = $_POST['zone_capteur'];
			
			$num_serie=$_POST['num_serie'];
			$description=$_POST['description'];
			$etat=$_POST['etat'];

			$endroit = "zone";
			$etat_mouvement = $_POST['etat_mouvement'];

			$Longitude = $_POST['longitude'];
			$Latitude = $_POST['latitude'];
			$adress_ip = $_POST['adress_ip'];
			$ext_int = $_POST['exterieur_interieur'];

			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$sql = "INSERT INTO capteur_mouvement(Num_serie,Description,Endroit,Etat,etat_mouvement,Longitude,Latitude,adress_ip,exterieur_interieur,id_zone) values(?,?,?,?,?,?,?,?,?,?)";
			$q = $pdo->prepare($sql);
			$q->execute(array($num_serie,$description,$endroit,$etat,$etat_mouvement,$Longitude,$Latitude,$adress_ip,$ext_int,$id_zone));
			header("Location: capteurMvt.php");
		}
  }		
?>
<!DOCTYPE html>
<html lang="fr">


<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Capteur de  mouvement</title>
		
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
						<li class="nav-item active">
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
							<div class="float-right mt-10">
								<a href="javascript: void(0);" class="btn btn-primary btn-rounded box-shadow btn-icon" onclick="$('.capttemp').toggle()">
									<i class="fa fa-plus"></i> Ajouter un capteur de mouvement
								</a>
                            </div>
						Lles capteurs de mouvement
							<p class="text-muted">Liste des capteurs de mouvement</p>
                        </div>
                        <div class="card-body capttemp" style="display: none;">
						<form method="post" action="#">


<div class="row" >

				<div class="col-md-5">
					   <div class="form-group">
						   <label>Endroit</label>
						   <select id="endroit_capteur" name="endroit_capteur" class="form-control form-control-rounded" onchange="changementType();" >
						   <option value="0" disabled selected hidden>Sélectionner un endroit...</option>   
						   <option value="batiment">Batiment</option> 
						   <option value="etage">Etage</option>   
						   <option value="salle">Salle</option>                                  
						   <option value="couloir">Couloir</option>   
						   <option value="escalier">Escalier</option>   
						   <option value="zone">Zone</option>   														
						   </select>
					   </div>
			   </div>
</div>
			   <script type="text/javascript" language="javascript">

					   function changementType() { 

						   var type = document.getElementById("endroit_capteur").value; 

						   if (type == "batiment") 
						   { 
							   $('#endroit_batiment').show();$('#ext_int').show();
							   $('#endroit_etage').hide();
							   $('#endroit_salle').hide();
							   $('#endroit_couloir').hide();
							   $('#endroit_escalier').hide();
							   $('#endroit_zone').hide();

						   } 

						   if (type == "etage") 
						   { 
							   $('#endroit_batiment').hide();$('#ext_int').hide();
							   $('#endroit_etage').show();
							   $('#endroit_salle').hide();
							   $('#endroit_couloir').hide();
							   $('#endroit_escalier').hide();
							   $('#endroit_zone').hide();
						   } 

						   if (type == "salle") 
						   { 
							   $('#endroit_batiment').hide();$('#ext_int').hide();
							   $('#endroit_etage').hide();
							   $('#endroit_salle').show();
							   $('#endroit_couloir').hide();
							   $('#endroit_escalier').hide();
							   $('#endroit_zone').hide();
						   } 

						   if (type == "couloir") 
						   { 
							   $('#endroit_batiment').hide();$('#ext_int').hide();
							   $('#endroit_etage').hide();
							   $('#endroit_salle').hide();
							   $('#endroit_couloir').show();
							   $('#endroit_escalier').hide();
							   $('#endroit_zone').hide();
						   } 

						   if (type == "escalier") 
						   { 
							   $('#endroit_batiment').hide();$('#ext_int').hide();
							   $('#endroit_etage').hide();
							   $('#endroit_salle').hide();
							   $('#endroit_couloir').hide();
							   $('#endroit_escalier').show();
							   $('#endroit_zone').hide();
						   } 

						   if (type == "zone") 
						   { 
							   $('#endroit_batiment').hide();$('#ext_int').show();
							   $('#endroit_etage').hide();
							   $('#endroit_salle').hide();
							   $('#endroit_couloir').hide();
							   $('#endroit_escalier').hide();
							   $('#endroit_zone').show();
						   } 
						   
						   
					   
					   } 

							   
					   </script>


<div class="row" id="endroit_salle" style="display:none">

		   <div class="col-md-4">
				   <div class="form-group">
					   <label>Bâtiment</label>
					   <select id="salle_batiment_capteur" name="salle_batiment_capteur" class="form-control form-control-rounded">
					   <option value="0" disabled selected hidden>Sélectionner un bâtiment...</option>                                   
							   <?php 
								   $sql = "select * from batiment ";
								   foreach ($pdo->query($sql) as $row) 
								   {
									   echo "<option value=".$row['id'].">".$row['nom']."</option>";	
								   }
							   ?>
					   </select>
						   <script src="assets/jquery/jquery.min.js"></script>          
						   <script type="text/javascript">
							   $(document).ready(function(){
									   $("#salle_batiment_capteur").change(function()
									   {
										   var id_bat=$(this).val();
										   var post_id = 'id='+ id_bat;
										   
										   $.ajax
										   ({
											   type: "POST",
											   url: "ajax_salles.php",
											   data: post_id,
											   cache: false,
											   success: function(etages) { $("#salle_etage_capteur").html(etages);} 
										   });
										   
									   });
									   
								   });
					   </script>
					   </div>
				   </div>

	   

			   <div class="col-md-4">
					   <div class="form-group">
						   <label>Etage</label>
						   <select id="salle_etage_capteur" name="salle_etage_capteur" class="form-control form-control-rounded">
						   <option value="0" disabled selected hidden>Sélectionner un étage...</option>                                   

						   </select>
						   <script type="text/javascript">
							   $(document).ready(function(){
									   $("#salle_etage_capteur").change(function()
									   {
										   var id_bat=$(this).val();
										   var post_id = 'id_etage='+ id_bat;
										   
										   $.ajax
										   ({
											   type: "POST",
											   url: "ajax_salles.php",
											   data: post_id,
											   cache: false,
											   success: function(salles) { $("#salle_salle_capteur").html(salles);} 
										   });
										   
									   });
									   
								   });
						   </script>
					   </div>
			   </div>

			   <div class="col-md-4">
					   <div class="form-group">
						   <label>Salle</label>
						   <select id="salle_salle_capteur" name="salle_salle_capteur" class="form-control form-control-rounded">
						   <option value="0" disabled selected hidden>Sélectionner une salle...</option>                                   
						   
						   </select>
					   </div>
			   </div>

   </div>

   <div class="row" id="endroit_batiment" style="display:none">

		   <div class="col-md-4">
				   <div class="form-group">
					   <label>Bâtiment</label>
					   <select id="batiment_capteur" name="batiment_capteur" class="form-control form-control-rounded">
					   <option value="0" disabled selected hidden>Sélectionner un bâtiment...</option>                                   
							   <?php 
								   $sql = "select * from batiment ";
								   foreach ($pdo->query($sql) as $row) 
								   {
									   echo "<option value=".$row['id'].">".$row['nom']."</option>";	
								   }
							   ?>
					   </select>
						   
					   </div>
				   </div>
   </div>

   <div class="row" id="endroit_zone" style="display:none">

		   <div class="col-md-4">
				   <div class="form-group">
					   <label>Zône</label>
					   <select id="zone_capteur" name="zone_capteur" class="form-control form-control-rounded">
					   <option value="0" disabled selected hidden>Sélectionner une zone...</option>                                   
							   <?php 
								   $sql = "select * from zone ";
								   foreach ($pdo->query($sql) as $row) 
								   {
									   echo "<option value=".$row['id'].">".$row['nom']."</option>";	
								   }
							   ?>
					   </select>
						   
					   </div>
				   </div>
   </div>


   <div class="row" id="endroit_etage" style="display:none">

		   <div class="col-md-4">
				   <div class="form-group">
					   <label>Bâtiment</label>
					   <select id="etage_batiment_capteur" name="etage_batiment_capteur" class="form-control form-control-rounded">
					   <option value="0" disabled selected hidden>Sélectionner un bâtiment...</option>                                   
							   <?php 
								   $sql = "select * from batiment ";
								   foreach ($pdo->query($sql) as $row) 
								   {
									   echo "<option value=".$row['id'].">".$row['nom']."</option>";	
								   }
							   ?>
					   </select>
						   <script src="assets/jquery/jquery.min.js"></script>          
						   <script type="text/javascript">
							   $(document).ready(function(){
									   $("#etage_batiment_capteur").change(function()
									   {
										   var id_bat=$(this).val();
										   var post_id = 'id='+ id_bat;
										   
										   $.ajax
										   ({
											   type: "POST",
											   url: "ajax_salles.php",
											   data: post_id,
											   cache: false,
											   success: function(etages) { $("#etage_etage_capteur").html(etages);} 
										   });
										   
									   });
									   
								   });
					   </script>
					   </div>
				   </div>

	   

			   <div class="col-md-4">
					   <div class="form-group">
						   <label>Etage</label>
						   <select id="etage_etage_capteur" name="etage_etage_capteur" class="form-control form-control-rounded">
						   <option value="0" disabled selected hidden>Sélectionner un étage...</option>                                   

						   </select>
						   
					   </div>
			   </div>

   </div>
   
   <!-------------------------------------------------------------------->

   <div class="row" id="endroit_couloir" style="display:none">

		   <div class="col-md-4">
				   <div class="form-group">
					   <label>Bâtiment</label>
					   <select id="couloir_batiment_capteur" name="couloir_batiment_capteur" class="form-control form-control-rounded">
					   <option value="0" disabled selected hidden>Sélectionner un bâtiment...</option>                                   
							   <?php 
								   $sql = "select * from batiment ";
								   foreach ($pdo->query($sql) as $row) 
								   {
									   echo "<option value=".$row['id'].">".$row['nom']."</option>";	
								   }
							   ?>
					   </select>
						   <script src="assets/jquery/jquery.min.js"></script>          
						   <script type="text/javascript">
							   $(document).ready(function(){
									   $("#couloir_batiment_capteur").change(function()
									   {
										   var id_bat=$(this).val();
										   var post_id = 'id='+ id_bat;
										   
										   $.ajax
										   ({
											   type: "POST",
											   url: "ajax_couloirs.php",
											   data: post_id,
											   cache: false,
											   success: function(etages) { $("#couloir_etage_capteur").html(etages);} 
										   });
										   
									   });
									   
								   });
					   </script>
					   </div>
				   </div>

	   

			   <div class="col-md-4">
					   <div class="form-group">
						   <label>Etage</label>
						   <select id="couloir_etage_capteur" name="couloir_etage_capteur" class="form-control form-control-rounded">
						   <option value="0" disabled selected hidden>Sélectionner un étage...</option>                                   

						   </select>
						   <script type="text/javascript">
							   $(document).ready(function(){
									   $("#couloir_etage_capteur").change(function()
									   {
										   var id_bat=$(this).val();
										   var post_id = 'id_etage='+ id_bat;
										   
										   $.ajax
										   ({
											   type: "POST",
											   url: "ajax_couloirs.php",
											   data: post_id,
											   cache: false,
											   success: function(salles) { $("#couloir_salle_capteur").html(salles);} 
										   });
										   
									   });
									   
								   });
						   </script>
					   </div>
			   </div>

			   <div class="col-md-4">
					   <div class="form-group">
						   <label>Couloir</label>
						   <select id="couloir_salle_capteur" name="couloir_salle_capteur" class="form-control form-control-rounded">
						   <option value="0" disabled selected hidden>Sélectionner une salle...</option>                                   
						   
						   </select>
					   </div>
			   </div>

   </div>

   <div class="row" id="endroit_escalier" style="display:none">

		   <div class="col-md-4">
				   <div class="form-group">
					   <label>Bâtiment</label>
					   <select id="escalier_batiment_capteur" name="escalier_batiment_capteur" class="form-control form-control-rounded">
					   <option value="0" disabled selected hidden>Sélectionner un bâtiment...</option>                                   
							   <?php 
								   $sql = "select * from batiment ";
								   foreach ($pdo->query($sql) as $row) 
								   {
									   echo "<option value=".$row['id'].">".$row['nom']."</option>";	
								   }
							   ?>
					   </select>
						   <script src="assets/jquery/jquery.min.js"></script>          
						   <script type="text/javascript">
							   $(document).ready(function(){
									   $("#escalier_batiment_capteur").change(function()
									   {
										   var id_bat=$(this).val();
										   var post_id = 'id='+ id_bat;
										   
										   $.ajax
										   ({
											   type: "POST",
											   url: "ajax_escaliers.php",
											   data: post_id,
											   cache: false,
											   success: function(etages) { $("#escalier_etage_capteur").html(etages);} 
										   });
										   
									   });
									   
								   });
					   </script>
					   </div>
				   </div>

	   

			   <div class="col-md-4">
					   <div class="form-group">
						   <label>Etage</label>
						   <select id="escalier_etage_capteur" name="escalier_etage_capteur" class="form-control form-control-rounded">
						   <option value="0" disabled selected hidden>Sélectionner un étage...</option>                                   

						   </select>
						   <script type="text/javascript">
							   $(document).ready(function(){
									   $("#escalier_etage_capteur").change(function()
									   {
										   var id_bat=$(this).val();
										   var post_id = 'id_etage='+ id_bat;
										   
										   $.ajax
										   ({
											   type: "POST",
											   url: "ajax_escaliers.php",
											   data: post_id,
											   cache: false,
											   success: function(salles) { $("#escalier_capteur").html(salles);} 
										   });
										   
									   });
									   
								   });
						   </script>
					   </div>
			   </div>

			   <div class="col-md-4">
					   <div class="form-group">
						   <label>Escalier</label>
						   <select id="escalier_capteur" name="escalier_capteur" class="form-control form-control-rounded">
						   <option value="0" disabled selected hidden>Sélectionner un escalier...</option>                                   
						   
						   </select>
					   </div>
			   </div>

   </div>





<div class="row">
   
   <div class="col-md-4">
	   <div class="form-group  ">
		   <label>N° serie</label>
		   <input type="text"  name="num_serie" class="form-control form-control-rounded">
	   </div>
   </div>
   
   <div class="col-md-4">
	   <div class="form-group  ">
		   <label>Description</label>
		   <input type="text"  name="description" class="form-control form-control-rounded">
	   </div>
   </div>
   
   <div class="col-md-4">
	  <div class="form-group">
			  <label>Etat</label>
		   <select name="etat" class="form-control form-control-rounded">
			   <option value="0" disabled selected hidden>Sélectionner un état...</option>                                   
			   <option value="En service"> En service</option>
			   <option value="Hors service"> Hors service</option>
		   </select>
	   </div>
   </div>
</div>


   <div class="row" >
   		<div class="col-md-3">
		   <div class="form-group">
			   <label>Etat mouvement</label>
			   <input type="text" name="etat_mouvement" class="form-control form-control-rounded">
		   </div>
	   </div>
	   <div class="col-md-3">
		   <div class="form-group">
			   <label>Longitude</label>
			   <input type="text" name="longitude" class="form-control form-control-rounded">
		   </div>
	   </div>

	   <div class="col-md-3">
		   <div class="form-group">
			   <label>Latitude</label>
			   <input type="text" name="latitude" class="form-control form-control-rounded">
		   </div>
	   </div>

	   <div class="col-md-3">
		   <div class="form-group">
			   <label>Adresse IP</label>
			   <input type="text" name="adress_ip" class="form-control form-control-rounded">
		   </div>
	   </div>

	   <div class="col-md-3" id="ext_int" style="display:none">
		   <div class="form-group">
			   <label>Extérieur / Intérieur</label>
			   <select name="exterieur_interieur" class="form-control form-control-rounded">
			   <option value="0" disabled selected hidden>Sélectionner un positionnement...</option>                                   
			   <option value="Exterieur"> Extérieur</option>
			   <option value="Interieur"> Intérieur</option>
		   </select>
		   </div>
	   </div>

	   
   </div>

   <div class="row text-center" style="margin:auto">
   <div class="col-md-12">
	   <div class="form-group">
		   <input type="submit" name="ok" value="Ajouter" width="40%" class="btn btn-sm btn-success">
	   </div>
   </div>
   </div>

   
   
</div>

   


</form>
						

                        <div class="nv" style="padding: 15px;">
							<nav class="nav nav-pills flex-column flex-sm-row">
  								<a class="flex-sm-fill text-sm-center nav-link " href="../capteur.php">
  									Capteur du témperature
  								</a>
  								<a class="flex-sm-fill text-sm-center nav-link " href="capteurHumidite.php">
  									Capteur d'humidité
  								</a>
  								<a class="flex-sm-fill text-sm-center nav-link active" href="capteurMvt.php">
  									Capteur de mouvement
  								</a>
   								<a class="flex-sm-fill text-sm-center nav-link" href="capteurIncendie.php">
   									Détecteur d'incendies
   								</a>
  								
							</nav>
						</div>

                    <div class="card-body">	
                        <table id="datatable1" class="table table-striped dt-responsive nowrap table-hover">
                            <thead>
                            	<tr>
                                    <th class="text-center">
                                        <strong>ID</strong>
                                    </th>
                                    <th class="text-center">
                                        <strong>N° serie</strong>
                                    </th>
                                    <th class="text-center">
                                        <strong>Description</strong>
                                    </th>
                                    <th class="text-center">
                                        <strong>Etat</strong>
                                    </th>
                                    <th class="text-center">
                                        <strong>Endroit</strong>
                                    </th>
                                    <th class="text-center">
                                        <strong>Etat mouvement</strong>
                                    </th>
                                    <th class="text-center">
                                        <strong>Actions</strong>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                	<?php 
                                    	$sql = "select * from  capteur_mouvement";
                                    	foreach ($pdo->query($sql) as $row) 
										{
										echo '<tr style="text-align:center">';
										echo '<td>'. $row['id'] . '</td>'; $id= $row['id'] ;

										echo '<td>'. $row['Num_serie'] . '</td>';
										echo '<td>'. $row['Description'] . '</td>';
										echo '<td>'. $row['Etat'] . '</td>';
										echo '<td>'. $row['Endroit'] . '</td>';
										echo '<td>'. $row['etat_mouvement'] . '</td>';
										echo "
											<td class='text-center'>
											<button type='button' class='btn btn-sm btn-default'>
												<a href='capteurplus.php?id=".$row['id']."&table=capteur_mouvement' >
                                        		<i class='fa fa-plus'></i>
                                        	</button>
											<button type='button' class='btn btn-sm btn-success'>
												<a href='capteurMvtEdit.php?val=".$row['id']."&tab=capteur_mouvement' >
												<i class='fa fa-edit'></i>
												</a>
											</button>
											<button type='button' class='btn btn-sm btn-danger'>
												<a href='capteurDelet.php?val=".$row['id']."&tab=capteur_mouvement'  >
												<i class='fa fa-trash'></i>
												</a>
											</button>
                                    		</td>
                                    		</tr>";

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