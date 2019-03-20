<?php 

include "../common/db.php";
$rec_id=$_POST['rec_id'];
$village = $_POST['branches_vn'];
$branch = $_POST['branch_name_edit'];
$door = $_POST['door_number_edit'];
$landmark = $_POST['land_mark_edit'];





$update_query = mysql_query("UPDATE branches SET village_id='$village', branch_name='$branch', door_number='$door',land_mark='$landmark' WHERE rec_id=$rec_id");


$responce = array("success"=>true,"error"=>false,"message"=>"Data Updated SuccessFullly");
echo json_encode($responce);

?>
