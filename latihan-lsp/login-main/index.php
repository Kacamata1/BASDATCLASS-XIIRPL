<html>
    <head>
        <title>Selamat Datang Di Perpustakaan</title>
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
    </head>
    <body>
    <section class="vh-100" style="background-color: #D9D7D6;">
            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Selamat Datang Di Web Ecommerce</h3>
            <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Silahkan Pilih Admin Atau Anggota</h5>
            <!-- buat dropdwon d sini -->
            <table class="table table-bordered" id="myTable">
        <tr>
            <th>judul buku</th>
            <th>pengarang</th>
            <th>tahun terbit</th>
            <th>penerbit</th>
            <th>Quantity</th>
        </tr>

        <!-- menampilkan data buku -->
        <?php 
        include 'koneksi_db.php';
        $buku = mysqli_query($koneksi, "SELECT * FROM buku");
        foreach ($buku as $row){
            echo "<tr>";
            echo "<td>".$judul = $row['judul_buku']."</td>";
            echo "<td>".$pengarang = $row['pengarang']."</td>";
            echo "<td>".$thn_terbit = $row['thn_terbit']."</td>";
            echo "<td>".$penerbit = $row['penerbit']."</td>";
            echo "<td>".$qty = $row['qty']."</td>";
            ?>
            <?php 
            echo "</tr>";
        }
        ?>
        


            <table>
            <div class="container" style="margin-top: 30px">

            <!-- Admin -->
            <a href="admin/login_admin.php" class="btn btn-info btn-lg btn-block" role="button">
            <i class="fab fa-twitter me-2"></i>Admin</a>

            <!-- Anggota -->
            <a href="user/login.php" class="btn btn-warning btn-lg btn-block" role="button">
            <i class="fab fa-twitter me-2"></i>Anggota</a>

            <!-- Hiasan -->
            <a href="#!" class="small text-muted">Terms of use.</a>
            <a href="#!" class="small text-muted">Privacy policy</a>

        </table>

        </form>
    </section>

        <!-- Footer Copyright -->
        <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-danger">
            <div class="text-white mb-3 mb-md-0">
                Made In Japan
            </div>
    </body>
</html>