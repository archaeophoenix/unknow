<html>
<head>
    <title></title>
    <script type="text/javascript" language="javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <link type="text/css" rel="stylesheet" href="http://twitter.github.com/bootstrap/assets/css/bootstrap.css">
    <script type="text/javascript" language="javascript" src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.2.1/bootstrap.min.js"></script>
    <style>    
    #matrix td {
        width: 10px;
        height: 10px;
        border: 1px solid gray; 
        padding: 0px; 
    }
    </style>
<script>
function emptyRow() {
        var str;
        for (j = 0; j < 4; j++) {
            str += '<tr rel="tooltip" data-toggle="popover" title="" data-content="And here`s some amazing content. It`s very engaging. right?" role="button" data-original-title="A Title"><td>a</td></tr>';
        }
        return str;
    }
    $(document).ready(function () {
        $("#matrix tr:last").after(emptyRow());
        $("tr [rel=tooltip]").popover();

        $(".button").popover({html: true});
        $(".button").click(function(){
            $(this).popover();
            $(".my_popover").load('html.php')
        });
    });
    </script>
</head>
<body style="margin-top: 40px;">
<table id="matrix">
    <tr>
    </tr>
</table>
<a href="#" class="button" data-content="<div class='my_popover'></div>">Click</a>
<br>
<a href="#" class="button" data-content="<div class='my_popover'></div>">here</a>

</body>
</html>