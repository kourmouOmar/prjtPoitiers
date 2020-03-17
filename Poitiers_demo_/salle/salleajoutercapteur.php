<?php 
include '../DB.php';
$pdo = Database::connect();
$id_salle = $_REQUEST['val'];


	

	if (isset($_POST['ok1'])) {
		$nom=$_POST['nom'];
		$description=$_POST['description'];
		$etat=$_POST['etat'];
		$id_salle=$_POST['id_salle'];
		$humidmin=$_POST['humidmin'];
		$humidmax=$_POST['humidmax'];
		$humidreel=$_POST['humidreel'];
		$endroit=$_POST['endroit'];
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO capteur_humudité(Num_serie,Description,Endroit,Etat,Humid_max,Humid_min,Humid_reelle,id_salle) values(?,?,?,?,?,?,?,?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($nom,$description,$endroit,$etat,$humidmax,$humidmin,$humidreel,$id_salle));
		header("Location: ../salles.php");				
				
  	}	
  	if (isset($_POST['ok2'])) {
  		$nom=$_POST['nom'];
		$description=$_POST['description'];
		$etat=$_POST['etat'];
		$id_salle=$_POST['id_salle'];
		$etatencendie=$_POST['etatencendie'];
		$endroit=$_POST['endroit'];
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO capteur_detecteur_incendie(Num_serie,Description,Endroit,Etat,etat_incendie,id_salle) values(?,?,?,?,?,?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($nom,$description,$endroit,$etat,$etatencendie,$id_salle));
		header("Location: ../salles.php");
  	}
  	if (isset($_POST['ok3'])){
  		$nom=$_POST['nom'];
		$description=$_POST['description'];
		$etat=$_POST['etat'];
		$id_salle=$_POST['id_salle'];
		$etatmvt=$_POST['etatmvt'];
		$endroit=$_POST['endroit'];
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO capteur_mouvement(Num_serie,Description,Endroit,Etat,etat_mouvement,id_salle) values(?,?,?,?,?,?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($nom,$description,$endroit,$etat,$etatmvt,$id_salle));
		header("Location: ../salles.php");
  	}
  	if (isset($_POST['ok4'])) {
  		
		$nom=$_POST['nom'];
		$description=$_POST['description'];
		$etat=$_POST['etat'];
		$id_salle=$_POST['id_salle'];
		$tempmin=$_POST['tempmin'];
		$tempmax=$_POST['tempmax'];
		$tempreel=$_POST['tempreel'];
		$endroit=$_POST['endroit'];
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO capteur_temperature(Num_serie,Description,Endroit,Etat,Temp_max,Temp_min,Temp_reelle,id_salle) values(?,?,?,?,?,?,?,?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($nom,$description,$endroit,$etat,$tempmin,$tempmax,$tempreel,$id_salle));
		header("Location: ../salles.php");
  	}


								$sql = "select * from salle where id=$id_salle ";
								foreach ($pdo->query($sql) as $row) 
								{
									$num= $row['Num_salle'];
									$id_etage=$row['id_etage'];

									$sql1 = "select * from etage where id=$id_etage ";
									foreach ($pdo->query($sql1) as $row) {
										$numm=$row['nom'];
										$id_bat=$row['id_batiment'];
									}
									$sql2 = "select * from batiment where id=$id_bat ";
									foreach ($pdo->query($sql2) as $row) {
										$nom=$row['nom'];
									}

									
								}
								
?>
<!DOCTYPE html>
<html lang="en">

<style type="text/css">
	 a{
	  text-decoration: none;"
	 	}
</style>
<script type="text/javascript">

	function f1(){
		$('.capttemp').show();
		$('.capthumidité').hide();
		$('.captincendie').hide();
		$('.captmvt').hide();
	}	
	function f2(){
		$('.capttemp').hide();
		$('.capthumidité').show();
		$('.captincendie').hide();
		$('.captmvt').hide();
	}	
	function f3(){
		$('.capttemp').hide();
		$('.capthumidité').hide();
		$('.captincendie').hide();
		$('.captmvt').show();
	}	
	function f4(){
		$('.capttemp').hide();
		$('.capthumidité').hide();
		$('.captincendie').show();
		$('.captmvt').hide();
	}	

</script>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ajouter un capteur</title>
		
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
							<h1>UIT Poitiers</h1>
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
									Admin
								</a>
								<ul class="dropdown-menu top-dropdown">
									<li>
										<a class="dropdown-item" href="javascript:%20void(0);"><i class="icon-bell"></i> Activities</a>
									</li>
									<li>
										<a class="dropdown-item" href="../profile.php"><i class="icon-user"></i> Profile</a>
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
                        <p class="lead margin-b-0 toggle-none">Mr Admin</p>
                        <p class="text-muted mv-0 toggle-none">Welcome</p>						
                    </div>
					
                    <ul class="metisMenu nav flex-column" id="menu">
                        <!--<li class="nav-heading"><span>MAIN</span></li>-->	
						<li class="">
							<a class="nav-link" href="../accueil.php">
								<i class="fa fa-home"></i> 
								<span class="toggle-none">Accueil</span>
							</a>
						</li>
						<li class="nav-item  ">
							<a class="nav-link"  href="../capteur.php" aria-expanded="false">
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
						<li class="nav-item active">
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
                            <a class="nav-link"  href="#" aria-expanded="false">
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
							Ajouter un capteur à la salle :<?php  echo "$num  // $numm // $nom"; ?>

						<p class="text-muted">Entrez les informations nécessaires</p>
							<div class="nv" style="padding: 15px;">
							<nav class=" nav nav-pills flex-column flex-sm-row">
  								<button class="btn-success flex-sm-fill text-sm-center nav-link clickable "  
  								onclick="f1()">
  									Capteur de température
  								</button>
  								<button class=" btn-success flex-sm-fill text-sm-center nav-link clickable" 
  								 onclick="f2()" 
  								>
  									Capteur d'humidité
  								</button>
  								<button class="btn-success flex-sm-fill text-sm-center nav-link clickable" 
  								 onclick="f3()">
  									Capteur de mouvement
  								</button>
   								<button class=" btn-success flex-sm-fill text-sm-center nav-link clickable" 
   								  onclick="f4()">
   									Détecteur d'incendies
   								</button>
  								
							</nav>



						</div>
                        </div>
                        <div class="card-body " >
                        </div>
                        

            <!--  capteur humidité -->
            <div class="card-body capthumidité" style="display: none;">
            	
                         	<form method="post" >
							<div class="row">
								<div class="col-md-4">
									<div class="form-group  ">
                                    	<label>N° serie</label>
                                    	<input type="text"  name="nom" class="form-control form-control-rounded">
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
                                    	<select name='etat' class="form-control form-control-rounded">
                                    		<option value="en service">En service</option>
                                    		<option value="hort service">Hors service</option>
                                    	</select>
                                	</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label>salle</label>
										<select name="id_salle" class="form-control form-control-rounded">
										<?php 
											$sql = "select * from salle ";
											foreach ($pdo->query($sql) as $row) 
											{
												echo "<option value=".$row['id'].">".$row['Num_salle']."</option>";	
											}
										?>
										</select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Humidité minimale</label>
										<input type="text" name="humidmin" class="form-control form-control-rounded">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Humidité maximale</label>
										<input type="text" name="humidmax" class="form-control form-control-rounded">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Humidité réelle</label>
										<input type="text" name="humidreel" class="form-control form-control-rounded">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Endroit</label>
										<input type="text" name="endroit" class="form-control form-control-rounded">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="submit" name="ok1" value="ajouter" width="500px" class="btn btn-sm btn-success">
									</div>
								</div>
							</div>
							
                                
                          </form>
            </div>	 
            <!--  end   --> 
            <!-- incendie --> 
           	<div class="card-body captincendie" style="display: none;">
               	
                         	<form method="post" action="#">
							<div class="row">
								<div class="col-md-4">
									<div class="form-group  ">
                                    	<label>N° serie</label>
                                    	<input type="text"  name="nom" class="form-control form-control-rounded">
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
                                    	<select name='etat' class="form-control form-control-rounded">
                                    		<option value="en service">En service</option>
                                    		<option value="hort service">Hors service</option>
                                    	</select>
                                	</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label>Salle</label>
										<select name="id_salle" class="form-control form-control-rounded">
										<?php 
											$sql = "select * from salle ";
											foreach ($pdo->query($sql) as $row) 
											{
												echo "<option value=".$row['id'].">".$row['Num_salle']."</option>";	
											}
										?>
										</select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Etat d'incendie</label>
										<input type="text" name="etatencendie" value="non" class="form-control form-control-rounded">
									</div>
								</div>
								
								<div class="col-md-4">
									<div class="form-group">
										<label>Endroit</label>
										<input type="text" name="endroit" class="form-control form-control-rounded">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="submit" name="ok2" value="ajouter" width="500px" class="btn btn-sm btn-success">
									</div>
								</div>
							</div>
							
                                
                          </form>
            </div>        
            <!-- end -->  
            <!-- mvt -->
            <div class="card-body captmvt" style="display: none;">
                   	
                         	<form method="post" action="#">
							<div class="row">
								<div class="col-md-4">
									<div class="form-group  ">
                                    	<label>N° serie</label>
                                    	<input type="text"  name="nom" class="form-control form-control-rounded">
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
                                    	<select name='etat' class="form-control form-control-rounded">
                                    		<option value="en service">En service</option>
                                    		<option value="hort service">Hors service</option>
                                    	</select>
                                	</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label>Salle</label>
										<select name="id_salle" class="form-control form-control-rounded">
										<?php 
											$sql = "select * from salle ";
											foreach ($pdo->query($sql) as $row) 
											{
												echo "<option value=".$row['id'].">".$row['Num_salle']."</option>";	
											}
										?>
										</select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Etat de mouvement</label>
										<input type="text" name="etatmvt" value="non" class="form-control form-control-rounded">
									</div>
								</div>
								
								<div class="col-md-4">
									<div class="form-group">
										<label>Endroit</label>
										<input type="text" name="endroit" class="form-control form-control-rounded">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="submit" name="ok3" value="ajouter" width="500px" class="btn btn-sm btn-success">
									</div>
								</div>
							</div>
							
                                
                          </form>
            </div>
            <!-- end -->
            <!-- capteur temperateur  --> 
            <div class="card-body capttemp" style="display: none;">

                         	<form method="post" action="#">
							<div class="row">
								<div class="col-md-4">
									<div class="form-group  ">
                                    	<label>N° serie</label>
                                    	<input type="text"  name="nom" class="form-control form-control-rounded">
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
                                    	<select name='etat' class="form-control form-control-rounded">
                                    		<option value="en service">En service</option>
                                    		<option value="hort service">Hors service</option>
                                    	</select>
                                	</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label>Salle</label>
										<select name="id_salle" class="form-control form-control-rounded">
										<?php 
											$sql = "select * from salle ";
											foreach ($pdo->query($sql) as $row) 
											{
												echo "<option value=".$row['id'].">".$row['Num_salle']."</option>";	
											}
										?>
										</select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Température minimale</label>
										<input type="text" name="tempmin" class="form-control form-control-rounded">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Température maximale</label>
										<input type="text" name="tempmax" class="form-control form-control-rounded">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Température réelle</label>
										<input type="text" name="tempreel" class="form-control form-control-rounded">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Endroit</label>
										<input type="text" name="endroit" class="form-control form-control-rounded">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="submit" name="ok4" value="ajouter" width="500px" class="btn btn-sm btn-success">
									</div>
								</div>
							</div>
							
                                
                          </form>
            </div>
            <!-- end -->            
				
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