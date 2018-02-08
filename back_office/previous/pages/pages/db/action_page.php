<?php
session_start();
 require('iloveyou.php');
 
 $username = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = ($_POST["username"]);
  $password = ($_POST["password"]);

//3. If the form is submitted or not.
//3.1 If the form is submitted
//if (isset($_POST['username']) and isset($_POST['password'])){
//3.1.1 Assigning posted values to variables.
//$username = $_POST["username"];
//$password = $_POST["password"];
//3.1.2 Checking the values are existing in the database or not
$q = mysqli_query($conn,"SELECT `name`, `piority`, `picture`, `username`, `password` FROM `employeeinfo` WHERE username='$username' and password='$password'");
 
$res=mysqli_num_rows($q);

if($res == 1){//If the number of rows is equal to 1, let them login
	while($res = mysqli_fetch_assoc($q)){//Here we retrieve values from database and initiate SESSION Variables  
	$_SESSION["username"] = $res["username"]; 
	$_SESSION["password"] = $res["password"];
	$_SESSION["user"] = $res["name"];
	$_SESSION["piority"] = $res["piority"];
	header('Content-type: image/jpeg');
	$_SESSION["img"] = $res["picture"];
	
}
header("location: ../user/userlanding.php");//redirect to members page... information correct.

//$_SESSION['user']=$username;
} else {
	header("location: ../../index.php");//go back to login page... 	information incorrect.//error message here...
	print "wrong user or password";
	   }
}
?>