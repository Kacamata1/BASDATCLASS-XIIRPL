<?php include 'header.php';?>

<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Quantity</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (isset($_SESSION['cart'])) : 
        $i = 1;
        foreach ($_SESSION['cart'] as $cart) :
        ?>
        <tr>
            <td><?php echo $i;?></td>
            <td>Produk <?= $cart['produk'];?></td>
            <td>
                <form action="update.php" method="post">
                    <input type="number" value="<?= $cart['quantity'];?>" name="qty" min="1">
                    <!-- input type hidden untuk update -->
                    <input type="hidden" name="up_produk" value="<?= $cart['produk'];?>">
                </td>
                <td>
                    <input type="submit" name="update" value="Update">
                </form>
            </td>
            <td>
                <a href="hapus.php?id=<?= $cart['produk'];?>">Hapus</a>
            </td>
        </tr>
        <?php
        $i++;
        endforeach;
    endif;
        ?>
    </tbody>
</table>
<?php include 'footer.php';?>