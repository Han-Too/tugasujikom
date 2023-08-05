<?php

include '../config.php';

if(isset($_POST['tambah'])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $ttl = $_POST['ttl'];
    $alamat = $_POST['alamat'];
    
    $nambah = mysqli_query($koneksi,"INSERT INTO mahasiswa VALUES('".$nim."','".$nama."','".$ttl."','".$alamat."')");

    if($nambah){
        echo "<script>alert('YEEEY BERHASIL');window.location='mahasiswa.php'</script>";
    }else{
    echo "<script>alert('GAGAL COK');window.location='mahasiswa.php'</script>";}
}

?>