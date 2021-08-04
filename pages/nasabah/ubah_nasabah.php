<?php
  // file fungsi (sudah ada file koneksi)
  include "conf/fungsi.php";
  // ambil data id di URL
  $id = $_GET["id"];

  //query data user berdasarkan id
  $nasabah = query("SELECT * FROM tbl_nasabah WHERE id_nasabah= $id")[0];
  
  //Cek apakah data berhasil di submit atau tidak
  if(isset($_POST["submit"])){
    if(ubah($_POST) > 0){
        echo "
        <script>
          alert('data berhasil diubah!');
          
        </script>
        ";
    }else{
        echo "
        <script>
          alert('data gagal diubah!');
          
        </script>
        "; 
    }
}
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
      UBAH NASABAH
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">UBAH NASABAH</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="pages/nasabah/ubah_nasabah_proses.php">
              <div class="box-body">
                <input type="hidden" name="id" value="<?= $nasabah["id_nasabah"]; ?>">
                <div class="form-group">
                  <label>Nama Nasabah</label>
                  <input type="text" name="nama_nasabah" class="form-control" placeholder="Nama" value="<?= $nasabah["nama_nasabah"]; ?>" required>
                </div>
                <div class="form-group">
                  <label>Telepon Nasabah</label>
                  <input type="text" name="telepon_nasabah" class="form-control" placeholder="Telepon" value="<?= $nasabah["telepon_nasabah"]; ?>" required>
                </div>
                <div class="form-group">
                  <label>Alamat Nasabah</label>
                  <input type="text" name="alamat_nasabah" class="form-control" placeholder="Alamat" value="<?= $nasabah["alamat_nasabah"]; ?>" required>
                </div>
                <div class="form-group">
                  <label>Nomor Rekening Nasabah</label>
                  <input type="text" name="nomor_rekening_nasabah" class="form-control" placeholder="Nomor Rekening" value="<?= $nasabah["nomor_rekening_nasabah"]; ?>" required>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" title="Simpan Data"> <i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->
</body>
</html>