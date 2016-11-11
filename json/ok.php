<!doctype html>
<html>
<head>
        <script type="text/javascript" src="jquery.js"></script>
        <script type="text/javascript">
                $(document).ready(function(){
                        /*$('#val').load('o.php');
                        $.getJSON('o.php',function(data){
                                $.each(data, function(i, val){
                                        $("#val").append(val + " ");
                                });
                        });*/
                        $('#form').submit(function(){
                                $.post('o.php',$('#form').serialize(),function(value){
                                        $('#val').html(value);
                                        var e="";
                                        $.getJSON('o.php',function(data){
                                                // $.each(data, function(i, val){
                                                //         $("#val").append(val + " ");
                                                // });
                                                for (i in data) {
                                                        alert(i);
                                                        e+=("<li>"+data[i].name + "</li>");
                                                };
                                        });
                                        $('#o').html(e);
                                        $(':text').val('');
                                });
                                return false;
                        });
                });
        </script>
</head>
<body>  
        <ul id="o"></ul>
        <div id="val"></div>
        <form id="form" method="post">
        <table>
                <tr><td>name</td><td><input type="text" name="name" /></td></tr>
                <tr><td>pass</td><td><input type="text" name="pass" /></td></tr>
        </table>
        <input type="submit" />
        </form>
</body>
</html>
