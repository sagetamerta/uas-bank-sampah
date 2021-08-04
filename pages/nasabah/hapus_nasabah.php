<?php
    include "../../conf/conn.php";
    global $conn;
// script  terubah
    $id = $_GET["id"];

    $query = "DELETE FROM tbl_nasabah
                 WHERE id_nasabah = $id/*id auto increment*/";

    if(!mysqli_query($conn, $query)){
        die(mysqli_error);
    }
    else{
        echo '<script>alert("Data Berhasil Dihapus !!!");
        window.location.href="../../index.php?page=data_nasabah"</script>';
    }
?>