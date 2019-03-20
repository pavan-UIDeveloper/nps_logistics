<?php 

include "../common/db.php";


$rec_id = $_POST['rec_id'];
$which = $_POST['a'];
$table="";
if($which==0){
   $table = 'countries';
}else if($which==1){
    $table = 'states';
}else if($which==2){
    $table = 'districts';
}else if($which==3){
    $table = 'mandals';
}else if($which==4){
    $table = 'villages';
}
else if($which==5){
    $table = 'branches';
}
else if($which==6){
    $table = 'lrform';
}

$delete_query = mysql_query("DELETE FROM $table where rec_id=$rec_id");
$responce= array('success'=>true,'erroe'=>false,"message"=>"Row Deleted SuccessFully");
echo json_encode($responce);

?>
