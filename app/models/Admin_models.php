<?php
class Admin_models {
    private $table = 'admin';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function adminbyid($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE ' .$this->table.'.id=:id');
        $this->db->bind('id', $id);
        return $this->db->Single();
    }

    
}