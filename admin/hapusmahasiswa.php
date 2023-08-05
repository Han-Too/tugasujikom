<?php
include '../config.php';

// mengaktifkan session
session_start();

// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if ($_SESSION['status'] != "login") {
    header("location:../index.php");
}
$nim = $_GET["nim"];
$data = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE NIM = '$nim'");

if (!$nambah) {
    echo "<script>alert('YEEEY BERHASIL');window.location='mahasiswa.php'</script>";
} else {
    echo "<script>alert('GAGAL COK');window.location='mahasiswa.php'</script>";
}

?>