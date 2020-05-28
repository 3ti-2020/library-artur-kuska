<?php
    $ser = "localhost";
    $use = "root";
    $pass = "";
    $db = "library";

    $conn = new mysqli($ser, $use, $pass, $db);

    $sql = "DELETE FROM `id` WHERE `id`.`id`=".$_POST['id']." ";
    
    mysqli_query($conn, $sql);

    header("location:http://localhost/lib/idx.php")

?>