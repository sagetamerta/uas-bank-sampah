<?php
    //function show data
    require "../conf/fungsi.php";

    //tangkap keyword untuk di proses
    $keyword = $_GET["keyword"];

    // tampilkan data dari database
    $query = "SELECT * FROM tbl_nasabah
        WHERE
        nomor_rekening_nasabah LIKE '$keyword%'
    ";       

    // mulai query
     $nasabah = query($query)[0];
     var_dump($nasabah);
   

?>

<!-- Ini adalah file untuk tampilan transaksi ketika nomor rekening nasabah di ketik -->
<div id="nasabah">
    <div class="form-group">
        <label>3 kolom dibawah ini hanya display saja</label>
    </div>
    <div class="form-group">
        <label>Nama Nasabah</label>
        <input type="text" name="nama_nasabah" id="nama_nasabah" class="form-control" placeholder="Nama" value="<?= $nasabah["nama_nasabah"]; ?>" readonly="readonly">
    </div>
    <div class="form-group">
        <label>Alamat Nasabah</label>
        <input type="text" name="alamat_nasabah" id="alamat_nasabah" class="form-control" placeholder="Alamat" value="<?= $nasabah["alamat_nasabah"]; ?>" readonly="readonly">
    </div>
    <div class="form-group">
        <label>Nomor Telepon</label>
        <input type="text" name="telepon_nasabah" id="telepon_nasabah" class="form-control" placeholder="Telepon" value="<?= $nasabah["telepon_nasabah"]; ?>" readonly="readonly">
    </div>
</div>
