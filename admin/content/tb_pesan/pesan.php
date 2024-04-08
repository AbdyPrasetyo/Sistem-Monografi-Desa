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
            <h1>Data Pesan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../index/index.php">Home</a></li>
              <li class="breadcrumb-item active">Pesan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>Nama Penulis Pesan</th>
                      <th>Email</th>
                      <th>Subject</th>
                      <th>Pesan</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  	<?php
                  	include '../../config/koneksi.php';
                  	$no = 1;
                  	$Tampil = mysqli_query($conn, "SELECT * FROM `tb_pesan` ORDER BY id_pesan DESC");
                  	foreach ($Tampil as $key) {
                  	?>
                    <tr>
                    	<td><?php echo $no++;?></td>
                    	<td><?php echo $key['nama'];?></td>
                    	<td><?php echo $key['email'];?></td>
                      <td><?php echo $key['subject'];?></td>
                      <td><?php echo $key['pesan'];?></td>
                    	<td>

                            <a href="delete-pesan.php?id=<?php echo $key['id_pesan']; ?>" class="btn-sm btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus File Ini?')"><i class="fa fa-trash"></i></a></td>
                    </tr>
                <?php } ?>
                  </tbody>
                </table>
              </div>

            </div>
            <!-- /.card -->
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
