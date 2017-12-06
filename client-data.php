<?php
	include 'header.php';
	include 'navbar.php' ;
?>
<?php
global $id;
	$id = $_GET['id'];

	$clientquery = "SELECT * FROM client WHERE clientID = '$id'";
	$clientres = mysqli_query($conn, $clientquery);
    if($clientres){
	    while($res = mysqli_fetch_assoc($clientres)){
	        $clientId = $res['clientID'];
	        $fname = $res['clientFname'];
	        $lname = $res['clientLname'];
	        $clientGender = $res['clientGen'];
	        $birthday = $res['clientBirth'];
	        $clientAdd = $res['clientAdd'];
	        $clientCon = $res['clientCon'];
	        $clientStat = $res['clientStat'];

	        
	    }
	}
?>

<div class="container-fluid" style=" height: 583px;">
	<input type="button" class="btn btn-primary" value="Client Profile" id="toggle_div"/></br></br>

	<div class="panel panel-default" id="showProfile">
		<div class="panel-heading">
			<h3 class="panel-title"><i class="fa fa-info-circle"></i> Client Profile </h3>

			<div class="panel-body" id="form">
		
					<div class="form-group" action="client.php" id="client"> <!--CLIENT INFORMATION-->
								<input type="hidden" id="clientId"  name="clientId" value="<?php echo $clientId ?>" class="client-info"/>
								<div class="form-group" id="grpName" >
			                       <label id="lblName">First Name</label><br>
			                       <input type="text" name="fname" value="<?php echo $fname; ?>" class="form-control client-info" readonly><br>
			                       <label id="lblName">Last Name</label>
			                       <input type="text" name="lname" value="<?php echo $lname; ?>" class="form-control client-info" placeholder="Last Name"  readonly>
			                    </div>
			                	<div class="form-group" id="grpGender">
			                		<label id="lblGender">Gender</label><br>
			                		<select name="clientGender" id="clientGender" class="form-control client-info"  readonly>
			                			<option value="<?php echo $clientGender; ?>">Male</option>
			                			<option value="<?php echo $clientGender; ?>">Female</option>
			                		</select>
				                </div>
				                <div div class="form-group" id="grpCDate">
	     			               <label id="lblBirth">Birthdate</label><br>
							       <input type="date" style="text-align: center;" class="form-control client-info" placeholder="yyyy-mm-dd" value="<?php echo $birthday; ?>" name="birthday" id="birthday"  readonly/>
							    </div>
				                <div div class="form-group" id="grpAddress">
					                <label id="lblAddress">Address</label><br>
					                <input type="text" name="clientAdd" value="<?php echo $clientAdd; ?>" class="form-control client-info" placeholder="Address"  readonly>
				                </div>
				                <div div class="form-group" id="grpContact">
					                <label id="lblConNum">Contact no.</label><br>
					                <input type="text" name="clientCon" value="<?php echo $clientCon; ?>" class="form-control client-info" placeholder="Contact"  readonly>
					            </div>
					            <div class="form-group"  id="grpStatus">
					            	<label id="lblStatus">Status</label><br>
									<input name="clientStat" id="clientStat" value="<?php echo $clientStat; ?>" class="form-control client-info" readonly>
								</div>
						</div><!--end of CLIENT INFORMATION-->
			</div>
		</div>
    </div>
    <div class="table-responsive" style="width:100%;" align="center;">
    	<table id="client-datas" class="table table-striped table-bordered">
    		<thead>
    			<tr>
					<td>Title</td>
					<td>Date</td>
					<td>Description</td> 
					<td>Tags</td>
					<td>document</td>			
    			</tr>
    		</thead>
			<tbody id="data-list-tbl">
				<!-- to be filled dynamically -->
				<?php
					$query = "SELECT * FROM data_disk WHERE clientID = '$id'";
				    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
					while ($row = mysqli_fetch_assoc($result)) {
						echo "<tr>";
						echo "<td>".$row['dataTitle']."</td>";
						echo "<td>".$row['dataDate']."</td>";
						echo "<td>".$row['dataDesc']."</td>";
						echo "<td>".$row['dataTags']."</td>";
						echo "<td><a  target='_blank' href='df.php?id=".$row['dataID']."'>".$row['filename']."</a></td>";
						echo "</tr>";

						
					}

				?>
			</tbody>
    	</table>
    </div>
</div>

<?php
	include 'footer.php';
?>

<script type="text/javascript">
	$(document).ready(function(){

           $('#client-datas').dataTable();

		$('#showProfile').hide(); /* id of div you want to hide */
		var show = 0; //checks if form '#addNew_form' is hidden

		$('#toggle_div').click(function(){
			var value = $('#toggle_div').attr('value'); /* id of your toggle button */
			console.log(value);

			if(value=='Client Profile'){
				$('#showProfile').toggle('fast');
				$('#toggle_div').attr('value', 'Hide Profile');
			}else if(value=='Hide Profile'){
				$('#showProfile').toggle('fast');
				$('#toggle_div').attr('value', 'Client Profile');
				show = 0;
			}
			//console.log($('#classificationCode').val());
		});
		
	 });
</script>