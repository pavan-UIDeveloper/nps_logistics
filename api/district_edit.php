<?php 

include "../common/db.php";
$rec_id=$_POST['rec_id'];
$country = $_POST['district_cn'];
$state = $_POST['district_sn'];
$district = $_POST['district_name'];

$update_query = mysql_query("UPDATE districts SET state_id='$state', district_name='$district' WHERE rec_id=$rec_id");


$responce = array("success"=>true,"error"=>false,"message"=>"Data Updated SuccessFullly");
echo json_encode($responce);

?>
