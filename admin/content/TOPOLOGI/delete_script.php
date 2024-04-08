<?php
include '../../config/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Check if the ID parameter is set in the URL
    if (isset($_GET["id_topologi"])) {
        $id_topologi = $_GET["id_topologi"];

        // Add debug information
        echo "ID received: $id_topologi";

        // Delete data from the database
        $delete_query = "DELETE FROM topologi_desa WHERE id_topologi = $id_topologi";

        $result = mysqli_query($conn, $delete_query);

        if ($result) {
            echo "Delete successful. Redirecting...";
            // Redirect back to the original page after a short delay
            header("Refresh: 2; URL=topologi.php");
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
