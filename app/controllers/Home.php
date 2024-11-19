<?php 
class Home extends Controller{
    public function index()
    {
        $data['judul'] = 'Home';
        $data['lokasi'] = $this->models('Location_models')->semuahistory();
        
        $this->view('templates/home/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/home/footer');
    }
    
    public function berita(){
        $data['judul'] = 'Berita';
        $data['css'] = 'berita1.css';
        $data['lokasi'] = $this->models('Location_models')->semuahistory();


        $this->view('templates/header', $data);
        $this->view('templates/pub-nav-bar', $data);
        $this->view('home/berita', $data);
        $this->view('templates/footer');
    }
    
    public function definisi(){
        $data['judul'] = 'Definisi';
        $data['css'] = 'root1.css';
        $this->view('templates/header', $data);
        $this->view('templates/pub-nav-bar', $data);
        $this->view('home/definisi', $data);
        $this->view('templates/footer');
    }
    
    public function daftar(){
        $data['judul'] = 'Daftar Pencarian';
        $data['css'] = 'daftar.css';
        $data['korban'] = $this->models('User_models')->getAllData();


        $this->view('templates/header', $data);
        $this->view('templates/pub-nav-bar', $data);
        $this->view('home/daftar', $data);
        $this->view('templates/footer');
    }

    public function upload(){
        $data['css']='upload1.css';
        $data['judul']='Upload Korban';
        
        $this->view('templates/header',$data);
        $this->view('home/upload');
        $this->view('templates/footer');
}
}