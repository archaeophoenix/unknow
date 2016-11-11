<!doctype html>
<html>
<head>
        <script type="text/javascript" src="jquery.js"></script>
        <script type="text/javascript">
                $(document).ready(function(){
                        var mycars = [{name:'Susita', ye:'hehe'}, {name:'BMW', ye:'haha'}];
                        var e="";
                        for (i in mycars){
                                e+=("<li>"+ mycars[i].name +" "+ mycars[i].ye +"</li>");
                        }
                        $('#ok').html(e);
                });
        </script>
</head>
<body>
        <ul id="ok"></ul>
</body>
</html>
