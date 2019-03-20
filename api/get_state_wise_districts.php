<?php 

include "../common/db.php";
$state_id = $_POST['state_id'];
$wherecond="";
if($state_id>0){
    $wherecond=" where state_id=$state_id";

}
$select_state = mysql_query("SELECT * From districts $wherecond");
$res_array=array();
while($result= mysql_fetch_assoc($select_state)){
    $res_array[]=$result;
}

echo json_encode($res_array);

?>
