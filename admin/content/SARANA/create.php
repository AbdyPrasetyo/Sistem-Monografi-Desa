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
          <h1>Create  Data Sarana Prasarana Desa </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="../index/index.php">Home</a></li>
            <li class="breadcrumb-item active">Create Data Sarana Prasarana Desa</li>
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
              <h3 class="card-title">Create Data Sarana Prasarana Desa</h3>
            </div>
            <!-- /.card-header -->

<div class="card-body">


<form action="insert_script.php" method="post">
        <!-- Input fields for each database column -->


            <label for="sarana_desa" class="form-label">Sarana Prasarana Desa</label>
            <input type="text" class="form-control" id="sarana_desa" name="sarana_desa" required>

            <label for="jumlah" class="form-label">Jumlah Sarana Prasarana</label>
            <input type="text" class="form-control" id="jumlah" name="jumlah" required>



        <button type="submit" class="btn btn-primary mt-2">Submit</button>
        <a href="sarana_desa.php" class="btn btn-danger mt-2">Cancel</a>
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
