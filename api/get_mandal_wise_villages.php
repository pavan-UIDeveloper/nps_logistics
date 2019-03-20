<?php 

include "../common/db.php";
$mandal_id = $_POST['mandal_id'];
$wherecond="";
if($mandal_id>0){
$wherecond=" where mandal_id=$mandal_id";
}
$select_district = mysql_query("SELECT * From villages $wherecond");
$res_array=array();
while($result= mysql_fetch_assoc($select_district)){
    $res_array[]=$result;
}

echo json_encode($res_array);

?>
