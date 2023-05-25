<?php

$id = $_GET['id'];
$buyyer = new App\Buyyer();

$row = $buyyer->edit($id);
?>

<h2>Edit Pembeli</h2>

<form action="buyyer_proses.php" method="post">
    <input type="hidden" name="buyyer_id" value="<?php echo $row['buyyer_id']; ?>">
    <table>
        <tr>
            <td>ID</td>
            <td><select name="buyyer_id">
              <option value="">--Silahkan Pilih</option>
              <?php
              require_once "inc/Koneksi.php";
                $buyyer = mysqli_query($conn, "SELECT * FROM tb_pengunjung ORDER BY pengunjung_id DESC");
                while($data = mysqli_fetch_array($buyyer)){
                ?>
                <option value="<?php echo $data['pengunjung_id'] ?>"><?php echo $data ['pengunjung_id']?></option>
                <?php } ?>
            </select></td>
        </tr>
        <tr>
            <td>NAMA PEMBELI</td>
            <td><input type="text" name="buyyer_name" value="<?php echo $row['buyyer_name']; ?>"></td>
        </tr>
        <tr>
            <td>TANGGAL PEMBELIAN</td>
            <td><input type="datetime-local" name="buy_date" value="<?php echo $row['buy_date']; ?>"></td>
        </tr>
        <tr>
            <td>HARGA</td>
            <td><input type="text" name="harga" value="<?php echo $row['harga']; ?>"></td>
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