<?php 
	include_once ("../header.php");
	include_once ("../db/iloveyou.php");
	?>
	<br /><br />
 <div class="container">
      <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
<form action="PHOTO_ACTION.php" enctype="multipart/form-data" method="post" class="jumbotron">
	
<table style="border-collapse: collapse; font: 12px Tahoma;" border="0" cellspacing="5" cellpadding="5">

<tbody><tr>
	<td><select name="pid" class="form-control" id="pid" >
		<option selected="true" disabled="disabled">Product ID</option>
			<?php 
				$q = mysqli_query($conn, "SELECT `ItemID`, `name` FROM `product` 	ORDER BY `ItemID` DESC");
				$res=mysqli_num_rows($q);
				while($res = mysqli_fetch_assoc($q)){//Here we retrieve values 	from database and initiate SESSION Variables  
						echo '<option value="'.$res['ItemID'].'">'.$res['ItemID'].' '.$res['name'].'</option>';
				}
			?> 
						 
						 </select></td>
	<td><input type="number" name="imgno"></td>
	
	
	
	</tr><tr>

<td><input name="uploadedimage" type="file" class="btn btn-active">
</td>
</tr>

<tr> 
	
<td><br /><input name="Upload Now" type="submit" value="Upload Image" class="btn btn-info">
</td>
</tr>
</tbody></table>
</form>

</div></div></div>











<!--
  <form method="POST" action="PHOTO_ACTION.php" enctype="multipart/form-data">
 <input type="file" name="fileToUpload">
 <input type="submit" name="submit_image" value="Upload">
</form>  
    
    -->
    
    <?php
	include_once("../header.php");
	?>