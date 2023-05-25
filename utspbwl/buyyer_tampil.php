<?php

$buyyer = new App\Buyyer;
$rows = $buyyer->tampil();

?>

<h2>DATA PEMBELIAN</h2>

<a href="index.php?hal=buyyer_input" class="btn">Tambah Pembelian</a>

<table>
    <tr>
        <th>ID</th>
        <th>NAMA PEMBELI</th>
        <th>TANGGAL PEMBELIAN</th>
        <th>HARGA TIKET</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php 
    require_once "inc/Koneksi.php";
    $buyyer = mysqli_query($conn, "SELECT * FROM tb_pengunjung
    INNER JOIN tb_harga ON tb_harga.buyyer_id = tb_pengunjung.pengunjung_id");
    while($row = mysqli_fetch_array($buyyer)){
    ?>
    <tr>
        <td><?php echo $row['buyyer_id']; ?></td>
        <td><?php echo $row['buyyer_name']; ?></td>
        <td><?php echo $row['buy_date']; ?></td>
        <td><?php echo $row['harga']; ?></td>
        <td><a class="edit" href="index.php?hal=buyyer_edit&id=<?php echo $row['buyyer_id']; ?>">Edit</a></td>
        <td><a class="delete" href="index.php?hal=buyyer_delete&id=<?php echo $row['buyyer_id']; ?>">Delete</a></td>
    </tr>
    <?php } ?>
</table>

<style>
    .edit {
    background-color: #0c8e3c;
    border-radius: 4px;
    color: #ffffff;
    padding: 5px;
}
    .delete {
    background-color: #e40000;
    border-radius: 4px;
    color: #ffffff;
    padding: 5px;
}
</style>
