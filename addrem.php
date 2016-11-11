<?php 
if(isset($_POST['submit'])){
        $a=$_POST['input'];
        $b=$_POST['select'];
       for($i=0;$i<count($a);$i++){
        echo $a[$i]." ".$b[$i]."<br/>";
       }
}
?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<script src="jquery.min.js" type="text/javascript"></script>

<script type="text/javascript">

$(function() {

	var i = $('p').size() ;

	$('.add').click(function() {
		$('<p><input type="text" name="input[]"/><select name="select[]"><option value=1>1</option><option value=2>2</option></select></p>').appendTo('#inputs');
		i++;
	});

	$('.remove').click(function() {
		if(i > 1) {
			$('p:last').remove();
			i--;
		}
	});
	
	$('.reset').click(function() {
		while(i > 1) {
			$('p:last').remove();
			i--;
		}
	});
	
});
</script>
</head>
<body>
<a href="#" class="add">add</a> 
<a href="#" class="remove">rem</a>
<a href="#" class="reset">res</a>
<form method="post" action="">
<div id="inputs">
<p><input type="text" name="input[]"/><select name="select[]"><option value=1>1</option><option value=2>2</option></select></p></div>
<input type=submit name="submit"/>
</form>
</body>
</html>
