<?php
class Guru_models {
    private $table = 'guru';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function semuaguru()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->Allresult();
    }

    public function gurubyid($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->Single();
        
    }

    public function tambahdataguru($data)
    {
        $query = "INSERT INTO guru VALUES
        ('', :nuptk, :nama, :email, :passw, :id_pelajaran)";
        $this->db->query($query);
        $this->db->bind('nuptk', $data['nuptk']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('passw', $data['passw']);
        $this->db->bind('id_pelajaran', $data['pelajaran']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}