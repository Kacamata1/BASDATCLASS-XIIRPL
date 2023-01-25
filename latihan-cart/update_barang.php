<?php
session_start();
if ($_POST['update']) {
    $update = $_POST['update'];
    $barang = array_column($_SESSION['cart'], 'produk');

    if (in_array($_POST['update'], $barang)) {
        $_SESSION['cart'][$produk]['quantity'] = $_POST['quantity'];
    }else {
        $item = ['produk' => $produk, 'quantity' => 1];
        $_SESSION['cart'][$produk] = $item;
    }
    header("location: cart.php");
}
?>