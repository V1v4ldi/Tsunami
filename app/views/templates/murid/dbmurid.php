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
      <li><a href="<?=baseurl ?>Siswa">Home</a></li>
      <li><a href="<?=baseurl ?>Siswa/schedule/<?= $data['siswa']['kelas'] ?>">Jadwal</a></li>
      <li><a href="<?=baseurl?>Siswa/score/<?= $data['siswa']['id'] ?>">Nilai</a></li>
      <li><a href="<?=baseurl?>">Logout</a></li>
      </ul>
</nav>
