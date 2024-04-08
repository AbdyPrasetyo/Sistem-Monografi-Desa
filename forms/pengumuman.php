   <?php 
include ("header.php");
 ?>
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="row">
          <div class="col-lg-4">
            <div class="section-title" data-aos="fade-right">
              <h2>PENGUMUMAN</h2>
              <p>Menyajikan Informasi Pengumuman seputar Dukuh Combongan yang dapat di lihat oleh masyarakat setempat.</p>
            </div>
          </div>

          <div class="row">
        <?php
                    include '../config/koneksi.php';
                    $no = 1;
                    $Tampil = mysqli_query($conn, "SELECT * FROM tb_pengumuman");
                    foreach ($Tampil as $key) {
                    ?>

<h5 class="text-center"><?php echo $key['judul'];?></h5> <br>

<p class="text-center"><?php echo $key['isi'];?><br><br>

        <?php } ?>

    </section>    
 <?php 

include ("footer.php");?>