<?php
include '../header.php';
?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Galeri</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../index/index.php">Home</a></li>
              <li class="breadcrumb-item active">Tambah Galeri</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Galeri Padukuhan Combongan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="simpan-galeri.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">
            
                  <div class="form-group">
                    <label>Keterangan</label>
                    <textarea class="form-control" name="ket_foto">
                    </textarea>
                  </div>
                  <div class="form-group">
                    <a class="btn" title="Insert picture (or just drag &amp; drop)" id="pictureBtn"></a>
                    <input type="file" name="foto" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage">
                  </div>

                  <div class="item form-group">
                  	<p style="color: red;">Gambar Yang Diperbolehkan .PNG|.JPG|.JPEG</p>                  	
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <input type="submit" value="Simpan" name="" class="btn btn-primary">
                </div>
              </form>
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>
</section>
</div>

<?php
include '../footer.php';
?>