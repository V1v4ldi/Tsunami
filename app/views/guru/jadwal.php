<?php require_once '../app/config/cekguru.php';?>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap');
  *{
    
    background-repeat: no-repeat;
  background-size:cover;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'poppins', sans-serif;

  }
  nav{
   height: 80px;
   background: rgb(113, 164, 250); 
   display: flex;
   align-items: center;
   justify-content: space-between;
   padding: 10px 50px 0 100px;
   width: 100%;
  }
  nav .logo{
    color: #fff;
    font-weight: 600px;
    font-size: 30px;
     font-weight: bold;
  }
  nav ul{
    display: flex;
    list-style: none;
  }
nav ul li a{
color: #fff;
text-decoration: none;
font-size: 20px;
font-weight: 400px;
letter-spacing: 1px;
padding: 8px 10px;
border-radius: 10px;


}
html, body {
        width: 100%;
        height: 100%;
      }
nav ul li a:hover{
color: rgb(10, 10, 239);
background: #fff;
}
nav ul li{
margin: 0 44px;
}
.card{
  padding: 10px 20px;
  margin: 10px;
  width: 1300px;
  align-self: center;
  align-items: center;
  
}
body{
  display: flex;
  flex-direction: column;
  align-items: center;  
      }
.header{
  text-align: center;
}
.header h1{
  font-weight: bold;
}

</style>


<br><br>
<div class="header">
  <h1>JADWAL <?= $data['guru']['nama']; ?></h1>
 <br><br>
  <div class="card">
    <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th scope="col">ID Mapel</th>
        <th scope="col">Mata Pelajaran</th>
        <th scope="col">Hari</th>
        <th scope="col">Waktu</th>
        <th scope="col">Kelas</th>
        
      </tr>
    </thead>
    <tbody>
        <?php foreach($data['jadwal'] as $jadwal): ?>
      <tr>
        <th scope="row"><?= $jadwal['id_mapel']; ?></th>
        <td><?= $jadwal['mapel']; ?></td>
        <td><?= $jadwal['hari']; ?></td>
        <td><?= $jadwal['awal']; ?> - <?= $jadwal['akhir']; ?></td>
        <td><?= $jadwal['nama_kelas']; ?></td>
      </tr>
      <?php endforeach?>
    </tbody>
  </table></div>
