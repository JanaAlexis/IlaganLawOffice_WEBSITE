<?php
	require_once("config/config.php");

	if($_SERVER['REQUEST_METHOD']=='POST'){
		$action = $_POST['action'];

		switch($action){
			case 'update': update(); break;
		}

	}else{
		echo 'Not set';
	}
	function update() {
		$conn = mysqli_connect("localhost","root","","lawfirm");

		$cUp = $_POST['cDetails'];
		//echo $cUp[0];

        $resquery = "SELECT * FROM client where clientID = '$cUp[0]'";
  		$res = mysqli_query($conn, $resquery);
  		$row = mysqli_fetch_assoc($res);

  		//echo $cUp[1];
  		//echo $cUp[2];
  		//echo $cUp[3];
  		//echo $cUp[4];
  		
  		$updatequery = "UPDATE `client` SET `clientFname`='$cUp[1]', `clientLname`='$cUp[2]', `clientGen`='$cUp[3]',`clientBirth`='$cUp[4]', `clientAdd`='$cUp[5]',`clientCon`='$cUp[6]',`clientStat`= '$cUp[7]' WHERE clientID = '$cUp[0]'";
  		mysqli_query($conn, $updatequery) or die(mysqli_error($conn));

  		echo $updatequery;

	}

