<?php
class isi extends PDO{
	function __construct(){
		parent::__construct("mysql:host=localhost;dbname=money", "root", "");
	}
	function field($table){
	        $exe=$this->prepare("DESCRIBE ".$table);
	        $exe->execute();
	        $result=$exe->fetchAll(PDO::FETCH_ASSOC);
	        return $result;
	}
	function create($table,$data=array()){
                if(empty($data)){
                        $Field=$this->field($table);
                        foreach($Field as $Fields){
                                if($Fields['Type']!='timestamp'){
                                        $field[]=$Fields['Field'];
                                        $Datas[]=$_REQUEST[$Fields['Field']];
                                }
                        }
                        $fields=implode(",",$field);
                        $values=":".implode(",:",$field);
                        $data=array_combine($field,$Datas);
	        } else {
                        $fields=implode(",",array_keys($data));
                        $values=":".implode(",:",array_keys($data));
	        }
                //echo"INSERT INTO $table($fields) VALUES($values)";
	        $exe=$this->prepare("INSERT INTO $table($fields) VALUES($values)");
                foreach ($data as $key => $value) {
                        //echo$value."<br/>";
			$exe->bindValue(":$key", $value);
		}
		//die;
	        $exe->execute();
	}
	function read($table,$condition=null,$fields="*",$all=false){
	        //echo "SELECT $fields FROM $table $condition";die;
	        $exe=$this->prepare("SELECT $fields FROM $table $condition");
	        $exe->execute();
	        if($all==false){
	                $result=$exe->fetchAll(PDO::FETCH_ASSOC);
	        }else{
	                $result=$exe->fetch(PDO::FETCH_ASSOC);
	        }
	        return $result;
	}
	function update($table,$where,$data=array()){
	        if(empty($data)){
                        $Field=$this->field($table);
                        foreach($Field as $Fields){
                                if($Fields['Type']!='timestamp'){
                                        $value[]=$Fields['Field']." = :".$Fields['Field'];
                                }
                                $field[]=$Fields['Field'];
                                $Datas[]=$_REQUEST[$Fields['Field']];
                        }
                       $data=array_combine($field,$Datas);
	        } else {
                        foreach($data as $key => $val ){
                                $value[]=$key." = :".$key;
                        }
	        }
	        $values=implode(", ",$value);
	        //echo "UPDATE $table SET $values WHERE $where <br/>";
	        $exe=$this->prepare("UPDATE $table SET $values WHERE $where");
	        foreach ($data as $key => $value) {
			$exe->bindValue(":$key", $value);
			//echo $key."=>".$value;
		}
		//die;
	        $exe->execute();
	}
        function delete($table,$where){
		$this->exec("DELETE FROM $table WHERE $where");
	}
	function tanggal($data,$bulan=false){
	        $angka=array("01","02","03","04","05","06","07","08","09","10","11","12");
                $bulan=array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus" ,"September" ,"Oktober" ,"November" ,"Desember");
	        $tanggal=explode('-',$data);
	        if($bulan==true){
                        $month=str_replace($angka,$bulan,$tanggal[1]);
	                $date=$tanggal[2]." - ".$month." - ".$tanggal[0];
	        }else {
	                $date=$tanggal[2]." - ".$tanggal[1]." - ".$tanggal[0];
	        }
	        return $date;
	}
        function subtext($text){
                $sub=explode(" ",$text);
                $line=floor(count($sub)/2);
                for($i=0;$i<$line;$i++){
                        $string.=$sub[$i]." ";
                }
                $string.="...";
                return $string;
        }
}?>
