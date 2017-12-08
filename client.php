<?php
	include 'header.php';
	include 'navbar.php';
?>
	<br><h3>Clients</h3><br>
	<div class="panel panel-default">
	  <div class="panel-heading"></div>
	  <div class="panel-body">
		  <table class="table table-hover" id="client-tbl">
			<thead>
			   <tr>
				  <th>First Name</th>
				  <th>Last Name</th>
				  <th>Gender</th>
				  <th>Birthday</th>
				  <th>Address</th>
     		      <th>Contact</th>
				  <th>Status</th>
				  <th>Action</th>
				<!--  <th>Update</th> -->
				</tr>
			  </thead>
			  <tbody id="client-tbl-body">
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
													<input type="text" name="edit-cID" 
													id="edit-cId" placeholder="Client ID" class="form-control update-staff-info" readonly />
												  </div>

												  <div class="form-group">
													<label>Client Name<span style="color: red;">*</span></label>
													<input type="text" name="clientFName" placeholder="First Name" id="edit-cFname" class="form-control update-staff-info" style="width: 550px;" required/></br>
													<input type="text" name="clientLName" placeholder="Last Name" id="edit-cLname" class="form-control update-staff-info" style="width: 550px;" required/></br>
												</div>
												  
												  <div class="form-group">
													<label>Gender<span style="color: red;">*</span></label>
													<input type="text" name="clientGen" placeholder="Gender" id="edit-cGen" class="form-control update-staff-info"  />
												  </div>

												   <div div class="form-group" id="grpCDate">
						     			               <label id="lblBirth">Birthdate</label><br>
												       <input type="date" style="text-align: center;" class="form-control update-staff-info" placeholder="yyyy-mm-dd" name="clientBirth" id="edit-cBirth" />
												    </div>

												  <div class="form-group">
													<label>Address<span style="color: red;">*</span></label>
													<input type="text" name="clientAdd" placeholder="Address" id="edit-cAdd" class="form-control update-staff-info"  />
												  </div>

												  <div class="form-group">
													<label>Contact<span style="color: red;">*</span></label>
													<input type="text" name="clientCon" placeholder="Contact" id="edit-cCon" class="form-control update-staff-info"/>
												  </div>

												 <div class="form-group">
												 <label class="control-label">Status</label>
												 <div class="dropdown">
													  <select class="form-control update-staff-info" name="clientStat" id="edit-cStat">
														  <option value="Walk-in">Walk-In</option>
														  <option value="Client">Client</option>
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

<?php
	include 'footer.php'
?>

<?php //PHP query for getting reservation list

$user = $_SESSION['userId'];


  $resquery = "SELECT * FROM client";
  $res = mysqli_query($conn, $resquery);
  $resdata;
  if($res){
    $x=0;
      while($resresult = mysqli_fetch_assoc($res)){
        $resdata[$x] = $resresult;
        $x++;
        
        
      }
  }
?> <!-- end of reservation list php -->

<script type="text/javascript"> //Javascript/jquery when opening document
  $(document).ready(function(){


    var resdata = <?php echo json_encode($resdata) ?>; // Populate record data in table using the data from php query
   	console.log(resdata);

      var rsvTbl = $("#client-tbl-body");
      rsvTbl.html("");
  	   var clientId = 0;

         for(var x=0;x<resdata.length;x++){
           clientId = resdata[x].clientID;
           var tRow = "<tr>";
               tRow += "<td>" + resdata[x].clientFname + "</td>";
               tRow += "<td>" + resdata[x].clientLname + "</td>";
               tRow += "<td>" + resdata[x].clientGen + "</td>";
               tRow += "<td>" + resdata[x].clientBirth + "</td>";
               tRow += "<td>" + resdata[x].clientAdd + "</td>";
               tRow += "<td>" + resdata[x].clientCon + "</td>";
               tRow += "<td>" + resdata[x].clientStat + "</td>";
	           tRow += "<td><div class='actions-menu'><button type='button' class='btn btn-sm btn-default editRecord' data-clientFName='"+resdata[x].clientFname+"' data-clientLName='"+resdata[x].clientLname+"' data-clientGen='"+resdata[x].clientGen+"' data-clientBirth='"+resdata[x].clientBirth+"' data-clientAdd='"+resdata[x].clientAdd+"' data-clientCon='"+resdata[x].clientCon+"' data-clientStatus='"+resdata[x].clientStat+"' data-toggle='modal' data-target='#update-staff-modal' id='"+ clientId+"'><i class='fa fa-edit' style='color:green;'></i></button></div></td>";
               tRow += "</tr>";

         rsvTbl.append(tRow);	
         
        }   // end of populating data
        $('#client-tbl').dataTable();
       




        $(".editRecord").on({
          click: editRecord
      })


      function editRecord(){
            var cId = $(this).attr("id");
            var cFName = $(this).attr("data-clientFName");
            var cLName = $(this).attr("data-clientLName");
            var cGen = $(this).attr("data-clientGen");
            var cBirth = $(this).attr("data-clientBirth");
            var cAdd = $(this).attr("data-clientAdd");
            var cCon = $(this).attr("data-clientCon");
            var cStat = $(this).attr("data-clientStatus");

            //console.log(cBirth);


            $('#edit-cId').val(cId);
            $('#edit-cFname').val(cFName);
            $('#edit-cLname').val(cLName);
            $('#edit-cGen').val(cGen);
            $('#edit-cBirth').val(cBirth);
            $('#edit-cAdd').val(cAdd);
            $('#edit-cCon').val(cCon);
			$('#edit-cStat').val(cStat);
	  }
	    $("#Update").on({
		    click: update
		})

	  function update(){
				var cUpdate = document.getElementsByClassName('update-staff-info');
				var cUp = [];
				
				for(var x in cUpdate){
					cUp.push(cUpdate[x].value);
				}
            	//console.log(cUp[3]);
            	//console.log(cUp[4]);
            	//console.log(cUp[5]);
				
				$.ajax({
		            url: "client-functions.php",
		            method: "POST",
		            data: {
		              action: 'update',
		              cDetails: cUp
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