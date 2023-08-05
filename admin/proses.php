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

if(isset($_POST['updatemhs'])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $ttl = $_POST['ttl'];
    $alamat = $_POST['alamat'];
    
    $update = mysqli_query($koneksi,"UPDATE mahasiswa SET Nama_Mahasiswa='$nama', Tempat_Tanggal_Lahir='$ttl', Alamat_Mahasiswa='$alamat' WHERE NIM='$nim'");

    if($update){
        echo "<script>alert('YEEEY BERHASIL');window.location='mahasiswa.php'</script>";
    }else{
    echo "<script>alert('GAGAL COK');window.location='mahasiswa.php'</script>";}
}

if(isset($_POST['tambahdosen'])){
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $matkul = $_POST['namamatkul'];
    $kdmatkul = $_POST['kdmatkul'];
    
    $nambah = mysqli_query($koneksi,"INSERT INTO dosen VALUES('".$nip."','".$nama."','".$matkul."','".$kdmatkul."')");

    if($nambah){
        echo "<script>alert('YEEEY BERHASIL');window.location='dosen.php'</script>";
    }else{
    echo "<script>alert('GAGAL COK');window.location='dosen.php'</script>";}
}
if(isset($_POST['updatedosen'])){
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $matkul = $_POST['namamatkul'];
    $kdmatkul = $_POST['kdmatkul'];
    
    $nambah = mysqli_query($koneksi,"UPDATE dosen SET Nama_Dosen = '$nama', Nama_Matakuliah = '$matkul', Kode_matakuliah = '$kdmatkul' WHERE Nip_Dosen = '$nip'");

    if($nambah){
        echo "<script>alert('YEEEY BERHASIL');window.location='dosen.php'</script>";
    }else{
    echo "<script>alert('GAGAL COK');window.location='dosen.php'</script>";}
}


?>