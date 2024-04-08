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
          <h1>Edit  Data Sarana Prasarana Desa </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="../index/index.php">Home</a></li>
            <li class="breadcrumb-item active">Edit Data Sarana Prasarana Desa</li>
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
              <h3 class="card-title">Edit Data Sarana Prasarana</h3>
            </div>
            <!-- /.card-header -->

<div class="card-body">

<?php
include '../../config/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Check if the ID parameter is set in the URL
    if (isset($_GET["id"])) {
        $id_sarana_prasarana = $_GET["id"];

        // Fetch data for the specified ID
        $result = mysqli_query($conn, "SELECT * FROM sarana_prasarana WHERE id_sarana_prasarana = $id_sarana_prasarana");

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_array($result);
                ?>
    <form action="update_script.php" method="post">
        <!-- Input fields for each database column -->
        <input type="hidden"  name="id_sarana_prasarana" value="<?php echo $row['id_sarana_prasarana']; ?>">

        <div class="col-md-4">
            <label for="sarana_desa" class="form-label">Sarana Desa</label>
            <input type="text" class="form-control" id="sarana_desa" name="sarana_desa"  value="<?php echo $row['sarana_desa']; ?>" required>
            </div>
        <div class="col-md-4 mt-2">
            <label for="jumlah" class="form-label">Jumlah Sarana Desa</label>
            <input type="text" class="form-control" id="jumlah" name="jumlah" value="<?php echo $row['jumlah']; ?>" required>
        </div>


        <button type="submit" class="btn btn-warning mt-2 text-white">Update</button>
        <a href="sarana_desa.php" class="btn btn-danger mt-2">Cancel</a>
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
