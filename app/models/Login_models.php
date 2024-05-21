<?php
session_start();

class Login_models
{
    private $db;
    
    public function __construct()
    {
        $this->db = new Database;
    }
    
    private $tables = [
        'admin' => 'admin',
        'guru' => 'pengajar',
        'murid' => 'siswa'
    ];

    public function ceklogin($data) {
        foreach ($this->tables as $table => $role) {
            
        $query = 'SELECT * FROM ' . $table. ' WHERE email=:email';    
        
        $this->db->query($query);
        $this->db->bind(':email', $data['email']);
        $row = $this->db->single();

        // Jika pengguna ditemukan dan password cocok
        if ($row !== false) {
            // User found, check password
            if ($data['password'] == $row['password']) {
                // Password matches, set session and return true
                $_SESSION['id'] = $row['id'];
                $_SESSION['role'] = $role;

                // Kembalikan role
                return $role;
            } else {
                // Password doesn't match
                
    
                $message =  "<SCRIPT> //not showing me this
                alert('Password Salah!')
                window.location.replace('".baseurl."home/login');
                </SCRIPT>";
                return ['error' => $message];
            }
        }
    }
    // User not found
    $message = "<SCRIPT>
    alert('User Tidak Ditemukan!')
    window.location.replace('".baseurl."home/login');
    </SCRIPT>";
    return ['error' => $message];
    }
}   