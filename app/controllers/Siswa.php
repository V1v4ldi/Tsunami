<?php
class Siswa extends Controller
{
    public function index()
    {
    session_start();
    if(!isset($_SESSION['id']) || $_SESSION['role'] != 'siswa')
    {
        $_SESSION['message'] = "<SCRIPT> alert('Anda tidak memiliki akses!')
        window.location.replace('".baseurl."home/login');
        </SCRIPT>";
        echo $_SESSION['message'];
    }
        $data['judul'] = 'Daftar Mahasiswa';
        $data['siswa'] = $this->models('Siswa_models')->semuasiswa();
        $this->view('templates/dsbheader', $data);
        $this->view('siswa/index', $data);
        $this->view('templates/dsbfooter');
    }
}