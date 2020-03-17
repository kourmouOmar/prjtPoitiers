<?php
//Include the database configuration file
include 'DB_.php';

if(!empty($_POST["country_id"])){
    //Fetch all state data
    //$query = $db->query("SELECT * FROM states WHERE country_id = ".$_POST['country_id']." AND status = 1 ORDER BY state_name ASC");
    
    //Count total number of rows
    //$rowCount = $query->num_rows;
    
    //State option list

    $sql2 = "SELECT * FROM states WHERE country_id = ".$_POST['country_id']." AND status = 1 ORDER BY state_name ASC";
        foreach ($db->query($sql2) as $row){
            echo '<option value="'.$row['state_id'].'">'.$row['state_name'].'</option>';
        }
    
}elseif(!empty($_POST["state_id"])){
    //Fetch all city data
    //$query = $db->query("SELECT * FROM cities WHERE state_id = ".$_POST['state_id']." AND status = 1 ORDER BY city_name ASC");
    
    //Count total number of rows
    //$rowCount = $query->num_rows;
    
    //City option list

    $sql2 = "SELECT * FROM states WHERE country_id = ".$_POST['country_id']." AND status = 1 ORDER BY state_name ASC";
        foreach ($db->query($sql2) as $row){
            echo '<option value="'.$row['city_id'].'">'.$row['city_name'].'</option>';

        }
    
}
?>