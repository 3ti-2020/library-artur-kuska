<?php
    $ser = "localhost";
    $use = "root";
    $pass = "";
    $db = "library";

    $conn = new mysqli($ser, $use, $pass, $db);

    $sql = "DELETE FROM `tytuly` WHERE `tytuly`.`id_tyt`=".$_POST['id_tyt']." ";

    mysqli_query($conn, $sql);

    header("location:http://localhost/lib/idx.php")

?>