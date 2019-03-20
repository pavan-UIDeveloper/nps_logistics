<?php 

include "../common/db.php";
$rec_id = $_POST['rec_id'];
$select_query = mysql_query("SELECT districts.*,states.country_id FROM districts LEFT JOIN states on districts.state_id=states.rec_id where districts.rec_id=$rec_id") or die(mysql_error());

$result= mysql_fetch_assoc($select_query);
   


echo json_encode($result);

?>
