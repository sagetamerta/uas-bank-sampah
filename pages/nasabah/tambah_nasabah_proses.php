<?php
    include "../../conf/conn.php";

// script  terubah
    if($_POST)
    {
        global $conn;
        
        $nama_nasabah = mysqli_real_escape_string($conn, $_POST['nama_nasabah']);
        $telepon_nasabah = mysqli_real_escape_string($conn, $_POST['telepon_nasabah']);
        $alamat_nasabah = mysqli_real_escape_string($conn, $_POST['alamat_nasabah']);
        $nomor_rekening_nasabah = mysqli_real_escape_string($conn, $_POST['nomor_rekening_nasabah']);
        $query = "INSERT INTO tbl_nasabah
                    VALUES
                ('', '$nama_nasabah', '$telepon_nasabah',
                 '$alamat_nasabah','$nomor_rekening_nasabah','')
            ";
        if(!mysqli_query($conn, $query)){
            die(mysqli_error);
        }
        else{
            echo '<script>alert("Data Berhasil Ditambahkan !!!");
            window.location.href="../../index.php?page=data_nasabah"</script>';
        }
    }
?>