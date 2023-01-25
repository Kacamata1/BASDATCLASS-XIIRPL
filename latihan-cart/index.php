
<?php
session_start();

//cek jika produk sudah masuk ke get atau belum
if (isset($_GET['produk'])) {
    $produk = $_GET['produk'];
    
    //jika session cartnya tidak kosong 
    if (!empty($_SESSION['cart'])) {
        // ambil get id produk menggunakan array_count
        $barang = array_column($_SESSION['cart'],'produk');
        
        // sekarang kita samakan yang ada di data session
        if (in_array($produk, $barang)) {
            //update jika barangnya sama yang ada di keranjang
            //tambahkan barangnya 1
            $_SESSION['cart'][$produk]['quantity'] += 1;
        }else {
            // barang belum sama sekali ditambahkan
            $item = ['produk' => $_GET['produk'],'quantity' => 1];

            $_SESSION['cart'][$produk] = $item;
        }
    }else {
        //jika keranjang sama sekali kosong
        $item = ['produk' => $_GET['produk'],'quantity' => 1];
        $_SESSION['cart'][$produk] = $item;
    }
}
?>
<?php include 'header.php';?>
<table border="1">
    <tr>
        <th>Nama</th>
        <th>Gambar</th>
        <th>Quantity</th>
        <th>Aksi</th>
        <tr>
            <td>
                <h3>Produk 1</h3>
                <p>Lorem ipsum dolor sit amet consectetur
                    adipisicing elit.</p>
            </td>
            <td>Gambar 1</td>
            <td>100</td>
           <td><a href="index.php?produk=1">tambahkan</a></td>
        </tr>
    </tr>
    <tr>
        <th>Nama</th>
        <th>Gambar</th>
        <th>Quantity</th>
        <th>Aksi</th>
        <tr>
            <td>
                <h3>Produk 2</h3>
                <p>Lorem ipsum dolor sit amet consectetur
                    adipisicing elit.</p>
            </td>
            <td>Gambar 2</td>
            <td>320</td>
           <td><a href="index.php?produk=2">tambahkan</a></td>
        </tr>
    </tr>
    <tr>
        <th>Nama</th>
        <th>Gambar</th>
        <th>Quantity</th>
        <th>Aksi</th>
        <tr>
            <td>
                <h3>Produk 3</h3>
                <p>Lorem ipsum dolor sit amet consectetur
                    adipisicing elit.</p>
            </td>
            <td>Gambar 3</td>
            <td>210</td>
           <td><a href="index.php?produk=3">tambahkan</a></td>
        </tr>
    </tr>
</table>
<?php include 'footer.php';?>