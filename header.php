<?php
	include_once("config/config.php");

	
	if(!(isset($_SESSION['userStatus']))){
		session_destroy();
		header("Location: ../ilaganlawoffice");
	}
    //echo $_SESSION['userStatus'];
?>


<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Ilagan Law Office</title>
	
			<!-- Bootstrap Core CSS -->
			<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

			<!-- Bootstrap core CSS -->
			<link href="css/bootstrap.css" rel="stylesheet">
			<!--external css-->
			<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />

			<link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.min.css">

			<!-- Custom styles for this page-->
			<link href="css/style.css" rel="stylesheet">
			<link href="css/style-responsive.css" rel="stylesheet">
			<link href="css/table-responsive.css" rel="stylesheet">


			<!-- Admin CSS -->
			<link href="css/main.css" rel="stylesheet" type="text/css"/>
			
			
	</head>
	
	<body>