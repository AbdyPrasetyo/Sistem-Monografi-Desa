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
          <h1>Tambah Penduduk </h1>
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
          <div class="card card-warning">
            <div class="card-header">
              <h3 class="card-title">Penduduk Padukuhan Combongan</h3>
            </div>
            <!-- /.card-header -->

<div class="card-body">




<?php
        include '../../config/koneksi.php';

        // Check if id_penduduk parameter is set in the URL
        if (isset($_GET['id_penduduk'])) {
            $id_penduduk = $conn->real_escape_string($_GET['id_penduduk']);

            // Retrieve existing data based on id_penduduk
            $sql = "SELECT * FROM tb_penduduk WHERE id_penduduk = '$id_penduduk'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
        ?>

        <form action="update_script.php" method="POST">
            <input type="hidden" name="id_penduduk" value="<?php echo $row['id_penduduk']; ?>">
                    <label for="no_kk">Nomor Kartu Keluarga:</label>
                    <input type="number" class="form-control" id="no_kk" name="no_kk" value="<?php echo $row['no_kk']; ?>" oninput="formatNumber(this)" required>
            <div class="form-row">

                <div class="form-group col-md-6">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $row['nama']; ?>" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="nik">NIK:</label>
                    <input type="number" class="form-control" id="nik" name="nik" value="<?php echo $row['nik']; ?>" oninput="formatNumber(this)" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="alamat">Alamat:</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $row['alamat']; ?>"  required>
                </div>
                <div class="form-group col-md-6">
                    <label for="rt">RT:</label>

                    <input type="text" class="form-control" id="rt" name="rt" value="<?php echo $row['rt']; ?>" oninput="formatRT(this)" required>

                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="jk">Jenis Kelamin:</label>
                    <select class="form-control" id="jk" name="jk" required>
                        <option value="PRIA" <?php echo ($row['jk'] == 'PRIA') ? 'selected' : ''; ?>>PRIA</option>
                        <option value="WANITA" <?php echo ($row['jk'] == 'WANITA') ? 'selected' : ''; ?>>WANITA</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="tempat_lahir">Tempat Lahir:</label>
                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?php echo $row['tempat_lahir']; ?>" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="tanggal_lahir">Tanggal Lahir:</label>
                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?php echo $row['tanggal_lahir']; ?>" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="usia">Usia:</label>
                    <select class="form-control" id="usia" name="usia" required>
                        <option value="0-15 tahun" <?php echo ($row['usia'] == '0-15 tahun') ? 'selected' : ''; ?>>0-15 tahun</option>
                        <option value="16-19 tahun" <?php echo ($row['usia'] == '16-19 tahun') ? 'selected' : ''; ?>>16-19 tahun</option>
                        <option value="20-65 tahun" <?php echo ($row['usia'] == '20-65 tahun') ? 'selected' : ''; ?>>20-65 tahun</option>
                        <!-- Add more options based on your usia values -->
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="agama">Agama:</label>
                    <select class="form-control" id="agama" name="agama" required>
                        <option value="Islam" <?php echo ($row['agama'] == 'Islam') ? 'selected' : ''; ?>>Islam</option>
                        <option value="Kristen" <?php echo ($row['agama'] == 'Kristen') ? 'selected' : ''; ?>>Kristen</option>
                        <option value="Katolik" <?php echo ($row['agama'] == 'Katolik') ? 'selected' : ''; ?>>Katolik</option>
                        <option value="Hindu" <?php echo ($row['agama'] == 'Hindu') ? 'selected' : ''; ?>>Hindu</option>
                        <option value="Budha" <?php echo ($row['agama'] == 'Budha') ? 'selected' : ''; ?>>Budha</option>
                        <!-- Add more options based on your agama values -->
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="pendidikan">Pendidikan:</label>
                    <select class="form-control" id="pendidikan" name="pendidikan" required>
                        <option value="SD" <?php echo ($row['pendidikan'] == 'SD') ? 'selected' : ''; ?>>SD</option>
                        <option value="SMP" <?php echo ($row['pendidikan'] == 'SMP') ? 'selected' : ''; ?>>SMP</option>
                        <option value="SMA/SMK" <?php echo ($row['pendidikan'] == 'SMA/SMK') ? 'selected' : ''; ?>>SMA/SMK</option>
                        <option value="S1" <?php echo ($row['pendidikan'] == 'S1') ? 'selected' : ''; ?>>S1</option>
                        <option value="S2" <?php echo ($row['pendidikan'] == 'S2') ? 'selected' : ''; ?>>S2</option>
                        <!-- Add more options based on your pendidikan values -->
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="pekerjaan">Pekerjaan:</label>
                    <select class="form-control" id="pekerjaan" name="pekerjaan" required>
                        <option value="Buruh" <?php echo ($row['pekerjaan'] == 'Buruh') ? 'selected' : ''; ?>>Buruh</option>
                        <option value="PNS" <?php echo ($row['pekerjaan'] == 'PNS') ? 'selected' : ''; ?>>PNS</option>
                        <option value="Wirausaha" <?php echo ($row['pekerjaan'] == 'Wirausaha') ? 'selected' : ''; ?>>Wirausaha</option>
                        <option value="Swasta" <?php echo ($row['pekerjaan'] == 'Swasta') ? 'selected' : ''; ?>>Swasta</option>
                        <option value="BUMN" <?php echo ($row['pekerjaan'] == 'BUMN') ? 'selected' : ''; ?>>BUMN</option>
                        <!-- Add more options based on your pekerjaan values -->
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="status">Status:</label>
                    <select class="form-control" id="status" name="status" required>
                        <option value="Menikah" <?php echo ($row['status'] == 'Menikah') ? 'selected' : ''; ?>>Menikah</option>
                        <option value="Belum Menikah" <?php echo ($row['status'] == 'Belum Menikah') ? 'selected' : ''; ?>>Belum Menikah</option>
                        <option value="Cerai Mati" <?php echo ($row['status'] == 'Cerai Mati') ? 'selected' : ''; ?>>Cerai Mati</option>
                        <option value="Cerai Hidup" <?php echo ($row['status'] == 'Cerai Hidup') ? 'selected' : ''; ?>>Cerai Hidup</option>
                        <!-- Add more options based on your status values -->
                    </select>
                </div>
            </div>

            <!-- Add more form elements as needed -->

            <button type="submit" class="btn btn-warning mb-2 text-white">Update</button>
            <a href="data_penduduk.php" class="btn btn-danger mb-2">cancel</a>
        </form>

        <?php
            } else {
                echo "Data not found.";
            }
        } else {
            echo "Invalid request. Please provide id_penduduk parameter.";
        }
        ?>



</div>

</div>
</div>
</div>
</section>
</div>

<script>
    function formatRT(input) {

        // Ensure that the input starts with "RT" and allow only numeric characters after that
        input.value = input.value.replace(/[^0-9]/g, '');

        // If the input doesn't start with "RT", prepend it
        if (!input.value.startsWith("RT")) {
            input.value = "RT" + input.value;
        }

    }

function formatNumber(input) {
        // Ensure that the input starts with "RT" and allow only numeric characters after that
        // Limit the input to a maximum of 16 characters
        input.value = input.value.substring(0, 16);
    }
</script>
<?php
include '../footer.php';
?>
