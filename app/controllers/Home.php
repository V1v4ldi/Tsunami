<?php 
class Home extends Controller{
    public function index()
    {
        $data['judul'] = 'Home';
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }

    public function login()
    {
        $data['judul'] = 'Halaman Login';
       
        $this->view('templates/header', $data);
        $this->view('home/login', $data);
        $this->view('templates/footer');

        
    }

    public function logincek()
    {
        if($this->models('Login_models')->ceklogin($_POST) == false){
          alert('Email atau Password Salah');
        }
    }
}