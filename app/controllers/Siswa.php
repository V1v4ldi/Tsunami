<?php
class Siswa extends Controller
{
    public function index()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['siswa'] = $this->models('Siswa_models')->semuasiswa();
        $this->view('templates/dsbheader', $data);
        $this->view('siswa/index', $data);
        $this->view('templates/dsbfooter', $data);
    }
}