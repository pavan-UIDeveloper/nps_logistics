<?php 

include "../common/db.php";
$rec_id = $_POST['rec_id'];
$select_query = mysql_query("SELECT branches.*,villages.mandal_id,mandals.district_id,districts.state_id,states.country_id FROM branches
                             LEFT JOIN villages on branches.village_id=villages.rec_id
                             LEFT JOIN mandals on villages.mandal_id=mandals.rec_id
                             LEFT JOIN districts on mandals.district_id=districts.rec_id
                             LEFT JOIN states on districts.state_id=states.rec_id
                              where branches.rec_id=$rec_id") or die(mysql_error());

$result= mysql_fetch_assoc($select_query);
   


echo json_encode($result);

?>
