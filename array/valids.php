<?php
	error_reporting(~E_STRICT);
	$dur = 120;
	$parking = 45;
	echo "<pre>";
	$data['a']['09:45'][0] = 'car1';
	// $data['b']['09:45'][0] = 'car2';
	$atad = array();
	print_r($data);
	
	for ($i=0; $i <5 ; $i++) {
		
		$key = end(array_keys($data));
		
		$time = end(array_keys($data[$key]));

		$hour = date('H:i',strtotime($time) + ($dur + $parking) * 60);

		$keys = (end(array_keys($data)) == 'b') ? 'a' : 'b' ;

		$data[$keys][$hour][] = 'car1';

		/*$index = array_keys($data)[0];
		echo $index." ".array_keys($data[$index])[0];
		echo "<br>";*/

		/*$xedni = array_keys($data)[1];
		echo $xedni." ".array_keys($data[$xedni])[0];
		echo "<br>";*/
	}

	print_r($data);
?>