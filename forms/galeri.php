   <?php 
include ("header.php");
 ?>
 <section id="hero" class="d-flex align-items-center">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">

        <div class="section-title">
          
         <h3>Galeri <br> <span> Padukuhan Combongan</span></h3>
          <p>Dalam Galeri ini berisikan tentang semua kegiatan-kegiatan yang dilakukan oleh warga Padukuhan Combongan</p>
        </div>
          <div class="row">
        <?php
                    include '../config/koneksi.php';
                    $no = 1;
                    $Tampil = mysqli_query($connect, "SELECT * FROM tb_galeri");
                    foreach ($Tampil as $key) {
                    ?>
     
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-5" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class=""><img src="../admin/content/tb_galeri/gambar/<?php echo $key['foto']; ?>" style="height: 350px; width: 350px;">
              </div> <br>
            </div>
          </div> 


        <?php } ?>

    </section>    
 <?php 

include ("footer.php");?>