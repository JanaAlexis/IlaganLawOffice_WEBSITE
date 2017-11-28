<?php
	require_once("config/config.php");

	if($_SERVER['REQUEST_METHOD']=='POST'){
		$action = $_POST['action'];

		switch($action){
			case 'addNewInfo': addNewInfo(); break;
			
	  	}

	}else{
		echo 'Not set';
	}

	function addNewInfo(){

		$client =$_POST['clientDetails'];
		$case =$_POST['caseDetails'];
		$data =$_POST['dataDetails'];		
		$category = $_POST['category'];


		echo $category;

		

		if($category == 1){
			$conn = mysqli_connect("localhost","root","","lawfirm");
			$insertClient = "INSERT INTO client (`clientFname`, `clientLname`, `clientGen`, `clientBirth`, `clientAdd`, `clientCon`, `clientStat`) VALUES ('$client[1]', '$client[2]', '$client[3]', '$client[4]', '$client[5]', '$client[6]', '$client[7]')";
			$sql = mysqli_query($conn, $insertClient) or die(mysqli_error($conn));
		}

		/*else if($category<>2){

			$insertClient = "INSERT INTO `case_disk`(`clientID`, `caseTitle`, `caseDate`, `caseDesc`, `caseTags`) VALUES ($case[1], $case[2], $case[4], $case[6], $case[3], $case[5], $case[7])";
			$sql = mysqli_query($conn, $insertClient) or die(mysqli_error($conn));
		}*/

		//echo json_encode($payment);
		echo $insertClient;
	}

