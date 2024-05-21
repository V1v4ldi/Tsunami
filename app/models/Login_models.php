<?php


class Login_models
{
    private $db;
    
    public function __construct()
    {
        $this->db = new Database;
    }
    
    private $tables = [
        'guru' => 'pengajar',
        'murid' => 'siswa'
    ];

    public function ceklogin($data) {
        foreach ($this->tables as $table => $role) {
            
        $query = 'SELECT * FROM ' . $table. ' WHERE email=:email AND password=:password';    
        
        $this->db->query($query);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);
        $row = $this->db->single();

        // Jika pengguna ditemukan dan password cocok
        if ($row) {
            // User found and password matches, set session user_id and role
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['role'] = $role;
            return true;
        }
    }
    // Jika tidak ada pengguna yang ditemukan atau password tidak cocok, kembalikan false
    return false;
    }
}