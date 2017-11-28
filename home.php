<?php
	include 'header.php';
	include 'navbar.php';
?>

<div class="container-fluid" style=" height: 583px;">
	<input type="button" class="btn btn-primary" value="Add New" id="toggle_div"/></br></br>
 	<form>
		<div id="addNew_div">
			  <div class="form-group" id="select">
				<label style="color: white;">Add New Information</label>
				<div class="dropdown">
					<select class= "btn btn-info add-item-info" name="addType" id="category" required>
						<option value="0">-- Select --</option>
						<option value="1">Client Information</option>
						<option value="2">Case Disk</option>
					    <option value="3">Data Disk</option>
					</select>
				</div>
			  </div>

			  <div class="panel panel-default" id="addNew_form">
				<div class="panel-heading">
				 	<h3 class="panel-title"><i class="fa fa-info-circle"></i> Choose an Information Category</h3>
	    	    </div>
				<div class="panel-body" id="form">
					<div class="form-group" id="client"> <!--CLIENT INFORMATION-->
							<input type="hidden" id="clientId"  class="client-info"/>
							<div class="form-group" id="grpName" >
		                       <label id="lblName">First Name</label><br>
		                       <input type="text" name="fname" class="form-control client-info" placeholder="First"><br>
		                       <label id="lblName">Last Name</label>
		                       <input type="text" name="lname" class="form-control client-info" placeholder="Last Name">
		                    </div>
		                	<div class="form-group" id="grpGender">
		                		<label id="lblGender">Gender</label><br>
		                		<select name="clientGender" id="clientGender" class="form-control client-info">
		                			<option value="Male">Male</option>
		                			<option value="Female">Female</option>
		                		</select>
			                </div>
			                <div div class="form-group" id="grpCDate">
     			               <label id="lblBirth">Birthdate</label><br>
						       <input type="date" style="text-align: center;" class="form-control client-info" placeholder="yyyy-mm-dd" value="<?php echo date('Y-m-d') ?>" name="birthday" id="birthday"/>
						    </div>
			                <div div class="form-group" id="grpAddress">
				                <label id="lblAddress">Address</label><br>
				                <input type="text" name="clientAdd" class="form-control client-info" placeholder="Address">
			                </div>
			                <div div class="form-group" id="grpContact">
				                <label id="lblConNum">Contact no.</label><br>
				                <input type="text" name="clientCon" class="form-control client-info" placeholder="Contact">
				            </div>
				            <div class="form-group"  id="grpStatus">
				            	<label id="lblStatus">Status</label><br>
								<select name="clientStat" id="clientStat" class="form-control client-info">
		                			<option value="walk-in">Walk-in</option>
		                			<option value="retire">Retire</option>
		                		</select>
							</div>
					</div><!--end of CLIENT INFORMATION-->

					<div class="form-group" id="case"><!--CASE DISK-->
							<div class="form-group" id="grpName" >
		                        <label id="lblName">Client Name</label><br>
		                        <input type="text" name="fname" class="form-control case-info" placeholder="First Name"><br>
		                        <input type="text" name="lname" class="form-control case-info" placeholder="Last Name"><br>
		                    </div>
		                    <div class="form-group" id="grpCdId" >
		                       <label id="lblCdId">Case ID</label><br>
		                       <input type="text" class="form-control case-info" placeholder="Case ID" name="cdId">
		                    </div>
		                    <div class="form-group" id="grpCdTitle" >
		                       <label id="lblCdTitle">Case Title</label><br>
		                       <input type="text" class="form-control case-info" placeholder="Case Title" name="cdTitle">
		                    </div>
		                    <div class="form-group" id="grpCdDesc" >
		                       <label id="lblCdDesc">Case Description</label><br>
		                       <input type="text" class="form-control case-info" placeholder="Description" name="cdDesc">
		                    </div>
		                    <div class="form-group" id="grpDoc">
		                   		<label>Document</label>
								<input type="file"  name="document" required /></br>
							</div>

		         	</div><!--end of CASE DISK-->

					<div class="form-group" id="data"><!--DATA DISK-->
						
		                    <div class="form-group" id="grpName">
		                        <label>Client Name</label><br>
		                        <input type="text" class="form-control data-info" placeholder="Client Name" name="cName">
		                    </div>
		                    <div class="form-group" id="grpDdId" >
		                       <label>Data ID</label><br>
		                       <input type="text" class="form-control data-info" placeholder="Data ID" name="ddId">
		                    </div>
		                    <div class="form-group" id="grpDdTitle" >
		                       <label>Data Title</label><br>
		                       <input type="text" class="form-control data-info" placeholder="Data Title" name="ddTitle">
		                    </div>
		                    <div class="form-group" id="grpDdDesc" >
		                       <label>Data Description</label><br>
		                       <input type="text" class="form-control data-info" placeholder="Description" name="ddDesc">
		                    </div>

		                    <div class="form-group" id="grpDoc">
		                   		<label>Document</label>
								<input type="file" name="document" required /></br>
							</div>
		                   
		            </div><!--end of DATA DISK-->
		            
		           	<div class="form-group">
							<button class="btn btn-default btn-success btn-md" type="button" id="addBtn"><i class="fa fa-check"></i>  Save </button> 
							<button class="btn btn-default btn-primary btn-md" type="button" id="cancelAdd"><i class="fa fa-remove"></i>  Cancel </button> 
					</div>  
				
				</div> <!-- end of panel body -->
			  </div>
		</div><!--end of add new item-->
	</form>	<!-- end of form -->
	<!--Display item list-->
	<div  id="list-parts-panel" class="panel panel-info">
		<div class="panel-heading"></div>
		<div class="panel-body" id="panel">
			<label id="category-text" class="">Category:</label>
						  
			<select class= "form-control" id="categorySearch">
			<!--<option value="0" selected="selected">All</option>-->
				<option value="1" selected="selected">Case Disk</option>
				<option value="2">Data Disk</option>			</select>
		</div>
								
		<div class="panel-body table-responsive">
			<table class="table table-hover" id="item-list-tbl">
			  <thead>
				<tr>
					<th>Client Name</th>
					<th>ID</th>
					<th>Title</th>
					<th>Date</th>
					<th>Description</th>
					<th>Document</th>

				</tr>
			  </thead>
			  <tbody id="item-tbl-body">
			  <!-- to be filled dynamically -->
			  </tbody>
			</table>
		</div>

	</div> <!-- end of list-parts panel -->
	<!--end of display item list-->
</div>
<?php
	include 'footer.php';
?>

<script type="text/javascript">
	$(document).ready(function(){

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

		$("#addBtn").on({
		    click: addInfo
		})


			function addInfo(){
				var clientInfo = document.getElementsByClassName('client-info');
				var caseInfo = document.getElementsByClassName('case-info');
				var dataInfo = document.getElementsByClassName('data-info');
				var client = [];
				var casedisk = [];
				var datadisk = [];
				var cat = $('#category').val();

				
				
				for(var x in clientInfo){
					client.push(clientInfo[x].value);
				}
				for(var x in caseInfo){
					casedisk.push(caseInfo[x].value);
				}
				for(var x in dataInfo){
					datadisk.push(dataInfo[x].value);
				}
		        console.log(client);
				console.log(casedisk);
				console.log(datadisk);


		
				$.ajax({
		            url: "home_functions.php",
		            method: "POST",
		            data: {
		              action: 'addNewInfo',
		              clientDetails: client,
		              caseDetails: casedisk,
		              dataDetails: datadisk,
		              category: cat
		              
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
			


	

		
		$('#category').change(function(){

			var value = $('#category').val(); /* id of dropdown menu */
			if(show==0){
				$('#addNew_form').toggle('fast');
				show = 1;
			}
			if (value == 1) {
				$('#form').show();
				$('#client').show();
				$('#case').hide();
				$('#data').hide();
			}else if(value == 2){
				$('#form').show();				
				$('#client').hide();
				$('#case').show();
				$('#data').hide();
			}else if(value == 3){
				$('#form').show();
				$('#client').hide();
				$('#case').hide();
				$('#data').show();
			}else{
				$('#form').hide();
				$('#client').hide();
				$('#case').hide();
				$('#data').hide();
			}

		});


	});
</script>
	
	

