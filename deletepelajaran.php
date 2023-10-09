<?php
include 'koneksi.php';
$PelajaranID = $_GET['PelajaranID'];

// Query untuk mengupdate data siswa
$queryUpdatePelajaran = "DELETE FROM MataPelajaran WHERE PelajaranID = '$PelajaranID';";

if (mysqli_query($conn, $queryUpdatePelajaran)) {
    // Menampilkan kotak konfirmasi menggunakan JavaScript
    echo "<script>";
    echo "if (confirm('Data pelajaran berhasil dihapus. Kembali ke halaman data siswa?')) {";
    echo "  window.location.href = 'pelajaran.php';";
    echo "}";
    echo "</script>";
} else {
    echo "Error: " . $queryUpdatePelajaran . "<br>" . mysqli_error($conn);
}
?>