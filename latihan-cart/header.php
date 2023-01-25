<html>
    <head>
        <title>Simple Keranjang</title>
    </head>
    <body>
        <h1>Selamat Datang</h1>
        <h3>Silahkan pilih itemnya</h3>
        <a href="index.php">Beranda</a>
        <!-- Session -->
        <a href="cart.php">Cart
        <?php if (isset($_SESSION['cart'])) : ?>
        <?php count($_SESSION['cart']) ;; ?>
        <?php endif ?>
        </a>
        <!-- Session -->
