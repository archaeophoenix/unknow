<?php
	//require 'isi.php';
	//Array ([s] => Array ([c] => 1 [r] => 1 [u] => 1 [d] => 1 ) [f] => Array ([c] => 1 [r] => 1 [u] => 1 [d] => 1 ) ) 
	if (isset($_REQUEST['submit'])) {
		echo "<pre>";
		print_r($_REQUEST['a']);
		$val=json_encode($_REQUEST['a'],JSON_NUMERIC_CHECK);
		echo $val ;
		echo "</pre>";
		/*$f = new isi();
		unset($f);
		$f->create("afif",array('val'=>$val));*/
	}
?>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		<input type="checkbox" value=1 name="a[s][c]"/>
		<input type="checkbox" value=1 name="a[s][r]"/>
		<input type="checkbox" value=1 name="a[s][u]"/>
		<input type="checkbox" value=1 name="a[s][d]"/><br/>
		<input type="checkbox" value=1 name="a[f][c]"/>
		<input type="checkbox" value=1 name="a[f][r]"/>
		<input type="checkbox" value=1 name="a[f][u]"/>
		<input type="checkbox" value=1 name="a[f][d]"/>
		<input type="submit" name="submit"/>
	</form>
</body>
</html>