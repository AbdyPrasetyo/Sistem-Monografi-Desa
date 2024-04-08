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
          <h1>Create  Jarak Pemerintahan </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="../index/index.php">Home</a></li>
            <li class="breadcrumb-item active">Create Data Jarak Pemerintahan</li>
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
              <h3 class="card-title">Create Data Jarak Pemerintahan</h3>
            </div>
            <!-- /.card-header -->

<div class="card-body">

<form action="insert_script.php" method="post">
        <!-- Input fields for each database column -->

        <div class="col">
            <label for="kecamatan" class="form-label">Kecamatan</label>
            <input type="text" class="form-control" id="kecamatan" name="kecamatan" required>
        </div>
        <div class="col">
            <label for="kabupaten" class="form-label">Kabupaten Kota</label>
            <input type="text" class="form-control" id="kabupaten" name="kabupaten" required>
        </div>
        <div class="col">
            <label for="provinsi" class="form-label">Provinsi</label>
            <input type="text" class="form-control" id="provinsi" name="provinsi" required>
        </div>

        <button type="submit" class="btn btn-primary mt-2">Save</button>
        <a href="jarak_pemerintahan.php" class="btn btn-danger mt-2">Cancel</a>
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
