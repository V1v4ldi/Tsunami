<?php
class Siswa_models {
    private $table = 'murid';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function semuasiswa()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->Allresult();
    }
}