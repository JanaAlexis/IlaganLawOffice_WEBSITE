<?php
	include_once 'header.php';
	include_once 'navbar.php';
?>
<!--Display-->
<div class="panel panel-default">
	  <div class="panel-heading"></div>
	  <div class="panel-body">
		  <table class="table table-hover" id="item-list-tbl">
			<thead>
			   <tr>
				  <th>Clients</th>
			   </tr>
			</thead>
		    <tbody id="list-tbl-body">
		    <!-- to be filled dynamically -->
			</tbody>
		  </table>
	  </div>
	</div>
<!-- end of display list -->

<?php
    include 'footer.php';
?>
<?php
	$query = "SELECT c.clientID, caseID, c.clientFname, c.clientLname from case_disk cd join client c on cd.clientID = c.clientID WHERE  cd.clientID = c.clientID GROUP BY c.clientID";
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

<script type="text/javascript"> //Javascript/jquery when opening document
  $(document).ready(function(){

    var resdata = <?php echo json_encode($data) ?>; // Populate record data in table using the data from php query
   	console.log(resdata);

      var listTbl = $("#list-tbl-body");
      listTbl.html("");
    
         for(var x=0;x<resdata.length;x++){
           var tRow = "<tr>";
               tRow += "<td><a href='client-case.php?id=" + resdata[x].clientID + "'>" + resdata[x].clientLname  +" "+  resdata[x].clientFname +"</a></td>";
               tRow += "</tr>";
          listTbl.append(tRow);
        }   // end of populating data

          $('#item-list-tbl').dataTable();


  });
	
</script>
