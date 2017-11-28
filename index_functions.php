<?php
    include_once('config/config.php');
    
    if($_SERVER['REQUEST_METHOD']=='POST'){
        switch($_GET["action"]){
            
            case "login":
                    //Define $user and $password
                    $user = $_POST['user'];
                    $pass = $_POST['password'];
                    if(empty($_POST['user']) || empty($_POST['password'])){
                        
                        $error = "Please complete all fields.";
                        echo $error;
                        
                    }else{
                        
                        if ($user == "admin" || $user == "Admin" || $user == "ADMIN"){
                            $user = strtolower($user);
                            $hashedpassword = $pass;
                            //sql query to fetch information of registered user and finds user match
                            $query = mysqli_query($conn, "SELECT * FROM employee WHERE password='".$hashedpassword."' AND username='".$user."'");
                            
                            if($query){
                                if(mysqli_num_rows($query) < 1){
                                        $_SESSION['user'] = $user;
                                    header("Location: index.php?page=login&msg=invalid");
                                }else{
                                    
                                    $_SESSION['userStatus'] = 1; //tracks who is the user
                                    
                                    while($row = mysqli_fetch_assoc($query)){
                                        $_SESSION['userId'] = $row['employeeID'];
                                        $_SESSION['firstname'] = $row['firstName'];
                                        $_SESSION['lastname'] = $row['lastName'];
                                        $_SESSION['user'] = $row['username'];
                                    }
                                    header("Location: home.php");
                                    //echo $_SESSION['userStatus'];
                                }
                            }else{
                                echo "Admin login error.";
                            }
                        }
                break;
            }
        }
    }else{
        echo "Error POST";
    }
    
    if(isset($_GET["action"]) && ($_GET["action"]=="logout")){
        session_unset();
        session_destroy();
        header("Location: ../ilaganlawoffice");
    }
?>