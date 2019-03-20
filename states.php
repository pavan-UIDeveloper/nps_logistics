<?php 

include "header.php";



?>

<div class="container">
  <div id="result" style="display:none">

   </div>
	<button type="button" onclick="showinput('add_state_form')" class="btn btn-primary">Add New State</button>
    
  <div class="row" id="add_state_form_div" style="display:none">
   
  	<form class="form-horizontal" id="add_state_form">


<div class="form-group">
<label class="control-label col-sm-2" for="country">Country</label>
      <div class="col-sm-3">
      <select id="country_drop_down" name="state_cn" class="form-control">
      
      </select>
     
      </div>
   </div>

    <div class="form-group">
   	  <label class="control-label col-sm-2" for="country">State</label>
      <div class="col-sm-3">
      <input type="text" class="form-control" id="add_country" placeholder="Enter State" required name="state_name">
  	  </div>	
    </div>

    
   <div class="form-group">
   <div class="col-sm-offset-2 col-sm-10">
    <button type="submit" id="add_country_button" class="btn btn-default">Save</button>
    </div>
    </div>
  </form>
   </div>
</div>
</div>


<div class="container">
  <h2>States Table</h2>
  <div class="table-responsive"> 
  <div class="col-md-10">          
  <table class="table table-bordered" id="country_table">
    <thead>
      <tr>
        <th>Country Name</th>
        <th>State Name</th>
        <th>Action</th>
       
      </tr>
    </thead>
    <tbody id="state_table_body">
      
      
    </tbody>
  </table>
</div>
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">State Edit</h4>
        </div>
        <form class="form-horizontal" id="edit_state_form">
        <div class="form-group">
        <label class="control-label col-sm-2" for="country">Country</label>
      <div class="col-sm-3">
      <select id="country_drop_down_edit_state" name="state_cn" class="form-control">
      
      </select>
     
      </div>
   </div>
   <input type="hidden" class="form-control" id="state_edit_rec_id" name="rec_id">
    <div class="form-group">
   	  <label class="control-label col-sm-2" for="country">State</label>
      <div class="col-sm-3">
      <input type="text" class="form-control" id="state_edit_name" placeholder="Enter State" required name="state_name">
  	  </div>	
    </div>

    
   <div class="form-group">
   <div class="col-sm-offset-2 col-sm-10">
    <button type="submit" id="add_country_button" class="btn btn-default">Save</button>
    </div>
    </div>
  </form>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<script>
showstates();
</script>