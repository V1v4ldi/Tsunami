<?php

class User_models
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function verifyUser($email, $password) {
        // Daftar tabel dan role
        $tables = [
            'guru' => 'guru',
            'murid' => 'murid'
        ];

        // Cek setiap tabel
        foreach ($tables as $table => $role) {
            $this->query("SELECT * FROM $table WHERE email = :email");
            $this->bind(':email', $email);
            $row = $this->single();

            // Jika pengguna ditemukan dan password cocok
            if ($row && password_verify($password, $row['password'])) {
                // Set session user_id dan role
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['role'] = $role;

                // Kembalikan role
                return $role;
            }
        }

        // Jika tidak ada pengguna yang ditemukan atau password tidak cocok, kembalikan false
        return false;
    }
}