<?php
include '../../config/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all necessary fields are present
    if (isset($_POST["id_desa"], $_POST["nama_desa"], $_POST["kelurahan"],$_POST['tahun_pembentukan'], $_POST["dasar_hukum_pembentukan"], $_POST["nomor_kota_wilayah"], $_POST["kode_pos"], $_POST["kecamatan"], $_POST["kabupaten_kota"], $_POST["provinsi"], $_POST["tingkat_perkembangan_desa"], $_POST["luas_wilayah"], $_POST["umr_kabupaten"])) {
        // Sanitize input data
        $id_desa = $_POST["id_desa"];
        $nama_desa = mysqli_real_escape_string($conn, $_POST["nama_desa"]);
        $kelurahan = mysqli_real_escape_string($conn, $_POST["kelurahan"]);
        $tahun_pembentukan = mysqli_real_escape_string($conn, $_POST["tahun_pembentukan"]);
        $dasar_hukum_pembentukan = mysqli_real_escape_string($conn, $_POST["dasar_hukum_pembentukan"]);
        $nomor_kota_wilayah = mysqli_real_escape_string($conn, $_POST["nomor_kota_wilayah"]);
        $kode_pos = mysqli_real_escape_string($conn, $_POST["kode_pos"]);
        $kecamatan = mysqli_real_escape_string($conn, $_POST["kecamatan"]);
        $kabupaten_kota = mysqli_real_escape_string($conn, $_POST["kabupaten_kota"]);
        $provinsi = mysqli_real_escape_string($conn, $_POST["provinsi"]);
        $tingkat_perkembangan_desa = mysqli_real_escape_string($conn, $_POST["tingkat_perkembangan_desa"]);
        $luas_wilayah = mysqli_real_escape_string($conn, $_POST["luas_wilayah"]);
        $umr_kabupaten = mysqli_real_escape_string($conn, $_POST["umr_kabupaten"]);

        // Set a lower isolation level for the duration of this transaction
        mysqli_query($conn, "SET TRANSACTION ISOLATION LEVEL READ COMMITTED");

        // Start the transaction
        mysqli_begin_transaction($conn);

        // Update data in the database
        $update_query = "UPDATE desa SET
            nama_desa='$nama_desa',
            kelurahan='$kelurahan',
            tahun_pembentukan='$tahun_pembentukan',
            dasar_hukum_pembentukan='$dasar_hukum_pembentukan',
            nomor_kota_wilayah='$nomor_kota_wilayah',
            kode_pos='$kode_pos',
            kecamatan='$kecamatan',
            kabupaten_kota='$kabupaten_kota',
            provinsi='$provinsi',
            tingkat_perkembangan_desa='$tingkat_perkembangan_desa',
            luas_wilayah='$luas_wilayah',
            umr_kabupaten='$umr_kabupaten'
            WHERE id_desa=$id_desa";

        $result = mysqli_query($conn, $update_query);

        if ($result) {
            // Commit the transaction
            mysqli_commit($conn);

            echo "Update successful. Redirecting...";
            // Redirect back to the original page after a short delay
            header("Refresh: 2; URL=data_desa.php");
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
