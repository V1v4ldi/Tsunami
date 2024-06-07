<?php $_SESSION['alamat'] = baseurl."guru/nilai"; ?>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');
    
    * {
        background-repeat: no-repeat;
        background-size: cover;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Roboto', sans-serif;
    }

    nav {
        height: 80px;
        background: rgb(113, 164, 250); 
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px 50px 0 100px;
        width: 100%;
    }

    nav .logo {
        color: #fff;
        font-size: 30px;
        font-weight: bold;
    }

    nav ul {
        display: flex;
        list-style: none;
    }

    nav ul li a {
        color: #fff;
        text-decoration: none;
        font-size: 20px;
        font-weight: 400;
        letter-spacing: 1px;
        padding: 8px 15px;
        border-radius: 10px;
    }

    nav ul li a:hover {
        color: rgb(10, 10, 239);
        background: #fff;
    }

    nav ul li {
        margin: 0 20px;
    }

    .header {
        text-align: center;
        margin-top: 20px;
    }

    .header h1 {
        font-weight: bold;
        font-size: 36px;
    }

    .card {
        margin-top: 20px;
        border-radius: 30px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 1200px;
    }

    .card-title {
        font-weight: bold;
        font-size: 30px;
        text-align: center;
    }

    .card-text {
        font-size: 18px;
    }

    .btn-primary {
        background-color: rgb(10, 10, 239);
        border: none;
    }

    .btn-primary:hover {
        background-color: #0000FF;
    }
    nav ul li a:hover{
  color: rgb(10, 10, 239);
  background: #fff;
}
nav ul li{
  margin: 0 44px;
}

</style>


<div class="header">
        <h1>NILAI SISWA</h1>
    </div>

    <div class="container">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        
                        <h5 class="card-title"></h5><br>
                        <table class="table table-striped table-hover" style="text-align:center">
                            <thead>
                              <tr>
                                <th scope="col">1</th>
                                <th scope="col">Nama Siswa</th>
                                <th scope="col">Kelas</th>
                                <th scope="col" >Nilai (Rata-Rata)</th>
                                <th scope="col">Update Nilai</th>
                               
                              </tr>
                            </thead>
                            <tbody class="table-group-divider">
                            <tbody>
                                <?php foreach($data['nilai'] as $nilai) : ?>
                              <tr>
                                <th scope="row">1</th>
                                <td><?=$nilai['nama_siswa']?></td>
                                <td><?=$nilai['nama_kelas'] ?></td>
                                <td><?=$nilai['nilai_akhir']?></td>
                                <td><a href="<?=baseurl.'Guru/formedit/'.$nilai['id_mapel'].'/'.$nilai['id_murid']?>">
                                    <button type="button" class="btn btn-outline-primary">Edit Nilai</button></td>
                                    </a>
                              </tr>
                                <?php endforeach; ?>
                            </tbody>
                          </table>
                          <br>
                          <div class="mb-6 row text-center">
                            <div class="col">
                            
                         
                    </div>
                </div>
            </div>
        </div>
    </div></div>