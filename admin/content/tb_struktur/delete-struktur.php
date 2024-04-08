<?php

include ('../../config/koneksi.php');

$id     = $_GET['id'];
$pilih = mysqli_query($conn, "SELECT * FROM tb_struktur WHERE id_struktur ='$id'");
$data = mysqli_fetch_array($pilih);

$qHapus     = mysqli_query($conn, "DELETE FROM tb_struktur  WHERE id_struktur  = '$id'");

if($qHapus){
    header('location:struktur.php');
} else {
    header('location:Foto?pesan=Gagal-Di Hapus');
}
?>
