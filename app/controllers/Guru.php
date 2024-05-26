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
}