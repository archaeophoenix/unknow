<!doctype html>
<html>
<head>
        <script type="text/javascript" src="jquery.js"></script>
        <script type="text/javascript">
                $(document).ready(function(){
                        var s="";
                        var name=$('#name').val();
                        var pass=$('#pass').val();
                        $.ajax({
                                type : 'GET',
                                dataType:'json',
                                data:"name="+name+"&pass="+pass,
                                url:"o2.php",
                                success: function(b){
                                        for (i in b) {
                                                s+=("<li>"+b[i].name+" "+b[i].pass+"</li>");
                                        };
                                        $('#ok').html(s);
                                }
                        });
                });
        </script>
</head>
<body>
        <div id="val"></div>
        <ul id="ok"></ul>
        <form id="form" method="post">
        <table>
                <tr><td>name</td><td><input type="text" id="name" name="name" value="name" /></td></tr>
                <tr><td>pass</td><td><input type="text" id="pass" name="pass" value="pass" /></td></tr>
        </table>
        <input type="submit" />
        </form>
</body>
</html>
