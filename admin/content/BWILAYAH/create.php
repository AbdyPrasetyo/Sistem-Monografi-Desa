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
          <h1>Create  Data Batas Wilayah Desa </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="../index/index.php">Home</a></li>
            <li class="breadcrumb-item active">Create Data Batas Wilayah  Desa</li>
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
              <h3 class="card-title">Create Data Batas Wilayah Desa</h3>
            </div>
            <!-- /.card-header -->

<div class="card-body">


<form action="insert_script.php" method="post">
        <!-- Input fields for each database column -->

        <div class="col">
            <label for="utara" class="form-label">Utara</label>
            <input type="text" class="form-control" id="utara" name="utara" required>
        </div>
        <div class="col">
            <label for="selatan" class="form-label">Selatan</label>
            <input type="text" class="form-control" id="selatan" name="selatan" required>
        </div>
        <div class="col">
            <label for="timur" class="form-label">Timur</label>
            <input type="text" class="form-control" id="timur" name="timur" required>
        </div>
        <div class="col">
            <label for="barat" class="form-label">Barat</label>
            <input type="text" class="form-control" id="barat" name="barat" required>
            <button type="submit" class="btn btn-primary mt-2">Save</button>
            <a href="batas_wilayah.php" class="btn btn-danger mt-2">Cancel</a>
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
