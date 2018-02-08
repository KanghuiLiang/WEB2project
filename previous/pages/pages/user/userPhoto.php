<?php 
	include_once ("../header.php");
	?>
	<br /><br />
 <div class="container">
      <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
<form action="saveimage.php" enctype="multipart/form-data" method="post" class="jumbotron">

<table style="border-collapse: collapse; font: 12px Tahoma;" border="0" cellspacing="5" cellpadding="5">

<tbody><tr>

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