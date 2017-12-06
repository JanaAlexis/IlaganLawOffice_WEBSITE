<?php
	include 'header.php';
	include 'navbar.php';
?>


<div class="container-fluid" style=" height: 583px;">
	<input type="button" class="btn btn-primary" value="Add New" id="toggle_div"/></br></br>

		<div id="addNew_div">
		    <form method="Post" action="home-functions.php?action=add" enctype="multipart/form-data">
			  <div class="form-group" id="select">
				<label>Add New Information</label>
				<div class="dropdown">
					<select class= "btn btn-info add-item-info" name="addType" id="category" required>
						<option value="0">-- Select --</option>
						<option value="1">Client Information</option>
						<option value="2">Case Disk</option>f
					    <option value="3">Data Disk</option>
					</select>
				</div>
			  </div>

			  <div class="panel panel-default" id="addNew_form">
				<div class="panel-heading">
				 	<h3 class="panel-title"><i class="fa fa-info-circle"></i> Add Information </h3>
	    	    </div>
	    	    
				<div class="panel-body" id="form">

					<!--CLIENT INFORMATION-->
					<div class="form-group" id="client"> 
							<input type="hidden" id="clientId"  name="clientId" class="client-info"/>
							<div class="form-group" id="grpName" >
		                       <label id="lblName">First Name</label><br>
		                       <input type="text" name="fname" class="form-control client-info" placeholder="First Name"><br>
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
						       <input type="date" style="text-align: center;" class="form-control client-info" placeholder="mm-dd-yyyy" value="<?php echo date('Y-m-d') ?>" name="birthday" id="birthday"/>
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
		                			<option value="Walk-in">Walk-in</option>
		                			<option value="Client">Client</option>
		                		</select>
							</div>
					</div><!--end of CLIENT INFORMATION-->

					<!--DATA DISK-->
		         	<div class="form-group" id="data">

							<input type="hidden" id="clientId"  name="clientId" class="case-info"/>
							<div class="form-group" id="grpName">
		                        <label id="lblName">Client Name</label><br>
		                        <input type="text" name="dcfname" class="form-control client-info" placeholder="First"><br>
 								<input type="text" name="dclname" class="form-control client-info" placeholder="Last Name">
		                    </div>
		                  
		                       <input type="hidden" class="form-control data-info" placeholder="Data ID" name="ddId">
		                    
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
								<input type="file" class="form-control data-info" name="document" /></br>
							</div>
							<div class="form-group" id="grpCheckbox">
								<label>Tags</label>
								<br>
								<input type="checkbox" class="case-info"  name="datatags[]" value="House of Deeds" /> House of deeds
								<input type="checkbox" class="case-info"  name="datatags[]" value="Memorandum" /> Memorandum
								<input type="checkbox" class="case-info"  name="datatags[]" value="Land Title" /> Land Title
								<br>
								</br><br>
								<input type="text" class=" form-control case-info"  name="datatags[]" placeholder="Other tags (Please use comma for seperators)" />
							</div>
		                   
		            </div><!--end of DATA DISK-->
		     
					<button class="btn btn-default btn-success btn-md" type="submit" name="save" id="addBtn"><i class="fa fa-check"></i>  Save </button> 
					<button class="btn btn-default btn-primary btn-md cancelBtn" name="cancel" id="cancelAdd"><i class="fa fa-remove"></i>  Cancel </button>        
				
					
				</div> <!-- end of panel body -->
			  </div> <!-- end of panel -->
			</form>	<!-- end of client and data form -->

			<!-- CASE form -->
				<div class="panel panel-default" id="addNew_caseForm">
					<div class="panel-heading">
					 	<h3 class="panel-title"><i class="fa fa-info-circle"></i> Add Case Information </h3>
		    	    </div>
		    	    <div class="panel-body" id="">
						<form method="Post" action="home-functions.php?action=add" enctype="multipart/form-data">
				    	    <!--CASE DISK-->
							<div class="form-group" id="">
		 						<input type="hidden" name="addType" value="2">
									<div class="form-group" id="grpName" >
									<input type="hidden" id="clientId"  name="clientId" class="case-info"/>
				                        <label id="lblName">Client Name</label><br>
				                        <input type="text" name="ccfname" class="form-control case-info" placeholder="First Name"><br>
		 								<input type="text" name="cclname" class="form-control case-info" placeholder="Last Name">
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
					                    
					                    <label>Document</label>
										<input type="file" class="case-info"  name="document" /></br>

									<div class="form-group" id="grpCheckbox">
										<label>Tags</label>
										<br>
										<input type="checkbox" class="case-info"  name="casetags[]" value="Murder" /> Murder
										<input type="checkbox" class="case-info"  name="casetags[]" value="Rape" /> Rape
										<input type="checkbox" class="case-info"  name="casetags[]" value="Fraud" /> Fraud
										<br>
										<input type="checkbox" class="case-info"  name="casetags[]" value="Robbery" /> Robbery
										<input type="checkbox" class="case-info"  name="casetags[]" value="Illegal Drugs" /> Illegal Drugs
										</br><br>
										<input type="text" class=" form-control case-info"  name="casetags[]" placeholder="Other tags (Please use comma for seperators)" />
									</div>

				         	</div><!--end of CASE DISK-->

			         	<button class="btn btn-default btn-success btn-md" type="submit" name="save" id=""><i class="fa fa-check"></i>  Save </button> 
						<button class="btn btn-default btn-primary btn-md cancelBtn" name="cancel" id=""><i class="fa fa-remove"></i>  Cancel </button>  

						</form> <!-- end of data form -->
		    	    </div> <!-- end of panel body -->
	    		</div><!-- end of panel -->

		</div><!--end of add new item-->
	
</div>


<?php
	include 'footer.php';
?>


<?php

if (isset($_GET['page'])){ 
    if($_GET['page']=="adding"){             
        if(!empty($_GET['msg'])){

            switch ($_GET['msg']) {
                    case 'existing':
?>
                         <script>
	                        alert('Case ID already existed. Please try again.');
                        </script>
<?php
                    break;
                    case 'nodocu':
?>
					<script>
	                    alert('No doument provided. Please choose a document when adding Case or Data file.');
                    </script>
<?php
					 break;
                    case 'noclient':
?>
					<script>
	                    alert('No such client existed. Please double check the name of your client.');
                    </script>
<?php
            }
        }
    }
}
?>


<script type="text/javascript">
	$(document).ready(function(){
 	
		$('#addNew_div').hide(); /* id of div you want to hide */
		$('#addNew_form').hide(); /* id of div you want to hide */
		$('#addNew_caseForm').hide(); /* id of div you want to hide */
		var show = 0; //checks if form '#addNew_form' is hidden

		$('#toggle_div').click(function(){
			var value = $('#toggle_div').attr('value'); /* id of your toggle button */
			console.log(value);

			if(value=='Add New'){
				$('#addNew_div').toggle('fast');
				$('#toggle_div').attr('value', 'Hide Form');
			}else if(value=='Hide Form'){
				$('#addNew_div').toggle('fast');
				$('#addNew_form').hide();
				$('#addNew_caseForm').hide();
				$('#category').val('0');
				$('#toggle_div').attr('value', 'Add New');
				show = 0;
			}
			//console.log($('#classificationCode').val());
		});

		$('#category').change(function(){
			var value = $('#category').val(); /* id of dropdown menu */
			if(show==0){
				$('#addNew_form').toggle('fast');
				show = 1;
			}
			if (value == 1) {
				$('#addNew_form').show();
				$('#form').show();
				$('#client').show();
				$('#addNew_caseForm').hide();
				$('#data').hide();
			}else if(value == 2){
				$('#addNew_form').hide();
				$('#addNew_caseForm').show();
				//$('#form').show();				
				//$('#client').hide();
				//$('#data').hide();
			}else if(value == 3){
				$('#addNew_form').show();
				$('#form').show();
				$('#client').hide();
				$('#addNew_caseForm').hide();
				$('#data').show();
			}else{
				$('#form').hide();
				$('#client').hide();
				$('#data').hide();
			}

		});


		$('.cancelBtn').click(function(){
			location.reload();
		});

	});
</script>
