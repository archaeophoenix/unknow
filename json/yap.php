<html>
<head>
	<title></title>
	<script src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#ye').click(function(){
				var p = $('#p').val();
				$('.p').val(p);
				var a = 0;
				var b = new Array();
				$('.ok').each(function(i){
					b[i] = parseInt($(this).val());
					a = a + b[i];

					var q = $('#q'+(i+1)).val();
					$('#p'+(i+1)).val(q);
				});
				console.log(a);
				console.log(b.length);
			});
		});
	</script>
</head>
<body>
	<input type='text' class='ok' id="q1" />
	<input type='text' class='ok' id="q2" />
	<input type='text' class='ok' id="q3" />
	<br>
	<input type='text' id="p1" />
	<input type='text' id="p2" />
	<input type='text' id="p3" />
	<br>
	<input type='text' id="p" value="2" />
	<br>
	<input type='text' class="p" />
	<input type='text' class="p" />
	<input type='text' class="p" />
	<button id="ye">ok?</button>
</body>
</html>