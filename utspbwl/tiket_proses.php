<?php

require_once "inc/Koneksi.php";
require_once "app/Tiket.php";

$tiket = new App\Tiket();

if (isset($_POST['btn_simpan'])) {
    $tiket->simpan();
    header("location:index.php?hal=tiket_tampil");
}

if (isset($_POST['btn_update'])) {
    $tiket->update();
    header("location:index.php?hal=tiket_tampil");
}