<?php 
$thisPage="home";
	//Start Session
   session_start(); 
    //save the name of user in title variable 
   $title = $_SESSION['user'];
	  	//Include the menu
         include_once("../header3.php");
         //include("welcome.php"); 
		 echo ("<title>$title</title>");
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
      	<!--Heading -->
<!--         <h1 style="color: #006;" id="demo"><img src="images/W.gif" align="bottom" alt="W">elcome To MAXOMUS Accounting Information System</h1>-->
         <!--Script for make text color and size change on mouseover and mouse out-->
<!--
         <script>
		 	//call element by ID for mouse over
            document.getElementById("demo").onmouseover = function() {mouseOver()};
			//call element by ID for mouse out
            document.getElementById("demo").onmouseout = function() {mouseOut()};
            //functions to be done on mouse over
            function mouseOver() {
				//change the color to red on mouse over
                document.getElementById("demo").style.color = "red";
				//change font size to 40px on mouse over
            	document.getElementById("demo").style.fontSize="40px";
            }
            //functions to be done on mouse out
            function mouseOut() {
				//change color to blue on mouse out
                document.getElementById("demo").style.color = "#006";
				//change font size to 25px on mouse out
            	document.getElementById("demo").style.fontSize="25px";
            }
			//end of script
         </script>
-->
         <!--end of row2-->
      </div>
      <!--ROW 3-->
      <div class="row">
         <div class="col-md-1"></div>
         <div class="col-md-7">
            <br><br><br>
            <h2>
               What you want to do next? <br>
               <!--#####################UN_USED SCRIPT################################
               
               
               <script type="text/javascript">
                  var d = new Date();
                  var time = d.getHours();
                  
                  if (time < 12) 
                    {
                    document.write("<b>Good morning!</b>");
                    }
                  if (time > 12) 
                    {
                    document.write("<b>Good afternoon!</b>");
                    }
                  if (time == 12) 
                    {
                    document.write("<b>Go eat lunch!</b>");
                    }
                  </script>
                  #####################UN_USED SCRIPT################################-->
                  <!--SCRIPT FOR GREATING ACCOURDING TO TIME-->
               <SCRIPT LANGUAGE="JavaScript">
                  currentTime=new Date();
                  //getHour() function will retrieve the hour from current time
                  if(currentTime.getHours()<12)
                  document.write("<b>Good Morning!! </b>");
                  else if(currentTime.getHours()<17)
                  document.write("<b>Good Afternoon!! </b>");
                  else 
                  document.write("<b>Good Evening!! </b>");
                  //End of JavaScript functions
               </SCRIPT>
               Mr./Ms. 
               <?php
			   //Show User name
                  echo $title; ?>
            </h2>
            
         </div>
         <div class="col-md-4"><br><br>
            <?php 
			//SHOWING USER IMAGE FROM DATABASE
			echo '<img src="data:image/jpeg;base64,'.base64_encode( $_SESSION['img'] ).'"/>'; 
			?>
         </div>
         <br>
         <!--END OF ROW 3-->
      </div>
      <!--START OF ROW 4-->
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
         <!--END OF ROW 4-->
      </div>
      <!--START OF ROW 5-->
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
         <!--END OF ROW 5-->
      </div>
      <!--END OF ROW 6-->
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
         <!--END OF ROW 6-->
      </div>
      <!--END OF CONTANER-->
      </div>
      <?php
	  	//PAGE FOOTER
         include_once("../footer.php");
         ?>