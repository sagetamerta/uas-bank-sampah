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
      TRANSAKSI
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">TRANSAKSI</li>
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
            <form role="form" method="post" action="pages/transaksi/transaksi_proses.php">
              <div class="box-body">
              
                <div class="form-group">
                  <label>Nomor Rekening Nasabah</label>
                  <input type="number" name="nomor_rekening_nasabah" id="nomor_rekening_nasabah" class="form-control" min="0" oninput="validity.valid||(value='');" placeholder="Nomor Rekening" required>
                </div>
              <div id="nasabah">
                <div class="form-group">
                  <label>3 kolom dibawah ini hanya display saja</label>
                </div>
                <div class="form-group">
                  <label>Nama Nasabah</label>
                  <input type="text" name="nama_nasabah" class="form-control" placeholder="Nama" value="" readonly="readonly">
                </div>
                <div class="form-group">
                  <label>Alamat Nasabah</label>
                  <input type="text" name="alamat_nasabah" class="form-control" placeholder="Alamat" value="" readonly="readonly">
                </div>
                <div class="form-group">
                <label>Nomor Telepon</label>
                  <input type="text" name="telepon_nasabah" class="form-control" placeholder="Telepon" value="" readonly="readonly">
                </div>
              </div>
                <div class="form-group">
                <label>Jenis Sampah</label>
                <select name="jenis_sampah" id="jenis_sampah" class="form-control">
                  <option value="Kertas">Kertas</option>
                  <option value="Plastik">Plastik</option>
                  <option value="Kaca">Kaca</option>
                  <option value="Logam">Logam</option>
                </select>
                </div>
                <div class="form-group">
                <label>Berat Sampah (Kg)</label>
                    <input type="number" name="berat_sampah" class="form-control"  id="berat_sampah" min="0" oninput="validity.valid||(value='');" required>
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
<script src="js/script2.js"></script>  <!-- Javascript Ajax -->
</body>
</html>