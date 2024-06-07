<?php
if(!isset($_SESSION['role'])){
    $_SESSION['message'] = "<SCRIPT> alert('Anda harus login terlebih dahulu!')
    window.location.replace('".baseurl."home/login');
    </SCRIPT>";
    echo $_SESSION['message'];
    unset($_SESSION['message']);
    unset($_SESSION['alamat']);
}
else if(!isset($_SESSION['id']) || $_SESSION['role'] != 'siswa')
{
    $_SESSION['message'] = "<SCRIPT> alert('Anda tidak memiliki akses!')
    window.location.replace('".$_SESSION['alamat']."');
    </SCRIPT>";
    echo $_SESSION['message'];
    unset($_SESSION['message']);
    unset($_SESSION['alamat']);
}