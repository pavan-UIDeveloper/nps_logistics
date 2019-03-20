<?php 

include "header.php";



?>

<div class="container">
  <div id="result" style="display:none">

   </div>
	<button type="button" onclick="showinput('add_mandal_form')" class="btn btn-primary">Add New Mandal</button>
    
  <div class="row" id="add_mandal_form_div" style="display:none">
   
  	<form class="form-horizontal" id="add_mandal_form">
<div class="form-group">
<label class="control-label col-sm-2" for="country">Country</label>
  <div class="col-sm-3">
      <select onchange="show_country_wise_states(this.value)" id="country_drop_down" name="mandal_cn" class="form-control">
      
      </select>
  </div>
</div>
<div class="form-group">
<label class="control-label col-sm-2" for="country">State</label>
  <div class="col-sm-3">
      <select onchange="show_state_wise_districts(this.value)" id="state_drop_down" name="mandal_sn" class="form-control">
      <option>Select State</option>
      </select>
  </div>
</div>
<div class="form-group">
<label class="control-label col-sm-2" for="country">District</label>
  <div class="col-sm-3">
      <select id="district_drop_down" name="mandal_dn" class="form-control">
      <option>Select District</option>
      </select>
  </div>
</div>
    <div class="form-group">
   	  <label class="control-label col-sm-2" for="country">Mandal</label>
      <div class="col-sm-3">
      <input type="text" class="form-control" id="add_district" placeholder="Enter Mandal" required name="mandal_name">
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
  <h2>Mandals Table</h2>
  <div class="table-responsive"> 
  <div class="col-md-10">          
  <table class="table table-bordered" id="country_table">
    <thead>
      <tr>
        <th>Country Name</th>
        <th>State Name</th>
        <th>District Name</th>
        <th>Mandal Name</th>
        <th>Action</th>
       
      </tr>
    </thead>
    <tbody id="mandal_table_body">
      
      
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
          <h4 class="modal-title">Mandal Edit</h4>
        </div>
        <form class="form-horizontal" id="edit_mandal_form">
        <div class="form-group">
        <label class="control-label col-sm-2" for="country">Country</label>
      <div class="col-sm-3">
      <select onchange="show_country_wise_states(this.value)" id="country_drop_down_edit_mandal" name="mandal_cn" class="form-control">
      
      </select>
     
      </div>
   </div>
   <div class="form-group">
        <label class="control-label col-sm-2" for="country">State</label>
      <div class="col-sm-3">
      <select onchange="show_state_wise_districts(this.value)" id="state_drop_down_edit_mandal" name="mandal_sn" class="form-control">
      
      </select>
     
      </div>
   </div>
   <div class="form-group">
        <label class="control-label col-sm-2" for="country">District</label>
      <div class="col-sm-3">
      <select id="district_drop_down_edit_mandal" name="mandal_dn" class="form-control">
      
      </select>
     
      </div>
   </div>
   <input type="hidden" class="form-control" id="mandal_edit_rec_id" name="rec_id">
    <div class="form-group">
   	  <label class="control-label col-sm-2" for="country">Mandal</label>
      <div class="col-sm-3">
      <input type="text" class="form-control" id="mandal_edit_name" name="mandal_name">
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
showmandals();
show_country_wise_states(0);
show_state_wise_districts(0);
</script>