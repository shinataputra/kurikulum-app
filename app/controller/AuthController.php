<?php
class AuthController
{
    // Tampilkan form login (hanya jika akses URL langsung)
    public function login()
    {
        // Jika sudah login, redirect ke admin/rekap
        if (isset($_SESSION['admin'])) {
            header('Location: index.php?url=admin/rekap');
            exit;
        }
        // Tidak ada link/menu login di aplikasi, hanya bisa akses lewat url
        require_once __DIR__ . '/../../views/auth/login.php';
    }

    // Proses login
    public function doLogin()
    {
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        // Hardcoded, bisa diganti cek ke database
        if ($username === 'admin' && $password === 'admin123') {
            $_SESSION['admin'] = true;
            header('Location: index.php?url=admin/rekap');
            exit;
        } else {
            $_SESSION['login_error'] = 'Username atau password salah!';
            header('Location: index.php?url=auth/login');
            exit;
        }
    }

    // Logout admin
    public function logout()
    {
        session_destroy();
        header('Location: index.php?url=auth/login');
        exit;
    }
}
