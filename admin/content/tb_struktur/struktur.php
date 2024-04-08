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
            <h1>Data Struktur Organisasi Padukuhan Combongan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../index/index.php">Home</a></li>
              <li class="breadcrumb-item active">Struktur</li>
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
              <div class="card-header">
                <a href="tambah-struktur.php" class="btn btn-info"><i class="fas fa-plus"></i> Tambah Struktur Organisasi </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>Nama</th>
                      <th>Jenis Jabatan</th>
                      <th>Gambar</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  	<?php
                  	include '../../config/koneksi.php';
                  	$no = 1;
                  	$Tampil = mysqli_query($conn, "SELECT * FROM tb_struktur ORDER BY id_struktur DESC");
                  	foreach ($Tampil as $key) {
                  	?>
                   <tr>
                      <td><?php echo $no++;?></td>
                     <td><?php echo $key['nama'];?></td>
                      <td><?php echo $key['level'];?></td>
                      <td><img src="gambar/<?php echo $key['foto']; ?>" width="60" height="80" /></td>
                      <td>
                        <a href="edit-struktur.php?id=<?php echo $key['id_struktur']; ?>" class="btn-sm btn-success"><i class="fa fa-edit"></i></a>

                            <a href="delete-struktur.php?id=<?php echo $key['id_struktur']; ?>" class="btn-sm btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus File Ini?')"><i class="fa fa-trash"></i></a></td>
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

<?php
include '../footer.php';
?>
