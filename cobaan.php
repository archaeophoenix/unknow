<?php
$m = new Mongo("mongodb://127.0.0.1:27017",array(
'username' => 'root',
'db'       => 'turorial'
)); // connect
$db = $m->selectDB("turorial");
?>