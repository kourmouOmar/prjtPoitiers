<?php  

include 'DB.php'; $pdo = Database::connect(); 
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
		
		$nom=$_POST['nom'];
		$description=$_POST['description'];
		$endroit=$_POST['endroit'];
		$etat=$_POST['etat'];
		$categorie=$_POST['categorie'];
		$etat_utilisation=$_POST['etat_utilisation'];
		$id_salle=$_POST['salle_climatiseur'];
		
		


		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO climatiseur(Num_serie,Description,endroit,etat,categorie,etat_utilisation,id_salle) values(?,?,?,?,?,?,?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($nom,$description,$endroit,$etat,$categorie,$etat_utilisation,$id_salle));
		header("Location: climatiseur.php");
  }		
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Climatiseurs</title>
		
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
									<?php echo $prenom; ?>
								</a>
								<ul class="dropdown-menu top-dropdown">
									<li>
										<a class="dropdown-item" href="javascript:%20void(0);"><i class="icon-bell"></i> Activitées</a>
									</li>
									<li>
										<a class="dropdown-item" href="profile.php"><i class="icon-user"></i> Profil</a>
									</li>
									<li>
										<a class="dropdown-item" href="javascript:%20void(0);"><i class="icon-settings"></i> Paramètres</a>
									</li>
									<li class="dropdown-divider"></li>
									<li>
										<a class="dropdown-item" href="index.php"><i class="icon-logout"></i>Déconnexion</a>									</li>
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
                        <p class="lead margin-b-0 toggle-none">Mr <?php echo $prenom; ?></p>
                        <p class="text-muted mv-0 toggle-none">Bonjour</p>						
                    </div>
					
                    <ul class="metisMenu nav flex-column" id="menu">
                        <!--<li class="nav-heading"><span>MAIN</span></li>-->	
						<li class="">
							<a class="nav-link" href="accueil.php">
								<i class="fa fa-home"></i> 
								<span class="toggle-none">Accueil</span>
							</a>
						</li>
						<li class="nav-item  ">
							<a class="nav-link"  href="batiment.php" aria-expanded="false">
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
                        <li class="nav-item ">
							<a class="nav-link"  href="couloirs.php" aria-expanded="true">
							<i class="fa fa-list"></i> 
							<span class="toggle-none">Couloirs</span>
							</a>
						</li>
						<li class="nav-item ">
							<a class="nav-link"  href="escalier.php" aria-expanded="true">
							<i class="fa fa-list"></i> 
							<span class="toggle-none">Escaliers</span>
							</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link"  href="salles.php" aria-expanded="true">
							<i class="fa fa-th-large"></i> 
							<span class="toggle-none">Salles</span>
							</a>
						</li>
						<li class="nav-item ">
							<a class="nav-link"  href="zone.php" aria-expanded="true">
							<i class="fa fa-list"></i> 
							<span class="toggle-none">Zone</span>
							</a>
						</li>
						<li class="nav-item ">
                            <a class="nav-link"  href="#" aria-expanded="false">
                            <i class="fa fa-camera"></i> 
                            <span class="toggle-none">Cameras</span>
                            </a>
                        </li>
						<li class="nav-item ">
                            <a class="nav-link"  href="capteur.php" aria-expanded="false">
                            <i class="fa fa-thermometer"></i> 
                            <span class="toggle-none">Capteurs</span>
                            </a>
                        </li>
						
                        <li class="nav-item ">
                            <a class="nav-link"  href="climatiseur.php" aria-expanded="false">
                            <i class="fa fa-thermometer"></i> 
                            <span class="toggle-none">Climatiseurs</span>
                            </a>
                        </li>

						<li class="nav-item">
                            <a class="nav-link" href="alert.php" aria-expanded="false">
                            	<i class="fa fa-warning"></i> 
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
									<i class="fa fa-plus"></i> Ajouter un climatiseur
								</a>
                            </div>
							Les climatiseurs
							<p class="text-muted">Liste des climatiseurs</p>
                        </div>
						<div class="card-body capttemp" style="display: none;">
                         	<form method="post" action="#">
							 <div class="row">

									<div class="col-md-4">
										<div class="form-group">
											<label>Bâtiment</label>
											<select id="batiment_climatiseur" class="form-control form-control-rounded">
											<option value="0" disabled selected hidden>Sélectionner un bâtiment...</option>                                
													<?php 
														$sql = "select * from batiment";
														foreach ($pdo->query($sql) as $row) 
														{
															echo "<option value=".$row['id'].">".$row['nom']."</option>";	
														}
													?>
											</select>
											<script src="assets/jquery/jquery.min.js"></script>          
											<script type="text/javascript">
												$(document).ready(function(){
														$("#batiment_climatiseur").change(function()
														{
															var id_bat=$(this).val();
															var post_id = 'id='+ id_bat;
															
															$.ajax
															({
																type: "POST",
																url: "ajax_salles.php",
																data: post_id,
																cache: false,
																success: function(etages) { $("#etage_climatiseur").html(etages);} 
															});
															
														});
														
													});
										</script>
										</div>
									</div>

									<div class="col-md-4">
										<div class="form-group">
											<label>Etage</label>
											<select id="etage_climatiseur" class="form-control form-control-rounded">
											<option value="0" disabled selected hidden>Sélectionner un étage...</option>                                   
											
											</select>
											<script type="text/javascript">
												$(document).ready(function(){
														$("#etage_climatiseur").change(function()
														{
															var id_bat=$(this).val();
															var post_id = 'id_etage='+ id_bat;
															
															$.ajax
															({
																type: "POST",
																url: "ajax_salles.php",
																data: post_id,
																cache: false,
																success: function(etages) { $("#salle_climatiseur").html(etages);} 
															});
															
														});
														
													});
										</script>
											
										</div>
								</div>

								<div class="col-md-4">
										<div class="form-group">
											<label>Salle</label>
											<select id="salle_climatiseur" name="salle_climatiseur" class="form-control form-control-rounded">
											<option value="0" disabled selected hidden>Sélectionner une salle...</option>                                   
											
											</select>
											
										</div>
								</div>

								</div>


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
									<div class="form-group  ">
                                    	<label>Catégorie</label>
                                    	<select name="categorie" class="form-control form-control-rounded">
											<option value="0" disabled selected hidden>Sélectionner une catégorie...</option>                                   
                                    		<option value="Programmable">Programmable</option>
                                    		<option value="Non programmable">Non programmable</option>
                                    	</select>
                                	</div>
								</div>
								
							</div>

							
							<div class="row">
								<div class="col-md-4">
                                   <div class="form-group">
                                   		<label>Etat</label>
                                    	<select name='etat' class="form-control form-control-rounded">
											<option value="0" disabled selected hidden>Sélectionner un état...</option>                                   
                                    		<option value="En service"> En service</option>
                                    		<option value="Hors service"> Hors service</option>
                                    	</select>
                                	</div>
								</div>

								<div class="col-md-4">
                                   <div class="form-group">
                                   		<label>Etat d'utilisation</label>
                                    	<select name='etat_utilisation' class="form-control form-control-rounded">
											<option value="0" disabled selected hidden>Sélectionner un état d'utilisation...</option>                                   
                                    		<option value="Oui">Oui</option>
                                    		<option value="Non">Non</option>
                                    	</select>
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
										<input type="submit" name="ok" value="Ajouter" width="500px" class="btn btn-sm btn-success">
									</div>
								</div>
							</div>
							
                                
                          </form>
                        </div>


                        <div class="card-body">
                                <table id="datatable1" class="table table-striped dt-responsive nowrap table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                <strong>ID</strong>
                                            </th>
                                            <th class="text-center">
                                                <strong>Nom</strong>
                                            </th>
                                            <th class="text-center">
                                                <strong>Description</strong>
                                            </th>
											<th class="text-center">
                                                <strong>Endroit</strong>
                                            </th>
                                            <th class="text-center">
                                                <strong>Etat</strong>
                                            </th>
                                            <th class="text-center">
                                                <strong>Catégorie</strong>
                                            </th>
											<th class="text-center">
                                                <strong>Etat d'utilisation</strong>
                                            </th>
                                            <th class="text-center">
                                                <strong>Actions</strong>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php 

                                    	$sql = "select * from climatiseur";
                                    	foreach ($pdo->query($sql) as $row) 
										{
										echo '<tr style="text-align:center">';
										echo '<td>'. $row['id'] . '</td>'; $id = $row['id'];
										echo '<td>'. $row['Num_serie'] . '</td>';
										echo '<td>'. $row['Description'] . '</td>';
										echo '<td>'. $row['endroit'] . '</td>';
										echo '<td>'. $row['etat'] . '</td>';
										echo '<td>'. $row['categorie'] . '</td>';
										echo '<td>'. $row['etat_utilisation'] . '</td>';
											
										echo "<td class='text-center'>
                                                <button type='button' class='btn btn-sm btn-default'>
                                                	<a href='climatiseur/climPlus.php?val=".$id."'>
                                                	<i class='fa fa-plus'></i>
                                                	</a>
                                                </button>
												<button type='button' class='btn btn-sm btn-success'>
													<a href='climatiseur/climEdit.php?val=".$id."'>
													<i class='fa fa-edit'></i>
													</a>
												</button>
												<button type='button' class='btn btn-sm btn-danger'>
													<a href='climatiseur/climDelet.php?val=".$id."'>
														<i class='fa fa-trash'></i>
													</a>
												</button>
                                            </td>";
										echo '</tr>';
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
        <script src="assets/lib/jquery/dist/jquery.min.js"></script>
		<script src="assets/lib/bootstrap/js/popper.min.js"></script>
        <script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/lib/pace/pace.min.js"></script>
        <script src="assets/lib/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
        <script src="assets/lib/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/lib/nano-scroll/jquery.nanoscroller.min.js"></script>
        <script src="assets/lib/metisMenu/metisMenu.min.js"></script>
        <script src="assets/js/custom.js"></script>
			
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
		
    </body>

</html>