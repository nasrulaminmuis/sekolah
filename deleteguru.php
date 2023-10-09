<?php
include 'koneksi.php';
$GuruID = $_GET['GuruID'];

// Query untuk mengupdate data siswa
$queryUpdateSiswa = "DELETE FROM Guru WHERE GuruID = '$GuruID';";

if (mysqli_query($conn, $queryUpdateSiswa)) {
    // Menampilkan kotak konfirmasi menggunakan JavaScript
    echo "<script>";
    echo "if (confirm('Data siswa berhasil dihapus. Kembali ke halaman data siswa?')) {";
    echo "  window.location.href = 'guru.php';";
    echo "}";
    echo "</script>";
} else {
    echo "Error: " . $queryUpdateSiswa . "<br>" . mysqli_error($conn);
}
?>