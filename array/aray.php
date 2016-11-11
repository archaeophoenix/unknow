<pre>
<?php
$array = array(0 => 100, "color" => "red");
print_r(array_keys($array));
echo"<br/>";
$array = array("blue", "red", "green", "blue", "blue");
print_r(array_keys($array, "blue"));
echo"<br/>";
$array = array("color" => array("blue", "red", "green"),
               "size"  => array("small", "medium", "large"));
print_r(array_keys($array));
echo"<br/>";echo"<br/>";echo"<br/>";

$array = array('first'=>'111', 'second'=>'222', 'third'=>'333');

print_r($array);

print array_shift(array_keys($array))."<br/>";
print array_pop(array_keys($array))."<br/>";
print array_shift(array_values($array))."<br/>";
print array_pop(array_values($array))."<br/>";

print_r($array);
?>
</pre>