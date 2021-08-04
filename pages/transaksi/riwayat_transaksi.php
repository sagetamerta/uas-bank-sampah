<?php
    //function show data
    require "conf/fungsi.php";
    // tampilkan data dari database
    $transaksi = query("SELECT * FROM tbl_transaksi"); //inget diganti tampil riwayat transaksi
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      RIWAYAT TRANSAKSI
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">RIWAYAT TRANSAKSI</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header">
          <a href="index.php?page=mulai_transaksi" class="btn btn-primary" role="button" title="Tambah Data"><i class="glyphicon glyphicon-plus"></i> Mulai Transaksi</a>
          
          <!-- SEARCH FORM
          <form class="navbar-form navbar-right" role="search" method="POST">
            <div class="form-group">
              <input type="text" class="form-control" autocomplete="off" name="keyword" id="keyword" placeholder="Cari Nasabah">
            </div>
          </form> -->

          </div>
            <div class="box-body table-responsive" id="tabel_cari">
              <table id="nasabah" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>Nomor Rekening</th>
                  <th>Jenis Sampah</th>
                  <th>Berat Sampah</th>
                  <th>Tanggal Transaksi</th>
                  <th>Total Transaksi</th>
                </tr>
                </thead>
                <tbody>
                
                <?php $i = 1;?>
                <?php foreach($transaksi as $row) :?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $row["nomor_rekening_nasabah"]; ?></td>
                    <td><?= $row["jenis_sampah"]; ?></td>
                    <td><?= $row["berat_sampah"]; ?> Kg</td>
                    <td><?= $row["tanggal_transaksi"]; ?></td>
                    <td>Rp. <?= number_format($row["total_transaksi"],2,",",".") ?></td>
                  <!-- <td>
                    <a href="pages/transaksi/hapus_transaksi.php?id=<?= $row['id_transaksi'];?>" class="btn btn-danger" role="button" title="Hapus Data"><i class="glyphicon glyphicon-trash"></i></a>
                  </td> -->
                </tr>
                <?php $i++ ?>
                <?php endforeach; ?>

                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->

<!-- Javascript Datatable -->
<script type="text/javascript">
  $(document).ready(function(){
    $('#nasabah').DataTable();
  });
</script>
<script src="js/script.js"></script>  <!-- Javascript Ajax -->


</body>
</html>