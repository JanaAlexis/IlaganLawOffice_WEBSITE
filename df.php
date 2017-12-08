<?php
    include_once('config/config.php');
    if(isset($_GET['id'])){
		$id = $_GET['id'];
		echo $id;
		$query = mysqli_query($conn, "SELECT * FROM data_disk WHERE dataID = '$id'");
		$row = mysqli_fetch_assoc($query);
		$data = $row['dfiledata'];	
		echo $row['dfilename'];
		header("Content-type: ".$row['dfilemime']);
		header('Content-disposition: attachment; filename="'.$row['dfilename'].'"');
		ob_clean();
		
		echo $data;
	}
	
	



?>