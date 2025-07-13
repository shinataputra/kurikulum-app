<?php
require_once(__DIR__ . '/../model/SuratIjin.php');

class SuratIjinController
{
    public function inputForm()
    {
        include(__DIR__ . '/../../views/surat/input.php');
    }

    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'nama'      => $_POST['nama'],
                'kelas'     => $_POST['kelas'],
                'jam_ke'    => $_POST['jam_ke'],
                'keperluan' => $_POST['keperluan'],
            ];
            $suratIjin = new SuratIjin();
            $lastId = $suratIjin->create($data);
            header("Location: index.php?url=SuratIjin/print&id=" . $lastId);
            // include(__DIR__ . '/../../views/surat/redirect-to-print.php');

            exit;
        }
    }

    public function print()
    {
        $id = $_GET['id'];
        $suratIjin = new SuratIjin();
        $surat = $suratIjin->find($id);
        include(__DIR__ . '/../../views/surat/cetak.php');
    }

    public function saveWithQr()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $token = bin2hex(random_bytes(16)); // token QR unik

            $data = [
                'nama'      => $_POST['nama'],
                'kelas'     => $_POST['kelas'],
                'jam_ke'    => $_POST['jam_ke'],
                'keperluan' => $_POST['keperluan'],
                'qr_token'  => $token,
            ];

            $suratIjin = new SuratIjin();
            $id = $suratIjin->createWithQr($data); // method baru di model
            header("Location: ./?url=SuratIjin/qr&id=" . $id);
            exit;
        }
    }

    public function qr()
    {
        $id = $_GET['id'] ?? null;

        if (!$id) {
            echo "ID tidak ditemukan.";
            return;
        }

        $suratIjin = new SuratIjin();
        $surat = $suratIjin->find($id);

        include(__DIR__ . '/../../views/surat/qr.php');
    }

    public function printByToken()
    {
        $token = $_GET['token'] ?? null;

        if (!$token) {
            echo "Token tidak ditemukan.";
            return;
        }

        $suratIjin = new SuratIjin();
        $surat = $suratIjin->findByToken($token);

        if (!$surat) {
            echo "<script>
        alert('Token tidak ditemukan. Silakan periksa kembali.');
        window.location.href = './?url=SuratIjin/inputTokenForm';
        </script>";
            return;
        }


        include(__DIR__ . '/../../views/surat/cetak.php');
    }
    public function storeWithToken()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'nama'      => $_POST['nama'],
                'kelas'     => $_POST['kelas'],
                'jam_ke'    => $_POST['jam_ke'],
                'keperluan' => $_POST['keperluan'],
            ];
            $suratIjin = new SuratIjin();
            $result = $suratIjin->createWithToken($data);
            $token = $result['token'];
            include(__DIR__ . '/../../views/surat/token.php');
        }
    }

    public function inputTokenForm()
    {
        include(__DIR__ . '/../../views/surat/input_token.php');
    }
}
