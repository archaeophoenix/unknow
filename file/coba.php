<?php $my_file = 'ok.php';
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
$data = "<?php echo 'This is the data' ?>";
fwrite($handle, $data); ?>