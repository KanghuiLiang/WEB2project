<head>
   <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="../styles/header.css">-->
      <link href="https://maxomus.creativeitpro.com/js/header.js">
   <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://maxomus.creativeitpro.com/styles/bootstrap.main.css" crossorigin="anonymous"> 
   <!-- Optional theme -->
   <link rel="stylesheet" href="https://maxomus.creativeitpro.com/styles/bootstrap-theme.min.css" crossorigin="anonymous">
	 <script src="https://maxomus.creativeitpro.com/js/jquery.min.js"></script>
   <!-- Latest compiled and minified JavaScript -->
   <script src="https://maxomus.creativeitpro.com/js/bootstrap.min.js" crossorigin="anonymous"></script>
  
<!--   <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>-->
<!--   <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">-->
</head>
<body>
	
<nav class="navbar navbar-default">
   <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         </button>
         <a class="navbar-brand" href="https://maxomus.creativeitpro.com/" target="_parent"><img alt="MAXOMUS AIS" src="https://maxomus.creativeitpro.com/images/logo.gif" height="20px" /></a>
      </div>
      <ul class="nav navbar-nav navbar-right">
         <li>
            <?php 
               session_start();
               if($_SESSION['user']==''){
               
               header("Location: https://maxomus.creativeitpro.com/");  	
               }else{
               echo '<a href="https://maxomus.creativeitpro.com/pages/user/userlanding.php"><img src="data:image/jpeg;base64,'.base64_encode( $_SESSION['img'] ).'" width="50px"/></a>';
               
               }
               ?>
         </li>
         <li>
            <?php 
               if($_SESSION['user']!=''){
               print '<li><a  href="https://maxomus.creativeitpro.com/pages/session_end.php" target="_parent"><img src="https://maxomus.creativeitpro.com/images/iStock_000027223009Large-300x300.jpg" height="25" class="navbar-default" /> Logout</a></li>';
               }else{
               header ("location: maxomus.creativeitpro.com");
               }
               
               ?>
         </li>
      </ul>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
         <ul class="nav navbar-nav">
            <!--<li><a href="../pages/supplier.php" target="_parent">Supplier</a></li>-->
            <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Back Office<span class="caret"></span></a>
               <ul class="dropdown-menu">
                  <?php
                     if($_SESSION["piority"]==8){
                                         echo  '<li><a href="../pages/supplier.php" target="_parent">Employee</a></li>';
                                      echo	'<li><a href="../pages/employeelist.php" target="_parent">Employee List</a></li>';
                                         echo	'<li role="separator" class="divider"></li>';
                                         echo	'<li><a href="../pages/supplier_product.php" target="_parent">Purchasing</a></li>';
                                         echo	'<li><a href="order_history_list.php" target="_parent">Order History List</a></li>';
                                          
                     }
                     	?>
                  <!--<li><a href="#">Something else here</a></li>
                     <li role="separator" class="divider"></li>
                     <li><a href="#">Separated link</a></li>
                     <li role="separator" class="divider"></li>
                     <li><a href="#">One more separated link</a></li>-->
               </ul>
            </li>
            <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">User<span class="caret"></span></a>
               <ul class="dropdown-menu">
                  <li><a href="https://maxomus.creativeitpro.com/pages/user/userRegister.php" target="_parent">Add Employee</a></li>
                  <li><a href="https://maxomus.creativeitpro.com/pages/user/userEdit.php" target="_parent">Edit Employee</a></li>
                  <li><a href="https://maxomus.creativeitpro.com/pages/user/userDelete.php" target="_parent">Delete Employee</a></li>
                  <li><a href="https://maxomus.creativeitpro.com/pages/user/userList.php" target="_parent">View Employee</a></li>
               </ul>
            </li>
            <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Supplier<span class="caret"></span></a>
               <ul class="dropdown-menu">
                  <li><a href="https://maxomus.creativeitpro.com/pages/supplier/addSupplier.php" target="_parent">Add Supplier</a></li>
                  <li><a href="https://maxomus.creativeitpro.com/pages/supplier/editSupplier.php" target="_parent">Edit Supplier</a></li>
                  <li><a href="https://maxomus.creativeitpro.com/pages/supplier/deleteSupplier.php" target="_parent">Delete Supplier</a></li>
                  <li><a href="https://maxomus.creativeitpro.com/pages/supplier/supplierHistory.php" target="_parent">Supplier History</a></li>
                  <li><a href="https://maxomus.creativeitpro.com/pages/supplier/supplierList.php" target="_parent">Supplier List</a></li>
               </ul>
            </li>
            <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Products<span class="caret"></span></a>
               <ul class="dropdown-menu">
                  <li><a href="https://maxomus.creativeitpro.com/pages/product/addProduct.php" target="_parent">Add Product</a></li>
                  <li><a href="https://maxomus.creativeitpro.com/pages/product/editProduct.php" target="_parent">Edit Product</a></li>
                  <li><a href="https://maxomus.creativeitpro.com/pages/product/deleteProduct.php" target="_parent">Delete Product</a></li>
                  <li><a href="https://maxomus.creativeitpro.com/pages/product/inventory.php" target="_parent">Inventory</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="https://maxomus.creativeitpro.com/pages/order/newOrder.php" target="_parent">Order Product</a></li>
                  <li><a href="https://maxomus.creativeitpro.com/pages/order/orderReceive.php" target="_parent">Receive Product</a></li>
                  <li><a href="https://maxomus.creativeitpro.com/pages/order/editOrder.php" target="_parent">Edit Odrer</a></li>
                  <li><a href="https://maxomus.creativeitpro.com/pages/order/deleteOrder.php" target="_parent">Delete Order</a></li>
                  <li><a href="https://maxomus.creativeitpro.com/pages/order/viewOrder.php" target="_parent">View Current Order</a></li>
                  <li><a href="https://maxomus.creativeitpro.com/pages/order/orderHistory.php" target="_parent">Order History</a></li>
               </ul>
            </li>
            <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ware House<span class="caret"></span></a>
               <ul class="dropdown-menu">
                  <li><a href="https://maxomus.creativeitpro.com/pages/location/addWarehouse.php" target="_parent">Add Ware House</a></li>
                  <li><a href="https://maxomus.creativeitpro.com/pages/location/editWarehouse.php" target="_parent">Edit Ware House</a></li>
                  <li><a href="https://maxomus.creativeitpro.com/pages/location/deleteWarehouse.php" target="_parent">Delete Ware House</a></li>
                  <li><a href="https://maxomus.creativeitpro.com/pages/location/shiftWarehouse.php" target="_parent">Warehouse Shifting</a></li>
               </ul>
            </li>
            <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Payment<span class="caret"></span></a>
               <ul class="dropdown-menu">
                  <li><a href="https://maxomus.creativeitpro.com/pages/payment/Payment.php" target="_parent">Payments</a></li>
                  <li><a href="https://maxomus.creativeitpro.com/pages/payment/cashPayment.php" target="_parent">Cash Payment</a></li>
                  <li><a href="https://maxomus.creativeitpro.com/pages/payment/creditPayment.php" target="_parent">Credit Payment</a></li>
               </ul>
            </li>
            <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reports<span class="caret"></span></a>
               <ul class="dropdown-menu">
                  <li><a href="https://maxomus.creativeitpro.com/pages/accounts/balanceSheet.php" target="_parent">Balance Sheet</a></li>
                  <li><a href="https://maxomus.creativeitpro.com/pages/accounts/generalLedger.php" target="_parent">General Ledger</a></li>
                  <li><a href="https://maxomus.creativeitpro.com/pages/accounts/incomeStatement.php" target="_parent">Income Statement</a></li>
                  <li><a href="https://maxomus.creativeitpro.com/pages/accounts/salesReceipt.php" target="_parent">Sales Receipt</a></li>
                  <li><a href="https://maxomus.creativeitpro.com/pages/accounts/supplierReport.php" target="_parent">Suppier Report</a></li>
                  <li><a href="https://maxomus.creativeitpro.com/pages/accounts/customerReport.php" target="_parent">Customer Report</a></li>
                  <li><a href="https://maxomus.creativeitpro.com/pages/accounts/orderStatus.php" target="_parent">Order Status</a></li>
               </ul>
            </li>
         </ul>
      </div>
      <!-- /.navbar-collapse -->
   </div>
   <!-- /.container-fluid -->
</nav>