<?php 

include "../common/db.php";
$country_id = $_POST['country_id'];
$wherecondition="";
if($country_id>0){
$wherecondition = " where country_id=$country_id";
}
$select_state = mysql_query("SELECT * From States $wherecondition");
$res_array=array();
while($result= mysql_fetch_assoc($select_state)){
    $res_array[]=$result;
}

echo json_encode($res_array);

?>
