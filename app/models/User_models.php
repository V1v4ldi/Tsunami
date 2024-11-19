<?php
class User_models {
    private $table = 'hilang'; // Ubah nama tabel menjadi 'hilang'
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function saveData($nama, $img_path, $jk, $alamat, $hubungi, $lokhilang)
    {
        $this->db->query("INSERT INTO $this->table (nama, img_path, jk, alamat, hubungi, `lok-hilang`) VALUES (:nama, :img_path, :jk, :alamat, :hubungi, :lokhilang)");
        $this->db->bind(':nama', $nama);
        $this->db->bind(':img_path', $img_path);
        $this->db->bind(':jk', $jk);
        $this->db->bind(':alamat', $alamat);
        $this->db->bind(':hubungi', $hubungi);
        $this->db->bind(':lokhilang', $lokhilang);
        $this->db->execute();
    }

    public function getAllData()
    {
        $this->db->query("SELECT * FROM $this->table");
        return $this->db->Allresult();
    }

    public function updateData($id, $nama, $alamat, $jk, $hubungi, $lokHilang, $status)
    {
        $this->db->query("UPDATE $this->table SET nama = :nama, alamat = :alamat, jk = :jk, hubungi = :hubungi, `lok-hilang` = :lokHilang, status = :status WHERE id_hilang = :id");
        $this->db->bind(':id', $id);
        $this->db->bind(':nama', $nama);
        $this->db->bind(':alamat', $alamat);
        $this->db->bind(':jk', $jk);
        $this->db->bind(':hubungi', $hubungi);
        $this->db->bind(':lokHilang', $lokHilang);
        $this->db->bind(':status', $status);
        $this->db->execute();
    }
    
    public function hapus($id)
    {
        $query = "DELETE FROM $this->table WHERE id_hilang = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getImagePathById($id)
    {
        $this->db->query("SELECT img_path FROM $this->table WHERE id_hilang = :id");
        $this->db->bind(':id', $id);
        return $this->db->single();
    }

}