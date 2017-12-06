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
									<label style="display: none;">Employee ID<span style="color: red;">*</span></label>
									<input type="hidden" name="empID" placeholder="ID number/code" class="form-control staff-info" required/>
								  </div>
								  <div class="form-group">
									<label>Employee Name<span style="color: red;">*</span></label>
									<input type="text" name="firstName" placeholder="First Name" class="form-control staff-info" style="width: 550px;" required/></br>
									<input type="text" name="lastName" placeholder="Last Name" class="form-control staff-info" style="width: 550px;" required/></br>
									
								  </div>
								  <div class="form-group">
									<label>Username<span style="color: red;">*</span></label>
									<input type="text" name="empUsername" placeholder="Username" class="form-control staff-info" required/>
								  </div>
								  <div class="form-group">
									<label>Password<span style="color: red;">*</span></label>
									<input type="password" name="password" placeholder="password" class="form-control staff-info" required/>
								  </div>
								  <div class="form-group"  id="grpStatus">
					            	<label id="lblStatus">Status</label><br>
									<select name="empStat" id="empStat" class="form-control staff-info">
			                			<option value="Active">Active</option>
			                			<option value="Inactive">Inactive</option>
			                		</select>
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
													<label>Employee ID</span></label>
													<input type="text" name="empID" 
													id="edit-empId" placeholder="Employee ID" class="form-control update-staff-info" readonly/>
												  </div>

												  <div class="form-group">
													<label>Employee Name<span style="color: red;">*</span></label>
													<input type="text" name="empFName" placeholder="First Name" id="edit-empFname" class="form-control update-staff-info" style="width: 550px;" required/></br>
													<input type="text" name="empLName" placeholder="Last Name" id="edit-empLname" class="form-control update-staff-info" style="width: 550px;" required/></br>
													
													
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
												 <div class="dropdown">
													  <select class="form-control update-staff-info" name="empStat" id="edit-empstat" required>
														  <option value="Active">Active</option>
														  <option value="Inactive">Inactive</option>
													  </select>
												  </div></br></br>
												  </div>
												  <div class="form-group">
												  		<button class="btn btn-success center-block" type="button" id="Update">
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
<!--EMPLOYEE-->

<?php //PHP query for getting reservation list

  $resquery = "SELECT * FROM employee";
  $res = mysqli_query($conn, $resquery);
  $resdata;
  if($res){
    $x=0;
      while($resresult = mysqli_fetch_assoc($res)){
        $resdata[$x] = $resresult;
        $x++;
      }
  }

?> <!-- end of EMPLOYEE list php -->
<script type="text/javascript">
	$(document).ready(function(){

	/* Displaying Employees into the table */
	var resdata = <?php echo json_encode($resdata) ?>; // Populate record data in table using the data from php query
   	console.log(resdata);

      var empTbl = $("#employee-list-body");
      empTbl.html("");
     
         for(var x=0;x<resdata.length;x++){
         var empId = resdata[x].empID;
           var tRow = "<tr>";
               tRow += "<td>" + resdata[x].empID +  "</td>";
               tRow += "<td>" + resdata[x].empFname + "  " + resdata[x].empLname + "</td>";
               tRow += "<td>" + resdata[x].empStat + "</td>";
               tRow += "<td><div class='actions-menu'><button type='button' class='btn btn-sm btn-default editEmpRecord' data-empId='"+ resdata[x].empID+"' data-empFName='"+resdata[x].empFname+"' data-empLName='"+resdata[x].empLname+"' data-Username='"+resdata[x].username+"' data-Password='"+resdata[x].password+"' data-empStatus='"+resdata[x].empStat+"' data-toggle='modal' data-target='#update-staff-modal' id='"+empId+"'><i class='fa fa-edit' style='color:green;'></i></button></div></td>";
			   tRow += "</tr>";
		 empTbl.append(tRow);
        }   // end of populating data
	/* Displaying Employees into the table */

	/* Updating Employees Record */
	$(".editEmpRecord").on({
          click: editRecord
      })


      function editRecord(){
            var empId = $(this).attr("id");
            var empFName = $(this).attr("data-empFName");
            var empLName = $(this).attr("data-empLName");
            var user = $(this).attr("data-Username");
            var pass = $(this).attr("data-Password");
            var empStat = $(this).attr("data-empStatus");

            $('#edit-empId').val(empId);
            $('#edit-empFname').val(empFName);
            $('#edit-empLname').val(empLName);
            $('#edit-username').val(user);
            $('#edit-password').val(pass);
			$('#edit-empstat').val(empStat);
	  }
     /* Updating Employees Record */

	/* ADDING NEW EMPLOYEES */
		$('#addNew_div').hide(); /* id of div you want to hide */
		$('#addNew_form').hide(); /* id of div you want to hide */
		var show = 0; //checks if form '#addNew_form' is hidden

		$('#toggle_div').click(function(){
			var value = $('#toggle_div').attr('value'); /* id of your toggle button */
			console.log(value);

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

		$("#addStaff").on({
		    click: addEmployee
		})
		
		function addEmployee(){
				var empInfo = document.getElementsByClassName('staff-info');
				var employee = [];
				
				for(var x in empInfo){
					employee.push(empInfo[x].value);
				}
				
				$.ajax({
		            url: "employees-functions.php",
		            method: "POST",
		            data: {
		              action: 'addNewEmp',
		              empDetails: employee
		            },
		            success: function(response){
		              //var data = JSON.parse(response);
		              console.log(response);
		              //console.log(data);
		              alert("Success!");
		              location.reload();

		             
		            },
		            error: function(response){
		              console.log(response);
		              
		            }
		       
		        })
			}
		/* end of ADDING NEW EMPLOYEES */

		/*UPDATING EMPLOYEE*/

		$("#Update").on({
		    click: update
		})
		function update(){
				var empUpdate = document.getElementsByClassName('update-staff-info');
				var empUp = [];
				
				for(var x in empUpdate){
					empUp.push(empUpdate[x].value);
				}
				
				$.ajax({
		            url: "employees-functions.php",
		            method: "POST",
		            data: {
		              action: 'update',
		              empDetails: empUp
		            },
		            success: function(response){
		              //var data = JSON.parse(response);
		              console.log(response);
		              //console.log(data);
		         
		              alert("Success!");
		              location.reload();


		             
		            },
		            error: function(response){
		              console.log(response);
		              
		            }
		       
		        })
			}





	});
</script>
	
	

