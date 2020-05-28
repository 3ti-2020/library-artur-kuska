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
        <div class="item ia">Ins, del, php - Artur Kuśka</div>
        <div class="item ib">
            <div class="ins">
                <div class="inst">

                    <form action='ins-tyt.php' method='post' class='insercik'>
                            <input type='text' name='tytul'  class='insercik'placeholder="Insert tytuł">
                            <input type='submit' value = 'DODAJ'>
                    </form>


                </div>

                <div class="inst">
                    <form action='ins-aut.php' method='post' class='insercik'>
                            <input type='text' name='imie' class='insercik' placeholder="Insert imię">
                            <input type='text' name='nazwisko'  class='insercik' placeholder="Insert nazwisko">
                            <input type='submit' value = 'DODAJ'>
                    </form>
                </div>

                   
                <div class="inst">

                    <?php
                        $ser = "localhost";
                        $use = "root";
                        $pass = "";
                        $db = "library";
                        
                        $conn = new mysqli($ser, $use, $pass, $db);

                        $res2 = $conn->query("SELECT * from autorzy");
            
                        echo("<form action='ins-para.php' method='POST' class='insercik'>
                            <select name='wybrany-autor'>");

                        while($row=$res2->fetch_assoc() ){
                            echo("<option value='".$row['id_autor']."'>".$row['imie']." ".$row['nazwisko']."</option>");
                        }
                        echo("</select>");

                        $res3 = $conn->query("SELECT * FROM tytuly");

                        echo("<select name='wybrany-tytul'>");
                        while($row=$res3->fetch_assoc() ){
                            echo("<option value='".$row['id_tyt']."'>".$row['tytul']."</option>");
                        }
                        echo("</select>");

                        echo("<input type='submit' value='DODAJ'>");
                        echo("</form>");

                    ?>

                </div>
            </div>

            <div class="del">
                <div class="delt">

                    <?php
                        $ser = "localhost";
                        $use = "root";
                        $pass = "";
                        $db = "library";
                        
                        $conn = new mysqli($ser, $use, $pass, $db);

                        $res4 = $conn->query("SELECT * from autorzy");

                        echo("<form action='del-aut.php' method='POST' class='insercik'>
                            <select name='id_autor'>");

                        while($row=$res4->fetch_assoc() ){
                            echo("<option value='".$row['id_autor']."'>".$row['imie']." ".$row['nazwisko']."</option>");
                        }
                        echo("</select>");

                        echo("<input type='submit' value='USUŃ'>");
                        echo("</form>");

                    ?>
                </div>

                <div class="delt">
                    <?php
                        $ser = "localhost";
                        $use = "root";
                        $pass = "";
                        $db = "library";
                        
                        $conn = new mysqli($ser, $use, $pass, $db);

                        $res5 = $conn->query("SELECT * FROM tytuly");

                        echo("<form action='del-tyt.php' method='POST' class='insercik'>
                            <select name='id_tyt'>");

                        while($row=$res5->fetch_assoc() ){
                            echo("<option value='".$row['id_tyt']."'>".$row['tytul']."</option>");
                        }
                        echo("</select>");

                        echo("<input type='submit' value='USUŃ'>");
                        echo("</form>");

                    ?>
                </div>
            </div>
        </div>
        <div class="item ic">
            <?php

                $ser = "localhost";
                $use = "root";
                $pass = "";
                $db = "library";

                $conn = new mysqli($ser, $use, $pass, $db);

                $res = $conn->query("SELECT id as idt, imie, nazwisko, tytul, ISBN FROM id, autorzy, tytuly WHERE id.id_tyt=tytuly.id_tyt and id.id_autor=autorzy.id_autor");

                echo("<table border=1>
                    <tr>
                    <th>Usuń</th>
                    <th>Id książki</th>
                    <th>Imię</th>
                    <th>Nazwisko</th>
                    <th>Tytuł</th>
                    <th>ISBN</th>
                    </tr>");

                while($row = $res->fetch_assoc()){
                    echo("
                    <tr>
                    <td>
                        <form action='del-id.php' method='post'>
                            <input class='dilit' type='hidden' name='id' value='".$row['idt']."'>
                            <input type='submit' value = 'USUŃ'>
                        </form>
                    </td>
                    <td>".$row['idt']."</td>
                    <td>".$row['imie']."</td>
                    <td>".$row['nazwisko']."</td>
                    <td>".$row['tytul']."</td>
                    <td>".$row['ISBN']."</td>
                    </tr>");
                }

                echo("</table>");

            ?>
        </div>
    </div>
    
</body>
</html>