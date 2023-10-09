<?php
include 'koneksi.php';
$NISN = $_GET['NISN'];

// Query untuk mengupdate data siswa
$queryUpdateSiswa = "DELETE FROM Siswa WHERE NISN = '$NISN';";

if (mysqli_query($conn, $queryUpdateSiswa)) {
    // Menampilkan kotak konfirmasi menggunakan JavaScript
    echo "<script>";
    echo "if (confirm('Data siswa berhasil dihapus. Kembali ke halaman data siswa?')) {";
    echo "  window.location.href = 'siswa.php';";
    echo "}";
    echo "</script>";
} else {
    echo "Error: " . $queryUpdateSiswa . "<br>" . mysqli_error($conn);
}
?>