<?php 

include "../common/db.php";
$rec_id = $_POST['rec_id'];
$select_state = mysql_query("SELECT * FROM states where rec_id=$rec_id");

$result= mysql_fetch_assoc($select_state);
   


echo json_encode($result);

?>
