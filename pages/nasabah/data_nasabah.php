<?php
    //function show data
    require "conf/fungsi.php";
    // tampilkan data dari database
    $nasabah = query("SELECT * FROM tbl_nasabah");
    
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
      DATA NASABAH
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">DATA NASABAH</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header">
          <a href="index.php?page=tambah_nasabah" class="btn btn-primary" role="button" title="Tambah Data"><i class="glyphicon glyphicon-plus"></i> Tambah </a>
          
          <!-- SEARCH FORM -->
          <form class="navbar-form navbar-right" role="search" method="POST">
            <div class="form-group">
            <label> Pencarian </label>
              <input type="text" class="form-control" autocomplete="off" name="keyword" id="keyword" placeholder="Cari Nasabah" ></button>
            </div>
          </form>

          </div>
            <div class="box-body table-responsive" id="tabel_cari">
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