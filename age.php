<?php
$age = date_diff(date_create('1992-10-27'), date_create('now'))->y;
echo $age;
?>