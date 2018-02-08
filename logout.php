<?php
	session_start();
	unset($_SESSION['userIsLoggedIn']);
	header('location:index.php');
?>