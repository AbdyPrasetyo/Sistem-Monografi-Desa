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
          <h1>Edit Data Topology </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="../index/index.php">Home</a></li>
            <li class="breadcrumb-item active">Edit Topology Desa</li>
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
              <h3 class="card-title">Edit Data Topology Desa</h3>
            </div>
            <!-- /.card-header -->

<div class="card-body">


<?php
include '../../config/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Check if the ID parameter is set in the URL
    if (isset($_GET["id"])) {
        $id_topologi = $_GET["id"];

        // Fetch data for the specified ID
        $result = mysqli_query($conn, "SELECT * FROM topologi_desa WHERE id_topologi = $id_topologi");

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_array($result);
                ?>
    <form action="update_script.php" method="post">
        <!-- Input fields for each database column -->
        <input type="hidden"  name="id_topologi" value="<?php echo $row['id_topologi']; ?>">

        <div class="col-md-4">
            <label for="jenis_topologi" class="form-label">Jenis Topologi Desa</label>
            <input type="text" class="form-control" id="jenis_topologi" name="jenis_topologi"  value="<?php echo $row['jenis_topologi']; ?>" required>
            </div>
        <div class="col-md-4 mt-2">
            <label for="jumlah" class="form-label">Jumlah Topologi</label>
            <input type="text" class="form-control" id="jumlah" name="jumlah" value="<?php echo $row['jumlah']; ?>" required>
            <button type="submit" class="btn btn-warning mt-2 text-white">Update</button>
            <a href="topologi.php" class="btn btn-danger mt-2">Cancel</a>
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
