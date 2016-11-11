<!doctype html>
<html>
<head>
        <script type="text/javascript" src="jquery.js"></script>
        <script type="text/javascript">
                $(document).ready(function(){
                        $('.form').submit(function(){
                                $.post('o.php',$('#form').serialize(),function(value){
                                        console.log(value);
                                });
                                return false;
                        });
                        $('#ok').click(function(){
                                $('.form').submit();
                        });
                });
        </script>
</head>
<body>  
        <ul id="o"></ul>
        <div id="val"></div>
        <form class="form" method="post">
        <table>
                <tr><td>name</td><td><input type="text" name="name" /></td></tr>
                <tr><td>pass</td><td><input type="text" name="pass" /></td></tr>
        </table>
        <input type="submit" />
        </form>

        <form class="form" method="post">
        <table>
                <tr><td>name</td><td><input type="text" name="name" /></td></tr>
                <tr><td>pass</td><td><input type="text" name="pass" /></td></tr>
        </table>
        <input type="submit" />
        </form>

        <button id="ok">ok</button>
</body>
</html>
