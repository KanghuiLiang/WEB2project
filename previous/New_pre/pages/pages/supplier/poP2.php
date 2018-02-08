<?php 
$thisPage="Expense";
 include_once("../header3.php");
	 echo ("<title>Purchase Order Page 2</title>");
?>

 <!--START OF ROW 5-->
      <div class="row">
         <div class="col-md-1"></div>
         <div class="col-md-11">
            <br><br><br>
			 <div class="progress">
  <div class="progress-bar" style="width:48%" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100">48%</div>
</div>
			<form action="poP3.php" method="POST">
			 	
				
				<legend>Products From Supplier ID: <?php echo($_POST["supplier"]); ?></legend>
					<?php
  						if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
								$des=$_POST["supplier"]; 
								//echo $des;
          
             					$q = mysqli_query($conn, "SELECT * FROM `itemname` Inner join suppItem on itemname.ItemID= suppItem.ItemID where suppItem.supplierID ='".$des."'");
         						$res=mysqli_num_rows($q);         
								while($res = mysqli_fetch_assoc($q)){
									echo "<fieldset>";
               						//echo "<legend>".$res["name"]."</legend>";
               						echo '<div class="form-group">';
               						echo '<div class="input-group">';
                  					echo '<div class="input-group-addon" title="'.$res["name"].':" name="'.$res["ItemID"].'">'.$res["name"].':</div>';
                  					echo '<input name="qty[]" class="form-control" type="number" min=0 />';
									echo '<div class="input-group-addon" title="'.$res["name"].':">Price per Unite: '.$res["ItemID"].'</div>';
									echo '<input type="hidden" name="itemid[]" value="'.$res["ItemID"].'">';
									echo '<input type="hidden" name="price[]" value="'.$res["ItemID"].'">';
            						echo '</fieldset>';
									echo '<input type="hidden" name="supplier" value="'.$_POST["supplier"].'">';
									
								}
						}
					?>
					
				<br>
				 <button class="btn btn-info">Next >></button>
			 </form>
			
            <br>
			 
         </div> 
		   
		  </div>
<!--		  End of ROW 5-->

<?php 
	include_once("../footer.php");
?>