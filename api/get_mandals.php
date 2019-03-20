<?php 

include "../common/db.php";

$select_query = mysql_query("SELECT mandals.*,districts.district_name,states.state_name,countries.country_name FROM mandals
                            LEFT JOIN districts on districts.rec_id=mandals.district_id
                            LEFT JOIN states on states.rec_id=districts.state_id
                            LEFT JOIN countries on countries.rec_id=states.country_id");
$res_array=array();
while($result= mysql_fetch_assoc($select_query)){
    $res_array[]=$result;
}

echo json_encode($res_array);

?>
