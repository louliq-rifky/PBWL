<?php

$id = $_GET['id'];
$pengunjung = new App\Pengunjung();

$row = $pengunjung->edit($id);
?>

<h2>Edit Pengunjung</h2>

<form action="pengunjung_proses.php" method="post">
    <input type="hidden" name="pengunjung_id" value="<?php echo $row['pengunjung_id']; ?>">
    <table>
        <tr>
            <td>ID</td>
            <td><input type="number" name="pengunjung_id" value="<?php echo $row['pengunjung_id']; ?>"></td>
        </tr>
        <tr>
            <td>ID TIKET</td>
            <td><select name="pengunjung_id_tiket">
              <option value="">--Silahkan Pilih--</option>
              <?php
              require_once "inc/Koneksi.php";
                $pengunjung = mysqli_query($conn, "SELECT * FROM tb_tiket ORDER BY tiket_id DESC");
                while($data = mysqli_fetch_array($pengunjung)){
                ?>
                <option value="<?php echo $data['tiket_id'] ?>"><?php echo $data ['tiket_id']?></option>
                <?php } ?>
            </select></td>
        </tr>
        <tr>
            <td>NAMA PENGUNJUNG</td>
            <td><input type="text" name="pengunjung_name" value="<?php echo $row['pengunjung_name']; ?>"></td>
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