<!doctype html>
<html style="scroll-behavior: smooth;" class="no-js" lang="zxx">
    <head>
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keywords" content="Site keywords here">
        <meta name="description" content="">
        <meta name='copyright' content=''>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- Title -->
        <title><?=$data['judul']?></title> 
        <link rel="stylesheet" href="<?=baseurl?>css/root1.css">
        
        <!-- Favicon -->
        <link rel="icon" href="<?=baseurl?>img/REMOVE.svg"> 
	
        
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?=baseurl?>css/bootstrap.min.css">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="<?=baseurl?>css/nice-select.css">
        <!-- Font Awesome CSS -->
        <link rel="stylesheet" href="<?=baseurl?>css/font-awesome.min.css">
        <!-- icofont CSS -->
        <link rel="stylesheet" href="<?=baseurl?>css/icofont.css">
        <!-- Slicknav -->
        <link rel="stylesheet" href="<?=baseurl?>css/slicknav.min.css">
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="<?=baseurl?>css/owl-carousel.css">
        <!-- Datepicker CSS -->
        <link rel="stylesheet" href="<?=baseurl?>css/datepicker.css">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="<?=baseurl?>css/animate.min.css">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="<?=baseurl?>css/magnific-popup.css">
        
        <!-- Medipro CSS -->
        <link rel="stylesheet" href="<?=baseurl?>css/normalize.css">
        <link rel="stylesheet" href="<?=baseurl?>css/style.css">
        <link rel="stylesheet" href="<?=baseurl?>css/responsive.css">
        
        <!-- Peta -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
        <script>var baseurl = '<?=baseurl?>';</script>
        <script src="<?=baseurl?>js/maps.js"></script>
        <style>
            #map {
                width: 100%;
                height: 450px;
            }
        </style>
    </head>
    <body>
	
<!-- Preloader -->
<div class="preloader">
            <div class="loader">
                <div class="loader-outter"></div>
                <div class="loader-inner"></div>

                <div class="indicator"> 
                    <svg width="16px" height="12px">
                        <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                        <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                    </svg>
                </div>
            </div>
        </div>

    <header>    
        <nav class="nav-bar">
            <div class="logo-title">
                <img src="<?=baseurl?>img/REMOVE.svg" class="logo">
                <span class="nav-title">Tsunami Coordination System</span>
            </div>
            <div class="nav-txt-frame">
                <a href="<?=baseurl ?>home" class="txt-nav">Home</a>
                <a href="<?=baseurl ?>home/definisi" class="txt-nav">Tentang Tsunami</a>
                <a href="<?=baseurl ?>home/berita" class="txt-nav">Berita Tsunami</a>
                <a href="<?=baseurl ?>home/daftar" class="txt-nav">Daftar Pencarian</a>
            </div>
        </nav>
    </header>