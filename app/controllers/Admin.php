<?php
class Admin extends Controller{
    public function index()
    {
        session_start();
        session_destroy();
        $data['judul'] = 'Halaman Login';
        $data['css'] = 'login.css';
        
    $this->view('templates/header',$data);
    $this->view('admin/index');
    $this->view('templates/footer');
}

public function dashboard()
{
    session_start();
    if(!isset($_SESSION['role']) || $_SESSION['role'] != 'admin'){
            header('Location: '.baseurl .'admin');
            exit;
        }
        $data['judul'] ='Dashboard';
        $data['css'] ='root1.css';
        $data['korban'] = $this->models('User_models')->getAllData();

        $id=$_SESSION['id'];
        
        $data['admin'] = $this->models('Admin_models')->adminbyid($id);
        
        $this->view('templates/header',$data);
        $this->view('templates/nav-bar-admin');
        $this->view('admin/dashboard',$data);
        $this->view('templates/footer');
        
    }

    public function logincek()
    {
        session_start();
        $role = $this->models('Login_models')->ceklogin($_POST);

        if ($role == 'admin'){
                header('Location: ' . baseurl . 'admin/dashboard');
                exit;
            }
        }
    public function tambahdata()
    {
        $nama = $_POST['nama'];
        $jk = $_POST['jk'];
        $alamat = $_POST['alamat'];
        $hubungi = $_POST['hubungi'];
        $lokhilang = $_POST['lok-hilang']; 

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

        if ($_FILES["image"]["size"] > 5242880) { 
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
                $userModel->saveData($nama, 'PrvImg/' . basename($_FILES["image"]["name"]), $jk, $alamat, $hubungi, $lokhilang);

                header('Location: ' . baseurl . 'home/daftar');
                exit;
            } else {
                echo "Maaf, terjadi kesalahan saat mengunggah file Anda.";
            }
        }
    }


    public function update(){
        $id = $_POST['id_hilang'];
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $jk = $_POST['jk'];
            $hubungi = $_POST['hubungi'];
            $lokHilang = $_POST['lok-hilang'];
            $status = $_POST['status'];


            $userModel = $this->models('User_models');
            $userModel->updateData($id, $nama, $alamat, $jk, $hubungi, $lokHilang, $status);


            header('Location: ' . baseurl . 'admin/dashboard');
            exit;
    }

    public function hapus($id)
    {
        if ($this->models('User_models')->hapus($id) > 0) {
            header('Location: ' . baseurl . 'admin/dashboard');
            exit;
        }
    }
    
    public function lokasi()
    {
        session_start();
        if(!isset($_SESSION['role']) || $_SESSION['role'] != 'admin'){
            header('Location: '.baseurl .'admin');
            exit;
        }
        $data['judul'] = 'Upload Tsunami';
        $data['css'] = 'upload1.css';
        
    $this->view('templates/header',$data);
    $this->view('admin/lokasi');
    $this->view('templates/footer');
    }

    public function tambahlokasi(){
        session_start();

        $Sumber = $_POST['Sumber'];
        $latitude = $_POST['latitude'];
        $longitude = $_POST['longitude'];
        $Tanggal = $_POST['Tanggal'];
        $waktu = $_POST['waktu'];
        $magnitudo = $_POST['magnitudo'];

        if ($this->models('Location_models')->plstsunami($Sumber, $Tanggal, $waktu, $latitude, $longitude, $magnitudo) > 0){
            header('Location: ' . baseurl.'home/' );
            exit;
        }
    }
}