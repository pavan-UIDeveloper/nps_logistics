<?php 

include "../common/db.php";

$select_country = mysql_query("SELECT * FROM countries");
$countries=array();
while($results= mysql_fetch_assoc($select_country)){
    $countries[]=$results;
}

echo json_encode($countries);

?>
