<?php
require_once(__DIR__ . '/../../core/Model.php');

class Guru extends Model
{
    public function search($keyword)
    {
        $stmt = $this->conn->prepare(
            "SELECT id, nama 
             FROM guru 
             WHERE aktif = 1 
               AND nama LIKE ?
             ORDER BY nama ASC
             LIMIT 10"
        );
        $stmt->execute(["%$keyword%"]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id)
    {
        $stmt = $this->conn->prepare(
            "SELECT id, nama FROM guru WHERE id = ? AND aktif = 1"
        );
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
