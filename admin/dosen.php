<?php
include '../config.php';

// mengaktifkan session
session_start();

// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if ($_SESSION['status'] != "login") {
    header("location:../index.php");
}

// menampilkan pesan selamat datang
// echo "Hai, selamat datang ". $_SESSION['username'];

?>
<?php include("header.php"); ?>

<div class="card-body">
    <div class="fw-bold fs-2 mb-3">
        Data Dosen
    </div>
    <a class="btn btn-success mb-2" href="tambahdosen.php">
        Tambah Data
    </a>
    <table class="table table-success">
        <tr>
            <th class="bg-success text-center text-light">NO</th>
            <th class="bg-success text-center text-light">NIP</th>
            <th class="bg-success text-center text-light">Nama</th>
            <th class="bg-success text-center text-light">Mata Kuliah</th>
            <th class="bg-success text-center text-light">Kode MataKuliah</th>
            <th class="bg-success text-center text-light">OPSI</th>
        </tr>
        <?php
        include '../config.php';
        $no = 1;
        $data = mysqli_query($koneksi, "select * from dosen");
        while ($d = mysqli_fetch_array($data)) {
            ?>
            <tr>
                <td class="text-center">
                    <?php echo $no++; ?>
                </td>
                <td class="text-center">
                    <?php echo $d['Nip_Dosen']; ?>
                </td>
                <td class="text-center">
                    <?php echo $d['Nama_Dosen']; ?>
                </td>
                <td class="text-center">
                    <?php echo $d['Nama_Matakuliah']; ?>
                </td>
                <td class="text-center">
                    <?php echo $d['Kode_matakuliah']; ?>
                </td>
                <td class="text-center">
                    <a href="" class="btn btn-primary">EDIT</a>
                    <a href="" class="btn btn-danger">HAPUS</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>

    <?php include 'footer.php'; ?>
    <!-- <br/>
<br/>