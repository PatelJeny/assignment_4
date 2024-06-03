<!DOCTYPE html>
<html>
<head>
    <style>
        table {
           
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
        }

       
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <table id="myTable">
        <tr>
            <td>Row 1, Cell 1</td>
            <td>Row 1, Cell 2</td>
        </tr>
        <tr>
            <td>Row 2, Cell 1</td>
            <td>Row 2, Cell 2</td>
        </tr>
        <tr>
            <td>Row 3, Cell 1</td>
            <td>Row 3, Cell 2</td>
        </tr>
        <tr>
            <td>Row 4, Cell 1</td>
            <td>Row 4, Cell 2</td>
        </tr>
        <tr>
            <td>Row 5, Cell 1</td>
            <td>Row 5, Cell 2</td>
        </tr>
    </table>

    <script>
        $(document).ready(function(){
           
            $("#myTable tr:even").css("color", "green");

            $("#myTable tr:odd").css("color", "blue");
        });
    </script>
</body>
</html>
