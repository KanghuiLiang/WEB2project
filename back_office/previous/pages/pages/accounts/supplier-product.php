<?php 
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
//  
//         $des=$_POST["supplier"];
//// MySQL database connection code
//$connection = mysqli_connect("localhost","maxomus","am786786786","maxomus_ais") or die("Error " . mysqli_error($connection));
////Fetch sports data
//$sql = "SELECT * FROM  `suppItem WHERE supplierID= '".$des."'";
$dbhost = "localhost";
$dbusername = "maxomus";
$dbpass = "am786786786";

// connect database
$link = mysql_connect($dbhost, $dbusername, $dbpass);
if (!$link) {
    die('Could not connect: ' . mysql_error());
}

mysql_select_db('maxomus_ais');


if(!empty($_POST["supplier"])){

  $supplier = $_POST['supplier'];

  $sql = "SELECT name from suppliers where id = '$supplier'";
  $retval = mysql_query( $sql, $link);
  $row = mysql_fetch_array($retval);
  echo $row['name'];

}
	
	
	
//$result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));
////create an array
//$array = array();
////$i = 0;
////while($row = mysqli_fetch_assoc($result))
////{  
////    $orgname = $row['supplierID'];
////    $count = $row['ItemID'];
////    $array['cols'][] = array('type' => 'string'); 
////    $array['rows'][] = array('c' => array( array('v'=> $orgname), array('v'=>(int)$count)) );
////}
////$data = json_encode($array);
//echo $row['ItemID'];
}
?>