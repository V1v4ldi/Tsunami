<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul'] ?></title>
    <link rel="stylesheet" href="<?= baseurl; ?>css/bootstrap.css">
</head>
<body>
<nav>
    <div class="logo">SMA VETERAN</div>
    <ul>
      <li><a href="<?=baseurl ?>Guru">Home</a></li>
      <li><a href="<?=baseurl ?>Guru/jadwal/<?= $data['guru']['id_pelajaran'] ?>">Jadwal</a></li>
      <li><a href="<?=baseurl?>Guru/nilai/<?= $data['guru']['id'] ?>">Nilai</a></li>
      <li><a href="<?=baseurl?>">Logout</a></li>
      </ul>
</nav>
