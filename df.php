<?php
    include_once('config/config.php');
    if(isset($_GET['id'])){
		$id = $_GET['id'];
		echo $id;
		$query = mysqli_query($conn, "SELECT * FROM data_disk WHERE dataID = '$id'");
		$row = mysqli_fetch_assoc($query);
		$data = $row['filedata'];	
		echo $row['filename'];
		header("Content-type: ".$row['filemime']);
		header('Content-disposition: attachment; filename="'.$row['filename'].'"');
		ob_clean();
		
		echo $data;
	}
	
	



?>