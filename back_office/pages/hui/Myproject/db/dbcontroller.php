<?php
class DBController {
	private $host = "localhost";
	private $user = "maxomus";
	private $password = "am786786786";
	private $database = "maxomus_ais";
	
	function __construct() {
		$conn = $this->connectDB();
		if(!empty($conn)) {
			$this->selectDB($conn);
		}
	}
	
	function connectDB() {
		$conn = mysql_connect("localhost","maxomus","am786786786");
		return $conn;
	}
	
	function selectDB($conn) {
		mysql_select_db($database,$conn);
	}
	
	function runQuery($query) {
		$result = mysql_query($query);
		while($row=mysql_fetch_assoc($result)) {
			$resultset[] = $row;
		}		
		if(!empty($resultset))
			return $resultset;
	}
	
	function numRows($query) {
		$result  = mysql_query($query);
		$rowcount = mysql_num_rows($result);
		return $rowcount;	
	}
}
?>