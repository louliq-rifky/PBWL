<h2>Tambah Pengunjung</h2>

<form action="pengunjung_proses.php" method="post" class="form-container">
    <table>
        <tr>
            <td>ID PENGUNJUNG</td>
            <td><input type="number" name="pengunjung_id"></td>
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
            <td>NAMA PENGUJUNG</td>
            <td><input type="text" name="pengunjung_name" id=""></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>
<style>
.form-container {
    max-width: 400px;
    margin: 0;
    padding: 20px;
  }
  
  .form-container input[type=number], .form-container select {
    width: 100%;
    padding: 2px 10px;
    margin: 5px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
  }
  .form-container input[type=text], .form-container select {
    width: 100%;
    padding: 2px 10px;
    margin: 5px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
  }
  .form-container input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 5px 10px;
    border: none;
    cursor: pointer;
    width: 100%;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.40);
  }
  
  .form-container input[type=submit]:hover {
    background-color: #45a049;
  }
  table {
  border-collapse: collapse;
  width: 100%;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.5); 
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

th {
    background-color: #efefef;
    color: #333;
  }
  
  td {
    background-color: #efefef;
  }
</style>