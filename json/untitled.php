<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery.trim demo</title>
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
</head>
<body>
 
      <pre id="original"></pre>
      <pre id="trimmed"></pre>
 
<script>
  var str = "         lots of spaces before and after         ";
  var st = "                  ";
  $("#original").html("Original String: '" + str + "'");
  $("#trimmed").html("$.trim()'ed: '" + $.trim(str) + "'");
  // if ($.trim(st)=='') {
  //   alert(0);
  // };
</script>
 
</body>
</html>