<?php

    $ser = "localhost";
    $use = "root";
    $pass = "";
    $db = "library";

    $conn = new mysqli($ser, $use, $pass, $db);

    $sql = "INSERT INTO `id`(`id_autor`, `id_tyt`) VALUES ('".$_POST['wybrany-autor']."', '".$_POST['wybrany-tytul']."')";

    echo("<li>".$sql);

    mysqli_query($conn, $sql);

    mysqli_close($conn);

    header("location:http://localhost/lib/idx.php")

?>