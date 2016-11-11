<?php
$anwser = array('satu' => 0,'dua' => 0,'tiga' => 0 );
if (isset($_POST['y'])) {
	foreach ($anwser as $key => $value) {
		if ($_POST['o']==$key) {
			$anwser[$key]+=1;
		}
	}
}
print_r($anwser);
?>
<form action="?" method="post">
<?php foreach ($anwser as $key => $value){ ?>
	<input type="radio" name="o" value="<?php echo $key ?>">
<?php } ?>
	<input type="submit" name="y">
</form>