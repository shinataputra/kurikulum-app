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
}
