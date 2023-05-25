<?php

$id = $_GET['id'];
$tiket = new App\Tiket();

$row = $tiket->edit($id);
?>

<h2>Edit Tiket</h2>

<form action="tiket_proses.php" method="post">
    <input type="hidden" name="tiket_id" value="<?php echo $row['tiket_id']; ?>">
    <table>
        <tr>
            <td>ID</td>
            <td><input type="number" name="tiket_id" value="<?php echo $row['tiket_id']; ?>"></td>
        </tr>
        <tr>
            <td>KATEGORI</td>
            <td><input type="text" name="tiket_name" value="<?php echo $row['tiket_name']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input class="update" type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>
<style>
    .update{
    background-color: #1a6ed8;
    border-radius: 4px;
    color: #ffffff;
    padding: 5px;
}
</style>