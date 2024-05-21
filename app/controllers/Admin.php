<?php
class Admin extends Controller{
    public function index()
    {
    session_start();
    if(!isset($_SESSION['id']) || $_SESSION['role'] != 'admin')
    {
        $_SESSION['message'] = "<SCRIPT> alert('Anda tidak memiliki akses!')
        window.location.replace('".baseurl."home/login');
        </SCRIPT>";
        echo $_SESSION['message'];
    }

        $data['judul'] = 'About';
        $this->view('templates/header', $data);
        $this->view('admin/index', $data);
        $this->view('templates/footer');
    }
}