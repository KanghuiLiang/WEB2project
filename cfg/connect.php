<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = 'maxomus_ais';

// Create connection
$conn = @mysql_connect($servername, $username, $password, true);
// Check connection
if (!$conn) {
    die("Connection failed: " . $conn);
}

@mysql_select_db($db);



?>