<?php
require_once(__DIR__ . '/../Model/SuratIjin.php');

class AdminController
{
    public function rekap()
    {
        // Cek login admin (bisa tambah session nanti)
        $suratIjin = new SuratIjin();
        $data = $suratIjin->all();
        include(__DIR__ . '/../../views/admin/rekap.php');
    }
}
