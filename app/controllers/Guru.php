<?php
class Guru extends Controller
{
    public function index()
    {
        session_start();

        $id = $_SESSION['id'];
        $data['judul'] = 'Dashboard Anda';
        $data['guru'] = $this->models('Guru_models')->gurubyid($id);
        $this->view('templates/guru/dbguru', $data);
        $this->view('guru/index', $data);
        $this->view('templates/guru/ftguru');
    }
    
    public function jadwal($mapel){
        session_start();
    
        $id = $_SESSION['id'];
        $data['judul'] = 'Dashboard Anda';
        $data['guru'] = $this->models('Guru_models')->gurubyid($id);
        $data['jadwal'] = $this->models('Jadwal_models')->jadwalguru($mapel);
        $this->view('templates/guru/dbguru', $data);
        $this->view('guru/jadwal', $data);
        $this->view('templates/guru/ftguru');
        
    }

    public function nilai($id){
        session_start();
    
        $id = $_SESSION['id'];
        $data['judul'] = 'Dashboard Anda';
        $data['guru'] = $this->models('Guru_models')->gurubyid($id);
        $data['nilai'] = $this->models('Nilai_models')->nilaibyguru($id);
        $this->view('templates/guru/dbguru', $data);
        $this->view('guru/nilai', $data);
        $this->view('templates/guru/ftguru');
    }
    
    public function formedit($id_mapel, $id_murid){
        session_start();
        $data['idmapel'] = $id_mapel;
        $data['idmurid'] = $id_murid;
        $data['judul'] = 'Edit Nilai Siswa';
        $data['guru'] = $this->models('Guru_models')->gurubyid($id_mapel);
        $data['nilai'] = $this->models('Nilai_models')->nilaibyid($id_mapel);
        $this->view('guru/formedit', $data);
    }

    public function hapusguru($id){
        if($this->models('Guru_models')->hapusguru($id) > 0){
            header('Location: ' . baseurl . '/admin');
            exit;
        }
    }

    public function editnilai(){
        if($this->models('Nilai_models')->updatenilai($_POST) > 0){
            header('Location: ' . baseurl . 'Guru');
            exit;
        }
    }
}