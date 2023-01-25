<?php
session_start();
if (isset($_GET['id'])) {
    $produk = $_GET['id'];

    unset($_SESSION['cart'][$produk]);
    header("location: cart.php");   
}
?>