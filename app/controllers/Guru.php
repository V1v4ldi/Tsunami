<?php
class Guru extends Controller
{
    public function index()
    {
        $data['judul'] = 'Form Register';
        $data['guru'] = $this->models('Guru_models')->semuaguru();
        $this->view('templates/header', $data);
        $this->view('guru/index', $data);
        $this->view('templates/footer');
    }
}