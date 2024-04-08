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
          <h1>Edit  Data Batas Wilayah Desa </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="../index/index.php">Home</a></li>
            <li class="breadcrumb-item active">Edit Data Batas Wilayah  Desa</li>
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
          <div class="card card-warning">
            <div class="card-header">
              <h3 class="card-title">Edit Data Batas Wilayah Desa</h3>
            </div>
            <!-- /.card-header -->

<div class="card-body">


<?php
include '../../config/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Check if the ID parameter is set in the URL
    if (isset($_GET["id"])) {
        $id_batas_wilayah = $_GET["id"];

        // Fetch data for the specified ID
        $result = mysqli_query($conn, "SELECT * FROM batas_wilayah WHERE id_batas_wilayah = $id_batas_wilayah");

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_array($result);
                ?>
    <form action="update_script.php" method="post">
        <!-- Input fields for each database column -->

        <div class="col">
            <input type="text" class="form-control" name="id_batas_wilayah" value="<?php echo $row['id_batas_wilayah']; ?>" hidden required>
            <label for="utara" class="form-label">Utara</label>
            <input type="text" class="form-control" id="utara" name="utara" value="<?php echo $row['utara']; ?>" required>
        </div>
        <div class="col">
            <label for="selatan" class="form-label">Selatan</label>
            <input type="text" class="form-control" id="selatan" name="selatan" value="<?php echo $row['selatan']; ?>"  required>
        </div>
        <div class="col">
            <label for="timur" class="form-label">Timur</label>
            <input type="text" class="form-control" id="timur" name="timur" value="<?php echo $row['timur']; ?>"  required>
        </div>
        <div class="col">
            <label for="barat" class="form-label">Barat</label>
            <input type="text" class="form-control" id="barat" name="barat" value="<?php echo $row['barat']; ?>"  required>
            <button type="submit" class="btn btn-warning mt-2">Update</button>
            <a href="batas_wilayah.php" class="btn btn-danger mt-2">Cancel</a>
        </div>


    </form>

    <?php
            } else {
                echo "Desa not found";
            }
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "ID not specified in the URL";
    }
} else {
    echo "Invalid request method";
}

// Close the database connection
mysqli_close($conn);
?>


</div>

</div>
</div>
</div>
</section>
</div>

<?php
include '../footer.php';
?>
