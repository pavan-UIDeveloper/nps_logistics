<?php 

include "../common/db.php";


$state = $_POST['district_sn'];
$district = $_POST['district_name'];

$country_query = mysql_query("INSERT INTO districts (state_id,district_name) VALUES ('$state','$district')");


$responce = array("success"=>true,"error"=>false,"message"=>"Data Saved SuccessFullly");
echo json_encode($responce);

?>
