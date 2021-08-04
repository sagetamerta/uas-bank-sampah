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
      TAMBAH NASABAH
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">TAMBAH NASABAH</li>
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
            <form role="form" method="post" action="pages/nasabah/tambah_nasabah_proses.php">
              <div class="box-body">
                <div class="form-group">
                  <label>Nama Nasabah</label>
                  <input type="text" name="nama_nasabah" class="form-control" placeholder="Nama" required>
                </div>
                <div class="form-group">
                  <label>Telepon Nasabah</label>
                  <input type="text" name="telepon_nasabah" class="form-control" placeholder="Telepon" required>
                </div>
                <div class="form-group">
                  <label>Alamat Nasabah</label>
                  <input type="text" name="alamat_nasabah" class="form-control" placeholder="Alamat" required>
                </div>
                <div class="form-group">
                  <label>Nomor Rekening Nasabah</label>
                  <input type="text" name="nomor_rekening_nasabah" class="form-control" placeholder="Nomor Rekening" required>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" title="Simpan Data"> <i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
                <button type="reset" class="btn btn-danger" title="Reset">Reset</button>
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