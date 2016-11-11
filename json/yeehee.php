<script src="jquery.js"></script>
<input type="checkbox" class="ok" value="1">
<input type="checkbox" class="ok" value="1">
<input type="checkbox" class="ok" value="1">
<input type="checkbox" class="ok" value="1">
<script type="text/javascript">
$(function (){
	var data = new Array();
	$('.ok').click(function(){
		var total = 0 ;
		$('.ok:checkbox:checked').each(function(i){
			data[i] = parseInt($(this).val());
			total += data[i];
		});
		console.log(total);
	});
});
</script>