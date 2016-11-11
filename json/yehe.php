<script src="jquery.js"></script>
<input type="text" class="ok">
<input type="text" class="ok">
<input type="text" class="ok">
<input type="text" class="ok">
<script type="text/javascript">
$(function (){
	var total = 0 ;
	var data = new Array();
	$('.ok').change(function(){
		$(this).each(function(i){
			data[i] = parseInt($(this).val());
			total += data[i];
		});
		console.log(total);
	});
});
</script>