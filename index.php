<?php
//session_destroy();
session_start();

require 'DB.php';
if (isset($_SESSION["id_utilisateur"])) {session_destroy();}
if(isset($_POST['ok']))
{
$pdo = Database::connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$l = $_POST['login'];
$p = $_POST['password'];

$sql = "select count(*) as r from utilisateur where  login='".$l."' and password='".$p."';";
foreach ($pdo->query($sql) as $row) 
{
    if($row['r'] == "1") {
        $sql1 = "select *  from utilisateur where  login='".$l."' and password='".$p."';";
        foreach ($pdo->query($sql1) as $row){
            $id=$row['id'];
        }
        $_SESSION["id_utilisateur"]=$id;

        header("Location:accueil.php");
   
}
    else {echo "<p class='btn-warning' >Login Or Password Incorrect.</p>";
            header("Location:index.php");    
        }
}


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>UIT Poitiers</title>

        <link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <link href="assets/scss/style.css" rel="stylesheet">
		
        <style type="text/css">
            html,body{
                height: 100%;
            }
        </style>
    </head>
    <body class="bg-light">

        <div class="misc-wrapper">
            <div class="misc-content">
                <div class="container">
                    <div class="row justify-content-center">
                        
                        <div class="col-4">
                              <div class="misc-header text-center">
								<img alt="" src="assets/img/logo.svg" class="toggle-none hidden-xs">
                            </div>

                            <div class="misc-header text-center">
                                <p class="text-center" style="text-decoration:underline">Connexion</p>
                            </div>
                                        <div class="misc-box">   
                                            <form role="form" method="post">
                                                <div class="form-group" >                                      
                                                    <label  for="exampleuser1">Identifiant</label>
                                                    <div class="group-icon">
                                                    <input id="exampleuser1" type="text" placeholder="Username"  name="login"class="form-control" required="">
                                                    <span class="icon-user text-muted icon-input"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Mot de passe</label>
                                                    <div class="group-icon">
                                                    <input id="exampleInputPassword1" type="password" name="password" placeholder="Password" class="form-control">
                                                    <span class="icon-lock text-muted icon-input"></span>
                                                    </div>
                                                </div>
                                                <div class="clearfix">
                                                    <div class="float-left">
                                                    <div class="checkbox checkbox-primary margin-r-5">
                                                            <input id="checkbox2" type="checkbox" checked="">
                                                            <label for="checkbox2"> Se souvenir de moi </label>
                                                        </div>
                                                    </div>
                                                    <div class="float-right">
                                                        <button type="submit" class="btn btn-block btn-primary btn-rounded box-shadow" name="ok">Se connecter</button>
                                                    </div>
                                                </div>
                                                <hr>
                                                <p class="text-center">Pas encore inscrit ?</p>
                                                <a href="register.php" class="btn btn-block btn-success btn-rounded box-shadow">S'inscrire</a>
                                            </form>
                                        </div>

                            <div class="text-center misc-footer"><p>Copyright &copy; 2018 EST Salé</p></div>


                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Common Plugins -->
        <script src="assets/lib/jquery/dist/jquery.min.js"></script>
        <script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/lib/pace/pace.min.js"></script>
        <script src="assets/lib/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
        <script src="assets/lib/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/lib/nano-scroll/jquery.nanoscroller.min.js"></script>
        <script src="assets/lib/metisMenu/metisMenu.min.js"></script>
        <script src="assets/js/custom.js"></script>
		
    </body>

</html>
