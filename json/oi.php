<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<script src="jquery.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('#textbox').keyup(function (e) {
		alert(e.keyCode);
	});
	// $("#container").animate({ scrollTop: $('#container')[0].scrollHeight}, 1000);
	// alert($("#container").height());
	// alert($('#container')[0].scrollHeight);
	$('#container').scrollTop($('#container')[0].scrollHeight);
});
</script>
<body>
<input type="text" name="" id="textbox" maxlength="30" />
<div id="container" style="max-height:100; overflow:auto">asdf<br>
sdf<br>
sadfsad<br>
fsadfsd<br>
f<br>
sadf<br>
fsadfsd<br>
sadf<br>
as<br>
df<br>
df<br>
df<br>
asdf<br></div>
</body>
</html>
