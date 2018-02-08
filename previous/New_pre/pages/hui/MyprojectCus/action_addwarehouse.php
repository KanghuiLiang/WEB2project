<?php
   session_start();
   //$_SESSION['eid'] = $_POST["eid"];
    require('iloveyou.php');
    
  // $eid = $name = $email = $address = $username = $password = $priority = $status = $location = $zip = $phone = "";
   
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$wid = $_POST["id"];
   	$capacity = ($_POST["cap"]);
   	$statusrent = ($_POST["rentown"]);
   	$status = "active";
   	$location = "";
   	$zip = ($_POST["zip"]);
   	$phone = ($_POST['phone']);
   
   
   			$q = mysqli_query($conn, "SELECT `id` FROM `location` WHERE `zip`='$zip'");
   			$res=mysqli_num_rows($q);
   
   	if($res == 1){//If the number of rows is equal to 1, let them login
   		while($res = mysqli_fetch_assoc($q)){//Here we retrieve values from database and initiate SESSION Variables  
   		$location = $res["id"];
   		}
	}
   		$qi = mysqli_query($conn,"INSERT INTO `warehousestatus`(`id`, `capacity`, `status`, `rent`) VALUES  ('$wid', '$capacity', '$statusrent', '$rent')");
    
   		$insert =mysqli_num_rows($qi);
		
		$qi2 = mysqli_query($conn,"INSERT INTO `warehouse_location`(`storageID`, `locationID`, `status`) VALUES ('$wid', '$location', '$status')");
    
   		$insert2 =mysqli_num_rows($qi2);
   
   
   
   
   		header ("location:../user/userPhoto.php");
   	}
   ?>