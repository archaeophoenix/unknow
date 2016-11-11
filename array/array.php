<pre>
<?php 
// $arr=['key1'=>'val1','key2'=>'val2','key3'=>'val3','key4'=>'val4'];
$arr2=[	['key1'=>'val1','key2'=>'val2','key3'=>'val3','key4'=>'val4'],
		['key1'=>'val1','key2'=>'val2','key3'=>'val3','key4'=>'val4'],
		['key1'=>'val1','key2'=>'val2','key3'=>'val3','key4'=>'val4'],
		['key1'=>'val1','key2'=>'val2','key3'=>'val3','key4'=>'val4']];
/*echo $arr['key1'];
foreach ($arr as $key => $val){
	echo $key." => ".$val."<br>";
}*/
print_r($arr2);
foreach ($arr2 as $key){
	echo $key['key4']."<br>";
}
echo "<br><br><br><br><br><br><br>";

function selected($table,$data=array(),$fields="*",$all=false){
        // join where having group order limit
        $cond=array();
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
        // echo "SELECT $fields FROM $table $condition";die;
        // echo "SELECT $fields FROM $table $condition <br/>";
        $exe=$this->prepare("SELECT $fields FROM $table $condition");
        if(!$exe){
            $message = $this->errorInfo();
            echo $message[2];
            die();
        } else {
            foreach ($data as $key1 => $value){
                foreach ($data[$key1] as $key => $value){
                    if ($key1=="WHERE" || $key1=="AND" || $key1=="OR") {
                        $exe->bindValue(":".$key, $value);
                        // echo ":".$key." => ".$value."<br/>";
                    }
                }
            }
            $exe->execute();
            if($all==false){
                $result=$exe->fetchAll(PDO::FETCH_ASSOC);
            }else{
                $result=$exe->fetch(PDO::FETCH_ASSOC);
            }
            return $result;
        }
    }
?>
</pre>