<?php $_SESSION['alamat'] = baseurl.'siswa'; ?>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap');
    * {
      background-image: url("");
      background-repeat: no-repeat;
      background-size: cover;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
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
      letter-spacing: 1px;
      padding: 8px 10px;
      border-radius: 10px;
    }
    nav ul li a:hover {
      color: rgb(10, 10, 239);
      background: #fff;
    }
    nav ul li {
      margin: 0 44px;
    }
    .card-title {
      font-weight: bold;
      font-size: 24px;
    }
    .card-header {
      background: #fff;
      background-color: rgb(120, 164, 245);
      font-weight: bold;
      font-family: Arial, Helvetica, sans-serif;
      color: #fff;
    }
    .welcome-message {
      text-align: center;
      margin: 50px 0;
      font-size: 70px;
      font-weight: bold;
      color: rgb(113, 164, 250);
      transition: transform 0.3s ease;
      cursor: pointer;
    }
    .welcome-message:hover {
      transform: scale(1.2);
    }
    .button-container {
      text-align: center;
      margin: 0 0 20px;
    }
    .btn-secondary1,
    .btn-secondary2 {
      background-color: rgb(249, 156, 193);
      color: #fff;
      border: none;
      padding: 12px 24px;
      border-radius: 8px;
      cursor: pointer;
      font-size: 18px;
      transition: background-color 0.3s ease;
      margin: 10px;
      text-decoration: none;
    }
    .btn-secondary1:hover,
    .btn-secondary2:hover {
      background-color: rgb(229, 106, 147);
    }
  </style>

  <br><br>
  <div class="welcome-message" id="welcomeMessage">Selamat Datang, Siswa!</div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-3">
        <div class="button-container">
          <button class="btn btn-secondary1" data-bs-toggle="collapse" data-bs-target="#profilContent" aria-expanded="false" aria-controls="profilContent">Profil Anda</button>
        </div>
      </div>
      <div class="col-md-3">
        <div class="button-container">
          <button class="btn btn-secondary2" data-bs-toggle="collapse" data-bs-target="#pengumuman" aria-expanded="false" aria-controls="pengumuman">Pengumuman</button>
        </div>
      </div>
    </div>
  </div>
  <br><br>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="collapse" id="profilContent">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-center">Profil Anda</h5>
              <table class="table" style="text-align: center;">
                    <thead>
                      <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">NISN</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><?= $data['siswa']['nama'] ?></td>
                         <td><?= $data['siswa']['jurusan'] ?></td>
                         <td><?= $data['siswa']['nama_kelas'] ?></td>
                         <td><?= $data['siswa']['nisn'] ?></td>
                      </tr>
                    </tbody>
                  </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="collapse" id="pengumuman">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Pengumuman</h5>
              <p class="d-inline-flex gap-1">
                <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Jadwal penggunaan Seragam</a>
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Informasi pembayaran</button>
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Lihat Semua</button>
              </p>
              <div class="row">
                <div class="col">
                  <div class="collapse multi-collapse" id="multiCollapseExample1">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Hari</th>
                        <th scope="col">Seragam</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">Senin</th>
                        <td>Osis</td>
                      
                      </tr>
                      <tr>
                        <th scope="row">Selasa</th>
                        <td>Osis</td>
                      </tr>
                      <tr>
                        <th scope="row">Rabu</th>
                        <td>Batik</td>
                      </tr>
                      <tr>
                        <th scope="row">Kamis</th>
                        <td>Batik</td>
                      </tr>
                    </tbody>
                  </table>
                  </div>
                </div></div>
                <div class="col">
                  <div class="collapse multi-collapse" id="multiCollapseExample2">
                    <div class="card card-body">
                      Anda tidak mempunyai tunggakan pembayaran sekolah. <br> Terimakasih telah membayar dengan tepat waktu.
                    </div>
                  </div>
                </div>
              </div>
              </div>
            </div>
        </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    var login_done = <?= $_SESSION['login_done'] ?>;
    if(login_done == false){
      document.addEventListener('DOMContentLoaded', (event) => {
        const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 3000,
          timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        })
        
        Toast.fire({
          icon: 'success',
          title: 'Signed in successfully'
        })
      });
      <?php $_SESSION['login_done'] = true; ?>
    }
    </script>