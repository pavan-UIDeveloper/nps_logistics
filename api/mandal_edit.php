<?php 

include "../common/db.php";
$rec_id=$_POST['rec_id'];
$country = $_POST['mandal_cn'];
$state = $_POST['mandal_sn'];
$district = $_POST['mandal_dn'];
$mandal = $_POST['mandal_name'];


$update_query = mysql_query("UPDATE mandals SET district_id='$district', mandal_name='$mandal' WHERE rec_id=$rec_id");


$responce = array("success"=>true,"error"=>false,"message"=>"Data Updated SuccessFullly");
echo json_encode($responce);

?>
