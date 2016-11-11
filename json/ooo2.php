<!doctype html>
<html>
<head>
        <script type="text/javascript" src="jquery.js"></script>
        <script type="text/javascript">
                function data(){
                        var s="";
                        $.ajax({
                                type : 'GET',
                                dataType:'json',
                                url:"o2.php",
                                success: function(b){
                                        for (i in b) {
                                                s+=("<li>"+b[i].aa+" "+b[i].bb+" "+b[i].cc+"</li>");
                                        };
                                        $('#ok').html(s);
                                }
                        });
                }
                $(document).ready(function(){
                        data();
                        setInterval(function() {
                        data();
                        }, 3000);
                });
        </script>
</head>
<body>
        <ul id="ok"></ul>
</body>
</html>
