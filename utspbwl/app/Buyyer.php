<?php

namespace App;
use Inc\Koneksi as Koneksi;

class Buyyer extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_harga";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }

    public function simpan()
    {
        $buyyer_id = $_POST['buyyer_id'];
        $buyyer_name = $_POST['buyyer_name'];
        $buy_date = $_POST['buy_date'];
        $harga = $_POST['harga'];

        $sql = "INSERT INTO tb_harga (buyyer_id, buyyer_name, buy_date, harga) VALUES (:buyyer_id, :buyyer_name, :buy_date, :harga)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":buyyer_id", $buyyer_id);
        $stmt->bindParam(":buyyer_name", $buyyer_name);
        $stmt->bindParam(":buy_date", $buy_date);
        $stmt->bindParam(":harga", $harga);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_harga WHERE buyyer_id=:buyyer_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":buyyer_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $buyyer_id = $_POST['buyyer_id'];
        $buyyer_name = $_POST['buyyer_name'];
        $buy_date = $_POST['buy_date'];
        $harga = $_POST['harga'];
        $buyyer_id = $_POST['buyyer_id'];

        $sql = "UPDATE tb_harga SET buyyer_id=:buyyer_id, buyyer_name=:buyyer_name, buy_date=:buy_date, harga=:harga WHERE buyyer_id=:buyyer_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":buyyer_id", $buyyer_id);
        $stmt->bindParam(":buyyer_name", $buyyer_name);
        $stmt->bindParam(":buy_date", $buy_date);
        $stmt->bindParam(":harga", $harga);
        $stmt->bindParam(":buyyer_id", $buyyer_id);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_harga WHERE buyyer_id=:buyyer_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":buyyer_id", $id);
        $stmt->execute();

    }

}