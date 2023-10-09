<?php
include "koneksi.php";

$nis = $_POST['nis'];
$pw = $_POST['pw'];
$upw = $_POST['upw'];

if ($nis === "" or $pw === "" or $upw === "") {
    header("Location: register.php?kosong=true");
} elseif ($pw !== $upw) {
    header("Location: register.php?tsama=true");
}else {
    $pilnis = "SELECT NISN FROM Siswa WHERE NISN = $nis;";
    $ceknis = mysqli_query($conn, $pilnis);
    $hceknis = mysqli_fetch_assoc($ceknis);
    if ($hceknis === NULL) {
        header("Location: register.php?tada=true");
    }else {
        $daftar = "INSERT INTO user (nis,pw) VALUES ($nis,$pw);";
        $isberhasil=mysqli_query($conn,$daftar);
        if ($isberhasil) {
            header("Location: login.php?silahkan=true");
        }
        else{
            echo "<h1>Terjadi ERROR</h1>";
        }
    }
}
?>