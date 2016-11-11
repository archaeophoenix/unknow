<?php 
	extract($_POST);
	if (isset($y)) {
		echo "<pre>";
		print_r($_POST);
		for ($i=0; $i <count($time) ; $i++) { 
			if (empty($time[$i])) {
				continue;
			} else{
				echo $time[$i]." ";
			}
			for ($j = 0; $j < count($car) ; $j++) {
				if (empty($car[$i][$j])) {
					continue;
				} else{
					echo $car[$i][$j]." ";
				}
			}
			echo "<br>";
		}
	}
?>
<form method="post">
<table>
	<tr>
		<td><input type="text" name="time[0]" value="1"></td>
		<td><input type="text" name="car[0][0]" value="q"></td>
		<td><input type="text" name="car[0][1]" value="w"></td>
	</tr>
	<tr>
		<td><input type="text" name="time[1]" value="2"></td>
		<td><input type="text" name="car[1][0]" value="e"></td>
		<td><input type="text" name="car[1][1]" value="r"></td>
	</tr>
	<tr>
		<td><input type="text" name="time[2]" value="3"></td>
		<td><input type="text" name="car[2][0]" value="t"></td>
		<td><input type="text" name="car[2][1]" value=""></td>
	</tr>
	<tr>
		<td><input type="text" name="time[3]" value="4"></td>
		<td><input type="text" name="car[3][0]" value=""></td>
		<td><input type="text" name="car[3][1]" value=""></td>
	</tr>
	<tr>
		<td><input type="text" name="time[4]" value=""></td>
		<td><input type="text" name="car[4][0]" value="y"></td>
		<td><input type="text" name="car[4][1]" value="u"></td>
	</tr>
	<tr>
		<td><input type="text" name="time[5]" value="6"></td>
		<td><input type="text" name="car[5][0]" value=""></td>
		<td><input type="text" name="car[5][1]" value="i"></td>
	</tr>
</table>
<input type="submit" name="y">
</form>