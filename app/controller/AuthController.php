<?php
require_once(__DIR__ . '/../model/SuratIjin.php');

class AuthController
{
    public function login()
    {
        if (isset($_SESSION['admin'])) {
            header('Location: index.php?url=admin/rekap');
            exit;
        } elseif (isset($_SESSION['guru_piket'])) {
            header('Location: index.php?url=guru_piket/rekap');
            exit;
        }

        require_once __DIR__ . '/../../views/auth/login.php';
    }

    public function doLogin()
    {
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        if ($username === 'admin' && $password === 'admin123') {
            $_SESSION['admin'] = true;
            header('Location: index.php?url=admin/rekap');
            exit;
        }

        if ($username === 'guru' && $password === 'piket123') {
            $nama = $_POST['nama'] ?? 'Tanpa Nama';
            $_SESSION['guru_piket'] = true;
            $_SESSION['nama'] = $nama;

            // INSERT ke log_piket
            $suratIjin = new SuratIjin();
            $suratIjin->createlog_piket(['nama_guru' => $nama]);

            header('Location: index.php?url=gurupiket/rekap');
            exit;
        }

        $_SESSION['login_error'] = 'Username atau password salah!';
        header('Location: index.php?url=auth/login');
        exit;
    }


    public function logout()
    {
        session_destroy();
        header('Location: index.php?url=auth/login');
        exit;
    }
}
