<?php
$thisPage="Sales";
 include_once("../header3.php");
	 echo ("<title>$thisPage</title>");
?>
 
<!-- Row 1 starts-->
      <div class="row">
      	 <!--first colum to adjust the page size-->
         <div class="col-md-2"></div>
         <!--LOGO-->
         <div class="img-responsive">
            <img src="../../images/iStock_000062233330_Full.jpg" class="img-rounded" width="150px">
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
               Sales<br>
               
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
            <a href="../accounts/orderStatus.php"> <button class="btn btn-primary btn-block btn-lg"> All Sales</button></a>
            <br>
         </div>
         <div class="col-md-2">
            <br><br><br>
            <a href="../pages/inventory.php"> <button class="btn btn-primary btn-block btn-lg"> Invoice</button></a>
            <br>
         </div>
         <div class="col-md-2">
            <br><br><br>
            <a href="../accounts/supplierReport.php"><button class="btn btn-primary btn-block btn-lg"> Customer</button></a>
            <br>
         </div>
         <div class="col-md-2">
            <br><br><br>
            <a href="../accounts/customerReport.php"> <button class="btn btn-primary btn-block btn-lg"> Pending</button></a>
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
        <?php
		  
     	// Form the SQL query that returns the top 10 most populous countries
     	$strQuery = "SELECT storageID, quantity from itemlocation order by quantity ASC LIMIT 10";

     	// Execute the query, or else return the error message.
     	$result = $conn->query($strQuery) or exit("Error code ({$dbhandle->errno}): {$conn->error}");

     	// If the query returns a valid response, prepare the JSON string
     	if ($result) {
        	// The `$arrData` array holds the chart attributes and data
        	$arrData = array(
        	    "chart" => array(
                  "caption" => "Top 10 Most Products",
                  "showValues" => "0",
                  "theme" => "zune"
              	)
           	);

        	$arrData["data"] = array();

	// Push the data into the array
        	while($row = mysqli_fetch_array($result)) {
           	array_push($arrData["data"], array(
              	"label" => $row["storageID"],
              	"value" => $row["quantity"]
              	)
           	);
        	}

        	/*JSON Encode the data to retrieve the string containing the JSON representation of the data in the array. */

        	$jsonEncodedData = json_encode($arrData);

	/*Create an object for the column chart using the FusionCharts PHP class constructor. Syntax for the constructor is ` FusionCharts("type of chart", "unique chart id", width of the chart, height of the chart, "div id to render the chart", "data format", "data source")`. Because we are using JSON data to render the chart, the data format will be `json`. The variable `$jsonEncodeData` holds all the JSON data for the chart, and will be passed as the value for the data source parameter of the constructor.*/

        	$columnChart = new FusionCharts("column2D", "myFirstChart" , 600, 300, "chart-1", "json", $jsonEncodedData);

        	// Render the chart
        	$columnChart->render();

        	// Close the database connection
        	$dbhandle->close();
     	}
		  ?>
      </div>
      <!--END OF CONTANER-->



<?php
 include_once("../footer.php");

?>