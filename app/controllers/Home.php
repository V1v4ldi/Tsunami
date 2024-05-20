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
        $this->view('home/login');
        $this->view('templates/footer');

        
    }

    public function cek()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

    // Inisialisasi model
    $this->userModel = $this->model('User_Model');

    // Verifikasi pengguna
    $role = $this->userModel->verifyUser($email, $password);

    if ($role) {
        // Jika verifikasi berhasil, arahkan pengguna ke halaman yang sesuai dengan role mereka
        if ($role == 'admin') {
            header('Location: /admin/dashboard');
        } elseif ($role == 'guru') {
            header('Location: /guru/dashboard');
        } else { // murid
            header('Location: /murid/dashboard');
        }
    } else {
        // Jika verifikasi gagal, tampilkan pesan error
        // ...
    }
    }
}