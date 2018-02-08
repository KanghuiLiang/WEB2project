<style>


#text{
   position: absolute;
   top: 50%;
   left: 50%;
   font-size: 18px;
   color: white;
   transform: translate(-50%,-50%);
   -ms-transform: translate(-50%,-50%);
}

div.fixed {
   background-color: white;
   position: fixed;
   width: 30%;
   right: 0px;
   bottom: 10px;
   border: 3px solid #8AC007;
}
</style>
	

<?php
$thisPage="Sales";
//$thisPage="All Sales";
include_once("../header3.php");
     echo ("<title>All Sales</title>");
?>
<!--<div id="overlay" onclick="off()">-->
<!--<div id="text">Overlay Text</div>-->
<!--</div>-->
	<div class="row">
	<div class="col-md-2"></div>
		<div class="col-md-9">
		
	<h1>All sales</h1>
<table class= "table table-striped table-bordered">
	<tr>
		<th scope="col">Date</th>
		<th scope="col">Sales Order No.</th>
		<th scope="col">Customer</th>
		<th scope="col">Total(Except VAT)</th>
		<th scope="col">VAT</th>
		<th scope="col">Total(Include VAT)</th>
		<th scope="col">Remarks</th>
	</tr>


<?php 
$total=$vat=$tovat;
// MySQL database connection code
$connection = mysqli_connect("localhost","maxomus","am786786786","maxomus_ais") or die("Error " . mysqli_error($connection));
//Fetch sports data
$sql = "SELECT sales_order.date AS 'Date', sales_order.orderNo AS 'OrderNo', customer.name AS 'Customer', customer.email AS 'email', customer.shipping AS 'Address', customer_login.username AS 'Username', customer_contact.phone_no AS 'Phone', (SUM(sales_order_description.price)*SUM(sales_order_description.quantity)) AS 'TotalexcludingVAT', sales_order.VAT AS 'VAT', (SUM(sales_order_description.price) + sales_order.VAT) AS 'TotalincludingVAT', (select DISTINCT employeeinfo.name from employeeinfo INNER join checked_by on employeeinfo.employeeID=checked_by.checked_by WHERE checked_by.orderNo=sales_order.orderNo )AS 'CheckedBy',  (select DISTINCT employeeinfo.name from employeeinfo INNER JOIN so_approved ON so_approved.approvedBy=employeeinfo.employeeID WHERE so_approved.orderNo=sales_order.orderNo)AS 'ApprovedBy',  (select DISTINCT employeeinfo.name from employeeinfo INNER JOIN shipped_by ON shipped_by.shipped_by=employeeinfo.employeeID WHERE shipped_by.orderNo=sales_order.orderNo)AS 'ShippedBy'  FROM sales_order INNER JOIN customer ON sales_order.customer_id=customer.id INNER JOIN sales_order_description ON sales_order.orderNo=sales_order_description.orderNo INNER JOIN customer_login ON customer_login.customer_id=customer.id INNER JOIN customer_contact ON customer_contact.c_id=customer.id GROUP BY sales_order.orderNo;
";
$result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));
	
//create an array
while($row = mysqli_fetch_assoc($result))
{ 
	$njnno;
	$njnno =$row["OrderNo"];
	$sqli="SELECT product_img.productImage, product.name, sales_order_description.price, sales_order_description.quantity, (SUM(sales_order_description.price)*SUM(sales_order_description.quantity)) AS 'Total' FROM sales_order_description INNER JOIN product ON product.ItemID=sales_order_description.itemID INNER JOIN product_img ON product_img.product_ID=product.ItemID WHERE sales_order_description.orderNo='".$row["OrderNo"]."' GROUP BY sales_order_description.itemID"; 
	$results = mysqli_query($connection, $sqli) or die("Error in Selecting " . mysqli_error($connection));
	
	
	
	echo '<div id="'.$row["OrderNo"].'" onclick="a'.$row["OrderNo"].'off()" style=" position: fixed; display: none; width: 100%; height: 100%; top: 0; left: 0; right: 0; bottom: 0; background-color: rgba(0,0,0,0.5); z-index: 2; cursor: pointer;">';
	echo '<div id="text"><div class="row">';
	echo '<div class="col-md-2"></div>';
	echo '<div class="col-md-4">Date: '.$row["Date"].'</div>';
	echo '<div class="col-md-4">Sales Order No: '.$row["OrderNo"].'</div>';
	echo '</div>';
	echo '<hr>';
	echo '<div class="row">';
	echo '<div class="col-md-1"></div>';
	echo '<div class="col-md-8">Inventory List:<br>';
	echo '<div class="col-md-2">Name</div>';
	echo '<div class="col-md-3">Cost/Unit</div>';
	echo '<div class="col-md-2">Quantity</div>';
	echo '<div class="col-md-2">Total</div><br>';
	while($rows = mysqli_fetch_assoc($results)){	
		echo '<div class="col-md-2">'.$rows["name"].'</div>';
	echo '<div class="col-md-3">'.$rows["price"].'&#3647;</div>';
	echo '<div class="col-md-2">'.$rows["quantity"].'</div>';
	echo '<div class="col-md-2">'.$rows["Total"].'&#3647;</div><br>';
		
	}

	echo '</div>';

	echo '<div class="col-md-3">';
	echo '<div class="row">User Info:  '.$row["Customer"].'</div>';
	echo '<div class="row">UserName: '.$row["Username"].'</div>';
	echo '<div class="row">Address: '.$row["Address"].'</div>';
	echo '<div class="row">Phone: '.$row["Phone"].'</div>';
	echo '<div class="row">Email: '.$row["email"].'</div>';
	echo '</div>';
	echo '</div>';
	echo '<hr>';
	echo '<div class="row">';
//	echo '<div class="col-md-2"></div>';
	echo '<div class="col-md-3">Shipped by: <br>'.$row["ShippedBy"].'</div>';
	echo '<div class="col-md-3">Checked by: <br>'.$row["CheckedBy"].'</div>';
	echo '<div class="col-md-4">Approved by:<br>'.$row["ApprovedBy"].'</div>';
	echo '<div class="col-md-2">';
	echo '<div class="row">Excluding VAT: '.$row["TotalexcludingVAT"].'&#3647;</div>';
	echo '<div class="row">VAT: '.$row["VAT"].'&#3647;</div>';
	echo '<div class="row">Total: '.$row["TotalincludingVAT"].'&#3647;</div>';
	echo '</div>';
	echo '</div>';
	echo '</div>';'</div></div>';
	echo '<tr>';
	echo '<td>'.$row["Date"].'</td><td>'.$row["OrderNo"].'</td>';
	echo '<td>'.$row["Customer"].'</td>';
	echo '<td>'.$row["TotalexcludingVAT"].'&#3647;</td>';
	echo '<td>'.$row["VAT"].'&#3647;</td>';
	echo '<td>'.$row["TotalincludingVAT"].'&#3647;</td>';
	echo '<td><div><button class="btn btn-info" onclick="a'.$row["OrderNo"].'on()">View Details</button></div></td>';
	echo '</tr>';
	echo '<script>function a'.$row["OrderNo"].'on() {document.getElementById("'.$row["OrderNo"].'").style.display="block";}function a'.$row["OrderNo"].'off() {document.getElementById("'.$row["OrderNo"].'").style.display = "none";}</script>';
	
	

}

?>
</table>
</div>	
	</div>

	<div class="fixed">
		
	<table class="table table-bordered">
		<tr>
         <td>Total(except VAT): <?php
		$sqli="SELECT (SUM(sales_order_description.quantity)*SUM(sales_order_description.price)) AS 'Total' FROM sales_order_description INNER JOIN sales_order ON sales_order.orderNo=sales_order_description.orderNo WHERE month(sales_order.date) between '01' and '08'"; 
		$results = mysqli_query($connection, $sqli) or die("Error in Selecting " . mysqli_error($connection));
		while($rows = mysqli_fetch_assoc($results)){	
			$total=$rows["Total"];
		echo ''.$rows["Total"].'&#3647;';
	
		
		}
			 
		?></td>
        </tr>
		<tr>
          <td>VAT: <?php
		$sqlvat="SELECT SUM(VAT) FROM `sales_order` WHERE month(`date`) between '01' and '08'"; 
		$resultsvat = mysqli_query($connection, $sqlvat) or die("Error in Selecting " . mysqli_error($connection));
		while($rowsvat = mysqli_fetch_assoc($resultsvat)){	
			$vat=$rowsvat["SUM(VAT)"];
		echo ' '.$rowsvat["SUM(VAT)"].'&#3647;';
		
		
		}	  
			  
		?> </td>
        </tr>
		<tr>
		 <td>Total(include VAT): <?php
			
		echo ''.$total+$vat.'&#3647;';
	
		
		
			  
		?></td>
		</tr>
    </table>
</div>

<!--
<div class="fixed">
	<table class="table table-bordered">
		<tr>
         <td>Total(except VAT): </td>
        </tr>
		<tr>
          <td>VAT:</td>
        </tr>
		<tr>
		 <td>Total(include VAT):</td>
		</tr>
    </table>
</div>
-->

<div class="col-md-1"></div>

	
<!--
<script>
function on() {
   document.getElementById("overlay").style.display = "block";
}

function off() {
   document.getElementById("overlay").style.display = "none";
}
</script>
-->

<?php
include_once("../footer.php");

?>