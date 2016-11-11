<?php

	// 1d
	$a = ['a','b','c','d'];

	// 1d index string
	$b = ['a' => 'z' ,'b' => 'y','c' => 'x','d' => 'w'];

	// 2d 
	$c = [	['a','b','c','d'],
			['a','b','c','d'],
			['a','b','c','d'],
			['a','b','c','d']];

	// 2d index string
	$d = [	['a' => 'z' ,'b' => 'y','c' => 'x','d' => 'w'],
			['a' => 'z' ,'b' => 'y','c' => 'x','d' => 'w'],
			['a' => 'z' ,'b' => 'y','c' => 'x','d' => 'w'],
			['a' => 'z' ,'b' => 'y','c' => 'x','d' => 'w']];

	foreach ($d as $k => $v) {
		echo $k." => ".$v['a'].'<br>';
	}
	/*echo "<pre>";
	print_r($a);
	echo "<br>";
	print_r($b);
	echo "<br>";
	print_r($c);
	echo "<br>";
	print_r($d);*/
?>