<!doctype html>
<html>
<head>
        <script type="text/javascript" src="jquery.js"></script>
        <script type="text/javascript">
                $(document).ready(function(){
                        $('#form').submit(function() {
                                var url = $(this).attr('action');
                                var data = $(this).serialize();
                                $.post(url, data, function(o){
                                        $('#o').html(o);
                                });
                        return false;
                        });
                });
        </script>
</head>
<body>  
        <div id="o"></div>
        <form id="form" method="post" action="o.php">
        <table>
                <tr><td>name</td><td><input type="text" name="name" id="name" /></td></tr>
                <tr><td>pass</td><td><input type="text" name="pass" id="pass" /></td></tr>
        </table>
        <input type="submit" />
        </form>
</body>
</html>
