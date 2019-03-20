<?php 

include "../common/db.php";
$rec_id=$_POST['rec_id'];
$country = $_POST['country'];
$flag="";
$flagname="";
if(!empty($_FILES['flag']['name'])){
    $flag=$_FILES['flag']['name'];
    $flagname=" ,flag='$flag'";
}
$country_query = mysql_query("UPDATE countries SET country_name='$country' $flagname WHERE rec_id=$rec_id");

$insert_id = $rec_id;
if(!empty($_FILES['flag']['name'])){
    move_uploaded_file($_FILES['flag']['tmp_name'],"../useruploads/".$insert_id."_".$flag);
}
$responce = array("success"=>true,"error"=>false,"message"=>"Data Updated SuccessFullly");
echo json_encode($responce);

?>
