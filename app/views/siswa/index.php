<?php require_once '../app/config/ceksiswa.php';?>
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
nav ul li a:hover{
  color: rgb(10, 10, 239);
  background: #fff;
}
nav ul li{
  margin: 0 44px;
}
.card-title {
        font-weight: bold;
        font-size: 24px;
    }
  </style>

  <br><br>
  <div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">ATTENTIONS</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero asperiores unde nihil nulla nesciunt saepe ducimus, labore reprehenderit voluptatibus, quibusdam laudantium ipsa quisquam iste consequuntur officiis recusandae sequi sed. Maiores! <br><br>Terima Kasih
                    </p>
                   
                </div>
            </div>
        </div>
        <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
         <h5 class="card-title">ATTENTIONS</h5><br>
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
                <tr>
                  <th scope="row">Jumat</th>
                  <td>Pramuka</td>
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