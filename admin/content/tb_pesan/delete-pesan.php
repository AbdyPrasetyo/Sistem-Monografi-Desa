<?php

include ('../../config/koneksi.php');

$id     = $_GET['id'];
$pilih = mysqli_query($conn, "SELECT * FROM tb_pesan WHERE id_pesan='$id'");
$data = mysqli_fetch_array($pilih);

$qHapus     = mysqli_query($conn, "DELETE FROM tb_pesan WHERE id_pesan = '$id'");

if($qHapus){
    header('location:pesan.php');
} else {
    header('location:Foto?pesan=Gagal-Di Hapus');
}
?>
