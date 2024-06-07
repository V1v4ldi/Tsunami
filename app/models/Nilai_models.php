<?php
class Nilai_models {
    private $table = 'nilai';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function nilaisiswa($id){
        $this->db->query('SELECT '. $this->table. '.*, guru.nama as pengajar, mapel.nama_mapel as pelajaran, FLOOR((Tugas_1 + Tugas_2 + Tugas_3 + Tugas_4 + Tugas_5 + UTS + UAS) / 7) as nilai_akhir FROM ' .$this->table. ' 
        INNER JOIN mapel ON ' .$this->table. '.id_mapel = mapel.id 
        LEFT JOIN guru ON mapel.id = guru.id_pelajaran
        WHERE id_murid=:id');
        $this->db->bind('id',$id);
        return $this->db->Allresult();
    }

    public function nilaibyguru($id){
        $this->db->query('SELECT '. $this->table. '.*, murid.nama as nama_siswa, kelas.nama as nama_kelas, FLOOR((Tugas_1 + Tugas_2 + Tugas_3 + Tugas_4 + Tugas_5 + UTS + UAS) / 7) as nilai_akhir FROM ' .$this->table. ' 
        INNER JOIN mapel ON ' .$this->table. '.id_mapel = mapel.id 
        INNER JOIN murid ON ' .$this->table. '.id_murid = murid.id
        INNER JOIN kelas ON murid.kelas = kelas.id
        WHERE id_mapel=:id');
    $this->db->bind('id',$id);
    return $this->db->Allresult();
    }

    public function nilaibyid($id){
        $this->db->query('SELECT * FROM '.$this->table.' WHERE id_murid=:id');
        $this->db->bind('id',$id);
        return $this->db->Single();
    }

    public function updatenilai(){
        $query = "UPDATE nilai SET Tugas_1=:tugas1, Tugas_2=:tugas2, Tugas_3=:tugas3, Tugas_4=:tugas4, Tugas_5=:tugas5, UTS=:uts, UAS=:uas WHERE id_mapel=:idmapel AND id_murid=:idmurid";
        $this->db->query($query);
        $this->db->bind('tugas1',$_POST['tugas1']);
        $this->db->bind('tugas2',$_POST['tugas2']);
        $this->db->bind('tugas3',$_POST['tugas3']);
        $this->db->bind('tugas4',$_POST['tugas4']);
        $this->db->bind('tugas5',$_POST['tugas5']);
        $this->db->bind('uts',$_POST['uts']);
        $this->db->bind('uas',$_POST['uas']);
        $this->db->bind('idmapel',$_POST['idmapel']);
        $this->db->bind('idmurid',$_POST['idmurid']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}