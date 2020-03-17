<html>
<head>
<title>Dynamic Dependent Select Box using jQuery and Ajax</title>
</head>
<body>
<div>
<label>Bâtiment :</label><select name="country" id="country">
<option value="0">Selectionner un bâtiment</option>
<?php
include('DB.php');
$db = Database::connect();
$sql2 = "SELECT * FROM batiment";
        foreach ($db->query($sql2) as $row)
        {
            echo '<option value="'.$row['id'].'">'.$row['id']." - ".$row['nom'].'</option>';
        }



        /*
        include('DB_.php');
$db = Database::connect();
$sql2 = "SELECT * FROM countries";
        foreach ($db->query($sql2) as $row)
        {
            echo '<option value="'.$row['country_id'].'">'.$row['country_name'].'</option>';
        }
        
        */ 
?>
</select><br/><br/>
<label>Etage :</label><select name="city" id="city">
<option value="0">Selectionner un étage</option>
</select>

<br/><br/>
<label>Salle :</label><select name="salle" id="salle">
<option value="0">Selectionner une salle</option>
</select>
<script src="assets/jquery/jquery.min.js"></script>
<script type="text/javascript">

                                            $(document).ready(function(){
													$("#country").change(function()
													{
														var id_bat=$(this).val();
														var post_id = 'id1='+ id_bat;
														
														$.ajax
														({
															type: "POST",
															url: "ajax.php",
															data: post_id,
															cache: false,
															success: function(etages) { $("#city").html(etages);} 
														});
														
													});
													
												});

                                                $(document).ready(function(){
													$("#city").change(function()
													{
														var id_et=$(this).val();
														var post_id = 'id2='+ id_et;
														
														$.ajax
														({
															type: "POST",
															url: "ajaxx.php",
															data: post_id,
															cache: false,
															success: function(salles) { $("#salle").html(salles);} 
														});
														
													});
													
												});

                                                


/*
    $(document).ready(function()
    {
        $("#country").change(function()
        {
            var country_id=$(this).val();
            var post_id = 'id='+ country_id;
            
            $.ajax
            ({
                type: "POST",
                url: "ajax.php",
                data: post_id,
                cache: false,
                success: function(etages) { $("#city").html(etages);} 
            });
            
        });
    });

    */
</script>
</body>
</html>