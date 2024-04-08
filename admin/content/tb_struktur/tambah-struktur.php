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
          <h1>Tambah Struktur Organisasi</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="../index/index.php">Home</a></li>
            <li class="breadcrumb-item active">Tambah Struktur</li>
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
              <h3 class="card-title">Struktur Organisasi Padukuhan Combongan</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="simpan-struktur.php" method="POST" enctype="multipart/form-data">
              <div class="card-body">

              <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
              </div>
              <div class="form-group">
               <label>Jabatan</label>
               <select class="form-control select2" aria-label="Default select example" name="level" style="width: 100%;">
                <option selected>Pilih Jabatan</option>
                <?php
                include '../../config/koneksi.php';
                $no = 1;
                $Tampil = mysqli_query($conn, "SELECT * FROM  tb_jabatan ORDER BY id_jabatan asc");
                while ($data = mysqli_fetch_array($Tampil)){
                  ?>

                  <option value="<?= $data['level'] ?>"><?= $data['level'] ?></option>
                  <?php
                }
                ?>
   </select>
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
</section>
</div>

<?php
include '../footer.php';
?>
