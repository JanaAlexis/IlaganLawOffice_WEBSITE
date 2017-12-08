<?php
    include 'header.php';
    include 'nav.php';
?>

    <header>
        
        <form class="search">
              <div id="searchclient">  
            <input type="text" placeholder="search">
            <button class="button_2"type="search">search</button>
              </div>
        </form>
    </header>
    
    <div id="contentLeft">
        <div class="top-cLeft">
            <i class="fa fa-files-o" aria-hidden="true">FILES</i>
        </div>
            <button class="button_2" type="caseDisk">Case Disk</button>
            <br/><br/><br/><br/><br/><br/>
            <button class="button_2" type="dataDisk">Data Disk</button>
             
    </div>
    
    <div id="contentRight">
        <div class="top-cRight">
            <a href="" data-toggle='modal' data-target='#client-modal'><button class="button_2" type="Client">Add Client</button></a>
            <a href="" data-toggle='modal' data-target='#case-modal'><button class="button_2" type="Case">Add Case</button></a>
            <a href="" data-toggle='modal' data-target='#data-modal'><button class="button_2" type="Data">Add Data</button></a>            
            <a href="" data-toggle='modal' data-target='#employee-modal'><button class="button_2" type="Data">Add Employee</button></a>            
        </div>
    </div>

<!-- add client -->
<div id="client-modal" class="modal fade in" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><i class="fa fa-info-circle"></i> Add New Client </h4>
            </div>
            <div class="modal-body">
                <form method="post" action="navbar-functions.php?action=employee">
                    <input type="text" name="firstName" placeholder="First Name" required>
                    <input type="text" name="lastName" placeholder="Last Name" required>
                    <input type="radio" name="gender" value="f" checked="checked">Female
                    <input type="radio" name="gender" value="m" checked="checked">Male
                    <label>Birthdate</label><br>
                    <select name="b-month" id="month" required>
                        <option value="">--</option> 
                        <option value="january">January</option>
                        <option value="february">February</option>
                        <option value="march">March</option>
                        <option value="april">April</option>
                        <option value="may">May</option>
                        <option value="june">June</option>
                        <option value="july">July</option>
                        <option value="august">August</option>
                        <option value="september">September</option>
                        <option value="october">October</option>
                        <option value="november">November</option>
                        <option value="december">December</option>
                    </select>
                     
                    <input type="number" name="day" placeholder="Day" min="0" max="31" required>
                    <input type="number" name="year" placeholder="Year" min="1900" max="2017" required>
                    <input type="text" name="address" placeholder="Address" required>
                    <input type="text" name="contact" placeholder="Contact" required>
                    <div class="form-group">
                        <div class="col-sm-offset-5 col-sm-7">
                            <button class="btn b10 pull-right" type="button" data-dismiss="modal">
                                Cancel    
                            </button>  
                            <button class="btn btn-success b10 pull-right" type="submit" name="submit">
                                Add                               
                            </button>
                        </div>
                    </div>  
                </form>
            </div>
        </div>
    </div>
</div>

<!-- add case modal -->
<div id="case-modal" class="modal fade in" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><i class="fa fa-info-circle"></i> Add Case Disk </h4>
            </div>
            <div class="modal-body">
                <form class="">
                    <input type="text" name="name" placeholder="Name">
                    <input type="caseID" name="caseID" placeholder="ID">
                    <input type="caseTitle" name="caseTitle" placeholder="Title">
                    <input type="caseDate" name="caseDate" placeholder="">
                    <input type="caseDescription" name="caseDescription" placeholder="add description">
                </form>
            </div>
        </div>
    </div>
</div>


<!-- add data modal -->

<div id="data-modal" class="modal fade in" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><i class="fa fa-info-circle"></i> Add Data Disk </h4>
            </div>
            <div class="modal-body">
                <form class="">
                    <input type="text" name="name" placeholder="Name">
                    <input type="text" name="dataID" placeholder="ID">
                    <input type="text" name="dataTitle" placeholder="Title">
                    <input type="" name="dataDate" placeholder="Date">
                    <input type="text" name="dataDescription" placeholder="Description"> 
                    <div class="form-group">
                        <div class="col-sm-offset-5 col-sm-7">
                            <button class="btn b10 pull-right" type="button" data-dismiss="modal">
                                Cancel    
                            </button>  
                            <button class="btn btn-success b10 pull-right" type="submit" name="submit">
                                Add                               
                            </button>
                        </div>
                    </div>  
                </form>
            </div>
        </div>
    </div>
</div>
    
<!-- add employee modal -->
<div id="employee-modal" class="modal fade in" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><i class="fa fa-info-circle"></i> Add Employee </h4>
            </div>
            <div class="modal-body">
                <label class="label label-danger" id="signupNotif"></label></br></br>
                
                <form method="post" action="navbar-functions.php?action=signup">
                    <div class="form-group">
                        <input type="text" id="fname" name="firstName" placeholder="First Name" class="form-control cust-info" autofocus required/></br>
                        <input type="text" id="lname" name="lastName" placeholder="Last Name" class="form-control cust-info" required/></br>
                        
                        <!-- Label shows if email exist -->
                        <label class="label label-danger" id="emailExist"></label></br></br>
                        
                        <input type="text" id="singupEmail" name="email" placeholder="Email" class="form-control cust-info"  required/></br>
                        <input type="password" name="password" placeholder="password" class="form-control cust-info" required/>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-5 col-sm-7">
                            <button class="btn b10 pull-right" type="button" data-dismiss="modal">
                                Cancel    
                            </button>  
                            <button class="btn btn-success b10 pull-right" type="submit" name="submit">
                                Sign up                               
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


    <footer>
        <p>Ilagan Law Office, Copyright &copy; 2017</p>
    </footer>
        
<?php
    include_once 'footer.php';

?>
