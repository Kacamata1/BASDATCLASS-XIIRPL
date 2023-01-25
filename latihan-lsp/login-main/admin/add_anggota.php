<html>
    <head>
        <title>Tambah Buku</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <body>
    <div class="container text-center">
  <div class="row align-items-center">
        <h1>Tambah Data Anggota</h1>
            <form action="proses-tambah-anggota.php" method="post">
            <div class="container" style="margin-top: 80px">
            <div class="row">
            <div class="col-md-12">
            <div class="card">

                <label>Nama</label>
                <input type="text" name="nama">
                <br>
                <label>No Telp</label>
                <input type="text" name="no_telp">
                <br>
                <label>Alamat</label>
                <input type="text" name="alamat">
                <br>
                <label>Email</label>
                <input type="text" name="email">
                <br>
                <label>Password</label>
                <input type="text" name="password">
                <br>
                <button type="submit">Submit</button>
                </div>
                </div>
                </div>
                </div>
                </div>

            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    </body>
</html>