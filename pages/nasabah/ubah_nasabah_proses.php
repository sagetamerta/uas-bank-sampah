<?php
include "../../conf/conn.php";

// script asli otw ubah
if($_POST)
{
    global $conn;
    $id = $_POST['id'];
    $nama_nasabah = mysqli_real_escape_string($conn, $_POST['nama_nasabah']);
    $telepon_nasabah = mysqli_real_escape_string($conn, $_POST['telepon_nasabah']);
    $alamat_nasabah = mysqli_real_escape_string($conn, $_POST['alamat_nasabah']);
    $nomor_rekening_nasabah = mysqli_real_escape_string($conn, $_POST['nomor_rekening_nasabah']);
    
    $query = "UPDATE tbl_nasabah SET
            nama_nasabah='$nama_nasabah',
            telepon_nasabah='$telepon_nasabah',
            alamat_nasabah='$alamat_nasabah',
            nomor_rekening_nasabah='$nomor_rekening_nasabah'
            WHERE id_nasabah ='$id'";
        if(!mysqli_query($conn, $query)){
            die(mysqli_error);
        }
    else{
        echo '<script>alert("Data Berhasil Diubah !!!");
        window.location.href="../../index.php?page=data_nasabah"</script>';
    }
}
?>