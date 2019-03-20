<?php 

include "../common/db.php";

$select_query = mysql_query("SELECT lrform.*,branches.branch_name FROM lrform
                            LEFT JOIN branches on branches.rec_id=lrform.from_branch_id") or die(mysql_error());
$res_array=array();
while($result= mysql_fetch_assoc($select_query)){
    $res_array[]=$result;
}

echo json_encode($res_array);

?>
