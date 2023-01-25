<html>
    <head>
        <title>Cart</title>
    </head>
    <body>
        <h1>Cart</h1>
        <h3>Keranjang Anda Terisi :</h3>
        
        <?php 
        
        include '../koneksi.php';
        $id_buku = $_GET['id_buku'];
        $data = mysqli_query($koneksi,"SELECT * FROM buku WHERE id_buku = '$id_buku'");
        
        foreach ($data as $buku)
            echo "<tr>";
            echo "<td>".$buku['id_buku']."</td>";
            echo "<td>".$buku['id_katalog']."</td>";
            echo "<td>".$buku['judul_buku']."</td>";
            echo "<td>".$buku['pengarang']."</td>";
            echo "<td>".$buku['thn_terbit']."</td>";
            echo "<td>".$buku['penerbit']."</td>";
        
        ?>
    </body>
</html>