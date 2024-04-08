<?php
// Database connection details
include '../../config/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data (sanitize input to prevent SQL injection)
    $id_penduduk = $conn->real_escape_string($_POST["id_penduduk"]);
    $nama = $conn->real_escape_string($_POST["nama"]);
    $kk = $conn->real_escape_string($_POST["no_kk"]);
    $nik = $conn->real_escape_string($_POST["nik"]);
    $alamat = $conn->real_escape_string($_POST["alamat"]);
    $rt = $conn->real_escape_string($_POST["rt"]);
    $jk = $conn->real_escape_string($_POST["jk"]);
    $tempat_lahir = $conn->real_escape_string($_POST["tempat_lahir"]);
    $tanggal_lahir = $conn->real_escape_string($_POST["tanggal_lahir"]);
    $usia = $conn->real_escape_string($_POST["usia"]);
    $agama = $conn->real_escape_string($_POST["agama"]);
    $pendidikan = $conn->real_escape_string($_POST["pendidikan"]);
    $pekerjaan = $conn->real_escape_string($_POST["pekerjaan"]);
    $status = $conn->real_escape_string($_POST["status"]);

    // Perform database update
    $sql = "UPDATE tb_penduduk SET
        nama = '$nama',
        no_kk = '$kk',
        nik = '$nik',
        alamat = '$alamat',
        rt = '$rt',
        jk = '$jk',
        tempat_lahir = '$tempat_lahir',
        tanggal_lahir = '$tanggal_lahir',
        usia = '$usia',
        agama = '$agama',
        pendidikan = '$pendidikan',
        pekerjaan = '$pekerjaan',
        status = '$status'
        WHERE id_penduduk = '$id_penduduk'";

    if ($conn->query($sql) === TRUE) {
        // Record updated successfully, redirect to your data_penduduk.php page
        header("Location: data_penduduk.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
