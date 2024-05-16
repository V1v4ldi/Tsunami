<?php
class Register extends Controller
{
    public function index()
    {
        $data['judul'] = 'Form Register';
        $this->view('templates/regheader', $data);
        $this->view('register/index', $data);
        $this->view('templates/regfooter');
    }

    public function guru()
    {
        $data['judul'] = 'Form Register';
        $this->view('templates/regheader', $data);
        $this->view('register/guru', $data);
        $this->view('templates/regfooter');
    }
    
    public function tambahguru(){
        if ($this->models('Guru_models')->tambahdataguru($_POST) > 0){
            header('Location: ' . baseurl . '/views/guru');
            exit;
        }
        ;}
        
        public function murid()
        {
        $data['judul'] = 'Form Register';
        $this->view('templates/regheader', $data);
        $this->view('register/murid', $data);
        $this->view('templates/regfooter');
        }
    }