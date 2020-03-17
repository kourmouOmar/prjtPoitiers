<?php
//Include the database configuration file
include 'DB_.php';
$db = Database::connect();

?>


<html>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
<body>
<select id="country">
    <option value="">Select Country</option>
    <?php
        echo '<option value="">kjnefkejrgkegnkj</option>';
        $sql2 = "SELECT * FROM countries";
        foreach ($db->query($sql2) as $row){
            echo '<option value="'.$row['country_id'].'">'.$row['country_name'].'</option>';
        }
    
    ?>
</select>

<select id="state">
    <option value="">Select country first</option>
</select>

<select id="city">
    <option value="">Select state first</option>
</select>

<script type="text/javascript">

$(document).ready(function(){
    $('#country').on('change',function(){
        var countryID = $(this).val();
        if(countryID)
        {
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'country_id='+countryID,
                success:function(html){
                    $('#state').html(html);
                    $('#city').html('<option value="">Select state first</option>'); 
                }
            }); 
        }
        
        else
        {
            $('#state').html('<option value="">Select country first</option>');
            $('#city').html('<option value="">Select state first</option>'); 
        }
    });
    
    $('#state').on('change',function(){
        var stateID = $(this).val();
        if(stateID)
        {
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'state_id='+stateID,
                success:function(html){
                    $('#city').html(html);
                }
            }); 
        }
        
        else
        {
            $('#city').html('<option value="">Select state first</option>'); 
        }
    });
});
</script>
</body>
</html>