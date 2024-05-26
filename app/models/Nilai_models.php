<?php
class Nilai_models {
    private $table = 'nilai';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

public function nilaisiswa($id){
        $this->db->query('SELECT '. $this->table. '.*, guru.nama as pengajar, mapel.nama_mapel as pelajaran, (Tugas_1 + Tugas_2 + Tugas_3 + Tugas_4 + Tugas_5 + UTS + UAS) / 7 as nilai_akhir FROM ' .$this->table. ' 
        INNER JOIN mapel ON ' .$this->table. '.id_mapel = mapel.id 
        LEFT JOIN guru ON mapel.id = guru.id_pelajaran
        WHERE id_murid=:id');
        $this->db->bind('id',$id);
        return $this->db->Allresult();
    }
}