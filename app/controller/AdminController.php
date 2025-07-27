<?php
require_once(__DIR__ . '/../Model/SuratIjin.php');
require_once __DIR__ . '/../../vendor/autoload.php';

use Dompdf\Dompdf;

class AdminController
{
    public function rekap()
    {
        // Cek login admin (bisa tambah session nanti)
        $suratIjin = new SuratIjin();
        $data = $suratIjin->all();
        include(__DIR__ . '/../../views/admin/rekap.php');
    }

    public function rekapfilter()
    {
        $dari = $_GET['dari'] ?? null;
        $sampai = $_GET['sampai'] ?? null;

        $suratIjin = new SuratIjin();
        $data = $suratIjin->getByDateRange($dari, $sampai);

        include(__DIR__ . '/../../views/admin/rekap.php');
    }

    public function cetak()
    {
        $dari = $_GET['dari'] ?? null;
        $sampai = $_GET['sampai'] ?? null;

        $suratIjin = new SuratIjin();
        $data = $suratIjin->getByDateRange($dari, $sampai);

        ob_start();
        include(__DIR__ . '/../../views/admin/cetak_rekap.php'); // file HTML khusus cetak
        $html = ob_get_clean();

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream('rekap_surat_ijin.pdf', ['Attachment' => false]);
    }
}
