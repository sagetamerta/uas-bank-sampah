<?php
     //function show data
     require "../conf/fungsi.php";

     //tangkap keyword untuk di proses
     $keyword = $_GET["keyword"];
     
    // tampilkan data dari database
    $query = "SELECT * FROM tbl_nasabah
            WHERE
            nama_nasabah LIKE '%$keyword%' OR
            alamat_nasabah LIKE '%$keyword%'
    ";       
    
    // mulai query
     $nasabah = query($query);
?>

<!-- Ini adalah file untuk tampilan tabel hasil pencarian -->
              <table id="nasabah" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>NAMA</th>
                  <th>TELEPON</th>
                  <th>ALAMAT</th>
                  <th>SALDO</th>
                  <th>NO REK</th>
                  <th>AKSI</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                
                <?php $i = 1;?>
                <?php foreach($nasabah as $row) :?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $row["nama_nasabah"]; ?></td>
                    <td><?= $row["telepon_nasabah"]; ?></td>
                    <td><?= $row["alamat_nasabah"]; ?></td>
                    <td>Rp. <?= number_format($row["saldo_nasabah"],2,",",".") ?></td>
                    <td><?= $row["nomor_rekening_nasabah"]; ?></td>
                  <td>
                    <a href="index.php?page=ubah_nasabah&id=<?= $row['id_nasabah'];?>" class="btn btn-success" role="button" title="Ubah Data"><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="pages/nasabah/hapus_nasabah.php?id=<?= $row['id_nasabah'];?>" class="btn btn-danger" role="button" title="Hapus Data"><i class="glyphicon glyphicon-trash"></i></a>
                  </td>
                </tr>
                <?php $i++ ?>
                <?php endforeach; ?>

                </tbody>
              </table>