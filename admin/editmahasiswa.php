<?php
include '../config.php';

// mengaktifkan session
session_start();

// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if ($_SESSION['status'] != "login") {
    header("location:../index.php");
}
$nim = $_GET["nim"];
$data = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE NIM = '$nim'");
while($d = mysqli_fetch_array($data)){
?>
<?php include("header.php"); ?>

<div class="fs-1 fw-bolder card-title">Edit Mahasiswa</div>

<a class="btn btn-primary mb-2" href="javascript:history.back();">
    Kembali
</a>
    <form action="">
        <div class="mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input type="text" class="form-control" value="<?=$d['NIM'];?>" id="nim">
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" value="<?=$d['Nama_Mahasiswa'];?>" id="nama">
        </div>
        <div class="mb-3">
            <label for="ttl" class="form-label">TTL</label>
            <input type="text" class="form-control" value="<?=$d['Tempat_Tanggal_Lahir'];?>" id="ttl">
        </div>
        <div class="mb-5">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" value="<?=$d['Alamat_Mahasiswa'];?>" id="alamat">
        </div>
        <div class="mb-3">
            <div class="d-grid gap-2 mt-xl-2">
                <button type="submit" class="btn btn-success py-2">Kirim</button>
            </div>
        </div>
    </form>
    <?php } ?>
    <?php include 'footer.php'; ?>
    <!-- <br/>
<br/>