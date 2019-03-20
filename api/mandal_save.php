<?php 

include "../common/db.php";


$district = $_POST['mandal_dn'];
$mandal = $_POST['mandal_name'];

$country_query = mysql_query("INSERT INTO mandals (district_id,mandal_name) VALUES ('$district','$mandal')");


$responce = array("success"=>true,"error"=>false,"message"=>"Data Saved SuccessFullly");
echo json_encode($responce);

?>
