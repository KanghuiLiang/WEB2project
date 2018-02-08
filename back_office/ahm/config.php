<?php

$dbhost = "localhost";
$dbusername = "root";
$dbpass = "";

// connect database
$link = mysql_connect($dbhost, $dbusername, $dbpass);
if (!$link) {
    die('Could not connect: ' . mysql_error());
}

mysql_select_db('maxomus_ais');


?>