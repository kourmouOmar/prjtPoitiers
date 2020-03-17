
<?php

include('DB.php');
$db = Database::connect();

if($_POST['id']){
$id=$_POST['id'];
if($id==0){
	echo '<option>Sélectionner une salle........</option>';
}else{
    echo '<option value="0" disabled selected hidden>Sélectionner une salle...</option>';
	$sql2 = "SELECT * FROM `salle` WHERE id_etage='$id'";
        foreach ($db->query($sql2) as $row){
            echo '<option value="'.$row['id'].'">'.$row['id'].' - '.$row['Num_salle'].'</option>';
        }
    }
    
}

?>