<?php
require_once(__DIR__ . '/../../core/Model.php');

class SuratIjin extends Model
{
    public function create($data)
    {
        $sql = "INSERT INTO surat_ijin (nama, kelas, jam_ke, keperluan) VALUES (:nama, :kelas, :jam_ke, :keperluan)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            ':nama'      => $data['nama'],
            ':kelas'     => $data['kelas'],
            ':jam_ke'    => $data['jam_ke'],
            ':keperluan' => $data['keperluan'],
        ]);
        return $this->conn->lastInsertId();
    }

    public function all()
    {
        $sql = "SELECT * FROM surat_ijin ORDER BY tanggal DESC";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id)
    {
        $sql = "SELECT * FROM surat_ijin WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
