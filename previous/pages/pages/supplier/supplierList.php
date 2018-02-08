<?php
include_once("../header.php");

?>

<?php 
$sql = "SELECT * FROM supplier as s INNER JOIN supplierac AS sa ON s.id= sa.supplierID INNER JOIN supplier_location AS sl on s.id = sl.supplierID INNER JOIN location as l on sl.areaID=l.id inner join supplier_no as sn on s.id=sn.supplierID LIMIT 0, 30 ";










<?php
include_once("../footet.php");

?>