
<?php

include('DB.php');
$db = Database::connect();

if($_POST['id']){
$id=$_POST['id'];
if($id==0)
{
	echo '<option>Sélectionner un étage........</option>';
}
    else
    {
        echo '<option value="0" disabled selected hidden>Sélectionner un étage...</option>';
        $sql2 = "SELECT * FROM `etage` WHERE id_batiment='$id'";
            foreach ($db->query($sql2) as $row)
            {
                echo '<option value="'.$row['id'].'">'.$row['id'].' - '.$row['nom'].'</option>';
            }
    }
    
}



/*
include('DB_.php');
$db = Database::connect();

if($_POST['id']){
$id=$_POST['id'];
if($id==0){
	echo "<option>Select City</option>";
}else{
	$sql2 = "SELECT * FROM `cities` WHERE country_id='$id'";
        foreach ($db->query($sql2) as $row){
            echo '<option value="'.$row['city_id'].'">'.$row['city_name'].'</option>';
        }
    }
    
}
*/
?>