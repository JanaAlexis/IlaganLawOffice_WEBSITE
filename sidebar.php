<style>
	.side-nav{
			z-index: 5;
	}
	.side-nav:hover{
			z-index: 5;
	}
</style>

<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
					<li>
						<a href="UnitModel.php"><i class="fa fa-fw fa-mobile"></i>&nbsp;&nbsp; Models </i></a>
					</li>
					<li>
						<a href="AdminDashboard.php"><i class="fa fa-fw fa-cubes"></i>&nbsp;&nbsp; Items </i></a>
					</li>
					<li id="promoLink">
						<a href="javascript:;" data-toggle="collapse" data-target="#subPromo"><i class="fa fa-fw fa-tag"></i>&nbsp;&nbsp; Promo </a>
							<ul id="subPromo"class="collapse">
								<li>
									<a href="promo.php">&nbsp;<i class="fa fa-plus"></i>&nbsp; Add Promo</a>
								</li>
								<li>
									<a href="promoList.php">&nbsp;<i class="fa fa-reorder"></i>&nbsp; Promo List</a>
								</li>
							</ul>
					</li>
					<li id="salesLink">
						<a href="Sales.php"><i class="fa fa-barcode"></i>&nbsp;&nbsp;&nbsp; Sales</a>
					</li>
					<li>
						<a href="javascript:;" data-toggle="collapse" data-target="#subRequest"><i class="fa fa-paper-plane"></i>&nbsp;&nbsp; Requests</a>
						<ul id="subRequest"class="collapse">
								<li>
									<a href="Pending_requests.php">&nbsp;<i class="fa fa-plus"></i>&nbsp; Pending Requests</a>
								</li>
								<li>
									<a href="Requests.php">&nbsp;<i class="fa fa-reorder"></i>&nbsp; Request List</a>
								</li>
							</ul>
					</li>
					<li id="transferLink">
						<a href="javascript:;" data-toggle="collapse" data-target="#subTrans"><i class="fa fa-external-link"></i>&nbsp;&nbsp; Transfer</a>
						<ul id="subTrans"class="collapse">
							<li>
								<a href="Transfer.php">&nbsp;<i class="fa fa-plus"></i>&nbsp; Transfer Form</a>
							</li>
							<li>
								<a href="TransferList.php">&nbsp;<i class="fa fa-reorder"></i>&nbsp; Transfer List</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="Inventory.php"><i class="fa fa-fw fa-bar-chart"></i>&nbsp;&nbsp; Inventory</a>
					</li>
                    <li id="reportsLink">
						<a href="javascript:;" data-toggle="collapse" data-target="#subReports"><i class="fa fa-fw fa-line-chart"></i>&nbsp;&nbsp; Reports</a>
							<ul id="subReports" class="collapse">
								<li>
									<a href="SalesReport.php">&nbsp;<i class="fa fa-file"></i>&nbsp; Sales Record</a>
								</li>
							</ul>
                    </li>
                    <li id="accountsLink">
                        <a href="Accounts.php"><i class="fa fa-fw fa-users"></i>&nbsp;&nbsp; Accounts</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
			
<script type="text/javascript" src="../js/jquery.js"></script>
<script>
	$(document).ready(function(){
		if(<?php echo $_SESSION['statusCode']?> == 1){
			$("#promoLink").show();
			$("#transferLink").show();
			$("#accountsLink").show();
			$("#salesLink").show();
		}
		if(<?php echo $_SESSION['statusCode']?> == 2){
			$("#promoLink").hide();
			$("#transferLink").hide();
			$("#accountsLink").hide();
			$("#salesLink").show();
		}
		if(<?php echo $_SESSION['statusCode']?> == 3){
			$("#promoLink").hide();
			$("#transferLink").hide();
			$("#accountsLink").hide();
			$("#salesLink").hide();
		}
	});

</script>