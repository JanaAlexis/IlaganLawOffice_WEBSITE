<?php
    include 'config/config.php';
    include 'header.php';
    include 'navbar.php';
    //echo $_SESSION['userStatus'];
?>
<!-- Table that displays the record list -->
	<div class="panel panel-default">
	  <div class="panel-heading"></div>
	  <div class="panel-body">
		  <table class="table table-hover" id="item-list-tbl">
			<thead>
			   <tr>

				  <th>First Name</th>
				  <th>Last Name</th>
				  <th>Gender</th>
				  <th>Birthdate</th>
				  <th>Address</th>
				  <th>Contact Number</th>
				  <th>Status</th>
				<!--  <th>Update</th> -->
				</tr>
			  </thead>
			  <tbody id="client-tbl-body">
				<!-- to be filled dynamically -->
			  </tbody>
		  </table>
	  </div>
	</div>

<?php
    include 'footer.php';
?>
<!--CLIENT-->

<?php //PHP query for getting reservation list

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

?> <!-- end of Client list php -->

<script type="text/javascript"> //Javascript/jquery when opening document
  $(document).ready(function(){

    var resdata = <?php echo json_encode($resdata) ?>; // Populate record data in table using the data from php query
   	console.log(resdata);

      var clntTbl = $("#client-tbl-body");
      clntTbl.html("");
     
         for(var x=0;x<resdata.length;x++){
          clientId=resdata[x].clientID;
           var tRow = "<tr>";
               tRow += "<td>" + resdata[x].clientFname + "</td>";
               tRow += "<td>" + resdata[x].clientLname + "</td>";
               tRow += "<td>" + resdata[x].clientGen + "</td>";
               tRow += "<td class='tbl-num'>" + resdata[x].clientBirth + "</td>";
               tRow += "<td>" + resdata[x].clientAdd + "</td>";
              
               tRow += "<td>" + resdata[x].clientCon + "</td>";
               
               tRow += "<td class='tbl-num'>" + resdata[x].clientStat + "</td>";
               tRow += "</tr>";

         clntTbl.append(tRow);
        }   // end of populating data



	});
	
</script>