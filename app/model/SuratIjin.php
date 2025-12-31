<?php
require_once(__DIR__ . '/../../core/Model.php');

class SuratIjin extends Model
{
    public function create($data)
    {
        $sql = "INSERT INTO surat_ijin (nama, kelas, no_telp, jam_ke, keperluan) VALUES (:nama, :kelas, : no_telp, :jam_ke, :keperluan)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            ':nama'      => $data['nama'],
            ':kelas'     => $data['kelas'],
            ':no_telp'   => $data['no_telp'] ?? null, // no_telp bisa null
            ':jam_ke'    => $data['jam_ke'],
            ':keperluan' => $data['keperluan'],
        ]);
        return $this->conn->lastInsertId();
    }

    // public function all()
    // {
    //     $sql = "SELECT * FROM surat_ijin ORDER BY tanggal DESC";
    //     $stmt = $this->conn->query($sql);
    //     return $stmt->fetchAll(PDO::FETCH_ASSOC);
    // }


    public function all($search = null)
    {
        $sql = "SELECT * FROM surat_ijin";
        $params = [];

        if ($search) {
            $sql .= " WHERE nama LIKE :search OR keperluan LIKE :search OR kelas LIKE :search";
            $params[':search'] = "%$search%";
        }

        $sql .= " ORDER BY tanggal DESC LIMIT 25";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function find($id)
    {
        $sql = "SELECT * FROM surat_ijin WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function createWithQr($data)
    {
        $sql = "INSERT INTO surat_ijin (nama, kelas, jam_ke, keperluan, qr_token) 
            VALUES (:nama, :kelas, :jam_ke, :keperluan, :qr_token)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            ':nama'      => $data['nama'],
            ':kelas'     => $data['kelas'],
            ':jam_ke'    => $data['jam_ke'],
            ':keperluan' => $data['keperluan'],
            ':qr_token'  => $data['qr_token'],
        ]);
        return $this->conn->lastInsertId();
    }

    public function findByToken($token)
    {
        $sql = "SELECT * FROM surat_ijin WHERE print_token = :token";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([':token' => $token]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    private function generateToken($length = 5)
    {
        $chars = 'ABCDEFGHJKLMNPQRSTUVWXYZ123456789';
        $token = '';
        for ($i = 0; $i < $length; $i++) {
            $token .= $chars[random_int(0, strlen($chars) - 1)];
        }
        return $token;
    }

    public function createWithToken($data)
    {
        $token = $this->generateToken();
        $sql = "INSERT INTO surat_ijin (nama, kelas, no_telp,jam_ke, keperluan, print_token) 
            VALUES (:nama, :kelas, :no_telp, :jam_ke, :keperluan, :token)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            ':nama'      => $data['nama'],
            ':kelas'     => $data['kelas'],
            ':no_telp'   => $data['no_telp'],
            ':jam_ke'    => $data['jam_ke'],
            ':keperluan' => $data['keperluan'],
            ':token'     => $token
        ]);
        return ['id' => $this->conn->lastInsertId(), 'token' => $token];
    }

    public function createlog_piket($data)
    {
        $sql = "INSERT INTO log_piket (nama_guru) VALUES (:nama_guru)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            ':nama_guru' => $data['nama_guru'],
        ]);
        return $this->conn->lastInsertId();
    }

    // public function konfirmasi($id, $namaGuru)
    // {
    //     $stmt = $this->conn->prepare("UPDATE surat_ijin SET status = 'disetujui', guru_piket = ? WHERE id = ?");
    //     return $stmt->execute([$namaGuru, $id]);
    // }

    public function konfirmasi($id, $namaGuru)
    {
        $stmt = $this->conn->prepare(
            "UPDATE surat_ijin
         SET status = 'disetujui',
             guru_piket = ?
         WHERE id = ?"
        );

        return $stmt->execute([$namaGuru, $id]);
    }






    public function getAll($tanggal = null)
    {
        if ($tanggal) {
            $stmt = $this->conn->prepare("SELECT * FROM surat_ijin WHERE DATE(tanggal) = ? ORDER BY tanggal DESC");
            $stmt->execute([$tanggal]);
        } else {
            $stmt = $this->conn->query("SELECT * FROM surat_ijin ORDER BY tanggal DESC");
        }

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getByDateRange($dari, $sampai)
    {
        $stmt = $this->conn->prepare("SELECT * FROM surat_ijin WHERE tanggal BETWEEN ? AND ? ORDER BY tanggal DESC");
        $stmt->execute([
            $dari . ' 00:00:00',
            $sampai . ' 23:59:59'
        ]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getBelumIzinHariIni()
    {
        $stmt = $this->conn->prepare("
        SELECT * FROM surat_ijin
        WHERE status = 'pending'
        AND DATE(tanggal) = CURDATE()
    ");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function getSudahIzinHariIni()
    {
        $stmt = $this->conn->prepare("
        SELECT * FROM surat_ijin 
        WHERE status = 'disetujui' 
        AND DATE(tanggal) = CURDATE()
    ");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function searchteacher($q)
    {
        $stmt = $this->conn->prepare(
            "SELECT id, nama FROM guru WHERE nama LIKE ? AND aktif = 1 LIMIT 10"
        );
        $stmt->execute(["%$q%"]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
