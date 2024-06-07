<?php 
class Home extends Controller{
    public function index()
    {
        session_start();
        session_destroy();
        
        $data['judul'] = 'Home';
        $this->view('templates/home dan login/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/home dan login/footer');
    }

    public function login()
    {    
        session_start();
        session_destroy();

        $data['judul'] = 'Halaman Login';
        $this->view('templates/home dan login/header', $data);
        $this->view('home/login', $data);
        $this->view('templates/home dan login/footer');
    }

    public function logincek()
    {
        session_start();
        $role = $this->models('Login_models')->ceklogin($_POST);

        if ($role){

            if($role == 'admin'){
                header('Location: ' . baseurl . 'admin');
                exit;
            }
            elseif($role == 'pengajar'){
                header('Location: ' . baseurl . 'guru');
                exit;  
            }
            elseif($role == 'siswa'){
                header('Location: ' . baseurl . 'siswa');
                exit;
            }
            elseif(isset($role['error'])) {
                $_SESSION['error'] = $role['error'];
                echo $_SESSION['error'];
                unset($_SESSION['error']);
            }
        }
    }
}