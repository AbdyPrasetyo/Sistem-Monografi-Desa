<?php
// Database connection details
include '../../config/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data (sanitize input to prevent SQL injection)
    $jenis_topologi = $conn->real_escape_string($_POST["jenis_topologi"]);
    $jumlah = $conn->real_escape_string($_POST["jumlah"]);


    // Perform database insert
    $sql = "INSERT INTO topologi_desa
        (jenis_topologi, jumlah)
        VALUES
        ('$jenis_topologi', '$jumlah')";



    if ($conn->query($sql) === TRUE) {
        // Record inserted successfully, redirect to index.php


        echo "create successful. Redirecting...";
        // Redirect back to the original page afte
        header("Location: topologi.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
