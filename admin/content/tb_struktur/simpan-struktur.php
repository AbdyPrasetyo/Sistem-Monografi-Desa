<?php
include ('../../config/koneksi.php');

$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];

$rand = rand();
$ekstensi = array('png','jpg','jpeg');
$filename = $_FILES['foto']['name'];
$ukuran   = $_FILES['foto']['size'];
$image = pathinfo($filename,PATHINFO_EXTENSION);

if(!in_array($image,$ekstensi)){
    echo ("<script LANGUAGE='JavaScript'>window.alert('Ekstensi Gambar Tidak Cocok'); window.location.href='struktur.php'</script>");

}elseif ($ukuran < 10220350){
    $xx = $rand.'_'.$filename;
    move_uploaded_file($_FILES['foto']['tmp_name'], 'gambar/'.$rand.'_'.$filename);

    $sql = mysqli_query($conn,"INSERT INTO tb_struktur VALUES('','$nama','$jabatan','$xx')");

    if ($sql) {
        echo ("<script LANGUAGE='JavaScript'>window.alert('Berhasil Menambah Data Struktur'); window.location.href='struktur.php'</script>");
    } else {
        echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal Menambah Data Struktur'); window.location.href='struktur.php'</script>");
    }

} elseif ($ukuran > 10220350) {
    echo ("<script LANGUAGE='JavaScript'>window.alert('Gambar Anda Lebih Dari 1MB'); window.location.href='struktur.php'</script>");
}
?>

