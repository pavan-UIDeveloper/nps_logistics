//this below function is used to diplay or hide the add country 
var root_path="http://localhost/nps_logistic";
function showaddcountry(){
	//$("#addcountry").show();
	var form=$("#add_country_form")['0'];
	$("#addcountry").slideToggle('slow');
	form.reset();
	$("#result").html("");
	$("#result").hide();

	
	}
	
	function showinput(divid){
		//$("#addcountry").show();
		var form=$("#"+divid)['0'];
		$("#"+divid+"_div").slideToggle('slow');
	
		form.reset();
		$("#result").html("");
		$("#result").hide();
	
		
		}

$(document).ready(function(){
//to add countries
$("#add_country_form").on("submit",function(e){
	e.preventDefault();
	
	var form=$("#add_country_form")['0'];
	$.ajax({
		url:root_path+"/api/country_save.php",
		type:"POST",
		dataType:"JSON",
		data:new FormData(form),
		processData: false,
	    contentType: false,
		success: function(response){
			if(response.success){
				$("#result").show();
					var msg="<strong>Success!</strong> "+response.message;
					$("#result").html(msg);
					$("#result").addClass("alert alert-success");
					form.reset();
					$("#add_country_form_div").slideUp('slow');
					showcountries();
				}
		}
	});
	});


	//lr form saving
	$("#lr_form").on("submit",function(e){
		e.preventDefault();
		
		var form=$("#lr_form")['0'];
		$.ajax({
			url:root_path+"/api/lr_form_save.php",
			type:"POST",
			dataType:"JSON",
			data:new FormData(form),
			processData: false,
			contentType: false,
			success: function(response){
				if(response.success){
					$("#result").show();
						var msg="<strong>Success!</strong> "+response.message;
						$("#result").html(msg);
						$("#result").addClass("alert alert-success");
						form.reset();
						$("#add_state_form_div").slideUp('slow');
						showlrform();
				}
			}
	
	
		});
		
		});

//to Edit Country
	$("#edit_country_form").on("submit",function(e){
		e.preventDefault();
		
		var form=$("#edit_country_form")['0'];
		$.ajax({
			url:root_path+"/api/edit_country.php",
			type:"POST",
			dataType:"JSON",
			data:new FormData(form),
			processData: false,
			contentType: false,
			success: function(response){
				if(response.success){
					$("#result").show();
						var msg="<strong>Success!</strong> "+response.message;
						$("#result").html(msg);
						$("#result").addClass("alert alert-success");
						$('#myModal').modal('hide');
						showcountries();
					}
			}
		});
		});

//to add states
$("#add_state_form").on("submit",function(e){
	e.preventDefault();
	
	var form=$("#add_state_form")['0'];
	$.ajax({
		url:root_path+"/api/state_save.php",
		type:"POST",
		dataType:"JSON",
		data:new FormData(form),
		processData: false,
	    contentType: false,
		success: function(response){
			if(response.success){
				$("#result").show();
					var msg="<strong>Success!</strong> "+response.message;
					$("#result").html(msg);
					$("#result").addClass("alert alert-success");
					form.reset();
					$("#add_state_form_div").slideUp('slow');
					showstates();
			}
		}


	});
		
	
	});

	$("#add_branches_form").on("submit",function(e){
		e.preventDefault();
		
		var form=$("#add_branches_form")['0'];
		$.ajax({
			url:root_path+"/api/branch_save.php",
			type:"POST",
			dataType:"JSON",
			data:new FormData(form),
			processData: false,
			contentType: false,
			success: function(response){
				if(response.success){
					$("#result").show();
						var msg="<strong>Success!</strong> "+response.message;
						$("#result").html(msg);
						$("#result").addClass("alert alert-success");
						form.reset();
						$("#add_state_form_div").slideUp('slow');
						showbranches();
				}
			}
	
	
		});
			
		
		});



//to Edit State
	$("#edit_state_form").on("submit",function(e){
		e.preventDefault();
		
		var form=$("#edit_state_form")['0'];
		$.ajax({
			url:root_path+"/api/state_edit.php",
			type:"POST",
			dataType:"JSON",
			data:new FormData(form),
			processData: false,
			contentType: false,
			success: function(response){
				if(response.success){
					$("#result").show();
						var msg="<strong>Success!</strong> "+response.message;
						$("#result").html(msg);
						$("#result").addClass("alert alert-success");
						$('#myModal').modal('hide');
						showstates();
					}
			}
		});
		});

//to Edit District
$("#edit_district_form").on("submit",function(e){
	e.preventDefault();
	
	var form=$("#edit_district_form")['0'];
	$.ajax({
		url:root_path+"/api/district_edit.php",
		type:"POST",
		dataType:"JSON",
		data:new FormData(form),
		processData: false,
		contentType: false,
		success: function(response){
			if(response.success){
				$("#result").show();
					var msg="<strong>Success!</strong> "+response.message;
					$("#result").html(msg);
					$("#result").addClass("alert alert-success");
					$('#myModal').modal('hide');
					showdistricts();
				}
		}
	});
	});

	//to Edit Mandal
	$("#edit_mandal_form").on("submit",function(e){
		e.preventDefault();
		
		var form=$("#edit_mandal_form")['0'];
		$.ajax({
			url:root_path+"/api/mandal_edit.php",
			type:"POST",
			dataType:"JSON",
			data:new FormData(form),
			processData: false,
			contentType: false,
			success: function(response){
				if(response.success){
					$("#result").show();
						var msg="<strong>Success!</strong> "+response.message;
						$("#result").html(msg);
						$("#result").addClass("alert alert-success");
						$('#myModal').modal('hide');
						showmandals();
					}
			}
		});
		});
	//to Edit village

		$("#edit_village_form").on("submit",function(e){
			e.preventDefault();
			
			var form=$("#edit_village_form")['0'];
			$.ajax({
				url:root_path+"/api/village_edit.php",
				type:"POST",
				dataType:"JSON",
				data:new FormData(form),
				processData: false,
				contentType: false,
				success: function(response){
					if(response.success){
						$("#result").show();
							var msg="<strong>Success!</strong> "+response.message;
							$("#result").html(msg);
							$("#result").addClass("alert alert-success");
							$('#myModal').modal('hide');
							showvillages();
						}
				}
			});
			});
	//to Edit branches

	$("#edit_branches_form").on("submit",function(e){
		e.preventDefault();
		
		var form=$("#edit_branches_form")['0'];
		$.ajax({
			url:root_path+"/api/branches_edit.php",
			type:"POST",
			dataType:"JSON",
			data:new FormData(form),
			processData: false,
			contentType: false,
			success: function(response){
				if(response.success){
					$("#result").show();
						var msg="<strong>Success!</strong> "+response.message;
						$("#result").html(msg);
						$("#result").addClass("alert alert-success");
						$('#myModal').modal('hide');
						showbranches();
					}
			}
		});
		});

//to add Districts
$("#add_district_form").on("submit",function(e){
	e.preventDefault();
	
	var form=$("#add_district_form")['0'];
	$.ajax({
		url:root_path+"/api/district_save.php",
		type:"POST",
		dataType:"JSON",
		data:new FormData(form),
		processData: false,
	    contentType: false,
		success: function(response){
			if(response.success){
				$("#result").show();
					var msg="<strong>Success!</strong> "+response.message;
					$("#result").html(msg);
					$("#result").addClass("alert alert-success");
					form.reset();
					$("#add_district_form_div").slideUp('slow');
					showdistricts();
			}
		}
	});
});

//to add mandals
$("#add_mandal_form").on("submit",function(e){
	e.preventDefault();
	
	var form=$("#add_mandal_form")['0'];
	$.ajax({
		url:root_path+"/api/mandal_save.php",
		type:"POST",
		dataType:"JSON",
		data:new FormData(form),
		processData: false,
	    contentType: false,
		success: function(response){
			if(response.success){
				$("#result").show();
					var msg="<strong>Success!</strong> "+response.message;
					$("#result").html(msg);
					$("#result").addClass("alert alert-success");
					form.reset();
					$("#add_mandal_form_div").slideUp('slow');
					showmandals();
			}
		}
	});
});

//to add villages
$("#add_village_form").on("submit",function(e){
	e.preventDefault();
	
	var form=$("#add_village_form")['0'];
	$.ajax({
		url:root_path+"/api/village_save.php",
		type:"POST",
		dataType:"JSON",
		data:new FormData(form),
		processData: false,
	    contentType: false,
		success: function(response){
			if(response.success){
				$("#result").show();
					var msg="<strong>Success!</strong> "+response.message;
					$("#result").html(msg);
					$("#result").addClass("alert alert-success");
					form.reset();
					$("#add_village_form_div").slideUp('slow');
					showvillages();
			}
		}
	});
});



//to countries drop down

$.ajax({
	url:root_path+"/api/get_country.php",
	dataType:"JSON",
	success: function(response){
		var option="<option>Select Country</option>";
		$.each(response,function(i,v){
			option+="<option value='"+v.rec_id+"'>"+v.country_name+"</option>";
		});
		$("#country_drop_down").html(option);
		$("#country_drop_down_edit_state").append(option);
		$("#country_drop_down_edit_district").html(option);
		$("#country_drop_down_edit_mandal").html(option);
		$("#country_drop_down_edit_village").html(option);
		$("#country_drop_down_edit_branches").html(option);

	}
});	


});



//to state wise districts drop down
function show_state_wise_districts(state_id){

	$.ajax({
		url:root_path+"/api/get_state_wise_districts.php",
		dataType:"JSON",
		data:{state_id:state_id},
		type:"POST",
		success: function(response){
			var option="<option>Select District</option>";
			$.each(response,function(i,v){
				option+="<option value='"+v.rec_id+"'>"+v.district_name+"</option>";
			});
			$("#district_drop_down").html(option);
			$("#district_drop_down_edit_mandal").html(option);
			$("#district_drop_down_edit_village").html(option);
			$("#district_drop_down_edit_branches").html(option);


		}
	});	
}
//to district wise mandals drop down
function show_district_wise_mandals(district_id){

	$.ajax({
		url:root_path+"/api/get_district_wise_mandals.php",
		dataType:"JSON",
		data:{district_id:district_id},
		type:"POST",
		success: function(response){
			var option="<option>Select Mandal</option>";
			$.each(response,function(i,v){
				option+="<option value='"+v.rec_id+"'>"+v.mandal_name+"</option>";
			});
			$("#mandal_drop_down").html(option);
			$("#mandal_drop_down_edit_village").html(option);
			$("#mandal_drop_down_edit_branches").html(option);

		}
	});	
}

//to mandal wise villages drop down
function show_mandal_wise_villages(mandal_id){

	$.ajax({
		url:root_path+"/api/get_mandal_wise_villages.php",
		dataType:"JSON",
		data:{mandal_id:mandal_id},
		type:"POST",
		success: function(response){
			var option="<option>Select Village</option>";
			$.each(response,function(i,v){
				option+="<option value='"+v.rec_id+"'>"+v.village_name+","+v.pincode+"</option>";
			});
			$("#village_drop_down").html(option);
			$("#village_drop_down_edit_branches").html(option);


		}
	});	
}

//to display countries
function showcountries(){
	$.ajax({
		url:root_path+"/api/get_country.php",
		dataType:"JSON",
		success: function(response){
			var tbody="";
			$.each(response,function(i,v){
					
					tbody+="<tr></tr><td>"+v.country_name+"</td>";
					tbody+='<td><img width="60px" height="60px" src="useruploads/'+v.rec_id+'_'+v.flag+'"</td>';
					tbody+="<td><a onclick='get_country("+v.rec_id+")' data-toggle='modal' data-target='#myModal'><i class='fa fa-pencil text-primary' aria-hidden='true'></i></a> | <a onclick='deletecountry("+v.rec_id+","+0+")'><i class='fa fa-trash text-danger' aria-hidden='true'></i></a></td></tr>";				
		});
		$("#country_table_body").html(tbody);
	}
	});
}
//to display lrform
function showlrform(){
	$.ajax({
		url:root_path+"/api/get_lr_form.php",
		dataType:"JSON",
		success: function(response){
			var tbody="";
			$.each(response,function(i,v){
										
					tbody+='<tr><td>'+v.lr_id+'</td>';
					tbody+='<td>'+v.customer_name+'</td>';
					tbody+='<td>'+v.mobile_number+'</td>';
					tbody+='<td>'+v.edod+'</td>';
					tbody+='<td>Value:'+v.item_value+'<br>Wiight:'+v.item_weight+'<br>Date of Booking:'+v.date_of_booking+'</td>';
					tbody+="<td><a onclick='get_country("+v.rec_id+")' data-toggle='modal' data-target='#myModal'><i class='fa fa-pencil text-primary' aria-hidden='true'></i></a> | <a onclick='deletecountry("+v.rec_id+","+6+")'><i class='fa fa-trash text-danger' aria-hidden='true'></i></a></td></tr>";				
		});
		$("#lr_form_body").html(tbody);
	}
	});
}



//populate data in country edit form
function get_country(rec_id){
	$.ajax({
		url:root_path+"/api/get_countryedit.php",
		dataType:"JSON",
		type:"POST",
		data:{rec_id:rec_id},
		success: function(response){
			var country=response.country_name;
			var recid=response.rec_id;
			var option="<option>"+response.country_name+"</option>"
			$("#country_hidden").val(recid);
		$("#add_country_model").val(country);
		
		}
		});
	}
//to display states
function showstates(){
	$.ajax({
		url:"http://localhost/nps_logistic/api/get_states.php",
		dataType:"JSON",
		success: function(response){
			var tbody="";
			$.each(response,function(i,v){
					tbody+="<tr><td>"+v.country_name+"</td>";
					tbody+='<td>'+v.state_name+'</td>';
					tbody+="<td><a onclick='state_edit("+v.rec_id+")' data-toggle='modal' data-target='#myModal'><i class='fa fa-pencil text-primary' aria-hidden='true'></i></a> | <a onclick='deletecountry("+v.rec_id+","+1+")'><i class='fa fa-trash text-danger' aria-hidden='true'></i></a></td></tr>";				
		});
		$("#state_table_body").html(tbody);
	}
	});
}

//populate data in state edit form
function state_edit(rec_id){
	$.ajax({
		url:"http://localhost/nps_logistic/api/get_state_edit.php",
		dataType:"JSON",
		type:"POST",
		data:{rec_id:rec_id},
		success:function(response){
			$("#country_drop_down_edit_state").val(response.country_id);
			
			$("#state_edit_name").val(response.state_name);
			$("#state_edit_rec_id").val(response.rec_id);
		}
	});
}

//to country wise states drop down
function show_country_wise_states(country_id){

	$.ajax({
		url:root_path+"/api/get_country_wise_states.php",
		dataType:"JSON",
		data:{country_id:country_id},
		type:"POST",
		success: function(response){
			var option="<option>Select state</option>";
			$.each(response,function(i,v){
				option+="<option value='"+v.rec_id+"'>"+v.state_name+"</option>";
			});
			if($("#state_drop_down").length){			
			$("#state_drop_down").html(option);
			}
		
			$("#state_drop_down_edit_district").html(option);
			$("#state_drop_down_edit_mandal").html(option);
			$("#state_drop_down_edit_village").html(option);
			$("#state_drop_down_edit_branches").html(option);


			
		}
	});	
}


//populate data in district edit form
function district_edit(rec_id){
	$.ajax({
		url:"http://localhost/nps_logistic/api/get_district_edit.php",
		dataType:"JSON",
		type:"POST",
		data:{rec_id:rec_id},
		success:function(response){
			$("#country_drop_down_edit_district").val(response.country_id);
			
			$("#state_drop_down_edit_district").val(response.state_id);
			$("#district_edit_rec_id").val(response.rec_id);
			$("#district_edit_name").val(response.district_name);
			
		}
	});
}


//populate data in mandal edit form
function mandal_edit(rec_id){
	$.ajax({
		url:"http://localhost/nps_logistic/api/get_mandal_edit.php",
		dataType:"JSON",
		type:"POST",
		data:{rec_id:rec_id},
		success:function(response){
			$("#country_drop_down_edit_mandal").val(response.country_id);
			
			$("#state_drop_down_edit_mandal").val(response.state_id);
			$("#district_drop_down_edit_mandal").val(response.district_id);

			$("#mandal_edit_rec_id").val(response.rec_id);
			$("#mandal_edit_name").val(response.mandal_name);
		}
	});
}

//populate data in village edit form
function village_edit(rec_id){
	$.ajax({
		url:"http://localhost/nps_logistic/api/get_village_edit.php",
		dataType:"JSON",
		type:"POST",
		data:{rec_id:rec_id},
		success:function(response){
			$("#country_drop_down_edit_village").val(response.country_id);
			
			$("#state_drop_down_edit_village").val(response.state_id);
			$("#district_drop_down_edit_village").val(response.district_id);
			$("#mandal_drop_down_edit_village").val(response.mandal_id);

			$("#village_edit_rec_id").val(response.rec_id);
			$("#village_edit_name").val(response.village_name);
			$("#village_edit_pincode").val(response.pincode);

		}
	});
}

//populate data in branches edit form
function branch_edit(rec_id){
	$.ajax({
		url:"http://localhost/nps_logistic/api/get_branch_edit.php",
		dataType:"JSON",
		type:"POST",
		data:{rec_id:rec_id},
		success:function(response){
			$("#country_drop_down_edit_branches").val(response.country_id);
			
			$("#state_drop_down_edit_branches").val(response.state_id);
			$("#district_drop_down_edit_branches").val(response.district_id);
			$("#mandal_drop_down_edit_branches").val(response.mandal_id);
			$("#village_drop_down_edit_branches").val(response.village_id);
			$("#branch_edit_rec_id").val(response.rec_id);
			$("#land_mark_edit").val(response.land_mark);
			$("#branch_name_edit").val(response.branch_name);
			$("#door_number_edit").val(response.Door_number);


		}
	});
}


//to display districts
function showdistricts(){
	$.ajax({
		url:"http://localhost/nps_logistic/api/get_districts.php",
		dataType:"JSON",
		success: function(response){
			var tbody="";
		$.each(response,function(i,v){
					tbody+="<tr><td>"+v.country_name+"</td>";
					tbody+='<td>'+v.state_name+'</td>';
					tbody+='<td>'+v.district_name+'</td>';
					tbody+="<td><a onclick='district_edit("+v.rec_id+")' data-toggle='modal' data-target='#myModal'><i class='fa fa-pencil text-primary' aria-hidden='true'></i></a> | <a onclick='deletecountry("+v.rec_id+","+2+")'><i class='fa fa-trash text-danger' aria-hidden='true'></i></a></td></tr>";				
		});
		$("#district_table_body").html(tbody);
	}
	});
}

//to display branches
function showbranches(){
	$.ajax({
		url:"http://localhost/nps_logistic/api/get_branches.php",
		dataType:"JSON",
		success: function(response){
			var tbody="";
		$.each(response,function(i,v){
			var map='<div style="width: 100%"><iframe width="100%" height="600" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q='+v.land_mark+','+v.village_name+','+v.district_name+','+v.state_name+'+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/map-my-route/">Create a route on google maps</a></iframe></div><br />'

					tbody+="<tr><td>"+v.branch_name+"</td>";
					tbody+='<td>'+v.village_name+'</td>';
					tbody+='<td>'+v.Door_number+'</td>';
					tbody+='<td>'+v.land_mark+'</td>';
					tbody+='<td width="50%">'+map+'</td>';
					tbody+="<td><a onclick='branch_edit("+v.rec_id+")' data-toggle='modal' data-target='#myModal'><i class='fa fa-pencil text-primary' aria-hidden='true'></i></a> | <a onclick='deletecountry("+v.rec_id+","+5+")'><i class='fa fa-trash text-danger' aria-hidden='true'></i></a></td></tr>";				
		});
		$("#branch_table_body").html(tbody);
	}
	});
}

//to display mandals
function showmandals(){
	$.ajax({
		url:"http://localhost/nps_logistic/api/get_mandals.php",
		dataType:"JSON",
		success: function(response){
			var tbody="";
			$.each(response,function(i,v){
					tbody+="<tr><td>"+v.country_name+"</td>";
					tbody+='<td>'+v.state_name+'</td>';
					tbody+='<td>'+v.district_name+'</td>';
					tbody+='<td>'+v.mandal_name+'</td>';
					tbody+="<td><a onclick='mandal_edit("+v.rec_id+")' data-toggle='modal' data-target='#myModal'><i class='fa fa-pencil text-primary' aria-hidden='true'></i></a> | <a onclick='deletecountry("+v.rec_id+","+3+")'><i class='fa fa-trash text-danger' aria-hidden='true'></i></a></td></tr>";				
		});
		$("#mandal_table_body").html(tbody);
	}
	});
}

//to display villages
function showvillages(){
	$.ajax({
		url:"http://localhost/nps_logistic/api/get_villages.php",
		dataType:"JSON",
		success: function(response){
			var tbody="";
			$.each(response,function(i,v){
					tbody+="<tr><td>"+v.country_name+"</td>";
					tbody+='<td>'+v.state_name+'</td>';
					tbody+='<td>'+v.district_name+'</td>';
					tbody+='<td>'+v.mandal_name+'</td>';
					tbody+='<td>'+v.village_name+'</td>';
					tbody+='<td>'+v.pincode+'</td>';
					tbody+="<td><a onclick='village_edit("+v.rec_id+")' data-toggle='modal' data-target='#myModal'><i class='fa fa-pencil text-primary' aria-hidden='true'></i></a> | <a onclick='deletecountry("+v.rec_id+","+4+")'><i class='fa fa-trash text-danger' aria-hidden='true'></i></a></td></tr>";				
		});
		$("#village_table_body").html(tbody);
	}
	});
}
//delete
function deletecountry(rec_id,a){
	var cnf=confirm("Are you Sure want to Delete");
	if(cnf){
	$.ajax({
		url:"http://localhost/nps_logistic/api/delete_country.php",
		dataType:"JSON",
		type:"POST",
		data:{rec_id:rec_id,a:a},
		success: function(response){
				if(response.success){
					$("#result").show();
					var msg="<strong>Success!</strong> "+response.message;
					$("#result").html(msg);
					$("#result").addClass("alert alert-warning");
					showcountries();
					showstates();
					showdistricts();
					showmandals();
					showvillages();
					showlrform();

				}
		}
	});
}
}

//Edit Country
function editcountry(rec_id){
	
	$.ajax({
		url:"http://localhost/nps_logistic/api/edit_country.php",
		dataType:"JSON",
		type:"POST",
		data:{rec_id:rec_id,},
		success: function(response){
				if(response.success){
					$("#result").show();
					var msg="<strong>Success!</strong> "+response.message;
					$("#result").html(msg);
					$("#result").addClass("alert alert-warning");
					showcountries();
					showstates();
					showdistricts();
					showmandals();
					showvillages();
				}
		}
	});


}

//this is for LR Form

function autobranch(value,id){
	if(value.length>=2){
$.ajax({
	url:"http://localhost/nps_logistic/api/get_auto_suggest_value.php",
	data:{value:value},
	type:"POST",
	dataType:"JSON",
	success:function(response){
		var op="";
		$.each(response,function(i,v){
		op+='<li value="'+v.rec_id+'" onclick="txtadd(\''+v.branch_name+'\',\''+id+'\',\''+v.rec_id+'\')" id="'+id+'_li" role="presentation"><a role="menuitem" tabindex="-1" href="#">'+v.branch_name+'</a></li>'
		
		});
		$('#'+id+'_id').show();
		$('#'+id+'_id').html(op);
		
	}
});
}else{
	$('#'+id+'_id').hide();

}

}
function txtadd(brnchname,id,recid){

	$("#"+id).val(brnchname);
	$('#'+id+'_hid').val(recid);
	$('#'+id+'_id').hide();
	
	
	}

