<?php

session_start();

if(isset($_GET['y'])){

$y = $_GET['y'];
	if (!isset($_SESSION['cart'])){
	
		$_SESSION['cart'] = array();
	
	} else {
		if (isset($_SESSION['cart'][$y])){
	
			$_SESSION['cart'][$y] += 1;
	
		} else {
	
			$_SESSION['cart'][$y] = 1;
		}
	}

}

echo "<pre>";
print_r($_SESSION);

?>