<?php 

include "../common/db.php";


$village = $_POST['branches_vn'];
$branch = $_POST['branch_name'];
$landmark = $_POST['land_mark'];
$door = $_POST['door_number'];


$branch_query = mysql_query("INSERT INTO branches (village_id,branch_name,land_mark,Door_number) VALUES ('$village','$branch','$landmark','$door')");


$responce = array("success"=>true,"error"=>false,"message"=>"Data Saved SuccessFullly");
echo json_encode($responce);

?>
