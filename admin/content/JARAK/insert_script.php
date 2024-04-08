<?php
// Database connection details
include '../../config/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data (sanitize input to prevent SQL injection)
    $kecamatan = $conn->real_escape_string($_POST["kecamatan"]);
    $kabupaten = $conn->real_escape_string($_POST["kabupaten"]);
    $provinsi = $conn->real_escape_string($_POST["provinsi"]);


    // Perform database insert
    $sql = "INSERT INTO jarak_pemerintahan
        (kecamatan, kabupaten, provinsi)
        VALUES
        ('$kecamatan', '$kabupaten', '$provinsi')";



    if ($conn->query($sql) === TRUE) {
        // Record inserted successfully, redirect to index.php


        echo "create successful. Redirecting...";
        // Redirect back to the original page afte
        header("Location: jarak_pemerintahan.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
