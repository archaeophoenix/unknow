<pre>
<?php
$a = array('a', 'b', 'c','d','e');
$b = array('v','w','x', 'y', 'z');
$c = array_combine($a, $b);

print_r($c);
echo "<br/>";
$r=array();
for($i=0;$i<count($c);$i++){
        $r[]=$c;
}
print_r($r);
echo "<br/>";
foreach($r as $s){
        echo ($s['a'].$s['b'].$s['c'].$s['d'].$s['e']."<br/>");
}
$cc=null;
foreach ($a as $key => $value) {
	$cc[]=$value;
}
echo "<pre>";
print_r($cc);
echo "</pre>";
echo implode(",",$cc);
?>
</pre>