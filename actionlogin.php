<?php
session_start();
include "koneksi.php";

$nis = $_POST['nis'];
$pw = $_POST['pw'];

if ($nis === "" or $pw === "") {
    header("Location: login.php?kosong=true");
} elseif ($nis === 'admin' and $pw === "admin") {
    $_SESSION['login'] = true;
    $_SESSION['username'] = "admin";
    header("Location: index.php");
} else {
    $pilnis = "SELECT * FROM user WHERE nis = $nis;";
    $ceknis = mysqli_query($conn, $pilnis);
    $hceknis = mysqli_fetch_assoc($ceknis);
    if ($hceknis === NULL or $hceknis['pw'] != $pw) {
        header("Location: login.php?tada=true");
    } else {
        $daftar = "INSERT INTO user (nis,pw) VALUES ($nis,$pw);";
        $isberhasil = mysqli_query($conn, $daftar);
        if ($isberhasil) {
            $pilnama = "SELECT Nama FROM Siswa WHERE NISN = $nis;";
            $ceknama = mysqli_query($conn, $pilnama);
            $hceknama = mysqli_fetch_assoc($ceknama);
            $_SESSION['username'] = $hceknama['Nama'];
            // echo "ini jalan";
            header("Location: index.php");
        } else {
            echo "<h1>Terjadi ERROR</h1>";
        }
    }
}
?>