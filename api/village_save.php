<?php 

include "../common/db.php";


$mandal = $_POST['village_mn'];
$village = $_POST['village_name'];
$pincode = $_POST['Pincode'];

$country_query = mysql_query("INSERT INTO villages (mandal_id,village_name,pincode) VALUES ('$mandal','$village','$pincode')");


$responce = array("success"=>true,"error"=>false,"message"=>"Data Saved SuccessFullly");
echo json_encode($responce);

?>
