<?php
$thisPage="Financial Ratio";
 include_once("../header3.php");
	 echo ("<title>$thisPage</title>");
?>

<!-- Row 1 starts-->
      <div class="row">
      	 <!--first colum to adjust the page size-->
         <div class="col-md-2"></div>
         <!--LOGO-->
         <div class="img-responsive">
            <img src="../../images/logo.gif" class="img-rounded" width="150px">
         </div>
         <!--end of row 1-->
      </div>
      <div class="container">
      <!--ROW 2 Staarts-->
      <div class="row">
         <div class="col-md-1"></div>
         <div class="col-md-7">
            <br><br><br>
            <h2>
               Financial Ratio <br>
               
            </h2>
            
         </div>
         
         <br>
         <!--END OF ROW 2-->
      </div>
      <!--START OF ROW 3-->
      <div class="row">
         <div class="col-md-1"></div>
         <div class="col-md-2">
            <br><br><br>
            <a href="../accounts/orderStatus.php"> <button class="btn btn-primary btn-block btn-lg"> Order <br/>Status</button></a>
            <br>
         </div>
         <div class="col-md-2">
            <br><br><br>
            <a href="../pages/inventory.php"> <button class="btn btn-primary btn-block btn-lg"> Inventory <br/>Valuation Report</button></a>
            <br>
         </div>
         <div class="col-md-2">
            <br><br><br>
            <a href="../accounts/supplierReport.php"><button class="btn btn-primary btn-block btn-lg"> Supplier <br/>Report</button></a>
            <br>
         </div>
         <div class="col-md-2">
            <br><br><br>
            <a href="../accounts/customerReport.php"> <button class="btn btn-primary btn-block btn-lg"> Customer <br/>Report</button></a>
            <br>
         </div>
         <!--END OF ROW 3-->
      </div>
      <!--START OF ROW 4-->
      <div class="row">
         <div class="col-md-1"></div>
         <div class="col-md-2">
            <br><br><br>
            <a href="../accounts/salesReceipt.php"> <button class="btn btn-primary btn-block btn-lg"> Sales <br/>Receipt</button></a>
            <br>
         </div>
         <div class="col-md-2">
            <br><br><br>
            <a href="../accounts/generalLedger.php"> <button class="btn btn-warning btn-block btn-lg"> General <br/>Ledger</button></a>
            <br>
         </div>
         <div class="col-md-2">
            <br><br><br>
            <a href="../accounts/incomeStatement.php"> <button class="btn btn-warning btn-block btn-lg"> Income <br/>Statement</button></a>
            <br>
         </div>
         <div class="col-md-2">
            <br><br><br>
            <a href="../accounts/balanceSheet.php">  <button class="btn btn-warning btn-block btn-lg"> Balance <br/>Sheet</button></a>
            <br>
         </div>
         <!--END OF ROW 4-->
      </div>
      <!--END OF ROW 5-->
      <div class="row">
         <div class="col-md-1"></div>
         <div class="col-md-2">
            <br><br><br>
            <a href="userRegister.php"> <button class="btn btn-success btn-block btn-lg"> Add <br/>User</button></a>
            <br>
         </div>
         <div class="col-md-2">
            <br><br><br>
            <a href="userEdit.php"> <button class="btn btn-success btn-block btn-lg"> Edit <br/>User</button></a>
            <br>
         </div>
         <div class="col-md-2">
            <br><br><br>
            <a href="../pages/editOrder.php">  <button class="btn btn-success btn-block btn-lg"> Edit <br/>Order</button></a>
            <br>
         </div>
         <div class="col-md-2">
            <br><br><br>
            <a href="../pages/deleteOrder.php"> <button class="btn btn-danger btn-block btn-lg"> Delete <br/>Order</button></a>
            <br>
         </div>
         <!--END OF ROW 5-->
      </div>
      <!--END OF CONTANER-->


<?php
 include_once("../footer.php");

?>