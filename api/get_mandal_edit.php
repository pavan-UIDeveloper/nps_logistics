<?php 

include "../common/db.php";
$rec_id = $_POST['rec_id'];
$select_query = mysql_query("SELECT mandals.*,districts.state_id,states.country_id FROM mandals
                             LEFT JOIN districts on mandals.district_id=districts.rec_id
                             LEFT JOIN states on districts.state_id=states.rec_id
                              where mandals.rec_id=$rec_id") or die(mysql_error());

$result= mysql_fetch_assoc($select_query);
   


echo json_encode($result);

?>
