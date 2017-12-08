<?php
	require_once("config/config.php");

	if($_SERVER['REQUEST_METHOD']=='POST'){
		$action = $_POST['action'];

		switch($action){
			case 'addNewEmp': addNewEmp(); break;
			case 'update': update(); break;
		}

	}else{
		echo 'Not set';
	}

	function addNewEmp(){
		$employee = $_POST['empDetails'];
		$empFname = ucfirst($employee[1]);
		$empLname = ucfirst($employee[2]);
		$empUname = strtolower($employee[3]);
		$hashedpassword = md5($employee[4]);

		$conn = mysqli_connect("localhost","root","","lawfirm");
  		$query = mysqli_query($conn, "SELECT * FROM employee WHERE empFname = '".$empFname."' AND empLname = '".$empLname."'") or die(mysqli_error($conn));
			
			 if (mysqli_num_rows($query)>=1) {
			    echo 'true';  
			 } else {
			    echo 'false';
		   		$insertEmp = "INSERT INTO employee (`empFname`, `empLname`, `username`, `password`, `empStat`) VALUES ('$empFname', '$empLname', '$empUname', '$hashedpassword', '$employee[5]')";
				$sql = mysqli_query($conn, $insertEmp) or die(mysqli_error($conn));
			  }
			

		/*else if($category<>2){

			$insertClient = "INSERT INTO `case_disk`(`clientID`, `caseTitle`, `caseDate`, `caseDesc`, `caseTags`) VALUES ($case[1], $case[2], $case[4], $case[6], $case[3], $case[5], $case[7])";
			$sql = mysqli_query($conn, $insertClient) or die(mysqli_error($conn));
		}*/

		//echo json_encode($payment);
	
	
	}

	function update() {
		$conn = mysqli_connect("localhost","root","","lawfirm");

		$empUp = $_POST['empDetails'];
		echo $empUp[0];

        $resquery = "SELECT * FROM employee where empID = '$empUp[0]'";
  		$res = mysqli_query($conn, $resquery);
  		$row = mysqli_fetch_assoc($res);

  		echo $empUp[1];
  		echo $empUp[2];
  		echo $empUp[3];
  		echo $empUp[4];


		$empFname = ucfirst($empUp[1]);
		$empLname = ucfirst($empUp[2]);
		$empUname = strtolower($empUp[3]);
		$hashedpassword = md5($empUp[4]);
  		
  		$updatequery = "UPDATE `employee` SET `empFname`='$empFname', `empLname`='$empLname', `username`='$empUname',`password`='$hashedpassword',`empStat`= '$empUp[5]' WHERE empID = '$empUp[0]'";
  		mysqli_query($conn, $updatequery) or die(mysqli_error($conn));

  		echo $updatequery;

	}

