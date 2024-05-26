<?php
class Jadwal_models {
    private $table = 'jadwal';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function jadwalsiswa($kelas){
        $this->db->query('SELECT '. $this->table . '.*, kelas.nama AS nama_kelas, jam.mulai AS awal, jam.selesai AS akhir, mapel.nama_mapel AS mapel FROM ' . $this->table . ' 
        INNER JOIN kelas ON ' .$this->table.'.id_kelas = kelas.id 
        INNER JOIN jam ON ' .$this->table.'.id_jam = jam.id
        INNER JOIN mapel ON ' .$this->table.'.id_mapel = mapel.id
        WHERE '. $this->table .'.id_kelas =:kelas');
        $this->db->bind(':kelas', $kelas);
        return $this->db->Allresult();
    }

    public function jadwalguru($mapel){
        $this->db->query('SELECT '. $this->table . '.*, kelas.nama AS nama_kelas, jam.mulai AS awal, jam.selesai AS akhir, mapel.nama_mapel AS mapel FROM '
        .$this->table. ' INNER JOIN kelas ON ' .$this->table.'.id_kelas = kelas.id 
        INNER JOIN jam ON ' .$this->table.'.id_jam = jam.id
        INNER JOIN mapel ON ' .$this->table.'.id_mapel = mapel.id
        WHERE '. $this->table .'.id_mapel =:mapel');
        $this->db->bind(':mapel', $mapel);
        return $this->db->Allresult();
    }
}