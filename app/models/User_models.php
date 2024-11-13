<?php
class User_models {
    private $table = 'hilang'; // Ubah nama tabel menjadi 'hilang'
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function saveData($nama, $img_path, $jk, $alamat, $hubungi)
    {
        $this->db->query("INSERT INTO $this->table (nama, img_path, jk, alamat, hubungi) VALUES (:nama, :img_path, :jk, :alamat, :hubungi)");
        $this->db->bind(':nama', $nama);
        $this->db->bind(':img_path', $img_path);
        $this->db->bind(':jk', $jk);
        $this->db->bind(':alamat', $alamat);
        $this->db->bind(':hubungi', $hubungi);
        $this->db->execute();
    }

    public function getAllData()
    {
        $this->db->query("SELECT * FROM $this->table");
        return $this->db->Allresult();
    }
}