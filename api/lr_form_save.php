<?php 

include "../common/db.php";

$latest_rec_id_query="SELECT rec_id from lrform order by rec_id DESC LIMIT 1";
$latest_rec_id_res=mysql_query($latest_rec_id_query) or die(mysql_error());
$latest_rec_id_results = mysql_fetch_assoc($latest_rec_id_res);


$lr_id=1;
if(!empty($latest_rec_id_results['rec_id']) && $latest_rec_id_results['rec_id']>0){
	$lr_id=$latest_rec_id_results['rec_id']+1;
}
$lr_id="LR0000".$lr_id;



$customer_name = $_POST['customer_name'];
$mobile_number = $_POST['mobile_number'];
$from_branch = $_POST['from_branch_hid'];
$to_branch = $_POST['to_branch_hid'];
$booking_date = $_POST['booking_date'];
$item_value = $_POST['item_value'];

$item_weight = $_POST['item_weight'];

$delivery_charge = $_POST['delivery_charge'];

$edod = $_POST['edod'];




$country_query = mysql_query("INSERT INTO lrform (lr_id,customer_name,mobile_number,from_branch_id,to_branch_id,date_of_booking,item_value,item_weight,delivery_charge,edod) 
                                         VALUES ('$lr_id','$customer_name',$mobile_number,$from_branch,$to_branch,'$booking_date',$item_value,'$item_weight','$delivery_charge','$edod')");


$responce = array("success"=>true,"error"=>false,"message"=>"Data Saved SuccessFullly");
echo json_encode($responce);

?>
