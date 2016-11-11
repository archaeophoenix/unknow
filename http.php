<pre>
<?php
print_r($_SERVER);

$http = 'http' . ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 's' : '') . '://';
$fo = str_replace("index.php", "", $_SERVER['SCRIPT_NAME']);
$base_url = $http . $_SERVER['HTTP_HOST'] . "" . $fo;
echo $base_url;?>