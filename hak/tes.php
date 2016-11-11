<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
<?php
	$a = array('s' => array('c' => 0 ,'r' => 0, 'u' => 0, 'd' => 0 ), 'f' => array('c' => 0 ,'r' => 0, 'u' => 0, 'd' => 0 ) );
	$b = (isset($_REQUEST['ok'])) ? $_REQUEST['a'] : array();
	$c = array_replace_recursive($a, $b);
	?><pre>
        <?php echo'$a => '; print_r($a); echo'$b => '; print_r($b); echo'$c => '; print_r($c);?>
    </pre><?php
	foreach ($c as $key => $value) {
		echo $key."<br/>";
		for ($i=0; $i < count($value); $i++) { 
			$s=array_keys($value);
			?><input type="checkbox" value="1" <?php echo ($value[$s[$i]]==1) ? 'checked' : '' ; ?> name="a[<?php echo $key."][".$s[$i]?>]" /><?php
		}
		echo "<br/>";
	}
?>
	<input type="submit" name="ok" />
	</form>
</body>
</html>
