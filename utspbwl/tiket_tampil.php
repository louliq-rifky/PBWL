<?php

$tiket = new App\Tiket;
$rows = $tiket->tampil();

?>

<h2>Ticket</h2>

<a href="index.php?hal=tiket_input" class="btn">Tambah Ticket</a>

<table>
    <tr>
        <th>ID</th>
        <th>JENIS TIKET</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['tiket_id']; ?></td>
        <td><?php echo $row['tiket_name']; ?></td>
        <td><a class="edit" href="index.php?hal=tiket_edit&id=<?php echo $row['tiket_id']; ?>">Edit</a></td>
        <td><a class="delete" href="index.php?hal=tiket_delete&id=<?php echo $row['tiket_id']; ?>">Delete</a></td>
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
