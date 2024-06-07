<?php
class Register extends Controller
{

    public function guru()
    {
        $data['judul'] = 'Form Register Guru';
        $this->view('templates/register/regheader', $data);
        $this->view('register/guru', $data);
        $this->view('templates/register/regfooter');
    }
    
    public function tambahguru(){
        if ($this->models('Guru_models')->tambahdataguru($_POST) > 0){
            header('Location: ' . baseurl );
            exit;
        }
        ;}
        
        public function murid()
        {
        $data['judul'] = 'Form Register Murid';
        $this->view('templates/register/regheader', $data);
        $this->view('register/murid', $data);
        $this->view('templates/register/regfooter');
        }

        public function tambahmurid(){
        if ($this->models('Siswa_models')->tambahdatasiswa($_POST) > 0){
            header('Location: ' . baseurl );
            exit;
        }
    ;}
}