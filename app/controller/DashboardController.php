<?php
class DashboardController extends Controller
{
    public function index()
    {
        $suratIjin = new SuratIjin();

        // filter hanya hari ini
        $belumIzin = $suratIjin->getBelumIzinHariIni();
        $sudahIzin = $suratIjin->getSudahIzinHariIni();

        $data = [
            'title' => 'Dashboard Guru Piket',
            'belumIzin' => $belumIzin,
            'sudahIzin' => $sudahIzin
        ];

        $this->view('dashboard', $data);
    }


    // public function konfirmasi()
    // {
    //     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //         $id = $_POST['id'] ?? null;
    //         $guru = $_POST['guru'] ?? null;

    //         if ($id && $guru) {
    //             $model = new SuratIjin();
    //             $model->konfirmasi($id, $guru);
    //             echo json_encode(['success' => true]);
    //         } else {
    //             echo json_encode(['success' => false, 'msg' => 'Data tidak lengkap']);
    //         }
    //     }
    // }

    public function konfirmasi()
    {
        header('Content-Type: application/json');

        $id   = $_POST['id'] ?? null;
        $guru = $_POST['guru'] ?? null;

        if (!$id || !$guru) {
            echo json_encode(['success' => false, 'msg' => 'Data tidak lengkap']);
            exit;
        }

        $model = new SuratIjin();
        $ok = $model->konfirmasi($id, $guru);

        echo json_encode(['success' => $ok]);
        exit;
    }







    public function cariGuru()
    {
        header('Content-Type: application/json');

        $q = $_GET['q'] ?? '';

        require_once(__DIR__ . '/../model/Guru.php');
        $guru = new Guru();

        echo json_encode($guru->search($q));
        exit;
    }
}
