<?php 
	$val = null;
	$answer=array();
	if (isset($_POST['y'])) {
		foreach ($_POST['coba'] as $key => $value) {
			$val[]=0;
		}
		$answer=array_combine($_POST['coba'],$val);
		echo "<pre>";
		print_r($answer);
		echo "</pre>";
	}
?>
<form method="post" action="?">
	<pre>
		<input type="text" name="coba[]">
		<input type="text" name="coba[]">
		<input type="text" name="coba[]">
		<input type="submit" name="y">
	</pre>
</form>