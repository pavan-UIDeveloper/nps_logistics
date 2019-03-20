<?php 

include "../common/db.php";

$country = $_POST['state_cn'];
$state = $_POST['state_name'];

$country_query = mysql_query("INSERT INTO states (country_id,state_name) VALUES ('$country','$state')");


$responce = array("success"=>true,"error"=>false,"message"=>"Data Saved SuccessFullly");
echo json_encode($responce);

?>
