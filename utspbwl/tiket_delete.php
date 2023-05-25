<?php

$id = $_GET['id'];

$tiket = new App\Tiket();
$rows = $tiket->delete($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a href="index.php?=tiket_tampil">Kembali</a>
</div>