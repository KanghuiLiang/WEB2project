<?php
   session_start();
   $_SESSION['eid'] = $_POST["eid"];
    require('iloveyou.php');
    
  // $eid = $name = $email = $address = $username = $password = $priority = $status = $location = $zip = $phone = "";
   
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
   	$eid = ($_POST["eid"]);
   	$name = ($_POST["name"]);
   	$email = ($_POST["email"]);
   	$address = ($_POST["address"]);
    $username = ($_POST["username"]);
    $password = ($_POST["password"]);
    $priority = ($_POST["piority"]);
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
   		$qi = mysqli_query($conn,"INSERT INTO `employeeinfo` (`employeeID`, `name`, `email`, `address`, `username`, `password`, `piority`, `locationID`, `status`) VALUES ('$eid', '$name', '$email', '$address', '$username', '$password', '$priority', '$location', '$status')");
    
   		$insert =mysqli_num_rows($qi);
   
   
   	for ($i=0; $i < count($phone); $i++) { 
   		// How to insert your things into DB
   	
   		$q0i = mysqli_query($conn, "INSERT INTO `e_contact` (`employeeID`, `contactNo`) VALUES ('$eid', '$phone[$i]');");
    
   		$inser1t =mysqli_num_rows($q0i);
   		}
   
   		header ("location:../user/userPhoto.php");
   	}
   ?>