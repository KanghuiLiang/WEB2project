<?php 
require('db/iloveyou.php');
session_destroy(); 
session_unset();
clearstatcache();
setcookie();
header ('location: ../index.php');
  echo "<script>window.close();</script>";
exit;
 ?>