<?php


class Login_models
{
    private $db;
    
    public function __construct()
    {
        $this->db = new Database;
    }
    
    private $tables = [
        'admin' => 'admin',
    ];

    public function ceklogin($data) {
        foreach ($this->tables as $table => $role) {
            $query = 'SELECT * FROM ' . $table . ' WHERE username = :username';    
            $this->db->query($query);
            $this->db->bind(':username', $data['username']);
            $row = $this->db->single();

            if ($row !== false) {
                if ($data['password'] == $row['password']) {
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['role'] = $role;
                    
                    return $role;
                } else {
                    echo "<script>alert('Password Salah!');</script>";
                    header('Location: ' . baseurl . 'admin');
                exit;
                return false;
            }
        }
    }
    echo "<script>alert('Username tidak ditemukan!');</script>";
            header('Location: ' . baseurl . 'admin');
        exit;
        return false;
    }

    public function getUserId($username) {
        $query = 'SELECT id FROM admin WHERE username = :username';
        $this->db->query($query);
        $this->db->bind(':username', $username);
        $row = $this->db->single();
        return $row['id'];
    }

}   