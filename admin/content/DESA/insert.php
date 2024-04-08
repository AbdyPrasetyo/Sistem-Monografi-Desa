<?php
// Database connection details
include '../../config/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data (sanitize input to prevent SQL injection)
    $nama_desa = $conn->real_escape_string($_POST["nama_desa"]);
    $kelurahan = $conn->real_escape_string($_POST["kelurahan"]);
    $tahun_pembentukan = isset($_POST["tahun_pembentukan"]) ? intval($_POST["tahun_pembentukan"]) : null;
    $dasar_hukum_pembentukan = $conn->real_escape_string($_POST["dasar_hukum_pembentukan"]);
    $nomor_kota_wilayah = $conn->real_escape_string($_POST["nomor_kota_wilayah"]);
    $kode_pos = $conn->real_escape_string($_POST["kode_pos"]);
    $kecamatan = $conn->real_escape_string($_POST["kecamatan"]);
    $kabupaten_kota = $conn->real_escape_string($_POST["kabupaten_kota"]);
    $provinsi = $conn->real_escape_string($_POST["provinsi"]);
    $tingkat_perkembangan_desa = $conn->real_escape_string($_POST["tingkat_perkembangan_desa"]);
    $luas_wilayah = floatval($_POST["luas_wilayah"]); // Assuming luas_wilayah is a float
    $umr_kabupaten = floatval($_POST["umr_kabupaten"]);

    // Perform database insert
    $sql = "INSERT INTO desa
        (nama_desa, kelurahan, tahun_pembentukan, dasar_hukum_pembentukan, nomor_kota_wilayah, kode_pos, kecamatan, kabupaten_kota, provinsi, tingkat_perkembangan_desa, luas_wilayah, umr_kabupaten)
        VALUES
        ('$nama_desa', '$kelurahan', $tahun_pembentukan, '$dasar_hukum_pembentukan', '$nomor_kota_wilayah', '$kode_pos', '$kecamatan', '$kabupaten_kota', '$provinsi', '$tingkat_perkembangan_desa', $luas_wilayah, $umr_kabupaten)";



    if ($conn->query($sql) === TRUE) {
        // Record inserted successfully, redirect to index.php


        echo "create successful. Redirecting...";
        // Redirect back to the original page afte
        header("Location: data_desa.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
