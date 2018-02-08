<?php
$thisPage="Expense";
 include_once("../header3.php");
	 echo ("<title>$thisPage</title>");
?><head>
        
        <script type="text/javascript">
            function drawChart() {
                // call ajax function to get sports data
                var jsonData = $.ajax({
                    url: "soPie.php",
                    dataType: "json",
                    async: false
                }).responseText;
                //The DataTable object is used to hold the data passed into a visualization.
                var data = new google.visualization.DataTable(jsonData);

                // To render the pie chart.
                var chart = new google.visualization.PieChart(document.getElementById('chart_container_so'));
                chart.draw(data, {width: 500, height: 340});
            }
            // load the visualization api
            google.charts.load('current', {'packages':['corechart']});

            // Set a callback to run when the Google Visualization API is loaded.
            google.charts.setOnLoadCallback(drawChart);
        </script> <script type="text/javascript">
            function drawChart() {
                // call ajax function to get sports data
                var jsonData = $.ajax({
                    url: "poPie.php",
                    dataType: "json",
                    async: false
                }).responseText;
                //The DataTable object is used to hold the data passed into a visualization.
                var data = new google.visualization.DataTable(jsonData);

                // To render the pie chart.
                var chart = new google.visualization.PieChart(document.getElementById('chart_container_po'));
                chart.draw(data, {width: 500, height: 340});
            }
            // load the visualization api
            google.charts.load('current', {'packages':['corechart']});

            // Set a callback to run when the Google Visualization API is loaded.
            google.charts.setOnLoadCallback(drawChart);
        </script>	
    </head>

<!-- Row 1 starts-->
      
<div class="row">
      	 <!--first colum to adjust the page size-->
         <div class="col-md-2"></div>
         <!--LOGO-->
	<div class="col-md-5">
         <div class="img-responsive">
			 <div class="ahmed">
  				<img src="../../images/expense.jpg" alt="MAXOMUS" class="aimage">
  				<div class="aoverlay">
    				<div class="atext"><img src="../../images/logo.gif" class="img-rounded" width="250px"></div>
  				</div>
			</div>
		</div>
	</div>
         <!--end of row 1-->
      </div>
      <div class="container">
      <!--ROW 2 Staarts-->
      
		     <!--START OF ROW 5-->
      <div class="row">
         <div class="col-md-1"></div>
         <div class="col-md-5">
            <br><br><br>
			 <h4>Order No with Order Total</h4>
            <div id="chart_container_po">Chart</div>
            <br>
			 
         </div> 
		   <div class="col-md-5">
            <br><br><br>
			 <h4>Supplier with No of orders</h4>
            <div id="chart_container_so">Chart</div>
            <br>
			 
         </div> 
		  </div>
<!--		  End of ROW 5-->
		  <div class="row">
         <div class="col-md-1"></div>
         <div class="col-md-7">
            <br><br><br>
            <h2>
               Expense<br>
               
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
            <a href="../accounts/orderStatus.php"> <button class="btn btn-primary btn-block btn-lg">Purchase</button></a>
            <br>
         </div>
         <div class="col-md-2">
            <br><br><br>
            <a href="../pages/inventory.php"> <button class="btn btn-primary btn-block btn-lg">Order List</button></a>
            <br>
         </div>
         <div class="col-md-2">
            <br><br><br>
            <a href="../accounts/supplierReport.php"><button class="btn btn-primary btn-block btn-lg">Supplier</button></a>
            <br>
         </div>
         <div class="col-md-2">
            <br><br><br>
            <a href="../accounts/customerReport.php"> <button class="btn btn-primary btn-block btn-lg">Requisotion</button></a>
            <br>
         </div>
		  <div class="col-md-2">
            <br><br><br>
            <a href="../accounts/salesReceipt.php"> <button class="btn btn-primary btn-block btn-lg">Invoice</button></a>
            <br>
         </div>
         <!--END OF ROW 3-->
      </div>
      
		  
		  
		  
      </div>
      <!--END OF CONTANER-->




<?php
 include_once("../footer.php");

?>