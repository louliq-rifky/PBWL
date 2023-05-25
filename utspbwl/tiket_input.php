<h2>Tambah tiket</h2>

<form action="tiket_proses.php" method="post" class="form-container">
    <table>
        <tr>
            <td>ID</td>
            <td><input type="number" name="tiket_id"></td>
        </tr>
        <tr>
            <td>KATEGORI</td>
            <td><input type="text" name="tiket_name" id=""></td>
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
    width: 50%;
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
