<?php
	include_once 'header.php';
	include_once 'navbar.php';
?>
	<div id="wrapper">
		<div id="page-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						
						<input type="button" class="btn btn-primary" value="Add New" id="toggle_div"/> </br></br>
						<input type="hidden" name="position" id="accountStatus" value="0" class="form-control"/>
						<!--Add Employee Form-->
						<div class="panel panel-default" id="addNew_div">
							<div class="panel-heading">
								<h3 class="panel-title">Add New Staff</h3>
							</div>
							
							<div class="panel-body">
								<form>
								  <div class="form-group">
									<label>Employee Name<span style="color: red;">*</span></label>
									<input type="text" name="lastName" placeholder="Last Name" class="form-control staff-info" style="width: 550px;" required/></br>
									<input type="text" name="firstName" placeholder="First Name" class="form-control staff-info" style="width: 550px;" required/></br>
									<input type="text" name="mInitial" placeholder="M.I" class="form-control staff-info" style="width: 50px;"/>
								  </div>
								  <div class="form-group">
									<label style="display: none;">Employee ID<span style="color: red;">*</span></label>
									<input type="hidden" name="empID" placeholder="ID number/code" class="form-control staff-info" required/>
								  </div>
								  <div class="form-group">
									<label>Password<span style="color: red;">*</span></label>
									<input type="password" name="password" placeholder="password" class="form-control staff-info" required/>
								  </div>
								  
								  <div class="form-group">
									<button class="btn btn-success b10" type="button" id="addStaff">
									<i class="fa fa-check"></i>  Add                               
									</button>
									<button class="btn btn-primary b10" type="button" id="cancel">
									<i class="fa fa-remove"></i>  Cancel    
									</button>     
								</div>
								  
								</form>
							</div>
						</div>
						
							<!--Display Employee list-->
						<div  id="" class="panel panel-info">
							<div class="panel-heading">
								<h3 class="panel-title"><i class="fa fa-info-circle"></i>Employees</h3>
							</div>
							
							<div class="panel-body table-responsive">
								<table class="table table-hover">
								  <thead>
									<tr>
									  <th>Employee Id</th>
									  <th>Employee Name</th>
									  <th>Status</th>
									  <th>Action</th>
									</tr>
								  </thead>
								  <tbody id="employee-list-body">
									<!-- to be filled dynamically -->
								  </tbody>
								</table>
							</div>
						</div>
						
							<!--Update Record Modal-->
							<div id="update-staff-modal" class="modal fade" tabindex="-1" role="dialog">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title"><i class="fa fa-info-circle"></i> Modify Record</h4>
										</div>
										<div class="modal-body">
											<form>
												  <div class="form-group">
													<label>Employee Name<span style="color: red;">*</span></label>
													<input type="text" name="lastName" placeholder="Last Name" id="edit-empLname" class="form-control update-staff-info" style="width: 550px;" required/></br>
													<input type="text" name="firstName" placeholder="First Name" id="edit-empFname" class="form-control update-staff-info" style="width: 550px;" required/></br>
													
												  </div>
												  <div class="form-group">
													<label>Employee ID</span></label>
													<input type="text" name="empID" 
													id="edit-empId" placeholder="Employee ID" class="form-control update-staff-info" readonly/>
												  </div>
												  <div class="form-group">
													<label>Username<span style="color: red;">*</span></label>
													<input type="text" name="username" placeholder="Username" id="edit-username" class="form-control update-staff-info" readonly />
												  </div>
												  <div class="form-group">
													<label>Password<span style="color: red;">*</span></label>
													<input type="password" name="password" placeholder="password" id="edit-password" class="form-control update-staff-info" required/>
												  </div>
												
												 <div class="form-group">
													<label class="control-label">Status</label>
												 </div>
	     										 <div class="dropdown">
													  <select class= "btn btn-sm btn-info" name="empStat" id="edit-empstat" required>
														  <option value="Active">Active</option>
														  <option value="Inactive">Inactive</option>
													  </select>
												  </div></br></br>
												  <div class="form-group">
														<button class="btn btn-success center-block" type="button" id="saveUpdate">
														   <i class="fa fa-check"></i> Update                              
														</button>
												  </div>
											</form>
										</div>
									</div>
								</div>
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
<?php
    include 'footer.php';
?>




<?php

	$query = "SELECT * FROM employee";
    $res = mysqli_query($conn, $query);
    $data;
    if($res){
    $x=0;
      while($result = mysqli_fetch_assoc($res)){
	        $data[$x] = $result;
	        $x++;
	   }
	}

?>

<script type="text/javascript">
	$(document).ready(function(){

		



		    var resdata = <?php echo json_encode($data) ?>; // Populate record data in table using the data from php query
		   	console.log(resdata);

		      var listTbl = $("#employee-list-body");
		      listTbl.html("");
		    
		         for(var x=0;x<resdata.length;x++){
		          empId=resdata[x].empID;
		          userName = resdata[x].username;
		          passWord = resdata[x].password;
		           var tRow = "<tr>";
			           tRow += "<td>" + resdata[x].empID + "</td>";
		               tRow += "<td>" + resdata[x].empFname  +" "+  resdata[x].empLname +"</td>";
					   tRow += "<td>" + resdata[x].empStat + "</td>";
		               tRow += "<td><div class='actions-menu'><button type='button' class='btn btn-sm btn-default editRecordLink' data-empLName='"+resdata[x].empLname+"' data-empFName='"+resdata[x].empFname+"' data-toggle='modal' data-target='#update-staff-modal' id='"+empId+"' pw='"+passWord+"' un='"+userName+"'><i class='fa fa-edit' style='color:green;'></i></button></div></td>";
		               tRow += "</tr>";
		          listTbl.append(tRow);
		        }   // end of populating data


		  $(".editRecordLink").on({
        	  click: editRecord
     	  })


      function editRecord(){

            var empFname = $(this).attr("data-empFName");
            var empLname = $(this).attr("data-empLName");            
            var empId = $(this).attr("id");            
            var username = $(this).attr("un");
            var password = $(this).attr("pw");
           	var empStat = $(this).attr("data-empStat");

           	console.log(empFname);
           	console.log(empLname);
           	console.log(empId);
           	console.log(username);
           	console.log(password);
           	console.log(empStat);           	
        
            $('#edit-empFname').val(empFname);
            $('#edit-empLname').val(empLname);
            $('#edit-empId').val(empId);
            $('#edit-username').val(username);
			$('#edit-password').val(password);
      		$('#edit-empStat').val(empStat);

      }

		$('#addNew_div').hide(); /* id of div you want to hide */
		$('#addNew_form').hide(); /* id of div you want to hide */
		var show = 0; //checks if form '#addNew_form' is hidden

		$('#toggle_div').click(function(){
			var value = $('#toggle_div').attr('value'); /* id of your toggle button */
			
			if(value=='Add New'){
				$('#addNew_div').toggle('fast');
				$('#toggle_div').attr('value', 'Hide Form');
			}else if(value=='Hide Form'){
				$('#addNew_div').toggle('fast');
				$('#addNew_form').toggle('fast');
				$('#category').val('0');
				$('#toggle_div').attr('value', 'Add New');
				show = 0;
			}
			//console.log($('#classificationCode').val());
		});

	});
</script>
	
	

