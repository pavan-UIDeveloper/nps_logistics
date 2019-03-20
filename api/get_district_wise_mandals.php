<?php 

include "../common/db.php";
$district_id = $_POST['district_id'];
$wherecond="";
if($district_id>0){
$wherecond=" where district_id=$district_id";
}
$select_district = mysql_query("SELECT * From mandals $wherecond");
$res_array=array();
while($result= mysql_fetch_assoc($select_district)){
    $res_array[]=$result;
}

echo json_encode($res_array);

?>
