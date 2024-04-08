<?php
include ('../../config/koneksi.php');

$id = $_POST['id'];
$sqlCek= mysqli_query($conn, "SELECT * FROM tb_struktur WHERE id_struktur ='$id'");

if (mysqli_num_rows($sqlCek)>0) {
  while ($key = mysqli_fetch_array($sqlCek));
 }

$nama = $_POST['nama'];
$jabatan = $_POST['level'];

$rand = rand();
$ekstensi = array('png','jpg','jpeg');
$filename = $_FILES['foto']['name'];

if(!empty($filename)){
    $filename = $filename;
} else {
    $filename = $_FILES['foto'][$gambar];
}

$ukuran   = $_FILES['foto']['size'];
$image = pathinfo($filename,PATHINFO_EXTENSION);
if(!in_array($image,$ekstensi)){
    echo ("<script LANGUAGE='JavaScript'>window.alert('Salah ekstensi'); window.location.href='struktur.php'</script>");
}else{
    if($ukuran < 10220350){
        $xx = $rand.'_'.$filename;
        move_uploaded_file($_FILES['foto']['tmp_name'], 'gambar/'.$rand.'_'.$filename);

        $qUpdate  = "UPDATE tb_struktur SET nama='$nama',level='$jabatan',foto='$xx' WHERE id_struktur='$id'";
        $update = mysqli_query($conn, $qUpdate);
        if ($update) {
            header('location:struktur.php?=Berhasil Update');
        } else {
            echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal Update'); window.location.href='struktur.php'</script>");
        }
    } elseif ($ukuran >10220350) {
        echo ("<script LANGUAGE='JavaScript'>window.alert('Gambar Anda Lebih Dari 10MB'); window.location.href='struktur.php'</script>");
    }
}
?>
