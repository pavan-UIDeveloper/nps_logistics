<?php 

include "../common/db.php";

$select_state = mysql_query("SELECT states.*,countries.country_name FROM states LEFT JOIN countries on countries.rec_id=states.country_id");
$res_array=array();
while($result= mysql_fetch_assoc($select_state)){
    $res_array[]=$result;
}

echo json_encode($res_array);

?>
