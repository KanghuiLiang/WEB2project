<?php 
	include_once("db/iloveyou.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<!--	<link href="https://maxomus.creativeitpro.com/css/pie.css" type="text/css">-->
<!--	<script type="text/javascript" src="https://maxomus.creativeitpro.com/scripts/pie.js"></script>-->
	
   <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="../styles/header.css">
      <!--<link href="../js/header.js">.-->
   <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://maxomus.creativeitpro.com/pages/styles/bootstrap.main.css" crossorigin="anonymous">
   <!-- Optional theme -->
   <link rel="stylesheet" href="https://maxomus.creativeitpro.com/pages/styles/bootstrap-theme.min.css" crossorigin="anonymous">
   <!-- Latest compiled and minified JavaScript -->
   <script src="https://maxomus.creativeitpro.com/pages/js/bootstrap.min.js"  crossorigin="anonymous"></script>
   <script src="https://maxomus.creativeitpro.com/pages/js/jquery.min.js"></script>
<!--   <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>-->
   <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-default">
   <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header" id="time">         
      </div>
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
         <li>
            <?php 
               session_start();
               if($_SESSION['user']==''){
               
               header("Location: https://maxomus.creativeitpro.com");  	
               }else{
               echo '<a href="https://maxomus.creativeitpro.com/pages/pages/user/userlanding.php"><img src="data:image/jpeg;base64,'.base64_encode( $_SESSION['img'] ).'" width="50px"/></a>';
               
               }
               ?>
         </li>
         <li>
            <?php 
               if($_SESSION['user']!=''){
               print '<li><a href="https://maxomus.creativeitpro.com" target="_parent"><img src="https://maxomus.creativeitpro.com/pages/images/iStock_000027223009Large-300x300.jpg" height="25" class="navbar-default" /> Logout</a></li>';
               }else{
               header ("location: https://maxomus.creativeitpro.com/");
               }
               
               ?>
         </li>
      </ul>
<!--
       Collect the nav links, forms, and other content for toggling 
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            </li>
-->
	  
	   <ul class="nav navbar-nav">
		    <li>
			 <?php 
			 switch ($thisPage){
				 case "Sales":
					 echo '<li><div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"><ul class="nav navbar-nav"><li><a href="#">All Sales</a></li>';
					 echo '<li><div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"><ul class="nav navbar-nav"><li><a href="#">Invoice</a></li>';
					 echo '<li><div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"><ul class="nav navbar-nav"><li><a href="#">Customer</a></li>';
					 echo '<li><div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"><ul class="nav navbar-nav"><li><a href="#">Pending</a></li>';
					 break;
					 
				 case "Expense":
					 echo '<li><div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"><ul class="nav navbar-nav"><li><a href="https://maxomus.creativeitpro.com/pages/pages/accounts/orderStatus.php">Purchase</a></li>';
					 echo '<li><div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"><ul class="nav navbar-nav"><li><a href="https://maxomus.creativeitpro.com/pages/pages/product/inventory.php">Order List</a></li>';
					 echo '<li><div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"><ul class="nav navbar-nav"><li><a href="https://maxomus.creativeitpro.com/pages/pages/accounts/supplierReport.php">Supplier</a></li>';
					 echo '<li><div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"><ul class="nav navbar-nav"><li><a href="customerReport.php">Requisition</a></li>';
					 echo '<li><div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"><ul class="nav navbar-nav"><li><a href="salesReceipt.php">Invoice</a></li>';
					 break;	 
					 
				 case "employee":
					 echo '<li><div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"><ul class="nav navbar-nav"><li><a href="https://maxomus.creativeitpro.com/pages/pages/user/userRegister.php">Add Employee</a></li>';
					 echo '<li><div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"><ul class="nav navbar-nav"><li><a href="https://maxomus.creativeitpro.com/pages/pages/user/userList.php">View Emloyee</a></li>';
					 echo '<li><div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"><ul class="nav navbar-nav"><li><a href="https://maxomus.creativeitpro.com/pages/pages/user/userEdit.php">Edit Employee</a></li>';
					 echo '<li><div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"><ul class="nav navbar-nav"><li><a href="https://maxomus.creativeitpro.com/pages/pages/user/userDelete.php">Delete Employee</a></li>';
					 echo '<li><div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"><ul class="nav navbar-nav"><li><a href="https://maxomus.creativeitpro.com/pages/pages/user/supervisor.php">Supervisior</a></li>';
					 break;	 
					 
					 
					 
				 default: echo "MAXOMUS \"Creative Thinking\"";
					 break;
					 
			 }
				?>
<!--				 <p id="time"></p>-->
			 <script>
var myVar = setInterval(myTimer, 1000);

function myTimer() {
    var d = new Date();
    document.getElementById("time").innerHTML = d.toLocaleTimeString();
}
</script>
            </li>
         </ul>
      </div>
      <!-- /.navbar-collapse -->
	</div>
   <!-- /.container-fluid -->
</nav>
     
<div id="mySidenav" class="sidenav">
  <a href="https://maxomus.creativeitpro.com/pages/pages/user/userlanding.php" id="Home">Home</a>
  <a href="https://maxomus.creativeitpro.com/pages/pages/accounts/sales.php" id="Sales">Sales</a>
  <a href="https://maxomus.creativeitpro.com/pages/pages/accounts/expense.php" id="Expense">Expense</a>
  <a href="https://maxomus.creativeitpro.com/pages/pages/user/employees.php" id="Workers">Workers</a>
  <a href="https://maxomus.creativeitpro.com/pages/pages/warehouse/ware_house.php" id="warehouse">Warehouse</a>
  <a href="https://maxomus.creativeitpro.com/pages/pages/accounts/dashboard.php" id="dashboard">Dashboard</a>
  <a href="https://maxomus.creativeitpro.com/pages/pages/accounts/taxes.php" id="taxes">Taxes</a>
  <a href="https://maxomus.creativeitpro.com/pages/pages/accounts/reports.php" id="report">Report</a>
  <a href="https://maxomus.creativeitpro.com/pages/pages/accounts/financialRation.php" id="fratio">Financial Ratio</a>
</div>