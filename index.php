<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>BIBLIoteka</title>
</head>
<body>

    <div class="all">
        <div class="item ia">a</div>
        <div class="item ib">a</div>
        <div class="item ic">

            
            <?php

                $ser = "localhost";
                $use = "root";
                $pass = "";
                $db = "library";

                $conn = new mysqli($ser, $use, $pass, $db);

                $res = $conn->query("SELECT * FROM autorzy");

                echo("<table class='tabelka'>
                    <tr>
                    <th>Imię</th>
                    <th>Nazwisko</th>
                    <th>id</th>
                    </tr>");

                while($row = $res->fetch_assoc()){
                    echo("
                    <tr>
                    <td>".$row['imie']."</td>
                    <td>".$row['nazwisko']."</td>
                    <td>".$row['id']."</td>
                    <tr>");
                }

                echo("</table>");

            ?>
        </div>
    </div>
    
</body>
</html>