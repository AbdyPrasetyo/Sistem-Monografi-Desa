<?php
include '../../config/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all necessary fields are present
    if (isset($_POST["id_jarak_pemerintahan"], $_POST["kecamatan"], $_POST["kabupaten"], $_POST["provinsi"])) {
        // Sanitize input data
        $id_jarak_pemerintahan = $_POST["id_jarak_pemerintahan"];
        $kecamatan = mysqli_real_escape_string($conn, $_POST["kecamatan"]);
        $kabupaten = mysqli_real_escape_string($conn, $_POST["kabupaten"]);
        $provinsi = mysqli_real_escape_string($conn, $_POST["provinsi"]);

        // Set a lower isolation level for the duration of this transaction
        mysqli_query($conn, "SET TRANSACTION ISOLATION LEVEL READ COMMITTED");

        // Start the transaction
        mysqli_begin_transaction($conn);

        // Update data in the database
        $update_query = "UPDATE jarak_pemerintahan SET
            kecamatan='$kecamatan',
            kabupaten='$kabupaten',
            provinsi='$provinsi'
            WHERE id_jarak_pemerintahan='$id_jarak_pemerintahan'";

        $result = mysqli_query($conn, $update_query);

        if ($result) {
            // Commit the transaction
            mysqli_commit($conn);

            echo "Update successful. Redirecting...";
            // Redirect back to the original page after a short delay
            header("Refresh: 2; URL=jarak_pemerintahan.php");
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
