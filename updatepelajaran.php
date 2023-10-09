<?php 
include 'koneksi.php';
$PelajaranID = $_POST['PelajaranID'];
$queryPelajaran = "SELECT * FROM MataPelajaran WHERE PelajaranID = '$PelajaranID'";
$resultPelajaran = mysqli_query($conn, $queryPelajaran);

if ($resultu = mysqli_fetch_assoc($resultPelajaran)) {
    // Memproses data jika formulir dikirimkan (POST)
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $PelajaranID = $_POST['PelajaranID'];
        $NamaPelajaran = $_POST['NamaPelajaran'];
        $Deskripsi = $_POST['Deskripsi'];
        $NamaGuru = $_POST['NamaGuru'];

        // Query untuk mengupdate data siswa
        $queryUpdatePelajaran = "UPDATE MataPelajaran
                             SET NamaPelajaran = '$NamaPelajaran', Deskripsi = '$Deskripsi', GuruID = '$NamaGuru'
                             WHERE PelajaranID = '$PelajaranID'";

        if (mysqli_query($conn, $queryUpdatePelajaran)) {
            // Menampilkan kotak konfirmasi menggunakan JavaScript
            echo "<script>";
            echo "if (confirm('Data siswa berhasil diperbarui. Kembali ke halaman tampil data?')) {";
            echo "  window.location.href = 'pelajaran.php';";
            echo "}";
            echo "</script>";
        } else {
            echo "Error: " . $queryUpdatePelajaran . "<br>" . mysqli_error($conn);
        }
    }
} else {
    echo "Data siswa tidak ditemukan.";
}
?>