<?php
    $ser = "localhost";
    $use = "root";
    $pass = "";
    $db = "library";

    $conn = new mysqli($ser, $use, $pass, $db);

    $ISBN = rand(100,999);

    $sql = "INSERT INTO `tytuly`(`tytul`, `ISBN`) VALUES ('".$_POST['tytul']."', $ISBN)";
    
    mysqli_query($conn, $sql);

    header("location:http://localhost/lib/idx.php")

?>