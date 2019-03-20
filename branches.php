<?php 

include "header.php";



?>

<div class="container">
  <div id="result" style="display:none">

   </div>
	<button type="button" onclick="showinput('add_branches_form')" class="btn btn-primary">Add New Branch</button>
    
  <div class="row" id="add_branches_form_div" style="display:none">
   
  	<form class="form-horizontal" id="add_branches_form">
<div class="form-group">
<label class="control-label col-sm-2" for="country">Country</label>
  <div class="col-sm-3">
      <select onchange="show_country_wise_states(this.value)" id="country_drop_down" name="branches_cn" class="form-control">
      
      </select>
  </div>
</div>
<div class="form-group">
<label class="control-label col-sm-2" for="country">State</label>
  <div class="col-sm-3">
      <select onchange="show_state_wise_districts(this.value)" id="state_drop_down" name="branches_sn" class="form-control">
      <option>Select State</option>
      </select>
  </div>
</div>
<div class="form-group">
<label class="control-label col-sm-2" for="country">District</label>
  <div class="col-sm-3">
      <select onchange="show_district_wise_mandals(this.value)" id="district_drop_down" name="branches_dn" class="form-control">
      <option>Select District</option>
      </select>
  </div>
</div>
<div class="form-group">
<label class="control-label col-sm-2" for="country">Mandal</label>
  <div class="col-sm-3">
      <select onchange="show_mandal_wise_villages(this.value)" id="mandal_drop_down" name="branches_mn" class="form-control">
      <option>Select Mandal</option>
      </select>
  </div>
</div>
<div class="form-group">
<label class="control-label col-sm-2" for="country">Villlage</label>
  <div class="col-sm-3">
      <select id="village_drop_down" name="branches_vn" class="form-control">
      <option>Select Village</option>
      </select>
  </div>
</div>

    <div class="form-group">
   	  <label class="control-label col-sm-2" for="country">Branch Name</label>
      <div class="col-sm-3">
      <input type="text" class="form-control" id="branch_name" placeholder="Enter Branch Name" required name="branch_name">
  	  </div>	
    </div>
    <div class="form-group">
   	  <label class="control-label col-sm-2" for="country">Door Number</label>
      <div class="col-sm-3">
      <input type="text" class="form-control" id="door_number" placeholder="Enter DoorNumber" required name="door_number">
  	  </div>	
    </div>
    <div class="form-group">
   	  <label class="control-label col-sm-2" for="country">Land Mark</label>
      <div class="col-sm-3">
      <input type="text" class="form-control" id="land_mark" placeholder="Enter Land" required name="land_mark">
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
  <h2>Branch Table</h2>
  <div class="table-responsive"> 
  <div class="col-md-10">          
  <table class="table table-bordered" id="country_table">
    <thead>
      <tr>
        <th>Branch Name</th>
        <th>village Name</th>
        <th>Door Number</th>
        <th>Landmark</th>
        <th>MAP</th>
        <th>Action</th>
       
      </tr>
    </thead>
    <tbody id="branch_table_body">
      
      
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
          <h4 class="modal-title">Branches Edit</h4>
        </div>
        <form class="form-horizontal" id="edit_branches_form">
<div class="form-group">
<label class="control-label col-sm-2" for="country">Country</label>
  <div class="col-sm-3">
      <select onchange="show_country_wise_states(this.value)" id="country_drop_down_edit_branches" name="branches_cn" class="form-control">
      
      </select>
  </div>
</div>
<div class="form-group">
<label class="control-label col-sm-2" for="country">State</label>
  <div class="col-sm-3">
      <select onchange="show_state_wise_districts(this.value)" id="state_drop_down_edit_branches" name="branches_sn" class="form-control">
      <option>Select State</option>
      </select>
  </div>
</div>
<div class="form-group">
<label class="control-label col-sm-2" for="country">District</label>
  <div class="col-sm-3">
      <select onchange="show_district_wise_mandals(this.value)" id="district_drop_down_edit_branches" name="branches_dn" class="form-control">
      <option>Select District</option>
      </select>
  </div>
</div>
<div class="form-group">
<label class="control-label col-sm-2" for="country">Mandal</label>
  <div class="col-sm-3">
      <select onchange="show_mandal_wise_villages(this.value)" id="mandal_drop_down_edit_branches" name="branches_mn" class="form-control">
      <option>Select Mandal</option>
      </select>
  </div>
</div>
<div class="form-group">
<label class="control-label col-sm-2" for="country">Villlage</label>
  <div class="col-sm-3">
      <select id="village_drop_down_edit_branches" name="branches_vn" class="form-control">
      <option>Select Village</option>
      </select>
  </div>
</div>

    <div class="form-group">
   	  <label class="control-label col-sm-2" for="country">Branch Name</label>
      <div class="col-sm-3">
      <input type="text" class="form-control" id="branch_name_edit" placeholder="Enter Branch Name" required name="branch_name_edit">
  	  </div>	
    </div>
    <input type="hidden" id="branch_edit_rec_id" name="rec_id">
    <div class="form-group">
   	  <label class="control-label col-sm-2" for="country">Door Number</label>
      <div class="col-sm-3">
      <input type="text" class="form-control" id="door_number_edit" placeholder="Enter DoorNumber" required name="door_number_edit">
  	  </div>	
    </div>
    <div class="form-group">
   	  <label class="control-label col-sm-2" for="country">Land Mark</label>
      <div class="col-sm-3">
      <input type="text" class="form-control" id="land_mark_edit" placeholder="Enter Land" required name="land_mark_edit">
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
showbranches();
show_country_wise_states(0);
show_state_wise_districts(0);
show_district_wise_mandals(0);
show_mandal_wise_villages(0);
</script>