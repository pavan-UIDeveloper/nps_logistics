<?php 

include "../common/db.php";
$rec_id=$_POST['rec_id'];
$country = $_POST['state_cn'];
$state = $_POST['state_name'];

$update_query = mysql_query("UPDATE states SET country_id='$country', state_name='$state' WHERE rec_id=$rec_id");


$responce = array("success"=>true,"error"=>false,"message"=>"Data Updated SuccessFullly");
echo json_encode($responce);

?>
