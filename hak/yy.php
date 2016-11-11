<?php
$array = array('a' => array('x','y','z'), 'b' => 'w', 'c' => 'v');
extract($array);
echo $a[1]."<br>".$b."<br>".$c;
?>