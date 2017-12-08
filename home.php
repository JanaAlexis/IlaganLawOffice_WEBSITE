<?php
	include 'header.php';
	include 'navbar.php';
?>


<div class="container-fluid" style=" height: 583px;">
	<input type="button" class="btn btn-primary" value="Add New" id="toggle_div"/></br></br>

		<div id="addNew_div">
		  	<div class="form-group" id="select">
				<label>Add New Information</label>
				<div class="dropdown">
					<select class= "btn btn-info add-item-info" name="" id="category" required>
						<option value="0">-- Select --</option>
						<option value="1">Client Information</option>
						<option value="2">Case Disk</option>f
					    <option value="3">Data Disk</option>
					</select>
				</div>
			</div>		
		</div> <!-- end of addNew_div -->

		<!--CLIENT Panel -->
	 	<div class="panel panel-default" id="addNew_form">

			<div class="panel-heading">
		 		<h3 class="panel-title"><i class="fa fa-info-circle"></i> Add Client Information </h3>
	    	</div>
	    	<div class="panel-body" id="">
    		<form method="POST" id="" action="home-functions.php?action=add" enctype="multipart/form-data">

			<!--CLIENT INFORMATION-->
			<div class="form-group" id="client">

					<label class="label label-danger" id="clientNotif"></label></br>

					<input type="hidden" name="addType" value="1"/>
					<input type="hidden" id="clientId"  name="clientId" class="client-info"/>
					
					<div class="form-group" id="grpName" >
                       <label id="lblName">First Name</label><br>
                       <input type="text" name="fname" class="form-control client-info" placeholder="First Name" required><br>
                       <label id="lblName">Last Name</label>
                       <input type="text" name="lname" class="form-control client-info" placeholder="Last Name" required>
                    </div>
                	<div class="form-group" id="grpGender">
                		<label id="lblGender">Gender</label><br>
                		<select name="clientGender" id="clientGender" class="form-control client-info" required>
                			<option value="Male">Male</option>
                			<option value="Female">Female</option>
                		</select>
	                </div>
	                <div div class="form-group" id="grpCDate">
			               <label id="lblBirth">Birthdate</label><br>
				       <input type="date" style="text-align: center;" class="form-control client-info" placeholder="mm-dd-yyyy" value="<?php echo date('Y-m-d') ?>" name="birthday" id="birthday"  required />
				    </div>
	                <div div class="form-group" id="grpAddress">
		                <label id="lblAddress">Address</label><br>
		                <input type="text" name="clientAdd" class="form-control client-info" placeholder="Address"  required>
	                </div>
	                <div div class="form-group" id="grpContact">
		                <label id="lblConNum">Contact no.</label><br>
		                <input type="text" name="clientCon" class="form-control client-info" placeholder="Contact"  required>
		            </div>
		            <div class="form-group"  id="grpStatus">
		            	<label id="lblStatus">Status</label><br>
						<select name="clientStat" id="clientStat" class="form-control client-info"  required>
                			<option value="Walk-in">Walk-in</option>
                			<option value="Client">Client</option>
                		</select>
					</div>
			</div><!--end of CLIENT INFORMATION-->
		
					<button class="btn btn-default btn-success btn-md" type="submit" name="save" id="addBtn"><i class="fa fa-check"></i>  Save </button> 
					<button class="btn btn-default btn-primary btn-md cancelBtn" name="cancel" id="cancelAdd"><i class="fa fa-remove"></i>  Cancel </button>        
			
			</form>	<!-- end of client form -->
			</div><!-- end of panel body -->
		</div> <!-- end of CLIENT panel -->

		<!-- CASE Panel -->
		<div class="panel panel-default" id="addNew_caseForm">

			<div class="panel-heading">
			 	<h3 class="panel-title"><i class="fa fa-info-circle"></i> Add Case Information </h3>
    	    </div>

    	    <div class="panel-body" id="">
				<form method="POST" id="" action="home-functions.php?action=add" enctype="multipart/form-data">

		    	    <!--CASE DISK-->
					<div class="form-group" id="case">

						<!-- Label shows if client does not exist -->
						<label class="label label-danger" id="caseNotif"></label></br>
						
 						<input type="hidden" name="addType" value="2"/>
						<input type="hidden" id="clientId"  name="clientId" class="case-info"/>

						<div class="form-group" id="grpName" >
	                        <label id="lblName">Client Name</label><br>
	                        <input type="text" name="ccfname" id="ccfname" class="form-control data-info" placeholder="First Name"  required><br>
								<input type="text" name="cclname" id="cclname" class="form-control data-info" placeholder="Last Name"  required>
	                    </div>
	                    <div class="form-group" id="grpCdId" >
	                       <label id="lblCdId">Case ID</label><br>
	                       <input type="text" class="form-control case-info" placeholder="Case ID" name="cdId" id="cdId"  required>
	                    </div>
	                    <div class="form-group" id="grpCdTitle" >
	                       <label id="lblCdTitle">Case Title</label><br>
	                       <input type="text" class="form-control case-info" placeholder="Case Title" name="cdTitle" id="cdTitle"  required>
	                    </div>
	                    <div class="form-group" id="grpCdDesc" >
	                       <label id="lblCdDesc">Case Description</label><br>
	                       <input type="text" class="form-control case-info" placeholder="Description" name="cdDesc" id="cdDesc" required>
	                    </div>
		                    
		                    <label>Document</label>
							<input type="file" class="case-info"  name="document"  required/></br>

						<div class="form-group" id="grpCheckbox">
							<label>Tags</label>
							<br>
							<input type="checkbox" class="ctag-info"  name="casetags[]" value="Murder" /> Murder
							<input type="checkbox" class="ctag-info"  name="casetags[]" value="Rape" /> Rape
							<input type="checkbox" class="ctag-info"  name="casetags[]" value="Fraud" /> Fraud
							<br>
							<input type="checkbox" class="ctag-info"  name="casetags[]" value="Robbery" /> Robbery
							<input type="checkbox" class="ctag-info"  name="casetags[]" value="Illegal Drugs" /> Illegal Drugs
							</br><br>
							<input type="text" class=" form-control ctag-info"  name="casetags[]" placeholder="Other tags (Please use comma for seperators)" />
						</div>

		         	</div><!--end of CASE DISK-->

					<button class="btn btn-default btn-success btn-md" type="submit" name="save" id=""><i class="fa fa-check"></i>  Save </button> 
					<button class="btn btn-default btn-primary btn-md cancelBtn" name="cancel" id=""><i class="fa fa-remove"></i>  Cancel </button>  

				</form> <!-- end of CASE form -->
    	    </div> <!-- end of panel body -->
		</div><!-- end of CASE panel -->

		<!-- DATA Panel -->
		<div class="panel panel-default" id="addNew_dataForm">

			<div class="panel-heading">
			 	<h3 class="panel-title"><i class="fa fa-info-circle"></i> Add Data Information </h3>
    	    </div>

    	    <div class="panel-body" id="">
				<form method="POST" id="" action="home-functions.php?action=add" enctype="multipart/form-data">

					 <!--DATA DISK-->
					<div class="form-group" id="">

							<!-- Label shows if client does not exist -->								
							<label class="label label-danger" id="dataNotif"></label></br>

							<input type="hidden" name="addType" value="3" />
							<input type="hidden" id="clientId"  name="clientId" class="case-info"/>

							<div class="form-group" id="grpName">
								<label id="lblName">Client Name</label><br>
								<input type="text" name="dcfname" id="dcfname" class="form-control data-info" placeholder="First"  required /><br>
								<input type="text" name="dclname" id="dclname" class="form-control data-info" placeholder="Last Name"  required />
							</div>
						  
							   <input type="hidden" class="form-control data-info" placeholder="Data ID" name="ddId" />
							
							<div class="form-group" id="grpDdTitle" >
							   <label>Data Title</label><br>
							   <input type="text" class="form-control data-info" placeholder="Data Title" name="ddTitle" id="ddTitle"  required />
							</div>
							<div class="form-group" id="grpDdDesc" >
							   <label>Data Description</label><br>
							   <input type="text" class="form-control data-info" placeholder="Description" name="ddDesc" id="ddDesc" required />
							</div>

							<div class="form-group" id="grpDoc">
								<label>Document</label>
								<input type="file" class="form-control data-info" name="document"  required /></br>
							</div>
							<div class="form-group" id="grpCheckbox">
								<label>Tags</label>
								<br>
								<input type="checkbox" class="dtag-info"  name="datatags[]" value="House of Deeds" /> House of deeds
								<input type="checkbox" class="dtag-info"  name="datatags[]" value="Memorandum" /> Memorandum
								<input type="checkbox" class="dtag-info"  name="datatags[]" value="Land Title" /> Land Title
								<br>
								</br><br>
								<input type="text" class=" form-control dtag-info"  name="datatags[]" placeholder="Other tags (Please use comma for seperators)" />
							</div>
						   
					</div><!--end of DATA DISK-->

					<button class="btn btn-default btn-success btn-md" type="submit" name="save" id=""><i class="fa fa-check"></i>  Save </button> 
					<button class="btn btn-default btn-primary btn-md cancelBtn" name="cancel" id=""><i class="fa fa-remove"></i>  Cancel </button>  

				</form> <!-- end of data form -->
    	    </div> <!-- end of panel body -->
		</div><!-- end of DATA panel -->
	

<!--Display item list-->
 	<div  id="list-parts-panel" class="panel panel-info">
 		<div class="panel-heading"></div>
 		<div class="panel-body" id="panel">
 		<form method='post' >

 			<label id="category-text" class="">Category:</label>
 						  
 			<select class= "form-control" name="search">
 			<!--<option value="0" selected="selected">All</option>-->
 				<option value="1" selected="selected">Case Disk</option>
 				<option value="2">Data Disk</option>
 			</select>

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
 	</form>

 		
</div>
<?php
	include 'footer.php';
?>
<?php

	$query = "SELECT c.clientID, c.clientFname, c.clientLname, caseID, caseTitle, caseDate, caseDesc, cfilename from case_disk cd join client c on cd.clientID = c.clientID WHERE  cd.clientID = c.clientID  ORDER BY cd.caseDate DESC LIMIT 5";
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

<?php

	$query = "SELECT c.clientID, c.clientFname, c.clientLname, dataID, dataTitle, dataDate, dataDesc, dfilename from data_disk dd join client c on dd.clientID = c.clientID WHERE  dd.clientID = c.clientID  ORDER BY dd.dataDate DESC LIMIT 5";
    $resdata = mysqli_query($conn, $query);
    $datadata;
    if($resdata){
    $x=0;
      while($resultdd = mysqli_fetch_assoc($resdata)){
	        $datadd[$x] = $resultdd;
	        $x++;
	   }
	}

?>

<script type="text/javascript">

	$(document).ready(function(){


	if("$_POST['search']=='1'"){
		var data = <?php echo json_encode($data) ?>; // Populate record data in table using the data from php query
		var rsvTbl = $("#item-tbl-body");
		rsvTbl.html("");
		
		for(var x=0;x<data.length;x++){
		           var caseID = data[x].caseID;
		           var tRow = "<tr>";
		               tRow += "<td>" + data[x].clientFname + " " + data[x].clientLname + "</td>";
		               tRow += "<td>" + caseID + "</td>";
		               tRow += "<td>" + data[x].caseTitle + "</td>";
		               tRow += "<td>" + data[x].caseDate + "</td>";
		               tRow += "<td>" + data[x].caseDesc + "</td>";
		               tRow += "<td><a target='_BLANK' href='cf.php?id=" + data[x].caseID + "'>" + data[x].cfilename +"</a></td>";
					   tRow += "</tr>";

				rsvTbl.append(tRow);	
		}   // end of populating data
		$('#item-list-tbl').dataTable();
	
	} else if("$_POST['search']=='2'"){
		var datadd = <?php echo json_encode($datadd) ?>; // Populate record data in table using the data from php query
		var dtaTbl = $("#item-tbl-body");
	    dtaTbl.html("");
			
		for(var x=0;x<datadd.length;x++){
	       var dataID = datadd[x].dataID;
	       var tRow = "<tr>";
	               tRow += "<td>" + datadd[x].clientFname + " " + datadd[x].clientLname + "</td>";
	               tRow += "<td>" + dataID + "</td>";
	               tRow += "<td>" + datadd[x].dataTitle + "</td>";
	               tRow += "<td>" + datadd[x].dataDate + "</td>";
	               tRow += "<td>" + datadd[x].dataDesc + "</td>";
	               tRow += "<td><a target='_BLANK' href='df.php?id=" + datadd[x].dataID + "'>" + datadd[x].dfilename +"</a></td>";
				   tRow += "</tr>";

		dtaTbl.append(tRow);	
	    }   // end of populating data
		$('#item-list-tbl').dataTable();
	}
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
				$('#addNew_dataForm').hide();
				$('#category').val('0');
				$('#toggle_div').attr('value', 'Add New');
				show = 0;
			}
		});

		$('#category').change(function(){
			var value = $('#category').val(); /* id of dropdown menu */
			if(show==0){
				$('#addNew_form').toggle('fast');
				show = 1;
			}
			if (value == 1) {
				$('#addNew_form').show();
				$('#addNew_caseForm').hide();
				$('#addNew_dataForm').hide();
			}else if(value == 2){
				$('#addNew_caseForm').show();
				$('#addNew_form').hide();
				$('#addNew_dataForm').hide();
			}else if(value == 3){
				$('#addNew_dataForm').show();
				$('#addNew_form').hide();
				$('#addNew_caseForm').hide();
			}else{
				$('#addNew_form').hide();
				$('#addNew_caseForm').hide();
				$('#addNew_dataForm').hide();
			}

		});


		$('.cancelBtn').click(function(){
			window.location.replace("home.php");
		});

	});

	</script>


<?php

if (isset($_GET['page'])){ 
    if($_GET['page']=="adding"){             
        if(!empty($_GET['msg'])){

            switch ($_GET['msg']) {
                    case 'existing':
?>
                    <script>
                        $('#caseNotif').text('Case ID already exist.');
                        var ccfname = "<?php echo $_SESSION['ccfname']?>";
                        var cclname = "<?php echo $_SESSION['cclname']?>";
                        var caseId = "<?php echo $_SESSION['caseId']?>";
                        var cdTitle = "<?php echo $_SESSION['cdTitle']?>";
                        var cdDesc = "<?php echo $_SESSION['cdDesc']?>";
                        $('#ccfname').val(ccfname);
                        $('#cclname').val(cclname);
                        $('#cdId').val(caseId);
                        $('#cdTitle').val(cdTitle);
                        $('#cdDesc').val(cdDesc);

						$('#toggle_div').attr('value', 'Hide Form');
						$('#addNew_div').show();
						$('#category').val('2');
						$('#addNew_form').hide();
						$('#addNew_dataForm').hide();
						$('#addNew_caseForm').show();
					 </script>

<?php
					break;
                    case 'nocclient':
?>
					<script>
						$('#caseNotif').text('No such client exist. Please double check the name of your client.');
	                    var ccfname = "<?php echo $_SESSION['ccfname']?>";
                        var cclname = "<?php echo $_SESSION['cclname']?>";
                        var caseId = "<?php echo $_SESSION['caseId']?>";
                        var cdTitle = "<?php echo $_SESSION['cdTitle']?>";
                        var cdDesc = "<?php echo $_SESSION['cdDesc']?>";
                        $('#ccfname').val(ccfname);
                        $('#cclname').val(cclname);
                        $('#cdId').val(caseId);
                        $('#cdTitle').val(cdTitle);
                        $('#cdDesc').val(cdDesc);

						$('#toggle_div').attr('value', 'Hide Form');
						$('#addNew_div').show();
						$('#category').val('2');
						$('#addNew_form').hide();
						$('#addNew_dataForm').hide();
						$('#addNew_caseForm').show();
					</script>
<?php
					break;
                    case 'nodclient':
?>
					<script>
						$('#dataNotif').text('No such client exist. Please double check the name of your client.');
                        var dcfname = "<?php echo $_SESSION['dcfname']?>";
                        var dclname = "<?php echo $_SESSION['dclname']?>";
                        var dataId = "<?php echo $_SESSION['dataId']?>";
                        var ddTitle = "<?php echo $_SESSION['ddTitle']?>";
                        var ddDesc = "<?php echo $_SESSION['ddDesc']?>";
                        $('#dcfname').val(dcfname);
                        $('#dclname').val(dclname);
                        $('#ddId').val(dataId);
                        $('#ddTitle').val(ddTitle);
                        $('#ddDesc').val(ddDesc);

						$('#toggle_div').attr('value', 'Hide Form');
						$('#addNew_div').show();
						$('#category').val('3');
						$('#addNew_form').hide();
						$('#addNew_caseForm').hide();
						$('#addNew_dataForm').show();
					</script>
<?php   
					break;
					case 'clientexisting':
?>
                    <script>
                        $('#clientNotif').text('Case ID already exist.');
                        var fname = "<?php echo $_SESSION['fname']?>";
                        var lname = "<?php echo $_SESSION['lname']?>";
                        var clientGender = "<?php echo $_SESSION['clientGen']?>";
                        var birthday = "<?php echo $_SESSION['bday']?>";
                        var clientAdd = "<?php echo $_SESSION['cAdd']?>";
                        var clientCon = "<?php echo $_SESSION['cCon']?>";
                        var clientStat = "<?php echo $_SESSION['cStat']?>";
                        $('#fname').val(fname);
                        $('#lname').val(lname);
                        $('#clientGender').val(clientGender);
                        $('#birthday').val(birthday);
                        $('#clientAdd').val(clientAdd);
                        $('#clientCon').val(clientCon);
                        $('#clientStat').val(clientStat);

						$('#toggle_div').attr('value', 'Hide Form');
						$('#addNew_div').show();
						$('#category').val('1');
						$('#addNew_form').show();
						$('#addNew_dataForm').hide();
						$('#addNew_caseForm').hide();
					 </script>

<?php
					break;
            }

        }else{
			header("Location: home.php?notif=nomsg");
		}

    }else{
		header("Location: home.php?notif=nopage");
	}

}else{

?>
	<script type="text/javascript">

	$(document).ready(function(){
 	
		$('#addNew_div').hide(); /* id of div you want to hide */
		$('#addNew_form').hide(); /* id of div you want to hide */
		$('#addNew_caseForm').hide(); /* id of div you want to hide */
		$('#addNew_dataForm').hide(); /* id of div you want to hide */

	});

	</script>

<?php

}

?>