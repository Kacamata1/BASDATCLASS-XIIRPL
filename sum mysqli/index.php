<html>
    <head>
        <title>Jumlah Barang</title>
    </head>
    <body>
        <h2><a href=""></a></h2>
        <style>
            body{
                font-family: 'Roboto';
            }
            table{
                border-collapse:collapse;
            }
            table, th, td{
                border:1px solid black;
                padding:10px;
            }
        </style>
    </body>
</html>

<?php
include 'koneksi.php';
// Ngambil Data Barang
$data_barang = mysqli_query($koneksi, "select * from barang");
//Menghitung Data Barang
$jumlah_barang = mysqli_num_rows($data_barang);
?>
<p>Jumlah Data Barang : <b><?php echo $jumlah_barang; ?></b></p>

<table border="1">
    <thead>
        <tr>
            <th>Kode</th>
            <th>Barang</th>
            <th>Jumlah</th>
            <th>Harga</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $barang = mysqli_query($koneksi, "select * from barang");
        while($b = mysqli_fetch_array($barang)) {
        ?>
        <tr>
            <td><?php echo $b['kode'];?></td>
            <td><?php echo $b['nama_barang'];?></td>
            <td><?php echo $b['jumlah'];?></td>
            <td><?php echo "Rp. ".number_format($b['harga'])." ,-"; ?></td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>
</body>
</html>
