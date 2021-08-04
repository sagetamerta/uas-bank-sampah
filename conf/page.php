<?php
if(isset($_GET['page'])){
  $page = $_GET['page'];
switch ($page) {
// Beranda
  case 'data_nasabah':
    include 'pages/nasabah/data_nasabah.php';
    break;
  case 'tambah_nasabah':
    include 'pages/nasabah/tambah_nasabah.php';
    break;
  case 'ubah_nasabah';
    include 'pages/nasabah/ubah_nasabah.php';
    break;
  case 'mulai_transaksi';
    include 'pages/transaksi/transaksi.php';
    break;
  case 'riwayat_transaksi';
    include 'pages/transaksi/riwayat_transaksi.php';
    break;
  case 'ubah_transaksi';
    include 'pages/transaksi/ubah_transaksi.php';
    break;
  
  }
}else{
    include "pages/beranda.php";
  }
?>