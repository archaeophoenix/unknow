<?php 
$data = "php_flag display_errors on\n php_value error_reporting 9999\n RewriteEngine On\n RewriteBase /cvm/\n RewriteCond %{REQUEST_FILENAME} !-d\n RewriteCond %{REQUEST_FILENAME} !-f\n RewriteCond %{REQUEST_FILENAME} !-l\n RewriteRule ^(.+)$ index.php?x=$1 [QSA,L]";
$my_file = ".htaccess";
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
fwrite($handle, $data);
?>