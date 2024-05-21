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
        if(isset($_SESSION['id'])){
            session_destroy();
            session_start();
        }
            

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