<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="js/bootstrap.min.js"></script>
</head>
<body>

<div style="width:180px;margin:auto">

<div><h1 class="form-signin-heading text-muted">Connexion</h1></div>

<div>
	<form method="post" action="Connexion.php" id="login-form">
		<table>
			<tr><td><input type="text" class="form-control" placeholder="Login" required="required" name="Login"></td></tr>

			<tr><td><input id="key" class="form-control" type="Password" placeholder="Password" required="required" name="Password"></td></tr>

		</table>

		<input type="submit" value ="Connexion" name="btn" id="btn-login" class="btn btn-custom btn-lg btn-block btn-primary">
<?php
session_start();
require 'DB.php';

if(isset($_POST['btn']))
{
$pdo = Database::connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$l = $_POST['Login'];
$p = $_POST['Password'];
$_SESSION['l'] = $l;
$sql = "select count(*) as r from Prof where Login='".$l."' and Password='".$p."';";
foreach ($pdo->query($sql) as $row) 
{
	if($row['r'] == "1") {header("Location:Welcome.php");}
	else {echo "<p>Login Or Password Incorrect.</p>";}
}

}
?>
	</form>


</div>
</div>


</body>
</html>