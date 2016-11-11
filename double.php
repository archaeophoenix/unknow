<?php

$db = new PDO("mysql:host=localhost;dbname=money", "root", "");
/*$data['JOIN']['table']="table.val=val";
$data['JOIN']['table1']="table1.val=val";
$data['WHERE']['coloumb1']="val1";
$data['AND']['coloumb2']="val2";
$data['AND']['coloumb3']="val3";
$data['OR']['coloumb4']="val4";
$data['GROUP']['BY']="val";
$data['ORDER']['ASC']="val";*/
$data['JOIN']['jenis']="jenis.id=akun.id_jenis";
$data['WHERE']['id_jenis']="1";

$cond=array();
$cond2=array();
foreach ($data as $key1 => $value){
	$op=($key1=="JOIN")?"ON":"=";
	foreach ($data[$key1] as $key => $value){
        if ($key1=="WHERE" || $key1=="AND" || $key1=="OR") {
            $cond[]=$key1." ".$key." ".$op." :".$key;
        }else{
            $cond[]=$key1." ".$key." ".$op." ".$value;
        }
	}
}
$condition=implode(" ",$cond);
// $condition2=implode(" ",$cond2);
echo "SELECT * FROM akun $condition <br/>";
$exe=$db->prepare("SELECT * FROM akun $condition");
foreach ($data as $key1 => $value){
	foreach ($data[$key1] as $key => $value){
		if ($key1=="WHERE" || $key1=="AND" || $key1=="OR") {
			$exe->bindValue(":".$key, $value);
			echo ":".$key." => ".$value."<br/>";
		}
	}
}
$exe->execute();
$result=$exe->fetchAll(PDO::FETCH_ASSOC);
print_r($result);die;

/* echo "<br/><br/><pre>";
echo "</pre>";*/
?>