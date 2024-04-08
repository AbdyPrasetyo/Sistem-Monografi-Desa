<?php

include ('../../config/koneksi.php');

$id     = $_GET['id'];
$pilih = mysqli_query($conn, "SELECT * FROM tb_galeri WHERE id_galeri='$id'");
$data = mysqli_fetch_array($pilih);
$foto = $data['foto'];
unlink("gambar/".$foto); //lalu hapus gambarnya, images merupakan letak

$qHapus     = mysqli_query($conn, "DELETE FROM tb_galeri WHERE id_galeri = '$id'");

if($qHapus){
    header('location:galeri.php');
} else {
    header('location:Foto?pesan=Gagal-Di Hapus');
}
?>
