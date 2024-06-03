<!DOCTYPE html>
<html>
<head>
    <style>
        #box {
            width: 100px;
            height: 100px;
            background-color: red;
            display: none; 
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <button id="fadeInBtn">Fade In</button>
    <button id="fadeOutBtn">Fade Out</button>
    <div id="box"></div>

    <script>
        $(document).ready(function(){
            $("#fadeInBtn").click(function(){
                $("#box").fadeIn(1000); 
            });
            $("#fadeOutBtn").click(function(){
                $("#box").fadeOut(1000); 
            });
        });
    </script>
</body>
</html>
