<?php
    include "../../conf/conn.php";
    global $conn;
// script  terubah
    $id = $_GET["id"];

    $query_saldo_awal = "SELECT saldo_nasabah FROM tbl_nasabah
    WHERE nomor_rekening_nasabah = ";

    $saldo_awal = $_POST('saldo_nasabah');


    // lagi mengerjakan hapus transaksi agar multi query
    // ketika hapus riwayat_transaksi saldo otomatis berkurang

    $saldo_akhir = $saldo_awal - 
    $query_saldo = "UPDATE tbl_nasabah SET
                 saldo_nasabah = ''
        ";

    $query = "DELETE FROM tbl_transaksi
                 WHERE id_transaksi = $id/*id auto increment*/";
    // ketika riwayat transaksi dihapus sesuai id transaksi
    // maka saldo berkurang sesuai nilai total_transaksi dari id transaksi


    if(!mysqli_query($conn, $query)){
        die(mysqli_error);
    }
    else{
        echo '<script>alert("Data Berhasil Dihapus !!!");
        window.location.href="../../index.php?page=riwayat_transaksi"</script>';
    }
?>