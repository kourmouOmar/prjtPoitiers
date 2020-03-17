<?php 
include '../DB.php'; $pdo = Database::connect(); 
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
$id_salle = $_REQUEST['val'];
$sql = "select * from salle where  id=$id_salle";
foreach ($pdo->query($sql) as $row) {

	$num_salle= $row['Num_salle'] ;
	$description= $row['Description'] ;
	$id_categorie= $row['id_categorie'];
	$etat= $row['Etat'];
	$nbr_f= $row['nbr_fenetres'];
	$nbr_p= $row['nbr_portes'];	
	$id_etage = $row['id_etage'];
}

$servername = "localhost";$username = "root";$password = "";$dbname = "poitiers-demo";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
								
	if (isset($_POST['modifier'])) {
		$id_salle = $_REQUEST['val'];
		$nom_salle =$_POST["nom_salle"];
		$description_salle = $_POST["description_salle"];
		$id_categorie =$_POST["categorie_salle"];
		$nbr_fenetres =$_POST["nbr_fenetres"];
		$nbr_portes =$_POST["nbr_portes"];
		$etat = $_POST["etat_salle"];
		$id_etage_salle = $_POST["etage_salle"];

							
		$sql = "UPDATE salle set Num_salle = ?,Description = ?, id_categorie = ?, Etat = ? , nbr_fenetres = ? , nbr_portes = ? , id_etage = ? WHERE id = ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($nom_salle,$description_salle,$id_categorie,$etat,$nbr_fenetres,$nbr_portes,$id_etage_salle,$id_salle));
		
		if(!empty($_FILES['image'])){
			$id_salle = $_REQUEST['val'];
			$imageEN = $_POST['imageEN'];
			$path =basename($_FILES['image']['name']);
			$dossier="../images/";
			$fileExt=explode('.', $path);
			$fileExt=end($fileExt);
		
			$ex =array("jpg","png","gif","bmp");
	
			if (in_array($fileExt, $ex)) 
			$path=strtr($path,'{}()[]','______');
			if (move_uploaded_file($_FILES['image']['tmp_name'] , $dossier.$path))
			
	
			$sql = "UPDATE image SET path='$path' WHERE id_salle=$id_salle"; 
			$conn->query($sql);
			
			unlink("../images/$imageEN");
		}
		
		header("Location: ../salles.php");
	}
							
  		
    ?>
<!DOCTYPE html>
<html lang="fr">

<style type="text/css">
	 a{ text-decoration: none;"}
</style>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modifier une salle</title>
		
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
						<li class="nav-item">
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

	<?php 
		$sql2 = "select * from etage where id=".$id_etage;
		foreach ($pdo->query($sql2) as $row2) 
		{
			echo "<option value='0' disabled selected hidden>".$row2['nom']."</option> ";
				$id_batiment = 	$row2['id_batiment'];					
				$nom_etage = $row2['nom'];

				$sql3 = "select * from batiment where id=".$id_batiment;
				foreach ($pdo->query($sql3) as $row3) {$nom_batiment = 	$row3['nom'];}

													

			}

												

                                    			
        ?> 
			
		<!-- ============================================================== -->
		<!-- 						Content Start	 						-->
		<!-- ============================================================== -->
		
        <section class="main-content">
            <div class="row w-no-padding margin-b-30">
            </div>

			<div class="row">
									<div class="col-md-12">
										<div class="card">

											<div class="card-header card-default">Modifier une salle
											<p class="text-muted">Modifier les informations que vous voulez modifier</p>
											</div>

										<div class="card-body " >
										
											<form method="post"  enctype="multipart/form-data">

											<div class="row">
												
												<div class="col-md-6">
												<div class="form-group">
											<label>Bâtiment</label>
											
											<select id="batiment_salle" name='batiment_salle' style="border-color:red;" class="form-control form-control-rounded ">
											<option value="0" disabled selected hidden>Choisir un bâtiment...</option> 
											<?php 
								
                                    			$sql = "select * from batiment";
												foreach ($pdo->query($sql) as $row) 
												{
													echo "<option value=".$row['id'].">".$row['nom']."</option>";	
												}
                                    		?>
											                                  

											
											</select>
												<script src="../assets/jquery/jquery.min.js"></script>          
												<script type="text/javascript">
													$(document).ready(function(){
															$("#batiment_salle").change(function()
															{
																var id_bat=$(this).val();
																var post_id = 'id='+ id_bat;
																
																$.ajax
																({
																	type: "POST",
																	url: "../ajax_salles.php",
																	data: post_id,
																	cache: false,
																	success: function(etages) { $("#etage_salle").html(etages);} 
																});
																
															});
															
														});
													</script>
										                      	
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label>Etage</label>
											<select id="etage_salle" name='etage_salle' style="border-color:red;"class="form-control form-control-rounded">
											<option value="0" disabled selected hidden>Choisir un étage...</option> 
											 
											</select>
											
										</div>
									</div>

								
								
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group  ">
                                    	<label>Nom de la salle</label>
                                    	<input type="text"  name="nom_salle" value="<?php echo $num_salle ?>" class="form-control form-control-rounded">
                                	</div>
								</div>

								<div class="col-md-4">
									<div class="form-group  ">
                                    	<label>Description</label>
                                    	<input type="text"  name="description_salle" value="<?php echo $description ?>" class="form-control form-control-rounded">
                                	</div>
								</div>

								<div class="col-md-4">
									<div class="form-group a">
                                    	<label>Catégorie</label>
                                    	<select name='categorie_salle' style="border-color:red;" class="form-control form-control-rounded">
										<option value="" disabled selected hidden>Choisir une catégorie...</option> 
										<?php 
                                    			$sql = "select * from categorie_salle ";
												foreach ($pdo->query($sql) as $row) 
												{
													echo '<option value="'.$row['id'].'">'.$row['id'].' - '.$row['nom'].'</option>';	
												}
                                    		?>
										                                
                                    		
                                    	</select>
                                	</div>
								</div>
								
							</div>

							
							<div class="row">

							<div class="col-md-4">
								<div class="form-group">
											<label>Etat</label>
												<select name="etat_salle" style="border-color:red" class="form-control m-b">
												<option value="" disabled selected hidden>Choisir un état...</option>                                   
													<option value="En service">En service</option>
													<option value="Hors service">Hors service</option>
												</select>
										</div>
								</div>

								<div class="col-md-4">
									<div class="form-group  ">
                                    	<label>Nombre de fenêtres</label>
                                    	<input type="text" name="nbr_fenetres" value="<?php echo $nbr_f ?>" class="form-control form-control-rounded">
                                	</div>
								</div>

								<div class="col-md-4">
								<div class="form-group  ">
                                    	<label>Nombre de portes</label>
                                    	<input type="text"  name="nbr_portes" value="<?php echo $nbr_p ?>" class="form-control form-control-rounded">
                                	</div>
								</div>
								
							</div>

							<div class="row">
								<div class="col-md-6">
									<?php 
										$sl="SELECT * FROM image where id_salle=".$id_salle;
										foreach ($pdo->query($sl) as $row){
											$path_img=$row['path'];
										} 
										
									?>
									<img src="../images/<?php  echo  $path_img;?>" width=400px alt=""> 
									<input type="text" name="imageEN" value="<?php echo $path_img ?>">
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Image</label>
										
											<div class="fileinput fileinput-new input-group col-md-12" data-provides="fileinput">
											  <div class="form-control" data-trigger="fileinput"><span class="fileinput-filename"></span></div>
											  <span class="input-group-addon btn btn-primary btn-file ">
											  <span class="fileinput-new">Selectionner</span>
											  <span class="fileinput-exists">Changer</span>
											  <input type="file"  name="image">
											  </span>
											  <a href="#" class="input-group-addon btn btn-danger  hover fileinput-exists" data-dismiss="fileinput">Supprimer</a>
											</div>
									</div>
								</div><br>
								<div class="col-md-12 text-center">
									<div class="form-group">
										<input type="submit" name="modifier" value="Modifier" width="500px" class="btn btn-sm btn-success">
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