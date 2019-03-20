<?php 

include "../common/db.php";
$rec_id = $_POST['rec_id'];
$select_country = mysql_query("SELECT * FROM countries where rec_id=$rec_id");

$result= mysql_fetch_assoc($select_country);
   


echo json_encode($result);

?>
