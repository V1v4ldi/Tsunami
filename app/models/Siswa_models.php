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
        $this->db->query('SELECT ' . $this->table . '.*, kelas.nama AS nama_kelas FROM ' . $this->table . ' 
        INNER JOIN kelas ON ' . $this->table . '.kelas = kelas.id');
        return $this->db->Allresult();
    }

    public function siswabyid($id)
    {
        $this->db->query('SELECT '. $this->table . '.*, kelas.nama AS nama_kelas FROM ' . $this->table . ' 
        INNER JOIN kelas ON ' .$this->table.'.kelas = kelas.id WHERE '. $this->table .'.id=:id');
        $this->db->bind('id', $id);
        return $this->db->Single();
    }
    
    

    public function tambahdatasiswa($data)
    {
        $query = "INSERT INTO murid VALUES
        ('', :nama, :jurusan, :kelas, :email, :password, :nisn)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('kelas', $data['kelas']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('password', $data['passw']);
        $this->db->bind('nisn', $data['nisn']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    
}