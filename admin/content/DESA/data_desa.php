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
            <h1>Data Desa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../index/index.php">Home</a></li>
              <li class="breadcrumb-item active">Data Desa</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">

              <!-- /.card-header -->
              <div class="card-body">

              <?php
                        include '../../config/koneksi.php';
                        $result = mysqli_query($conn, "SELECT COUNT(*) as count FROM desa");
                        $row = mysqli_fetch_assoc($result);
                        $count = $row['count'];

                        if ($count > 0) {
                            echo '<p>Data exists in the database. The "Add Data" button is hidden.</p>';
                        } else {
                            echo '<a class="btn btn-primary add-button mb-2" href="create.php">Add Data</a>';
                        }

                        $no = 1;
                        $data = mysqli_query($conn, "SELECT * FROM desa");

                        if (mysqli_num_rows($data) > 0) {
                            ?>
                            <table class="table table-bordered table-striped table-responsive">
                                <thead class="nowrap">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Desa</th>
                                        <th>Kelurahan</th>
                                        <th>Dasar Hukum Pembentukan</th>
                                        <th>Nomor Kota Wilayah</th>
                                        <th>Kode Pos</th>
                                        <th>Kecamatan</th>
                                        <th>Kabupaten/Kota</th>
                                        <th>Provinsi</th>
                                        <th>Tingkat Perkembangan Desa</th>
                                        <th>Luas Wilayah</th>
                                        <th>UMR Kabupaten</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="nowrap">
                                    <?php
                                    while ($d = mysqli_fetch_array($data)) {
                                        ?>
                                        <tr>
                                        <td><?php echo $no++; ?></td>
                    <td><?php echo $d['nama_desa']; ?></td>
                    <td><?php echo $d['kelurahan']; ?></td>
                    <td><?php echo $d['dasar_hukum_pembentukan']; ?></td>
                    <td><?php echo $d['nomor_kota_wilayah']; ?></td>
                    <td><?php echo $d['kode_pos']; ?></td>
                    <td><?php echo $d['kecamatan']; ?></td>
                    <td><?php echo $d['kabupaten_kota']; ?></td>
                    <td><?php echo $d['provinsi']; ?></td>
                    <td><?php echo $d['tingkat_perkembangan_desa']; ?></td>
                    <td><?php echo $d['luas_wilayah']; ?></td>
                    <td><?php echo $d['umr_kabupaten']; ?></td>
                                            <!-- ... (other columns) ... -->
                                            <td>
                                                <a class="btn btn-warning btn-sm text-white" href="edit.php?id=<?php echo $d['id_desa']; ?>">EDIT</a>
                                                <a class="btn btn-danger btn-sm" href="#" data-toggle="modal" data-target="#deleteModal" data-id="<?php echo $d['id_desa']; ?>">DELETE</a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                            <?php
                        } else {
                            echo "No data available";
                        }

                        mysqli_close($conn);
                        ?>













              </div>

              <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this item?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a id="deleteLink" class="btn btn-danger" href="#">Delete</a>
            </div>
        </div>
    </div>
</div>
          </div>
          <!-- /.col -->
        </div>

        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php
include '../footer.php';
?>
