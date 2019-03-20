<?php 

include "../common/db.php";

$country = $_POST['country'];
$flag="";
if(!empty($_FILES['flag']['name'])){
    $flag=$_FILES['flag']['name'];
}
$country_query = mysql_query("INSERT INTO countries (country_name,flag) VALUES ('$country','$flag')");

$insert_id = mysql_insert_id();
if(!empty($_FILES['flag']['name'])){
    move_uploaded_file($_FILES['flag']['tmp_name'],"../useruploads/".$insert_id."_".$flag);
}
$responce = array("success"=>true,"error"=>false,"message"=>"Data Saved SuccessFullly");
echo json_encode($responce);

?>
