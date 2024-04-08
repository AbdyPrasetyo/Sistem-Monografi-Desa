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
          <h1>Edit  Data Data Jarak Pemerintahan Desa </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="../index/index.php">Home</a></li>
            <li class="breadcrumb-item active">Edit Jarak Pemerintahan Desa</li>
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
              <h3 class="card-title">Edit Data Jarak pemerintahan</h3>
            </div>
            <!-- /.card-header -->

<div class="card-body">

<?php
include '../../config/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Check if the ID parameter is set in the URL
    if (isset($_GET["id"])) {
        $id_jarak_pemerintahan = $_GET["id"];

        // Fetch data for the specified ID
        $result = mysqli_query($conn, "SELECT * FROM jarak_pemerintahan WHERE id_jarak_pemerintahan = $id_jarak_pemerintahan");

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_array($result);
                ?>
    <form action="update_script.php" method="post">
        <!-- Input fields for each database column -->


            <input type="text" class="form-control" name="id_jarak_pemerintahan" value="<?php echo $row['id_jarak_pemerintahan']; ?>" hidden required>
            <label for="kecamatan" class="form-label">Kecamatan</label>
            <input type="number" class="form-control" id="kecamatan" name="kecamatan" value="<?php echo $row['kecamatan']; ?>" required>


            <label for="kabupaten" class="form-label">Kabupaten</label>
            <input type="number" class="form-control" id="kabupaten" name="kabupaten" value="<?php echo $row['kabupaten']; ?>"  required>


            <label for="provinsi" class="form-label">Provinsi</label>
            <input type="number" class="form-control" id="provinsi" name="provinsi" value="<?php echo $row['provinsi']; ?>"  required>


        <button type="submit" class="btn btn-warning mt-2 text-white">Update</button>
        <a href="jarak_pemerintahan.php" class="btn btn-danger mt-2">Cancel</a>
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
