<?php
class Model
{
    protected $conn;

    public function __construct()
    {
        require_once(__DIR__ . '/../config/database.php');
        $this->conn = $conn; // ini WAJIB, ambil dari database.php
    }
}
