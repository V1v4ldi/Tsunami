<?php
class Location_models {
    private $table = 'history';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function plstsunami($Sumber, $Tanggal, $waktu, $latitude, $longitude, $magnitudo)
    {
        $this->db->query("INSERT INTO $this->table (Sumber, Tanggal, waktu, latitude, longitude, magnitudo) VALUES (:sumber, :tanggal, :waktu, :latitude, :longitude, :magnitudo)");
        $this->db->bind(':sumber', $Sumber);
        $this->db->bind(':tanggal', $Tanggal);
        $this->db->bind(':waktu', $waktu);
        $this->db->bind(':latitude', $latitude);
        $this->db->bind(':longitude', $longitude);
        $this->db->bind(':magnitudo', $magnitudo);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function semuahistory()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->Allresult();
    }
}