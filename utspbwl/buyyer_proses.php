<?php

require_once "inc/Koneksi.php";
require_once "app/Buyyer.php";

$buyyer = new App\Buyyer();

if (isset($_POST['btn_simpan'])) {
    $buyyer->simpan();
    header("location:index.php?hal=buyyer_tampil");
}

if (isset($_POST['btn_update'])) {
    $buyyer->update();
    header("location:index.php?hal=buyyer_tampil");
}