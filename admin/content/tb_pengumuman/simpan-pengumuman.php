<?php
include ('../../config/koneksi.php');

$judul = $_POST['judul'];
$isi = $_POST['isi'];
$tgl_post = $_POST['tgl_post'];


    $sql = mysqli_query($conn,"INSERT INTO tb_pengumuman VALUES('','$judul','$isi','$tgl_post')");

    if ($sql) {
        echo ("<script LANGUAGE='JavaScript'>window.alert('Berhasil Menambah Pengumuman'); window.location.href='pengumuman.php'</script>");
    } else {
        echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal Menambah Pengumuman'); window.location.href='pengumuman.php'</script>");
    }


?>
