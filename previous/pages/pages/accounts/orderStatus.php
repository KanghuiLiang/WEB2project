<?php
$thisPage="Expense";
 include_once("../header3.php");
	 echo ("<title>Purchase Order</title>");
?>

 
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
  <div class="progress-bar"  style="width:0%" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
</div>
				<form action="../supplier/poP2.php" method="POST">
			 <select name="supplier" class="form-control" >
							<option selected="true" disabled="disabled">Choose Supplier</option>
            <?php 
							$q = mysqli_query($conn, "SELECT * FROM `suppRegNam` ORDER BY region ASC");
   							$res=mysqli_num_rows($q);
							while($res = mysqli_fetch_assoc($q)){//Here we retrieve values from database and initiate SESSION Variables  
								echo '<option value="'.$res['id'].'">'.$res['name'].'  **** <h2>Region:</h2> '.$res['region'].'</option>';
   							}
				 ?></select>
				
				<br>
				 <button class="btn btn-info">Next >></button>
			 </form>
				</center>
			
            <br>
			 
         </div> 
		   
		  </div>
<!--		  End of ROW 5-->





<?php
 include_once("../footer.php");
?>