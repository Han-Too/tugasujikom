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
<?php include("header.php");?>

<div class="card-body">
    <table class="table table-success">
        <tr>
            <th class="text-center">NO</th>
            <th class="text-center">NIM</th>
            <th class="text-center">Nama</th>
            <th class="text-center">TTL</th>
            <th class="text-center">Alamat</th>
            <th class="text-center">OPSI</th>
        </tr>
        <?php
        include '../config.php';
        $no = 1;
        $data = mysqli_query($koneksi, "select * from mahasiswa");
        while ($d = mysqli_fetch_array($data)) {
            ?>
            <tr>
                <td class="text-center">
                    <?php echo $no++; ?>
                </td>
                <td class="text-center">
                    <?php echo $d['NIM']; ?>
                </td>
                <td class="text-center">
                    <?php echo $d['Nama_Mahasiswa']; ?>
                </td>
                <td class="text-center">
                    <?php echo $d['Tempat_Tanggal_Lahir']; ?>
                </td>
                <td class="text-center">
                    <?php echo $d['Alamat_Mahasiswa']; ?>
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

<?php include 'footer.php';?>
<!-- <br/>
<br/>
