<?php

namespace Inc;

class Koneksi {

    public object $db;

    public function __construct() {
        $this->db = new \PDO("mysql:host=localhost;dbname=dbhairos", "root", "");
    }
}

    $conn = mysqli_connect("localhost","root","","dbhairos") or die(mysqli_connect_error());
     
?>