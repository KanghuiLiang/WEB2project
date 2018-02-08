<?php
	if($_SERVER["REQUEST_METHOD"]=="POST"){	
		

		$totalprice = $_POST["price"];

		$a = array($_POST["price"]);
		echo array_sum($a);


		
	// 	$total=0;
		
	// 	for($i=0; $i< count($totalprice); $i++){
	// 		$total += $totalprice[$i];
	// 	}
	// header("location: invoice.php");

	// $_session['total'] = $totalprice;

	}




?>