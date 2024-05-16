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

    public function siswabyid($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->Single();
    }
}