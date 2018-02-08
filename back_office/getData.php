<?php 
// MySQL database connection code
$connection = mysqli_connect("localhost","maxomus","am786786786","maxomus_ais") or die("Error " . mysqli_error($connection));
//Fetch sports data
$sql = "SELECT `storageID` as si, SUM(`quantity`) as qty FROM `itemlocation` group by `storageID` order by `storageID`";
$result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));
//create an array
$array = array();
$i = 0;
while($row = mysqli_fetch_assoc($result))
{  
    $orgname = $row['storageID'];
    $count = $row['qty'];
    $array['cols'][] = array('type' => 'string'); 
    $array['rows'][] = array('c' => array( array('v'=> $orgname), array('v'=>(int)$count)) );
}
$data = json_encode($array);
echo $data;
?>