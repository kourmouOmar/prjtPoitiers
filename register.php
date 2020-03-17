<?php 
    session_start();

    require 'DB.php';
    $pdo = Database::connect();
    if (isset($_POST['ok'])) {
       $nom=$_POST['nom'];
       $prenom=$_POST['prenom'];
       $tel=$_POST['tel'];
       $email=$_POST['email'];
       $password=$_POST['password'];
       $passwordconf=$_POST['passwordconf'];

       if( $password == $passwordconf){
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO utilisateur(Nom,Prenom,login,password,email,telephone) values(?,?,?,?,?,?)";
        $q = $pdo->prepare($sql);
        $q->execute(array($nom,$prenom,$email,$password,$email,$tel));
        $last_id = $pdo->lastInsertId();
        $_SESSION["id_utilisateur"] =$last_id;

        header("Location: profile.php");
    }else{
       echo '<script type="text/javascript">
  document.getElementById(".errorMessage").innerHTML = "<h1>Inscription non validée</h1>";
  </script>';
    }

    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Inscription</title>
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
                                            <img alt="" src="assets/img/logo.svg" class="toggle-none hidden-xs"><br><br>
                                            
                                        </div>

                                        <div class="misc-header text-center">
                                            <p class="text-center" style="text-decoration:underline">Inscription</p>
                                        </div>

                                        <div class="errorMessage" class="btn-warning" style="padding-left: 5px;"></div>
                                </div>
                        </div>
                    
                    <div class="row justify-content-center">
                        
                        <div class="col-4">
                                <div class="misc-box">     
                                            <form role="form" method="post">

                                                    <div class="form-group group-icon">
                                                        <label for="eampleuser1"> Nom </label>
                                                        <div class="group-icon">
                                                            <input  type="text" placeholder="Nom" class="form-control" name="nom" required="">
                                                            <span class="icon-user text-muted icon-input"></span>
                                                        </div>
                                                    </div>
                                    
                                                    <div class="form-group group-icon">
                                                        <label for="exampleInputPassword2"> Téléphone </label>
                                                        <div class="group-icon">
                                                            <input  type="text" placeholder="Téléphone" class="form-control" name="tel">
                                                            <span class="icon-phone text-muted icon-input"></span>
                                                        </div>
                                                    </div>

                                                    <div class="form-group group-icon">
                                                <label for="exampleInputPassword1">Mot de passe</label>
                                                <div class="group-icon">
                                                    <input  type="password" placeholder="Mot de passe" class="form-control" name="password">
                                                    <span class="icon-lock text-muted icon-input"></span>
                                                </div>
                                        </div>

                                                    
                                </div>
                        </div>


                        <div class="col-4">

                                <div class="misc-box">     

                                        <div class="form-group group-icon">
                                                <label for="exampleInputPassword1"> Prénom </label>
                                                <div class="group-icon">
                                                    <input  type="text" placeholder="Prénom" class="form-control" name="prenom">
                                                    <span class="icon-user text-muted icon-input"></span>
                                                </div>
                                        </div>


                                        <div class="form-group group-icon">
                                                <label for="exampleInputPassword1">Email</label>
                                                <div class="group-icon">
                                                    <input  type="email" placeholder="Email" class="form-control" name="email">
                                                    <span class="icon-envelope  text-muted icon-input"></span>
                                                </div>
                                        </div>

                                        <div class="form-group group-icon">
                                                        <label for="exampleInputPassword2">Confirmer le mot de passe</label>
                                                            <div class="group-icon">
                                                                <input  type="password" placeholder="Confirmer le mot de passe" class="form-control" name="passwordconf">
                                                                <span class="icon-lock text-muted icon-input"></span>
                                                            </div>
                                                    </div>

                                        

                                        

                                                    
                                </div>
                        </div>


                    </div>
                    <div class="row justify-content-center">
                        <div class="col-4">
                            <input type="submit" name="ok" class="btn btn-block btn-primary btn-rounded box-shadow mt-10" value="Valider">
                                    <hr>
                            </form>     
                                    <p class=" text-center">Vous avez un commpte ?</p>
                                    <a href="index.php" class="btn btn-block btn-success btn-rounded box-shadow">Se connecter</a>
                            <div class="text-center">
                                 <p>Copyright &copy; 2018 EST Salé</p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>

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

</html>
