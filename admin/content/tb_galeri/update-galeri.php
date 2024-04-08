<?php
include ('../../config/koneksi.php');

$id = $_POST['id'];
$sqlCek= mysqli_query($conn, "SELECT * FROM tb_galeri WHERE id_galeri ='$id'");

if (mysqli_num_rows($sqlCek)>0) {
  while ($key = mysqli_fetch_array($sqlCek)) {
     $gambar = $key['foto'];
 }
}

$ket_foto = $_POST['ket_foto'];
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
    echo ("<script LANGUAGE='JavaScript'>window.alert('Salah ekstensi'); window.location.href='galeri.php'</script>");
}else{
    if($ukuran < 10220350){
        $xx = $rand.'_'.$filename;
        move_uploaded_file($_FILES['foto']['tmp_name'], 'gambar/'.$rand.'_'.$filename);

        $qUpdate  = "UPDATE tb_galeri SET ket_foto='$ket_foto',foto='$xx' WHERE id_galeri='$id'";
        $update = mysqli_query($conn, $qUpdate);
        if ($update) {
            header('location:galeri.php?=Berhasil Update');
        } else {
            echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal Update'); window.location.href='galeri.php'</script>");
        }
    } elseif ($ukuran > 10220350) {
        echo ("<script LANGUAGE='JavaScript'>window.alert('Gambar Anda Lebih Dari 2MB'); window.location.href='galeri.php'</script>");
    }
}
?>
