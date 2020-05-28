<?php
    $ser = "localhost";
    $use = "root";
    $pass = "";
    $db = "library";

    $conn = new mysqli($ser, $use, $pass, $db);

    $sql = "DELETE FROM `autorzy` WHERE `autorzy`.`id_autor`=".$_POST['id_autor']." ";

    mysqli_query($conn, $sql);

    header("location:http://localhost/lib/idx.php")

?>