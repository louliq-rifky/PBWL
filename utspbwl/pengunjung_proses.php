<?php

require_once "inc/Koneksi.php";
require_once "app/Pengunjung.php";

$pengunjung = new App\Pengunjung();

if (isset($_POST['btn_simpan'])) {
    $pengunjung->simpan();
    header("location:index.php?hal=pengunjung_tampil");
}

if (isset($_POST['btn_update'])) {
    $pengunjung->update();
    header("location:index.php?hal=pengunjung_tampil");
}