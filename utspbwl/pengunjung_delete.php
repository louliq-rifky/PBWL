<?php

$id = $_GET['id'];

$pengunjung = new App\Pengunjung();
$rows = $pengunjung->delete($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a href="index.php?=pengunjung_tampil">Kembali</a>
</div>