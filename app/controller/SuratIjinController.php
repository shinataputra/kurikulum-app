<?php
require_once(__DIR__ . '/../model/SuratIjin.php');
require_once __DIR__ . '/../../vendor/autoload.php'; // Autoload composer
use Dompdf\Dompdf;

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
                'no_telp'   => $_POST['no_telp'],
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
                'no_telp'   => $_POST['no_telp'],
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

    public function cetakPdf()
    {
        // // Ambil data dari POST (atau GET)
        $surat = [
            'nama' => $_POST['nama'] ?? '',
            'kelas' => $_POST['kelas'] ?? '',
            'no_telp' => $_POST['no_telp'] ?? '',
            'jam_ke' => $_POST['jam_ke'] ?? '',
            'keperluan' => $_POST['keperluan'] ?? ''
        ];

        // Ambil data dari POST
        $nama = $_POST['nama'] ?? '';
        $kelas = $_POST['kelas'] ?? '';
        $no_telp = $_POST['no_telp'] ?? '';
        $jam_ke = $_POST['jam_ke'] ?? '';
        $keperluan = $_POST['keperluan'] ?? '';


        // Simpan data ke database
        $suratIjin = new SuratIjin();
        $suratIjin->createWithToken([
            'nama'      => $nama,
            'kelas'     => $kelas,
            'no_telp'   => $no_telp,
            'jam_ke'    => $jam_ke,
            'keperluan' => $keperluan,
        ]);

        // Konversi hari ke Bahasa Indonesia
        $hari_en = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
        $hari_id = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
        $hari = str_replace($hari_en, $hari_id, date('l'));
        $tanggal = date('d-m-Y');

        // Ambil konten cetak dari view (tanpa <body onload="window.print()">)
        ob_start();
        include(__DIR__ . '/../../views/surat/cetak_pdf_template.php'); // Buat file ini dari cetak.php, lihat di bawah!
        $html = ob_get_clean();

        // Buat PDF
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'potrait');
        $dompdf->render();

        // Tampilkan PDF di tab baru
        // $dompdf->stream('Surat-Ijin.pdf', ['Attachment' => false]);
        $dompdf->stream('Surat Ijin Siswa - ' . $surat['nama'] . '.pdf', ['Attachment' => false]);

        // $namaFile = 'Surat Ijin Siswa - ' . preg_replace('/[^a-zA-Z0-9\s]/', '', $surat['nama']) . ' - ' . preg_replace('/[^a-zA-Z0-9\s]/', '', $kelas['kelas']) . '.pdf';
        // $dompdf->stream($namaFile, ['Attachment' => false]);


        exit;
    }

    public function cetakPdfbyToken()
    {
        // Ambil token dari GET atau POST
        $token = $_GET['token'] ?? $_POST['token'] ?? '';

        if (!$token) {
            echo "Token tidak ditemukan.";
            exit;
        }



        // Ambil surat dari database berdasarkan token
        $suratIjin = new SuratIjin();
        $surat = $suratIjin->findByToken($token);

        $tanggalToken = date('Y-m-d', strtotime($surat['tanggal']));
        $hariIni = date('Y-m-d');

        if ($tanggalToken !== $hariIni) {
            echo "<script>alert('Token hanya berlaku di tanggal yang sama saat dibuat.'); window.location.href='./';</script>";
            return;
        }

        if (!$surat) {
            echo "Surat dengan token ini tidak ditemukan.";
            exit;
        }

        // Konversi hari ke Bahasa Indonesia
        $hari_en = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
        $hari_id = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
        $hari = str_replace($hari_en, $hari_id, date('l'));
        $tanggal = date('d-m-Y');

        // Gunakan template cetak PDF, pastikan file ini menerima $surat, $hari, $tanggal
        ob_start();
        include(__DIR__ . '/../../views/surat/cetak_pdf_template.php');
        $html = ob_get_clean();

        // Generate PDF dengan dompdf
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'potrait');
        $dompdf->render();

        // Output PDF di browser
        // $dompdf->stream('Surat-Ijin.pdf', ['Attachment' => false]);
        $dompdf->stream('Surat Ijin Siswa - ' . $surat['nama'] . '.pdf', ['Attachment' => false]);
        exit;
    }
}
