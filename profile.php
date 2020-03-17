<?php 
	
	include 'DB.php'; $pdo = Database::connect(); 
	session_start();
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
    	$prenom=$_POST['prenom'];
    	$tel=$_POST['tel'];
    	$email=$_POST['email'];
    	$login=$_POST['login'];
    	$password=$_POST['password'];

    	$sql = "UPDATE utilisateur set Nom = ?, Prenom = ?, login = ? , password = ? , email = ?, telephone = ? WHERE id = ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($nom,$prenom,$login,$password,$email,$tel,$id_utilisateur));
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Profile</title>

        <!-- Common Plugins -->
        <link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		
        <!-- Custom Css-->
        <link href="assets/scss/style.css" rel="stylesheet">
		
        
    </head>
    <body>

			<!-- ============================================================== -->
			<!-- 						Topbar Start 							-->
			<!-- ============================================================== -->
			<div class="top-bar primary-top-bar">
			<div class="container-fluid">
				<div class="row">
					<div class="col">
						<a class="admin-logo " href="accueil.php">
							<h1 style="color: darkgray">IUT Poitiers</h1>
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
					</div>
					<div class="col">
						<ul class="list-inline top-right-nav">
							<li class="dropdown icons-dropdown d-none-m">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-envelope"></i> <div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div></a>
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
							<li class="dropdown d-none-m">
								<a class="right-sidebar-toggle" href="javascript:%20void(0);"><i class="fa fa-align-right"></i></a>
							</li>
							<li class="dropdown avtar-dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#">
									<img alt="" class="rounded-circle" src="assets/img/avtar-2.png" width="30">
									<?php echo $prenom; ?>
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
										<a class="dropdown-item" href="index.php"><i class="icon-logout"></i>Logout</a>									</li>
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
		<!--                        Right Side Start                        -->
		<!-- ============================================================== -->
		<nav class="toggle-sidebar" id="right-sidebar-toggle">
			<div class="nano">
				<div class="nano-content">
					<div>
						<ul class="list-inline nav-tab-card clearfix" role="tablist">
							
							<li class="active" role="presentation">
								<a aria-controls="friends" data-toggle="tab" href="#friends" role="tab">Friends</a>
							</li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="friends" role="tabcard">
								<ul class="list-unstyled sidebar-contact-list">
									<li class="clearfix">
										<a class="media-box" href="#"><span class="float-right"><span class="circle circle-success circle-lg"></span></span> <span class="float-left">
										 <img alt="user" class="media-box-object rounded-circle" src="assets/img/avtar-2.png" width="50"></span>
										 <span class="media-box-body"><span class="media-box-heading"><strong>John Doe</strong><br>
										<small class="text-muted">Designer</small></span></span></a>
									</li>
									<li class="clearfix">
										<a class="media-box" href="#"><span class="float-right"><span class="circle circle-success circle-lg"></span></span> <span class="float-left">
										 <img alt="user" class="media-box-object rounded-circle" src="assets/img/avtar-1.png" width="50"></span>
										 <span class="media-box-body"><span class="media-box-heading"><strong>Govinda Doe</strong><br>
										<small class="text-muted">Designer</small></span></span></a>
									</li>
									<li class="clearfix">
										<a class="media-box" href="#"><span class="float-right"><span class="circle circle-danger circle-lg"></span></span> <span class="float-left">
										 <img alt="user" class="media-box-object rounded-circle" src="assets/img/avtar-3.png" width="50"></span>
										 <span class="media-box-body"><span class="media-box-heading"><strong>Megan Doe</strong><br>
										<small class="text-muted">Designer</small></span></span></a>
									</li>
									<li class="clearfix">
										<a class="media-box" href="#"><span class="float-right"><span class="circle circle-success circle-lg"></span></span> <span class="float-left">
										 <img alt="user" class="media-box-object rounded-circle" src="assets/img/avtar-4.png" width="50"></span>
										 <span class="media-box-body"><span class="media-box-heading"><strong>Hritik Doe</strong><br>
										<small class="text-muted">Designer</small></span></span></a>
									</li>
									<li class="clearfix">
										<a class="media-box" href="#"><span class="float-right"><span class="circle circle-success circle-lg"></span></span> <span class="float-left">
										 <img alt="user" class="media-box-object rounded-circle" src="assets/img/avtar-5.png" width="50"></span>
										 <span class="media-box-body"><span class="media-box-heading"><strong>Bianca Doe</strong><br>
										<small class="text-muted">Designer</small></span></span></a>
									</li>
									<li class="clearfix">
										<a class="media-box" href="#"><span class="float-right"><span class="circle circle-success circle-lg"></span></span> <span class="float-left">
										 <img alt="user" class="media-box-object rounded-circle" src="assets/img/avtar-6.png" width="50"></span>
										 <span class="media-box-body"><span class="media-box-heading"><strong>John Doe</strong><br>
										<small class="text-muted">Designer</small></span></span></a>
									</li>
									<li class="clearfix">
										<a class="media-box" href="#"><span class="float-right"><span class="circle circle-success circle-lg"></span></span> <span class="float-left">
										 <img alt="user" class="media-box-object rounded-circle" src="assets/img/avtar-1.png" width="50"></span>
										 <span class="media-box-body"><span class="media-box-heading"><strong>Govinda Doe</strong><br>
										<small class="text-muted">Designer</small></span></span></a>
									</li>
									<li class="clearfix">
										<a class="media-box" href="#"><span class="float-right"><span class="circle circle-danger circle-lg"></span></span> <span class="float-left">
										 <img alt="user" class="media-box-object rounded-circle" src="assets/img/avtar-2.png" width="50"></span>
										 <span class="media-box-body"><span class="media-box-heading"><strong>Megan Doe</strong><br>
										<small class="text-muted">Designer</small></span></span></a>
									</li>
									<li>
										<div class=" text-center">
											<a class="btn btn-teal" href="javascript:void(0);" title="See more contacts">Load more..</a>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<!-- ============================================================== -->
		<!--                        Right Side End                          -->
		<!-- ============================================================== -->
		
		
        <!-- ============================================================== -->
		<!-- 						Navigation Start 						-->
		<!-- ============================================================== -->
        <div class="main-sidebar-nav default-navigation">
            <div class="nano">
                <div class="nano-content sidebar-nav">
				
					<div class="card-body border-bottom text-center nav-profile">
						<div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div>
                        <img alt="profile" class="margin-b-10  " src="assets/img/avtar-2.png" width="80">
                        <p class="lead margin-b-0 toggle-none">Mr <?php echo "$prenom"; ?></p>
                        <p class="text-muted mv-0 toggle-none">Bonjour</p>						
                    </div>
					
                    <ul class="metisMenu nav flex-column" id="menu">
                        <!--<li class="nav-heading"><span>MAIN</span></li>-->	
						<li class="nav-item ">
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
						<li class="nav-item ">
							<a class="nav-link"  href="zone.php" aria-expanded="true">
							<i class="fa fa-list"></i> 
							<span class="toggle-none">Zone</span>
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
					
            <div class="row page-header"><div class="col-lg-6 align-self-center ">
			  <h2>Profile</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Pages</a></li>
					<li class="breadcrumb-item active">Profile</li>
				</ol></div></div>

        <section class="main-content">

            <div class="row">
                <div class="col-md-4">
                    <div class="widget white-bg">
                        <div class="padding-20 text-center">
						 <img alt="Profile Picture" width="140" class="rounded-circle mar-btm margin-b-10 circle-border " src="assets/img/avtar-2.png">
                            <p class="lead font-500 margin-b-0"><?php echo "$nom  $prenom" ?></p>
                           <!--  <p class="text-muted">Administrator</p> 
                            <p class="text-sm margin-b-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>-->
                            <hr>
                            <ul class="list-unstyled margin-b-0 text-center row">
                                <li class="col-4">
                                    <span class="font-600">1,345</span>
                                   <!--  <p class="text-muted text-sm margin-b-0">Following</p> -->
                                </li>
                                <li class="col-4">
                                    <span class="font-600">23K</span>
                                    <!-- <p class="text-muted text-sm margin-b-0">Followers</p> -->
                                </li>
                                <li class="col-4">
                                    <span class="font-600">278</span>
                                   <!--  <p class="text-muted text-sm margin-b-0">Post</p> -->
                                </li>
                            </ul>
                        </div>
                    </div>
                  
                </div>
                <div class="col-8">
					<div class="card">
                        <div class="card-body">
						<div class="tabs">
						<ul class="nav nav-tabs">
                            <li class="nav-item" role="presentation"><a class="nav-link  active" href="#timeline" aria-controls="timeline" role="tab" data-toggle="tab">profile </a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Edite profile</a></li>
                       </ul>

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="timeline">
                            	<div class="widget white-bg">
                                    <div class="row">
                                        <div class="col-md-4 col-xs-6 b-r"> 
                                            <strong>Nom </strong>
                                            <br>
                                            <p class="text-muted">
                                               	<?php echo "$nom $prenom"; ?>	
                                            </p>
                                        </div>
                                        <div class="col-md-4 col-xs-6 b-r"> 
                                        	<strong>Mobile</strong>
                                            <br>
                                            <p class="text-muted"><?php echo "0 $tel"; ?>
                                        </div>
                                        <div class="col-md-4 col-xs-6 b-r"> 
                                        	<strong>Email</strong>
                                            <br>
                                            <p class="text-muted"><?php echo "$email"; ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-xs-6 b-r"> 
                                            <strong>login </strong>
                                            <br>
                                            <p class="text-muted">
                                               	<?php echo "$login"; ?>	
                                            </p>
                                        </div>
                                        <div class="col-md-4 col-xs-6 b-r"> 
                                            <strong>password </strong>
                                            <br>
                                            <p class="text-muted">
                                               	<?php echo "$password"; ?>	
                                            </p>
                                        </div>
                                    </div>
									<hr>
									<p class="mt-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
							  </div>
                                
                            </div>
                            <div role="tabpanel" class="tab-pane" id="profile">
                               <div class="widget white-bg">
                               		<form method="post" >
										<div class="row">
											<div class="col-md-4">
												<div class="form-group  ">
                                    				<label>nom</label>
                                    				<input type="text"  name="nom" class="form-control form-control-rounded" value=<?php echo "$nom" ?>>
                                				</div>
											</div>
											<div class="col-md-4">
												<div class="form-group  ">
                                    				<label>prenom</label>
                                    				<input type="text"  name="prenom" class="form-control form-control-rounded"
                                    				value="<?php echo "$prenom" ?>">
                                				</div>
											</div>
											<div class="col-md-4">
												<div class="form-group  ">
                                    				<label>Mobile</label>
                                    				<input type="text"  name="tel" class="form-control form-control-rounded" 
                                    				value="<?php echo "$tel" ?>">
                                				</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="form-group  ">
                                    				<label>Email</label>
                                    				<input type="text"  name="email" class="form-control form-control-rounded"
                                    				value="<?php echo "$email" ?>">
                                				</div>
											</div>
											<div class="col-md-4">
												<div class="form-group  ">
                                    				<label>Login</label>
                                    				<input type="text"  name="login" class="form-control form-control-rounded"
                                    				value="<?php echo "$login" ?>">
                                				</div>
											</div>
											<div class="col-md-4">
												<div class="form-group  ">
                                    				<label>Password</label>
                                    				<input type="text"  name="password" class="form-control form-control-rounded"
                                    				value="<?php echo "$password" ?>">
                                				</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4"></div>
											<div class="col-md-4">
												<input type="submit"  name="ok" class="btn btn-sm btn-success"  value="Edite les informations">
											</div>
										</div>
									</form>
                               </div>
                            </dsiv>

                        </div>
                    </div>
					</div>
					</div>
				
                </div>
            </div>

            

            <footer class="footer">
                <p>Copyright &copy; 2018 EST Salé</p>
            </footer>


        </section>
        <!-- ============================================================== -->
		<!-- 						Content End 							-->
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
    </body>
</html>