<?php
    include_once('config/config.php');
    if(isset($_GET['id'])){
		$id = $_GET['id'];
		echo $id;
		$query = mysqli_query($conn, "SELECT * FROM case_disk WHERE caseID = '$id'");
		$row = mysqli_fetch_assoc($query);
		$data = $row['cfiledata'];	
		echo $row['cfilename'];
		header("Content-type: ".$row['cfilemime']);
		header('Content-disposition: attachment; filename="'.$row['cfilename'].'"');
		ob_clean();

		echo $data;
	}
	
	



?>