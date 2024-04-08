
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
          <h1>Data Penduduk</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="../index/index.php">Home</a></li>
            <li class="breadcrumb-item active">Penduduk</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>


  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
          <div class="card-body">

              <?php
                    // Koneksi ke database (ganti dengan informasi koneksi Anda)
                    include '../../config/koneksi.php';

                      $query = "SELECT DISTINCT rt FROM tb_penduduk";
                      $result = $conn->query($query);
                      $defaultRt = 'all';

// Tentukan nilai RT yang dipilih berdasarkan parameter GET
$selectedRt = isset($_GET['rt_selector']) ? $_GET['rt_selector'] : $defaultRt;
                    ?>
              <form method="get" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                <div class="row">
                  <div class="col-md-3">
                    <label for="rt_selector" class="form-label">Pilih RT:</label>
                    <select name="rt_selector" id="rt_selector" class="form-control">
                    <option value="<?php echo $defaultRt; ?>" <?php echo ($selectedRt == $defaultRt) ? 'selected' : ''; ?>>All RT</option>

                      <?php
// Menampilkan opsi RT dari hasil query
                            while ($row = $result->fetch_assoc()) {
                                $rt = $row['rt'];
                                echo "<option value=\"$rt\"";
                                echo (isset($_GET['rt_selector']) && $_GET['rt_selector'] == $rt) ? 'selected' : '';
                                echo ">$rt</option>";
                            }
                            ?>
                    </select>


                  </div>
                  <div class="col-md-3">
                    <label for="nik_search" class="form-label">Search by NIK:</label>
                    <input type="text" name="nik_search" id="nik_search" class="form-control"
                      value="<?php echo isset($_GET['nik_search']) ? htmlspecialchars($_GET['nik_search']) : ''; ?>">
                  </div>
                  <div class="col-md-3">
                    <label for="kk_search" class="form-label">Search by Kartu Keluarga:</label>
                    <input type="text" name="kk_search" id="kk_search" class="form-control"
                      value="<?php echo isset($_GET['kk_search']) ? htmlspecialchars($_GET['kk_search']) : ''; ?>">
                  </div>
                  <div class="col-md-3">
                    <br>
                    <h2>
                      <button class="btn btn-success mt-2" type="submit">Tampilkan Data</button>
                <a href="create.php" class="btn btn-primary mt-2">Tambah Data</a>
                    </h2>
                  </div>
                </div>
              </form>



              <?php
                    // Koneksi ke database (ganti dengan informasi koneksi Anda)
                    include '../../config/koneksi.php';

                    // Periksa koneksi
                    if ($conn->connect_error) {
                        die("Koneksi gagal: " . $conn->connect_error);
                    }

                    // Fungsi untuk menampilkan data dengan pagination
                    function tampilkanDataWithPagination($conn, $rt = null, $nikSearch = null, $kkSearch = null, $page = 1, $perPage = 10) {
                        $offset = max(0, ($page - 1) * $perPage);

                        $sql = "SELECT * FROM tb_penduduk WHERE 1";

                        // Add RT condition if a specific RT is selected
                        if ($rt && $rt !== 'all') {
                            $sql .= " AND rt = '$rt'";
                        }

                        // Add NIK search condition if NIK is provided
                        if ($nikSearch) {
                            $sql .= " AND nik LIKE '%$nikSearch%'";
                        }

                        // Add Kartu Keluarga search condition if Kartu Keluarga is provided
                        if ($kkSearch) {
                            $sql .= " AND no_kk LIKE '%$kkSearch%'";
                        }

                        // Add LIMIT and OFFSET for pagination
                        $sql .= " LIMIT $perPage OFFSET $offset";

                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            echo "<table class='table table-bordered table-responsive'>
                                <thead class='nowrap text-center'>
                                    <tr>
                                        <th>NO</th>
                                        <th>Nama</th>
                                        <th>No Kartu Keluarga</th>
                                        <th>NIK</th>
                                        <th>Alamat</th>
                                        <th>RT</th>
                                        <th>JK</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Usia</th>
                                        <th>Agama</th>
                                        <th>Pendidikan</th>
                                        <th>Pekerjaan</th>
                                        <th>Status Perkawinan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>";

                            $no = $offset + 1;

                            while ($row = $result->fetch_assoc()) {
                                echo "<tbody class='nowrap text-center'><tr>
                                        <td>" . $no++ . "</td>
                                        <td>{$row['nama']}</td>
                                        <td>{$row['no_kk']}</td>
                                        <td>{$row['nik']}</td>
                                        <td>{$row['alamat']}</td>
                                        <td>{$row['rt']}</td>
                                        <td>{$row['jk']}</td>
                                        <td>{$row['tempat_lahir']}</td>
                                        <td>{$row['tanggal_lahir']}</td>
                                        <td>{$row['usia']}</td>
                                        <td>{$row['agama']}</td>
                                        <td>{$row['pendidikan']}</td>
                                        <td>{$row['pekerjaan']}</td>
                                        <td>{$row['status']}</td>
                                        <td>
                                            <a href='edit.php?id_penduduk={$row['id_penduduk']}' class='btn btn-sm btn-warning text-white'>EDIT</a>
                                            <a href='delete_script.php?id_penduduk={$row['id_penduduk']}' class='btn btn-sm btn-danger'>HAPUS</a>
                                        </td>
                                    </tr></tbody>";
                            }

                            echo "</table>";
                        } else {
                            echo "Tidak ada data.";
                        }

                        // Pagination Links
                        echo "<div class='pagination justify-content-center'>";
                        $totalPages = ceil(getTotalRows($conn, $rt, $nikSearch, $kkSearch) / $perPage);

                        for ($i = 1; $i <= $totalPages; $i++) {
                            echo "<a href='?page=$i&rt_selector=$rt&nik_search=$nikSearch&kk_search=$kkSearch' class='btn btn-light'>$i</a>";
                        }
                        echo "</div>";
                    }

                    // Function to get total rows for pagination
                    function getTotalRows($conn, $rt, $nikSearch, $kkSearch) {
                        $sql = "SELECT COUNT(*) as total FROM tb_penduduk WHERE 1";

                        // Add RT condition if a specific RT is selected
                        if ($rt && $rt !== 'all') {
                            $sql .= " AND rt = '$rt'";
                        }

                        // Add NIK search condition if NIK is provided
                        if ($nikSearch) {
                            $sql .= " AND nik LIKE '%$nikSearch%'";
                        }

                        // Add Kartu Keluarga search condition if Kartu Keluarga is provided
                        if ($kkSearch) {
                            $sql .= " AND no_kk LIKE '%$kkSearch%'";
                        }

                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            return $row['total'];
                        }

                        return 0;
                    }

                    // Pemeriksaan jika formulir dikirim
                    if ($_SERVER["REQUEST_METHOD"] == "GET") {
                        $selectedRT = isset($_GET["rt_selector"]) ? $_GET["rt_selector"] : null;
                        $nikSearch = isset($_GET["nik_search"]) ? $_GET["nik_search"] : null;
                        $kkSearch = isset($_GET["kk_search"]) ? $_GET["kk_search"] : null;

                        // If "All RT" is selected, set $selectedRT to null
                        $selectedRT = ($selectedRT === "all") ? null : $selectedRT;

                        // Get the page from the URL, default to 1 if not set
                        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

                        tampilkanDataWithPagination($conn, $selectedRT, $nikSearch, $kkSearch, $page);
                    } else {
                        // Display all data by default with pagination (page 1, 10 records per page)
                        tampilkanDataWithPagination($conn);
                    }

                    // Tutup koneksi
                    $conn->close();
                ?>
            </div>
          </div>
        </div>

        <!-- /.row -->
      </div><!-- /.container-fluid -->
  </section>


<?php
include '../footer.php';
?>
