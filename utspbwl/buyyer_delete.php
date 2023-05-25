<?php

$id = $_GET['id'];

$buyyer = new App\Buyyer();
$rows = $buyyer->delete($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a href="index.php?=buyyer_tampil">Kembali</a>
</div>