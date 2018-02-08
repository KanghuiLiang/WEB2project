<?php
$thisPage="Expense";
 include_once("../header3.php");
	 echo ("<title>Purchase Order</title>");
?>

 <style> 
input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('../accounts/searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 100%;
}
</style>
<!-- Row 1 starts-->
      
<div class="row">
      	 <!--first colum to adjust the page size-->
         <div class="col-md-3"></div>
         <!--LOGO-->
	<div class="col-md-5">
         <div class="img-responsive">
			 <center>
				 <div class="ahmed">
  				<img src="../../images/invoice.jpg" alt="MAXOMUS"  class="aimage">
  				<div class="aoverlay">
    				<div class="atext"><img src="../../images/logo.gif" class="img-rounded" width="250px"></div>
  				</div>
			</div>
				 </center>
		</div>
	</div>
         <!--end of row 1-->
      </div>
      <div class="container">
      <!--ROW 2 Staarts-->
      
		     <!--START OF ROW 5-->
      <div class="row">
         <div class="col-md-1"></div>
         <div class="col-md-11">
            <br><br><br>
			<center> 
				<div class="progress">
  <div class="progress-bar"  style="width:25%" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">25%</div>
</div>
				<form action="">
  <?php
  						if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
								$des=$_POST["search"]; 
								//echo $des;
          
             					$q = mysqli_query($conn, "SELECT * FROM  `supplier_product` WHERE CONVERT(`Product_Name` USING utf8) LIKE '%".$des."%'");
         						$res=mysqli_num_rows($q);         
								while($res = mysqli_fetch_assoc($q)){
									echo "<fieldset>";
               						//echo "<legend>".$res["name"]."</legend>";
               						echo '<div class="form-group">';
               						echo '<div class="input-group">';
                  					echo '<div class="input-group-addon" title="'.$res["name"].':" name="'.$res["Product_ID"].'"><img src='.$res["Image"].' height="100px">'.$res["Product_ID"].' '.$res["Product_Name"].' '.$res["Supplier"].':</div>';
                  					echo '<input name="qty[]" class="form-control" type="number" min=0 />';
									echo '<div class="input-group-addon" title="'.$res["name"].':">Price per Unite: '.$res["Cose_per_unite"].'</div>';
									echo '<input type="hidden" name="itemid[]" value="'.$res["ItemID"].'">';
									echo '<input type="hidden" name="price[]" value="'.$res["ItemID"].'">';
            						echo '</fieldset>';
									
									
								}
						}
					?>
</form>

				</center>
			
            <br>
			 
         </div> 
		   
		  </div>
<!--		  End of ROW 5-->





<?php
 include_once("../footer.php");
?>