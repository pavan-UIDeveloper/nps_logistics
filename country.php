<?php 

include "header.php";



?>

<div class="container">
  <div id="result" style="display:none">

   </div>
	<button type="button" onclick="showinput('add_country_form')" class="btn btn-primary">Add New Country</button>
    
  <div class="row" id="add_country_form_div" style="display:none">
   
  	<form class="form-horizontal" id="add_country_form" enctype='multipart/form-data'>
    <div class="form-group">
   	 
      <label class="control-label col-sm-2" for="country">Country</label>
      <div class="col-sm-3">
      <input type="text" class="form-control" id="add_country" placeholder="Enter Country" required name="country">
  	  </div>	
    </div>

    <div class="form-group">
      <label class="col-sm-2 control-label" for="flag">Country Flag</label>
      <div class="col-sm-3">
      <input type="file" class="form-control-file" id="flag" required name="flag">
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
  <h2>Countries Table</h2>
  <div class="table-responsive"> 
  <div class="col-md-10">          
  <table class="table table-bordered" id="country_table">
    <thead>
      <tr>
        <th>Country Name</th>
        <th>Flag</th>
        <th>Action</th>
       
      </tr>
    </thead>
    <tbody id="country_table_body">
      
      
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
          <h4 class="modal-title">Country Edit</h4>
        </div>
        <form class="form-horizontal" id="edit_country_form" enctype='multipart/form-data'>
    <div class="form-group">
   	 
      <label class="control-label col-sm-2" for="country">Country</label>
      <div class="col-sm-3">
      <input type="text" class="form-control" id="add_country_model" placeholder="Enter Country" required name="country">
  	  </div>	
    </div>

    <div class="form-group">
      <label class="col-sm-2 control-label" for="flag">Country Flag</label>
      <div class="col-sm-3">
      <input type="hidden" id="country_hidden" name="rec_id">
      <input type="file" class="form-control-file" id="flag" name="flag">
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
showcountries();
</script>