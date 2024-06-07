<?php
class Siswa extends Controller
{
    public function index()
    {
        session_start();
        $id = $_SESSION['id'];
        $data['judul'] = 'Daftar Siswa';
        $data['siswa'] = $this->models('Siswa_models')->siswabyid($id);
        $this->view('templates/murid/dbmurid', $data);
        $this->view('siswa/index', $data);
        $this->view('templates/murid/ftmurid');
    }
    
    public function schedule($kelas){
        session_start();

        $id = $_SESSION['id'];
        $data['judul'] = 'Jadwal Siswa';
        $data['siswa'] = $this->models('Siswa_models')->siswabyid($id);
        $data['jadwal'] = $this->models('Jadwal_models')->jadwalsiswa($kelas);
        $this->view('templates/murid/dbmurid', $data);
        $this->view('siswa/schedule', $data);
        $this->view('templates/murid/ftmurid');
        
    }
    
    public function score(){
        session_start();
        
        $id = $_SESSION['id'];
        $data['judul'] = 'Jadwal Siswa';
        $data['siswa'] = $this->models('Siswa_models')->siswabyid($id);
        $data['nilai'] = $this->models('Nilai_models')->nilaisiswa($id);
        $this->view('templates/murid/dbmurid', $data);
        $this->view('siswa/score', $data);
        $this->view('templates/murid/ftmurid');
    }

    public function hapussiswa($id){
        if($this->models('Siswa_models')->hapussiswa($id) > 0){
            header('Location: ' . baseurl . '/admin');
            exit;
        }
    }
}