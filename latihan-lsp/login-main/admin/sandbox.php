<html>
    <head>
        <title>SANDBOX</title>
    </head>
    <body>
        <h1>Welcome to sandbox</h1>
        <h3>Lets Eksperimen</h3>

        <!-- Form Searching -->
        <form action="sandbox.php" method="get">
            <label>Cari</label>
            <input type="text" name="cari">
            <input type="submit" value="search">
        </form>

        <?php
        //Judul Hasil Pencarian
        include '../koneksi_db.php';
        if (isset($_GET['cari'])) {
            $cari = $_GET['cari'];
            echo "Hasil Pencarian : ".$cari;
        }
        ?>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama</th>
            </tr>
            <!-- Form Searching -->
            <?php
        include '../koneksi_db.php';
        if (isset($_GET['cari'])) {
            $cari = $_GET['cari'];
            $data = mysqli_query($koneksi, "select * from anggota where nama like '%".$cari."%'");
        }else {
            $data = mysqli_query($koneksi, "select * from anggota");
        }
        // hasil pencarian muncul disini
        $no = 1;
        while ($meledak = mysqli_fetch_array($data)) {
        ?>
        <tr>
            <th><?php echo $no++; ?></th>
            <th><?php echo $meledak['nama']; ?></th>
        </tr>
        <?php
                }
        ?>
    </table>
    </body>
    </html>