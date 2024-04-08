<?php

include ('../../config/koneksi.php');

$id     = $_GET['id'];
$pilih = mysqli_query($conn, "SELECT * FROM tb_pengumuman WHERE id_pengumuman='$id'");
$data = mysqli_fetch_array($pilih);

$qHapus     = mysqli_query($conn, "DELETE FROM tb_pengumuman WHERE id_pengumuman= '$id'");

if($qHapus){
    header('location:pengumuman.php');
} else {
    header('location:Foto?pesan=Gagal-Di Hapus');
}
?>
