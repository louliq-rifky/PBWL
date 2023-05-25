<?php

namespace App;
use Inc\Koneksi as Koneksi;

class Pengunjung extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_pengunjung";
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
        $pengunjung_id = $_POST['pengunjung_id'];
        $pengunjung_id_tiket = $_POST['pengunjung_id_tiket'];
        $pengunjung_name = $_POST['pengunjung_name'];

        $sql = "INSERT INTO tb_pengunjung (pengunjung_id, pengunjung_id_tiket, pengunjung_name) VALUES (:pengunjung_id, :pengunjung_id_tiket, :pengunjung_name)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":pengunjung_id", $pengunjung_id);
        $stmt->bindParam(":pengunjung_id_tiket", $pengunjung_id_tiket);
        $stmt->bindParam(":pengunjung_name", $pengunjung_name);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_pengunjung WHERE pengunjung_id=:pengunjung_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":pengunjung_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $pengunjung_id = $_POST['pengunjung_id'];
        $pengunjung_id_tiket = $_POST['pengunjung_id_tiket'];
        $pengunjung_name = $_POST['pengunjung_name'];
        $pengunjung_id = $_POST['pengunjung_id'];

        $sql = "UPDATE tb_pengunjung SET pengunjung_id=:pengunjung_id, pengunjung_id_tiket=:pengunjung_id_tiket, pengunjung_name=:pengunjung_name WHERE pengunjung_id=:pengunjung_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":pengunjung_id", $pengunjung_id);
        $stmt->bindParam(":pengunjung_id_tiket", $pengunjung_id_tiket);
        $stmt->bindParam(":pengunjung_name", $pengunjung_name);
        $stmt->bindParam(":pengunjung_id", $pengunjung_id);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_pengunjung WHERE pengunjung_id=:pengunjung_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":pengunjung_id", $id);
        $stmt->execute();

    }

}