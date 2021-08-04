<?php
    //Database Nasabah
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbnm = "db_banksampah";
    $conn = mysqli_connect($host,$user,$pass,$dbnm);
    mysqli_select_db($conn, $dbnm);
?>