<?php
   session_start();
   //$_SESSION['eid'] = $_POST["eid"];
    require('iloveyou.php');
    
  // $eid = $name = $email = $address = $username = $password = $priority = $status = $location = $zip = $phone = "";
   
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$sid = $_POST["sid"];
   	$Suppliername = ($_POST["Suppliername"]);
   	$semail = $_POST["s.email"];
   	$bankname =$_POST[ "bankname"];
   	$account = $_POST["account"];
   	$address = ($_POST["address"]);
	$zip = $_POST["zip"];
	$phone = $_POST["contact"];
	$location="";
   	$contact = ($_POST['contact']);
	$pid = $_POST["pid"];
	$cost = $_POST["price"];
	$pname = $_POST["pname"];
	   
//	   echo $sid, $semail, $Suppliername, $zip, $bankname, $account, $address, $contact;
   
	   
	   //Insert data to supplier table
	   $qi = mysqli_query($conn,"INSERT INTO `supplier`(`id`, `name`, `email`) VALUES  ('$sid', '$Suppliername', '$semail')");
    
   		$insert =mysqli_num_rows($qi);
	   
	   //Insert supplier bank details
	   $qi2 = mysqli_query($conn,"INSERT INTO `supplierac`(`supplierID`, `bankName`, `accountNo`) VALUES ('$sid', '$bankname', '$account')");
    
   		$insert2 =mysqli_num_rows($qi2);
   
	   
	   //get location id from location table using zip
   	   $q = mysqli_query($conn, "SELECT `id` FROM `location` WHERE `zip`='$zip'");
   	   $res=mysqli_num_rows($q);
   
	   //put location id into a variable
   	if($res == 1){//If the number of rows is equal to 1, let them login
   		while($res = mysqli_fetch_assoc($q)){//Here we retrieve values from database and initiate SESSION Variables  
   		$location = $res["id"];
   		}
	}
   		
		//Insert supplier location   
	   $qi3 = mysqli_query($conn,"INSERT INTO `supplier_location`(`supplierID`, `areaID`, `address`) VALUES  ('$sid', '$location', '$address')");
    
   		$insert3 =mysqli_num_rows($qi3);
	   
	   
	   //insert supplier contact no
   		for ($i=0; $i < count($phone); $i++) { 
   		// How to insert your things into DB
   	
   			$q0i = mysqli_query($conn, "INSERT INTO `supplier_no`(`supplierID`, `phoneNo`) VALUES ('$sid', '$phone[$i]');");
    
   			$inser1t =mysqli_num_rows($q0i);
   		}
	   
	   //insert product into product table
		for ($i=0; $i < count($pid); $i++) { 
   		// How to insert your things into DB
   	
   			$q0i = mysqli_query($conn, "INSERT INTO `product`(`ItemID`, `name`, `quality`, `status`) VALUES ('$pid[$i]', '$pname[$i]', 0, 0);");
    
   			$inser1t =mysqli_num_rows($q0i);
   		}
	   
		//insert vendore price for the product
	   for ($i=0; $i < count($pid); $i++) { 
   		// How to insert your things into DB
   	
   			$q0i = mysqli_query($conn, "INSERT INTO `product_vendore_price`(`pid`, `vid`, `price`) VALUES ('$pid[$i]', '$sid', '$phone[$i]');");
    
   			$inser1t =mysqli_num_rows($q0i);
   		}
	   
	   
   
   
   		header ("location:../product/addProductImage.php");
   	}
   ?>