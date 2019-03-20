<?php 

include "../common/db.php";

$select_country = mysql_query("SELECT branches.*,villages.village_name,mandals.mandal_name,districts.district_name,states.state_name,countries.country_name
 FROM branches 
 LEFT JOIN villages on villages.rec_id=branches.village_id
 LEFT JOIN mandals on mandals.rec_id=villages.mandal_id
 LEFT JOIN districts on districts.rec_id=mandals.district_id
 LEFT JOIN states on states.rec_id=districts.state_id
 LEFT JOIN countries on countries.rec_id=states.country_id") or die(mysql_error());
$countries=array();
while($results= mysql_fetch_assoc($select_country)){
    $countries[]=$results;
}

echo json_encode($countries);

?>
