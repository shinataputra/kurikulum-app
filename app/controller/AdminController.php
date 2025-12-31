<?php
require_once(__DIR__ . '/../model/SuratIjin.php');
require_once __DIR__ . '/../../vendor/autoload.php';

use Dompdf\Dompdf;

class AdminController
{
    public function rekap()
    {
        $search = $_GET['q'] ?? null; // Ambil keyword pencarian
        $suratIjin = new SuratIjin();
        $data = $suratIjin->all($search); // Pakai parameter search
        include(__DIR__ . '/../../views/admin/rekap.php');
    }

    public function rekapfilter()
    {
        $dari = $_GET['dari'] ?? null;
        $sampai = $_GET['sampai'] ?? null;
        $search = $_GET['q'] ?? null; // Ambil keyword pencarian

        $suratIjin = new SuratIjin();
        $data = $suratIjin->getByDateRange($dari, $sampai, $search); // Modifikasi model nanti

        include(__DIR__ . '/../../views/admin/rekap.php');
    }

    // public function cetak()
    // {
    //     $dari = $_GET['dari'] ?? null;
    //     $sampai = $_GET['sampai'] ?? null;
    //     $search = $_GET['q'] ?? null;

    //     $suratIjin = new SuratIjin();
    //     $data = $suratIjin->getByDateRange($dari, $sampai, $search);

    //     ob_start();
    //     include(__DIR__ . '/../../views/admin/cetak_rekap.php');
    //     $html = ob_get_clean();

    //     $dompdf = new Dompdf();
    //     $dompdf->loadHtml($html);
    //     $dompdf->setPaper('A4', 'portrait');
    //     $dompdf->render();
    //     $dompdf->stream('rekap_surat_ijin.pdf', ['Attachment' => false]);
    // }


    public function cetak()
    {
        ini_set('memory_limit', '512M'); // tambah memory

        $dari = $_GET['dari'] ?? null;
        $sampai = $_GET['sampai'] ?? null;
        $search = $_GET['q'] ?? null;

        $suratIjin = new SuratIjin();
        $data = $suratIjin->getByDateRange($dari, $sampai, $search);

        ob_start();
        include(__DIR__ . '/../../views/admin/cetak_rekap.php');
        $html = ob_get_clean();

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // kalau tabel lebar, ganti ke landscape
        $dompdf->setPaper('A4', 'landscape');

        $dompdf->render();
        $dompdf->stream('rekap_surat_ijin.pdf', ['Attachment' => false]);
    }
}
