<?php
include ('../config/koneksi.php');

$nama = $_POST['nama'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$pesan = $_POST['pesan'];


    $sql = mysqli_query($conn,"INSERT INTO tb_pesan VALUES('','$nama','$email','$subject', '$pesan')");

    if ($sql) {
        echo ("<script LANGUAGE='JavaScript'>window.alert('Berhasil Mengirimkan komentar'); window.location.href='../index.php'</script>");
    } else {
        echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal Mengirimkan Komentar'); window.location.href='../index.php'</script>");
    }


?>
