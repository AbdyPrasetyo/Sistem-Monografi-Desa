<?php
include ('../../config/koneksi.php');

$id = $_POST['id'];
$sqlCek= mysqli_query($connect, "SELECT * FROM tb_pengumuman WHERE id_pengumuman ='$id'");

if (mysqli_num_rows($sqlCek)>0) {
  while ($key = mysqli_fetch_array($sqlCek));
 }

$judul = $_POST['judul'];
$isi = $_POST['isi'];
$tgl_post = $_POST['tgl_post'];



if(!empty($filename)){
    $filename = $filename;
}

else{
        $qUpdate  = "UPDATE tb_pengumuman SET judul='$judul',isi='$isi',tgl_post='$tgl_post' WHERE id_pengumuman='$id'";
        $update = mysqli_query($conn, $qUpdate);
        if ($update) {
            header('location:pengumuman.php?=Berhasil Update');
        } else {
            echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal Update'); window.location.href='pengumuman.php'</script>");
    }
}
?>
