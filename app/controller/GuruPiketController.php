<?php
require_once(__DIR__ . '/../Model/SuratIjin.php');

class GuruPiketController
{
    public function rekap()
    {
        $tanggal = $_GET['tanggal'] ?? null;

        $suratIjin = new SuratIjin();
        $data = $suratIjin->getAll($tanggal); // panggil fungsi dengan filter tanggal

        include(__DIR__ . '/../../views/gurupiket/rekap.php');
    }


    // Konfirmasi izin
    public function konfirmasi()
    {
        session_start();
        if (!isset($_SESSION['guru_piket'])) {
            header('Location: index.php?url=auth/login');
            exit;
        }

        $id = $_GET['id'] ?? null;
        if ($id) {
            $model = new SuratIjin();
            $model->konfirmasi($id);
        }

        header('Location: index.php?url=gurupiket/rekap');
        exit;
    }
}
