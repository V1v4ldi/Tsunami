<?php
class Admin extends Controller{
    public function index()
    {
        session_start();
        session_destroy();
        $data['judul'] = 'Halaman Login';
        $data['css'] = 'login.css';

    $this->view('templates/admin/dbadmin',$data);
    $this->view('templates/komponen/bootstrap',$data);
    $this->view('admin/index');
    $this->view('templates/admin/ftadmin');
    $this->view('templates/komponen/jees');
}

    public function dashboard()
    {
        session_start();
        if (!isset($_SESSION['role'])) {
            header('Location: ' . baseurl . 'admin');
            exit;
        }
    $data['judul'] ='Dashboard';
    $data['css'] ='root2.css';
    $data['korban'] = $this->models('User_models')->getAllData();

    $this->view('templates/admin/dbadmin',$data);
    $this->view('templates/komponen/bootstrap',$data);
    $this->view('templates/komponen/nav-bar-admin');
    $this->view('admin/dashboard',$data);
    $this->view('templates/admin/ftadmin');
    $this->view('templates/komponen/jees');
}

public function upload(){
    $data['css']='uploadform.css';
    $data['judul']='Upload Korban';

    $this->view('templates/admin/dbadmin',$data);
    $this->view('templates/komponen/bootstrap',$data);
    $this->view('admin/upload');
    $this->view('templates/admin/ftadmin');
    $this->view('templates/komponen/jees');
    }

    public function logincek()
    {
        session_start();
        $role = $this->models('Login_models')->ceklogin($_POST);

        if ($role == 'admin'){
            $_SESSION['role'] = 'admin';
                header('Location: ' . baseurl . 'admin/dashboard');
                exit;}
        else{
            $_SESSION['error'] = $role['error'];
                echo $_SESSION['error'];
                unset($_SESSION['error']);
        }
    }
    public function tambahdata()
    {
        session_start();
        if (!isset($_SESSION['role'])) {
            header('Location: ' . baseurl . 'admin');
            exit;
        }

        
        $nama = $_POST['nama'];
        $jk = $_POST['jk'];
        $alamat = $_POST['alamat'];
        $hubungi = $_POST['hubungi'];

        
        if (!isset($_FILES['image']) || $_FILES['image']['error'] != UPLOAD_ERR_OK) {
            echo "Maaf, terjadi kesalahan saat mengunggah file.";
            return;
        }

        $target_dir = imgkrb_path . '/'; 
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            echo "File bukan gambar.";
            $uploadOk = 0;
        }


        if (file_exists($target_file)) {
            echo "Maaf, file sudah ada.";
            $uploadOk = 0;
        }

        if ($_FILES["image"]["size"] > 1500000) { 
            echo "Maaf, file Anda terlalu besar.";
            $uploadOk = 0;
        }

        
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "Maaf, hanya file JPG, JPEG, PNG & GIF yang diperbolehkan.";
            $uploadOk = 0;
        }


        if ($uploadOk == 0) {
            echo "Maaf, file Anda tidak terunggah.";

        } else {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                echo "File ". htmlspecialchars(basename($_FILES["image"]["name"])). " telah diunggah.";
                
                $userModel = $this->models('User_models');
                $userModel->saveData($nama, imgkrb . '/' . basename($_FILES["image"]["name"]), $jk, $alamat, $hubungi);
                header('Location: ' . baseurl . 'admin/dashboard');
                exit;
            } else {
                echo "Maaf, terjadi kesalahan saat mengunggah file Anda.";
            }
        }
    }
}
