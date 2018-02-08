<?php

include_once("config.php");

if(!empty($_POST["supplier"])){

  $supplier = $_POST['supplier'];

  $sql = "SELECT * from supplier where id = '$supplier'";
  $retval = mysql_query( $sql, $link);
  $row = mysql_fetch_array($retval);
  echo $row['name'];

}

mysql_close($link);


?>