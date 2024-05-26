<?php
class Admin extends Controller{
    public function index()
    {
        session_start();
    $id = $_SESSION['id'];
    $data['judul'] = 'Dashboard Admin';
    $data['admin'] = $this->models('Admin_models')->adminbyid($id);
    $data['siswa'] = $this->models('Siswa_models')->semuasiswa();
    $data['guru'] = $this->models('Guru_models')->semuaguru();
    $this->view('templates/dsbheader', $data);
    $this->view('admin/index', $data);
    $this->view('templates/dsbfooter');
    }

}