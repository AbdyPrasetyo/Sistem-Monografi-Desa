<?php
// Database connection details
include '../../config/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Retrieve data from the URL parameter
    $id_penduduk = $conn->real_escape_string($_GET["id_penduduk"]);

    // Perform database delete
    $sql = "DELETE FROM tb_penduduk WHERE id_penduduk = '$id_penduduk'";

    if ($conn->query($sql) === TRUE) {
        // Record deleted successfully, redirect to your data_penduduk.php page
        header("Location: data_penduduk.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
