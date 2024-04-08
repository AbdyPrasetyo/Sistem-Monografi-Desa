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
          <h1>Tambah Data Desa </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="../index/index.php">Home</a></li>
            <li class="breadcrumb-item active">Tambah Penduduk</li>
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
              <h3 class="card-title">Tambah Data Desa</h3>
            </div>
            <!-- /.card-header -->

<div class="card-body">


<form action="insert.php" method="post">
        <!-- Input fields for each database column -->
        <div class="row mb-3">
        <div class="col-md-4">
            <label for="nama_desa" class="form-label">Nama Desa</label>
            <input type="text" class="form-control" id="nama_desa" name="nama_desa" required>
            </div>
        <div class="col-md-4">
            <label for="kelurahan" class="form-label">Kelurahan</label>
            <input type="text" class="form-control" id="kelurahan" name="kelurahan" required>
        </div>
        <div class="col-md-4">
            <label for="tahun_pembentukan" class="form-label">Tahun Pembentukan</label>
            <input type="number" class="form-control" id="tahun_pembentukan" name="tahun_pembentukan">
        </div>
        </div>


        <div class="row mb-3">
        <div class="col-md-4">
            <label for="dasar_hukum_pembentukan" class="form-label">Dasar Hukum Pembentukan</label>
            <input type="text" class="form-control" id="dasar_hukum_pembentukan" name="dasar_hukum_pembentukan">
        </div>

        <div class="col-md-4">
            <label for="nomor_kota_wilayah" class="form-label">Nomor Kota Wilayah</label>
            <input type="number" class="form-control" id="nomor_kota_wilayah" name="nomor_kota_wilayah">
        </div>

        <div class="col-md-4">
            <label for="kode_pos" class="form-label">Kode Pos</label>
            <input type="number" class="form-control" id="kode_pos" name="kode_pos">
        </div>
        </div>

  <div class="row mb-3">
        <div class="col-md-4">
            <label for="kecamatan" class="form-label">Kecamatan</label>
            <input type="text" class="form-control" id="kecamatan" name="kecamatan">
        </div>
        <!-- Add other input fields for each column -->
        <div class="col-md-4">
            <label for="kabupaten_kota" class="form-label">Kabupaten Kota</label>
            <input type="text" class="form-control" id="kabupaten_kota" name="kabupaten_kota">
        </div>

        <div class="col-md-4">
            <label for="provinsi" class="form-label">Provinsi</label>
            <input type="text" class="form-control" id="provinsi" name="provinsi">
        </div>
        </div>

        <div class="row mb-3">
        <div class="col-md-4">
            <label for="tingkat_perkembangan_desa" class="form-label">Tingkat Perkem yang desa</label>
            <input type="text" class="form-control" id="tingkat_perkembangan_desa" name="tingkat_perkembangan_desa">
        </div>

        <div class="col-md-4">
            <label for="luas_wilayah" class="form-label">Luas Wilayah</label>
            <input type="number" class="form-control" id="luas_wilayah" name="luas_wilayah">
        </div>

        <div class="col-md-4">
            <label for="umr_kabupaten" class="form-label">UMR Kabupaten</label>
            <input type="number" class="form-control" id="umr_kabupaten" name="umr_kabupaten">
        </div>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
        <a href="data_desa.php" class="btn btn-danger">cancel</a>
    </form>


</div>

</div>
</div>
</div>
</section>
</div>

<?php
include '../footer.php';
?>
