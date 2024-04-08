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
            <h1>Data Topology Desa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../index/index.php">Home</a></li>
              <li class="breadcrumb-item active">Topology</li>
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

              <a href="create.php" class="btn btn-md btn-primary" style="margin-bottom: 10px">TAMBAH DATA</a>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">Jenis Topologi Desa</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                      include('../../config/koneksi.php');
                      $no = 1;
                      $query = mysqli_query($conn,"SELECT * FROM topologi_desa");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['jenis_topologi'] ?></td>
                      <td><?php echo $row['jumlah'] ?></td>
                      <td class="text-center">
                        <a href="edit.php?id=<?php echo $row['id_topologi'] ?>" class="btn btn-sm btn-warning text-white">EDIT</a>
                        <a href="delete_script.php?id_topologi=<?php echo $row['id_topologi'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
                  </tr>

                <?php } ?>
                </tbody>
              </table>


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
