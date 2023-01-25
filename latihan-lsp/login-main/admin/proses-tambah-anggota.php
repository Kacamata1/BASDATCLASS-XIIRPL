<?php
session_start();
include '../koneksi_db.php';

// Menangkap data yang dikirim dari login
$nama = $_POST['nama'];
$no_telp = $_POST['no_telp'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$password = $_POST['password'];

// Menyeleksi data dan dicocokan pada table admin xampp
$notif = mysqli_query($koneksi, "insert into anggota values('','$nama','$no_telp','$alamat','$email','$password')");

if($notif){
    ?>
    <script>
        alert('Data Berhasil Di Tambah');
        window.location='index.php';
    </script>
    <?php
}else{
    ?>
    <script>
        alert('Data Gagal Di Tambah');
        window.location='index.php';
    </script>
    <?php
}

?>