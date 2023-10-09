<?php 
include 'koneksi.php';
$NISN = $_POST['NISN'];
$querySiswa = "SELECT * FROM Siswa WHERE NISN = '$NISN'";
$resultSiswa = mysqli_query($conn, $querySiswa);

if ($resultu = mysqli_fetch_assoc($resultSiswa)) {
    // Memproses data jika formulir dikirimkan (POST)
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $NISN = $_POST['NISN'];
        $Nama = $_POST['Nama'];
        $Alamat = $_POST['Alamat'];
        $JenisKelamin = $_POST['JenisKelamin'];
        $TanggalLahir = $_POST['TanggalLahir'];
        $KelasID = $_POST['KelasID'];

        // Query untuk mengupdate data siswa
        $queryUpdateSiswa = "UPDATE Siswa
                             SET Nama = '$Nama', Alamat = '$Alamat', JenisKelamin = '$JenisKelamin', TanggalLahir = '$TanggalLahir', KelasID = '$KelasID'
                             WHERE NISN = '$NISN'";

        if (mysqli_query($conn, $queryUpdateSiswa)) {
            // Menampilkan kotak konfirmasi menggunakan JavaScript
            echo "<script>";
            echo "if (confirm('Data siswa berhasil diperbarui. Kembali ke halaman tampil data?')) {";
            echo "  window.location.href = 'siswa.php';";
            echo "}";
            echo "</script>";
        } else {
            echo "Error: " . $queryUpdateSiswa . "<br>" . mysqli_error($conn);
        }
    }
} else {
    echo "Data siswa tidak ditemukan.";
}
?>