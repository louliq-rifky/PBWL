<?php

$pengunjung = new App\Pengunjung;
$rows = $pengunjung->tampil();

?>

<h2>Data Pengunjung</h2>

<a href="index.php?hal=pengunjung_input" class="btn">Tambah Pengunjung</a>

<table>
    <tr>
        <th>ID</th>
        <th>ID TIKET PENGUNJUNG</th>
        <th>NAMA PENGUNJUNG</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php 
    require_once "inc/Koneksi.php";
    $pengunjung = mysqli_query($conn, "SELECT * FROM tb_tiket
    INNER JOIN tb_pengunjung ON tb_pengunjung.pengunjung_id_tiket = tb_tiket.tiket_id");
    while($row = mysqli_fetch_array($pengunjung)){
        ?>
    <tr>
        <td><?php echo $row['pengunjung_id']; ?></td>
        <td><?php echo $row['pengunjung_id_tiket']; ?></td>
        <td><?php echo $row['pengunjung_name']; ?></td>
        <td><a class="edit" href="index.php?hal=pengunjung_edit&id=<?php echo $row['pengunjung_id']; ?>">Edit</a></td>
        <td><a class="delete" href="index.php?hal=pengunjung_delete&id=<?php echo $row['pengunjung_id']; ?>">Delete</a></td>
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
