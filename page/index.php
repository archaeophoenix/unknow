<?php
/*$q=$_SERVER['REQUEST_URI'];
$w=explode('/',$q);
print_r($w);
echo "<br/><pre>";
print_r($_SERVER);
echo"</pre>";
echo date("Y");
mysql_connect("localhost","root","");
mysql_select_db("money");
mysqldump('mysqldump -h localhost -u root -p money > backup.sql'); */

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'money';
$backup_file = $dbname.'.sql';
$command = "mysqldump --opt -h $dbhost -u $dbuser -p $dbpass "."money > $backup_file";
exec($command);
echo $backup_file;
?>