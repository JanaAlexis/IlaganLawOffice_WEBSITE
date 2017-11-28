
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Ilagan<span class="highlight"> Law Office</span></a>
    </div>
    <div class="navbar-right">
      <ul class="nav navbar-nav collapse navbar-collapse main-nav">
        <li id="home-li"><a href="home.php">Home</a></li>
        <li id="about-li"><a href="about.php">About</a></li>
        <li id="logout-li">
            <a href="index_functions.php?action=logout">Log Out</a>
        </li>    
      </ul>
    </div>
  </div>
</nav>

<!--ADMIN NAVIGATION-->
<div id="dashboard-header" class="col-lg-12">

    <header><h2>Dashboard</h2></header>
    <ol class="breadcrumb">
        <li>
            <i class="fa fa-dashboard"></i> Dashboard
        </li>
        <li>
             <a href= "case.php">Case Disk</a>
        </li>
        <li>
             <a href= "data.php">Data Disk</a>
        </li>
         <li>
             <a href= "client.php">Client Information</a>
        </li>
        <li>
             <a href= "employees.php">Employees</a>
        </li>
    </ol>
</div>
<!-- ADMIN NAVIGATION -->


<?php
    include_once 'footer.php';
    if(!(isset($_SESSION['status']))){
        $_SESSION['status'] = 0; //tracks who is the user

    }
?>
<script>
        $(document).ready(function(){
            if(<?php echo $_SESSION['userStatus']?> == 1){
                $('#dashboard-li').show();
                $('#dashboard-header').show();
                $('#user-nav').hide();
                $('#booking-li').hide();
                $('#login-li').hide();
                $('#signup-li').hide();
                $('#div1').hide();
                $('#logout-li').show();
            }else{
                $('#user-nav').show();
                $('#dashboard-header').hide();
                $('#dashboard-li').hide();
                $('#booking-li').hide();
                $('#logout-li').hide();
                $('#div2').hide();
            }
     });
        
</script>
