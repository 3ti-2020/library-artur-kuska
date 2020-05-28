<?php

    $ser = "localhost";
    $use = "root";
    $pass = "";
    $db = "library";

    $conn = new mysqli($ser, $use, $pass, $db);

    $sql = "INSERT INTO `autorzy`(`imie`, `nazwisko`) VALUES ('".$_POST['imie']."','".$_POST['nazwisko']."')";

    echo("<li>".$sql);

    mysqli_query($conn, $sql);

    mysqli_close($conn);

    header("location:http://localhost/lib/idx.php")

?>