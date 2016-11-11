<?php
session_start();
// $y = $_GET['y'];
$y = 1;
if ($_POST['ok'] == '+') {
// for ($i=0; $i < 5 ; $i++) { 
	if (!isset($_SESSION['o'])){
		$_SESSION['o'] = array();
	} else {
		if (isset($_SESSION['o'][$y])){
			$_SESSION['o'][$y] += 1;
		} else {
			$_SESSION['o'][$y] = 1;
		}
	}
// }
} else {
	if (!isset($_SESSION['o'])){
		$_SESSION['o'] = array();
	} else {
		if (isset($_SESSION['o'][$y])){
			$_SESSION['o'][$y] -= 1;
		} else {
			$_SESSION['o'][$y] = 1;
		}
	}
}
echo "<pre>";
print_r($_SESSION);
?>
<form method="post">
	<input type="text" name="" value="<?php echo $_SESSION['o'][1]; ?>" >
	<input type="submit" name="ok" value="+">
	<input type="submit" name="ok" value="-">
</form>