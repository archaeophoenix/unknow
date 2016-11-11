<?php
	if (isset($_REQUEST['ok'])){
		// echo$_REQUEST['a']['a']['c'];
		// print_r(array_keys($_REQUEST['a']['b']));
		echo"<pre>";
		print_r($_REQUEST['a']);
		echo"</pre>";
	}
	$a=array('s' => array('c' => 0 ,'r' => 0, 'u' => 0, 'd' => 0 ), 'f' => array('c' => 0 ,'r' => 0, 'u' => 0, 'd' => 0 ) );
	echo"<pre>";
	print_r($a);
	echo"</pre>";
	/*$a=array('s' => array('c' => 0 ,'r' => 0, 'u' => 0, 'd' => 0 ), 'f' => array('c' => 0 ,'r' => 0, 'u' => 0, 'd' => 0 ) );
	$b=array('s' => array('r' => 1, 'd' => 1 ), 'f' => array('c' => 1, 'r' => 1,  ) );
	$d=array_replace_recursive($a, $b);
	foreach ($d as $key => $value) {
		echo $key."<br/>";
		for ($i=0; $i < count($value); $i++) { 
			$s=array_keys($value);
			//echo $s[$i]."][".$value[$s[$i]]."<br/>";
			?><input type="checkbox" value="1" <?php echo ($value[$s[$i]]==1) ? 'checked' : '' ; ?> name="a[<?php echo $key."][".$s[$i]?>]" /><?php
		}
		echo "<br/>";
	}
	die();*/
?>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" >
		<input type="checkbox" value="1" name="a[a][c]" />
		<input type="checkbox" value="1" name="a[a][r]" />
		<input type="checkbox" value="1" name="a[a][u]" />
		<input type="checkbox" value="1" name="a[a][d]" />
		<br/>
		<input type="checkbox" value="1" name="a[b][c]" />
		<input type="checkbox" value="1" name="a[b][r]" />
		<input type="checkbox" value="1" name="a[b][u]" />
		<input type="checkbox" value="1" name="a[b][d]" />
		<input type="submit" name="ok">
	</form>
</body>
</html>
<?php ?>