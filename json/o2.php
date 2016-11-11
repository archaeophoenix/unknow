<?php
        $e[]=$_REQUEST;
        /*foreach($e as $key => $val){
                echo $key." ".$val."<br/>";
        }*/
        $e=array(array("aa"=>"x","bb"=>"y","cc"=>"z"),array("aa"=>"x","bb"=>"y","cc"=>"z"),array("aa"=>"x","bb"=>"y","cc"=>"z"));
        echo json_encode($e);
?>
