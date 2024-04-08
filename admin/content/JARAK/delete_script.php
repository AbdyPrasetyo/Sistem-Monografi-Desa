<?php
include '../../config/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Check if the ID parameter is set in the URL
    if (isset($_GET["id_jarak_pemerintahan"])) {
        $id_jarak_pemerintahan = $_GET["id_jarak_pemerintahan"];

        // Add debug information
        echo "ID received: $id_jarak_pemerintahan";

        // Delete data from the database
        $delete_query = "DELETE FROM jarak_pemerintahan WHERE id_jarak_pemerintahan = $id_jarak_pemerintahan";

        $result = mysqli_query($conn, $delete_query);

        if ($result) {
            echo "Delete successful. Redirecting...";
            // Redirect back to the original page after a short delay
            header("Refresh: 2; URL=jarak_pemerintahan.php");
        } else {
            echo "Delete failed: " . mysqli_error($conn);
        }
    } else {
        echo "ID not specified in the URL";
    }
} else {
    echo "Invalid request method";
}

// Close the database connection
mysqli_close($conn);
?>
