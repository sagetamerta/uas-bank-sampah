<?php
include "../../conf/fungsi.php";

// script asli otw ubah
if($_POST)
{
    global $conn;
    // id transaksi auto incerement
    $nomor_rekening_nasabah = mysqli_real_escape_string($conn, $_POST['nomor_rekening_nasabah']) ;
    $jenis_sampah = mysqli_real_escape_string($conn, $_POST['jenis_sampah']);
    $berat_sampah = mysqli_real_escape_string($conn, $_POST['berat_sampah']) ;
    // $tanggal_transaksi = mysqli_real_escape_string($conn, $_POST['tanggal_transaksi']) ;

    // cek jenis sampah apa yang ditabung
    // sehingga bisa tau 'harga sampah

    switch($jenis_sampah){
        case 'Kertas':
            // do Something for kertas
            $harga_sampah = 4000;
        break;
        case 'Plastik':
            // do Something for plastik
            $harga_sampah = 3000;
        break;
        case 'Kaca':
            // do Something for kaca
            $harga_sampah = 3500;
        break;
        case 'Logam':
            // do Something for logam
            $harga_sampah = 7500;
        break;
        default:
            // Something went wrong or form has been tampered.
            echo '<script>alert("Jenis sampah harus dipilih !");
            window.location.href="../../index.php?page=data_nasabah"</script>';
        }

    // hitung total transaksi dan menjadi tambahan saldo
    $total_transaksi = $berat_sampah * $harga_sampah;
    $now = date('d-m-Y H:i:s');
        
    $saldo = "UPDATE tbl_nasabah SET
            saldo_nasabah = '$total_transaksi' + saldo_nasabah
            WHERE nomor_rekening_nasabah = '$nomor_rekening_nasabah'
        ";
         if(!mysqli_query($conn, $saldo)){
             die(mysqli_error);
         }

    $query = "INSERT INTO tbl_transaksi 
            VALUES
            ('','$nomor_rekening_nasabah','$jenis_sampah','$berat_sampah','$now',
            '$total_transaksi')    
        ";
        if(!mysqli_query($conn, $query)){
            die(mysqli_error);
        }
        else{
            echo '<script>alert("Data Transaksi Berhasil !!!");
            window.location.href="../../index.php?page=riwayat_transaksi"</script>';
        }
}
?>