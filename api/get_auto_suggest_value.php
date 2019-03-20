<?php 

include "../common/db.php";
$value=$_POST["value"];
$select_country = mysql_query("SELECT * FROM branches WHERE branch_name LIKE '%$value%'") or die(mysql_error());
$countries=array();
while($results= mysql_fetch_assoc($select_country)){
    $countries[]=$results;
}

echo json_encode($countries);

?>
