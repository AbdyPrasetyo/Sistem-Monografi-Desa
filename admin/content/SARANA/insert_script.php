<?php
// Database connection details
include '../../config/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data (sanitize input to prevent SQL injection)
    $sarana_desa = $conn->real_escape_string($_POST["sarana_desa"]);
    $jumlah = $conn->real_escape_string($_POST["jumlah"]);


    // Perform database insert
    $sql = "INSERT INTO sarana_prasarana
        (sarana_desa, jumlah)
        VALUES
        ('$sarana_desa', '$jumlah')";



    if ($conn->query($sql) === TRUE) {
        // Record inserted successfully, redirect to index.php


        echo "create successful. Redirecting...";
        // Redirect back to the original page afte
        header("Location: sarana_desa.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
