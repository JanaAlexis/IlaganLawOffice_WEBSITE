
<header>
    <div class="container">
        <div id="branding">
            <h1>Ilagan<span class="highlight"> Law Office</span></h1>
        </div>
        <nav>
            <ul>
                <li id="home-li"><a href="mainmenu.php">Home</a></li>
                <li id="about-li"><a href="about.php">About</a></li>
                <li id="login-li">
                    <a href="index.php"><!--<i class="fa fa-fw fa-user"></i>-->Log in</a>
                </li>
                <li id="signup-li">
                    <a href="signup.php"><!--<i class="fa fa-fw fa-sign-in"></i>-->Sign up</a>
                </li>
                <li id="logout-li">
                    <a href="nav-function.php?action=logout"><!--<i class="fa fa-fw fa-power-off"></i>-->Log Out</a>
                </li>
            </ul>
        </nav>
    </div>
</header>

<?php
    include_once 'footer.php';
    if(!(isset($_SESSION['status']))){
        $_SESSION['status'] = 0; //tracks who is the user

    }
?>


<script>
    $(document).ready(function(){
            if(<?php echo $_SESSION['status']?> == 1){
                $('#home-li').show();
                $('#about-li').show();
                $('#login-li').hide();
                $('#signup-li').hide();
                $('#logout-li').show();
            }else{
                $('#home-li').hide();
                $('#about-li').hide();
                $('#login-li').show();
                $('#signup-li').hide();
                $('#logout-li').hide();
            }
            
    });
</script>



<?php
if (isset($_GET['page'])){ 
    if($_GET['page']=="login"){             
        if(!empty($_GET['msg'])){

            switch ($_GET['msg']) {
                    case 'invalid':
?>
                         <script>
                        $('#loginNotif').text('Invalid username or password. Please try again.');
                        </script>
<?php
                    break;
            }
        }
    }else if($_GET['page']=="signup"){              
        if(!empty($_GET['msg'])){
            switch ($_GET['msg']) {
                    case 'invalid':
?>
                        <script>
                        $('#signupNotif').text('Invalid email. Please try again.');
                        var fname = "<?php echo $_SESSION['firstname']?>";
                        var lname = "<?php echo $_SESSION['lastname']?>";
                        var username = "<?php echo $_SESSION['username']?>";
                        //alert(data);
                        $('#fname').val(fname);
                        $('#lname').val(lname);
                        $('#singupEmail').val(username);
                        </script>
<?php
                        break;
                    case 'existing':
?>
                        <script>
                        $('#emailExist').text('Email already exist.');
                        var fname = "<?php echo $_SESSION['firstname']?>";
                        var lname = "<?php echo $_SESSION['lastname']?>";
                        var username = "<?php echo $_SESSION['username']?>";
                        //alert(data);
                        $('#fname').val(fname);
                        $('#lname').val(lname);
                        $('#singupUsername').val(username);
                        </script>
<?php
                        break;
            }
        }
    }
}
?>

