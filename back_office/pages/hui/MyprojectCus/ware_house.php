<?php
	include_once("../header.php");
 include_once("../db/iloveyou.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ware House</title>
	<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/1e8aa29a4f.js"></script>
</head>
<style>
.vertical-menu {
    width: 200px;
    position:fixed;
}

.vertical-menu a {
    background-color: #eee;
    color: black;
    display: block;
    padding: 12px;
    text-decoration: none;
}

.vertical-menu a:hover {
    background-color: #ccc;
}

.vertical-menu a.active {
    background-color: #4CAF50;
    color: white;
}

.absolute {
    position: absolute;
    top: 500px;
    right: 0;
    width: 400px;
    height: 200px;
    border: 3px solid #73AD21;
}
</style>
<body>
  <?php 
 include_once('header.php');
 
 ?>
<div class="container">

<h1>Inventory</h1>
<div class="row">
<div class="col-md-2">
  <form>
  <div class="form-group">
    <label for="inventory">Total Inventory</label>
<!--    <input class="form-control" type="text" name="totalInvent">-->
	   <?php 
							$q = mysqli_query($conn, "SELECT SUM(quantity) FROM `itemlocation`");
   							$res=mysqli_num_rows($q);
							while($res = mysqli_fetch_assoc($q)){//Here we retrieve values from database and initiate SESSION Variables  
								echo '<input class="form-control" type="text" name="totalInvent" value="'.$res['SUM(quantity)'].'">';
   							}
  							?>
  </div>
  <div class="form-group">
    <label for="">Type of Inventory</label>
    <?php 
							$q = mysqli_query($conn, "SELECT count(itemID) FROM `product`");
   							$res=mysqli_num_rows($q);
							while($res = mysqli_fetch_assoc($q)){//Here we retrieve values from database and initiate SESSION Variables  
								echo '<input class="form-control" type="text" name="totalInvent" value="'.$res['count(itemID)'].'">';
   							}
  							?>
  </div>
<div class="form-group">
    <label for="">Storage</label>
    <?php 
							$q = mysqli_query($conn, "SELECT count(id) FROM `warehousestatus`");
   							$res=mysqli_num_rows($q);
							while($res = mysqli_fetch_assoc($q)){//Here we retrieve values from database and initiate SESSION Variables  
								echo '<input class="form-control" type="text" name="totalInvent" value="'.$res['count(id)'].'">';
   							}
  							?>
  </div>
<div class="form-group">
    <label for="">Capacity</label>
    <?php 
							$q = mysqli_query($conn, "SELECT sum(capacity) FROM `warehousestatus`");
   							$res=mysqli_num_rows($q);
							while($res = mysqli_fetch_assoc($q)){//Here we retrieve values from database and initiate SESSION Variables  
								echo '<input class="form-control" type="text" name="totalInvent" value="'.$res['sum(capacity)'].'">';
   							}
  							?>
  </div>
  <div class="form-group">
    <label for="">Available Space</label>
    <?php 
	  
	  $capacity;
	  $qc = mysqli_query($conn, "SELECT sum(capacity) FROM `warehousestatus`");
   							$result=mysqli_num_rows($qc);
	  	  while($result = mysqli_fetch_assoc($qc)){
	  			$capacity = $result['sum(capacity)'];
	  }
	  $quantity;
	  $qq = mysqli_query($conn, "SELECT SUM(quantity) FROM `itemlocation`");
   							$res=mysqli_num_rows($qq);	
	  while($res = mysqli_fetch_assoc($qq)){
	  			$quantity = $res['SUM(quantity)'];
	  }
	  $total = $capacity-$quantity;
							//while($res = mysqli_fetch_assoc($q)){//Here we retrieve values from database and initiate SESSION Variables  
								echo '<input class="form-control" type="text" name="totalInvent" value="'.$total.'">';
   							//}
  							?>
  </div>
  <div class="form-group">
<!--    <label for="">Location 1</label>-->
     <?php 
							$q = mysqli_query($conn, "select storageID, SUM(quantity) from itemlocation group by storageID");
   							$res=mysqli_num_rows($q);
							while($res = mysqli_fetch_assoc($q)){//Here we retrieve values from database and initiate SESSION Variables  
								echo '<div class="form-group"><label for="">Warehouse ID "'.$res['storageID'].'"</label><input class="form-control" type="text" name="warehouse2" value="'.$res['SUM(quantity)'].'"></div>';
   							}
  							?>
  </div>
<!--
  <div class="form-group">
    <label for="">Location 2</label>
    <input class="form-control" type="text" name="warehouse2">
  </div>
  <div class="form-group">
    <label for="">Location 3</label>
    <input class="form-control" type="text" name="warehouse3">
  </div>
-->
</form>
 </div>
<div class="col-md-1"></div> 
<div class="col-md-6">
<img src="images/eye_location.gif" width="576" height="720" usemap="#Map" border="0" />
<map name="Map" id="Map">
  <a href="#warelocation3"><area shape="circle" coords="412,211,60" alt="location Map" title="Warehouse3
  Watthana"
onclick="location3()"/></a>

  <a href="#warelocation2"><area shape="circle" coords="156,79,66" title="Warehouse2
  Thung Maha Mek" 
   onclick="location2()" /> </a>
   <a href="#warelocation1"><area shape="circle" coords="211,554,63" title="Warehouse1
  Dok Mai" 
  onclick="location1()"/> </a>
</map>
</div>
<div class="col-md-3">
<!-- <div class="absolute" id="desc"></div> -->
<div id="here"></div>
</div>
  
</div>
</div>
</div>  
<?php include('footer.php'); 
?>
</body>
<script>
function location1() {
    document.getElementById("here").innerHTML ="<div class='absolute' id='warelocation1'> <div class='row'><div class='col-md-4'></div></div><div class='row'><div class='col-md-1'></div><i class='fa fa-battery-quarter' aria-hidden='true'></i></div><div class='row'><div class='col-md-1'></div><p>Type of product</p></div><div class='row'><div class='col-md-1'></div><div class='col-md-4'>Product1#</div> <div class='col-md-2'></div><div class='col-md-4'>Quantity</div></div><div class='row'><div class='col-md-1'></div><div class='col-md-4'>Product2#</div> <div class='col-md-2'></div><div class='col-md-4'>Quantity</div></div><div class='row'><div class='col-md-1'></div><div class='col-md-4'>Product3#</div> <div class='col-md-2'></div><div class='col-md-4'>Quantity</div></div></div>";

}
function location2() {
    document.getElementById("here").innerHTML ="<div class='absolute' id='warelocation2'> <div class='row'><div class='col-md-4'>Warehouse2</div></div><div class='row'><div class='col-md-1'></div><i class='fa fa-battery-quarter' aria-hidden='true'></i></div><div class='row'><div class='col-md-1'></div><p>Type of product</p></div><div class='row'><div class='col-md-1'></div><div class='col-md-4'>Product1#</div> <div class='col-md-2'></div><div class='col-md-4'>Quantity</div></div><div class='row'><div class='col-md-1'></div><div class='col-md-4'>Product2#</div> <div class='col-md-2'></div><div class='col-md-4'>Quantity</div></div><div class='row'><div class='col-md-1'></div><div class='col-md-4'>Product3#</div> <div class='col-md-2'></div><div class='col-md-4'>Quantity</div></div></div>";

}
function location3() {
    document.getElementById("here").innerHTML ="<div class='absolute' id='warelocation3'> <div class='row'><div class='col-md-4'>Warehouse3</div></div><div class='row'><div class='col-md-1'></div><i class='fa fa-battery-quarter' aria-hidden='true'></i></div><div class='row'><div class='col-md-1'></div><p>Type of product</p></div><div class='row'><div class='col-md-1'></div><div class='col-md-4'>Product1#</div> <div class='col-md-2'></div><div class='col-md-4'>Quantity</div></div><div class='row'><div class='col-md-1'></div><div class='col-md-4'>Product2#</div> <div class='col-md-2'></div><div class='col-md-4'>Quantity</div></div><div class='row'><div class='col-md-1'></div><div class='col-md-4'>Product3#</div> <div class='col-md-2'></div><div class='col-md-4'>Quantity</div></div></div>";

}
</script>
</html>