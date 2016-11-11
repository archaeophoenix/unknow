<?php
session_start();
$data=array("satu"=>"maya","dua"=>"ayam","tiga"=>"ikan","empat"=>"ikan duyung","lima"=>"ikan panggang");
foreach ($data as $key => $value) {
	echo '$'.$key." = ".$value."<br>";
	${$key}=$value;
}
echo$satu."<br>".$dua."<br>".$tiga."<br>".$empat."<br>".$lima."<br><br><br><br>";
$_SESSION['test']=null;
// $test=array();
$test[]="1";
$_SESSION['test']=$test;
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
$test=$_SESSION['test'];
$test[]="2";
$_SESSION['test']=$test;
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
?>