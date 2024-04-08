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
            <h1>Tambah Pengumuman</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../index/index.php">Home</a></li>
              <li class="breadcrumb-item active">Tambah Pengumuman</li>
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
                <h3 class="card-title">Pengumuman Padukuhan Combongan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="simpan-pengumuman.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label>Judul Pengumuman</label>
                    <input type="text" class="form-control" name="judul" placeholder="Judul Pengumuman">
                  </div>
                  <div class="form-group">
                    <label>Isi Pengumuman</label>
                    <textarea class="form-control" name="isi">
                    </textarea>

                    <div class="form-group">
                    <label>Tanggal Post</label>
                    <input type="date" class="form-control" name="tgl_post" placeholder="Tanggal Posting">
                  </div>
                  

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