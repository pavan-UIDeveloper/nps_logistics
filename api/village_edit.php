<?php 

include "../common/db.php";
$rec_id=$_POST['rec_id'];
$country = $_POST['village_cn'];
$state = $_POST['village_sn'];
$district = $_POST['village_dn'];
$mandal = $_POST['village_mn'];
$village = $_POST['village_name'];
$pincode = $_POST['pincode'];




$update_query = mysql_query("UPDATE villages SET mandal_id='$mandal', village_name='$village', pincode='$pincode' WHERE rec_id=$rec_id");


$responce = array("success"=>true,"error"=>false,"message"=>"Data Updated SuccessFullly");
echo json_encode($responce);

?>
