<?php
include_once("iloveyou.php");
//include_once("config.php");

if(!empty($_POST["zip"])){

  $zip = $_POST['zip'];

//  $sql = "SELECT * FROM `location` WHERE `zip`='$zip'";
//  $retval = mysql_query( $sql, $conn);
//  $row = mysql_fetch_array($retval);
//  echo $row['region'];
	  
	$q = mysqli_query($conn, "SELECT `region` FROM `location` WHERE `zip`= '$zip'");
   	$res=mysqli_num_rows($q);
	
	echo $res['region']	;
	
	

}

mysql_close($conn);




















//include_once("config.php");

//if(!empty($_POST["zip"])){
//// echo $_POST["zip"];
//  //$zip = 10250;
//	 $zip = $_POST['zip'];
//
////  //$sql = "SELECT * FROM `location` WHERE `zip`='$zip'";
////	$q = mysqli_query($conn, "SELECT `region` FROM `location` WHERE `zip`= '$zip'");
////   	$res=mysqli_num_rows($q);
////   //$row = mysql_fetch_array($res);
////	$region='a';
////	while($res = mysqli_fetch_assoc($q)){
////  		$region = $res['region'];
////		
////	}
////	echo($region);
//	//$_SESSION[$region];
//	$sql = "SELECT * FROM `location` WHERE `zip`='$zip'";
//	$retval = mysql_query($sql, $conn);
//  	$row = mysql_fetch_array($retval);
//  	echo $row['Region'];
//}
//echo "Not found";
////mysql_close($link);

//if(!empty($_POST["zip"])){
//
//  $supplier = $_POST['zip'];
//
//  $sql = "SELECT * FROM `location` WHERE `zip`= '$supplier'";
//  $retval = mysql_query( $sql, $link);
//  $row = mysql_fetch_array($retval);
//  echo $row['region'];
//
//}else{
//	echo "error";
//}
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
//	$location="";
//$q = mysqli_query($conn, "SELECT `id` FROM `location` WHERE `zip`='$zip'");
//   			$res=mysqli_num_rows($q);
//   
//   	if($res == 1){//If the number of rows is equal to 1, let them login
//   		while($res = mysqli_fetch_assoc($q)){//Here we retrieve values from database and initiate SESSION Variables  
//   		$location = $res["id"];
//   		}
//		
//	}
//	echo $location;
//}

//mysql_close($link);


?>