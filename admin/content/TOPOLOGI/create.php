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
          <h1>Edit Data Desa </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="../index/index.php">Home</a></li>
            <li class="breadcrumb-item active">Edit Penduduk</li>
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


<form action="insert_script.php" method="post">
        <!-- Input fields for each database column -->

        <div class="col">
            <label for="jenis_topologi" class="form-label">Jenis Topologi Desa</label>
            <input type="text" class="form-control" id="jenis_topologi" name="jenis_topologi" required>
            </div>
        <div class="col">
            <label for="jumlah" class="form-label">Jumlah Topologi</label>
            <input type="text" class="form-control" id="jumlah" name="jumlah" required>
            <button type="submit" class="btn btn-primary mt-2">Save</button>
            <a href="topologi.php" class="btn btn-danger mt-2">cancel</a>
        </div>


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
