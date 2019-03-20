<?php 

include "../common/db.php";

$select_query = mysql_query("SELECT districts.*,states.state_name,countries.country_name FROM districts LEFT JOIN states on states.rec_id=districts.state_id
                            LEFT JOIN countries on states.country_id=countries.rec_id");
$res_array=array();
while($result= mysql_fetch_assoc($select_query)){
    $res_array[]=$result;
}

echo json_encode($res_array);

?>
