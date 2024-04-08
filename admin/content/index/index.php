<?php
include '../header.php';
?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../index/index.php">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3> </h3>

                <p>Stuktur Organisasi</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-sitemap"></i>
              </div>
              <a href="../../content/tb_struktur/struktur.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3> </h3>

                <p>Data Penduduk</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-users"></i>
              </div>
              <a href="../../content/data_penduduk/data_penduduk.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3> </h3>

                <p>Galeri</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-image"></i>
              </div>
              <a href="../../content/tb_galeri/galeri.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3> </h3>

                <p>Pesan</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-envelope"></i>
              </div>
              <a href="../../content/tb_pesan/pesan.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <!-- Content Wrapper. Contains page content -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <a href="tambah-pengumuman.php" class="btn btn-info"><i class="fas fa-plus"></i> Tambah Pengumuman</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>Judul Pengumuman</th>
                      <th>Isi Pengumuman</th>
                      <th>Tanggal Post</th>
                    </tr>
                  </thead>
                  <tbody>
                  	<?php
                  	include '../../config/koneksi.php';
                  	$no = 1;
                  	$Tampil = mysqli_query($conn, "SELECT * FROM tb_pengumuman");
                  	foreach ($Tampil as $key) {
                  	?>
                    <tr>
                    	<td><?php echo $no++;?></td>
                    	<td><?php echo $key['judul'];?></td>
                    	<td><?php echo $key['isi'];?></td>
                      <td><?php echo $key['tgl_post'];?></td>
                    	</tr>
                <?php } ?>
                  </tbody>
                </table>
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
        </div>
        <!-- /.row -->
    </div>


</section>
</div>



<?php
include '../footer.php';
?>

