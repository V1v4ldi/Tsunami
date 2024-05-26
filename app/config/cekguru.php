<?php
if(!isset($_SESSION['id']) || $_SESSION['role'] != 'pengajar')
{
    $_SESSION['message'] = "<SCRIPT> alert('Anda tidak memiliki akses!')
    window.location.replace('".baseurl."home');
    </SCRIPT>";
    echo $_SESSION['message'];
}