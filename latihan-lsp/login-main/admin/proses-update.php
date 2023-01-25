<?php
// include koneksi
include '../koneksi_db.php';

// menangkap data yang ada di form
$id_buku = $_POST['id_buku'];
$id_katalog = $_POST['id_katalog'];
$judul_buku = $_POST['judul_buku'];
$pengarang = $_POST['pengarang'];
$thn_terbit = $_POST['thn_terbit'];
$penerbit = $_POST['penerbit'];
$qty = $_POST['qty'];


// menginput database
$notif = mysqli_query($koneksi,"update buku set id_katalog='$id_katalog', judul_buku='$judul_buku', pengarang='$pengarang', thn_terbit='$thn_terbit', penerbit='$penerbit' where id_buku='$id_buku'");
if($notif){
    ?>
    <script>
        alert('Data Berhasil Di Update');
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