<?php
include '../../config/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all necessary fields are present
    if (isset($_POST["id_topologi"], $_POST["jenis_topologi"], $_POST["jumlah"])) {
        // Sanitize input data
        $id_topologi = $_POST["id_topologi"];
        $jenis_topologi = mysqli_real_escape_string($conn, $_POST["jenis_topologi"]);
        $jumlah = mysqli_real_escape_string($conn, $_POST["jumlah"]);

        // Set a lower isolation level for the duration of this transaction
        mysqli_query($conn, "SET TRANSACTION ISOLATION LEVEL READ COMMITTED");

        // Start the transaction
        mysqli_begin_transaction($conn);

        // Update data in the database
        $update_query = "UPDATE topologi_desa SET
            jenis_topologi='$jenis_topologi',
            jumlah='$jumlah'
            WHERE id_topologi=$id_topologi";

        $result = mysqli_query($conn, $update_query);

        if ($result) {
            // Commit the transaction
            mysqli_commit($conn);

            echo "Update successful. Redirecting...";
            // Redirect back to the original page after a short delay
            header("Refresh: 2; URL=topologi.php");
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
