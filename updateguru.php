<?php 
include 'koneksi.php';
$GuruID = $_POST['GuruID'];
$queryGuru = "SELECT * FROM Guru WHERE GuruID = '$GuruID'";
$resultGuru = mysqli_query($conn, $queryGuru);

if ($resultu = mysqli_fetch_assoc($resultGuru)) {
    // Memproses data jika formulir dikirimkan (POST)
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $NISN = $_POST['GuruID'];
        $Nama = $_POST['Nama'];
        $Alamat = $_POST['Alamat'];
        $JenisKelamin = $_POST['JenisKelamin'];
        $TanggalLahir = $_POST['TanggalLahir'];

        // Query untuk mengupdate data siswa
        $queryUpdateGuru = "UPDATE Guru
                             SET Nama = '$Nama', Alamat = '$Alamat', JenisKelamin = '$JenisKelamin', TanggalLahir = '$TanggalLahir'
                             WHERE GuruID = '$GuruID'";

        if (mysqli_query($conn, $queryUpdateGuru)) {
            // Menampilkan kotak konfirmasi menggunakan JavaScript
            echo "<script>";
            echo "if (confirm('Data siswa berhasil diperbarui. Kembali ke halaman tampil data?')) {";
            echo "  window.location.href = 'guru.php';";
            echo "}";
            echo "</script>";
        } else {
            echo "Error: " . $queryUpdateGuru . "<br>" . mysqli_error($conn);
        }
    }
} else {
    echo "Data siswa tidak ditemukan.";
}
?>