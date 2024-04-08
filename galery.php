<?php
// Buat koneksi ke database (sesuaikan dengan informasi database Anda)
include 'config/koneksi.php';


$sql = "SELECT id_galeri, ket_foto, foto FROM tb_galeri";
$result = $conn->query($sql);

// Tampilkan galeri
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='galeri-item'>";
        echo "<p>Keterangan Foto: " . $row['ket_foto'] . "</p>";
        echo "<img src='admin/content/tb_galeri/gambar/" . $row['foto'] . "' alt='" . $row['ket_foto'] . "'style='max-width: 100%; height: auto;'>";

        echo "</div>";
    }
} else {
    echo "Tidak ada data galeri.";
}


?>
