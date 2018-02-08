<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="../styles/header.css">
      <!--<link href="../js/header.js">.-->
   <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://maxomus.creativeitpro.com//styles/bootstrap.main.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   <!-- Optional theme -->
   <link rel="stylesheet" href="https://maxomus.creativeitpro.com/styles/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
   <!-- Latest compiled and minified JavaScript -->
   <script src="https://maxomus.creativeitpro.com/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   <script src="https://maxomus.creativeitpro.com/js/jquery.min.js"></script>
   <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
   <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<style>
body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #296192;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: white;
    display: block;
    transition: 0.3s;
	font-family:"Comic Sans MS", cursive;
}

.sidenav a:hover {
    color: #f1f1f1;
	font-size:x-large;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="user/userlanding.php" target="_parent">Home</a>
 <!--Sales-->
  <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sales<span class="caret"></span></a>
               <ul class="dropdown-menu">
                  <li><a href="https://maxomus.creativeitpro.com/pages/user/userRegister.php" target="_parent">All sales</a></li>
                  <li><a href="https://maxomus.creativeitpro.com/pages/user/userEdit.php" target="_parent">Invoice</a></li>
                  <li><a href="https://maxomus.creativeitpro.com/pages/user/userDelete.php" target="_parent">Customer</a></li>
                  <li><a href="https://maxomus.creativeitpro.com/pages/user/userList.php" target="_parent">Pending</a></li>
               </ul>
            </li>
   <!--Sales-->
  
  <!--Expense-->
  <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Expense<span class="caret"></span></a>
               <ul class="dropdown-menu">
                  <li><a href="https://maxomus.creativeitpro.com/pages/user/userRegister.php" target="_parent">Purchase</a></li>
                  <li><a href="https://maxomus.creativeitpro.com/pages/user/userEdit.php" target="_parent">Order List</a></li>
                  <li><a href="https://maxomus.creativeitpro.com/pages/user/userDelete.php" target="_parent">Supplier</a></li>
                  <li><a href="https://maxomus.creativeitpro.com/pages/user/userList.php" target="_parent">Requisition</a></li>
                  <li><a href="https://maxomus.creativeitpro.com/pages/user/userList.php" target="_parent">Invoice</a></li>
               </ul>
            </li>
   <!--Expense-->
 
  <!--Workers-->
  <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Workers<span class="caret"></span></a>
               <ul class="dropdown-menu">
                  <li><a href="https://maxomus.creativeitpro.com/pages/user/userRegister.php" target="_parent">Employee List</a></li>
                  <li><a href="https://maxomus.creativeitpro.com/pages/user/userEdit.php" target="_parent">Add Employee</a></li>
                  <li><a href="https://maxomus.creativeitpro.com/pages/user/userDelete.php" target="_parent">Edit Employee</a></li>
                  <li><a href="https://maxomus.creativeitpro.com/pages/user/userList.php" target="_parent">Delete Employee</a></li>
               </ul>
            </li>
   <!--Workers-->
   
   <a href="user/userlanding.php" target="_parent">Dashboard</a>
   <a href="user/userlanding.php" target="_parent">Taxes</a>
   <a href="user/userlanding.php" target="_parent">Report</a>
   <a href="user/userlanding.php" target="_parent">Financial Ratio</a>
  
</div>

<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>

