<?php 
if(!isset($_SESSION['id']) || $_SESSION['role'] != 'admin')
{
    $_SESSION['message'] = "<SCRIPT> alert('Anda tidak memiliki akses!')
    window.location.replace('".baseurl."admin');
    </SCRIPT>";
    echo $_SESSION['message'];
    unset($_SESSION['message']);
    unset($_SESSION['alamat']);
}