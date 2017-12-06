<?php
    include_once('config/config.php');
    
    if($_SERVER['REQUEST_METHOD']=='POST'){
        switch($_GET["action"]){
            
            case "login":
                    //Define $user and $password
                    $user = $_POST['user'];
                    $pass = $_POST['password'];

                    $user = strtolower($user);
                    $hashedpassword = md5($pass);
                    //echo $hashedpassword;

                    if(empty($_POST['user']) || empty($_POST['password'])){
                        
                        $error = "Please complete all fields.";
                        echo $error;
                        
                    }else{

                        //sql query to fetch information of registered user and finds user match
                            $query = mysqli_query($conn, "SELECT * FROM employee WHERE password='".$hashedpassword."' AND username='".$user."'") or die(mysqli_error($conn));
                            
                            if($query){
                                if(mysqli_num_rows($query) < 1){
                                        $_SESSION['user'] = $user;
                                    header("Location: index.php?page=login&msg=invalid");
                                }else{
                                    
                                    $_SESSION['userStatus'] = 1; //tracks who is the user
                                    
                                    while($row = mysqli_fetch_assoc($query)){
                                        $_SESSION['userId'] = $row['empID'];
                                        $_SESSION['fname'] = $row['empFname'];
                                        $_SESSION['lname'] = $row['empLname'];
                                        $_SESSION['user'] = $row['username'];
                                    }
                                    header("Location: home.php");
                                    //echo $_SESSION['userStatus'];
                                }
                            
                        }
                break;
            }

        } //end of switch
    }else{
        echo "Error POST";
    }
    
    if(isset($_GET["action"]) && ($_GET["action"]=="logout")){
        session_unset();
        session_destroy();
        header("Location: ../ilaganlawoffice");
    }
?>