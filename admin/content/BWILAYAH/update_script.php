<?php
include '../../config/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all necessary fields are present
    if (isset($_POST["id_batas_wilayah"], $_POST["utara"], $_POST["selatan"], $_POST["timur"], $_POST["barat"])) {
        // Sanitize input data
        $id_batas_wilayah = $_POST["id_batas_wilayah"];
        $utara = mysqli_real_escape_string($conn, $_POST["utara"]);
        $selatan = mysqli_real_escape_string($conn, $_POST["selatan"]);
        $timur = mysqli_real_escape_string($conn, $_POST["timur"]);
        $barat = mysqli_real_escape_string($conn, $_POST["barat"]);

        // Set a lower isolation level for the duration of this transaction
        mysqli_query($conn, "SET TRANSACTION ISOLATION LEVEL READ COMMITTED");

        // Start the transaction
        mysqli_begin_transaction($conn);

        // Update data in the database
        $update_query = "UPDATE batas_wilayah SET
            utara='$utara',
            selatan='$selatan',
            timur='$timur',
            barat='$barat'
            WHERE id_batas_wilayah='$id_batas_wilayah'";

        $result = mysqli_query($conn, $update_query);

        if ($result) {
            // Commit the transaction
            mysqli_commit($conn);

            echo "Update successful. Redirecting...";
            // Redirect back to the original page after a short delay
            header("Refresh: 2; URL=batas_wilayah.php");
        } else {
            // Rollback the transaction in case of failure
            mysqli_rollback($conn);

            echo "Update failed: " . mysqli_error($conn);
        }

        // Revert to the default isolation level
        mysqli_query($conn, "SET TRANSACTION ISOLATION LEVEL REPEATABLE READ");
    } else {
        echo "Invalid form submission. Required fields are missing.";
    }
} else {
    echo "Invalid request method";
}

// Close the database connection
mysqli_close($conn);
?>
