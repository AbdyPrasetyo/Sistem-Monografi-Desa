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
            <li class="breadcrumb-item active">Edit Data Desa</li>
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
              <h3 class="card-title">Edit Data Desa</h3>
            </div>
            <!-- /.card-header -->

<div class="card-body">

<?php
include '../../config/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Check if the ID parameter is set in the URL
    if (isset($_GET["id"])) {
        $id_desa = $_GET["id"];

        // Fetch data for the specified ID
        $result = mysqli_query($conn, "SELECT * FROM desa WHERE id_desa = $id_desa");

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_array($result);
                ?>

        <h2 class="mb-4">Edit Desa Data</h2>

        <form action="update_script.php" method="post">
            <div class="row mb-3">
                <div class="col-md-4">
                <input type="hidden"  name="id_desa" value="<?php echo $row['id_desa']; ?>">

                    <label for="nama_desa" class="form-label">Nama Desa:</label>
                    <input type="text" name="nama_desa" value="<?php echo $row['nama_desa']; ?>" class="form-control"
                        required>
                </div>

                <div class="col-md-4">
                    <label for="kelurahan" class="form-label">Kelurahan:</label>
                    <input type="text" name="kelurahan" value="<?php echo $row['kelurahan']; ?>" class="form-control"
                        required>
                </div>

                <div class="col-md-4">
                    <label for="tahun_pembentukan" class="form-label">Tahun Pembentukan:</label>
                    <input type="text" name="tahun_pembentukan" value="<?php echo $row['tahun_pembentukan']; ?>" class="form-control"
                        required>
                </div>
            </div>

            <div class="row mb-3">
            <div class="col-md-4">
                    <label for="dasar_hukum_pembentukan" class="form-label">Dasar Hukum Pembentukan:</label>
                    <input type="text" name="dasar_hukum_pembentukan"
                        value="<?php echo $row['dasar_hukum_pembentukan']; ?>" class="form-control">
                </div>
                <div class="col-md-4">
                    <label for="nomor_kota_wilayah" class="form-label">Nomor Kota Wilayah:</label>
                    <input type="text" name="nomor_kota_wilayah" value="<?php echo $row['nomor_kota_wilayah']; ?>"
                        class="form-control">
                </div>
                <div class="col-md-4">
                    <label for="kode_pos" class="form-label">Kode Pos:</label>
                    <input type="text" name="kode_pos" value="<?php echo $row['kode_pos']; ?>" class="form-control">
                </div>
            </div>

            <!-- Add more rows of input fields as needed -->
            <div class="row mb-3">
            <div class="col-md-4">
                    <label for="kecamatan" class="form-label">Kecamatan:</label>
                    <input type="text" name="kecamatan" value="<?php echo $row['kecamatan']; ?>" class="form-control">
                </div>

                <div class="col-md-4">
                    <label for="kabupaten_kota" class="form-label">Kabupaten:</label>
                    <input type="text" name="kabupaten_kota" value="<?php echo $row['kabupaten_kota']; ?>"
                        class="form-control">
                </div>

                <div class="col-md-4">
                    <label for="provinsi" class="form-label">Provinsi:</label>
                    <input type="text" name="provinsi"
                        value="<?php echo $row['provinsi']; ?>" class="form-control">
                </div>

            </div>
            <div class="row mb-3">
            <div class="col-md-4">
                    <label for="tingkat_perkembangan_desa" class="form-label">Tingkat Perkembangan Desa:</label>
                    <input type="text" name="tingkat_perkembangan_desa"
                        value="<?php echo $row['tingkat_perkembangan_desa']; ?>" class="form-control">
                </div>
                <div class="col-md-4">
                    <label for="luas_wilayah" class="form-label">Luas Wilayah:</label>
                    <input type="text" name="luas_wilayah" value="<?php echo $row['luas_wilayah']; ?>"
                        class="form-control">
                </div>
                <div class="col-md-4">
                    <label for="umr_kabupaten" class="form-label">UMR Kabupaten:</label>
                    <input type="text" name="umr_kabupaten" value="<?php echo $row['umr_kabupaten']; ?>"
                        class="form-control">
                </div>
            </div>

            <!-- Add more rows of input fields as needed -->

            <div class="col-md-12">
                    <button type="submit" class="btn btn-warning text-white">Update</button>
                    <a href="data_desa.php" class="btn btn-danger">Cancel</a>
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
