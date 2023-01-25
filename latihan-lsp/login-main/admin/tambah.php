<html>
    <head>
        <title>Tambah Buku</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
        <div class="form">
    <h1>Tambah Data Buku</h1>
    <center>
            <form action="proses-tambah.php" method="post">
            <div class="row">
                <div class="col">
                <label>Id Katalog</label>
                <input type="text" class="form-control" name="id_katalog">
                </div>
                <div class="buku">
                <label>Judul Buku</label>
                <input type="text"  class="form-control" name="judul_buku">
                </div>
                <div class="pengarang">
                <label>Pengarang</label>
                <input type="text"  class="form-control" name="pengarang">
                </div>
                <div class="tahun">
                <label>Tahun Terbit</label>
                <input type="date"  class="form-control" name="thn_terbit">
                </div>
                <div class="penerbit">
                <label>Penerbit</label>
                <input type="text"  class="form-control" name="penerbit">
                </div>
                <br>
                <button type="submit">Submit</button>
                </div>
            </form>
        </table>
        </center>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
        
    </body>
</html>