
<?php $_SESSION['mapel'] = $data['siswa']['id'] ?>
<?php $_SESSION['alamat'] = baseurl.'siswa/score/'.$_SESSION['mapel']; ?>
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
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .card-title {
        font-weight: bold;
        font-size: 24px;
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
</style>

    <div class="header">
        <h1>NILAI SISWA</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">ATTENTIONS</h5>
                        <p class="card-text">Hasil nilai tersebut adalah nilai akhir, silahkan hubungi guru mapel masing-masing terkait kekeliruan nilai.
                            <br>   Batas waktu untuk protes nilai hanya dua hari setelah pengumuman. <br><br>Terima Kasih
                        </p>
                       
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        
                        <h5 class="card-title">NILAI</h5><br>
                        <table class="table table-striped table-hover">
                            <thead>
                              <tr>
                                <th scope="col">ID Mapel</th>
                                <th scope="col">Mata Pelajaran</th>
                                <th scope="col">Guru Pengampu</th>
                                <th scope="col">Nilai</th>
                              </tr>
                            </thead>
                        
                            <tbody>
                                <?php 
                                    // Sort the data array by 'id_mapel' in ascending order
                                    usort($data['nilai'], function($a, $b) {
                                        return $a['id_mapel'] - $b['id_mapel'];
                                    });
                                ?>

                                <?php foreach($data['nilai'] as $hasil): ?>
                                    <tr>
                                        <th scope="row"><?= $hasil['id_mapel'] ?></th>
                                        <td><?= $hasil['pelajaran'] ?></td>
                                        <td><?= $hasil['pengajar'] ?></td>
                                        <td><?= $hasil['nilai_akhir']?></td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>