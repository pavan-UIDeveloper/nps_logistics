<?php 

include "header.php";



?>
<style>
.dropdown-menu{

}

</style>

<div class="container">
  <div id="result" style="display:none">

   </div>
	<button type="button" onclick="showinput('lr_form')" class="btn btn-primary">New Lr Entry</button>
    
  <div class="row" id="lr_form_div" style="display:none">
   
  	<form class="form-horizontal" id="lr_form">
    <div class="form-group">
   	  <label class="control-label col-sm-2" for="country">Customer Name</label>
       <div class="col-sm-3">
      <input type="text" class="form-control" id="branch_name" placeholder="Enter Customer Name" required name="customer_name">
  	  </div>	
    </div>
    
    <div class="form-group">
   	  <label class="control-label col-sm-2" for="country">Mobile Number</label>
       <div class="col-sm-3">
      <input type="text" class="form-control" id="mobile_number" placeholder="Enter Customer Mobile Number Name" required name="mobile_number">
  	  </div>	
    </div>
    
    <div class="form-group">
   	  <label class="control-label col-sm-2" for="country">From Branch</label>
      <div class="col-sm-3">
      <div class="dropdown">    
          <input type="text" autocomplete="off" onkeyup="autobranch(this.value,this.id)" class="form-control" id="from_branch" placeholder="Enter From Branch" required name="from_branch">
          <input type="hidden" id="from_branch_hid" name="from_branch_hid">
    <ul class="dropdown-menu" id="from_branch_id" role="menu" aria-labelledby="menu1">

    </ul>
  </div>  	  </div>	
    </div>
    <div class="form-group">
   	  <label class="control-label col-sm-2" for="country">To Branch</label>
      <div class="col-sm-3">
      <div class="dropdown">    
          <input type="text" autocomplete="off" onkeyup="autobranch(this.value,this.id)" class="form-control" id="to_branch" placeholder="Enter To Branch" required name="to_branch">
          <input type="hidden" id="to_branch_hid" name="to_branch_hid">

    <ul class="dropdown-menu" role="menu" id="to_branch_id" aria-labelledby="menu1">
      
    </ul>
  </div>  	  </div>	
    </div>
    

    <div class="form-group">
   	  <label class="control-label col-sm-2" for="country">Booking Date</label>
       <div class="col-sm-3">
      <input type="date" class="form-control" id="booking_date" required name="booking_date">
  	  </div>	
    </div>

    <div class="form-group">
   	  <label class="control-label col-sm-2" for="country">Enter Item value</label>
       <div class="col-sm-3">
      <input type="text" class="form-control" id="item_value" required name="item_value">
  	  </div>	
    </div>
    <div class="form-group">
   	  <label class="control-label col-sm-2" for="country">Enter Item Weight</label>
       <div class="col-sm-3">
      <input type="text" class="form-control" id="item_weight" required name="item_weight">
  	  </div>	
    </div>

    <div class="form-group">
   	  <label class="control-label col-sm-2" for="country">Delivery Charge</label>
       <div class="col-sm-3">
      <input type="text" class="form-control" id="delivery_charge" required name="delivery_charge">
  	  </div>	
    </div>

    <div class="form-group">
   	  <label class="control-label col-sm-2" for="country">Expected Date Of Delivery</label>
       <div class="col-sm-3">
      <input type="date" class="form-control" id="edod" required name="edod">
  	  </div>	
    </div>

   <div class="form-group">
   <div class="col-sm-offset-2 col-sm-10">
    <button type="submit" id="lr_form_button" class="btn btn-default">Save</button>
    </div>
    </div>
  </form>
   </div>
</div>
</div>


<div class="container">
  <h2>Branch Table</h2>
  <div class="table-responsive"> 
  <div class="col-md-10">          
  <table class="table table-bordered" id="country_table">
    <thead>
      <tr>
      <th>Lr Number</th>
        <th>Name</th>
        <th>mobile Number</th>
        <th>Date of Booking</th>
        <th>Item Details</th>
        <th>Action</th>
       
      </tr>
    </thead>
    <tbody id="lr_form_body">
      
      
    </tbody>
  </table>
</div>
</div>
</div>



<script>
showlrform();
</script>