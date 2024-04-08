<?php
// Database connection details
include '../../config/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data (sanitize input to prevent SQL injection)
    $utara = $conn->real_escape_string($_POST["utara"]);
    $selatan = $conn->real_escape_string($_POST["selatan"]);
    $timur = $conn->real_escape_string($_POST["timur"]);
    $barat = $conn->real_escape_string($_POST["barat"]);


    // Perform database insert
    $sql = "INSERT INTO batas_wilayah
        (utara, selatan, timur, barat)
        VALUES
        ('$utara', '$selatan', '$timur', '$barat')";



    if ($conn->query($sql) === TRUE) {
        // Record inserted successfully, redirect to index.php


        echo "create successful. Redirecting...";
        // Redirect back to the original page afte
        header("Location: batas_wilayah.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
