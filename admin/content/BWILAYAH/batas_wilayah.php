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
            <h1>Data Batas Wilayah Desa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../index/index.php">Home</a></li>
              <li class="breadcrumb-item active">Batas Wilayah Desa</li>
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

                        $result = mysqli_query($conn, "SELECT COUNT(*) as count FROM batas_wilayah");
                        $row = mysqli_fetch_assoc($result);
                        $count = $row['count'];

                        if ($count > 0) {
                            echo '<p>Data exists in the database. The "Add Data" button is hidden.</p>';
                        } else {
                            echo '<a href="create.php" class="btn btn-md btn-primary" style="margin-bottom: 10px">TAMBAH DATA</a>';
                        }

                        if ($count > 0) {
                            ?>
                            <table class="table table-bordered" id="myTable">
                                <thead>
                                    <tr>
                                        <th scope="col">NO.</th>
                                        <th scope="col">Utara</th>
                                        <th scope="col">Selatan</th>
                                        <th scope="col">Timur</th>
                                        <th scope="col">Barat</th>
                                        <th scope="col">AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $query = mysqli_query($conn, "SELECT * FROM batas_wilayah");
                                    while ($row = mysqli_fetch_array($query)) {
                                        ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $row['utara'] ?></td>
                                            <td><?php echo $row['selatan'] ?></td>
                                            <td><?php echo $row['timur'] ?></td>
                                            <td><?php echo $row['barat'] ?></td>
                                            <td class="text-center">
                                                <a href="edit.php?id=<?php echo $row['id_batas_wilayah'] ?>" class="btn btn-sm btn-warning">EDIT</a>
                                                <a href="delete_script.php?id_batas_wilayah=<?php echo $row['id_batas_wilayah'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        <?php } else {
                            echo "No data available";
                        }
                        ?>


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