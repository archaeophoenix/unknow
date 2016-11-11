<?php
	$hak=array("ac"=>array("a"=>0,"b"=>'0',"c"=>1));
	$x=$_REQUEST['x'];
	switch ($x) {
		case 'a':
			if ($hak['ac']['a']==1) {
				echo "z";
			}else{?> <script>window.location="?x"</script> <?php }
		break;
		case'b':
			echo"y";
		break;
		case'c':
			echo"x";
		break;
		case'd':
			echo"w";
		break;
		case'e':
			echo"v";
		break;
		case'f':
			echo"u";
		break;
		case'g':
			echo"t";
		break;
		default:
			require'link.php';
		break;
	}
?>