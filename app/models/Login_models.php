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
            
        $query = 'SELECT * FROM ' . $table. ' WHERE username=:username';    
        
        $this->db->query($query);
        $this->db->bind(':username', $data['username']);
        $row = $this->db->single();

        
        if ($row !== false) {
           
            if ($data['password'] == $row['password']) {
                return $role;
            } else {
    
                $message =  "<SCRIPT>
                alert('Password Salah!')
                window.location.replace('".baseurl."admin');
                </SCRIPT>";
                return ['error' => $message];
            }
        }
    }
    // User not found
    $message = "<SCRIPT>
    alert('User Tidak Ditemukan!')
    window.location.replace('".baseurl."admin');
    </SCRIPT>";
    return ['error' => $message];
    }
}   