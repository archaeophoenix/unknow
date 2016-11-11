<?php
	$dur = 120;
	$parking = 45;
	/*$atad['a']['car1'] = '09:45';
	$atad['b']['car2'] = '09:45';
	$atad['a']['car3'] = '09:45';
	$atad['b']['car4'] = '09:45';*/
	$data['a']['09:45'][0] = 'car1';
	$data['a']['09:45'][1] = 'car3';
	$data['b']['09:45'][0] = 'car2';
	$data['b']['09:45'][1] = 'car4';
	echo "durations => ".$dur."min<br>parking => ".$parking."min<pre>";
/*	foreach ($data as $key => $value) {
		echo "[".$key."] ";
		foreach ($value as $yek => $val) {
			echo "{".$yek."} ";
			foreach ($val as $k => $values) {
				echo "(".$values.") ";
			}
		}
		echo "<br>";
	}*/
	/*print_r($data);
	print_r($atad);*/
?>