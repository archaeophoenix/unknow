<?php
	$string = 'Abcdefghijklmnopqrstuvwxyz0123456789';
	echo $string."<br>";
	echo preg_match("/^abc/", $string)." /^abc/ <br>";
	echo preg_match("/^abc/i", $string)." /^abc/i <br>";
	echo preg_match("/^abc\z/i", $string)." /^abc\z/i <br>";
	echo preg_match("/789\z/i", $string)." /789\z/i <br>";
?>