<?php

namespace App;
use Inc\Koneksi as Koneksi;

class Tiket extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_tiket";
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
        $tiket_id = $_POST['tiket_id'];
        $tiket_name = $_POST['tiket_name'];

        $sql = "INSERT INTO tb_tiket (tiket_id, tiket_name) VALUES (:tiket_id, :tiket_name)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":tiket_id", $tiket_id);
        $stmt->bindParam(":tiket_name", $tiket_name);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_tiket WHERE tiket_id=:tiket_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":tiket_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $tiket_id = $_POST['tiket_id'];
        $tiket_name = $_POST['tiket_name'];
        $tiket_id = $_POST['tiket_id'];

        $sql = "UPDATE tb_tiket SET tiket_id=:tiket_id, tiket_name=:tiket_name WHERE tiket_id=:tiket_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":tiket_id", $tiket_id);
        $stmt->bindParam(":tiket_name", $tiket_name);
        $stmt->bindParam(":tiket_id", $tiket_id);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_tiket WHERE tiket_id=:tiket_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":tiket_id", $id);
        $stmt->execute();

    }

}