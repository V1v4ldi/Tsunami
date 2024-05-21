<?php
class Guru extends Controller
{
    public function index()
    {
        session_start();
    if(!isset($_SESSION['id']) || $_SESSION['role'] != 'pengajar')
    {
        $_SESSION['message'] = "<SCRIPT> alert('Anda tidak memiliki akses!')
        window.location.replace('".baseurl."home/login');
        </SCRIPT>";
        echo $_SESSION['message'];
    }

        $data['judul'] = 'Dashboard Anda';
        $data['guru'] = $this->models('Guru_models')->semuaguru();
        $this->view('templates/header', $data);
        $this->view('guru/index', $data);
        $this->view('templates/footer');
        
    }
}