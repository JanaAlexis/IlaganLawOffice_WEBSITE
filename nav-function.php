<?php
	include_once('config/config.php');
	
	if($_SERVER['REQUEST_METHOD']=='POST'){
		switch($_GET["action"]){
			
			case "login":
					//Define $user and $password
					$username = $_POST['username'];
					$password = $_POST['password'];
					if(empty($_POST['username']) || empty($_POST['password'])){
						
						$error = "Please complete all fields.";
						echo $error;
						
					}else{
						
						//sql query to fetch information of registered user and finds user match
						$query = mysqli_query($conn, "SELECT * FROM login WHERE password='".$password."' AND username='".$username."'");
						
						if($query){
				            if(mysqli_num_rows($query) < 1){
								header("Location: index.php?page=login&msg=invalid");
                            }else{		
                                $_SESSION['status'] = 1;	
                                while($row = mysqli_fetch_assoc($query)){
								    $_SESSION['userId'] = $row['userID'];
									$_SESSION['firstname'] = $row['firstName'];
									$_SESSION['lastname'] = $row['lastName'];
									$_SESSION['user'] = $row['username'];;
				            	}
								header("Location: mainmenu.php");
                            }
						}else{
                            echo "Customer login error.";
                        }
					}
                 
				break;

			case "signup":
					//Define $user and $password
					$firstName = $_POST['firstName'];
					$lastName = $_POST['lastName'];
					$username = $_POST['username'];
					$password = $_POST['password'];
					
					$firstName = ucfirst($firstName);
					$lastName = ucfirst($lastName);
					
					if($findAt || $finddot){
						
						$check = mysqli_query($conn, "SELECT * FROM login WHERE username = '".$username."'");
						$rows = mysqli_fetch_assoc($check);
						$filter = $rows['username'];
						
						if($filter){
							// Declare sessions to display previous data in modal
							$_SESSION['firstname'] = $rows['firstName'];
							$_SESSION['lastname'] = $rows['lastName'];
							$_SESSION['username'] = $rows['username'];
							header("Location: index.php?page=signup&msg=existing");// idk yet
							
						}else{
							//create user
							$query = "INSERT INTO login (username, password, firstName, lastName) VALUES ('$username','$password','$firstName','$lastName')";
							
							$insertquery = mysqli_query($conn, $query);
							
							//check if data is in the database
							if($insertquery){
								
								$_SESSION['userStatus'] = 2;
								
								$_SESSION['userId'] = $rows['customerID'];
								$_SESSION['firstname'] = $rows['firstName'];
								$_SESSION['lastname'] = $rows['lastName'];
								$_SESSION['email'] = $rows['email'];
								
								header("Location: rooms.php?page=signup&msg=success");
							}
							
						}
					}else{
                        // Declare sessions to display previous data in modal
                        $_SESSION['firstname'] = $firstName;
                        $_SESSION['lastname'] = $lastName;
                        $_SESSION['email'] = $email;
                        header("Location: index.php?page=signup&msg=invalid");
                    }
			break;

		case 'employee':
				$
			break;
		}
	}else{
		echo "Error POST";
	}
	
	if(isset($_GET["action"]) && ($_GET["action"]=="logout")){
		session_unset();
		session_destroy();
		header("Location: index.php");
	}
?>