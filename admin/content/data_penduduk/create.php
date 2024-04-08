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
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Penduduk Padukuhan Combongan</h3>
            </div>
            <!-- /.card-header -->

<div class="card-body">

<form action="insert_script.php" method="POST">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" id="nama" name="nama"  required>
                </div>
                <div class="form-group col-md-6">
                    <label for="no_kk">No Kartu Keluarga:</label>
                    <input type="number" class="form-control" id="no_kk" name="no_kk" oninput="formatNumber(this)" required>
                </div>

            </div>

            <div class="form-row">
            <div class="form-group col-md-6">
                    <label for="nik">NIK:</label>
                    <input type="number" class="form-control" id="nik" name="nik" oninput="formatNumber(this)" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="alamat">Alamat:</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" required>
                </div>

            </div>

            <div class="form-row">
            <div class="form-group col-md-6">
                    <label for="rt">RT:</label>


                    <input type="text" class="form-control" id="rt" name="rt" value="<?php echo isset($_GET['rt']) ? htmlspecialchars($_GET['rt']) : ''; ?>" oninput="formatRT(this)" required>

                    <!-- <select class="form-control" id="rt" name="rt" required>
                        <option value="RT01">RT01</option>
                        <option value="RT02">RT02</option>
                        <option value="RT03">RT03</option>
                        <option value="RT04">RT04</option>
                        <option value="RT05">RT05</option>
                        <option value="RT06">RT06</option>
                        Add more options based on your RT values
                    </select> -->
                </div>
                <div class="form-group col-md-6">
                    <label for="jk">Jenis Kelamin:</label>
                    <select class="form-control" id="jk" name="jk" required>
                        <option value="PRIA">PRIA</option>
                        <option value="WANITA">WANITA</option>
                    </select>
                </div>

            </div>

            <div class="form-row">
            <div class="form-group col-md-6">
                    <label for="tempat_lahir">Tempat Lahir:</label>
                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="tanggal_lahir">Tanggal Lahir:</label>
                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                </div>

            </div>

            <div class="form-row">
            <div class="form-group col-md-6">
                    <label for="usia">Usia:</label>
                    <select class="form-control" id="usia" name="usia" required>
                        <option value="0-15 tahun">0-15 tahun</option>
                        <option value="16-19 tahun">16-19 tahun</option>
                        <option value="20-65 tahun">20-65 tahun</option>
                        <option value="66-100 tahun">66-100 tahun</option>
                        <!-- Add more options based on your usia values -->
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="agama">Agama:</label>
                    <select class="form-control" id="agama" name="agama" required>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <!-- Add more options based on your agama values -->
                    </select>
                </div>

            </div>

            <div class="form-row">
            <div class="form-group col-md-6">
                    <label for="pendidikan">Pendidikan:</label>
                    <select class="form-control" id="pendidikan" name="pendidikan" required>
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA/SMK">SMA/SMK</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <!-- Add more options based on your pendidikan values -->
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="pekerjaan">Pekerjaan:</label>
                    <select class="form-control" id="pekerjaan" name="pekerjaan" required>
                        <option value="Buruh">Buruh</option>
                        <option value="PNS">PNS</option>
                        <option value="Wirausaha">Wirausaha</option>
                        <option value="Swasta">Swasta</option>
                        <option value="BUMN">BUMN</option>
                        <!-- Add more options based on your pekerjaan values -->
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="status">Status:</label>
                    <select class="form-control" id="status" name="status" required>
                        <option value="Menikah">Menikah</option>
                        <option value="Belum Menikah">Belum Menikah</option>
                        <option value="Cerai Mati">Cerai Mati</option>
                        <option value="Cerai Hidup">Cerai Hidup</option>
                        <!-- Add more options based on your status values -->
                    </select>
                </div>
            </div>




            <!-- Add more form elements as needed -->

            <button type="submit" class="btn btn-primary mb-2">Save</button>
            <a href="data_penduduk.php" class="btn btn-danger mb-2">Cancel</a>
        </form>





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
        console.log("Formatted RT:", input.value);

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
